<div id="kalles-section-toolbar_mobile" class="kalles-section">

    @if(session()->get('language') === 'bangla')
    <div class="kalles_toolbar kalles_toolbar_label_true ntpf r__0 l__0 b__0 flex fl_between al_center">
        <div class="type_toolbar_shop kalles_toolbar_item">
            <a href="{{ route('frontend.home') }}">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">হোম</span>
            </a>
        </div>
        <div class="type_toolbar_filter kalles_toolbar_item dn">
            <a class="dt_trigger_cl" href="#" data-trigger=".btn_filter">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">ফিল্টার</span>
            </a>
        </div>

        <div class="type_toolbar_wish kalles_toolbar_item">
            <a class="js_link_wis" href="{{ route('user.wishlistdata') }}">
                @auth
				<span class="toolbar_icon">
					<span class="jswcount toolbar_count" id="wishQty1"></span>
				</span>
                @endauth
                @guest
                <span class="toolbar_icon">
					<span class="jswcount toolbar_count">0</span>
				</span>
                @endguest

                <span class="kalles_toolbar_label">ইচ্ছেতালিকা</span>
            </a>
        </div>
        <div class="type_toolbar_cart kalles_toolbar_item">
            <a href="#" class="push_side" data-id="#nt_cart_canvas">
				<span class="toolbar_icon">
					<span class="jsccount toolbar_count" id="cartQty1"></span>
				</span>
                <span class="kalles_toolbar_label">কার্ট</span>
            </a>
        </div>
        <div class="type_toolbar_account kalles_toolbar_item">
            <a href="{{ route('login') }}" >
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">অ্যাকাউন্ট</span>
            </a>
        </div>
        <div class="type_toolbar_search kalles_toolbar_item">
            <a href="#"  data-id="#nt_search_canvas">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">খুজুন</span>
            </a>
        </div>
    </div>
    @else
    <div class="kalles_toolbar kalles_toolbar_label_true ntpf r__0 l__0 b__0 flex fl_between al_center">
        <div class="type_toolbar_shop kalles_toolbar_item">
            <a href="{{ route('frontend.home') }}">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Home</span>
            </a>
        </div>
        <div class="type_toolbar_filter kalles_toolbar_item dn">
            <a class="dt_trigger_cl" href="#" data-trigger=".btn_filter">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Filter</span>
            </a>
        </div>
        <div class="type_toolbar_wish kalles_toolbar_item">
            <a class="js_link_wis" href="{{ route('user.wishlistdata') }}">
                @auth
				<span class="toolbar_icon">
					<span class="jswcount toolbar_count" id="wishQty1"></span>
				</span>
                @endauth
                @guest
                <span class="toolbar_icon">
					<span class="jswcount toolbar_count">0</span>
				</span>
                @endguest

                <span class="kalles_toolbar_label">Wishlist</span>
            </a>
        </div>
        <div class="type_toolbar_cart kalles_toolbar_item">
            <a href="#" class="push_side" data-id="#nt_cart_canvas">
				<span class="toolbar_icon">
					<span class="jsccount toolbar_count" id="cartQty1"></span>
				</span>
                <span class="kalles_toolbar_label">Cart</span>
            </a>
        </div>
        <div class="type_toolbar_account kalles_toolbar_item">
            <a href="{{ route('login') }}" >
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Account</span>
            </a>
        </div>
        <div class="type_toolbar_search kalles_toolbar_item">
            <a href="#"  data-id="#nt_search_canvas">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Search</span>
            </a>
        </div>
    </div>
    @endif

</div>
