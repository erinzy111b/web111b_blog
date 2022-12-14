<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="menu./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Top Menu bar Navigation -->
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="http://localhost:6080/blog/public/quq">Home</a></h1>
    </li>

    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <ul class="right">
      <li class="divider"></li>
      <li><a href="#">@yield('topright01','topright01')</a></li>
      <li class="divider"></li>
      <li><a href="#">@yield('topright02','topright02')</a></li>
      <li class="divider"></li>
      <li><a href="#">@yield('topright03','topright03')</a></li>
      <li class="divider"></li>
      <li><a href="#">@yield('topright04','topright04')</a></li>
      <li class="divider"></li>
    </ul>
  </section>
</nav>

<!-- Hero Unit -->
<section class="hero-unit">

  <div class="row">
    <div class="large-12 columns">
      <hgroup>
        <h1>@yield('BigTitle','BigTitle')</h1>
        <h3>@yield('SaySomething','SaySomething')</h3>
      </hgroup>


      <ul class="small-block-grid-2 medium-block-grid-3 flip-cards">

        <li ontouchstart="this.classList.toggle('hover');">
          <div class="large button card-front">
            <a href="#">@yield('card1name','cardname')</a>
            <i class="fa fa-code card-icon "></i>
          </div>
          <div class="panel card-back">
            <i class="fa fa-code card-icon"></i>
            <div class="hub-info">
              <a href="p1">JKLCode.com</a>
              <p>Find coding gists, cheatsheets, plugins, themes, resources, and tutorials.</p>
            </div>
            <small class="clear">Updated TTH.</small>
          </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
          <div class="large button card-front">
            <a href="http://www.aaronsnowberger.com">?????????</a>
            <i class="fa fa-pencil-square-o card-icon"></i>
          </div>

          <div class="panel card-back">
            <i class="fa fa-pencil-square-o card-icon"></i>
            <div class="hub-info">
              <a href="http://www.aaronsnowberger.com">AaronSnowberger.com</a>
              <p>Take a look at my graphic design portfolio and contact me for design work.</p>
            </div>
            <small class="clear">Updated Saturdays.</small>
          </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
          <div class="large button card-front">
            <a href="">?????????</a>
            <i class="fa fa-paper-plane-o card-icon"></i>
          </div>

          <div class="panel card-back">
            <i class="fa fa-paper-plane-o card-icon"></i>
            <div class="hub-info">
              <a href="">Udemy.com</a>
              <p>Join classes about Computers, Technology, Coding, Design, and Language Learning.</p>
            </div>
            <small class="clear">Updated Mondays.</small>
          </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
          <div class="large button card-front">
            <a href="">?????????</a>
            <i class="fa fa-map-o card-icon"></i>
          </div>

          <div class="panel card-back">
            <i class="fa fa-map-o card-icon"></i>
            <div class="hub-info">
              <a href="#">KeysToAGoodLife.com</a>
              <p>Find resources about business, family, exercise, and other various topics.</p>
            </div>
            <small class="clear">Updated monthly.</small>
          </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
          <div class="large button card-front">
            <a href="#">?????????</a>
            <i class="fa fa-language card-icon"></i>
          </div>

          <div class="panel card-back">
            <i class="fa fa-language card-icon"></i>
            <div class="hub-info">
              <a href="http://www.keytokorean.com">KeyToKorean.com</a>
              <p>Take your Korean from "foreign" to fluent with vocab lists and grammar guides.</p>
            </div>
            <small class="clear">Updated MWF.</small>
          </div>
        </li>

        <li ontouchstart="this.classList.toggle('hover');">
          <div class="large button card-front">
            <a href="http://www.aicfchurch.org">?????????</a>
            <i class="fa fa-users card-icon"></i>
          </div>

          <div class="panel card-back">
            <i class="fa fa-users card-icon"></i>
            <div class="hub-info">
              <a href="http://www.aicfchurch.org">AICFChurch.org</a>
              <p>Listen to sermon podcasts or download church graphic design resources.</p>
            </div>
            <small class="clear">Updated the 4th Sunday.</small>
          </div>
        </li>

      </ul>
    </div>

    <div class="large-12 columns">
      <div class="small-12 small-centered medium-6 medium-centered large-3 large-centered columns clients">
        <a href="#">
          <h6 class="text-center">Clients Click Here</h6>
          <p class="text-center">
            <span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-angle-right fa-inverse fa-stack-1x"></i>
					</span>
          </p>
        </a>
      </div>
      <!-- end .clients -->
    </div>

  </div>
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js'></script>
</body>
</html>
