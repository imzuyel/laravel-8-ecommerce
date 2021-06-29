@extends('frontend.app')
@section('title')
Happy to shop
@endsection
@section('content')
<div id="nt_wrapper">

  <div id="nt_content">

    <!-- main slide -->
    <div class="kalles-kids__wrap-slide kalles-section nt_section type_slideshow type_carousel">
      <div class="nt_full se_height_adapt nt_first">
        <div class="fade_flick_1 slideshow row no-gutters equal_nt nt_slider js_carousel prev_next_2 btn_owl_1 dot_owl_2 dot_color_1 btn_vi_2" data-flickity='{ "fade":0,"cellAlign": "center","imagesLoaded": 0,"lazyLoad": 0,"freeScroll": 0,"wrapAround": true,"autoPlay" : 8000,"pauseAutoPlayOnHover" : true, "rightToLeft": false, "prevNextButtons": true,"pageDots": false, "contain" : 1,"adaptiveHeight" : 1,"dragThreshold" : 5,"percentPosition": 1 }'>
          @forelse ($sliders as $slider)
          <div class="kalles-kids__slide-layout-01 col-12 slideshow__slide">
            <div class="oh pr nt_img_txt bg-transparent">
              <div class="js_full_ht4 img_slider_block dek_img_slide">
                <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_zoom pa l__0 t__0 r__0 b__0" data-bgset="{{ $slider->slider_img }}"></div>
              </div>
              <div class="js_full_ht4 img_slider_block mb_img_slide">
                <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_zoom pa l__0 t__0 r__0 b__0" data-bgset="{{ $slider->slider_img }}"></div>
              </div>
              <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                @if (session()->get('language') === 'bangla')
                <div class="pa_txts caption">
                  <div class="right_left">
                    <div class="kalles-kids__slide-layout-01__br-01 slt4_space"></div>
                    <h3 class="kalles-kids__slide-layout-01__big-title slt4_h3 lh__1 mg__0">
                      {{ $slider->title_bn }}
                    </h3>
                    <div class="kalles-kids__slide-layout-01__br-02 slt4_space"></div>
                    <p class="kalles-kids__slide-layout-01__desc slt4_p mg__0 dn db_md">
                      {{ $slider->description_bn }}</p>
                    <div class="kalles-kids__slide-layout-01__br-03 slt4_space"></div>
                    <a class="kalles-kids__slide-layout-01__button slt4_btn button pe_auto round_true btn_icon_false" href="shop-filter-options.html">এক্সপ্লোর করুন</a>
                  </div>
                </div>
                @else
                <div class="pa_txts caption">
                  <div class="right_left">
                    <div class="kalles-kids__slide-layout-01__br-01 slt4_space"></div>
                    <h3 class="kalles-kids__slide-layout-01__big-title slt4_h3 lh__1 mg__0">
                      {{ $slider->title_en }}
                    </h3>
                    <div class="kalles-kids__slide-layout-01__br-02 slt4_space"></div>
                    <p class="kalles-kids__slide-layout-01__desc slt4_p mg__0 dn db_md">
                      {{ $slider->description_en }}</p>
                    <div class="kalles-kids__slide-layout-01__br-03 slt4_space"></div>
                    <a class="kalles-kids__slide-layout-01__button slt4_btn button pe_auto round_true btn_icon_false" href="shop-filter-options.html">Explore Now</a>
                  </div>
                </div>
                @endif
              </div>
              <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
            </div>
          </div>
          @empty
          <div class="kalles-kids__slide-layout-01 col-12 slideshow__slide">
            <div class="oh pr nt_img_txt bg-transparent">
              <div class="js_full_ht4 img_slider_block dek_img_slide">
                <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_zoom pa l__0 t__0 r__0 b__0" data-bgset="{{ asset('/') }}frontend/assets/images/home-kids/slide-bg-01.jpg"></div>
              </div>
              <div class="js_full_ht4 img_slider_block mb_img_slide">
                <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_zoom pa l__0 t__0 r__0 b__0" data-bgset="{{ asset('/') }}frontend/assets/images/home-kids/mb-slide-bg-01.jpg">
                </div>
              </div>
              <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                <div class="pa_txts caption">
                  <div class="right_left">
                    <h4 class="kalles-kids__slide-layout-01__sup-title slt4_h4 mg__0 lh__1 f_body">
                      FREE SHIPPING AVAILABLE</h4>
                    <div class="kalles-kids__slide-layout-01__br-01 slt4_space"></div>
                    <h3 class="kalles-kids__slide-layout-01__big-title slt4_h3 lh__1 mg__0">BIG SAVE
                      ON<br />FASHION BONANZA
                    </h3>
                    <div class="kalles-kids__slide-layout-01__br-02 slt4_space"></div>
                    <p class="kalles-kids__slide-layout-01__desc slt4_p mg__0 dn db_md">Flannel
                      lightweight line overall collection</p>
                    <div class="kalles-kids__slide-layout-01__br-03 slt4_space"></div>
                    <a class="kalles-kids__slide-layout-01__button slt4_btn button pe_auto round_true btn_icon_false" href="shop-filter-options.html">Explore Now</a>
                  </div>
                </div>
              </div>
              <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
            </div>
          </div>
          @endforelse
        </div>
      </div>
    </div>
    <!-- end main slide -->

    <!--shipping info-->
    <div class="kalles-section nt_section type_shipping bg-white">
      <div class="kalles-electronic-vertical__shiping-info container">
        <div class="row fl_wrap fl_wrap_md oah use_border_true">
          <div class="col-12 col-md-6 col-lg-4 mb__25">
            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
              <div class="col-auto icon large csi"><i class="las la-life-ring"></i></div>
              <div class="col content">
                <h3 class="title cd fs__14 mg__0 mb__5">SUPPORT 24/7</h3>
                <p class="mg__0">we support 24 hours a day</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb__25">
            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
              <div class="col-auto icon large csi"><i class="las la-sync-alt"></i></div>
              <div class="col content">
                <h3 class="title cd fs__14 mg__0 mb__5">30 DAYS RETURN</h3>
                <p class="mg__0">you have 30 days to return</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb__25">
            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
              <div class="col-auto icon large csi"><i class="las la-user-circle"></i></div>
              <div class="col content">
                <h3 class="title cd fs__14 mg__0 mb__5">PAYMENT 100% SECURE</h3>
                <p class="mg__0">Payment 100% Secure</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end shipping info-->

    <!--category section-->
    <div class="kalles-section nt_section type_carousel type_collection_list">
      <div class="kalles-medical__category-block container">
        @if (session()->get('language') === 'bangla')
        <div class="row al_center fl_center title_10">
          <div class="col-auto col-md">
            <h3 class="dib tc section-title fs__24">ক্যাটাগরি</h3>
          </div>
          <div class="col-auto"><a href="#">সব ক্যাটাগরি</a></div>
        </div>
        @else
        <div class="row al_center fl_center title_10">
          <div class="col-auto col-md">
            <h3 class="dib tc section-title fs__24">Category</h3>
          </div>
          <div class="col-auto"><a href="#">See all category</a></div>
        </div>
        @endif

        <div class="mt__30 nt_cats_holder row fl_center equal_nt hoverz_true ratio1_1 cat_space_20 cat_design_5 nt_slider js_carousel prev_next_3 btn_owl_1 dot_owl_2 dot_color_3 btn_vi_2" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>


          @forelse ($categories as $category)
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">

                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ $category->image }}">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ $category->image }}">
                  </div>
                </div>

              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="">{{ session()->get('language') === 'bangla' ? $category->category_name_bn : $category->category_name_en }}</a>
                </h3>
              </div>
            </div>
          </div>
          @empty
          @endforelse
        </div>
      </div>
    </div>
    <!--end category section-->

    <!--daily deal section-->
    <div class="kalles-section nt_section type_prs_countd_deal type_carousel tp_se_cdt">
      <div class="kalles-medical__deal-section container">
        <div class="medizin_laypout">
          <div class="product-cd-header in_flex wrap al_center fl_center tc">
            <h6 class="product-cd-heading section-title">
              {{ session()->get('language') === 'bangla' ? 'প্রতিদিনের ডিল' : 'Daily Deal Of The Day' }}
            </h6>
            <div class="countdown-wrap in_flex fl_center al_center wrap pr_deal_dt">
              <div class="countdown-label">
                {{ session()->get('language') === 'bangla' ? 'সমাপ্তি' : 'End in' }}:</div>
              <div class="countdown pr_coun_dt" data-date="
                            {{ date('Y/m/d', strtotime('+1 day')) }}
                            "></div>
            </div>
          </div>
          <div class="products nt_products_holder row fl_center row_pr_1 js_carousel nt_slider nt_cover ratio1_1 position_8 space_ prev_next_3 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_2 equal_nt" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
            <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__10 pr_grid_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-info mb__15">
                  <h3 class="product-title pr fs__14 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Disposable Hand Wash
                      Gel</a>
                  </h3>
                  <span class="price dib mb__5">
                    <del><span class="money">$27.00</span></del><ins><span class="money">$20.00</span></ins>
                  </span>
                </div>
                <div class="product-image pr oh lazyload">
                  <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label"><span>-26%</span></span>
                  </span>
                  <a class="db" href="product-detail-layout-01.html">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-11.jpg">
                    </div>
                  </a>
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
                <div class="loop-product-stock">
                  <div class="status-bar">
                    <div class="sold-bar w_85-percent"></div>
                  </div>
                  <div class="product-stock-status flex wrap">
                    <div class="sold">
                      <span class="label">Sold: </span>
                      <span class="value">5<span></span></span>
                    </div>
                    <div class="available">
                      <span class="label">Available: </span>
                      <span class="value">1<span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__10 pr_grid_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-info mb__15">
                  <h3 class="product-title pr fs__14 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Surgical Latex Gloves</a>
                  </h3>
                  <span class="price dib mb__5">
                    <del><span class="money">$16.00</span></del>
                    <ins><span class="money">$10.00</span></ins>
                  </span>
                </div>
                <div class="product-image pr oh lazyload">
                  <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label"><span>-38%</span></span>
                  </span>
                  <a class="db" href="product-detail-layout-01.html">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-12.jpg">
                    </div>
                  </a>
                  <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-13.jpg">
                    </div>
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
                <div class="loop-product-stock">
                  <div class="status-bar">
                    <div class="sold-bar w_70-percent"></div>
                  </div>
                  <div class="product-stock-status flex wrap">
                    <div class="sold">
                      <span class="label">Sold: </span>
                      <span class="value">21<span></span></span>
                    </div>
                    <div class="available">
                      <span class="label">Available: </span>
                      <span class="value">9<span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__10 pr_grid_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-info mb__15">
                  <h3 class="product-title pr fs__14 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Manual Oxygen Device</a>
                  </h3>
                  <span class="price dib mb__5">
                    <del><span class="money">$15.00</span></del>
                    <ins><span class="money">$12.00</span></ins>
                  </span>
                </div>
                <div class="product-image pr oh lazyload">
                  <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label"><span>-20%</span></span>
                  </span>
                  <a class="db" href="product-detail-layout-01.html">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-14.jpg">
                    </div>
                  </a>
                  <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-15.jpg">
                    </div>
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
                <div class="loop-product-stock">
                  <div class="status-bar">
                    <div class="sold-bar w__100"></div>
                  </div>
                  <div class="product-stock-status flex wrap">
                    <div class="sold">
                      <span class="label">Sold: </span>
                      <span class="value">10<span></span></span>
                    </div>
                    <div class="available">
                      <span class="label">Available: </span>
                      <span class="value">0<span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__10 pr_grid_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-info mb__15">
                  <h3 class="product-title pr fs__14 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">12-Ply Gauze Sponges</a>
                  </h3>
                  <span class="price dib mb__5">
                    <del><span class="money">$10.00</span></del>
                    <ins><span class="money">$7.00</span></ins>
                  </span>
                </div>
                <div class="product-image pr oh lazyload">
                  <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label"><span>-30%</span></span><span class="nt_label out-of-stock">Sold
                      out</span>
                  </span>
                  <a class="db" href="product-detail-layout-01.html">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-16.jpg">
                    </div>
                  </a>
                  <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-17.jpg">
                    </div>
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
                    <a href="product-detail-layout-01.html" class="pr_atc cd br__40 bgw tc dib cb chp ttip_nt tooltip_top_left read-more">
                      <span class="tt_txt">Read more</span><i class="iccl iccl-info"></i><span>Read more</span>
                    </a>
                  </div>
                </div>
                <div class="loop-product-stock">
                  <div class="status-bar">
                    <div class="sold-bar w__95-percent"></div>
                  </div>
                  <div class="product-stock-status flex wrap">
                    <div class="sold">
                      <span class="label">Sold: </span>
                      <span class="value">14<span></span></span>
                    </div>
                    <div class="available">
                      <span class="label">Available: </span>
                      <span class="value">1<span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__10 pr_grid_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-info mb__15">
                  <h3 class="product-title pr fs__14 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Cara Portable Air
                      Compressor</a>
                  </h3>
                  <span class="price dib mb__5">
                    <del><span class="money">$145.00</span></del>
                    <ins><span class="money">$120.00</span></ins>
                  </span>
                </div>
                <div class="product-image pr oh lazyload">
                  <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label"><span>-18%</span></span>
                  </span>
                  <a class="db" href="product-detail-layout-01.html">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-18.jpg">
                    </div>
                  </a>
                  <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-19.jpg">
                    </div>
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
                <div class="loop-product-stock">
                  <div class="status-bar">
                    <div class="sold-bar w__100"></div>
                  </div>
                  <div class="product-stock-status flex wrap">
                    <div class="sold">
                      <span class="label">Sold: </span>
                      <span class="value">7<span></span></span>
                    </div>
                    <div class="available">
                      <span class="label">Available: </span>
                      <span class="value">0<span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__10 pr_grid_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-info mb__15">
                  <h3 class="product-title pr fs__14 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Portable Personal
                      Compressor</a>
                  </h3>
                  <span class="price dib mb__5">
                    <del><span class="money">$76.00</span></del>
                    <ins><span class="money">$55.00</span></ins>
                  </span>
                </div>
                <div class="product-image pr oh lazyload">
                  <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label"><span>-28%</span></span>
                  </span>
                  <a class="db" href="product-detail-layout-01.html">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/home-medical/pr-20.jpg">
                    </div>
                  </a>
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
                <div class="loop-product-stock">
                  <div class="status-bar">
                    <div class="sold-bar w__100"></div>
                  </div>
                  <div class="product-stock-status flex wrap">
                    <div class="sold">
                      <span class="label">Sold: </span>
                      <span class="value">15<span></span></span>
                    </div>
                    <div class="available">
                      <span class="label">Available: </span>
                      <span class="value">0<span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end daily deal section-->

    <!-- tab section-->
    <div class="kalles-section nt_section type_tab type_tab_collection tp_se_cdt">
      <div class="fashion-ten__tab-wrap container">
        <div class="wrap_title  des_title_8">
          <h3 class="section-title tc pr flex fl_center al_center fs__24 title_8">
            <span class="mr__10 ml__10">{{ session()->get('language') === 'bangla' ? 'আপনার সেরা পণ্য নিন' : 'Take your best product' }}</span>
          </h3>
          <span class="dn tt_divider"><span></span><i class="dn clprfalse title_8 la-gem"></i><span></span></span>
          <span class="section-subtitle db tc">
            {{ session()->get('language') === 'bangla' ? 'আমাদের পণ্যটি কেবল আপনার জন্য পরিবেশন করা হয়। আপনি কেবল কার্টে যোগ করুন এবং উপভোগ করুন' : 'Our product is serve just for you .You just add to cart and enjoy' }}
          </span>
        </div>
        <div class="tab_se_wrap">
          <div class="tab_se_header tc mt__30">
            <ul class="tab_cat_title ul_none des_tab_10">

              <li class="dib">
                <a class="js_t4_tab tt_active" data-bid="all" href="#"><span>{{ session()->get('language') === 'bangla' ? 'সব' : 'All' }}</span></a>
              </li>

              @foreach ($categories as $category)
              @if (count($category->products) > 0)
              <li class="dib">
                <a class="js_t4_tab" data-bid="category-{{ $category->id }}" href="#"><span>{{ session()->get('language') === 'bangla' ? $category->category_name_bn : $category->category_name_en }}</span></a>
              </li>
              @endif
              @endforeach
            </ul>
          </div>
          <div class="tab_se_content">

            <div class="tab_se_element ct_active" id="all">
              <div class="products nt_products_holder row  row_pr_2 cdt_des_2 round_cd_true nt_cover ratio_nt position_8 space_30 equal_nt">
                @forelse ($products as $product)
                @if (session()->get('language') === 'bangla')
                <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                  <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                      <span class="tc nt_labels pa pe_none cw"><span class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- '.$product->discount . ' %' : 'New' }}</span></span>
                      <a class="d-block" href="{{ route('frontend.details',['id'=>$product->id,'slug'=>$product->product_slug_bn]) }}">
                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </a>
                      <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </div>
                      <div class="nt_add_w ts__03 pa ">
                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">ইচ্ছেতালিকা</span><i class="facl facl-heart-o"></i></a>
                      </div>
                      <div class="hover_button op__0 tc pa flex column ts__03">
                        <a class=" pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView" href="#"  product_id={{ $product->id }}><span class="tt_txt">এখনই কিনুন</span><i class="iccl iccl-eye"></i><span>এখনই
                            কিনুন</span></a>
                        <a  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView" href="#"  product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i class="iccl iccl-cart"></i><span>কার্টে যোগ
                            করুন</span></a>
                      </div>
                    </div>
                    <div class="product-info mt__15">
                      <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_bn }}</a></div>
                      <h3 class="product-title pr fs__14 mg__0 fwm">
                        <a class="cd chp" href="{{ route('frontend.details',['id'=>$product->id,'slug'=>$product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
                      </h3>
                      @if (isset($product->discount))
                      <p class="price_range" id="price_qv">
                        <del> ৳{{ $product->price }}</del>
                        <ins> ৳{{ round($product->price - (($product->discount * $product->price) / 100)) }}</ins>
                      </p>
                      @else
                      <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
                      @endif
                    </div>
                  </div>
                </div>
                @else
                <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                  <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                      <span class="tc nt_labels pa pe_none cw"><span class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- '.$product->discount . ' %' : 'New' }}</span></span>
                      <a class="d-block" href="{{ route('frontend.details',['id'=>$product->id,'slug'=>$product->product_slug_en]) }}">
                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </a>
                      <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </div>
                      <div class="nt_add_w ts__03 pa ">
                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                            wishlist</span><i class="facl facl-heart-o"></i></a>
                      </div>
                      <div class="hover_button op__0 tc pa flex column ts__03">
                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView" href="#"  product_id={{ $product->id }}><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                            view</span></a>
                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView" product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                            cart</span></a>
                      </div>
                    </div>
                    <div class="product-info mt__15">
                      <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_en }}</a></div>
                      <h3 class="product-title pr fs__14 mg__0 fwm">
                        <a class="cd chp" href="{{ route('frontend.details',['id'=>$product->id,'slug'=>$product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
                      </h3>
                      @if (isset($product->discount))
                      <p class="price_range" id="price_qv">
                        <del> ৳{{ $product->price }}</del>
                        <ins> ৳{{ round($product->price - (($product->discount * $product->price) / 100)) }}</ins>
                      </p>
                      @else
                      <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
                      @endif
                    </div>
                  </div>
                </div>
                @endif
                @empty
                @endforelse
              </div>
            </div>
            @foreach ($categories as $category)
            <div class="tab_se_element" id="category-{{ $category->id }}">
              <div class="products nt_products_holder row  row_pr_2 cdt_des_2 round_cd_false nt_cover ratio_nt position_8 space_30 equal_nt">
                @forelse ($category->products->take(10) as $product)
                @if (session()->get('language') === 'bangla')
                <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                  <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                      <span class="tc nt_labels pa pe_none cw"><span class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- '. $product->discount .' %'  : 'New' }}</span></span>
                      <a class="d-block" href="product-detail-layout-01.html">
                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </a>
                      <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </div>
                      <div class="nt_add_w ts__03 pa ">
                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">ইচ্ছেতালিকা</span><i class="facl facl-heart-o"></i></a>
                      </div>
                      <div class="hover_button op__0 tc pa flex column ts__03">
                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView" href="#" product_id={{ $product->id }}><span class="tt_txt">এখনই কিনুন</span><i class="iccl iccl-eye"></i><span>এখনই
                            কিনুন</span></a>
                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">কার্টে যোগ করুন</span><i class="iccl iccl-cart"></i><span>কার্টে যোগ
                            করুন</span></a>
                      </div>
                    </div>
                    <div class="product-info mt__15">
                      <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_bn }}</a></div>
                      <h3 class="product-title pr fs__14 mg__0 fwm">
                        <a class="cd chp" href="product-detail-layout-01.html">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
                      </h3>
                      @if (isset($product->discount))
                      <p class="price_range" id="price_qv">
                        <del> ৳{{ $product->price }}</del>
                        <ins> ৳{{ round($product->price - (($product->discount * $product->price) / 100)) }}</ins>
                      </p>
                      @else
                      <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
                      @endif
                    </div>
                  </div>
                </div>
                @else
                <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                  <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                      <span class="tc nt_labels pa pe_none cw"><span class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '-'. $product->discount . ' %' : 'New' }}</span></span>
                      <a class="d-block" href="product-detail-layout-01.html">
                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </a>
                      <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ $product->image }}"></div>
                      </div>
                      <div class="nt_add_w ts__03 pa ">
                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                            wishlist</span><i class="facl facl-heart-o"></i></a>
                      </div>
                      <div class="hover_button op__0 tc pa flex column ts__03">
                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView" href="#" product_id={{ $product->id }}><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                            view</span></a>
                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                            cart</span></a>
                      </div>
                    </div>
                    <div class="product-info mt__15">
                      <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_en }}</a></div>
                      <h3 class="product-title pr fs__14 mg__0 fwm">
                        <a class="cd chp" href="product-detail-layout-01.html">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
                      </h3>
                      @if (isset($product->discount))
                      <p class="price_range" id="price_qv">
                        <del> ৳{{ $product->price }}</del>
                        <ins> ৳{{ round($product->price - (($product->discount * $product->price) / 100)) }}</ins>
                      </p>
                      @else
                      <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
                      @endif
                    </div>
                  </div>
                </div>
                @endif
                @empty
                <h1>No product available</h1>
                @endforelse
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
    <!-- end tab section-->

    <!-- bestselling products-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
      <div class="kalles-electronic-vertical__bestseller container">
        <div class="row al_center fl_center title_10">
          <div class="col-auto col-md">
            <h3 class="dib tc section-title fs__24">Best selling items</h3>
          </div>
          <div class="col-auto"><a href="#">See all products</a></div>
        </div>
        <div class="products nt_products_holder row  row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <span class="tc nt_labels pa pe_none cw">
                  <span class="onsale nt_label"><span>-29%</span></span>
                </span>
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-01.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-02.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Ysamsung Camera</a>
                </h3>
                <span class="price dib mb__5"><del>$35.00</del><ins>$25.00</ins></span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">

                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-03.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-04.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Beats Solo3 Wireless</a>
                </h3>
                <span class="price dib mb__5">$35.00 </span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-05.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-06.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Lomo Sanremo Edition</a>
                </h3>
                <span class="price dib mb__5">$65.00 </span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-07.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-electronic/pr-08.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Ygoogle Speaker</a>
                </h3>
                <span class="price dib mb__5">$65.00 </span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-14.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-15.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Ybeoplay H9i</a>
                </h3>
                <span class="price dib mb__5">$55.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-16.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-17.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">YApple MacBook</a>
                </h3>
                <span class="price dib mb__5">$55.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-20.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-21.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Contemporary design
                    classic</a>
                </h3>
                <span class="price dib mb__5">$25.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <a class="db" href="product-detail-layout-01.html">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-26.jpg">
                  </div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('/') }}frontend/assets/images/home-decor-2/pr-27.jpg">
                  </div>
                </div>
                <div class="nt_add_w ts__03 pa">
                  <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                  </a>
                </div>
                <div class="hover_button op__0 tc pa flex column ts__03">
                  <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                      view</span>
                  </a>
                  <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add
                      to cart</span>
                  </a>
                </div>
              </div>
              <div class="product-info mt__15">
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="product-detail-layout-01.html">Yapple Watch Nike Series
                    4</a>
                </h3>
                <span class="price dib mb__5">$49.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="products-footer tc mt__40">
          <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_false" href="#">Load
            More</a>
        </div>
      </div>
    </div>
    <!-- end bestselling products-->
  </div>
</div>

@endsection
