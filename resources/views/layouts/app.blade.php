<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- VENDORS  -->
  <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}" defer></script>
  <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}" defer></script>
  <script src="{{ asset('vendor/slick/slick.min.js') }}" defer></script>
  <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}" defer></script>


  <link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
  <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/util.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/main.js') }}" defer></script>
  <script src="{{ asset('js/map-custom.js') }}" defer></script>
  <script src="{{ asset('js/slick-custom.js') }}" defer></script>

</head>

<body class="animsition">
  <div id="app">
    <header>
      <!-- Header desktop -->
      <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
          <div class="content-topbar flex-sb-m h-full container">
            <div class="left-top-bar">
              Free shipping for standard order over $100
            </div>

            <div class="right-top-bar flex-w h-full">
              <a href="#" class="flex-c-m trans-04 p-lr-25">
                Help & FAQs
              </a>

              <a href="#" class="flex-c-m trans-04 p-lr-25">
                My Account
              </a>

              <a href="#" class="flex-c-m trans-04 p-lr-25">
                EN
              </a>

              <a href="#" class="flex-c-m trans-04 p-lr-25">
                USD
              </a>
            </div>
          </div>
        </div>

        <div class="wrap-menu-desktop">
          <nav class="limiter-menu-desktop container">

            <!-- Logo desktop -->
            <a href="#" class="logo">
              <img src="images/icons/logo-01.png" alt="IMG-LOGO">
            </a>

            <!-- Menu desktop -->
            <div class="menu-desktop">
              <ul class="main-menu">
                <li class="active-menu">
                  <a href="index.html">Home</a>
                  <ul class="sub-menu">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                  </ul>
                </li>

                <li>
                  <a href="product.html">Shop</a>
                </li>

                <li class="label1" data-label1="hot">
                  <a href="shoping-cart.html">Features</a>
                </li>

                <li>
                  <a href="blog.html">Blog</a>
                </li>

                <li>
                  <a href="about.html">About</a>
                </li>

                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m">
              <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
              </div>

              <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>

              <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
              </a>
            </div>
          </nav>
        </div>
      </div>

      <!-- Header Mobile -->
      <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
          <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
          <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
          </div>

          <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
            <i class="zmdi zmdi-shopping-cart"></i>
          </div>

          <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
            <i class="zmdi zmdi-favorite-outline"></i>
          </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>


      <!-- Menu Mobile -->
      <div class="menu-mobile">
        <ul class="topbar-mobile">
          <li>
            <div class="left-top-bar">
              Free shipping for standard order over $100
            </div>
          </li>

          <li>
            <div class="right-top-bar flex-w h-full">
              <a href="#" class="flex-c-m p-lr-10 trans-04">
                Help & FAQs
              </a>

              <a href="#" class="flex-c-m p-lr-10 trans-04">
                My Account
              </a>

              <a href="#" class="flex-c-m p-lr-10 trans-04">
                EN
              </a>

              <a href="#" class="flex-c-m p-lr-10 trans-04">
                USD
              </a>
            </div>
          </li>
        </ul>

        <ul class="main-menu-m">
          <li>
            <a href="index.html">Home</a>
            <ul class="sub-menu-m">
              <li><a href="index.html">Homepage 1</a></li>
              <li><a href="home-02.html">Homepage 2</a></li>
              <li><a href="home-03.html">Homepage 3</a></li>
            </ul>
            <span class="arrow-main-menu-m">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
          </li>

          <li>
            <a href="product.html">Shop</a>
          </li>

          <li>
            <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
          </li>

          <li>
            <a href="blog.html">Blog</a>
          </li>

          <li>
            <a href="about.html">About</a>
          </li>

          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Modal Search -->
      <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
          <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <img src="images/icons/icon-close2.png" alt="CLOSE">
          </button>

          <form class="wrap-search-header flex-w p-l-15">
            <button class="flex-c-m trans-04">
              <i class="zmdi zmdi-search"></i>
            </button>
            <input class="plh3" type="text" name="search" placeholder="Search...">
          </form>
        </div>
      </div>
    </header>

    <!-- CART  -->
    <div class="wrap-header-cart js-panel-cart">
      <div class="s-full js-hide-cart"></div>

      <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
          <span class="mtext-103 cl2">
            Your Cart
          </span>

          <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
            <i class="zmdi zmdi-close"></i>
          </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
          <ul class="header-cart-wrapitem w-full">
            <li class="header-cart-item flex-w flex-t m-b-12">
              <div class="header-cart-item-img">
                <img src="images/item-cart-01.jpg" alt="IMG">
              </div>

              <div class="header-cart-item-txt p-t-8">
                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                  White Shirt Pleat
                </a>

                <span class="header-cart-item-info">
                  1 x $19.00
                </span>
              </div>
            </li>

            <li class="header-cart-item flex-w flex-t m-b-12">
              <div class="header-cart-item-img">
                <img src="images/item-cart-02.jpg" alt="IMG">
              </div>

              <div class="header-cart-item-txt p-t-8">
                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                  Converse All Star
                </a>

                <span class="header-cart-item-info">
                  1 x $39.00
                </span>
              </div>
            </li>

            <li class="header-cart-item flex-w flex-t m-b-12">
              <div class="header-cart-item-img">
                <img src="images/item-cart-03.jpg" alt="IMG">
              </div>

              <div class="header-cart-item-txt p-t-8">
                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                  Nixon Porter Leather
                </a>

                <span class="header-cart-item-info">
                  1 x $17.00
                </span>
              </div>
            </li>
          </ul>

          <div class="w-full">
            <div class="header-cart-total w-full p-tb-40">
              Total: $75.00
            </div>

            <div class="header-cart-buttons flex-w w-full">
              <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                View Cart
              </a>

              <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                Check Out
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END of CART -->

    <!-- Slider -->
    <section class="section-slide">
      <div class="wrap-slick1">
        <div class="slick1">
          <div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
            <div class="container h-full">
              <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                  <span class="ltext-101 cl2 respon2">
                    Women Collection 2018
                  </span>
                </div>

                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                  <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                    NEW SEASON
                  </h2>
                </div>

                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                  <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
            <div class="container h-full">
              <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                  <span class="ltext-101 cl2 respon2">
                    Men New-Season
                  </span>
                </div>

                <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                  <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                    Jackets & Coats
                  </h2>
                </div>

                <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                  <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
            <div class="container h-full">
              <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                  <span class="ltext-101 cl2 respon2">
                    Men Collection 2018
                  </span>
                </div>

                <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                  <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                    New arrivals
                  </h2>
                </div>

                <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                  <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>