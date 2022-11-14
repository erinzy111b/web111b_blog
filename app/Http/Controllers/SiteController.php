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

}