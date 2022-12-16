<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Throwable;

class PostController extends Controller
{

    //用於生成 JSON 字串
    private function makeJson($status, $data, $msg)
    {
        //轉 JSON 時確保中文不會變成 Unicode
        return response()->json(['status' => $status, 'data' => $data, 'message' => $msg])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    public function index()
    {
        $posts = Post::get();

        if (isset($posts) && count($posts) > 0) {
            $data = ['posts' => $posts];
            return $this->makeJson(1, $data, null);
        } else {
            return $this->makeJson(0, null, '找不到任何文章');
        }
    }

    public function show(Request $request, $id)
    {
        $post = Post::find($id);

        if (isset($post)) {
            $data = ['post' => $post];
            return $this->makeJson(1, $data, null);
        } else {
            return $this->makeJson(0, null, '找不到該文章');
        }

    }

    public function store(Request $request)
    {
        // $input = ['title' => $request->title, 'content' => $request->content];
        $input = $request->only(['title', 'pic', 'status', 'content', 'sort', 'enabled']);
        $post = Post::create($input);

        if (isset($post)) {
            $data = ['post_id' => $post->id];
            return $this->makeJson(1, $data, '新增文章成功');
        } else {
            return $this->makeJson(0, null, '新增文章失敗');
        }

    }

    public function update(Request $request, $id)
    {
        // return '999';
        try {
            $post = Post::findOrFail($id);
            // $post->title = $request->title;
            // $post->content = $request->content;
            // $post->pic = $request->pic;
            // $post->save();

            $input = $request->only(['title', 'pic', 'status', 'content', 'sort', 'enabled']);
            // $input = $request->only(['title']);
            if ($input['enabled'] == '1') {
                $input['enabled'] = true;
            } else {
                $input['enabled'] = false;
            }
            $post->update($input);

        } catch (Throwable $e) {
            //更新失敗
            return $this->makeJson(0, null, '更新文章失敗');
        }

        $data = ['post_id' => $post->id];
        return $this->makeJson(1, $data, '更新文章成功');
    }

    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();
        } catch (Throwable $e) {
            //刪除失敗
            return $this->makeJson(0, null, '刪除文章失敗');
        }
        return $this->makeJson(1, null, '刪除文章成功');
    }

//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */

// // 第一種寫法：直接把規則放在這裡

//     // public function store(Request $request)
//     // {$validator = Validator::make($request->all(), [
//     //     'title' => 'required|max:10',
//     //     'price' => 'required|numeric|min:0',
//     //     // numeric數值 / integer整數
//     //     'desc' => 'max:200',
//     // ]);

//     //     if ($validator->fails()) {
//     //         return $validator;
//     //     }

//     //     return 'ok';
//     // }

// // 第二種寫法：把規則丟在Http/Requests/PostRequest裡

//     public function store(PostRequest $request)
//     {
//         return $request;
//     }

// // 記得定義位置；
// // 規則若規定不可空值，用POSTMAN測試時少任何一個KEY和KEY的值，
// // 都會錯誤（但仍正常連通html頁面）

//     // {

//     //     $validator = Validator::make($request->all(), [
//     //         'title' => 'required | max:10',
//     //         'desc' => 'required',
//     //     ]);

//     //     if ($validator->fails()) {
//     //         return $validator;
//     //     }
//     //     return 'ok';
//     // }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}