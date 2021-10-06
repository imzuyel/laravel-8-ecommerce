@extends('frontend.app')
@section('title')
  {{ Auth::user()->name }} Wishlist
@endsection
@push('css')
@endpush

@section('content')
  <div id="nt_content">

    <!--shop banner-->
    <div class="kalles-section page_section_heading">
      <div class="page-head tc pr oh page_head_wis_heading">
        <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
          data-bgset="{{ asset('/') }}frontend/assets/images/shop/shop-banner.jpg"></div>
        <div class="container pr z_100">
          <p class="mg__0">View your wishlist products</p>
        </div>
      </div>
    </div>
    <!--end shop banner-->

    <div id="kalles-section-wishlist_page"
      class="container container_cat pop_default cat_default mb__20">

      <!--grid control-->
      <div class="cat_toolbar row fl_center al_center mt__30">
        <div class="cat_view col-auto">
          <div class="dn dev_desktop">
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
              class="pr mr__10 cat_view_page view_3 active"></a>
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
      </div>
      <!--end grid control-->

      <!--product section-->
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="kalles-section tp_se_cdt">

            <!--filter result-->
            <div class="result_clear mt__30 mb__20 dn">
              <div class="sp_result_html dib cb clear_filter"><span class="cp">20</span> Products Found
              </div>
              <a class="clear_filter dib"
                href="#">Clear All Filter</a><a href="#"
                class="clear_filter dib bf_icons"
                aria-label="Remove tag Size  M">Size M</a><a href="#"
                class="clear_filter dib bf_icons"
                aria-label="Remove tag Color  Cyan">Color Cyan</a><a href="#"
                class="clear_filter dib bf_icons"
                aria-label="Remove tag Vendor  Kalles">Vendor Kalles</a>
            </div>
            <!--end filter result-->

            <!--products list-->
            <div
              class="on_list_view_false prs_wis products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default" id="wishlist">

            </div>
            <!--end products list-->



          </div>
        </div>
      </div>
      <!--end product section-->

    </div>

  </div>
@endsection


@push('js')
@endpush
