{{-- <div class="product-price-wrap">
@switch($kind)
    @case(SC_PRODUCT_GROUP)
    <div class="product-price">{!! trans('product.price_group') !!}</div>
        @break
    @default
        @if ($price == $priceFinal)
            <div class="product-price">{!! sc_currency_render($price) !!}</div>
        @else
            <div class="product-price product-price-old">{!!  sc_currency_render($price) !!}</div>
            <div class="product-price">{!! sc_currency_render($priceFinal) !!}</div>
        @endif
@endswitch
</div>     --}}
@switch($kind)
    @case(SC_PRODUCT_GROUP)
        <span class="sc-new-price">{!! trans('product.price_group') !!}</span>
        @break
    @default
{{--    {{dd($price)}}--}}
        @if ($price == $priceFinal)
            <span class="sc-new-price">{!! sc_currency_render($price) !!}</span>
        @else
            <span class="sc-new-price">{!! sc_currency_render($priceFinal) !!}</span>
            <span class="sc-old-price">{!!  sc_currency_render($price) !!}</span>
            <span class="percent-price">{!! sc_percent_render($price,$priceFinal) !!}</span>
        @endif
        
@endswitch