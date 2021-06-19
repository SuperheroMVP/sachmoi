{{--@switch($kind)--}}
{{--    @case(SC_PRODUCT_GROUP)--}}
{{--    <span class="sc-new-price">{!! trans('product.price_group') !!}</span>--}}
{{--    @break--}}
{{--    @default--}}
{{--    --}}{{--    {{dd($price)}}--}}
{{--    @if ($price == $priceFinal)--}}
{{--        <span class="sc-new-price">{!! sc_currency_render($price) !!}</span>--}}
{{--    @else--}}
{{--        <span class="sc-new-price">{!! sc_currency_render($priceFinal) !!}</span>--}}
{{--        <span class="sc-old-price">{!!  sc_currency_render($price) !!}</span>--}}
{{--    @endif--}}

{{--@endswitch--}}
<span class="percent-price">{!!  sc_percent_render($percent) !!}</span>