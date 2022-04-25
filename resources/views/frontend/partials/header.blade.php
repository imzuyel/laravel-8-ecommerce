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
                    <a target="_blank" href="https://www.facebook.com/imzuyel"
                      class="facebook cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Facebook</span><i class="facl facl-facebook"></i>
                    </a>
                    <a target="_blank" href="https://twitter.com/imzuyel"
                      class="twitter cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Twitter</span><i class="facl facl-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/imzuyel/"
                      class="instagram cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Instagram</span><i class="facl facl-instagram"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/imzuyel"
                      class="linkedin cb ttip_nt tooltip_bottom_right">
                      <span class="tt_txt">Follow on Linkedin</span><i class="facl facl-linkedin"></i>
                    </a>
                  </div>
                </div>

                <div class="col-lg-6 col-12 tc col-md-12 dn_false_1024">
                    @if (session()->get('language') === 'bangla')
                      <div class="header-text">গ্রীষ্মকালীন বিক্রয় ছাড়
                        <span class="cr fwm">20%</span> কোড ব্যবহার করুন “SUMMER20”!
                        <a href="{{ route('categoryproductsbn', $category->category_slug_bn) }}"><span class="cr fwm">কিনুন</span> </a>
                      </div>
                  @else
                  <div class="header-text">Summer sale discount off
                    <span class="cr fwm">20%</span> use code “SUMMER20”!
                    <a href="{{ route('categoryproductsen', $category->category_slug_en) }}"><span class="cr fwm">Shop Now</span> </a>
                  </div>
                  @endif

                </div>

                <div class="col-lg-3 col-12 tc col-md-12 tr_lg dn_false_1024">
                  <div class="nt_currency pr cg currencies sp_currencies wsn dib cur_stt_0">
                    @if (session()->get('language') === 'bangla')
                      <span class="active text-danger">ভাষা</span><i
                        class="facl facl-angle-down ml__5"></i>
                    @else
                      <span class=" active text-danger">Language</span><i
                        class="facl facl-angle-down ml__5"></i>
                    @endif

                    <ul class="pa pe_none ts__03 bgbl ul_none tl op__0 z_100 r__0 pt__15 pb__15 pr__15 pl__15">
                      <li><a class=" cg db text-dark-blue"
                          href="{{ route('language.english') }}">English</a></li>

                      <li><a class=" cg db text-dark-blue"
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
                      href="{{ route('frontend.home') }}">
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
                        @if (session()->get('language') === 'bangla')
                        <select name="product_type">
                          <option value="*">সব ক্যাটাগরি</option>
                          @foreach ($categories as $category)
                          <option value="{{ $category->category_name_bn }}">{{ $category->category_name_bn }}</option>
                         @endforeach
                        </select>
                        @else
                        <select name="product_type">
                            <option value="*">All categories</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->category_name_en }}">{{ $category->category_name_en }}</option>
                           @endforeach
                          </select>
                        @endif
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
                          type="submit">
                          @if (session()->get('language') === 'bangla')
                          খোজুন
                        @else
                        Search
                        @endif
                        </button>
                      </div>
                    </div>
                  </form>

                </div>
                <div class="col-lg-3 col-md-4 col-3 tr">
                  <div class="nt_action in_flex al_center cart_des_1">
                    <a class="icon_search push_side cb chp"
                      data-id="#nt_search_canvas"
                      href="#"><i class="las la-search"></i></a>

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
                        <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                            <a target="_blank" class="lh__1 flex al_center pr"
                              href="https://www.imzuyel.com">এবাউট</a>
                          </li>
                      </ul>
                    </nav>
                  </div>
                  <div class="col-3 fs__12 ha8_txt tr">
                    <a href=""
                      class="ttip_nt tooltip_top mr__10">
                      <span class="tt_txt"><span class="__cf_email__"
                          data-cfemail="a6cdc7cacac3d5e6c2c9cbc7cfc888c5c9cb">Ecommerce</span></span>
                      <i class="las la-envelope fs__14 mr__5"></i><span>যোগাযোগ</span>
                    </a>
                    <a class="ttip_nt tooltip_top mr__10">
                      <span class="tt_txt">Time: 08:00 - 17:00</span>
                      <i class="las la-clock fs__14 mr__5"></i><span>08:00 - 17:00</span>
                    </a>
                    <a href="tel:+01%2023456789"
                      class="ttip_nt tooltip_top">
                      <span class="tt_txt">Phone: +01312733791/span>
                      <i class="las la-phone fs__14 mr__5"></i><span>+01312733791/span>
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
                        <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                            <a target="_blank" class="lh__1 flex al_center pr"
                              href="https://www.imzuyel.com">About</a>
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
