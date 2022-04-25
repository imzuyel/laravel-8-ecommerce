<div id="nt_menu_canvas"
  class="nt_fk_canvas nt_sleft dn lazyload">
  <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
  <div class="mb_nav_tabs flex al_center mb_cat_true">
    <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active"
      data-id="#kalles-section-mb_nav_js">
      <span class="db truncate"> {{ session()->get('language') === 'bangla' ? 'মেনু' : 'Menu' }}</span>
    </div>
    <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center "
      data-id="#kalles-section-mb_nav_js2">
      <span class="db truncate">{{ session()->get('language') === 'bangla' ? 'ক্যাটাগরি' : 'Categories' }}</span>
    </div>

  </div>
  <div id="kalles-section-mb_nav_js"
    class="mb_nav_tab active">
    <div id="kalles-section-mb_nav"
      class="kalles-section">
      <ul id="menu_mb_ul"
        class="nt_mb_menu">

        <li class=" menu-item menu-item-btns menu-item-home">
          <a
            href="{{ route('frontend.home') }}"><span>{{ session()->get('language') === 'bangla' ? 'হোম' : 'Home' }}</span></a>
        </li>
        <li class="menu-item menu-item-btns menu-item-home">
          <a target="_blank"
            href="https://imzueyl.com"><span>{{ session()->get('language') === 'bangla' ? 'এবাউট' : 'About' }}</span></a>
        </li>
        <li class="menu-item menu-item-btns menu-item-home">
          <a target="_blank"
            href="https://imzueyl.com"><span>Contact</span></a>
        </li>

        <li class="menu-item menu-item-infos">
          <p class="menu_infos_title">Need help?</p>
          <div class="menu_infos_text">
            <i class="pegk pe-7s-call fwb mr__10"></i>+01312733791<br><i
              class="pegk pe-7s-mail fwb mr__10"></i>zuyel76@gmail.com
          </div>
        </li>

      </ul>
    </div>
  </div>
  <div id="kalles-section-mb_nav_js2"
    class="mb_nav_tab">
    <div id="kalles-section-mb_nav"
      class="kalles-section">
      @if (session()->get('language') === 'bangla')
        <ul id="menu_mb_ul"
          class="nt_mb_menu">
          @foreach ($categories as $category)
            @if (count($category->subcategories) > 0)
              <li class="menu-item menu-item-has-children ">

                <a href="{{ route('categoryproductsbn', $category->category_slug_bn) }}"
                  class=""><span class="nav_link_txt iconbtns {{ $category->icon }}">
                    {{ $category->category_name_bn }}</span><span class="nav_link_icon ml__5"></span></a>
                <ul class="sub-menu">
                  @foreach ($category->subcategories as $subcategory)
                    @if (count($subcategory->subsubcategories) > 0)
                      <li class="menu-item menu-item-has-children ">
                        <a
                          href="{{ route('subcategoryproductsbn', ['category' => $category->category_slug_bn,'subcategory' => $subcategory->subcategory_slug_bn]) }}"><span
                            class="nav_link_txt flex al_center">{{ $subcategory->subcategory_name_bn }}</span><span
                            class="nav_link_icon ml__5"></span></a>
                        <ul class="sub-sub-menu">
                          @foreach ($subcategory->subsubcategories as $subsubcategory)
                            <li class="menu-item">
                              <a
                                href="{{ route('subsubcategoryproductsbn', ['category' => $category->category_slug_bn,'subcategory' => $subcategory->subcategory_slug_bn,'subsubcategory' => $subsubcategory->subsubcategory_slug_bn]) }}">{{ $subsubcategory->subsubcategory_name_bn }}</a>
                            </li>
                          @endforeach


                        </ul>
                      </li>
                    @else
                      <li class="menu-item  only_icon_false">
                        <a
                          href="{{ route('subcategoryproductsbn', ['category' => $category->category_slug_bn,'subcategory' => $subcategory->subcategory_slug_bn]) }}"><span
                            class="nav_link_txt flex al_center">{{ $subcategory->subcategory_name_bn }}</span><span
                            class="nav_link_icon ml__5"></span></a>

                      </li>
                    @endif
                  @endforeach

                </ul>
              </li>
            @else
              <li class="menu-item ">

                <a href="{{ route('categoryproductsbn', $category->category_slug_bn) }}"
                  class=""><span class="nav_link_txt iconbtns {{ $category->icon }}">
                    {{ $category->category_name_bn }}</span><span class="nav_link_icon ml__5"></span></a>


              </li>
            @endif
          @endforeach

          <li class="menu-item menu-item-btns menu-item-sea push_side"
            data-id="#nt_search_canvas">
            <a href="#"><span class="iconbtns">Search</span></a>
          </li>

          <li class="menu-item menu-item-btns menu-item-acount">
            <a href="#"
              class="push_side"
              data-id="#nt_login_canvas"><span class="iconbtns">Login / Register</span></a>
          </li>
          <li class="menu-item menu-item-infos">
            <p class="menu_infos_title">Need help?</p>
            <div class="menu_infos_text">
              <i class="pegk pe-7s-call fwb mr__10"></i>+01 23456789<br><i class="pegk pe-7s-mail fwb mr__10"></i><a
                class="cg"
                href="https://themes.the4.co/cdn-cgi/l/email-protection#9ffcf3feeafadffbf0f2fef6f1b1fcf0f2"><span
                  class="__cf_email__"
                  data-cfemail="d0b3bcb1a5b590b4bfbdb1b9befeb3bfbd">[email&#160;protected]</span></a>
            </div>
          </li>

        </ul>
      @else
      <ul id="menu_mb_ul"
          class="nt_mb_menu">
          @foreach ($categories as $category)
            @if (count($category->subcategories) > 0)
              <li class="menu-item menu-item-has-children ">

                <a href="{{ route('categoryproductsen', $category->category_slug_en) }}"
                  class=""><span class="nav_link_txt iconbtns {{ $category->icon }}">
                    {{ $category->category_name_en }}</span><span class="nav_link_icon ml__5"></span></a>
                <ul class="sub-menu">
                  @foreach ($category->subcategories as $subcategory)
                    @if (count($subcategory->subsubcategories) > 0)
                      <li class="menu-item menu-item-has-children ">
                        <a
                          href="{{ route('subcategoryproductsen', ['category' => $category->category_slug_en,'subcategory' => $subcategory->subcategory_slug_en]) }}"><span
                            class="nav_link_txt flex al_center">{{ $subcategory->subcategory_name_en }}</span><span
                            class="nav_link_icon ml__5"></span></a>
                        <ul class="sub-sub-menu">
                          @foreach ($subcategory->subsubcategories as $subsubcategory)
                            <li class="menu-item">
                              <a
                                href="{{ route('subsubcategoryproductsen', ['category' => $category->category_slug_en,'subcategory' => $subcategory->subcategory_slug_en,'subsubcategory' => $subsubcategory->subsubcategory_slug_en]) }}">{{ $subsubcategory->subsubcategory_name_en }}</a>
                            </li>
                          @endforeach


                        </ul>
                      </li>
                    @else
                      <li class="menu-item  only_icon_false">
                        <a
                          href="{{ route('subcategoryproductsen', ['category' => $category->category_slug_en,'subcategory' => $subcategory->subcategory_slug_en]) }}"><span
                            class="nav_link_txt flex al_center">{{ $subcategory->subcategory_name_en }}</span><span
                            class="nav_link_icon ml__5"></span></a>

                      </li>
                    @endif
                  @endforeach

                </ul>
              </li>
            @else
              <li class="menu-item ">

                <a href="{{ route('categoryproductsen', $category->category_slug_en) }}"
                  class=""><span class="nav_link_txt iconbtns {{ $category->icon }}">
                    {{ $category->category_name_en }}</span><span class="nav_link_icon ml__5"></span></a>


              </li>
            @endif
          @endforeach

        </ul>

      @endif
    </div>
  </div>
</div>
