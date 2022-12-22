<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cgy;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    // https: //github.com/javck/blog_a111b

    /**
     * Display a listing of the resource.
     *
     * 回傳該表格的所有資料，以 price 欄位從小到大排序
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET/items
        // return 'index';
        $items = Item::orderBy('price', 'asc')->get();
        return $items;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET/items/create
        //建立一筆新資料的'頁面'(view)
        return 'create';

    }

    /**
     * Store a newly created resource in storage.
     *
     * 儲存前端傳入的資料，成功後回傳儲存的內容
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST/items
        // return 'store';
        $saveitem = Item::create($request->all());
        return $saveitem;
    }

    /**
     * Display the specified resource.
     *
     * 回傳指定的資料
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //GET/items/{item}
        // return 'show';
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //GET/items/{item}/edit
        //編輯資料的'頁面'
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * 更新指定的資料，成功後回傳更新後的內容
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //PUT/PATCH/items/{item}
        // return 'update';
        $num = $article->update($request->only(['subject', 'content', 'sort', 'enabled_at', 'enabled', 'cgy_id']));
        return $num;
    }

    /**
     * Remove the specified resource from storage.
     *
     * 刪除指定的資料，成功後回傳 Success
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE/items/{item}
        // return 'destroy';
        $num = $article->delete();
        return $num;
    }

    //查詢所有資料，只取 id , subject 以及 content 這三個欄位
    public function querySelect()
    {
        $articles = Article::select(['id', 'subject', 'content'])->get();
        return $articles;
    }

    //查詢上架於 2022/12/24 00:00:00 之後，enabled 為 true 的資料，按照 enabled_at 從新到舊排序，回傳第一筆資料的 subject 欄位內容
    public function querySpecific()
    {
        // return 'querySpecific';
        $article = Article::where('enabled_at', '>', Carbon::createFromFormat('Y/m/d m:i:s', '2022/12/13 00:00:00'))->where('enabled', true)->orderBy('created_at', 'desc')->first();
        return $article->subject;
    }

    //查詢上架於 2022/12/24 00:00:00 之後，enabled 為 true 的資料，按照 enabled_at 從新到舊排序，回傳第2~4筆資料
    public function queryPagination()
    {
        // return 'queryPagination';
        $articles = Article::where('enabled_at', '>', '2022-12-10 00:00:00')->where('enabled', true)->orderBy('created_at', 'desc')->skip(1)->take(3)->get();
        return $articles;
    }

    //查詢上架日期介於 2022/12/24 00:00:00 和 2022/12/28 23:59:59 之間，price 位於 $min 到 $max 之間的資料並回傳
    public function queryRange($min, $max)
    {
        // return 'queryRange';
        $articles = Article::where('enabled_at', '<', '2022/12/15 23:59:59')->where('enabled_at', '>', '2022/12/10 00:00:00')->whereBetween('sort', [$min, $max])->get();
        return $articles;
    }

    //根據所傳入的分類id，取出該分類所有 enabled 為 true 的資料，依照 price 從小到大排序，回傳符合的資料
    public function queryByCgy($cgy_id)
    {
        // return 'queryByCgy';
        $articles = Article::where('cgy_id', $cgy_id)->where('enabled', true)->orderBy('sort', 'desc')->get();
        return $articles;
    }

    //試著使用 pluck() 來取得 id 為 key ， title 為 value 的陣列
    public function queryPluck()
    {
        // return 'queryPluck';
        $data = Article::pluck('subject', 'id');
        return $data;
    }

    //計算所有 enabled 為 true 的資料筆數後回傳，利用查詢方法 count()
    public function enabledCount()
    {
        // return 'enabledCount';
        $num = Article::where('enabled', true)->count();
        return $num;
    }

    //取得指定分類的所有商品
    public function queryCgyRelation(Cgy $cgy)
    {
        // return 'queryCgyRelation';
        return $cgy->articles;
    }

    //取得原分類ID為$old_cgy_id的第一個文章，將之改為新分類ID $new_cgy_id
    public function changeCgy($old_cgy_id, $new_cgy_id)
    {
        // return 'changeCgy';
        $article = Article::where('cgy_id', $old_cgy_id)->first();
        // $article->cgy_id = $new_cgy_id;
        // $article->save();

        $new_cgy = Cgy::find($new_cgy_id);
        $new_cgy->articles()->save($article);
        return Article::find($article->id);
    }

    //取得指定商品的所屬分類
    public function getArticleCgy(Item $article)
    {
        // return 'getArticleCgy';
        return $article->cgy;
    }

    //取得原分類 id 為$old_cgy_id的所有商品，將之改為新分類ID $new_cgy_id
    public function changeAllCgy($old_cgy_id, $new_cgy_id)
    {
        // return 'changeAllCgy';
        $articles = Article::where('cgy_id', $old_cgy_id)->get();

        $new_cgy = Cgy::find($new_cgy_id);
        $new_cgy->articles()->saveMany($articles);
        return $new_cgy->articles;
        return 'changeAllCgy';
    }

    // //取得指定商品的所有標籤，連同該標籤建立的時間
    // public function queryTags(Item $article)
    // {

    // }

    // //為指定的文章加入 id 為 tag_id 的標籤
    // public function addTag(Item $article, $tag_id)
    // {

    // }

    // //為指定的文章移除 id 為 tag_id 的標籤
    // public function removeTag(Item $article, $tag_id)
    // {

    // }

    // //將指定文章的標籤重新設定為 1 , 3 , 5
    // public function syncTag(Item $article)
    // {

    // }

    // //為指定的文章加入 id 為 tag_id 的標籤，並設定標籤顏色
    // public function addTagWithColor(Item $article, $tag_id, $color)
    // {

    // }

    // //取得指定文章的所有標籤，連同該標籤建立的時間以及標籤顏色
    // public function queryTagsWithColor(Item $article)
    // {

    // }
}