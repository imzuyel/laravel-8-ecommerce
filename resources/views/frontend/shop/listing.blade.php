@if (isset($products))
  @if (count($products) < 1)
    <div class="">
      <h2 class="text-center text-danger">No products found</h2>
    </div>
  @endif
  @foreach ($products as $product)
    <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2">
      @if (session()->get('language') === 'bangla')
        <div class="product-inner pr">
          <div class="product-image pr oh lazyload">
            <span class="tc nt_labels pa pe_none cw"><span
                class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
            <a class="d-block"
              href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">
              <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                data-bgset="/{{ $product->image }}">
              </div>
            </a>
            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
              <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                data-bgset="/{{ $product->image }}">
              </div>
            </div>

            <div class="hover_button op__0 tc pa flex column ts__03">

              <a class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView"
                href="#"
                product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i
                  class="iccl iccl-cart"></i><span>কার্টে যোগ
                  করুন</span></a>
            </div>
          </div>
          <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
              <a class="cd chp"
                href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
            </h3>
            @if (isset($product->discount))
              <p class="price_range"
                id="price_qv">
                <del> ৳{{ $product->price }}</del>
                <ins>
                  ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
              </p>
            @else
              <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
            @endif
          </div>
        </div>
      @else
        <div class="product-inner pr"
          id="divid">
          <div class="product-image pr oh lazyload">
            <span class="tc nt_labels pa pe_none cw"><span
                class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
            <a class="d-block"
              href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">
              <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                data-bgset="/{{ $product->image }}">
              </div>
            </a>
            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
              <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                data-bgset="/{{ $product->image }}">
              </div>
            </div>

            <div class="hover_button op__0 tc pa flex column ts__03">

              <a href="#"
                class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i
                  class="iccl iccl-cart"></i><span>Add to
                  cart</span></a>
            </div>
          </div>
          <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
              <a class="cd chp"
                href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
            </h3>
            @if (isset($product->discount))
              <p class="price_range"
                id="price_qv">
                <del> ৳{{ $product->price }}</del>
                <ins>
                  ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
              </p>
            @else
              <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
            @endif
          </div>
        </div>
      @endif
    </div>
  @endforeach
@else
  @if (isset($category->products) && !$category->products->isEmpty())
    @foreach ($category->products as $product)
      <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2">
        @if (session()->get('language') === 'bangla')
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span
                  class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
              <a class="d-block"
                href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </div>

              <div class="hover_button op__0 tc pa flex column ts__03">

                <a class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView"
                  href="#"
                  product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i
                    class="iccl iccl-cart"></i><span>কার্টে যোগ
                    করুন</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
              </h3>
              @if (isset($product->discount))
                <p class="price_range"
                  id="price_qv">
                  <del> ৳{{ $product->price }}</del>
                  <ins>
                    ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                </p>
              @else
                <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
              @endif
            </div>
          </div>
        @else
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span
                  class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
              <a class="d-block"
                href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </div>

              <div class="hover_button op__0 tc pa flex column ts__03">

                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                  product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i
                    class="iccl iccl-cart"></i><span>Add to
                    cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
              </h3>
              @if (isset($product->discount))
                <p class="price_range"
                  id="price_qv">
                  <del> ৳{{ $product->price }}</del>
                  <ins>
                    ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                </p>
              @else
                <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
              @endif
            </div>
          </div>
        @endif
      </div>
    @endforeach
  @endif
  @if (isset($subcategory->products) && !$subcategory->products->isEmpty())
    @foreach ($subcategory->products as $product)
      <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
        @if (session()->get('language') === 'bangla')
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span
                  class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
              <a class="d-block"
                href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </div>

              <div class="hover_button op__0 tc pa flex column ts__03">

                <a class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView"
                  href="#"
                  product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i
                    class="iccl iccl-cart"></i><span>কার্টে যোগ
                    করুন</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
              </h3>
              @if (isset($product->discount))
                <p class="price_range"
                  id="price_qv">
                  <del> ৳{{ $product->price }}</del>
                  <ins>
                    ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                </p>
              @else
                <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
              @endif
            </div>
          </div>
        @else
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span
                  class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
              <a class="d-block"
                href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </div>

              <div class="hover_button op__0 tc pa flex column ts__03">

                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                  product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i
                    class="iccl iccl-cart"></i><span>Add to
                    cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
              </h3>
              @if (isset($product->discount))
                <p class="price_range"
                  id="price_qv">
                  <del> ৳{{ $product->price }}</del>
                  <ins>
                    ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                </p>
              @else
                <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
              @endif
            </div>
          </div>
        @endif
      </div>
    @endforeach
  @endif

  @if (isset($subsubcategory->products) && !$subsubcategory->products->isEmpty())
    @foreach ($subsubcategory->products as $product)
      <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
        @if (session()->get('language') === 'bangla')
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span
                  class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
              <a class="d-block"
                href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </div>

              <div class="hover_button op__0 tc pa flex column ts__03">

                <a class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left  productView"
                  href="#"
                  product_id={{ $product->id }}><span class="tt_txt">কার্টে যোগ করুন</span><i
                    class="iccl iccl-cart"></i><span>কার্টে যোগ
                    করুন</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="{{ route('frontend.detailsbn', ['category' => $product->category->category_slug_bn, 'slug' => $product->product_slug_bn]) }}">{{ Str::limit($product->product_name_bn, 20, '...') }}</a>
              </h3>
              @if (isset($product->discount))
                <p class="price_range"
                  id="price_qv">
                  <del> ৳{{ $product->price }}</del>
                  <ins>
                    ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                </p>
              @else
                <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
              @endif
            </div>
          </div>
        @else
          <div class="product-inner pr">
            <div class="product-image pr oh lazyload">
              <span class="tc nt_labels pa pe_none cw"><span
                  class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- ' . $product->discount . ' %' : 'New' }}</span></span>
              <a class="d-block"
                href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </a>
              <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                  data-bgset="/{{ $product->image }}">
                </div>
              </div>

              <div class="hover_button op__0 tc pa flex column ts__03">

                <a href="#"
                  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView"
                  product_id={{ $product->id }}><span class="tt_txt">Add to cart</span><i
                    class="iccl iccl-cart"></i><span>Add to
                    cart</span></a>
              </div>
            </div>
            <div class="product-info mt__15">
              <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp"
                  href="{{ route('frontend.detailsen', ['category' => $product->category->category_slug_en, 'slug' => $product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
              </h3>
              @if (isset($product->discount))
                <p class="price_range"
                  id="price_qv">
                  <del> ৳{{ $product->price }}</del>
                  <ins>
                    ৳{{ round($product->price - ($product->discount * $product->price) / 100) }}</ins>
                </p>
              @else
                <span class="price dib mb__5"> ৳ {{ $product->price }} <span class="text-danger"></span></span>
              @endif
            </div>
          </div>
        @endif
      </div>
    @endforeach
  @endif
@endif
