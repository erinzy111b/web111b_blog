
<b>Oops! {{$name}} is now in trouble!</b><br>
<br>
Save him/her? &emsp;
<br>
<br>
<html>
  <form actuon="test_back.blade.php" method="get">
→ Of course <input type="submit" value="Yes"> &nbsp;<br>
<br>
→ <input type="submit" value="No"> :(<br>

<br>

{{$something}}
{{$something2}}
{{$something3}}

<br>
<br>
<br>
<br>

  <form action="testtest" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    會員名稱：<input type="text" name="uname"><br>
    密碼：<input type="password" name="upass"><br>
    <br>
    <input type="submit" value="登入"> &emsp; <input type="reset" value="取消">
  </form>



</form>





<form method="post" action="task">
{{ csrf_field() }}
<input type="text" name="title">
<input type="submit">
</form>







</html>


{{-- <html><form>
<input type='buttom' value='Yes'>
&emsp;
<input type='bittom' value='No'>
</form></html> --}}





