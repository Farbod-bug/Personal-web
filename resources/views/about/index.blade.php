@extends('layout.master')

@section('title', 'About Page')

@section('content')

@php
    $chunks = $subTitles->chunk(ceil($subTitles->count() / 2));
@endphp

<main class="pt-80">
<!-- ==================== Start About ==================== -->
<section class="about section-padding">
    <div class="container with-pad">
        <div class="row lg-marg">
            <div class="col-lg-5 valign">
                <div class="profile-img">
                    <div class="img">
                        <img alt="" src="{{ imageUrl($myinfo->primary_image) }}" />
                    </div>
                    @foreach ($skills as $skill)
                    <span class="icon">
                        <img alt="" src="{{ imageUrl($skill->icon) }}" />
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7 valign">
                <div class="cont">
                    <div class="sub-title-icon d-flex align-items-center">
                        <span class="icon pe-7s-gleam">
                        </span>
                        <h6>
                            درباره من
                        </h6>
                    </div>
                    <div class="text">
                        <h4 class="mb-30">
                           من
                            <span class="main-color">
                                {{ $myinfo->name }}
                            </span>
                            در زمینه‌ی {{ $myinfo->about_title2 }} کار میکنم
                        </h4>
                        <p>
                            {{ $myinfo->about_description }}
                        </p>
                        <div class="feat mt-30">
                            <div class="row">
                                <div class="col-sm-6">
                                    @foreach ($chunks[0] as $subTitle)
                                    <div class="item mb-15">
                                        <h6 class="sub-title ls1">
                                            <span class="fz-13 mr-10 main-color">
                                                <i class="fas fa-check">
                                                </i>
                                            </span>
                                            {{ $subTitle->title }}
                                        </h6>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-sm-6">
                                    @foreach ($chunks[1] as $subTitle)
                                    <div class="item mb-15">
                                        <h6 class="sub-title ls1">
                                            <span class="fz-13 mr-10 main-color">
                                                <i class="fas fa-check">
                                                </i>
                                            </span>
                                            {{ $subTitle->title }}
                                        </h6>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="info mt-50">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item d-flex align-items-center sm-mb30">
                                        <div class="mr-15">
                                            <span class="icon pe-7s-mail">
                                            </span>
                                        </div>
                                        <div>
                                            <span class="opacity-7 mb-5">
                                                به ما ایمیل بزنید
                                            </span>
                                            <h6>
                                                {{ $myinfo->email }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="mr-15">
                                            <span class="icon pe-7s-call">
                                            </span>
                                        </div>
                                        <div>
                                            <span class="opacity-7 mb-5">
                                                با ما تماس بگیرید
                                            </span>
                                            <h6>
                                                {{ convertNumbersToPersian($myinfo->cellphone) }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== End About ==================== -->
<!-- ==================== Start Skills ==================== -->
<section class="skills section-padding pt-0">
    <div class="container with-pad">
        <div class="sec-head mb-80">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sub-title-icon d-flex align-items-center">
                        <span class="icon pe-7s-gym">
                        </span>
                        <h6>
                            مهارت های من
                        </h6>
                    </div>
                    <h3>
                        مهارت های من
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($skills as $skill)
            <div class="col-lg-4 col-md-6">
                <div class="item mb-30">
                    <div class="d-flex align-items-center mb-30">
                        <div class="mr-30">
                            <div class="img icon-img-40">
                                <img alt="" src="{{ imageUrl($skill->icon) }}" />
                            </div>
                        </div>
                        <div>
                            <h6 class="fz-18">
                                {{ $skill->title }}
                            </h6>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <span class="progres" data-value="{{ $skill->progress }}">
                        </span>
                    </div>
                    <span class="value">
                        {{ convertNumbersToPersian($skill->progress) }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ==================== End Skills ==================== -->
<!-- ==================== Start Resume ==================== -->
{{-- <section class="resume section-padding pt-0">
    <div class="container with-pad">
        <div class="sec-head mb-80">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="d-inline-block">
                        <div class="sub-title-icon d-flex align-items-center">
                            <span class="icon pe-7s-note2">
                            </span>
                            <h6>
                                رزومه من
                            </h6>
                        </div>
                    </div>
                    <h3>
                        آموزش و تجربه
                    </h3>
                </div>
            </div>
        </div>
        <div>
            <div class="resume-swiper" data-carousel="swiper" data-space="50" data-speed="1000">
                <div class="swiper-container" data-swiper="container"
                    id="content-carousel-container-unq-resume">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">
                                    ۲۰۲۱ - تاکنون
                                </h6>
                                <h5>
                                    طراح و توسعه دهنده فریمر
                                </h5>
                                <span class="opacity-8 fw-500 mt-10">
                                    [در
                                    اسنوا]
                                </span>
                                <p class="fz-13 mt-15">
                                    ساختن تجربیات دیجیتالی جذاب که کاربران را در قلب طراحی
                                    قرار می دهد.محصول خود را برای افزایش رضایت و وفاداری کاربر افزایش دهید.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">
                                    ۲۰۱۸ - ۲۰۲۰
                                </h6>
                                <h5>
                                    توسعه دهنده وردپرس فرانت‌اند
                                </h5>
                                <span class="opacity-8 fw-500 mt-10">
                                    [در
                                    اسنوا]
                                </span>
                                <p class="fz-13 mt-15">
                                    ساختن تجربیات دیجیتالی جذاب که کاربران را در قلب طراحی
                                    قرار می دهد.محصول خود را برای افزایش رضایت و وفاداری کاربر افزایش دهید.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">
                                    ۲۰۱۵ - ۲۰۱۷
                                </h6>
                                <h5>
                                    طراح وب
                                </h5>
                                <span class="opacity-8 fw-500 mt-10">
                                    [در راست چین]
                                </span>
                                <p class="fz-13 mt-15">
                                    ساختن تجربیات دیجیتالی جذاب که کاربران را در قلب طراحی
                                    قرار می دهد.محصول خود را برای افزایش رضایت و وفاداری کاربر افزایش دهید.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">
                                    ۲۰۱۰ - ۲۰۱۴
                                </h6>
                                <h5>
                                    مدرک لیسانس در طراحی
                                </h5>
                                <span class="opacity-8 fw-500 mt-10">
                                    [دانشگاه RMIT
                                    ایالات متحده]
                                </span>
                                <p class="fz-13 mt-15">
                                    ساختن تجربیات دیجیتالی جذاب که کاربران را در قلب طراحی
                                    قرار می دهد.محصول خود را برای افزایش رضایت و وفاداری کاربر افزایش دهید.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ==================== End Resume ==================== -->
</main>


@endsection

