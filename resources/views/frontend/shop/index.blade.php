@push('css')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/drift-basic.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css//photoswipe.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/shop.css') }}">

@endpush
@extends('frontend.app')

@section('title')
Happy to shop
@endsection
@section('content')
<!--shop banner-->
<div class="kalles-section page_section_heading">
  <div class="page-head tc pr oh cat_bg_img page_head_">
    <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="{{ asset('/') }}frontend/assets/images/shop/shop-banner.jpg"></div>
    <div class="container pr z_100">
      <h1 class="mb__5 cw">Women</h1>
      <p class="mg__0">Shop through our latest selection of Women’s Clothing and Accessories.</p>
    </div>
  </div>
</div>
<!--end shop banner-->
<div class="container container_cat pop_default cat_default mb__20">

  <!--grid control-->
  <div class="cat_toolbar row fl_center al_center mt__30">
    <div class="cat_filter col op__0 pe_none">
      <a href="#" data-opennt="#kalles-section-nt_filter" data-pos="left" data-remove="true" data-class="popup_filter" data-bg="hide_btn" class="has_icon btn_filter mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
      <a href="#" data-id="#kalles-section-nt_filter" class="btn_filter js_filter dn mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
    </div>
    <div class="cat_view col-auto">
      <div class="dn dev_desktop">
        <a href="#" data-mode="grid" data-dev="dk" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
        <a href="#" data-mode="grid" data-dev="dk" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
        <a href="#" data-mode="grid" data-dev="dk" data-col="3" class="pr mr__10 cat_view_page view_3"></a>
        <a href="#" data-mode="grid" data-dev="dk" data-col="15" class="pr mr__10 cat_view_page view_15 active"></a>
        <a href="#" data-mode="grid" data-dev="dk" data-col="2" class="pr cat_view_page view_2"></a>
      </div>
      <div class="dn dev_tablet dev_view_cat">
        <a href="#" data-dev="tb" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
        <a href="#" data-dev="tb" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
        <a href="#" data-dev="tb" data-col="3" class="pr cat_view_page view_3"></a>
      </div>
      <div class="flex dev_mobile dev_view_cat">
        <a href="#" data-dev="mb" data-col="12" class="pr mr__10 cat_view_page view_12"></a>
        <a href="#" data-dev="mb" data-col="6" class="pr cat_view_page view_6"></a>
      </div>
    </div>
    <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
      <a class="in_flex fl_between al_center sortby_pick kalles_dropDown_label" href="#">
        <span class="lbl-title sr_txt dn">Featured</span>
        <span class="lbl-title sr_txt_mb">Sort by</span>
        <i class="ml__5 mr__5 facl facl-angle-down"></i>
      </a>
      <div class="nt_sortby dn">
        <svg class="ic_triangle_svg" viewBox="0 0 20 9" role="presentation">
          <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
        </svg>
        <div class="h3 mg__0 tc cd tu ls__2 dn_lg db">Sort by<i class="pegk pe-7s-close fs__50 ml__5"></i>
        </div>
        <div class="nt_ajaxsortby wrap_sortby kalles_dropdown_options">
          <a data-label="Featured" class="kalles_dropdown_option truncate selected" href="#">Featured</a>
          <a data-label="Best selling" class="kalles_dropdown_option truncate" href="#">Best selling</a>
          <a data-label="Alphabetically, A-Z" class="kalles_dropdown_option truncate" href="#">Alphabetically, A-Z</a>
          <a data-label="Alphabetically, Z-A" class="kalles_dropdown_option truncate" href="#">Alphabetically, Z-A</a>
          <a data-label="Price, low to high" class="kalles_dropdown_option truncate" href="#">Price, low to high</a>
          <a data-label="Price, high to low" class="kalles_dropdown_option truncate" href="#">Price, high to low</a>
          <a data-label="Date, old to new" class="kalles_dropdown_option truncate" href="#">Date, old to new</a>
          <a data-label="Date, new to old" class="kalles_dropdown_option truncate" href="#">Date, new to old</a>
        </div>
      </div>
    </div>
  </div>
  <!--end grid control-->

  <!--filter panel area-->
  <div class="filter_area_js filter_area lazyload">
    <div id="kalles-section-nt_filter" class="kalles-section nt_ajaxFilter section_nt_filter">
      <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Filter<i class="close_pp pegk pe-7s-close fs__40 ml__5"></i>
      </div>
      <div class="cat_shop_wrap">
        <div class="cat_fixcl-scroll">
          <div class="cat_fixcl-scroll-content css_ntbar">
            <div class="row wrap_filter">
              <div class="col-12 col-md-3 widget">
                <h5 class="widget-title">By Color</h5>
                <div class="loke_scroll">
                  <ul class="nt_filter_block nt_filter_color css_ntbar" data-filter_condition="and">
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color black">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_black lazyload"></span>
                        </div>
                        black
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color cyan">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_cyan lazyload"></span>
                        </div>
                        cyan
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color green">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_green lazyload"></span>
                        </div>
                        green
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color grey">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_grey lazyload"></span>
                        </div>
                        grey
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color pink">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_pink lazyload"></span>
                        </div>
                        pink
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color pink clay">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_pink-clay lazyload"></span>
                        </div>
                        pink clay
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color sliver">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_sliver lazyload"></span>
                        </div>
                        sliver
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color white">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_white lazyload"></span>
                        </div>
                        white
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color white cream">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_white-cream lazyload" data-bg="{{ asset('/') }}frontend/assets/images/shop/color-white-cream.jpg"></span>
                        </div>
                        white cream
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color beige">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_beige lazyload"></span>
                        </div>
                        beige
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color blue">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_blue lazyload"></span>
                        </div>
                        blue
                      </a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag color brown">
                        <div class="filter-swatch">
                          <span class="swatch__value bg_color_brown lazyload"></span>
                        </div>
                        brown
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-3 widget">
                <h5 class="widget-title">By Price</h5>
                <div class="loke_scroll">
                  <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="or">
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag price $50-$100">$50-$100</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag price $100-$150">$100-$150</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag price $150-$200">$150-$200</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag price $250-$300">$250-$300</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag price $350-$400">$350-$400</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag price $450-$500">$450-$500</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-3 widget">
                <h5 class="widget-title">By Size</h5>
                <div class="loke_scroll">
                  <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="and">
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag size s">s</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag size m">m</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag size l">l</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag size xs">xs</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag size xl">xl</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag size xxl">xxl</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-3 widget">
                <h5 class="widget-title">By Brand</h5>
                <div class="loke_scroll">
                  <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="and">
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag vendor ck">ck</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag vendor h&amp;m">h&amp;m</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag vendor kalles">kalles</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag vendor levi's">levi's</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag vendor monki">monki</a>
                    </li>
                    <li>
                      <a href="#" aria-label="Narrow selection to products matching tag vendor nike">nike</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 tc mt__20 mb__20 dn">
                <a class="button clear_filter_js" href="#">Clear All Filter</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end filter panel area-->

  <!--product container-->
  <div class="row">
    <div class="col-lg-12 col-12">
      <div class="kalles-section tp_se_cdt">

        <!--products list-->
        <div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 js_isotope nt_isotope" data-isotope='{ "itemSelector": ".pr_grid_item", "layoutMode": "masonry","columnWidth":".grid-sizer","rtl": false }'>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                <a class="d-block" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-01.jpg"></div>
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
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image position-relative oh lazyload">
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
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title position-relative fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">La Bohème Rose Gold</a>
                </h3>
                <span class="price dib mb__5">
                  <del>$60.00</del>
                  <ins>$40.00</ins>
                </span>
                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-27.jpg" class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink lazyload"></span></span>
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-35.jpg" class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black lazyload"></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
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
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
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
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="d-block" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-11.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-10.jpg"></div>
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
                  <a class="cd chp" href="product-detail-layout-01.html">Women Black Pants</a>
                </h3>
                <span class="price dib mb__5">$100.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="d-block" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-33.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-34.jpg"></div>
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
                  <a class="cd chp" href="product-detail-layout-01.html">Sweatshirt in Geometric Print</a>
                </h3>
                <span class="price dib mb__5">$35.00</span>
                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-33.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black lazyload"></span></span>
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-34.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue lazyload"></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
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
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-15.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">White Cream</span><span class="swatch__value bg_color_white-cream lazyload" data-bgset={{ asset('/') }}frontend/assets/images/products/dot-01.jpg"></span></span>
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-14.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Heart Dotted</span><span class="swatch__value bg_color_heart-dotted lazyload" data-bgset={{ asset('/') }}frontend/assets/images/products/dot-02.jpg"></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="d-block" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-05.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/megamenu/pr-06.jpg"></div>
                </div>
                <div class="nt_add_w ts__03 pa ">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span>
                    <i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span>
                    <i class="iccl iccl-eye"></i>
                    <span>Quick view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Quick Shop</span>
                    <i class="iccl iccl-cart"></i>
                    <span>Quick Shop</span>
                  </a>
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
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh">
                <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-25%</span></span></span>
                <a class="d-block" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-11.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-10.jpg"></div>
                </div>
                <div class="nt_add_w ts__03 pa ">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
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
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-10.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Green</span><span class="swatch__value bg_color_green"></span></span>
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-09.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                  <span data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-12.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <span class="tc nt_labels pa pe_none cw">
                  <span class="onsale nt_label"><span>-34%</span></span>
                </span>
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-simple/pr-01.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_66" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-simple/pr-02.jpg"></div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span>
                  </a>
                </div>
                <div class="product-attr pa ts__03 cw op__0 tc">
                  <p class="truncate mg__0 w__100">S, M, L</p>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Short Sleeved Hoodie</a>
                </h3>
                <span class="price dib mb__5"><del>$45.00</del><ins>$30.00</ins></span>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <span class="tc nt_labels pa pe_none cw"></span>
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/shop/pr-01.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/shop/pr-02.jpg"></div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Chill candle</a></h3>
                <span class="price dib mb__5">$16.00 </span>
              </div>
            </div>
          </div>
          <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="d-block" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-47.jpg"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-48.jpg"></div>
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
                  <a class="cd chp" href="product-detail-layout-01.html">Sport Sneaker</a>
                </h3>
                <span class="price dib mb__5">$35.00</span>
              </div>
            </div>
          </div>
        </div>
        <!--end products list-->

        <!--navigation-->
        <div class="products-footer tc mt__40">
          <nav class="nt-pagination w__100 tc paginate_ajax">
            <ul class="pagination-page page-numbers">
              <li><span class="page-numbers current">1</span></li>
              <li><a class="page-numbers" href="#">2</a></li>
              <li><a class="page-numbers" href="#">3</a></li>
              <li><a class="page-numbers" href="#">4</a></li>
              <li><a class="next page-numbers" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
        <!--end navigation-->

      </div>
    </div>
  </div>
  <!--end product container-->

</div>
@endsection
