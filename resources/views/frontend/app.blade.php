<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <meta name="csrf-token"
    content="{{ csrf_token() }}" />
  <link rel="shortcut icon"
    type="image/png"
    href=" {{ asset('frontend/assets/images/k_favicon_32x.png') }}">
  <title>{{ config('app.name') }} |@yield('title')</title>

  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/font-icon.min.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/reset.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/defined.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/base.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/style.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-kids.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-medical.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-electronic-vertical.css') }}">
  @stack('css')
  <style>
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>a:after {
      content: ">";
      float: right;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: 0px;
      margin-left: 0px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }

    /* Ajax */
    .centered {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transform: -webkit-translate(-50%, -50%);
      transform: -moz-translate(-50%, -50%);
      transform: -ms-translate(-50%, -50%);
      color: darkred;
      background: rgba(0, 0, 0, 0.5);
      z-index: 100;
      visibility: hidden;
    }

  </style>

</head>

<body
  class="lazy_icons zoom_tp_2 css_scrollbar template-index lazyload js_search_true cart_pos_side kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true header_sticky_true hide_scrolld_true des_header_2 h_banner_true top_bar_true spcdt4_ js_search_type">

  <img class="centered"
    src="/images/ajax-loader.gif">

  <!--header-->
  @include('frontend.partials.header')
  <!--end header-->

  @yield('content')
  <!--mask overlay-->
  <div class="mask-overlay ntpf t__0 r__0 l__0 b__0 op__0 pe_none"></div>
  <!--end mask overlay-->

  <!--footer-->
  @include('frontend.partials.footer')
  <!--end footer-->


  <!--quick view-->
  @include('frontend.partials.quickview')
  <!--end quick view-->

  <!--quick shop-->
  @include('frontend.partials.quick_shop')
  <!--end quick shop-->

  <!-- mini cart box -->
  <div id="miniCart">
    @include('frontend.partials.minicart')
  </div>

  <!-- end mini cart box-->

  <!-- search box -->
  @include('frontend.partials.search')
  <!-- end search box -->

  <!-- login box -->
  @include('frontend.partials.login')
  <!-- end login box -->

  <!-- mobile toolbar -->
  @include('frontend.partials.mobile_toolbar')
  <!-- end mobile toolbar -->

  <!-- mobile menu -->
  @include('frontend.partials.mobile_menu')
  <!-- end mobile menu -->

  <!--discount promotion popup-->
  <div id="kalles-section-promo_pr_pp"
    class="kalles-section mfp-hide dn">
    <div class="js_lz_pppr popup_prpr_wrap container bgw mfp-with-anim"
      data-stt='{ "pp_version": 1,"day_next": 1 }'>
      <div class="wrap_title">
        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
          <span class="mr__10 ml__10">Wait! Can't find what you're looking for?</span>
        </h3>
        <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span><span
          class="section-subtitle db tc sub-title">Maybe this will help...</span>
      </div>
      <div
        class="products nt_products_holder row row_pr_1 cdt_des_1 round_cd_false js_carousel nt_slider nt_cover ratio_nt position_8 space_ prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1"
        data-flickityjs='{"draggable":0,"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 1, "cellAlign": "left","wrapAround": false,"prevNextButtons": true,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw">
                <span class="nt_label new">New</span>
              </span>
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-01.jpg">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-02.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                    Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">XS, S, M, L, XL</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Analogue Resin Strap</a>
              </h3>
              <span class="price dib mb__5">$30.00</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-03.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-04.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                    Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">S, M, L</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Ridley High Waist</a>
              </h3>
              <span class="price dib mb__5">$36.00</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-05.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-06.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                    Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">S, M, L</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Blush Beanie</a>
              </h3>
              <span class="price dib mb__5">$15.00</span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-05.jpg"
                  class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-31.jpg"
                  class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Pink</span><span class="swatch__value bg_color_pink"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-32.jpg"
                  class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-25%</span></span></span>
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-07.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-08.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right">
                  <span class="tt_txt">Add to Wishlist</span>
                  <i class="facl facl-heart-o"></i>
                </a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                    Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">XS, S, M</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
              </h3>
              <span class="price dib mb__5"><del>$60.00</del><ins>$45.00</ins></span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-07.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Green</span><span class="swatch__value bg_color_green"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-08.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-06.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-09.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-10.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                    Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">S, M</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Mercury Tee</a>
              </h3>
              <span class="price dib mb__5">$68.00</span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-15.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">White
                    Cream</span><span class="swatch__value bg_color_white-cream lazyload"
                    data-bgset="{{ asset('/') }}frontend/assets/images/products/dot-01.jpg"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-14.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Heart
                    Dotted</span><span class="swatch__value bg_color_heart-dotted lazyload"
                    data-bgset="{{ asset('/') }}frontend/assets/images/products/dot-02.jpg"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-34%</span></span></span>
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-11.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-12.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                    Shop</span></a>
              </div>
              <div class="pr_deal_dt pa pe_none op__0">
                <span class="pr_title_dt">Offer Ends In:</span>
                <span class="pr_coun_dt"
                  data-date="2021/08/19"></span>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">La Bohème Rose Gold</a>
              </h3>
              <span class="price dib mb__5"><del>$60.00</del><ins>$40.00</ins></span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-27.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Pink</span><span class="swatch__value bg_color_pink lazyload"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-35.jpg"
                  class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span
                    class="tt_txt">Black</span><span class="swatch__value bg_color_black lazyload"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-18.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-17.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                    cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Cream women pants</a>
              </h3>
              <span class="price dib mb__5">$35.00</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block"
                href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-25.png"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-26.png"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#"
                  class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                    Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                  href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                    view</span></a>
                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                    class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                    cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="product-detail-layout-01.html">Black mountain hat</a>
              </h3>
              <span class="price dib mb__5">$50.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end discount promotion popup-->

  <!-- back to top button-->
  <a id="nt_backtop"
    class="pf br__50 z__100 des_bt1"
    href="#"><span class="tc br__50 db cw"><i class="pr pegk pe-7s-angle-up"></i></span></a>

  <script src=" {{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/packery.pkgd.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jquery.hoverIntent.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/flickity.pkgd.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/js-cookie.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/script.js') }}"></script>









  <script>
    $(document).ready(function() {
      $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
  </script>
  <script>
    $(".btn-group, .dropdown").hover(
      function() {
        $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).addClass('open');
      },
      function() {
        $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).removeClass('open');
      });
  </script>
  @include('auth.toast')



  {{-- AJAX --}}
  <script>
    //Ajax setup
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });
    $("body").on("click", ".productView", function() {
      var product_id = $(this).attr("product_id");
      $.ajax({
        type: "GET",
        url: "/product/view/modal/" + product_id,
        dataType: "json",
        success: function(data) {
          $("#product_name_bn").text(data.product.product_name_bn);
          $("#product_name_en").text(data.product.product_name_en);
          // Quick shop
          $("#product_name_bn2").text(data.product.product_name_bn);
          $("#product_name_en2").text(data.product.product_name_en);

          $("#price").text(data.product.price);
          $("#sku").text(data.product.product_code);

          $("#product_id").val(data.product.id);

          $("#category_name_bn").text(
            data.product.category.category_name_bn
          );
          $("#category_name_en").text(
            data.product.category.category_name_en
          );
          $("#product_image").attr("src", "/" + data.product.image);
          $("#product_image2").attr("data-bgset", "/" + data.product.image);

          $("#short_description_bn").text(
            data.product.short_description_bn
          );
          $("#short_description_en").text(
            data.product.short_description_en
          );


          if (data.product.discount == null) {
            $("#discount").text("New");
            $("#discount_bg").addClass("bg-success");
            $("#price").text("");
            $("#new_price").text("$" + data.product.price);
          } else {
            $("#discount").text("-" + data.product.discount + "%");
            new_price =
              data.product.price -
              (data.product.discount * data.product.price) / 100;
            $("#new_price").text("$" + Math.round(new_price));
            $("#price").text("$" + data.product.price);
            $("#discount_bg").addClass("bg-danger");
          } // end prodcut price

          // All quick shop for id 2
          if (data.product.discount == null) {
            $("#discount2display").hide();
            $("#price2").text("");
            $("#new_price2").text("$" + data.product.price);
          } else {
            $("#discount2display").show();
            $("#discount2").text("-" + data.product.discount + "%");
            new_price =
              data.product.price -
              (data.product.discount * data.product.price) / 100;
            $("#new_price2").text("$" + Math.round(new_price));
            $("#price2").text("$" + data.product.price);
            $("#discount_bg2").addClass("bg-danger");
          } //All quick shop for id 2

          // Color
          if (data.color.length > 1) {
            $('select[name="color"]').empty();
            $.each(data.color, function(key, value) {
              $('select[name="color"]').append(
                '<option value=" ' +
                value +
                ' ">' +
                value +
                " </option>"
              );
              $("#color_display_none").css("display", "");
              $("#color_display_none2").css("display", "");
            });
          } else {
            $("#color_display_none").css("display", "none");
            $("#color_display_none2").css("display", "none");
          }

          if (data.product.size != null) {
            $('select[name="size"]').empty();
            $.each(data.size, function(key, value) {
              $('select[name="size"]').append(
                '<option value=" ' +
                value +
                ' ">' +
                value +
                " </option>"
              );
              $("#size_display").css("display", "");
              $("#size_display2").css("display", "");
            });
          } else {
            $("#size_display").css("display", "none");
            $("#size_display2").css("display", "none");
          }
        },
      });
    });

    /**
     * Add to cart
     */
    window.addToCart = function() {
      var id = $("#product_id").val();
      var color = $("#color option:selected").text();
      var size = $("#size option:selected").text();
      var quantity = $("#qty").val();

      $.ajax({
        type: "POST",
        dataType: "json",
        data: {
          color: color,
          size: size,
          quantity: quantity,
        },
        url: "/cart/data/store/" + id,
        success: function(data) {
          miniCart();
          toastr.options = {
            closeButton: true,
            closeHtml: "<button>&#xd7;</button>",
            progressBar: true,
            showMethod: "slideDown",
          };
          if (data.is_true) {
            toastr["error"]("Add less than " + data.product_qty + " to your cart");
          } else {
            toastr["success"]("Successfully added successfully!");
          }


          // End Message
        },
        error: function(xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")");
          // alert(err.message);
          toastr["error"](err.message);
        },
      });
    };
    // End add to cart

    function miniCart() {

      $.ajax({
        type: "GET",
        url: "/product/cart/content/",
        success: function(data) {
          var miniCart = "";

          $.each(data.carts, function(key, value) {
            if (data.carts.toString().length > 0) {
              $("#cartQty").text(data.cartQty);
              $("#cart_tot_price").text(data.cartTotal);
              $(".js_cart_footer").css("display", "");
            }
            @if (session()->get('language') === 'bangla')
              miniCart += `
              <div class="mini_cart_item js_cart_item flex al_center pr oh">
                <div class="ld_cart_bar"></div>
                <a href="product-detail-layout-01.html"
                  class="mini_cart_img">
                  <img class="w__100 lazyload"
                    data-src="/${value.options.image}"
                    width="120"
                    height="153"
                    alt=""
                    src="/${value.options.image}">
                </a>
                <div class="mini_cart_info">
                  <a href=""
                    class="mini_cart_title truncate">
                    ${value.options.name_bn}
                  </a>
                  <div class="mini_cart_meta">
                    <p class="cart_meta_variant">${value.options.color}</p>
                    <p class="cart_selling_plan"></p>
                    <div class="cart_meta_price price">
                      <div class="cart_price">
                        $<ins>${value.price}</ins>
                      </div>
                    </div>
                  </div>
                  <div class="mini_cart_actions">
                    <div class="quantity pr mr__10 qty__true">
                      <input type="number"
                        class="input-text qty text tc qty_cart_js"
                        step="1"
                        min="0"
                        max="9999"
                        value="${value.qty}">
                      <div class="qty tc fs__14">
                        <button type="button"
                          class="plus db cb pa pd__0 pr__15 tr r__0"
                          id="${value.rowId}"
                          onclick="cartIncrement(this.id)">
                          <i class="facl facl-plus"></i>
                        </button>
                        <button type="button"
                          class="minus db cb pa pd__0 pl__15 tl l__0 qty_1"
                          id="${value.rowId}"
                          onclick="cartDecrement(this.id)">
                          <i class="facl facl-minus"></i>
                        </button>

                      </div>
                    </div>
                    <a href="#"
                      id="${value.rowId}"
                      class="ttip_nt tooltip_top_right miniCartRemoveItem"><span class="tt_txt">Remove this item</span>
                      <svg
                        style="width: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                              height: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                              stroke-width: 1.5;"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10"
                          y1="11"
                          x2="10"
                          y2="17"></line>
                        <line x1="14"
                          y1="11"
                          x2="14"
                          y2="17"></line>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              `;
            @else
              miniCart += `
              <div class="mini_cart_item js_cart_item flex al_center pr oh">
                <div class="ld_cart_bar"></div>
                <a href="product-detail-layout-01.html"
                  class="mini_cart_img">
                  <img class="w__100 lazyload"
                    data-src="/${value.options.image}"
                    width="120"
                    height="153"
                    alt=""
                    src="/${value.options.image}">
                </a>
                <div class="mini_cart_info">
                  <a href=""
                    class="mini_cart_title truncate">

                    ${value.name}
                  </a>
                  <div class="mini_cart_meta">
                    <p class="cart_meta_variant">${value.options.color}</p>
                    <p class="cart_selling_plan"></p>
                    <div class="cart_meta_price price">
                      <div class="cart_price">
                        $<ins>${Math.round(value.price)}</ins>
                      </div>
                    </div>
                  </div>
                  <div class="mini_cart_actions">
                    <div class="quantity pr mr__10 qty__true">
                      <input type="number"
                        class="input-text qty text tc qty_cart_js"
                        step="1"
                        min="0"
                        max="9999"
                        value="${value.qty}">
                      <div class="qty tc fs__14">
                        <button type="button"
                          class="plus db cb pa pd__0 pr__15 tr r__0"
                          id="${value.rowId}"
                          onclick="cartIncrement(this.id)">
                          <i class="facl facl-plus"></i>
                        </button>
                        <button type="button"
                          class="minus db cb pa pd__0 pl__15 tl l__0 qty_1"
                          id="${value.rowId}"
                          onclick="cartDecrement(this.id)">
                          <i class="facl facl-minus"></i>
                        </button>
                      </div>
                    </div>

                    <a href="#"
                      id="${value.rowId}"
                      class="ttip_nt tooltip_top_right miniCartRemoveItem"><span class="tt_txt">Remove this item</span>
                      <svg
                        style="width: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                              height: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                              stroke-width: 1.5;"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10"
                          y1="11"
                          x2="10"
                          y2="17"></line>
                        <line x1="14"
                          y1="11"
                          x2="14"
                          y2="17"></line>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              `;
            @endif
          });
          if (data.carts.toString().length <= 0) {
            @if (session()->get('language') === 'bangla')
              miniCart += `
              <div class="empty tc mt__40 "><i class="las la-shopping-bag pr mb__10"></i>
                <p>আপনার কার্ট </p>
                <p class="return-to-shop mb__15">
                  <a class="button button_primary tu js_add_ld"
                    href="/">Return To Shop</a>
                </p>
              </div>
              `;
            @else
              miniCart += `
              <div class="empty tc mt__40 "><i class="las la-shopping-bag pr mb__10"></i>
                <p>Your cart is empty.</p>
                <p class="return-to-shop mb__15">
                  <a class="button button_primary tu js_add_ld"
                    href="/">Return To Shop</a>
                </p>
              </div>
              `;
            @endif
            var zero = 0;
            $("#cartQty").text(zero);
            $(".js_cart_footer").css("display", "none");
          }
          $("#moreCart").html(miniCart);
        },
      });
    }

    // Call mini
    miniCart();

    $(document).on("click", ".miniCartRemoveItem", function() {
      var rowId = $(this).attr("id");
      $.ajax({
        type: "GET",
        url: "/minicart/product-remove/" + rowId,
        dataType: "json",
        success: function(data) {
          miniCart();
          toastr["success"]("Successfully added remove from cart!");
        },
        error: function(xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")");
          toastr["error"](err.message);
        },
      });
    });


    function cartIncrement(rowId) {
      $.ajax({
        type: 'GET',
        url: "/cart-increment/" + rowId,
        dataType: 'json',
        success: function(data) {
          miniCart();
          toastr["success"]("Succesfully added more product to your cart");
        }
      });
    }

    function cartDecrement(rowId) {
      $.ajax({
        type: 'GET',
        url: "/cart-decrement/" + rowId,
        dataType: 'json',
        success: function(data) {
          miniCart();
          toastr["success"]("Succesfully remove more product to your cart");
        }
      });
    }
  </script>

  <script>
    $(".sort").on('change', function() {
      var sort = $(this).val();
      var url = $('.url').val();
      var brand = $('li .brand,.active a #brand_id').text();
      var size = $('li .size,.active a #s_size').text();
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      var color = $('li .color ,.active a #scolor').text();
      $.ajax({
        url: url,
        beforeSend: function() {
          $('.centered').css("visibility", "visible");
        },
        data: {
          color: color,
          url: url,
          sort: sort,
          brand: brand,
          size: size,
          min_price: min_price,
          max_price: max_price,

        },
        success: function(resp) {
          $('.filterOption').html(resp);

        },
        complete: function() {
          $('.centered').css("visibility", "hidden");
        }
      })
    });

    /**
     * Filter Brand
     */
    $('.brand').on('click', function() {
      var brand = ($(this).data("brand"));
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var color = $('li .color,.active').attr("data-color");
      var size = $('li .size,.active a #s_size').text();
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
        $.ajax({
          url: url,
          beforeSend: function() {
            $('.centered').css("visibility", "visible");
          },
          data: {
            url: url,
            brand: brand,
            color: color,
            sort: sort,
            size: size,
            min_price: min_price,
            max_price: max_price,
          },
          success: function(resp) {
            $('.filterOption').html(resp);
            $.magnificPopup.close();
          },
          complete: function() {
            $('.centered').css("visibility", "hidden");
          }
        })
    });

    /**
     * Filter Color
     */
    $('.color').on('click', function() {
      var color = ($(this).data("color"));
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var brand = $('li .brand,.active a #brand_id').text();
      var size = $('li .size,.active a #s_size').text();
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();

      $.ajax({
        url: url,
        beforeSend: function() {
          $('.centered').css("visibility", "visible");
        },
        data: {
          color: color,
          url: url,
          sort: sort,
          brand: brand,
          size: size,
          min_price: min_price,
          max_price: max_price,
        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $('.centered').css("visibility", "hidden");
        }
      })

    });

    /**
     * Filter Size
     */
    $('.size').on('click', function() {
      var size = ($(this).data("size"));
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var brand = $('li .brand,.active a #brand_id').text();
      var color = $('li .color,.active').attr("data-color");
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      $.ajax({
        url: url,
        beforeSend: function() {
          $('.centered').css("visibility", "visible");
        },
        data: {
          size: size,
          url: url,
          color: color,
          sort: sort,
          brand: brand,
          min_price: min_price,
          max_price: max_price,

        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $('.centered').css("visibility", "hidden");
        }
      })

    });


    $('.price').on('click', function() {
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      var url = $('.url').val();
      var size = $('li .size,.active a #s_size').text();
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var brand = $('li .brand,.active a #brand_id').text();
      var color = $('li .color,.active').attr("data-color");
      $.ajax({
        url: url,
        beforeSend: function() {
          $('.centered').css("visibility", "visible");
        },
        data: {
          min_price: min_price,
          max_price: max_price,
          url: url,
          size: size,
          color: color,
          sort: sort,
          brand: brand,

        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $('.centered').css("visibility", "hidden");
        }
      })
    });
  </script>



  {{-- End ajax --}}
  @stack('js')
  <script src="{{ asset('frontend/assets/js/interface.js') }}"></script>



</body>

</html>
