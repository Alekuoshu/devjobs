<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (Auth::guard('web')->check()) {
            if (session('redirect_url') && auth()->user()->rol === 1 && $request->user()->hasVerifiedEmail()) {
                $redirect_url = session('redirect_url');
                session()->forget('redirect_url');
            }
            return (isset($redirect_url) && $redirect_url)
                ? redirect()->intended($redirect_url)
                : view('home.index');
        } else {
            return view('home.index');
        }
    }
}
