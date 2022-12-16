<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //  //取得所有前台傳入的資料
        // $data['options'] = implode(',', $data['options']);

        $data = $request->all();
        //1.以data取得所有資料
        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $data['pic'] = $filename;
                //2.特別把data中的pic抓出來定義
                $path = $file->storeAs('public/pic', $filename); //儲存至指定目錄
                // 在'storage\app\public\pic\'裡，還有實際存在'D:\xampp8\htdocs\web111b\blog\storage\app\public\pic\'裡
            }
        }
        // return $request->except('_token');

        // $data = $request->except('_token');
        // return $data; //取得所有前台傳入的資料

        return $data;
        //3.這就能出現完整上傳檔案的檔名

//return $request->all();
//返回到index頁面
        return redirect(url('posts/' . 1));

    }

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function relaCgy($cgy_id)
    {
        $article = Article::find($cgy_id)->cgy->subject;
        dd($article);

        // return 'ok';

    }
}