@extends('frontend.app')
@section('title')
  Shopping cart
@endsection
@push('css')
@endpush

@section('content')
<div id="nt_content">

    <!-- hero title -->
    <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh page_bg_img page_head_cart_heading">
            <div class="parallax-inner nt_parallax_false nt_bg_lz pa t__0 l__0 r__0 b__0 lazyload" data-bgset="{{ asset('/') }}frontend/assets/images/shopping-cart/shopping-cart-head.jpg">
            </div>
            <div class="container pr z_100"><h1 class="tu mb__10 cw">Shopping cart</h1></div>
        </div>
    </div>
    <!-- end hero title -->

    <!--cart section-->
    <div class="kalles-section cart_page_section container mt__60">

            <div class="cart_header">
                <div class="row al_center">
                    <div class="col-5">Product</div>
                    <div class="col-3 tc">Price</div>
                    <div class="col-2 tc">Quantity</div>
                    <div class="col-2 tc tr_md">Total</div>
                </div>
            </div>
            <div class="cart_items js_cat_items" id="cartItem">


            </div>
            <div class="cart__footer mt__60">
                <div class="row">
                    <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50">
                      <label for="couponcode" class="cart-couponcode__label db cd mt__20 mb__10">Coupon:</label>
                        <p>Coupon code will work on checkout page</p>
                        <input type="text" name="discount" id="couponcode" value="" placeholder="Coupon code">
                    </div>
                    <div class="col-12 tr_md tc order-md-4 order-4 col-md-6">
                        <div class="total row in_flex fl_between al_center cd fs__18 tu">
                            <div class="col-auto"><strong>Subtotal:</strong></div>
                            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
                                <div class="cart_tot_price" id="cart_tot_price"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p class="db txt_tax_ship mb__5">Taxes, shipping and discounts codes calculated at checkout</p>
                        <p class="pr dib mb__5">
                            <input type="checkbox" id="cart_agree_2" class="js_agree_ck mr__5" name="ck_lumise">
                            <label for="cart_agree_2">I agree with the terms and conditions.</label>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
                            </svg>
                        </p>
                        <div class="clearfix"></div>

                        <button type="submit" data-confirm="ck_lumise" name="checkout" class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld w__100">Check Out</button>
                        <div class="clearfix"></div>
                        <div class="cat_img_trust mt__10">
                            <img class="lz_op_ef w-50 lazyloaded" src="assets/images/shopping-cart/cart_image.png" data-src="assets/images/shopping-cart/cart_image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        <div class="shipping_calculator shipping_calc_page row al_center fl_center mt__60 mt-md-0">
            <h3 class="mg__0 tc mt__20 mb__20 col-auto truncate">Estimate Shipping</h3>
            <p class="field col-lg-3 col-md-4 col-12">
                <label for="address_country_ship_2">Country</label>
                <select id="address_country_ship_2">
                    <option value="">---</option>
                    <option value="United States" selected="">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Italy">Italy</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                    <option value="Spain">Spain</option>
                    <option value="Australia">Australia</option>
                    <option value="Finland">Finland</option>
                    <option value="Austria">Austria</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="Chile">Chile</option>
                    <option value="Cuba">Cuba</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Japan">Japan</option>
                </select>
            </p>
            <p class="field col-lg-3 col-md-4 col-12" id="address_province_container_ship">
                <label for="address_province_ship" id="address_province_label">Province</label>
                <select id="address_province_ship">
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="Armed Forces Americas">Armed Forces Americas</option>
                    <option value="Armed Forces Europe">Armed Forces Europe</option>
                    <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="District of Columbia">Washington DC</option>
                    <option value="Federated States of Micronesia">Micronesia</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Guam">Guam</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Palau">Palau</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas" selected="">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virgin Islands">U.S. Virgin Islands</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                </select>
            </p>
            <p class="field col-lg-3 col-md-4 col-12">
                <label for="address_zip_ship_2">Postal/Zip Code</label>
                <input type="text" id="address_zip_ship_2"/>
            </p>
            <p class="field col-lg-3 col-md-6 col-12 mg__0">
                <input type="button" class="get_rates button" value="Calculate Shipping"/>
            </p>
        </div>
    </div>
    <!--end cart section-->

    <!--product recommendations section-->
    <div class="kalles-section tp_se_cdt">
        <div class="related product-extra mt__70">
            <div class="container">
                <div class="wrap_title des_title_1 mb__20">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                        <span class="mr__10 ml__10">You may also like</span></h3>
                </div>
                <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-03.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-04.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M, L</p></div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Ridley High Waist</a>
                                </h3>
                                <span class="price dib mb__5">$36.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-40%</span></span></span>
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-49.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-50.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M</p></div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Skin Sweatpans</a>
                                </h3>
                                <span class="price dib mb__5"><del>$75.00</del><ins>$45.00</ins></span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-50.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__pink"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink lazyload"></span></span>
                                    <span data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-51.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__cyan"><span class="tt_txt">Cyan</span><span class="swatch__value bg_color_cyan lazyload"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-21.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-22.jpg"></div>
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
                                    <a class="cd chp" href="product-detail-layout-01.html">Black mountain hat</a>
                                </h3>
                                <span class="price dib mb__5">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-31.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-32.jpg"></div>
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
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Men pants</a>
                                </h3>
                                <span class="price dib mb__5">$49.00 – $56.00</span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-31.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
                                    <span data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-33.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-19.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-20.jpg"></div>
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
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-33.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-34.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15"><h3 class="product-title pr fs__14 mg__0 fwm">
                                <a class="cd chp" href="product-detail-layout-01.html">Sunny Life</a>
                            </h3>
                                <span class="price dib mb__5">$68.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end product recommendations section-->

    <!--product recently viewed section-->
    <div class="kalles-section tp_se_cdt">
        <div class="related product-extra mt__70 mb__80">
            <div class="container">
                <div class="wrap_title des_title_1 mb__30">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                        <span class="mr__10 ml__10">Recently viewed products</span></h3>
                </div>
                <div class="sortby_3 products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                    <span class="tc nt_labels pa pe_none cw">
                                        <span class="onsale nt_label"><span>-34%</span></span>
                                    </span>
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
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">La Bohème Rose Gold</a>
                                </h3>
                                <span class="price dib mb__5"><del>$60.00</del><ins>$40.00</ins></span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-27.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink"></span></span>
                                    <span data-bgset="{{ asset('/') }}frontend/assets/images/products/pr-35.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-37.png"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-fashion-9/pr-s-38.png"></div>
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
                                    <a class="cd chp" href="product-detail-layout-01.html">Simple Skin T-shirt</a>
                                </h3>
                                <span class="price dib mb__5">$56.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-01.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-classic/pr-02.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">XS, S, M, L, XL</p></div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Analogue Resin Strap</a>
                                </h3>
                                <span class="price dib mb__5">$30.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-lookbook-collection/pr-pin-51.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/home-lookbook-collection/pr-pin-52.jpg"></div>
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
                                    <a class="cd chp" href="product-detail-layout-01.html">Stripe Long Sleeve Top</a>
                                </h3>
                                <span class="price dib mb__5">$15.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="db" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/single-product/pr-viewed-01.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/single-product/pr-viewed-02.jpg"></div>
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
                                    <a class="cd chp" href="product-detail-layout-01.html">Felt Cowboy Hat</a>
                                </h3>
                                <span class="price dib mb__5">$22.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="db" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/single-product/pr-viewed-03.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/') }}frontend/assets/images/single-product/pr-viewed-04.jpg"></div>
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
                                    <p class="truncate mg__0 w__100">S, M, L</p></div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Blue Jean</a></h3>
                                <span class="price dib mb__5">$25.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end product recently viewed section-->

</div>
@endsection


@push('js')

@endpush
