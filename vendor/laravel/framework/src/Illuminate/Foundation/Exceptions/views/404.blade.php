{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
 --}}
 @extends('errors::minimal')
<link href="{{ asset($sc_templateFile.'/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset($sc_templateFile.'/css/main.css')}}" rel="stylesheet">
@section('title', __('Not Found'))
{{--@section('code', '404')--}}
<div class="error-area pt--90 pb--100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="error">
                    <h1>404</h1>
                    <h2>OPPS! PAGE NOT BE FOUND</h2>
                    <p>Xin lỗi nhưng trang bạn đang tìm không tồn tại, đã bị xóa, đổi tên hoặc tạm thời không có..</p>
{{--                    <form action="#" class="search-form search-form--3 mb--60">--}}
{{--                        <input type="text" name="search" id="search" placeholder="Search..." class="search-form__input">--}}
{{--                        <button type="submit" class="search-form__submit">--}}
{{--                            <i class="fa fa-search"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
                    <a href="javascript:history.back()" class="btn btn-4 btn-style-3">Trở về trang trước</a>
                </div>
            </div>
        </div>
    </div>
</div>
@section('message', __('Not Found'))
