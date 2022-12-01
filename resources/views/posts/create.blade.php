<h1>頁面標題</h1>

{{-- blog\lang\zh_TW\validation.php內可改錯誤訊息翻譯 --}}

    {!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

    {!! Form::label('title', '表單標題',[]) !!}
    {!! Form::text('title', null) !!}<br><br>
@error('title')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div><br>
@enderror

    {!! Form::label('content', '內文') !!}<br>
    {!! Form::textarea('content',null,['cols'=>25,'rows'=>10])!!}<br><br>
@error('content')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div><br>
@enderror

    {!! Form::label('num', '數字',[]) !!}
    {!! Form::number('num', null, ['min'=>10 , 'max'=>1000]) !!}請輸入10~1000之間的整數<br><br>
@error('num')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div><br>
@enderror

    {!! Form::label('status1', '是否開啟',[]) !!}&emsp;
    開{!! Form::radio('status1', 1 ,true,[])!!}
    ?{!! Form::radio('status1', '?' ,true,[])!!}
    關{!!Form::radio('status1', 0 ,false)!!}<br><br>
@error('status1')
    <div class="alert alert-danger">{{ $message }}</div><br>
@enderror

    {{-- 沒加[]就只會回傳最後的值,例如此處若勾了四項,沒加中括號則只回傳Ooooops這個值 --}}
    {!! Form::label('check', '複選題') !!}&emsp;
    {!! Form::checkbox('check[]', 'Oops', true) !!}A&nbsp;
    {!! Form::checkbox('check[]', 'Ooops', false) !!}B&nbsp;
    {!! Form::checkbox('check[]', 'Oooops') !!}C&nbsp;
    {!! Form::checkbox('check[]', 'Ooooops') !!}D<br><br>
    @error('check')
    <div class="alert alert-danger">{{ $message }}</div><br>
@enderror

    {{-- {!! Form::select(欄位名稱,選項陣列,預設值, ['placeholder' => 預設提示文字]) !!} --}}
    {{-- 這裡遵照實務用法, 把選項擺至controller定義 --}}
    {!!Form::select('modeA',$modes,$mode,['placeholder'=>'請選擇商品樣式'])!!}<br><br>

    {!! Form::select('modeB', ['時節'=>['summer' => '夏日熱銷','winter'=>'冬節獻禮'],'價格'=>['cp'=>'超值商品','boss'=>'老闆跳樓']],null, []) !!}<br><br>

    {{-- 這裡語法內建的月份是英文且無法翻譯, 若真的需要月份, 建議自己建個select放月份選項 --}}
    {!! Form::label('month', '月份') !!}
    {!! Form::selectMonth('month', null, []) !!}<br><br>

    {!! Form::label('number', '數字', []) !!}
    {!! Form::selectRange('number', 1, 10, 5, []) !!}&emsp;區間數字(1~10)下拉<br><br>

{{-- ?????????? --}}

    {!! Form::label('colors[]', '紅色', ['style'=>'color:red']) !!}
    {!! Form::checkbox('colors[]', 'red', false) !!}

    {!! Form::label('colors[]', '黃色', []) !!}
    {!! Form::checkbox('colors[]', 'yellow', false) !!}

    {!! Form::label('colors[]', '綠色', ['style'=>'color:green']) !!}
    {!! Form::checkbox('colors[]', 'green', false) !!}<br><br>

    {!! Form::label('enabled', '是否上架', []) !!}&emsp;
    上架{!! Form::radio('enabled', 1, true, []) !!}
    下架{!! Form::radio('enabled', 0, false, []) !!}<br><br>


{{-- ?????????? --}}

{{-- //密碼輸入項, 基本上用不太到 --}}
    {!! Form::label('pwd', '密碼', []) !!}
    {!! Form::password('pwd', []) !!}<br><br>

{{-- //Email輸入項 --}}
    {!! Form::label('email', '電子郵件', []) !!}
    {!! Form::email('email',null,[]) !!}<br><br>

{{-- 日期輸入項, 用\Carbon\Carbon::now()可預設為今天 --}}
    {!! Form::label('date', '日期', []) !!}
    {!! Form::date('date', \Carbon\Carbon::now(), []) !!}<br><br>

{{-- //檔案輸入項，記得表單頭要加入files=>true --}}
    {!! Form::label('pic', '圖片', []) !!}
    {!! Form::file('pic') !!}<br><br>



    隱藏→
    {!! Form::hidden('hidden', 'none') !!}<br><br>

    {{-- radio的單選規則以欄位名稱(name)識別，同欄位名稱(name)的選項只可選一 --}}
    {{-- 1、?、0為表單提交後的回傳值 --}}
    {{-- 默認為false不選取，開true則可預設為選取，若開兩個true則預設選取後面的選項 --}}
    {!! Form::label('status2', '單選題') !!}&emsp;
    正確{!! Form::radio('status2','true',true)!!}
    錯誤{!!Form::radio('status2','false')!!}<br><br>
    @error('status2')
    <div class="alert alert-danger">{{ $message }}</div><br>
@enderror

    {!! Form::submit('提交', []) !!}
    {!! Form::reset('重置', []) !!}

    {!! Form::close() !!}


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
