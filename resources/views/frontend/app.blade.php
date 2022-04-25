<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <meta name="csrf-token"
    content="{{ csrf_token() }}" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!--favicon-->
    <link rel="icon" href="/{{ setting('site_favicon') }}" type="image/png" />

  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/font-icon.min.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/reset.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/defined.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/base.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/style.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-kids.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-medical.css') }}">
  <link rel="stylesheet"
    href=" {{ asset('frontend/assets/css/home-electronic-vertical.css') }}">
  @stack('css')
  <style>
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>a:after {
      content: ">";
      float: right;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: 0px;
      margin-left: 0px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }

    /* Spiner */
    #overlay {
      position: fixed;
      top: 0;
      z-index: 100;
      width: 100%;
      height: 100%;
      display: none;
      background: rgba(0, 0, 0, 0.6);
    }

    .cv-spinner {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .spinner {
      width: 40px;
      height: 40px;
      border: 4px #ddd solid;
      border-top: 4px #2e93e6 solid;
      border-radius: 50%;
      animation: sp-anime 0.8s infinite linear;
    }

    @keyframes sp-anime {
      100% {
        transform: rotate(360deg);
      }
    }

    .is-hide {
      display: none;
    }

  </style>

</head>

<body
  class="lazy_icons zoom_tp_2 css_scrollbar template-index lazyload js_search_true cart_pos_side kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true header_sticky_true hide_scrolld_true des_header_2 h_banner_true top_bar_true spcdt4_ js_search_type">
  <!-- ==================   Ajax ============================ -->
  <div id="overlay">
    <div class="cv-spinner">
      <span class="spinner"></span>
    </div>
  </div>
  <!-- ==================   Ajax End ============================ -->


  <!--header-->
  @include('frontend.partials.header')
  <!--end header-->

  @yield('content')
  <!--mask overlay-->
  <div class="mask-overlay ntpf t__0 r__0 l__0 b__0 op__0 pe_none"></div>
  <!--end mask overlay-->

  <!--footer-->
  @include('frontend.partials.footer')
  <!--end footer-->


  <!--quick view-->
  @include('frontend.partials.quickview')
  <!--end quick view-->

  <!--quick shop-->
  @include('frontend.partials.quick_shop')
  <!--end quick shop-->

  <!-- mini cart box -->
  <div id="miniCart">
    @include('frontend.partials.minicart')
  </div>

  <!-- end mini cart box-->


  <!-- mobile toolbar -->
  @include('frontend.partials.mobile_toolbar')
  <!-- end mobile toolbar -->

  <!-- mobile menu -->
  @include('frontend.partials.mobile_menu')
  <!-- end mobile menu -->


  <!-- back to top button-->
  <a id="nt_backtop"
    class="pf br__50 z__100 des_bt1"
    href="#">
    <span class="tc br__50 db cw">
      <i class="pr pegk pe-7s-angle-up"></i>
    </span>
  </a>

  <script src=" {{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/packery.pkgd.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jquery.hoverIntent.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/flickity.pkgd.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/js-cookie.min.js') }}"></script>
  <script src=" {{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>



  <!-- Toaster-->
  @include('auth.toast')
  <!--end Toaster-->

  <!--========================== Ajax=============================-->
  <script>
    // Category dropdown menu
    $(document).ready(function() {
      $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
    $(".btn-group, .dropdown").hover(
      function() {
        $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).addClass('open');
      },
      function() {
        $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).removeClass('open');
      });
    //End Category dropdown menu

    //Ajax Token setup
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });
    //End Ajax Token setup

    // Product Quick View
    $("body").on("click", ".productView", function() {
      var product_id = $(this).attr("product_id");
      $.ajax({
        type: "GET",
        url: "/product/view/modal/" + product_id,
        dataType: "json",
        success: function(data) {
          $("#product_name_bn").text(data.product.product_name_bn);
          $("#product_name_en").text(data.product.product_name_en);
          // Quick shop
          $("#product_name_bn2").text(data.product.product_name_bn);
          $("#product_name_en2").text(data.product.product_name_en);

          $("#price").text(data.product.price);
          $("#sku").text(data.product.product_code);

          $("#product_id").val(data.product.id);

          $("#category_name_bn").text(
            data.product.category.category_name_bn
          );
          $("#category_name_en").text(
            data.product.category.category_name_en
          );
          $("#product_image").attr("src", "/" + data.product.image);
          $("#product_image2").attr("data-bgset", "/" + data.product.image);

          $("#short_description_bn").text(
            data.product.short_description_bn
          );
          $("#short_description_en").text(
            data.product.short_description_en
          );
          if (data.product.discount == null) {
            $("#discount").text("New");
            $("#discount_bg").addClass("bg-success");
            $("#price").text("");
            $("#new_price").text("$" + data.product.price);
          } else {
            $("#discount").text("-" + data.product.discount + "%");
            new_price =
              data.product.price -
              (data.product.discount * data.product.price) / 100;
            $("#new_price").text("$" + Math.round(new_price));
            $("#price").text("$" + data.product.price);
            $("#discount_bg").addClass("bg-danger");
          }
          // All quick shop for id 2
          if (data.product.discount == null) {
            $("#discount2display").hide();
            $("#price2").text("");
            $("#new_price2").text("$" + data.product.price);
          } else {
            $("#discount2display").show();
            $("#discount2").text("-" + data.product.discount + "%");
            new_price =
              data.product.price -
              (data.product.discount * data.product.price) / 100;
            $("#new_price2").text("$" + Math.round(new_price));
            $("#price2").text("$" + data.product.price);
            $("#discount_bg2").addClass("bg-danger");
          }

          // Color
          if (data.color.length > 1) {
            $('select[name="color"]').empty();
            $.each(data.color, function(key, value) {
              $('select[name="color"]').append(
                '<option value=" ' +
                value +
                ' ">' +
                value +
                " </option>"
              );
              $("#color_display_none").css("display", "");
              $("#color_display_none2").css("display", "");
            });
          } else {
            $("#color_display_none").css("display", "none");
            $("#color_display_none2").css("display", "none");
          }

          if (data.product.size != null) {
            $('select[name="size"]').empty();
            $.each(data.size, function(key, value) {
              $('select[name="size"]').append(
                '<option value=" ' +
                value +
                ' ">' +
                value +
                " </option>"
              );
              $("#size_display").css("display", "");
              $("#size_display2").css("display", "");
            });
          } else {
            $("#size_display").css("display", "none");
            $("#size_display2").css("display", "none");
          }
        },
      });
    });
    //End Product Quick View

    // Add to cart function
    window.addToCart = function() {
      var id = $("#product_id").val();
      var color = $("#color option:selected").text();
      var size = $("#size option:selected").text();
      var quantity = $("#qty").val();
      $.ajax({
        type: "POST",
        dataType: "json",
        data: {
          color: color,
          size: size,
          quantity: quantity,
        },
        url: "/cart/data/store/" + id,
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(data) {
          miniCart();
          toastr.options = {
            closeButton: true,
            closeHtml: "<button>&#xd7;</button>",
            progressBar: true,
            showMethod: "slideDown",
          };
          if (data.is_true) {
            toastr["error"]("Add less than " + data.product_qty + " to your cart");
          } else {
            toastr["success"]("Successfully added successfully!");
          }
        },
        error: function(xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")");
          toastr["error"](err.message);
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      });
    };
    // End add to cart

    // MiniCart
    function miniCart() {
      $.ajax({
        type: "GET",
        url: "/product/cart/content/",
        success: function(data) {
          var miniCart = "";
          $.each(data.carts, function(key, value) {
            if (data.carts.toString().length > 0) {
              $("#cartQty").text(data.cartQty);
              $("#cartQty1").text(data.cartQty);
              $("#cart_tot_price").text(data.cartTotal);
              $(".js_cart_footer").css("display", "");
            }
            @if (session()->get('language') === 'bangla')
              miniCart += `
              <div class="flex mini_cart_item js_cart_item al_center pr oh">
                <div class="ld_cart_bar"></div>
                <a href="product-detail-layout-01.html"
                  class="mini_cart_img">
                  <img class="w__100 lazyload"
                    data-src="/${value.options.image}"
                    width="120"
                    height="153"
                    alt=""
                    src="/${value.options.image}">
                </a>
                <div class="mini_cart_info">
                  <a href=""
                    class="truncate mini_cart_title">
                    ${value.options.name_bn}
                  </a>
                  <div class="mini_cart_meta">
                    <p class="cart_meta_variant">${value.options.color}</p>
                    <p class="cart_selling_plan"></p>
                    <div class="cart_meta_price price">
                      <div class="cart_price">
                        $<ins>${value.price}</ins>
                      </div>
                    </div>
                  </div>
                  <div class="mini_cart_actions">
                    <div class="quantity pr mr__10 qty__true">
                      <input type="number"
                        class="input-text qty text tc qty_cart_js"
                        step="1"
                        min="0"
                        max="9999"
                        value="${value.qty}">
                      <div class="qty tc fs__14">
                        <button type="button"
                          class="plus db cb pa pd__0 pr__15 tr r__0"
                          id="${value.rowId}"
                          onclick="cartIncrement(this.id)">
                          <i class="facl facl-plus"></i>
                        </button>
                        <button type="button"
                          class="minus db cb pa pd__0 pl__15 tl l__0 qty_1"
                          id="${value.rowId}"
                          onclick="cartDecrement(this.id)">
                          <i class="facl facl-minus"></i>
                        </button>

                      </div>
                    </div>
                    <a href="#"
                      id="${value.rowId}"
                      class="ttip_nt tooltip_top_right miniCartRemoveItem"><span class="tt_txt">Remove this item</span>
                      <svg style="width: 20px;height: 20px;stroke-width: 1.5;"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10"
                          y1="11"
                          x2="10"
                          y2="17"></line>
                        <line x1="14"
                          y1="11"
                          x2="14"
                          y2="17"></line>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              `;
            @else
              miniCart += `
              <div class="flex mini_cart_item js_cart_item al_center pr oh">
                <div class="ld_cart_bar"></div>
                <a href="product-detail-layout-01.html"
                  class="mini_cart_img">
                  <img class="w__100 lazyload"
                    data-src="/${value.options.image}"
                    width="120"
                    height="153"
                    alt=""
                    src="/${value.options.image}">
                </a>
                <div class="mini_cart_info">
                  <a href=""
                    class="truncate mini_cart_title">
                    ${value.name}
                  </a>
                  <div class="mini_cart_meta">
                    <p class="cart_meta_variant">${value.options.color}</p>
                    <p class="cart_selling_plan"></p>
                    <div class="cart_meta_price price">
                      <div class="cart_price">
                        $<ins>${Math.round(value.price)}</ins>
                      </div>
                    </div>
                  </div>
                  <div class="mini_cart_actions">
                    <div class="quantity pr mr__10 qty__true">
                      <input type="number"
                        class="input-text qty text tc qty_cart_js"
                        step="1"
                        min="0"
                        max="9999"
                        value="${value.qty}">
                      <div class="qty tc fs__14">
                        <button type="button"
                          class="plus db cb pa pd__0 pr__15 tr r__0"
                          id="${value.rowId}"
                          onclick="cartIncrement(this.id)">
                          <i class="facl facl-plus"></i>
                        </button>
                        <button type="button"
                          class="minus db cb pa pd__0 pl__15 tl l__0 qty_1"
                          id="${value.rowId}"
                          onclick="cartDecrement(this.id)">
                          <i class="facl facl-minus"></i>
                        </button>
                      </div>
                    </div>

                    <a href="#"
                      id="${value.rowId}"
                      class="ttip_nt tooltip_top_right miniCartRemoveItem"><span class="tt_txt">Remove this item</span>
                      <svg style="width: 20px;height: 20px; stroke-width: 1.5;"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10"
                          y1="11"
                          x2="10"
                          y2="17"></line>
                        <line x1="14"
                          y1="11"
                          x2="14"
                          y2="17"></line>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              `;
            @endif
          });
          if (data.carts.toString().length <= 0) {
            @if (session()->get('language') === 'bangla')
              miniCart += `
              <div class="empty tc mt__40 "><i class="las la-shopping-bag pr mb__10"></i>
                <p>আপনার কার্ট </p>
                <p class="return-to-shop mb__15">
                  <a class="button button_primary tu js_add_ld"
                    href="/">Return To Shop</a>
                </p>
              </div>
              `;
            @else
              miniCart += `
              <div class="empty tc mt__40 "><i class="las la-shopping-bag pr mb__10"></i>
                <p>Your cart is empty.</p>
                <p class="return-to-shop mb__15">
                  <a class="button button_primary tu js_add_ld"
                    href="/">Return To Shop</a>
                </p>
              </div>
              `;
            @endif
            var zero = 0;
            $("#cartQty").text(zero);
            $("#cartQty1").text(zero);
            $(".js_cart_footer").css("display", "none");
          }
          $("#moreCart").html(miniCart);
        },
      });
    }
    miniCart();
    //End MiniCart mini

    //Item Remove form minicart
    $(document).on("click", ".miniCartRemoveItem", function() {
      var rowId = $(this).attr("id");
      $.ajax({
        type: "GET",
        url: "/minicart/product-remove/" + rowId,
        dataType: "json",
        success: function(data) {
          miniCart();
          cartContent();
          CouponCalculate();
          toastr["success"]("Successfully product remove from cart!");
        },
        error: function(xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")");
          toastr["error"](err.message);
        },
      });
    });
    //End Item Remove form minicart

    //Item Increment Form cart
    function cartIncrement(rowId) {
      $.ajax({
        type: 'GET',
        url: "/cart-increment/" + rowId,
        dataType: 'json',
        success: function(data) {
          miniCart();
          cartContent();
          CouponCalculate();
          toastr.options = {
            closeButton: true,
            closeHtml: "<button>&#xd7;</button>",
            progressBar: true,
            showMethod: "slideDown",
          };
          if (data.is_true) {
            toastr["error"]("Add less than " + data.product_qty + " to your cart");
          } else {
            toastr["success"]("Successfully added successfully!");
          }
        }
      });
    }
    //End Item Increment Form cart

    //Item Decrement Form cart
    function cartDecrement(rowId) {
      $.ajax({
        type: 'GET',
        url: "/cart-decrement/" + rowId,
        dataType: 'json',
        success: function(data) {
          miniCart();
          cartContent();
          CouponCalculate();
          toastr.options = {
            closeButton: true,
            closeHtml: "<button>&#xd7;</button>",
            progressBar: true,
            showMethod: "slideDown",
          };
          if (data.is_true) {
            toastr["error"]("Do not decrease product less than 1");
          } else {
            toastr["success"]("Successfully remove product form cart!");
          }
        }
      });
    }
    //End Item Decrement Form cart

    // Cart Item
    function cartContent() {
      $.ajax({
        type: "GET",
        url: "/product/cart/content/",
        success: function(data) {
          var cartItem = "";
          $.each(data.carts, function(key, value) {
            if (data.carts.toString().length > 0) {
              $("#cartQty").text(data.cartQty);
              $("#cartQty1").text(data.cartQty);
              $("#cart_tot_price").text(data.cartTotal);
              $(".js_cart_footer").css("display", "");
            }
            @if (session()->get('language') === 'bangla')
              cartItem += `
              <div class="cart_item js_cart_item">
                <div class="ld_cart_bar"></div>
                <div class="row al_center">
                  <div class="col-12 col-md-12 col-lg-5">
                    <div class="page_cart_info flex al_center">
                      <a href="/bn/details/${value.id}/${value.options.product_slug_bn}">
                        <img class="lazyload w__100 lz_op_ef "
                          style="height: 100px;width: 100px;"
                          src="/${value.options.image}"
                          data-src="/${value.options.image}"
                          alt="">
                      </a>
                      <div class="mini_cart_body ml__15">
                        <h5 class="mini_cart_title mg__0 mb__5"><a href="/bn/details/${value.id}/${value.options.product_slug_bn}">
                            ${value.options.name_bn}</a></h5>
                        <div class="mini_cart_meta">
                          <p class="cart_selling_plan"></p>
                        </div>
                        <div class="mini_cart_tool mt__10">
                          <a href="#"
                            id="${value.rowId}"
                            class="ttip_nt tooltip_top_right miniCartRemoveItem"><span class="tt_txt">Remove this item</span>
                            <svg style="width: 20px;height: 20px;stroke-width: 1.5;"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10"
                                y1="11"
                                x2="10"
                                y2="17"></line>
                              <line x1="14"
                                y1="11"
                                x2="14"
                                y2="17"></line>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">
                    <div class="cart_meta_prices price">
                      <div class="cart_price">${Math.round(value.price)}</div>
                    </div>
                  </div>
                  <div class="mini_cart_actions">
                    <div class="quantity pr mr__10 qty__true">
                      <input type="number"
                        class="input-text qty text tc qty_cart_js"
                        step="1"
                        min="0"
                        max="9999"
                        value="${value.qty}">
                      <div class="qty tc fs__14">
                        <button type="button"
                          class="plus db cb pa pd__0 pr__15 tr r__0"
                          id="${value.rowId}"
                          onclick="cartIncrement(this.id)">
                          <i class="facl facl-plus"></i>
                        </button>
                        <button type="button"
                          class="minus db cb pa pd__0 pl__15 tl l__0 qty_1"
                          id="${value.rowId}"
                          onclick="cartDecrement(this.id)">
                          <i class="facl facl-minus"></i>
                        </button>

                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">
                    <span class="cart-item-price fwm cd js_tt_price_it">${Math.round(value.price*value.qty)}</span>
                  </div>
                </div>
              </div>
              <hr>
              `;
            @else
              cartItem += `
              <div class="cart_item js_cart_item">
                <div class="ld_cart_bar"></div>
                <div class="row al_center">
                  <div class="col-12 col-md-12 col-lg-5">
                    <div class="page_cart_info flex al_center">
                      <a href="/en/details/${value.id}/${value.options.product_slug_en}">
                        <img class="lazyload w__100 lz_op_ef "
                          style="height: 100px;width: 100px;"
                          src="/${value.options.image}"
                          data-src="/${value.options.image}"
                          alt="">
                      </a>
                      <div class="mini_cart_body ml__15">
                        <h5 class="mini_cart_title mg__0 mb__5"><a href="/en/details/${value.id}/${value.options.product_slug_en}">
                            ${value.options.name_en}</a></h5>
                        <div class="mini_cart_meta">
                          <p class="cart_selling_plan"></p>
                        </div>
                        <div class="mini_cart_tool mt__10">
                          <a href="#"
                            id="${value.rowId}"
                            class="ttip_nt tooltip_top_right miniCartRemoveItem"><span class="tt_txt">Remove this item</span>
                            <svg style="width: 20px;height: 20px;stroke-width: 1.5;"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10"
                                y1="11"
                                x2="10"
                                y2="17"></line>
                              <line x1="14"
                                y1="11"
                                x2="14"
                                y2="17"></line>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">
                    <div class="cart_meta_prices price">
                      <div class="cart_price">${Math.round(value.price)}</div>
                    </div>
                  </div>
                  <div class="mini_cart_actions">
                    <div class="quantity pr mr__10 qty__true">
                      <input type="number"
                        class="input-text qty text tc qty_cart_js"
                        step="1"
                        min="0"
                        max="9999"
                        value="${value.qty}">
                      <div class="qty tc fs__14">
                        <button type="button"
                          class="plus db cb pa pd__0 pr__15 tr r__0"
                          id="${value.rowId}"
                          onclick="cartIncrement(this.id)">
                          <i class="facl facl-plus"></i>
                        </button>
                        <button type="button"
                          class="minus db cb pa pd__0 pl__15 tl l__0 qty_1"
                          id="${value.rowId}"
                          onclick="cartDecrement(this.id)">
                          <i class="facl facl-minus"></i>
                        </button>

                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">
                    <span class="cart-item-price fwm cd js_tt_price_it">${Math.round(value.price*value.qty)}</span>
                  </div>
                </div>
              </div>
              <hr>
              `;
            @endif
          });
          if (data.carts.toString().length <= 0) {
            @if (session()->get('language') === 'bangla')
              cartItem += `
              <div class="empty tc mt__40 "><i class="las la-shopping-bag pr mb__10"></i>
                <p>আপনার কার্ট </p>
                <p class="return-to-shop mb__15">
                  <a class="button button_primary tu js_add_ld"
                    href="/">Return To Shop</a>
                </p>
              </div>
              `;
            @else
              cartItem += `
              <div class="empty tc mt__40 "><i class="las la-shopping-bag pr mb__10"></i>
                <p>Your cart is empty.</p>
                <p class="return-to-shop mb__15">
                  <a class="button button_primary tu js_add_ld"
                    href="/">Return To Shop</a>
                </p>
              </div>
              `;

            @endif
            var zero = 0;
            $("#cartQty").text(zero);
            $("#cartQty1").text(zero);
            $("#cart_tot_price").text(zero);
            $('.cartCheckout').css("display", 'none');
            $(".js_cart_footer").css("display", "none");
          }
          $("#cartItem").html(cartItem);
        },
      });
    }
    cartContent();
    // Cart End Item

    //Add to Wishlist
    window.addToWishlist = function() {
      var id = $("#product_id").val();
      $.ajax({
        type: "POST",
        dataType: "json",
        data: {
          id: id,
        },
        url: "/user/wishlist/store/" + id,
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(data) {
          wishlist();
          if (data.is_true == "added") {
            toastr["success"]("Succesfully added to wishlist");
            $(".nt_add_w").addClass("wis_added");
          } else if (data.is_true == "remove") {
            $(".nt_add_w").removeClass("wis_added");
            toastr["success"]("Succesfully remove form to wishlist");

          } else {
            toastr["error"]("Login first");
          }
        },
        error: function(xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")");
          toastr["error"](err.message);
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      });
    };
    //End Add to Wishlist

    // Wishlist heart Class add
    const body = $("body"),
      $window = $(window),
      rtl_mode = body.hasClass("rtl"),
      $ld = $("#ld_cl_bar"),
      window_w = $window.width(),
      is_smaller_768 = window_w < 768,
      mask = $(".mask-overlay"),
      html = $("html"),
      touchevents = Modernizr.touchevents;

    body.on("click", ".wis_remove", function() {
      let $product = $(this).closest(".product");
      $product.addClass("kalles-hidden-product");
      setTimeout(() => $product.remove(), 500);
      var product_id = $(this).attr("product_id");
      $.ajax({
        type: "POST",
        url: "/wishlist/product-remove/" + product_id,
        dataType: "json",
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(data) {
          wishlist();
          toastr["success"]("Successfully product remove from wishlist!");
        },
        error: function(xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")");
          toastr["error"](err.message);
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      });
    });
    // End Wishlist heart Class

    // Wishlish Item
    function wishlist() {
      $.ajax({
        type: "POST",
        url: "/user/wishlist/data",
        success: function(data) {
          if (data.wishQty.toString().length > 0) {
            $("#wishQty").text(data.wishQty);
          } else {
            var zero = 0;
            $("#wishQty").text(zero);
          }
          if (data.wishQty.toString().length > 0) {
            $("#wishQty1").text(data.wishQty);
          } else {
            var zero = 0;
            $("#wishQty1").text(zero);
          }
          var wishlist = "";
          if (data.wishQty == 0) {

            wishlist += `
            <div class="kalles-section cat-shop pr tc p-5">
            <h1 class="text-center text-danger">
            @if (session()->get('language') === 'bangla')
              আপনার ইচ্ছার তালিকায় কোন পণ্য নেই
            @else
              No product in your wishlist !
            @endif
            </h1>
        <button type="submit"
          data-time="6000"
          data-ani="shake"
          class="button truncate  mt__20 order-4  animated "
          onclick="location.href='{{ route('frontend.home') }}';">
          <span>
            @if (session()->get('language') === 'bangla')
              হোম
            @else
              Home
            @endif
          </span>
        </button>
      </div>`;
          } else {
            $.each(data.wishlists, function(key, value) {
              @if (session()->get('language') === 'bangla')
                wishlist += `
                <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                  <div class="product-inner pr">

                    <div class="product-image pr oh lazyload">
                      <span class="tc nt_labels pa pe_none cw">

                        <p class="price_range">
                          ${value.product.discount==null
                          ? `<span class="nt_label new text-light">New</span>`
                          : `<span class="nt_label bg-danger text-light">${ value.product.discount + "%"}</span>`
                          }
                        </p>
                      </span>
                      <a class="d-block"
                        href="/bn/details/${value.product.category_id}/${value.product.product_slug_bn}">
                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                          data-bgset="/${value.product.image}"></div>
                      </a>
                      <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                          data-bgset="/${value.product.image}"></div>
                      </div>
                      <div class="nt_add_w ts__03 pa ">
                        <a href="#"
                          class="cb chp ttip_nt tooltip_right wis_remove removeWishlist"
                          product_id=${
                          value.product.id
                          }><span class="tt_txt">Remove Wishlist</span><i class="facl facl-heart-o"></i></a>
                      </div>
                      <div class="hover_button op__0 tc pa flex column ts__03">
                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView"
                          product_id=${
                          value.product.id
                          }
                          href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>


                        <a href="#"
                          class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                          product_id=${
                          value.product.id
                          }><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                      </div>
                    </div>
                    <div class="product-info mt__15">
                      <h3 class="product-title pr fs__14 mg__0 fwm">
                        <a class="cd chp"
                          href="product-detail-layout-01.html">
                          ${value.product.product_name_bn}</a>
                      </h3>

                      <p class="price_range">
                        ${value.product.discount==null
                        ? `<span class="price dib mb__5">${value.product.price}</span>`
                        : `<del>${value.product.price}</del><ins>
                          ${Math.round(value.product.price -(value.product.discount * value.product.price) / 100)}
                        </ins>`
                        }
                      </p>

                    </div>

                  </div>
                </div>
                `;


              @else
                wishlist += `
                <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                  <div class="product-inner pr">
                    <div id="wishlist">
                      <div class="product-image pr oh lazyload">
                        <span class="tc nt_labels pa pe_none cw">

                          <p class="price_range">
                            ${value.product.discount==null
                            ? `<span class="nt_label new text-light">New</span>`
                            : `<span class="nt_label bg-danger text-light">${ value.product.discount + "%"}</span>`
                            }
                          </p>


                        </span>
                        <a class="d-block"
                          href="/en/details/${value.product.category_id}/${value.product.product_slug_en}">
                          <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                            data-bgset="/${value.product.image}"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                          <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                            data-bgset="/${value.product.image}"></div>
                        </div>
                        <div class="nt_add_w ts__03 pa ">
                          <a href="#"
                            class="cb chp ttip_nt tooltip_right wis_remove wishlist_remove"
                            product_id=${
                            value.product.id
                            }><span class="tt_txt">Remove Wishlist</span><i class="facl facl-heart-o"></i></a>
                        </div>
                        <div class="hover_button op__0 tc pa flex column ts__03">
                          <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left productView"
                            product_id=${
                            value.product.id
                            }
                            href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>


                          <a href="#"
                            class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                            product_id=${
                            value.product.id
                            }><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                        </div>
                      </div>
                      <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                          <a class="cd chp"
                            href="product-detail-layout-01.html">
                            ${value.product.product_name_en}</a>
                        </h3>

                        <p class="price_range">
                          ${value.product.discount==null
                          ? `<span class="price dib mb__5">${value.product.price}</span>`
                          : `<del>${value.product.price}</del><ins>
                            ${Math.round(value.product.price -(value.product.discount * value.product.price) / 100)}
                          </ins>`
                          }
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                `;

              @endif
            });
          }
          $("#wishlist").html(wishlist);
        },
      });
    }
    @auth
      wishlist();
    @endauth
    // End Wishlish

    // Sort Product
    $(".sort").on('change', function() {
      var sort = $(this).val();
      var url = $('.url').val();
      var brand = $('li .brand,.active a #brand_id').text();
      var size = $('li .size,.active a #s_size').text();
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      var color = $('li .color ,.active a #scolor').text();
      $.ajax({
        url: url,
        data: {
          color: color,
          url: url,
          sort: sort,
          brand: brand,
          size: size,
          min_price: min_price,
          max_price: max_price,

        },
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(resp) {
          $('.filterOption').html(resp);

        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      });
    });
    // Sort Product

    // Filter By Brand
    $('.brand').on('click', function() {
      var brand = ($(this).data("brand"));
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var color = $('li .color,.active').attr("data-color");
      var size = $('li .size,.active a #s_size').text();
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      $.ajax({
        url: url,
        data: {
          url: url,
          brand: brand,
          color: color,
          sort: sort,
          size: size,
          min_price: min_price,
          max_price: max_price,
        },
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      })
    });
    //End Filter By Brand

    // Filter By Color
    $('.color').on('click', function() {
      var color = ($(this).data("color"));
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var brand = $('li .brand,.active a #brand_id').text();
      var size = $('li .size,.active a #s_size').text();
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      $.ajax({
        url: url,
        data: {
          color: color,
          url: url,
          sort: sort,
          brand: brand,
          size: size,
          min_price: min_price,
          max_price: max_price,
        },
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        },

      })

    });
    //End Filter By Color

    // Filter By Size
    $('.size').on('click', function() {
      var size = ($(this).data("size"));
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var brand = $('li .brand,.active a #brand_id').text();
      var color = $('li .color,.active').attr("data-color");
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      $.ajax({
        url: url,
        data: {
          size: size,
          url: url,
          color: color,
          sort: sort,
          brand: brand,
          min_price: min_price,
          max_price: max_price,

        },
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      })

    });
    //End Filter By Size

    // Filter By Price
    $('.price').on('click', function() {
      var min_price = $('.min_price').val();
      var max_price = $('.max_price').val();
      var url = $('.url').val();
      var size = $('li .size,.active a #s_size').text();
      var url = $('.url').val();
      var sort = $(".sort option:selected").val();
      var brand = $('li .brand,.active a #brand_id').text();
      var color = $('li .color,.active').attr("data-color");
      $.ajax({
        url: url,
        data: {
          min_price: min_price,
          max_price: max_price,
          url: url,
          size: size,
          color: color,
          sort: sort,
          brand: brand,
        },
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(resp) {
          $('.filterOption').html(resp);
          $.magnificPopup.close();
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }
      })
    });
    //End Filter By price

    // Coupon Apply
    $("#couponApply").click(function(event) {
      event.preventDefault();
      var coupon = $("#couponApplyText").val();
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "/user/coupon/apply",
        data: {
          coupon: coupon,
        },
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(data) {
          if (data.is_true == 'valid') {
            CouponCalculate();
            toastr["success"]("Coupon Apply Successfully");
            $('#hideCoupon').hide();
            $('#showCoupon').show();
            $('#CouponDiscount').show();
            $('#couponId').text('');


          } else if (data.is_true == 'empty') {
            toastr["error"]("Your cart is empty");
          } else {
            toastr["error"]("Invalid coupon");
          }
        },
        complete: function() {
          $("#overlay").fadeOut(300);
        }

      })
    });
    //End Coupon Apply

    // Coupon Caculate
    function CouponCalculate() {
      $.ajax({
        type: "GET",
        dataType: "json",
        url: '/coupons/calculate',
        @if (session()->get('language') === 'bangla')
          success: function(data) {
          if (data.total) {
          $('#couponData').html(
          ` <div class="total row in_flex fl_between al_center cd fs__18 tu">
            <div class="col-auto"><strong>সর্বমোট:</strong></div>
            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
              <div class="cart_tot_price">${data.total} ৳
              </div>
            </div>

          </div>`
          )
          } else {
          $('#couponData').html(`
          <div class="total row in_flex fl_between al_center cd fs__18 tu">
            <div class="col-auto"><strong class="text-primary">উপদাম:</strong></div>
            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
              <div class="cart_tot_price text-primary">${data.subtotal}৳
              </div>
            </div>

          </div>
          <div class="clearfix"></div>
          <span class="db txt_tax_ship mb__5 mt_5"><b><code>${data.coupon_name}</code> counpon(${data.coupon_discount} %) : -
              ${data.discount_amount}</b>
            <a href="#"
              onclick="couponRemove()"
              id=""
              class="ttip_nt tooltip_top_right "><span class="tt_txt">এই কুপনটি সরান</span>
              <svg style="width: 20px;height: 20px;stroke-width: 1.5;"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10"
                  y1="11"
                  x2="10"
                  y2="17"></line>
                <line x1="14"
                  y1="11"
                  x2="14"
                  y2="17"></line>
              </svg>
            </a></span>

          <div class="total row in_flex fl_between al_center cd fs__18 tu">
            <div class="col-auto"><strong class="text-danger">সর্বমোট:</strong></div>
            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
              <div class="cart_tot_price text-danger">${data.total_amount} ৳
              </div>
            </div>

          </div>
          <div class="clearfix"></div>
          `);
          }
          },
        @else
          success: function(data) {
          if (data.total) {
          $('#couponData').html(
          ` <div class="total row in_flex fl_between al_center cd fs__18 tu">
            <div class="col-auto"><strong>GrandTotal:</strong></div>
            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
              <div class="cart_tot_price">${data.total}
              </div>
            </div>

          </div>`
          )
          } else {
          $('#couponData').html(`
          <div class="total row in_flex fl_between al_center cd fs__18 tu">
            <div class="col-auto"><strong class="text-primary">Subtotal:</strong></div>
            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
              <div class="cart_tot_price text-primary">${data.subtotal}
              </div>
            </div>

          </div>
          <div class="clearfix"></div>
          <span class="db txt_tax_ship mb__5 mt_5"><b><code>${data.coupon_name}</code> counpon(${data.coupon_discount} %) : -
              ${data.discount_amount}</b>
            <a href=""    onclick="couponRemove()"
              id=""
              class="ttip_nt tooltip_top_right  "><span class="tt_txt">Remove this coupon</span>
              <svg style="width: 20px;height: 20px;stroke-width: 1.5;"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10"
                  y1="11"
                  x2="10"
                  y2="17"></line>
                <line x1="14"
                  y1="11"
                  x2="14"
                  y2="17"></line>
              </svg>
            </a></span>

          <div class="total row in_flex fl_between al_center cd fs__18 tu">
            <div class="col-auto"><strong class="text-danger">Grand Total:</strong></div>
            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
              <div class="cart_tot_price text-danger">${data.total_amount}
              </div>
            </div>

          </div>
          <div class="clearfix"></div>
          `);
          }
          },
        @endif
      })
    }
    CouponCalculate();
    // End Coupon Caculate

    // Coupon Remove
    function couponRemove() {
      $.ajax({
        type: 'GET',
        url: "/user/coupon-remove",
        dataType: 'json',
        beforeSend: function() {
          $("#overlay").fadeIn(300);
        },
        success: function(data) {
            $('#hideCoupon').show();
            $('#showCoupon').hide();
            $('#CouponDiscount').hide();
            CouponCalculate();
            toastr["success"]("Coupon Remove Successfully");
        },

        complete: function() {
          $("#overlay").fadeOut(300);
        }
      });
    }
    // End Coupon Remove
  </script>
  <!--========================== End Ajax=========================-->

  @stack('js')
  <script src="{{ asset('frontend/assets/js/interface.js') }}"></script>
</body>

</html>
