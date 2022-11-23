<html>













</html>





{{--
•☐嘗試自己做出電子商務首頁的blade視圖 , 並從Controller回傳
•☐優化自己的blade , 把重複部分分離成master.blade.php , 以繼承的方式改寫
•☐練習課程所有提到的Blade指令
•☐實驗{{ }} 和{!! !!}這兩種輸出指令的不同
•☐嘗試兩種將值傳到多個View的作法 , 並思考其使用時機
--}}

<?php


//讓陣列內的view共用變數
view()->composer(['partial.header','partial.footer'],function($view){
    $view->with('tasks',Task::all());
});

//讓partials資料夾內的所有視圖共用變數
view()->composer('partials.*',function($view){
     $view->with('tasks',Task::all());
});

//應用程式內所有視圖全域共用變數
public function boot()
{

View()->share('global','ToDo Global');
}

//可用預設的app/Providers/AppServiceProvider.php裡的boot()

?>










