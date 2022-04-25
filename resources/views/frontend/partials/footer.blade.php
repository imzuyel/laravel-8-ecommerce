  <!-- footer -->
  <footer id="nt_footer" class="bgbl footer-1">
    <div id="kalles-section-footer_top" class="kalles-section footer__top type_instagram">
      <div class="footer__top_wrap footer_sticky_false footer_collapse_true nt_bg_overlay pr oh pb__30 pt__80">
        <div class="container pr z_100">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-1 order-1">
              <div class="widget widget_text widget_">
                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30 dn_md">
                  <span class="txt_title">Get in touch</span>
                  <span class="nav_link_icon ml__5"></span>
                </h3>
                <div class="widget_footer">
                  <div class="footer-contact">
                    <p>
                      <a class="d-block" href="index.html">
                        <img class="w__100 mb__15 lazyload max-width__95px" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20220%2066%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="Kalles Template" data-src="/{{setting('site_logo')}}">
                      </a>
                    </p>
                    <p>
                      <i class="pegk pe-7s-map-marker"> </i><span>5100, Thakurgaon  <br>
                        <span class="pl__30">Rangpur, Bangladesh</span></span>
                    </p>
                    <p><i class="pegk pe-7s-mail"></i>
                      <span><a href="https://themes.the4.co/cdn-cgi/l/email-protection#56353938223735221635393b2637382f7835393b"><span class="__cf_email__" data-cfemail="2e4d41405a4f4d5a6e4d41435e4f4057004d4143">zuyel76@gmail.com</span></a></span>
                    </p>
                    <p><i class="pegk pe-7s-call"></i> <span>+01312733791 </span></p>
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
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-2 order-1">
              <div class="widget widget_nav_menu">
                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                  <span class="txt_title">  {{ (session()->get('language') === 'bangla') ? 'ক্যাটাগরি' : 'Categories'}} </span>
                  <span class="nav_link_icon ml__5"></span>
                </h3>
                <div class="menu_footer widget_footer">
                  <ul class="menu">
                    @foreach ($categoriesfooter as $category)
                    <li class="menu-item">
                    @if (session()->get('language') === 'bangla')
                    <a href="{{ $category->category_name_bn }}">{{ $category->category_name_bn }}</a>
                    @else
                    <a href="{{ $category->category_name_en }}">{{ $category->category_name_en }}</a>
                    @endif


                    </li>
                @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-3 order-1">
              <div class="widget widget_nav_menu">
                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                  <span class="txt_title">Infomation</span>
                  <span class="nav_link_icon ml__5"></span>
                </h3>
                <div class="menu_footer widget_footer">
                  <ul class="menu">
                    <li class="menu-item">
                      <a target="_blank" href="https://www.imzuyel.com/">About Us</a>
                    </li>
                    <li class="menu-item">
                      <a target="_blank" href="https://www.imzuyel.com/">Contact Us</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Terms &amp; Conditions</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Returns &amp; Exchanges</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Shipping &amp; Delivery</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-4 order-1">
              <div class="widget widget_nav_menu">
                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                  <span class="txt_title">Useful links</span>
                  <span class="nav_link_icon ml__5"></span>
                </h3>
                <div class="menu_footer widget_footer">
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="">Store Location</a>
                    </li>
                    <li class="menu-item">
                      <a href="">Latest News</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">My Account</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Size Guide</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">FAQs 2</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-5 order-1">
              <div class="widget widget_text">
                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                  <span class="txt_title">Newsletter Signup</span><span class="nav_link_icon ml__5"></span>
                </h3>
                <div class="widget_footer newl_des_1">
                  <p>Subscribe to our newsletter and get 10% off your first purchase</p>
                  <form method="post" action="#" class="mc4wp-form pr z_100">
                    <div class="mc4wp-form-fields">
                      <div class="signup-newsletter-form row no-gutters pr oh">
                        <div class="col col_email">
                          <input type="email" name="email" placeholder="Your email address" value="" class="tc tl_md input-text" required="required" />
                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn_new_icon_false w__100 submit-btn truncate">
                            <span>Subscribe</span></button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </footer>
  <!-- end footer -->
