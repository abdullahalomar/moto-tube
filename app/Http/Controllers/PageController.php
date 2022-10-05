<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.index');
    }

    public function submission()
    {
        return view('Pages.modals.submission');
    }

    public function service()
    {
        return view('Pages.modals.service');
    }

    public function sendVideo()
    {
        return view('Pages.send_video');
    }
}
