<div class="sidebar-wrapper"
  data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <h4 class="logo-text">{{ setting('site_title', 'Starter') }}</h4>
    </div>
    <a href="javascript:;"
      class="ml-auto toggle-btn"> <i class="bx bx-menu"></i>
    </a>
  </div>
  <!--navigation-->
  <ul class="metismenu"
    id="menu">
    <!--Home-->
    @if (Auth::user()->hasPermission('app.dashboard'))
      <li class="{{ Request::is('app/dashboard') ? 'mm-active' : '' }}">
        <a href="{{ route('app.dashboard') }}">
          <div class="parent-icon icon-color-1">
            <i class="bx bx-home-alt"></i>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>
    @endif
    <!--End Home-->
    <li class="menu-label">Shop</li>
    <!--Slider-->
    @if (Auth::user()->hasPermission('app.sliders.index') || Auth::user()->hasPermission('app.sliders.create'))
      <li class="{{ Request::is('app/sliders/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-11"><i class="bx bx-repeat"></i>
          </div>
          <div class="menu-title">Slider</div>
        </a>
        <ul class="{{ Request::is('app/sliders*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.sliders.create'))
            <li class="{{ Request::is('app/sliders/create/') ? 'mm-active' : '' }}">
              <a href="{{ route('app.sliders.create') }}"><i class="bx bx-plus"></i>
                Create
              </a>
            </li>
          @endif
          @if (Auth::user()->hasPermission('app.sliders.index'))
            <li
              class="{{ Request::is('app/sliders') ? 'mm-active' : '' }}{{ Request::is('app/sliders/*/edit') ? 'mm-active' : '' }} {{ Request::is('app/sliders/multi-image/*') ? 'mm-active' : '' }} {{ Request::is('app/sliders/stock/*') ? 'mm-active' : '' }}">
              <a href="{{ route('app.sliders.index') }}"><i class="bx bx-star"></i>Manage</a>
            </li>
          @endif
        </ul>
      </li>
    @endif
    <!--End Slider-->

    <!--Brand-->
    @if (Auth::user()->hasPermission('app.brands.index') || Auth::user()->hasPermission('app.brands.create'))
      <li class="{{ Request::is('app/brands/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-3"><i class="bx bx-envelope"></i>
          </div>
          <div class="menu-title">Brands</div>
        </a>
        <ul class="{{ Request::is('app/brands*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.brands.create'))
            <li class="{{ Request::is('app/brands/create/') ? 'mm-active' : '' }}">
              <a href="{{ route('app.brands.create') }}"><i class="bx bx-plus"></i>
                Create
              </a>
            </li>
          @endif
          @if (Auth::user()->hasPermission('app.brands.index'))
            <li
              class="{{ Request::is('app/brands') ? 'mm-active' : '' }}{{ Request::is('app/brands/*/edit') ? 'mm-active' : '' }}">
              <a href="{{ route('app.brands.index') }}"><i class="bx bx-star"></i>Manage</a>
            </li>
          @endif
        </ul>
      </li>
    @endif
    <!--End Brand-->

    <!--Category-->
    @if (Auth::user()->hasPermission('app.categories.index') || Auth::user()->hasPermission('app.categories.create'))
      <li>
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-9"><i class="bx bx-task"></i>
          </div>
          <div class="menu-title">Catalog</div>
        </a>
        <ul class="{{ Request::is('app/categories*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.categories.index') || Auth::user()->hasPermission('app.categories.create'))
            <li class="{{ Request::is('app/categories/*') ? 'mm-active' : '' }}">
              <a class="has-arrow"
                href="javascript:;">
                <div class=" icon-color-3"><i class="bx bx-blanket"></i>
                </div>
                <div class="menu-title">Category</div>
              </a>
              <ul class="{{ Request::is('app/categories*') ? 'mm-show' : '' }}">
                @if (Auth::user()->hasPermission('app.categories.create'))
                  <li class="{{ Request::is('app/categories/create/') ? 'mm-active' : '' }}">
                    <a href="{{ route('app.categories.create') }}"><i class="bx bx-plus"></i>
                      Add
                    </a>
                  </li>
                @endif
                @if (Auth::user()->hasPermission('app.categories.index'))
                  <li
                    class="{{ Request::is('app/categories') ? 'mm-active' : '' }}{{ Request::is('app/categories/*/edit') ? 'mm-active' : '' }}">
                    <a href="{{ route('app.categories.index') }}"><i class="bx bx-star"></i>Manage</a>
                  </li>
                @endif
              </ul>
            </li>

            <li class="{{ Request::is('app/subcategories/*') ? 'mm-active' : '' }}">
              <a class="has-arrow"
                href="javascript:;">
                <div class=" icon-color-4"><i class="bx bx-cabinet"></i>
                </div>
                <div class="menu-title">Sub Category</div>
              </a>
              <ul class="{{ Request::is('app/subcategories*') ? 'mm-show' : '' }}">
                @if (Auth::user()->hasPermission('app.categories.create'))
                  <li class="{{ Request::is('app/subcategories/create/') ? 'mm-active' : '' }}">
                    <a href="{{ route('app.subcategories.create') }}"><i class="bx bx-plus"></i>
                      Add
                    </a>
                  </li>
                @endif
                @if (Auth::user()->hasPermission('app.categories.index'))
                  <li
                    class="{{ Request::is('app/subcategories') ? 'mm-active' : '' }}{{ Request::is('app/subcategories/*/edit') ? 'mm-active' : '' }}">
                    <a href="{{ route('app.subcategories.index') }}"><i class="bx bx-star"></i>Manage</a>
                  </li>
                @endif
              </ul>
            </li>

            <li class="{{ Request::is('app/subsubcategories/*') ? 'mm-active' : '' }}">
              <a class="has-arrow"
                href="javascript:;">
                <div class=" icon-color-5"><i class="bx bx-notepad"></i>
                </div>
                <div class="menu-title">Sub sub-category</div>
              </a>
              <ul class="{{ Request::is('app/subsubcategories*') ? 'mm-show' : '' }}">
                @if (Auth::user()->hasPermission('app.categories.create'))
                  <li class="{{ Request::is('app/subsubcategories/create/') ? 'mm-active' : '' }}">
                    <a href="{{ route('app.subsubcategories.create') }}"><i class="bx bx-plus"></i>
                      Add
                    </a>
                  </li>
                @endif
                @if (Auth::user()->hasPermission('app.categories.index'))
                  <li
                    class="{{ Request::is('app/subsubcategories') ? 'mm-active' : '' }}{{ Request::is('app/subsubcategories/*/edit') ? 'mm-active' : '' }}">
                    <a href="{{ route('app.subsubcategories.index') }}"><i class="bx bx-star"></i>Manage</a>
                  </li>
                @endif
              </ul>
            </li>
          @endif
        </ul>
      </li>
    @endif
    <!--End Category-->

    <!--product-->
    @if (Auth::user()->hasPermission('app.products.index') || Auth::user()->hasPermission('app.products.create'))
      <li class="{{ Request::is('app/products/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-7"><i class="bx bx-archive"></i>
          </div>
          <div class="menu-title">Product</div>
        </a>
        <ul class="{{ Request::is('app/products*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.products.create'))
            <li class="{{ Request::is('app/products/create/') ? 'mm-active' : '' }}">
              <a href="{{ route('app.products.create') }}"><i class="bx bx-plus"></i>
                Create
              </a>
            </li>
          @endif
          @if (Auth::user()->hasPermission('app.products.index'))
            <li
              class="{{ Request::is('app/products') ? 'mm-active' : '' }}{{ Request::is('app/products/*/edit') ? 'mm-active' : '' }} {{ Request::is('app/products/multi-image/*') ? 'mm-active' : '' }} {{ Request::is('app/products/stock/*') ? 'mm-active' : '' }}">
              <a href="{{ route('app.products.index') }}"><i class="bx bx-star"></i>Manage</a>
            </li>
          @endif
        </ul>
      </li>
    @endif
    <!--End product-->

    <!--Static page-->
    @if (Auth::user()->hasPermission('app.pages.index'))
      <li class="menu-label">Static</li>
      <li class="{{ Request::is('app/pages/*') ? 'mm-active' : '' }}">
        <a href="{{ route('app.pages.index') }}">
          <div class="parent-icon icon-color-3">
            <i class="bx bx-receipt"></i>
          </div>
          <div class="menu-title">Pages</div>
        </a>
      </li>
    @endif
    <!--End Static page-->

    <!--About customer-->
    <li class="menu-label">Coupon & Shipping</li>
    <!--Coupon-->
    @if (Auth::user()->hasPermission('app.coupons.index') || Auth::user()->hasPermission('app.coupons.create'))
      <li class="{{ Request::is('app/coupons/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-2"><i class="bx bx-pyramid"></i>
          </div>
          <div class="menu-title">Coupons</div>
        </a>
        <ul class="{{ Request::is('app/coupons*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.coupons.create'))
            <li class="{{ Request::is('app/coupons/create/') ? 'mm-active' : '' }}">
              <a href="{{ route('app.coupons.create') }}"><i class="bx bx-plus"></i>
                Create
              </a>
            </li>
          @endif
          @if (Auth::user()->hasPermission('app.coupons.index'))
            <li
              class="{{ Request::is('app/coupons') ? 'mm-active' : '' }}{{ Request::is('app/coupons/*/edit') ? 'mm-active' : '' }}">
              <a href="{{ route('app.coupons.index') }}"><i class="bx bx-star"></i>Manage</a>
            </li>
          @endif
        </ul>
      </li>
    @endif
    <!--End Coupon-->

    <!--Shipping-->
    @if (Auth::user()->hasPermission('app.shippings.index') || Auth::user()->hasPermission('app.shippings.create'))
      <li class="{{ Request::is('app/place/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
          </div>
          <div class="menu-title">Place</div>
        </a>
        <ul>
          <li class="{{ Request::is('app/division/*') ? 'mm-active' : '' }}">
            <a class="has-arrow"
              href="javascript:;">
              <div class=" icon-color-3"><i class="bx bx-receipt"></i>
              </div>
              <div class="menu-title">Division</div>
            </a>
            <ul class="{{ Request::is('app/division*') ? 'mm-show' : '' }}">

              <li class="{{ Request::is('app/division/create/') ? 'mm-active' : '' }}">
                <a href="{{ route('app.division.create') }}"><i class="bx bx-right-arrow-alt"></i>
                  Add
                </a>
              </li>
              <li
                class="{{ Request::is('app/division') ? 'mm-active' : '' }}{{ Request::is('app/division/*/edit') ? 'mm-active' : '' }}">
                <a href="{{ route('app.division.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage</a>
              </li>
            </ul>
          </li>
          <li class="{{ Request::is('app/zilla/*') ? 'mm-active' : '' }}">
            <a class="has-arrow"
              href="javascript:;">
              <div class=" icon-color-3"><i class="bx bx-receipt"></i>
              </div>
              <div class="menu-title">Zilla</div>
            </a>
            <ul class="{{ Request::is('app/zilla*') ? 'mm-show' : '' }}">

              <li class="{{ Request::is('app/zilla/create/') ? 'mm-active' : '' }}">
                <a href="{{ route('app.zilla.create') }}"><i class="bx bx-right-arrow-alt"></i>
                  Add
                </a>
              </li>
              <li
                class="{{ Request::is('app/zilla') ? 'mm-active' : '' }}{{ Request::is('app/zilla/*/edit') ? 'mm-active' : '' }}">
                <a href="{{ route('app.zilla.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage</a>
              </li>
            </ul>
          </li>
          <li class="{{ Request::is('app/upzilla/*') ? 'mm-active' : '' }}">
            <a class="has-arrow"
              href="javascript:;">
              <div class="icon-color-3"><i class="bx bx-receipt"></i>
              </div>
              <div class="menu-title">UpZilla</div>
            </a>
            <ul class="{{ Request::is('app/upzilla*') ? 'mm-show' : '' }}">

              <li class="{{ Request::is('app/upzilla/create/') ? 'mm-active' : '' }}">
                <a href="{{ route('app.upzilla.create') }}"><i class="bx bx-right-arrow-alt"></i>
                  Add
                </a>
              </li>
              <li
                class="{{ Request::is('app/upzilla') ? 'mm-active' : '' }}{{ Request::is('app/upzilla/*/edit') ? 'mm-active' : '' }}">
                <a href="{{ route('app.upzilla.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    @endif
    <!--End Shipping-->

    <!--Security page-->
    <li class="menu-label">Security</li>
    @if (Auth::user()->hasPermission('app.users.index') || Auth::user()->hasPermission('app.users.create'))
      <li class="{{ Request::is('app/users/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-4"><i class="bx bx-user"></i>
          </div>
          <div class="menu-title">Users</div>
        </a>
        <ul class="{{ Request::is('app/users*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.users.create'))
            <li class="{{ Request::is('app/users/create/') ? 'mm-active' : '' }}">
              <a href="{{ route('app.users.create') }}"><i class="bx bx-plus"></i>
                Create
              </a>
            </li>
          @endif
          @if (Auth::user()->hasPermission('app.users.create'))
            <li
              class="{{ Request::is('app/users') ? 'mm-active' : '' }}{{ Request::is('app/users/*/edit') ? 'mm-active' : '' }}">
              <a href="{{ route('app.users.index') }}"><i class="bx bx-star"></i>Manage</a>
            </li>
          @endif
        </ul>
      </li>
    @endif
    @if (Auth::user()->hasPermission('app.roles.index') || Auth::user()->hasPermission('app.roles.create'))
      <li class="{{ Request::is('app/roles/*') ? 'mm-active' : '' }}">
        <a class="has-arrow"
          href="javascript:;">
          <div class="parent-icon icon-color-5"><i class="bx bx-shield-quarter"></i>
          </div>
          <div class="menu-title">roles</div>
        </a>
        <ul class="{{ Request::is('app/roles*') ? 'mm-show' : '' }}">
          @if (Auth::user()->hasPermission('app.roles.create'))
            <li class="{{ Request::is('app/roles/create/') ? 'mm-active' : '' }}">
              <a href="{{ route('app.roles.create') }}"><i class="bx bx-plus"></i>
                Create
              </a>
            </li>
          @endif
          @if (Auth::user()->hasPermission('app.roles.create'))
            <li
              class="{{ Request::is('app/roles') ? 'mm-active' : '' }}{{ Request::is('app/roles/*/edit') ? 'mm-active' : '' }}">
              <a href="{{ route('app.roles.index') }}"><i class="bx bx-star"></i>Manage</a>
            </li>
          @endif
        </ul>
      </li>
    @endif
    <!--End Security page-->

    <!--System-->
    <li class="menu-label">System</li>
    @if (Auth::user()->hasPermission('app.backups.index'))
      <li class="{{ Request::is('app/backups') ? 'mm-active' : '' }}">
        <a href="{{ route('app.backups.index') }}">
          <div class="parent-icon icon-color-6">
            <i class="bx bx-cloud"></i>
          </div>
          <div class="menu-title">Backup</div>
        </a>
      </li>
    @endif
    @if (Auth::user()->hasPermission('app.settings.general') || Auth::user()->hasPermission('app.settings.appearance') || Auth::user()->hasPermission('app.settings.database') || Auth::user()->hasPermission('app.settings.mail') || Auth::user()->hasPermission('app.socialite.mail'))
      <li class="{{ Request::is('app/settings/*') ? 'mm-active' : '' }}">
        <a href="{{ route('app.settings.index') }}">
          <div class="parent-icon icon-color-7">
            <i class="bx bx-cog"></i>
          </div>
          <div class="menu-title">Setting</div>
        </a>
      </li>
    @endif
    @if (Auth::user()->hasPermission('app.cacheclear'))
      <li class="{{ Request::is('clear/*') ? 'mm-active' : '' }}">
        <a href="{{ route('cache') }}">
          <div class="parent-icon icon-color-8">
            <i class="bx bx-rocket"></i>
          </div>
          <div class="menu-title">Cache clear</div>
        </a>
      </li>
    @endif
  </ul>
  <!--end navigation-->
</div>
