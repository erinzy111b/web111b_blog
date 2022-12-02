<h1>Article</h1>

    {!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}

    {!! Form::label('subject', '標題',[]) !!}
    {!! Form::text('subject', null) !!}<br><br>
@error('subject')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div><br>
@enderror

    {!! Form::label('category', '類別', []) !!}
    {!! Form::select('category',['1' => '分類 1','2'=>'分類 2','3'=>'分類 3'],['placeholder'],['placeholder'=>'請選擇標籤']) !!}&emsp;<br><br>

    {!! Form::label('desc', '內文') !!}<br>
    {!! Form::textarea('desc',null,['cols'=>25,'rows'=>10])!!}<br><br>
@error('desc')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div><br>
@enderror

    {{-- {!! Form::label('num', '數字',[]) !!}
    {!! Form::number('num', null, ['min'=>10 , 'max'=>1000]) !!}請輸入10~1000之間的整數<br><br>
@error('num')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div><br>
@enderror --}}

    {!! Form::label('status', '狀態',[]) !!}&emsp;
    開{!! Form::radio('status', 1 ,true,[])!!}
    關{!!Form::radio('status', 0 ,false)!!}<br><br>
@error('status')
    <div class="alert alert-danger">{{ $message }}</div><br>
@enderror

    {!! Form::label('sort', '排序', []) !!}
    {!! Form::number('sort', null, ['min'=> 1 ]) !!}<br><br>

    {!! Form::label('enable-at', '日期', []) !!}
    {!! Form::date('enable-at', \Carbon\Carbon::now(), []) !!}<br><br>


    {{-- tags --}}

    {{-- {!! Form::select('tags', ['news' => 'news','skill'=>'skill','like'=>'超值商品','boss'=>'老闆跳樓'],['placeholder'=>'請選擇標籤']) !!}<br><br>

    {!! Form::label('tags', '標籤', []) !!}
    {!! Form::select('tags', 1, 1, 3, []) !!}&emsp;<br><br> --}}

    {!! Form::label('tags[]', 'news', []) !!}
    {!! Form::checkbox('tags[]', 'news', false) !!}&emsp;

    {!! Form::label('tags[]', 'skill', []) !!}
    {!! Form::checkbox('tags[]','skill' , false) !!}&emsp;

    {!! Form::label('tags[]', 'like', []) !!}
    {!! Form::checkbox('tags[]', 'like', false) !!}<br><br>

    {{-- tags --}}

    {!! Form::label('pic', '圖片', []) !!}
    {!! Form::file('pic') !!}<br><br>

    {!! Form::submit('提交', []) !!}
    {!! Form::reset('重置', []) !!}

    {!! Form::close() !!}


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
