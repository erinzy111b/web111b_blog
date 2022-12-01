<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

// 第一種寫法：直接把規則放在這裡

    // public function store(Request $request)
    // {$validator = Validator::make($request->all(), [
    //     'title' => 'required|max:10',
    //     'price' => 'required|numeric|min:0',
    //     // numeric數值 / integer整數
    //     'desc' => 'max:200',
    // ]);

    //     if ($validator->fails()) {
    //         return $validator;
    //     }

    //     return 'ok';
    // }

// 第二種寫法：把規則丟在Http/Requests/PostRequest裡

    public function store(PostRequest $request)
    {
        return $request;
    }

// 記得定義位置；
// 規則若規定不可空值，用POSTMAN測試時少任何一個KEY和KEY的值，
// 都會錯誤（但仍正常連通html頁面）

    // {

    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required | max:10',
    //         'desc' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return $validator;
    //     }
    //     return 'ok';
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}