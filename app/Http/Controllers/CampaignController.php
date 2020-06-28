<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Response;
use Ramsey\Uuid\Uuid;

use App\Exports\ResponseExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Campaign $data, Response $response)
    {
        $this->middleware('auth');

        $this->data = $data;
        $this->response = $response;
    }

    /**
     * Create a new feedback.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $uuid = Uuid::uuid1()->toString();
        $create = $this->data->updateOrCreate(['uuid' => $uuid], [
            'name' => $request->name, 
            'user_id' => auth()->user()->id 
        ]);

        return redirect(route('campaign.editor', $create->uuid));
    }
    
    /**
     * Show the confirmation editor page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function editor($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view('campaign.editor', compact('data'));
    }

    /**
     * Show list of responses page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function responses($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view('campaign.responses', compact('data'));
    }

    /**
     * Show the integrations page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function integrations($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view('campaign.integrations', compact('data'));
    }

    /**
     * Show the privacy page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function privacy($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view('campaign.privacy', compact('data'));
    }

    /**
     * Enabled/disabled of feedback privacy.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function changePrivacy(Request $request, $uuid)
    {
        $data = $this->data->uuid($uuid)->firstOrFail();
        $data->update(['private' => $data->private ? 0 : 1]);

        return redirect()->back();
    }

    

    /**
     * Show the data manager page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function data($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view('campaign.data', compact('data'));
    }

    /**
     * Show the delete confirmation campaign.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function delete($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

    	return view('campaign.delete', compact('data'));
    }

    /**
     * Export responses list to CSV.
     *
     * @param Illuminate\Http\Request
     * @param String $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function export(Request $request, $uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        $output = '';
        foreach ($data->responses as $row):
            $output .= implode(",",$row->toArray());
        endforeach;
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="'.date('Y-m-d').'-'.Str::slug($data->name).'.csv"'
        ];

        return response()->make(rtrim($output, "\n"), 200, $headers);
    }

    /**
     * Delete the campaign.
     *
     * @param Illuminate\Http\Request
     * @param String $uuid
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deleteCampaign(Request $request, $uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();
        foreach($data->responses as $temp):
            $temp->delete();
        endforeach;
        $data->delete();

        session()->flash('success', __('general.deleted_feedback'));
    	return redirect(route('home'));
    }

    /**
     * Delete a response.
     *
     * @param Illuminate\Http\Request
     * @param String $uuid
     * @param String $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deleteResponse($uuid, $id)
    {
    	$data = $this->response->findOrFail($id);
        $data->delete();
    	
        session()->flash('success', __('general.deleted_response'));
    	return redirect()->back();
    }
}