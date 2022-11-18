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

    public function gallery()
    {
        return view('gallery');
    }

    public function test()
    {
        $name = 'TEST';
        return view('test._test', compact('name'));
    }

    public function testgallery()
    {
        //增加
        return view('googoodgod.son');
    }

}