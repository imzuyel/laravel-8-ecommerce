@extends('frontend.app')
@section('title')
  {{ $subsubcategory->subsubcategory_name_en }}
@endsection
@push('css')
  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/drift-basic.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/photoswipe.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/home-default.css') }}"> --}}
  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/shop.css') }}">

@endpush

@section('content')
  <div id="nt_content">
    <!-- breadcrumb -->
    <div class="bgbl pt__20 pb__20 lh__1">
      <div class="container">
        <div class="row al_center">
          <div class="col">
            @if (session()->get('language') === 'bangla')
              <nav class="sp-breadcrumb">
                <a href="{{ route('frontend.home') }}">হোম</a><i class="facl facl-angle-right"></i><a
                  href="{{ route('categoryproductsbn', $subsubcategory->category->category_slug_bn) }}">{{ $subsubcategory->category->category_name_bn }}</a>
                <i class="facl facl-angle-right"></i><a
                  href="{{ route('subcategoryproductsbn', ['category' => $subsubcategory->category->category_slug_bn, 'subcategory' => $subsubcategory->subcategory->subcategory_slug_bn]) }}">{{ $subsubcategory->subcategory->subcategory_name_bn }}</a>
                <i class="facl facl-angle-right"></i>{{ $subsubcategory->subsubcategory_name_bn }}</a>
              </nav>
            @else
              <nav class="sp-breadcrumb">
                <a href="{{ route('frontend.home') }}">হোম</a><i class="facl facl-angle-right"></i><a
                href="{{ route('categoryproductsen', $subsubcategory->category->category_slug_en) }}">{{ $subsubcategory->category->category_name_en }}</a>
              <i class="facl facl-angle-right"></i><a
                href="{{ route('subcategoryproductsen', ['category' => $subsubcategory->category->category_slug_en, 'subcategory' => $subsubcategory->subcategory->subcategory_slug_en]) }}">{{ $subsubcategory->subcategory->subcategory_name_en }}</a>
              <i class="facl facl-angle-right"></i>{{ $subsubcategory->subsubcategory_name_en }}</a>
              </nav>
            @endif

          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb -->
    @if (count($subsubcategory->products)  <= 0)
      <div class="kalles-section cat-shop pr tc p-5">
        <h1 class="text-center text-danger">
            @if (session()->get('language') === 'bangla')
            শীঘ্রই আসছে !
            @else
                Comming Soon !
            @endif
        </h1>
        <button type="submit"
          data-time="6000"
          data-ani="shake"
          class="button truncate  mt__20 order-4  animated " onclick="location.href='{{ route('frontend.home') }}';">
          <span>
            @if (session()->get('language') === 'bangla')
            হোম
            @else
                Home
            @endif
          </span>
        </button>
      </div>
    @else


      <div class="container container_cat pop_default cat_wide mb__20">
        <!--grid control-->
        <div class="cat_toolbar row fl_center al_center mt__30">
          <div class="cat_filter col op__0 pe_none">
            <a href="#"
              data-opennt="#kalles-section-nt_filter"
              data-pos="left"
              data-remove="true"
              data-class="popup_filter"
              data-bg="hide_btn"
              class="has_icon btn_filter mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
            <a href="#"
              data-id="#kalles-section-nt_filter"
              class="btn_filter js_filter dn mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
          </div>
          <div class="cat_view col-auto">
            <div class="dn dev_desktop dev_view_cat">
              <a href="#"
                data-mode="grid"
                data-dev="dk"
                data-col="6"
                class="pr mr__10 cat_view_page view_6"></a>
              <a href="#"
                data-mode="grid"
                data-dev="dk"
                data-col="4"
                class="pr mr__10 cat_view_page view_4"></a>
              <a href="#"
                data-mode="grid"
                data-dev="dk"
                data-col="3"
                class="pr mr__10 cat_view_page view_3"></a>
              <a href="#"
                data-mode="grid"
                data-dev="dk"
                data-col="15"
                class="pr mr__10 cat_view_page view_15"></a>
              <a href="#"
                data-mode="grid"
                data-dev="dk"
                data-col="2"
                class="pr cat_view_page view_2"></a>
            </div>
            <div class="dn dev_tablet dev_view_cat">
              <a href="#"
                data-dev="tb"
                data-col="6"
                class="pr mr__10 cat_view_page view_6"></a>
              <a href="#"
                data-dev="tb"
                data-col="4"
                class="pr mr__10 cat_view_page view_4"></a>
              <a href="#"
                data-dev="tb"
                data-col="3"
                class="pr cat_view_page view_3"></a>
            </div>
            <div class="flex dev_mobile dev_view_cat">
              <a href="#"
                data-dev="mb"
                data-col="12"
                class="pr mr__10 cat_view_page view_12"></a>
              <a href="#"
                data-dev="mb"
                data-col="6"
                class="pr cat_view_page view_6"></a>
            </div>
          </div>
          <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
            <a class="in_flex fl_between al_center sortby_pick kalles_dropDown_label"
              href="#">
              <span class="lbl-title sr_txt dn">Featured</span>
              <span class="lbl-title sr_txt_mb">Sort by</span>
              <i class="ml__5 mr__5 facl facl-angle-down"></i>
            </a>
            <div class="nt_sortby dn">
              <svg class="ic_triangle_svg"
                viewBox="0 0 20 9"
                role="presentation">
                <path
                  d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                  fill="#ffffff"></path>
              </svg>
              <div class="h3 mg__0 tc cd tu ls__2 dn_lg db">Sort by<i class="pegk pe-7s-close fs__50 ml__5"></i>
              </div>
              <div class="nt_ajaxsortby wrap_sortby kalles_dropdown_options">
                <a data-label="Featured"
                  class="kalles_dropdown_option truncate selected"
                  href="#">Featured</a>
                <a data-label="Best selling"
                  class="kalles_dropdown_option truncate"
                  href="#">Best
                  selling</a>
                <a data-label="Alphabetically, A-Z"
                  class="kalles_dropdown_option truncate"
                  href="#">Alphabetically, A-Z</a>
                <a data-label="Alphabetically, Z-A"
                  class="kalles_dropdown_option truncate"
                  href="#">Alphabetically, Z-A</a>
                <a data-label="Price, low to high"
                  class="kalles_dropdown_option truncate"
                  href="#">Price,
                  low to high</a>
                <a data-label="Price, high to low"
                  class="kalles_dropdown_option truncate"
                  href="#">Price,
                  high to low</a>
                <a data-label="Date, old to new"
                  class="kalles_dropdown_option truncate"
                  href="#">Date, old
                  to new</a>
                <a data-label="Date, new to old"
                  class="kalles_dropdown_option truncate"
                  href="#">Date, new
                  to old</a>
              </div>
            </div>
          </div>
        </div>
        <!--end grid control-->

        <!--filter panel area-->
        <div class="filter_area_js filter_area lazyload">
          <div id="kalles-section-nt_filter"
            class="kalles-section nt_ajaxFilter section_nt_filter">
            <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Filter<i
                class="close_pp pegk pe-7s-close fs__40 ml__5"></i>
            </div>
            <div class="cat_shop_wrap">
              <div class="cat_fixcl-scroll">
                <div class="cat_fixcl-scroll-content css_ntbar">
                  <div class="row wrap_filter">
                    <div class="col-12 col-md-3 widget">
                      <h5 class="widget-title">By Color</h5>
                      <div class="loke_scroll">
                        <ul class="nt_filter_block nt_filter_color css_ntbar"
                          data-filter_condition="and">
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color black">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_black lazyload"></span>
                              </div>
                              black
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color cyan">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_cyan lazyload"></span>
                              </div>
                              cyan
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color green">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_green lazyload"></span>
                              </div>
                              green
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color grey">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_grey lazyload"></span>
                              </div>
                              grey
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color pink">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_pink lazyload"></span>
                              </div>
                              pink
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color pink clay">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_pink-clay lazyload"></span>
                              </div>
                              pink clay
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color sliver">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_sliver lazyload"></span>
                              </div>
                              sliver
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color white">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_white lazyload"></span>
                              </div>
                              white
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color white cream">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_white-cream lazyload"
                                  data-bg="{{ asset('/') }}frontend/assets/images/shop/color-white-cream.jpg"></span>
                              </div>
                              white cream
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color beige">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_beige lazyload"></span>
                              </div>
                              beige
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color blue">
                              <div class="filter-swatch">
                                <span class="swatch__value bg_color_blue lazyload"></span>
                              </div>
                              blue
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag color brown">
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
                        <ul class="nt_filter_block nt_filter_styleck css_ntbar"
                          data-filter_condition="or">
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag price $50-$100">$50-$100</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag price $100-$150">$100-$150</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag price $150-$200">$150-$200</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag price $250-$300">$250-$300</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag price $350-$400">$350-$400</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag price $450-$500">$450-$500</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 widget">
                      <h5 class="widget-title">By Size</h5>
                      <div class="loke_scroll">
                        <ul class="nt_filter_block nt_filter_styleck css_ntbar"
                          data-filter_condition="and">
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag size s">s</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag size m">m</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag size l">l</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag size xs">xs</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag size xl">xl</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag size xxl">xxl</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 widget">
                      <h5 class="widget-title">By Brand</h5>
                      <div class="loke_scroll">
                        <ul class="nt_filter_block nt_filter_styleck css_ntbar"
                          data-filter_condition="and">
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag vendor ck">ck</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag vendor h&amp;m">h&amp;m</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag vendor kalles">kalles</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag vendor levi's">levi's</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag vendor monki">monki</a>
                          </li>
                          <li>
                            <a href="#"
                              aria-label="Narrow selection to products matching tag vendor nike">nike</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 tc mt__20 mb__20 dn">
                      <a class="button clear_filter_js"
                        href="#">Clear All Filter</a>
                    </div>
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
              <div
                class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">
                  @foreach ($subsubcategory->products as $product)
                    <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                      @if (session()->get('language') === 'bangla')
                        <div class="product-inner pr">
                          <div class="product-image pr oh lazyload">
                            <span class="tc nt_labels pa pe_none cw"><span
                                class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
                            <a class="d-block"
                              href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">
                              <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                data-bgset="/{{ $product->image }}">
                              </div>
                            </a>
                            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                              <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                data-bgset="/{{ $product->image }}">
                              </div>
                            </div>
                            <div class="nt_add_w ts__03 pa ">
                              <a href="#"
                                class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">ইচ্ছেতালিকা</span><i
                                  class="facl facl-heart-o"></i></a>
                            </div>
                            <div class="hover_button op__0 tc pa flex column ts__03">
                              <a class=" pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView"
                                href="#"
                                product_id={{ $product->id }}><span class="tt_txt">এখনই কিনুন</span><i
                                  class="iccl iccl-eye"></i><span>এখনই
                                  কিনুন</span></a>
                              <a class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView"
                                href="#"
                                product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i
                                  class="iccl iccl-cart"></i><span>কার্টে যোগ
                                  করুন</span></a>
                            </div>
                          </div>
                          <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm">
                              <a class="cd chp"
                                href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
                            </h3>
                            @if (isset($product->discount))
                              <p class="price_range"
                                id="price_qv">
                                <del> ৳{{ $product->price }}</del>
                                <ins>
                                  ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                              </p>
                            @else
                              <span class="price dib mb__5"> ৳ {{ $product->price }} <span
                                  class="text-danger"></span></span>
                            @endif
                          </div>
                        </div>
                      @else
                        <div class="product-inner pr">
                          <div class="product-image pr oh lazyload">
                            <span class="tc nt_labels pa pe_none cw"><span
                                class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
                            <a class="d-block"
                              href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">
                              <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                data-bgset="/{{ $product->image }}">
                              </div>
                            </a>
                            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                              <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                data-bgset="/{{ $product->image }}">
                              </div>
                            </div>
                            <div class="nt_add_w ts__03 pa ">
                              <a href="#"
                                class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to
                                  Wishlist</span><i class="facl facl-heart-o"></i></a>
                            </div>
                            <div class="hover_button op__0 tc pa flex column ts__03">
                              <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView"
                                href="#"
                                product_id={{ $product->id }}><span class="tt_txt">Quick view</span><i
                                  class="iccl iccl-eye"></i><span>Quick
                                  view</span></a>
                              <a href="#"
                                class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                                product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i
                                  class="iccl iccl-cart"></i><span>Add to
                                  cart</span></a>
                            </div>
                          </div>
                          <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm">
                              <a class="cd chp"
                                href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
                            </h3>
                            @if (isset($product->discount))
                              <p class="price_range"
                                id="price_qv">
                                <del> ৳{{ $product->price }}</del>
                                <ins>
                                  ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                              </p>
                            @else
                              <span class="price dib mb__5"> ৳ {{ $product->price }} <span
                                  class="text-danger"></span></span>
                            @endif
                          </div>
                        </div>
                      @endif
                    </div>
                  @endforeach
              </div>
              <!--end products list-->

              <!--navigation-->
              <div class="products-footer tc mt__40">
                <nav class="nt-pagination w__100 tc paginate_ajax">
                  <ul class="pagination-page page-numbers">
                    <li><span class="page-numbers current">1</span></li>
                    <li><a class="page-numbers"
                        href="#">2</a></li>
                    <li><a class="page-numbers"
                        href="#">3</a></li>
                    <li><a class="page-numbers"
                        href="#">4</a></li>
                    <li><a class="next page-numbers"
                        href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
              <!--end navigation-->

            </div>
          </div>
        </div>
        <!--end product container-->

      </div>
    @endif
  </div>

@endsection


@push('js')

  <script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/photoswipe.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/photoswipe-ui-default.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/drift.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/resize-sensor.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/theia-sticky-sidebar.min.js') }}"></script>

@endpush
