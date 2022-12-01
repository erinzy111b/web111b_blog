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
        //增加圖片連結路徑在這
        return view('googoodgod.gallery_son');
    }

    public function menu()
    {
        return view('miniblog.menu_son');
    }

    public function login_()
    {
        return view('miniblog.login');
    }

    public function p1()
    {
        return view('miniblog.page.p01');
    }

    // public function aaaa(Request $request)
    // {
    //     $input = $request->all();
    // }

}
