@extends('frontend.app')
@section('title')
  {{ $product->product_name_en }}
@endsection
@push('css')

  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/drift-basic.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/photoswipe.css') }}">

  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-electronic-vertical.css') }}">
  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/single-masonry-theme.css') }}">
  <link rel="stylesheet"
    href="{{ asset('frontend/assets/css/single-product.css') }}">

@endpush

@section('content')

  <div id="nt_content">
    <div class="sp-single sp-single-1 des_pr_layout_1 mb__60">

      <!-- breadcrumb -->
      <div class="bgbl pt__20 pb__20 lh__1">
        <div class="container">
          <div class="row al_center">
            <div class="col">
              @if (session()->get('language') === 'bangla')
                <nav class="sp-breadcrumb">
                  <a href="{{ route('frontend.home') }}">হোম</a><i class="facl facl-angle-right"></i><a
                    href="{{ route('categoryproductsbn', $product->category->category_slug_bn) }}">{{ $product->category->category_name_bn }}</a><i
                    class="facl facl-angle-right"></i>{{ $product->product_name_bn }}</a>
                </nav>
              @else
                <nav class="sp-breadcrumb">
                  <a href="{{ route('frontend.home') }}">Home</a><i class="facl facl-angle-right"></i><a
                    href="{{ route('categoryproductsen', $product->category->category_slug_en) }}">{{ $product->category->category_name_en }}</a><i
                    class="facl facl-angle-right"></i>{{ $product->product_name_en }}</a>
                </nav>
              @endif

            </div>
            @if (session()->get('language') === 'bangla')
              <div class="col-auto flex al_center">

                @if (isset($previous_product))
                  <a href="{{ route('frontend.detailsbn', ['category' => $previous_product->category->category_slug_bn, 'slug' => $previous_product->product_slug_bn]) }}"
                    class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-left"></i><span
                      class="tt_txt">
                      {{ $previous_product->product_name_bn }}
                    </span></a>
                @endif

                <a href="{{ route('categoryproductsbn', $product->category->category_slug_bn) }}"
                  class="pl__5 pr__5 fs__20 cd chp ttip_nt tooltip_bottom_left"><i
                    class="fwb iccl iccl-grid fs__15"></i><span
                    class="tt_txt">{{ $product->category->category_name_bn }}</span></a>

                @if (isset($next_product))
                  <a href="{{ route('frontend.detailsbn', ['category' => $next_product->category->category_slug_bn, 'slug' => $next_product->product_slug_bn]) }}"
                    class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-right"></i><span
                      class="tt_txt">{{ $next_product->product_name_bn }}</span></a>
                @endif
              </div>
            @else
              <div class="col-auto flex al_center">

                @if (isset($previous_product))
                  <a href="{{ route('frontend.detailsen', ['category' => $previous_product->category->category_slug_en, 'slug' => $previous_product->product_slug_en]) }}"
                    class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-left"></i><span
                      class="tt_txt">
                      {{ $previous_product->product_name_en }}
                    </span></a>
                @endif

                <a href="{{ route('categoryproductsen', $product->category->category_slug_en) }}"
                  class="pl__5 pr__5 fs__20 cd chp ttip_nt tooltip_bottom_left"><i
                    class="fwb iccl iccl-grid fs__15"></i><span
                    class="tt_txt">{{ $product->category->category_name_en }}</span></a>

                @if (isset($next_product))
                  <a href="{{ route('frontend.detailsen', ['category' => $next_product->category->category_slug_en, 'slug' => $next_product->product_slug_en]) }}"
                    class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-right"></i><span
                      class="tt_txt">{{ $next_product->product_name_en }}</span></a>

                @endif
              </div>
            @endif
          </div>
        </div>
      </div>
      <!-- end breadcrumb -->

      <div class="container container_cat cat_default">
        <div class="row product mt__40">
          <div class="col-md-12 col-12 thumb_left"
            data-featured-product-se
            data-id="_ppr">
            <div class="row mb__50 pr_sticky_content">

              <!-- product thumbnails -->
              <div class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide"
                data-pr-single-media-group>
                <div class="row theiaStickySidebar">
                  <div class="col-12 col-lg col_thumb">
                    <div
                      class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel is-draggable"
                      data-flickity='{"initialIndex": ".{{ $product->id }}","fade":false,"draggable":">1","cellSelector": ".p-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>

                      <div data-grname="not4"
                        data-grpvl="ntt4"
                        class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload {{ $product->id }} padding-top__98_204"
                        data-mdid="001"
                        data-mdtype="image"
                        data-bgset="/{{ $product->image }}"
                        data-ratio="1.0182868142444659"
                        data-src="/{{ $product->image }}"
                        data-width="1058"
                        data-height="1039"
                        data-cap="{{ session()->get('language') === 'bangla'? $product->product_name_bn : $product->product_name_en}}">
                      </div>

                      @forelse ($product->multi_images as $key=> $item)
                        <div data-grname="not4"
                          data-grpvl="ntt4"
                          class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload media_id_{{ $item->id }} padding-top__98_204"
                          data-mdid="{{ $item->id }}"
                          data-mdtype="image"
                          data-bgset="/{{ $item->image_name }}"
                          data-ratio="1.0182868142444659"
                          data-src="/{{ $item->image_name }}"
                          data-width="1058"
                          data-height="1039"
                          data-cap="{{ session()->get('language') === 'bangla'? $product->product_name_bn : $product->product_name_en}} {{ $key+1 }}">
                        </div>
                      @empty
                      @endforelse
                    </div>
                    <div class="p_group_btns pa flex">
                      <button
                        class="br__40 tc flex al_center fl_center bghp_ show_btn_pr_gallery ttip_nt tooltip_top_left">
                        <i class="las la-expand-arrows-alt"></i><span class="tt_txt">Click to enlarge</span>
                      </button>
                      <button aria-label="View in your space, loads item in augmented reality window"
                        class="pr__view-in-space ttip_nt tooltip_top_left"
                        data-kalles-xr
                        data-kalles-model3d-id="002"
                        data-kalles-title="Dance Bag Nylon"
                        data-kalles-xr-hidden>
                        <i class="las la-cube"></i><span class="product-single__view-in-space-text tt_txt">View in your
                          space</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-12 col-lg-auto col_nav nav_medium">
                    <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel"
                      data-flickityjs='{"initialIndex": ".{{ $product->id }}","cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": 3,"rightToLeft": false,"contain":  1,"freeScroll": 0}'>
                    </div>
                    <button type="button"
                      aria-label="Previous"
                      class="btn_pnav_prev pe_none">
                      <i class="las la-angle-up"></i>
                    </button>
                    <button type="button"
                      aria-label="Next"
                      class="btn_pnav_next pe_none">
                      <i class="las la-angle-down"></i>
                    </button>
                  </div>
                  <div class="dt_img_zoom pa t__0 r__0 dib"></div>
                </div>
              </div>
              <!-- end product thumbnails -->

              <!-- product info -->
              <div class="col-md-6 col-12 product-infors pr_sticky_su">
                <div class="theiaStickySidebar">
                  <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                    <h1 class="product_title entry-title fs__16">
                      @if (session()->get('language') === 'bangla')
                        {{ $product->product_name_bn }}
                      @else
                        {{ $product->product_name_en }}
                      @endif
                    </h1>


                    <div class="flex wrap fl_between al_center price-review">
                      <p class="price_range"
                        id="price_qv">
                        @if (isset($product->discount))
                          <del id="price">${{ $product->price }}</del>
                          <ins
                            id="new_price">${{ $product->price - ($product->discount * $product->price) / 100 }}</ins>
                        @else
                          <ins id="price">${{ $product->price }}</ins>
                        @endif

                      </p>

                    </div>
                    <div class="pr_short_des">
                      <p class="mg__0">
                        @if (session()->get('language') === 'bangla')
                          {{ $product->short_description_bn }}
                        @else
                          {{ $product->short_description_en }}
                        @endif
                      </p>
                    </div>
                    <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                      @if (count($product_color) > 1)
                        <div class="swatch is-color kalles_swatch_js">
                          <h4 class="swatch__title">Color:
                            <span class="nt_name_current user_choose_js"></span>
                          </h4>
                          <select name="color"
                            id="color">
                            @foreach ($product_color as $color)
                              <option value="{{ $color }}">{{ $color }}</option>
                            @endforeach

                          </select>

                        </div>
                      @endif
                      @if (count($size) > 1)
                        <div class="swatch is-label kalles_swatch_js">
                          <h4 class="swatch__title">Size:
                            <span class="nt_name_current user_choose_js"></span>
                          </h4>
                          <select name="size"
                            id="size">
                            @foreach ($size as $s)
                              <option value="{{ $s }}">{{ $s }}</option>
                            @endforeach

                          </select>
                        </div>
                      @endif
                    </div>
                    <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                      <div id="callBackVariant_ppr">
                        <div class="nt_cart_form variations_form variations_form_ppr">
                          <div class="variations_button in_flex column w__100 buy_qv_false">
                            <div class="flex wrap">
                              <div class="quantity pr mr__10 order-1 qty__true"
                                id="sp_qty_qv">
                                <input type="number"
                                  class="input-text qty text tc qty_pr_js qty_cart_js"
                                  value="1"
                                  name="quantity"
                                  inputmode="numeric"
                                  id="qty">
                                <div class="qty tc fs__14">
                                  <button type="button"
                                    class="plus db cb pa pd__0 pr__15 tr r__0">
                                    <i class="facl facl-plus"></i>
                                  </button>
                                  <button type="button"
                                    class="minus db cb pa pd__0 pl__15 tl l__0">
                                    <i class="facl facl-minus"></i>
                                  </button>
                                </div>
                              </div>
                              @guest
                                <div id="lostclass"
                                  class="nt_add_w ts__03 pa order-3" onclick="addToWishlist()">
                                  <a href="#"
                                    class="cb chp ttip_nt tooltip_top_left " >
                                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                  </a>
                                </div>
                              @endguest

                              @auth

                                @if (Auth::user()->itemOnWishlist($product->id))
                                  <div  class="nt_add_w ts__03 pa order-3 wis_added" onclick="addToWishlist()">
                                    <a href="#"
                                      class="cb chp ttip_nt tooltip_top_left "
                                      >
                                      <span class="tt_txt">Wishlist</span><i class="facl facl-heart-o"></i>
                                    </a>
                                  </div>
                                @else
                                  <div class="nt_add_w ts__03 pa order-3" onclick="addToWishlist()">
                                    <a href="#"
                                      class="cb chp ttip_nt tooltip_top_left"
                                      >
                                      <span class="tt_txt">Wishlist</span><i class="facl facl-heart-o"></i>
                                    </a>
                                  </div>
                                @endif
                              @endauth
                              <input type="hidden"
                                value="{{ $product->id }}"
                                id="product_id">
                              <button type="submit"
                                data-time="6000"
                                data-ani="shake"
                                class="single_add_to_cart_button button truncate w__100 mt__20 order-4 d-inline-block animated "
                                onclick="addToCart()">
                                <span class="txt_add ">Add to cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product_meta">
                      <span class="sku_wrapper"><span class="cb">SKU:</span> <span id="sku"
                          class="sku value cg">
                          {{ $product->product_code }}</span></span>

                      @if (session()->get('language') === 'bangla')
                        <span class="posted_in"><span class="cb">ক্যাটাগরি:</span> <a href="{{ route('categoryproductsbn', $product->category->category_slug_bn) }}"
                            class="cg"
                            id="category_name_bn">{{ $product->category->category_name_bn }}</a>
                        </span>
                      @else
                        <span class="posted_in"><span class="cb">Category:</span> <a href="{{ route('categoryproductsen', $product->category->category_slug_en) }}"
                            class="cg"
                            id="category_name_en">{{ $product->category->category_name_en }}</a>
                        </span>
                      @endif
                    </div>
                    <div class="social-share tc">
                      <div class="at-share-btn-elements kalles-social-media d-block text-left fs__0 lh__1">
                        <a target="_blank" href="https://www.facebook.com/imzuyel"
                          class="at-icon-wrapper at-share-btn at-svc-facebook bg-white kalles-social-media__btn">
                          <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 32 32"
                            class="at-icon at-icon-facebook">
                            <g>
                              <path
                                d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"
                                fill-rule="evenodd"></path>
                            </g>
                          </svg>
                        </a>
                        <a target="_blank" href="https://twitter.com/imzuyel"
                          class="at-icon-wrapper at-share-btn at-svc-twitter bg-white kalles-social-media__btn">
                          <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 32 32"
                            class="at-icon at-icon-twitter">
                            <g>
                              <path
                                d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"
                                fill-rule="evenodd"></path>
                            </g>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end product info -->

            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Related product-->
     @if ($product->category->products->count() > 1)

     <div class="kalles-section nt_section type_prs_countd_deal type_carousel tp_se_cdt">
        <div class="kalles-medical__deal-section container">
          <div class="medizin_laypout">
            <div class="product-cd-header in_flex wrap al_center fl_center tc">
              <h6 class="product-cd-heading section-title">
                {{ session()->get('language') === 'bangla' ? 'More product' : 'More products' }}
              </h6>

            </div>
            <div class="products nt_products_holder row fl_center row_pr_1 js_carousel nt_slider nt_cover ratio1_1 position_8 space_ prev_next_3 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_2 equal_nt" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>

              @forelse ($product->category->products->where('id', '!=', $product->id) as $product)
              @if (session()->get('language') === 'bangla')
              <div class="col-lg-15 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                <div class="product-inner pr">
                  <div class="product-image pr oh lazyload">
                    <span class="tc nt_labels pa pe_none cw"><span class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- '.$product->discount . ' %' : 'New' }}</span></span>
                    <a class="d-block" href="{{ route('frontend.detailsbn',['category'=>$product->category->category_slug_bn,'slug'=>$product->product_slug_bn]) }}">
                      <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="/{{ $product->image }}"></div>
                    </a>
                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                      <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="/{{ $product->image }}"></div>
                    </div>

                    <div class="hover_button op__0 tc pa flex column ts__03">

                      <a  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView" href="#"  product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i class="iccl iccl-cart"></i><span>কার্টে যোগ
                          করুন</span></a>
                    </div>
                  </div>
                  <div class="product-info mt__15">
                    <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_bn }}</a></div>
                    <h3 class="product-title pr fs__14 mg__0 fwm">
                      <a class="cd chp" href="{{ route('frontend.detailsbn',['category'=>$product->category->category_slug_bn,'slug'=>$product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
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
                    <a class="d-block" href="{{ route('frontend.detailsen',['category'=>$product->category->category_slug_en,'slug'=>$product->product_slug_en]) }}">
                      <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="/{{ $product->image }}"></div>
                    </a>
                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                      <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="/{{ $product->image }}"></div>
                    </div>

                    <div class="hover_button op__0 tc pa flex column ts__03">

                      <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView" product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                          cart</span></a>
                    </div>
                  </div>
                  <div class="product-info mt__15">
                    <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_en }}</a></div>
                    <h3 class="product-title pr fs__14 mg__0 fwm">
                      <a class="cd chp" href="{{ route('frontend.detailsen',['category'=>$product->category->category_slug_en,'slug'=>$product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
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
        </div>
      </div>
      <!-- end featured products-->
    </div>
    @endif
     <!--End Related product-->



@endsection



@push('js')
  <script src="{{ asset('frontend/assets/js/photoswipe.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/photoswipe-ui-default.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/drift.min.js') }}"></script>

@endpush
