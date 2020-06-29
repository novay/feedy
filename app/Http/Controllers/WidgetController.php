<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Response;

class WidgetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Campaign $data, Response $response)
    {
        $this->middleware('auth', ['only' => ['view']]);

        $this->data = $data;
        $this->response = $response;
    }

    /**
     * Show the standalone feedback page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function view($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view('widget.standalone', compact('data'));
    }

    /**
     * Generate javascript for embed.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function script($uuid)
    {
        $data = $this->data->uuid($uuid)->firstOrFail();

        $rating = $data->enable_rating ? "<div class='lw-title lw-title_sm lw-mb-sm rateTitle'>".__('general.rate_exp')."</div><div class='lw-tags lw-mb-sm emojiContainer'><div class='lw-tags-item lw-active' id='rateFive' title='Amazing' style='padding:10px'><img src='".env('FD_EMOJI_AMAZING')."' width='30'></div><div class='lw-tags-item' id='rateFour' title='Great' style='padding:10px'><img src='".env('FD_EMOJI_GREAT')."' width='30'></div><div class='lw-tags-item' id='rateThree' title='OK' style='padding:10px'><img src='".env('FD_EMOJI_OK')."' width='30'></div><div class='lw-tags-item' id='rateTwo' title='Bad' style='padding:10px'><img src='".env('FD_EMOJI_BAD')."' width='30'></div><div class='lw-tags-item' id='rateOne' title='Terrible' style='padding:10px'><img src='".env('FD_EMOJI_TERRIBLE')."' width='30'></div></div><input type='text' name='rate' id='rateValue' value='5' hidden>" : '';
        $email = $data->enable_email ? "placeholder='".__('general.email')."*' required" : "placeholder='".__('general.email')."'";
        $position = $data->widget_position == 'Left' ? 'left:40px' : 'right:40px';

        $widget  = 'lw-widget_'.strtolower($data->widget_type);
        $widget .= $data->widget_position == 'Left' ? ' widget-left ' : '';

        $script = "<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,600,700' rel='stylesheet'><link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' rel='stylesheet'> <script type='text/javascript' src='".asset('assets/dashboard/js/vendors/jquery-3.2.1.min.js')."'></script> <link rel='stylesheet' media='all' href='".asset('assets/dashboard/css/editor.css')."'><style>.feedbackFloat{background-color:".$data->widget_color."}.widget-left{left:0;}</style><div class='lw-widget ".$widget."' id='feedbackWidget'><div class='lw-overlay' data-lw-close></div><div class='lw-container lw-container_md'><div class='lw-item' style='--theme-color: ".$data->widget_color."'> <button class='lw-close' data-lw-close> <i class='fa fa-times closeIcon'></i> </button><div class='lw-wrap lw-p-lg'><div id='widgetHeader'><div class='lw-logo lw-logo_icon lw-mb-md iconBlock'><div class='lw-preview'> <i class='far fa-envelope faIcon'></i></div></div><div class='lw-title lw-title_lg widgetTitle'>".$data->title."</div><div class='lw-content lw-mb-sm widgetSubtitle'>".$data->subtitle."</div></div><div id='response'><form id='feedbackForm'><input type='hidden' name='_token' value='".csrf_token()."'><input type='text' name='feedbackId' value='".$data->uuid."' hidden>".$rating."<div class='lw-mb-md'><div class='lw-field lw-mb'><div class='lw-icon'><i class='fas fa-envelope'></i></div> <input class='lw-input' type='email' name='email' ".$email."></div><div class='lw-field'><textarea class='lw-textarea' name='message' placeholder='".__('general.tell_us')."' required></textarea></div></div> <button type='submit' id='feedbackSubmit' class='lw-btn lw-btn_wide'>".__('general.send_feedback')."</button></form></div></div></div></div></div><div class='feedbackFloat' id='feedbackFloat' data-lw-onclick='#feedbackWidget' style='".$position."'> <i class='fas fa-comment feedbackIcon' data-lw-onclick='#feedbackWidget'></i><p data-lw-onclick='#feedbackWidget'>".$data->widget_button."</p></div> <script>var postUrl='".route('widget.submit', $data->uuid)."';</script> <script type='text/javascript' src='".asset('assets/dashboard/js/feedy.js')."'></script>";
    	
        $response = response()->make(view()->make('widget.script', compact('data', 'script')), 200);
        $response->header('Content-Type', 'application/javascript');
        return $response;
    }

    /**
     * Submit feedback from users or guests.
     *
     * @param \Illuminate\Http\Request
     * @param String $uuid
     * @return \Illuminate\Support\Facades\Route
     */
    public function submit(Request $request, $uuid)
    {
        $data = $this->data->uuid($request->feedbackId)->firstOrFail();
        $this->response->create([
            'campaign_id' => $data->id, 
            'name' => null, 
            'email' => $request->email, 
            'message' => $request->message, 
            'rate' => $request->rate, 
            'ip' => $request->ip()
        ]);

        return "<div class='lw-title lw-title_lg lw-center' style='margin-top:.5em;margin-bottom:.5em'>{$data->confirm_title}</div><div class='lw-content lw-center lw-mb'>{$data->confirm_subtitle}</div>";
    }
}
