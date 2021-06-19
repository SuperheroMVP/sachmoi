@php
/*
$layout_page = shop_cart
*/ $productsNew = $modelProduct->start()->getProductLatest()->setlimit(8)->getData();
@endphp
@extends($sc_templatePath.'.layout')

@section('block_main')

    <div class="container text-center">
      <div class="row">
          <div class="col-md-12">
              <h2 class="title-order-success color-main mb-5">Đơn hàng của bạn đã được tiếp nhận</h2>
          </div>
            <div class="col-md-12 color-main">
                <h2 >{{ trans('order.success.msg') }}</h2>
                <h3>{{ trans('order.success.order_info',['order_id'=>session('orderID')]) }}</h3>
                <button class="btn btn-8 btn-style-2 mt-3 mb-3" type="button" style="cursor: pointer;" onClick="location.href='{{ sc_route('cart') }}'"><i class="fa fa-arrow-left"></i>{{ trans('cart.back_to_cart') }}</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Related Product Start -->
                <section class="related-products-area section-padding section-sm-padding">
                    <div class="row">
                        <div class="col-12 mb--20">
                            <div class="section-title title-1">
                                <h2>Có thể bạn quan tâm ?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($productsNew->count())
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

@endsection

@section('breadcrumb')
{{--    <div class="breadcrumbs">--}}
{{--        <ol class="breadcrumb">--}}
{{--          <li><a href="{{ sc_route('home') }}">{{ trans('front.home') }}</a></li>--}}
{{--          <li class="active">{{ $title }}</li>--}}
{{--        </ol>--}}
{{--      </div>--}}
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li><a href="{{ sc_route('home') }}">{{ trans('front.home') }}</a></li>
                    <li class="current">{{ $title }}</li>
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
      {{-- script --}}
@endpush

