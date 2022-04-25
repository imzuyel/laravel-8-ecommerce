<div id="quick-view-tpl" class="dn">
  <div class="product-quickview single-product-content img_action_zoom kalles-quick-view-tpl">
    <div class="row product-image-summary">
      <div class="col-lg-7 col-md-6 col-12 product-images pr oh">
        <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label " id="discount_bg"><span id="discount"></span></span></span>
        <div class="images">
          <div class="product-images-slider tc equal_nt nt_slider nt_carousel_qv p-thumb_qv nt_contain ratio_imgtrue position_8" data-flickity='{ "fade":true,"cellSelector": ".q-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 0,"pageDots": true,"rightToLeft": false }'>
            <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
              <img id="product_image" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-12 summary entry-summary pr">
        <div class="summary-inner gecko-scroll-quick">
          <div class="gecko-scroll-content-quick">
            <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
              <h1 class="product_title entry-title fs__16">
                @if (session()->get('language')==='bangla')
                <a id="product_name_bn" href=" product_name"></a>
                @else
                <a id="product_name_en" href=" product_name"></a>
                @endif

              </h1>
              <div class="flex wrap fl_between al_center price-review">
                <p class="price_range" id="price_qv">
                  <del id="price"></del>
                  <ins id="new_price"></ins>
                </p>
                <a href="" class="rating_sp_kl dib">
                  <div class="kalles-rating-result">
                    <span class="kalles-rating-result__pipe">
                      <span class="kalles-rating-result__start"></span>
                      <span class="kalles-rating-result__start"></span>
                      <span class="kalles-rating-result__start"></span>
                      <span class="kalles-rating-result__start active"></span>
                      <span class="kalles-rating-result__start"></span>
                    </span>
                    <span class="kalles-rating-result__number">(12 reviews)</span>
                  </div>
                </a>
              </div>
              <div class="pr_short_des">
                @if (session()->get('language')==='bangla')
                <p class="mg__0" id="short_description_bn"></p>
                @else
                <p class="mg__0" id="short_description_en"></p>
                @endif

              </div>
              <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                <div id="callBackVariant_qv" class="nt_pink nt1_ nt2_">
                  <div id="cart-form_qv" class="nt_cart_form variations_form variations_form_qv">
                    <div class="variations mb__40 style__circle size_medium style_color des_color_1">

                      <div class="swatch is-color kalles_swatch_js" id="color_display_none">
                        <h4 class="swatch__title">Color:
                        </h4>
                        <select class="form-control" name="color" id="color">
                        </select>
                      </div>

                      <div class="swatch is-label kalles_swatch_js" id="size_display">
                        <h4 class="swatch__title">Size:
                        </h4>
                        <select class="form-control" name="size" id="size">
                        </select>
                      </div>
                    </div>
                    <div class="variations_button in_flex column w__100 buy_qv_false">
                      <div class="flex wrap">
                        <div class="quantity pr mr__10 order-1 qty__true" id="sp_qty_qv">
                          <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" value="1" name="quantity" inputmode="numeric" id="qty">
                          <div class="qty tc fs__14">
                            <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                              <i class="facl facl-plus"></i>
                            </button>
                            <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                              <i class="facl facl-minus"></i>
                            </button>
                          </div>
                        </div>
                        <input type="hidden" id="product_id">
                        @if (session()->get('language')==='bangla')
                        <button type="submit" data-time='6000' data-ani='shake' class="single_add_to_cart_button button truncate js_frm_cart w__100 mt__20 order-4"  onclick="addToCart()">
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
              <div id="trust_seal_qv" class="pr_trust_seal tl">
                <p class="mess_cd cb mb__10 fwm tu fs_16"></p>

              </div>
              <div class="product_meta">
                <span class="sku_wrapper"><span class="cb">SKU:</span> <span id="sku" class="sku value cg"></span></span>

                @if (session()->get('language')==='bangla')
                <span class="posted_in"><span class="cb">ক্যাটাগরি:</span> <a href="" class="cg" id="category_name_bn"></a>
                </span>
                @else
                <span class="posted_in"><span class="cb">Category:</span> <a href="" class="cg" id="category_name_en"></a>
                </span>
                @endif
              </div>
              <div class="social-share tc">
                <div class="at-share-btn-elements kalles-social-media d-block text-left fs__0 lh__1">
                  <a target="_blank" href="https://www.facebook.com/imzuyel" class="at-icon-wrapper at-share-btn at-svc-facebook bg-white kalles-social-media__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-facebook">
                      <g>
                        <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                      </g>
                    </svg>
                  </a>
                  <a target="_blank" href="https://twitter.com/imzuyel" class="at-icon-wrapper at-share-btn at-svc-twitter bg-white kalles-social-media__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-twitter">
                      <g>
                        <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                      </g>
                    </svg>
                  </a>

                  <a target="_blank" href="https://www.messenger.com/imzuyel" class="at-icon-wrapper at-share-btn at-svc-messenger bg-white kalles-social-media__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-messenger">
                      <g>
                        <path d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
