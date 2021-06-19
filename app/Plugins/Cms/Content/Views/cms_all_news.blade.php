@extends($sc_templatePath.'.layout')

@section('block_main')
    <!-- Main Wrapper Start -->
    <main id="content" class="main-content-wrapper">

        <div class="blog-area pt--40 pb--80 pt-sm--30 pb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-2 order-1 mb-md--30">
                        <div class="row">
                            @if (count($all_news)>0)
                                @foreach ($all_news as $item_new)
                                   <div class="col-lg-6 mb--30">
                                <article class="post sticky single-post format-image">
                                    <header class="entry-header text-center">
                                        <h1 class="post-title">{{ $item_new->title }}</h1>
                                        <div class="entry-meta">
                                                <span class="post-author">
                                                    <span class="post-by">Post By:</span>
                                                    admin
                                                </span>
                                            <span class="post-separator">|</span>
                                            <span class="post-date">Create at: {{ $item_new->created_at }}</span>
                                        </div>
                                    </header>
                                    <div class="post-thumbnail">
                                        <img src="{{ asset($item_new->image) }}" alt="blog">
                                    </div>
                                    <div class="post-info text-center">
                                        <div class="post-content">
                                            <p>{{ $item_new->description }}</p>
                                        </div>
                                        <a href="entry/{{$item_new->alias}}.html" class="btn btn-read-more btn-style-3">Đọc tiếp</a>
                                        <div class="social__sharing">
                                            <h3>Chia sẻ bài viết</h3>
                                            <ul class="social social-round-small">
                                                <li class="social__item">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="social__link"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="twitter.com" class="social__link"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="pinterest.com" class="social__link"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="google.plus.com" class="social__link"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="linkedin.com" class="social__link"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            @else
                                {!! trans('front.no_data') !!}
                            @endif
                        </div>
                        <div class="row">
                            {{ $all_news->appends(request()->except(['page','_token']))->links() }}
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-1 order-2">
                        <aside class="sidebar">

                            <!-- Archive Widget Start -->
                            <div class="sidebar-widget archive-widget">
                                <h3 class="widget-title">{{trans('front.cms_category')}}</h3>
                                @php
                                    $nameSpace = sc_get_plugin_namespace('Cms','Content').'\Models\CmsCategory';
                                    $cmsCategories = (new $nameSpace)->getCategoryRoot()->getData();
                                @endphp

                                <div class="widget_conent">
                                    <ul>
                                        @if(count($cmsCategories)>0)
                                            @foreach ($cmsCategories as $cmsCategory)
                                                <li><a href="{{ $cmsCategory->getUrl() }}">{{ sc_language_render($cmsCategory->title) }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>


                            <!-- Twitter Feed Widget Start -->
                            <div class="sidebar-widget twitter-feed-widget">
                                <h3 class="widget-title">{{trans('front.cms_news')}}</h3>
                                <ul class="twitter-feed">

                                    @foreach($list_entries as $entries)
                                        <li>
                                            <div class="twitter-feed__avatar">
                                                <img src="{{asset($entries->image)}}" alt="avatar">
                                            </div>
                                            <div class="twitter-feed__info">
                                                <div class="twitter-feed__header">
                                                    <a href="{{asset('') }}entry/{{$entries->alias}}.html"><strong> {{$entries->title}}</strong></a>
                                                </div>
                                                <div class="twitter-feed__content">
                                                    <p>{{$entries->description}}</p>
                                                </div>
                                                <div class="twitter-feed__footer">
                                                    <a>Đăng ngày:{{$entries->created_at}}</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Twitter Feed Widget End -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Wrapper End -->
@endsection

{{-- breadcrumb --}}
@section('breadcrumb')
<section class="breadcrumbs-custom">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ sc_route('home') }}">{{ trans('front.home') }}</a></li>
                        <li class="current"><a>{{ $title ?? '' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
{{-- //breadcrumb --}}
