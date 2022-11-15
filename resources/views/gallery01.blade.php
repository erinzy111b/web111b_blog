<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Grid zoom</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="gallery./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--
autor: Marco Barría
https://twitter.com/marco_bf
-->

<div class="container-fluid">
  <div id="content" class="row"></div>
</div>

<script id="template" type="text/x-handlebars-template">
  {{#gallery}}
    <div class="col-md-4 col-lg-3 col-xs-6 item nopadding">
      <div class="overflow">
        <div class="content-art">
          <h4>{{title}}</h4>
        </div>
        <img src="{{img}}" alt="{{alt}}" class="img-responsive"/>
      </div>
    </div>
  {{/gallery}}
</script>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js'></script><script  src="{{asset('gallery/script.js')}}"></script>

</body>
</html>
