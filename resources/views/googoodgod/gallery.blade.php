<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - @yield('about')</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="gallery copy./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <h1>@yield('name','gallery')</h1>

  <div class="gallery-wrap">
    <div class=@yield('choose-1')></div>
    <div class=@yield('choose-2')></div>
    <div class=@yield('choose-3')></div>
    <div class=@yield('choose-4')></div>
    <div class=@yield('choose-5')></div>
  </div>
 </div>

<div class="social">
  <a href=@yield('url') target="_blank">
    <img src=@yield('icon') alt="">
  </a>
</div>
<!-- partial -->

</body>
</html>
