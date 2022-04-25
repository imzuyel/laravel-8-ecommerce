<!-- mini cart box -->
<div id="nt_cart_canvas" class="nt_fk_canvas dn">
  <div class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
    <div class="mini_cart_header flex fl_between al_center">
      <div class="h3 fwm tu fs__16 mg__0">{{ session()->get('language') === 'bangla' ? 'শপিং কার্ট' : 'Shopping cart' }}</div>
      <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
    </div>

    <div class="mini_cart_wrap">
      <div class="mini_cart_content fixcl-scroll">
        <div class="fixcl-scroll-content">

            <div id="emptyCart">
            </div>

          <div class="mini_cart_items js_cat_items lazyload">
            <div id="moreCart">

            </div>

          </div>

        </div>
      </div>
      <div class="mini_cart_footer js_cart_footer">
        <div class="js_cat_dics"></div>
        <div class="total row fl_between al_center">
          <div class="col-auto"><strong>Subtotal:</strong></div>
          <div class="col-auto tr js_cat_ttprice">
            <div class="cart_tot_price" id="cart_tot_price"></div>
          </div>
        </div>
        <a href="{{ route('myCart') }}" class="button btn-checkout mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white">View cart</a>
        <a href="{{ route('frontend.commingSoon') }}" class="button btn-cart mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center cd-imp ">Check Out</a>

      </div>
    </div>



  </div>
</div>
<!-- end mini cart box-->
