@php
/*
$layout_page = product_detail
$product: no paginate
$productRelation: no paginate
*/
      $productsNew = $modelProduct->start()->getProductLatest()->setlimit(8)->getData();
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main_content_center')

    <!-- Main Content Wrapper Start -->

    <div class="main-content-wrapper">
        <div class="single-products-area section-padding section-sm-padding">
            <div class="container">
                <!-- Single Product Start -->
{{--                {{dd($product)}}--}}
                <section class="single-product bg--white  pt--20 pb--80 pt-sm--60 pb-sm--60">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <!-- Tab Content Start -->
                            <div class="tab-content product-thumb-large" id="myTabContent-3">
                                <div class="tab-pane fade show active" id="product-large-one">
                                    <div class="single-product__img easyzoom">
                                        <img src="{{ asset($product->getImage()) }}" alt="product">
                                        <a class="popup-btn" href="{{ asset($product->getImage()) }}"><i class="fa fa-search-plus"></i>Large Image</a>
                                    </div>
                                </div>
                                @if ($product->images->count())
                                    @foreach ($product->images as $key=>$image)
                                    <div class="tab-pane fade" id="product-large-{{$image->id}}">
                                        <div class="single-product__img easyzoom">
                                            <img src="{{ asset($image->getImage()) }}" alt="product">
                                            <a class="popup-btn" href="{{ asset($image->getImage()) }}"><i class="fa fa-search-plus"></i>Large Image</a>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                            <!-- Tab Content End -->

                            <!-- Product Thumbnail Carousel Start -->
                            <div class="product-thumbnail">
                                <div class="thumb-menu product-thumb-menu" id="thumbmenu-horizontal">
                                    <div class="thumb-menu-item">
                                        <a href="#product-large-one" data-toggle="tab" class="nav-link active">
                                            <img src="{{ asset($product->getImage()) }}" alt="product thumb">
                                        </a>
                                    </div>
                                    @if ($product->images->count())
                                        @foreach ($product->images as $key=>$image)
                                            <div class="thumb-menu-item">
                                                <a href="#product-large-{{$image->id}}" data-toggle="tab" class="nav-link">
                                                    <img src="{{ asset($image->getImage()) }}" alt="product thumb">
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- Product Thumbnail Carousel End -->
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <!-- Single Product Content Start -->
                            <div class="single-product__content">
                                <div class="single-product__top">
                                    <h2 class="single-product__name">{{$product->name}}</h2>
{{--                                    <div class="ratings-wrap">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <i class="fa fa-star rated"></i>--}}
{{--                                            <i class="fa fa-star rated"></i>--}}
{{--                                            <i class="fa fa-star rated"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </div>--}}
{{--                                        <span>(2 Customer Reviews)</span>--}}
{{--                                    </div>--}}

                                    <div class="product-view-sa">
                                        <div class="product-view-sa_one">
                                            <div class="product-view-sa-supplier">
                                                <span>Nhà cung cấp:</span>
                                                @if(!empty($brand->name))
                                                <span>{{$brand->name}}</span>
                                                @endif
                                            </div>
                                            <div class="product-view-sa-author">
                                                @if(!empty($product->author))
                                                <span>Tác giả:</span><span>{{$product->author}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-view-sa_two">
                                            <div class="product-view-sa-supplier">@if(!empty($supplier->name))<span>Nhà xuất bản:</span><span>{{$supplier->name}}</span>@endif</div>
                                            <div class="product-view-sa-author">@if(!empty($product->formality))<span>Hình thức bìa:</span><span>{{$product->formality}}</span>@endif</div>
                                        </div>
                                    </div>

                                    <div class="single-product__price">
{{--                                        <span class="regular-price">&dollar;30.50</span>--}}
{{--                                        <span class="sale-price">&dollar;28.98</span>--}}
                                            {!! $product->showPrice() !!}
{{--                                            {!! $product->showPercentPrice() !!}--}}
                                    </div>
                                </div>

                                <div class="single-product__middle">
                                    <p class="single-product__short-desc">{{$product->description}}</p>
                                    @if($product->stock<=0)
                                        <p class="product-availability">Sản phẩm hết hàng.</p>
                                    @else
                                        <p class="product-availability"><i class="fa fa-check-circle"></i>{{'Số lượng :' . $product->stock }}</p>
                                        <form id="buy_block" action="{{ sc_route('cart.add') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
                                            <div class="product-action-wrapper">
                                                <div class="quantity">
                                                    <strong>Số lượng:</strong>
                                                    <input type="number" class="quantity-input" name="qty" id="qty1" value="1" min="1">
                                                </div>
                                                <button type="submit" class="btn add-to-cart btn-style-1 color-1">{{trans('front.add_to_cart')}}</button>
                                            </div>
                                        </form>

                                    @endif

                                </div>

{{--                                <div class="single-product__meta">--}}
{{--                                    <p>--}}
{{--                                        <strong>Categories:</strong>--}}
{{--                                        <a href="shop.html">Accessories,</a>--}}
{{--                                        <a href="shop.html">Electronics</a>--}}
{{--                                    </p>--}}
{{--                                    <p>--}}
{{--                                        <strong>Tags:</strong>--}}
{{--                                        <a href="shop.html">cloths,</a>--}}
{{--                                        <a href="shop.html">Fashion</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="fb-share-button"--}}
{{--                                     data-href="{{url()->current()}}"--}}
{{--                                     data-layout="button_count">--}}
{{--                                </div>--}}
{{--                                <div class="social-buttons">--}}
{{--                                    <a href="facebook.com" class="facebook social-button">--}}
{{--                                        <i class="fa fa-facebook"></i>--}}
{{--                                        <span>Like</span>--}}
{{--                                    </a>--}}
{{--                                    <a href="twitter.com" class="twitter social-button">--}}
{{--                                        <i class="fa fa-twitter"></i>--}}
{{--                                        <span>Tweet</span>--}}
{{--                                    </a>--}}
{{--                                    <a href="plus.google.com" class="gplus social-button">--}}
{{--                                        <i class="fa fa-google-plus"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

                            </div>
                            <!-- Single Product Content End -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-7 mt-5">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 d-flex justify-content-center">
                                    <div class="single-product__btn">
                                        <a onClick="addToCartAjax('{{ $product->id }}','wishlist')" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{trans('front.add_to_wishlist')}}"><i class="fa fa-heart-o"></i>{{trans('front.add_to_wishlist')}}</a>
                                        <a onClick="addToCartAjax('{{ $product->id }}','compare')" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{trans('front.compare_page')}}"><i class="fa fa-refresh"></i>{{trans('front.compare_page')}}</a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <div class="social-share">
                                        <strong>CHIA SẺ SẢN PHẨM NÀY</strong>
                                        <ul class="social">
                                            <li class="social__item"><a href="http://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="social__link"><i class="fa fa-facebook social__icon"></i></a></li>
                                            <li class="social__item"><a href="twitter.com" class="social__link"><i class="fa fa-twitter social__icon"></i></a></li>
                                            <li class="social__item"><a href="plus.google.com" class="social__link"><i class="fa fa-google-plus social__icon"></i></a></li>
                                            <li class="social__item"><a href="pinterest.com" class="social__link"><i class="fa fa-pinterest social__icon"></i></a></li>
                                            <li class="social__item"><a href="pinterest.com" class="social__link"><i class="fa fa-linkedin social__icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product End -->

                <!-- Single Product Tab Start -->
                <section class="single-product-tab pt--60 pb--40 pt-sm--40 pb-sm--30">
                    <div class="row">
                        <div class="col-12">
                            <ul class="single-product-tab__head nav nav-tab" id="singleProductTab" role="tablist">
                                <li class="nav-item single-product-tab__item">
                                    <a class="nav-link single-product-tab__link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">{{trans('product.content')}}</a>
                                </li>
{{--                                <li class="nav-item single-product-tab__item">--}}
{{--                                    <a class="nav-link single-product-tab__link" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="true">Additional Information</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item single-product-tab__item">--}}
{{--                                    <a class="nav-link single-product-tab__link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review (2)</a>--}}
{{--                                </li>--}}
                            </ul>
                            <div class="single-product-tab__content tab-content bg--white">
                                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                    <p class="product-description"> {!! sc_html_render($product->content) !!}</p>
{{--                                    <p class="product-description">--}}
{{--                                        Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.--}}
{{--                                    </p>--}}
                                </div>
{{--                                <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">--}}
{{--                                    <div class="product-additional-info">--}}
{{--                                        <h3>Additional Information</h3>--}}
{{--                                        <div class="table-content table-responsive">--}}
{{--                                            <table class="shop_attributes">--}}
{{--                                                <tr>--}}
{{--                                                    <th>Color: </th>--}}
{{--                                                    <td><p>Black, Blue, Gold</p></td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">--}}
{{--                                    <div class="product-review-wrap">--}}
{{--                                        <h2 class="mb--20">2 REVIEWS FOR ALIQUAM LOBORTIS</h2>--}}
{{--                                        <div class="review mb--40">--}}
{{--                                            <div class="review__single">--}}
{{--                                                <div class="review__avatar">--}}
{{--                                                    <img src="assets/img/others/32kSjTmp_normal.jpeg" alt="avatar">--}}
{{--                                                </div>--}}
{{--                                                <div class="review__content">--}}
{{--                                                    <p class="review__meta">--}}
{{--                                                        <span class="review__author">Admin</span>--}}
{{--                                                        <span class="review__dash">-</span>--}}
{{--                                                        <span class="review__date">October 12, 2014</span>--}}
{{--                                                    </p>--}}
{{--                                                    <p class="review__text">--}}
{{--                                                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit--}}
{{--                                                    </p>--}}
{{--                                                    <div class="ratings">--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="review__single">--}}
{{--                                                <div class="review__avatar">--}}
{{--                                                    <img src="assets/img/others/32kSjTmp_normal.jpeg" alt="avatar">--}}
{{--                                                </div>--}}
{{--                                                <div class="review__content">--}}
{{--                                                    <p class="review__meta">--}}
{{--                                                        <span class="review__author">Admin</span>--}}
{{--                                                        <span class="review__dash">-</span>--}}
{{--                                                        <span class="review__date">October 12, 2014</span>--}}
{{--                                                    </p>--}}
{{--                                                    <p class="review__text">--}}
{{--                                                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit--}}
{{--                                                    </p>--}}
{{--                                                    <div class="ratings">--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                        <i class="fa fa-star rated"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="mb--20">Add a Review</h2>--}}
{{--                                        <form class="form form--review">--}}
{{--                                            <div class="form__group clearfix mb--20">--}}
{{--                                                <label class="form__label d-block" >Your Ratings</label>--}}
{{--                                                <div class="rating">--}}
{{--                                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>--}}
{{--                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>--}}
{{--                                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>--}}
{{--                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>--}}
{{--                                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>--}}
{{--                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>--}}
{{--                                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>--}}
{{--                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>--}}
{{--                                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>--}}
{{--                                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form__group clearfix mb--20">--}}
{{--                                                <label class="form__label d-block" for="review">Your Review</label>--}}
{{--                                                <textarea id="review" name="review" class="form__input form__input--textarea form__input--2"></textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="form__group clearfix mb--20">--}}
{{--                                                <label class="form__label d-block" for="review_name">Name *</label>--}}
{{--                                                <input id="review_name" name="review_name" class="form__input form__input--w285">--}}
{{--                                            </div>--}}
{{--                                            <div class="form__group clearfix mb--20">--}}
{{--                                                <label class="form__label d-block" for="review_email">Email *</label>--}}
{{--                                                <input id="review_email" name="review_email" class="form__input form__input--w285">--}}
{{--                                            </div>--}}
{{--                                            <div class="form__group clearfix">--}}
{{--                                                <button type="submit" class="form__submit">Submit</button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product Tab End -->

                <!-- You may also like Product Start -->
                <section class="related-products-area section-padding section-sm-padding">
                    <div class="row">
                        <div class="col-12 mb--20">
                            <div class="section-title title-1">
                                <h2>{{ trans('front.recommended_items') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if (count($productRelation)>0)
                                <div class="related-product-carousel owl-carousel product-carousel-hover">
                                    @foreach ($productRelation as  $key => $product_rel)
                                      <div class="related-product">
                                        <div class="product-box product-box-hover-down bg--white color-1">
                                            <div class="product-box__img">
                                                <img src="{{ asset($product_rel->getImage()) }}" alt="product" class="primary-image">
                                                <img src="{{ asset($product_rel->getImage()) }}" alt="product" class="secondary-image">
                                                <a href="{{$product_rel->getUrl()}}" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-box__content">
                                                <h3 class="product-box__title"><a href="{{$product_rel->getUrl()}}">{{$product_rel->name}}</a></h3>

                                                <div class="product-box__price">
                                                    {!! $product_rel->showPrice() !!}
                                                </div>
                                            </div>
                                            <div class="product-box__action action-2">
                                                <a onClick="addToCartAjax('{{ $product_rel->id }}','wishlist')" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="{{trans('front.add_to_wishlist')}}"><i class="fa fa-heart-o"></i></a>
                                                <a onClick="addToCartAjax('{{ $product_rel->id }}','default')"  class="add-to-cart" data-toggle="tooltip" data-placement="top" title="{{trans('front.add_to_cart')}}"><i class="fa fa-shopping-bag"></i>{{trans('front.add_to_cart')}}</a>
                                                <a onClick="addToCartAjax('{{ $product_rel->id }}','compare')" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="{{trans('front.compare_page')}}"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </section>
                <!-- You may also like Product End -->

                <!-- Related Product Start -->
                <section class="related-products-area section-padding section-sm-padding">
                    <div class="row">
                        <div class="col-12 mb--20">
                            <div class="section-title title-1">
                                <h2>{{ trans('front.products_new') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if (count($productsNew) > 0)
                            <div class="related-product-carousel owl-carousel product-carousel-hover">
                                @foreach ($productsNew as  $key => $pro_new)
                                 <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{ asset($pro_new->getImage()) }}" alt="product" class="primary-image">
                                            <img src="{{ asset($pro_new->getImage()) }}" alt="product" class="secondary-image">
                                            <a href="{{$pro_new->getUrl()}}" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="product-box__content">
                                            <h3 class="product-box__title"><a href="{{$pro_new->getUrl()}}">{{$pro_new->name}}</a></h3>
                                            <div class="product-box__price">
                                                {!! $pro_new->showPrice() !!}
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a onClick="addToCartAjax('{{ $pro_new->id }}','wishlist')" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="{{trans('front.add_to_wishlist')}}"><i class="fa fa-heart-o"></i></a>
                                            <a onClick="addToCartAjax('{{ $pro_new->id }}','default')"  class="add-to-cart" data-toggle="tooltip" data-placement="top" title="{{trans('front.add_to_cart')}}"><i class="fa fa-shopping-bag"></i>{{trans('front.add_to_cart')}}</a>
                                            <a onClick="addToCartAjax('{{ $pro_new->id }}','compare')" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="{{trans('front.compare_page')}}"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>@endif
                        </div>
                    </div>
                </section>
                <!-- Related Product End -->
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper End -->
@endsection

@section('breadcrumb')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">{{ trans('front.home') }}</a></li>
                        <li><a href="{{route('product.all')}}">{{ trans('front.shop') }}</a></li>
                        <li class="current"><a>{{$title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
      {{-- style css --}}
@endpush

@push('scripts')
{{-- <script type="text/javascript">
  $('.sc-product-group').click(function(event) {
    if($(this).hasClass('active')){
      return;
    }
    $('.sc-product-group').removeClass('active');
    $(this).addClass('active');
    var id = $(this).data("id");
      $.ajax({
          url:'{{ route("product.info") }}',
          type:'POST',
          dataType:'json',
          data:{id:id,"_token": "{{ csrf_token() }}"},
          beforeSend: function(){
              $('#loading').show();
          },
          success: function(data){
            //console.log(data);
            var showImages = '<div class="carousel-inner">' +
              '<div class="view-product item active"  data-slide-number="0">'+
                  '<img src="'+data.image+'" alt="">'+
              '</div>';
          if(data.subImages.length) {
              $.each(data.subImages, function( index, value ) {
                  showImages +='<div class="view-product item"  data-slide-number="'+(index + 1)+ '">'+
                      '<img src="'+value+'" alt="">'+
                      '</div>'
                });
          }
          showImages +='</div>';
          if(data.subImages.length) {
              showImages += '<a class="left item-control" href="#similar-product" data-slide="prev">'+
                  '<i class="fa fa-angle-left"></i></a>'+
                  '<a class="right item-control" href="#similar-product" data-slide="next">'+
                  '<i class="fa fa-angle-right"></i>'+
                  '</a>';
          }
            $('#product-detail-cart-group').show();
            $('#product-detail-name').html(data.name);
            $('#product-detail-model').html(data.sku);
            $('#product-detail-price').html(data.showPrice);
            $('#product-detail-brand').html(data.brand_name);
            $('#product-detail-image').html(showImages);
            $('#product-detail-available').html(data.availability);
            $('#product-detail-id').val(data.id);
            $('#product-detail-image').carousel();
            $('#loading').hide();
            window.history.pushState("", "", data.url);
          }
      });

  });
</script> --}}
@endpush
