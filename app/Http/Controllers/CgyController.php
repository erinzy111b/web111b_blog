<?php

namespace App\Http\Controllers;

use App\Models\Cgy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CgyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cgies = Cgy::get();
        // $cgies = Cgy::where('id', '<', 2)->where('id', '<=', 80)->orderBy('id', 'desc')->get();
        $date = Carbon::createFromFormat('Y-m-d h:i:s', '2020-12-8 00:00:00');
        $cgies = Cgy::where('enabled_at', '>', $date)->get();
        return $cgies;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //找不到時回傳null
        // $cgy = Cgy::find($id);

        //找不到時報錯給你404NotFound
        // $cgy = Cgy::findorFail($id);

        //指定一筆以上資料(沒抄到)
        // $cgy = Cgy::findorFail($id);

        //
        // $cgy = Cgy::where('id', $id);
        // dd($cgy);

        // $cgy = Cgy::where('id', $id)->first();
        // dd($cgy);

        // $cgy = Cgy::where('id', $id)->orderBy('created_at', 'asc')->get();
        // dd($cgy);

        $cgy = Cgy::where();

        return $cgy;

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

    //  第一種方法(未完成)
    public function destroy($id)
    {
        $cgy = Cgy::find($id);
        $cgy->delete();
    }

    // 第二種方法
    // public function destroy(Cgy $cgy)
    // {
    //     $cgy->delete();
    // }

}