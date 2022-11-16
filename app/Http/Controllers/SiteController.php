<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function hello()
    {
        return 'Hello Hell';
    }

    public function scroll()
    {
        return view('scroll');
    }

    public function gallery01()
    {
        return view('gallery01');
    }

    public function scroll02()
    {
        return view('scroll02');
    }

    public function room()
    {
        return view('room');
    }
}