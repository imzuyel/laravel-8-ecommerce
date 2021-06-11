<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href=" {{ asset('frontend/assets/images/k_favicon_32x.png') }}">
  <title>Kalle's home decor</title>

  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/font-icon.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/reset.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/defined.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/base.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/style.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/home-electronic-vertical.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/home-medical.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/assets/css/home-kids.css') }}">
  @stack('css')


</head>
<body class="lazy_icons zoom_tp_2 css_scrollbar template-index lazyload js_search_true cart_pos_side kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true header_sticky_true hide_scrolld_true des_header_2 h_banner_true top_bar_true spcdt4_ js_search_type">

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
  @include('frontend.partials.minicart')
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
  <div id="kalles-section-promo_pr_pp" class="kalles-section mfp-hide dn">
    <div class="js_lz_pppr popup_prpr_wrap container bgw mfp-with-anim" data-stt='{ "pp_version": 1,"day_next": 1 }'>
      <div class="wrap_title">
        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
          <span class="mr__10 ml__10">Wait! Can't find what you're looking for?</span>
        </h3>
        <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title">Maybe this will help...</span>
      </div>
      <div class="products nt_products_holder row row_pr_1 cdt_des_1 round_cd_false js_carousel nt_slider nt_cover ratio_nt position_8 space_ prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1" data-flickityjs='{"draggable":0,"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 1, "cellAlign": "left","wrapAround": false,"prevNextButtons": true,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw">
                <span class="nt_label new">New</span>
              </span>
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-01.jpg">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-02.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">XS, S, M, L, XL</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Analogue Resin Strap</a>
              </h3>
              <span class="price dib mb__5">$30.00</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-03.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-04.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">S, M, L</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Ridley High Waist</a>
              </h3>
              <span class="price dib mb__5">$36.00</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-05.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-06.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">S, M, L</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Blush Beanie</a>
              </h3>
              <span class="price dib mb__5">$15.00</span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-05.jpg" class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-31.jpg" class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-32.jpg" class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-25%</span></span></span>
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-07.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-08.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                  <span class="tt_txt">Add to Wishlist</span>
                  <i class="facl facl-heart-o"></i>
                </a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">XS, S, M</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
              </h3>
              <span class="price dib mb__5"><del>$60.00</del><ins>$45.00</ins></span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-07.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Green</span><span class="swatch__value bg_color_green"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-08.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-06.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-09.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-10.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
              </div>
              <div class="product-attr pa ts__03 cw op__0 tc">
                <p class="truncate mg__0 w__100">S, M</p>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Mercury Tee</a>
              </h3>
              <span class="price dib mb__5">$68.00</span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-15.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">White Cream</span><span class="swatch__value bg_color_white-cream lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/products/dot-01.jpg"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-14.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Heart Dotted</span><span class="swatch__value bg_color_heart-dotted lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/products/dot-02.jpg"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-34%</span></span></span>
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-11.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-12.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
              </div>
              <div class="pr_deal_dt pa pe_none op__0">
                <span class="pr_title_dt">Offer Ends In:</span>
                <span class="pr_coun_dt" data-date="2021/08/19"></span>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">La Bohème Rose Gold</a>
              </h3>
              <span class="price dib mb__5"><del>$60.00</del><ins>$40.00</ins></span>
              <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-27.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink lazyload"></span></span>
                <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-35.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black lazyload"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-18.jpg"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-17.jpg"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Cream women pants</a>
              </h3>
              <span class="price dib mb__5">$35.00</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-25.png"></div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-26.png"></div>
              </div>
              <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
              </div>
              <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">Black mountain hat</a>
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
  <a id="nt_backtop" class="pf br__50 z__100 des_bt1" href="#"><span class="tc br__50 db cw"><i class="pr pegk pe-7s-angle-up"></i></span></a>

  <script src=" {{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/packery.pkgd.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jquery.hoverIntent.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/flickity.pkgd.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/js-cookie.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
  @stack('js')
  <script src=" {{ asset('frontend/assets/js/interface.js') }}"></script>

</body>

</html>
