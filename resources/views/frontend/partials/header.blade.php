    <!-- header -->
    <header id="ntheader"
      class="ntheader header_8 h_icon_la">
      <div class="ntheader_wrapper pr z_200">
        <div id="kalles-section-header_top"
          class="kalles-section">
          <div class="h__top bgbl pt__10 pb__10 fs__12 flex fl_center al_center">
            <div class="container">
              <div class="row al_center">
                <div class="col-lg-3 col-12 tc tl_lg col-md-12 dn_false_1024">
                  <div class="nt-social">
                    <a href="#"
                      class="facebook cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Facebook</span><i class="facl facl-facebook"></i>
                    </a>
                    <a href="#"
                      class="twitter cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Twitter</span><i class="facl facl-twitter"></i>
                    </a>
                    <a href="#"
                      class="instagram cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Instagram</span><i class="facl facl-instagram"></i>
                    </a>
                    <a href="#"
                      class="linkedin cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Linkedin</span><i class="facl facl-linkedin"></i>
                    </a>
                    <a href="#"
                      class="pinterest cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Pinterest</span><i class="facl facl-pinterest"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 col-12 tc col-md-12 dn_false_1024">
                  <div class="header-text">Summer sale discount off
                    <span class="cr fwm">20%</span> use code “SUMMER20”!
                    <a href="shop.html"><span class="cr fwm">Shop Now</span> </a>
                  </div>
                </div>
                <div class="col-lg-3 col-12 tc col-md-12 tr_lg dn_false_1024">
                  <div class="nt_currency pr cg currencies sp_currencies wsn dib cur_stt_0">
                    @if (session()->get('language') === 'bangla')
                      <span class="nt-currency-flag--usd--w16-h-12 active ">ভাষা</span><i
                        class="facl facl-angle-down ml__5"></i>
                    @else
                      <span class="nt-currency-flag--usd--w16-h-12 active ">Language</span><i
                        class="facl facl-angle-down ml__5"></i>
                    @endif

                    <ul class="pa pe_none ts__03 bgbl ul_none tl op__0 z_100 r__0 pt__15 pb__15 pr__15 pl__15">
                      <li><a class="nt-currency-flag--aud--w16-h-12 cg db"
                          href="{{ route('language.english') }}">English</a></li>
                      <li><a class="nt-currency-flag--cad--w16-h-12 cg db"
                          href="{{ route('language.bangla') }}">বাংলা</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="kalles-section-header_8"
          class="kalles-section sp_header_mid">
          <div class="header__mid">
            <div class="container">
              <div class="row al_center css_h_se">
                <div class="col-md-4 col-3 dn_lg">
                  <a href="#"
                    data-id="#nt_menu_canvas"
                    class="push_side push-menu-btn lh__1 flex al_center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      width="30"
                      height="16"
                      viewBox="0 0 30 16">
                      <rect width="30"
                        height="1.5"></rect>
                      <rect y="7"
                        width="20"
                        height="1.5"></rect>
                      <rect y="14"
                        width="30"
                        height="1.5"></rect>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 tc tl_lg">
                  <div class="branding ts__05 lh__1">
                    <a class="dib"
                      href="index.html">
                      <img class="w__95 logo_normal dn db_lg"
                        src="/{{ setting('site_logo') }}"
                        alt="Kalles Template">
                      <img class="w__100 logo_sticky dn"
                        src="/{{ setting('site_logo') }}"
                        alt="Kalles Template">
                      <img class="w__100 logo_mobile dn_lg"
                        src="/{{ setting('site_logo') }}"
                        alt="Kalles Template">
                    </a>
                  </div>
                </div>
                <div class="col-6 dn db_lg cl_h_search atc_opended_rs">
                  <form action="#"
                    method="get"
                    class="h_search_frm js_frm_search pr"
                    role="search">
                    <div class="row no-gutters al_center">
                      <div class="frm_search_cat col-auto">
                        <select name="product_type">
                          <option value="*">All Categories</option>
                          <option value="Acessories">Acessories</option>
                          <option value="Bag">Bag</option>
                          <option value="Camera">Camera</option>
                          <option value="Decor">Decor</option>
                          <option value="Earphones">Earphones</option>
                          <option value="Electric">Electric</option>
                          <option value="Furniture">Furniture</option>
                          <option value="Headphone">Headphone</option>
                          <option value="Men">Men</option>
                          <option value="Shoes">Shoes</option>
                          <option value="Speaker">Speaker</option>
                          <option value="Watch">Watch</option>
                          <option value="Women">Women</option>
                        </select>
                      </div>
                      <div class="col-auto h_space_search"></div>
                      <div class="frm_search_input pr oh col">
                        <input class="h_search_ip js_iput_search"
                          autocomplete="off"
                          type="text"
                          name="q"
                          placeholder="I’m shopping for...."
                          value="" />
                      </div>
                      <div class="frm_search_cat col-auto">
                        <button class="h_search_btn js_btn_search"
                          type="submit">Search</button>
                      </div>
                    </div>
                  </form>
                  <div class="pr">
                    <div class="mini_cart_content fixcl-scroll widget">
                      <div class="fixcl-scroll-content product_list_widget">
                        <div class="ld_bar_search"></div>
                        <div class="skeleton_wrap skeleton_js dn">
                          <div class="row mb__10 pb__10">
                            <div class="col-auto widget_img_pr">
                              <div class="skeleton_img"></div>
                            </div>
                            <div class="col widget_if_pr">
                              <div class="skeleton_txt1"></div>
                              <div class="skeleton_txt2"></div>
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col-auto widget_img_pr">
                              <div class="skeleton_img"></div>
                            </div>
                            <div class="col widget_if_pr">
                              <div class="skeleton_txt1"></div>
                              <div class="skeleton_txt2"></div>
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col-auto widget_img_pr">
                              <div class="skeleton_img"></div>
                            </div>
                            <div class="col widget_if_pr">
                              <div class="skeleton_txt1"></div>
                              <div class="skeleton_txt2"></div>
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col-auto widget_img_pr">
                              <div class="skeleton_img"></div>
                            </div>
                            <div class="col widget_if_pr">
                              <div class="skeleton_txt1"></div>
                              <div class="skeleton_txt2"></div>
                            </div>
                          </div>
                        </div>
                        <div class="js_prs_search">
                          <div class="row mb__10 pb__10">
                            <div class="col widget_img_pr">
                              <a class="db pr oh"
                                href="product-detail-layout-01.html">
                                <img
                                  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                  data-src="{{ asset('/') }}frontend/assets/images/home-electronic-vertical/pr-01-80x.jpg"
                                  class="w__100 lazyload lz_op_ef"
                                  alt="Ysamsung Camera" />
                              </a>
                            </div>
                            <div class="col widget_if_pr">
                              <a class="product-title db"
                                href="product-detail-layout-01.html">Ysamsung Camera</a>
                              <del>$35.00</del>
                              <ins>$25.00</ins>
                              <span class="onsale nt_label">-29%</span>
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col widget_img_pr">
                              <a class="db pr oh"
                                href="product-detail-layout-01.html">
                                <img
                                  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                  data-src="{{ asset('/') }}frontend/assets/images/home-electronic-vertical/pr-02-80x.jpg"
                                  class="w__100 lazyload lz_op_ef"
                                  alt="Beats Solo3 Wireless" />
                              </a>
                            </div>
                            <div class="col widget_if_pr">
                              <a class="product-title db"
                                href="product-detail-layout-01.html">Beats Solo3 Wireless</a>$35.00
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col widget_img_pr">
                              <a class="db pr oh"
                                href="product-detail-layout-01.html">
                                <img
                                  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                  data-src="{{ asset('/') }}frontend/assets/images/home-electronic-vertical/pr-03-80x.jpg"
                                  class="w__100 lazyload lz_op_ef"
                                  alt="Lomo Sanremo Edition" />
                              </a>
                            </div>
                            <div class="col widget_if_pr">
                              <a class="product-title db"
                                href="product-detail-layout-01.html">Lomo Sanremo Edition</a>$65.00
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col widget_img_pr">
                              <a class="db pr oh"
                                href="product-detail-layout-01.html">
                                <img
                                  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201000%201000%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                  data-src="{{ asset('/') }}frontend/assets/images/home-electronic-vertical/pr-04-80x.jpg"
                                  class="w__100 lazyload lz_op_ef"
                                  alt="Ygoogle Speaker" />
                              </a>
                            </div>
                            <div class="col widget_if_pr">
                              <a class="product-title db"
                                href="product-detail-layout-01.html">Ygoogle Speaker</a>$65.00
                            </div>
                          </div>
                          <div class="row mb__10 pb__10">
                            <div class="col widget_img_pr">
                              <a class="db pr oh"
                                href="product-detail-layout-01.html">
                                <img
                                  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201000%201000%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                  data-src="{{ asset('/') }}frontend/assets/images/home-electronic-vertical/pr-05-80x.jpg"
                                  class="w__100 lazyload lz_op_ef"
                                  alt="Ybeoplay H9i" />
                              </a>
                            </div>
                            <div class="col widget_if_pr">
                              <a class="product-title db"
                                href="product-detail-layout-01.html">Ybeoplay H9i</a>$55.00
                            </div>
                          </div>
                          <a href="#"
                            class="btn fwsb detail_link">View All(107)
                            <i class="facl facl-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-3 tr">
                  <div class="nt_action in_flex al_center cart_des_1">
                    <a class="icon_search push_side cb chp"
                      data-id="#nt_search_canvas"
                      href="#"><i class="las la-search"></i></a>
                    <div class="my-account ts__05 pr dn db_md">
                      <a class="cb chp db push_side"
                        href="#"
                        data-id="#nt_login_canvas"><i class="las la-user"></i></a>
                    </div>
                    <a class="icon_like cb chp pr dn db_md js_link_wis"
                      href="{{ route('user.wishlistdata') }}">
                   @auth
                   <i class="lar la-heart pr"><span class="op__0 ts_op pa tcount bgb br__50 cw tc" id="wishQty"></span></i>
                   @endauth
                   @guest
                   <i class="lar la-heart pr"><span class="op__0 ts_op pa tcount bgb br__50 cw tc" >0</span></i>
                   @endguest
                    </a>
                    <div class="icon_cart pr">
                      <a class="push_side pr cb chp db"
                        href="#"
                        data-id="#nt_cart_canvas">
                        <i class="las la-shopping-cart pr"><span class="op__0 ts_op pa tcount bgb br__50 cw tc"
                            id="cartQty"></span></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header__bot border_false dn db_lg">

            @if (session()->get('language') === 'bangla')
              <div class="container">
                <div class="row no-gutters al_center">
                  <div class="col-auto ha8_cat">
                    <h5 class="mg__0 fs__14 flex al_center">
                      <i class="las la-bars mr__5 fs__18"></i><span class="dib truncate">সব ক্যাটাগরি</span>
                    </h5>
                    <div class="h_cat_nav pa op__0 mh_js_cat">
                      <ul class="lazy_menu lazy_h_cat lazyload"
                        role="menu"
                        aria-labelledby="dropdownMenu">
                        @foreach ($categories as $category)
                          @if (count($category->subcategories) > 0)
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-cyne"
                                href="{{ route('categoryproductsbn', $category->category_slug_bn) }}"> <i
                                  class="{{ $category->icon }}"
                                  style="font-size:18px;"></i><span
                                  class="px-2">{{ $category->category_name_bn }}</span></a>

                              <ul class="dropdown-menu">
                                @foreach ($category->subcategories as $subcategory)
                                  @if (count($subcategory->subsubcategories) > 0)
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item"
                                        href="{{ route('subcategoryproductsbn', ['category' => $category->category_slug_bn, 'subcategory' => $subcategory->subcategory_slug_bn]) }}">
                                        {{ $subcategory->subcategory_name_bn }}
                                      </a>
                                      <ul class="dropdown-menu">
                                        @foreach ($subcategory->subsubcategories as $subsubcategory)
                                        <li><a class="dropdown-item"
                                            href="{{ route('subsubcategoryproductsbn', ['category' => $category->category_slug_bn, 'subcategory' => $subcategory->subcategory_slug_bn, 'subsubcategory' => $subsubcategory->subsubcategory_slug_bn]) }}">{{ $subsubcategory->subsubcategory_name_bn }}</a>
                                        </li>
                                      @endforeach

                                      </ul>
                                    </li>
                                  @else
                                    <li><a class="dropdown-item"
                                        tabindex="-1"
                                        href="{{ route('subcategoryproductsbn', ['category' => $category->category_slug_bn, 'subcategory' => $subcategory->subcategory_slug_bn]) }}">{{ $subcategory->subcategory_name_bn }}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </li>
                          @else
                            <li class="cat_menu-0">
                              <a class="lh__1 flex al_center pr"
                                href="{{ route('categoryproductsbn', $category->category_slug_bn) }}"><i class="las la-mobile"></i>{{ $category->category_name_bn }}</a>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col ha8_nav">
                    <nav class="nt_navigation tl hover_side_up nav_arrow_false">
                      <ul id="nt_menu_id"
                        class="nt_menu in_flex wrap al_center">
                        <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                          <a class="lh__1 flex al_center pr"
                            href="{{ route('frontend.home') }}">হোম</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div class="col-3 fs__12 ha8_txt tr">
                    <a href=""
                      class="ttip_nt tooltip_top mr__10">
                      <span class="tt_txt"><span class="__cf_email__"
                          data-cfemail="a6cdc7cacac3d5e6c2c9cbc7cfc888c5c9cb">Ecommerce</span></span>
                      <i class="las la-envelope fs__14 mr__5"></i><span>contact</span>
                    </a>
                    <a class="ttip_nt tooltip_top mr__10">
                      <span class="tt_txt">Time: 08:00 - 17:00</span>
                      <i class="las la-clock fs__14 mr__5"></i><span>08:00 - 17:00</span>
                    </a>
                    <a href="tel:+01%2023456789"
                      class="ttip_nt tooltip_top">
                      <span class="tt_txt">Phone: +01 23456789</span>
                      <i class="las la-phone fs__14 mr__5"></i><span>+01 23456789</span>
                    </a>
                  </div>
                </div>
              </div>
            @else
              <div class="container">
                <div class="row no-gutters al_center">
                  <div class="col-auto ha8_cat">
                    <h5 class="mg__0 fs__14 flex al_center">
                      <i class="las la-bars mr__5 fs__18"></i><span class="dib truncate">SHOP BY CATEGORY</span>
                    </h5>
                    <div class="h_cat_nav pa op__0 mh_js_cat">
                      <ul class="lazy_menu lazy_h_cat lazyload"
                        role="menu"
                        aria-labelledby="dropdownMenu">
                        @foreach ($categories as $category)
                          @if (count($category->subcategories) > 0)
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-cyne"
                                href="{{ route('categoryproductsen', $category->category_slug_en) }}"> <i
                                  class="{{ $category->icon }}"
                                  style="font-size:18px;"></i><span
                                  class="px-2">{{ $category->category_name_en }}</span></a>

                              <ul class="dropdown-menu">
                                @foreach ($category->subcategories as $subcategory)
                                  @if (count($subcategory->subsubcategories) > 0)
                                    <li class="dropdown-submenu">
                                      <a class="dropdown-item"
                                        href="{{ route('subcategoryproductsen', ['category' => $category->category_slug_en, 'subcategory' => $subcategory->subcategory_slug_en]) }}">
                                        {{ $subcategory->subcategory_name_en }}
                                      </a>
                                      <ul class="dropdown-menu">
                                        @foreach ($subcategory->subsubcategories as $subsubcategory)
                                          <li><a class="dropdown-item"
                                              href="{{ route('subsubcategoryproductsen', ['category' => $category->category_slug_en, 'subcategory' => $subcategory->subcategory_slug_en, 'subsubcategory' => $subsubcategory->subsubcategory_slug_en]) }}">{{ $subsubcategory->subsubcategory_name_en }}</a>
                                          </li>
                                        @endforeach

                                      </ul>
                                    </li>
                                  @else
                                    <li><a class="dropdown-item"
                                        tabindex="-1"
                                        href="{{ route('subcategoryproductsen', ['category' => $category->category_slug_en, 'subcategory' => $subcategory->subcategory_slug_en]) }}">{{ $subcategory->subcategory_name_en }}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </li>
                          @else
                            <li class="cat_menu-0">
                              <a class="lh__1 flex al_center pr"
                                href="{{ route('categoryproductsbn', $category->category_slug_en) }}"><i class="las la-mobile"></i>{{ $category->category_name_en }}</a>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col ha8_nav">
                    <nav class="nt_navigation tl hover_side_up nav_arrow_false">
                      <ul id="nt_menu_id"
                        class="nt_menu in_flex wrap al_center">
                        <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                          <a class="lh__1 flex al_center pr"
                            href="{{ route('frontend.home') }}">Home</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div class="col-3 fs__12 ha8_txt tr">
                    <a href=""
                      class="ttip_nt tooltip_top mr__10">
                      <span class="tt_txt"><span class="__cf_email__"
                          data-cfemail="a6cdc7cacac3d5e6c2c9cbc7cfc888c5c9cb">Ecommerce</span></span>
                      <i class="las la-envelope fs__14 mr__5"></i><span>contact</span>
                    </a>
                    <a class="ttip_nt tooltip_top mr__10">
                      <span class="tt_txt">Time: 08:00 - 17:00</span>
                      <i class="las la-clock fs__14 mr__5"></i><span>08:00 - 17:00</span>
                    </a>
                    <a href="tel:+01%2023456789"
                      class="ttip_nt tooltip_top">
                      <span class="tt_txt">Phone: +01 23456789</span>
                      <i class="las la-phone fs__14 mr__5"></i><span>+01 23456789</span>
                    </a>
                  </div>
                </div>
              </div>
            @endif

          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
