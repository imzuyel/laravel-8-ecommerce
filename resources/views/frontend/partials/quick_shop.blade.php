<div id="quick-shop-tpl" class="dn">
  <div class="wrap_qs_pr buy_qs_false kalles-quick-shop">
    <div class="qs_imgs_i row al_center mb__30">
      <div class="col-auto cl_pr_img">
        <div class="pr oh qs_imgs_wrap">
          <div class="row equal_nt qs_imgs nt_slider nt_carousel_qs p-thumb_qs" data-flickity='{"fade":false,"cellSelector":".qs_img_i","cellAlign":"center","wrapAround":true,"autoPlay":false,"prevNextButtons":false,"adaptiveHeight":true,"imagesLoaded":false,"lazyload":0,"dragThreshold":0,"pageDots":false,"rightToLeft":false}'>
            <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" id="product_image2" data-bgset=""></div>

          </div>
        </div>
      </div>
      <div class="col cl_pr_title tc">
        <h3 class="product-title pr fs__16 mg__0 fwm">
          @if (session()->get('language')==='bangla')
          <a id="product_name_bn2" class="cd chp" href="javascript:void(0)"> </a>
          @else
          <a id="product_name_en2" class="cd chp" href="javascript:void(0)"> </a>
          @endif

        </h3>
        <div id="price_qs"><span class="price ">
            <del id="price2"></del>
            <ins id="new_price2"></ins>
          </span>
          <span id="discount2display" class="qs_label onsale cw">
            <span id="discount2">
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="qs_info_i tc">
      <div class="qs_swatch">
        <div id="callBackVariant_qs" class="nt_green nt1_xs nt2_">
          <div id="cart-form_qs" class="nt_cart_form variations_form variations_form_qs">
            <div class="variations mb__40 style__circle size_medium style_color des_color_1">
              <div class="swatch is-color kalles_swatch_js" id="color_display_none2">
                <h4 class="swatch__title">Color:
                </h4>
                <select class="form-control" name="color" id="color">
                </select>
              </div>

              <div class="swatch is-label kalles_swatch_js" id="size_display2">
                <h4 class="swatch__title">Size:
                </h4>
                <select class="form-control" name="size" id="size">
                </select>
              </div>
            </div>

            <div class="variations_button in_flex column w__100">
              <div class="flex al_center column">
                <div class="quantity pr mb__15 order-1 qty__" id="sp_qty_qs">
                  <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" step="1" min="1" max="9999" name="quantity" value="1" inputmode="numeric" id="qty">
                  <div class="qty tc fs__14">
                    <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                      <i class="facl facl-plus"></i></button>
                    <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                      <i class="facl facl-minus"></i></button>
                  </div>
                </div>
                @if (session()->get('language')==='bangla')
                <button type="submit" data-time='6000' data-ani='shake' class="single_add_to_cart_button button truncate js_frm_cart w__100 mt__20 order-4" onclick="addToCart()">
                  <span class="txt_add ">কার্টে যোগ করুন</span>
                </button>
                @else
                <button type="submit" data-time='6000' data-ani='shake' class="single_add_to_cart_button button truncate js_frm_cart w__100 mt__20 order-4" onclick="addToCart()">
                  <span class="txt_add ">Add to cart</span>
                </button>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
