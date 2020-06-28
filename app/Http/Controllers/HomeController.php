<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome']]);
        $this->middleware('guest', ['only' => ['welcome']]);
    }

    /**
     * Show the landing page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = auth()->user()->campaigns;

        return view('home', compact('data'));
    }

    /**
     * User profile page
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * Update user profile
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Route\Router
     */
    public function update(Request $request)
    {
        switch($request->save):
            case 'username':
                $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.auth()->user()->id,
                ]);
                auth()->user()->update(['name' => $request->name, 'email' => $request->email]);
            break;
            case 'password':
                $this->validate($request, [
                    'password' => 'required|min:8',
                ]);
                auth()->user()->update(['password' => bcrypt($request->password)]);    
            break;
            default:
                return abort(404);
            break;
        endswitch;

        session()->flash('success', __('general.updated_profile'));
        return redirect()->back();
    }
}