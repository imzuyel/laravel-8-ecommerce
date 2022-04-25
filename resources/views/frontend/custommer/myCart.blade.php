@extends('frontend.app')
@section('title')
  @if (session()->get('language') === 'bangla')
    শপিং কার্ট
  @else
    Shopping cart
  @endif
@endsection
@push('css')
@endpush

@section('content')
  <div id="nt_content">

    <!-- hero title -->
    <div class="kalles-section page_section_heading">
      <div class="page-head tc pr oh page_bg_img page_head_cart_heading">
        <div class="parallax-inner nt_parallax_false nt_bg_lz pa t__0 l__0 r__0 b__0 lazyload"
          data-bgset="{{ asset('/') }}frontend/assets/images/shopping-cart/shopping-cart-head.jpg">
        </div>
        <div class="container pr z_100">
          <h1 class="tu mb__10 cw">
            @if (session()->get('language') === 'bangla')
              শপিং কার্ট
            @else
              Shopping cart
            @endif
          </h1>
        </div>
      </div>
    </div>
    <!-- end hero title -->
    <!--cart section-->
    @if (session()->get('language') === 'bangla')
      <div class="kalles-section cart_page_section container mt__60">
        @if (Cart::content()->count() > 0)
          <div class="cart_header cartCheckout">
            <div class="row al_center mb_5">
              <div class="col-5">পণ্য</div>
              <div class="col-3 tc">দাম</div>
              <div class="col-2 tc">পরিমাণ </div>
              <div class="col-2 tc tr_md">মোট</div>
            </div>
          </div>
        @endif
        <div class="cart_items js_cat_items"
          id="cartItem">
        </div>
        @if (Cart::content()->count() > 0)
          <div class="cart__footer mt__60 cartCheckout">
            <div class="row">
              @if (Session::has('coupon'))
                <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50">
                  <div class="widget widget_text">
                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                      <span class="txt_title">কুপন</span>

                    </h3>
                    <div class="widget_footer newl_des_1">
                      <p>কুপন প্রয়োগ করা হয়েছে </p>
                      <form id="contact_form"
                        class="mc4wp-form pr z_100">
                        <div class="mc4wp-form-fields">

                        </div>

                      </form>
                      alt="">
                      </p>
                    </div>
                  </div>
                </div>
              @else
                <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50"
                  id="showCoupon"
                  style="display:none;">
                  <div class="widget widget_text">
                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                      <span class="txt_title">কুপন</span>

                    </h3>
                    <div class="widget_footer newl_des_1">
                      <p>কুপন প্রয়োগ করা হয়েছে </p>
                      <form id="contact_form"
                        class="mc4wp-form pr z_100">
                        <div class="mc4wp-form-fields">

                        </div>

                      </form>

                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50"
                  id="hideCoupon">
                  <div class="widget widget_text">
                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                      <span class="txt_title">কুপন</span>

                    </h3>
                    <div class="widget_footer newl_des_1">
                      <p>যদি ছাড় পেতে চান তাহলে কুপন প্রয়োগ করুন</p>
                      <form id="contact_form"
                        class="mc4wp-form pr z_100">
                        <div class="mc4wp-form-fields">
                          <div class="signup-newsletter-form row no-gutters pr oh ">
                            <div class="col col_email">
                              <input type="text"
                                id="couponApplyText"
                                name="coupon"
                                id="couponId"
                                placeholder="আপনার কুপন "
                                value=""
                                class="tc tl_md input-text"
                                required="required">
                            </div>
                            <div class="col-auto">
                              <button type="submit"
                                class=" btn_checkout button button_primary tu  js_add_ld w__100"
                                id="couponApply">
                                <span>প্রয়োগ করুন</span>
                              </button>
                            </div>
                          </div>
                        </div>

                      </form>

                    </div>
                  </div>
                </div>
              @endif

              <div class="col-12 tr_md tc order-md-4 order-4 col-md-6">
                <div id="couponData"></div>
                <a href="{{ route('frontend.commingSoon') }}"
                  data-confirm="ck_lumise"
                  name="checkout"
                  class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld">চেক আউট</a>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
        @endif
      </div>
    @else
      <div class="kalles-section cart_page_section container mt__60">
        @if (Cart::content()->count() > 0)
          <div class="cart_header cartCheckout">
            <div class="row al_center mb_5">
              <div class="col-5">Product</div>
              <div class="col-3 tc">Price</div>
              <div class="col-2 tc">Quantity</div>
              <div class="col-2 tc tr_md">Total</div>
            </div>
          </div>
        @endif
        <div class="cart_items js_cat_items"
          id="cartItem">
        </div>
        @if (Cart::content()->count() > 0)
          <div class="cart__footer mt__60 cartCheckout">
            <div class="row">
              @if (Session::has('coupon'))
                <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50">
                  <div class="widget widget_text">
                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                      <span class="txt_title">Coupon</span>

                    </h3>
                    <div class="widget_footer newl_des_1">
                      <p>Coupon Applied </p>
                      <form id="contact_form"
                        class="mc4wp-form pr z_100">
                        <div class="mc4wp-form-fields">

                        </div>

                      </form>

                    </div>
                  </div>
                </div>
              @else
                <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50"
                  id="showCoupon"
                  style="display:none;">
                  <div class="widget widget_text">
                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                      <span class="txt_title">Coupon</span>

                    </h3>
                    <div class="widget_footer newl_des_1">
                      <p>Coupon Applied </p>
                      <form id="contact_form"
                        class="mc4wp-form pr z_100">
                        <div class="mc4wp-form-fields">

                        </div>

                      </form>

                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50"
                  id="hideCoupon">
                  <div class="widget widget_text">
                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                      <span class="txt_title">Coupon</span>

                    </h3>
                    <div class="widget_footer newl_des_1">
                      <p>Apply coupon if you have for get discount</p>
                      <form id="contact_form"
                        class="mc4wp-form pr z_100">
                        <div class="mc4wp-form-fields">
                          <div class="signup-newsletter-form row no-gutters pr oh ">
                            <div class="col col_email">
                              <input type="text"
                                id="couponApplyText"
                                name="coupon"
                                id="couponId"
                                placeholder="Your counpon "
                                value=""
                                class="tc tl_md input-text"
                                required="required">
                            </div>
                            <div class="col-auto">
                              <button type="submit"
                                class=" btn_checkout button button_primary tu  js_add_ld w__100"
                                id="couponApply">
                                <span>Apply</span>
                              </button>
                            </div>
                          </div>
                        </div>

                      </form>

                    </div>
                  </div>
                </div>
              @endif

              <div class="col-12 tr_md tc order-md-4 order-4 col-md-6">
                <div id="couponData"></div>
                <a href="{{ route('frontend.commingSoon') }}"
                  data-confirm="ck_lumise"
                  name="checkout"
                  class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld">Check Out</a>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
        @endif
      </div>
    @endif
    <!--End cart section-->
  </div>
@endsection


@push('js')

@endpush
