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
    @if (session()->get('language') === 'bangla')
      <input type="hidden"
        class="url"
        name="url"
        value="{{ $subsubcategory->subsubcategory_slug_bn }}">

    @else
      <input type="hidden"
        class="url"
        name="url"
        value="{{ $subsubcategory->subsubcategory_slug_en }}">
    @endif
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
                <a href="{{ route('frontend.home') }}">Home</a><i class="facl facl-angle-right"></i><a
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
    @if (count($subsubcategory->products) <= 0)
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
          class="button truncate  mt__20 order-4  animated "
          onclick="location.href='{{ route('frontend.home') }}';">
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


      <div class="container container_cat pop_sidebar cat_wide mb__20">
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
            <select name="sort"
              id="sort"
              class="sort"
              class="ml-auto">
              <option value="">Default</option>
              <option value="product_latest"
                @if (isset($_GET['sort']) && $_GET['sort'] == 'product_latest') selected @endif>Latest Product</option>
              <option value="product_name_a_to_z"
                @if (isset($_GET['sort']) && $_GET['sort'] == 'product_name_a_to_z') selected @endif>Product name A - Z</option>
              <option value="product_name_z_to_a"
                @if (isset($_GET['sort']) && $_GET['sort'] == 'product_name_z_to_a') selected @endif>Product name Z - A</option>
              <option value="price_low"
                @if (isset($_GET['sort']) && $_GET['sort'] == 'price_low') selected @endif>Low to Highest price</option>
              <option value="price_high"
                @if (isset($_GET['sort']) && $_GET['sort'] == 'price_high') selected @endif>Highest to Low price</option>
            </select>
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
                        <ul class="">
                          @foreach ($colors as $color)

                            <div class="form-check">
                              <input class="form-check-input color"
                                type="checkbox"
                                data-color="{{ $color }}"
                                value="{{ $color }}"
                                id="flexCheckDefault">
                              <label class="form-check-label"
                                for="flexCheckDefault">
                                {{ $color }}
                              </label>

                            </div>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 widget">
                      <h5 class="widget-title">By Size</h5>
                      <div class="loke_scroll">
                        <ul class="">
                          @foreach ($sizes as $size)
                            <div>
                              <input type="checkbox"
                                class="size"
                                value="{{ $size }}"
                                data-size="{{ $size }}" /> {{ $size }}
                            </div>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 widget">
                      <h5 class="widget-title">By Brand</h5>
                      <div class="loke_scroll">
                        <ul class="">
                          @foreach ($brands as $brand)
                            <div>
                              <input type="checkbox"
                                class="brand"
                                value="{{ $brand->id }}"
                                data-id="{{ $brand->id }}" /> {{ $brand->brand_name_en }}
                            </div>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 widget blockid_price">
                      <h5 class="widget-title">By Price</h5>
                      <div class="price_slider_wrapper mt__5">
                        <div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"
                                id="">৳</span>
                            </div>
                            <input type="text"
                              onkeypress="return event.charCode > 47 && event.charCode < 58;"
                              pattern="[0-9]{5}"
                              class="form-control  min_price"
                              placeholder="Min">
                            <input type="text"
                              onkeypress="return event.charCode > 47 && event.charCode < 58;"
                              pattern="[0-9]{5}"
                              class="form-control max_price"
                              placeholder="Max">
                            <input type="submit"
                              class="price"
                              style=" border-radius:0; border:1px solid grey"
                              value="Filter">
                          </div>

                        </div>
                      </div>
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
                class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default filterOption">
                @include('frontend.shop.listing')
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
