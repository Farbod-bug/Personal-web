@php
    $image = imageUrl($myinfo->primary_image);
@endphp

<style>
    .hero .intro .box2 .item3 {
        width: 150px;
        height: 145px;
        background-image: url({{ $image }});
        background-size: cover;
        border-radius: 50px 50px 0 50px;
    }
</style>

<main class="pt-80">
    <!-- ==================== Start Hero ==================== -->
    <section class="hero section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="intro">
                        <div class="lg-box">
                            <div class="box1">
                                <div class="tow-items">
                                    <div class="item1 box-shadwo">
                                        <div class="circle-item d-flex align-items-center justify-content-center">
                                            <h6>
                                                <a href="{{ route('about.index') }}">
                                                    درباره ما
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="text-center mt-30">
                                            <a href="#0">
                                                <svg class="arrow-down" style="stroke-width: 2;"
                                                    viewbox="0 0 34.2 32.3" x="0px" xml:space="preserve"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                                    <line x1="0" x2="33" y1="16" y2="16">
                                                    </line>
                                                    <line x1="17.3" x2="33.2" y1="0.7" y2="16.5">
                                                    </line>
                                                    <line x1="17.3" x2="33.5" y1="31.6" y2="15.4">
                                                    </line>
                                                </svg>
                                                <p class="fz-13 mt-15">
                                                    دانلود رزومه
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item2">
                                        <div
                                            class="sub-item1 box-shadwo d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <h2 class="fw-700">
                                                    {{ convertNumbersToPersian($myinfo->work_history) }}
                                                </h2>
                                                <p class="fz-13">
                                                    سال
                                                    <br />
                                                    تجربه کاری
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sub-item2 box-shadwo">
                                        </div>
                                    </div>
                                </div>
                                <div class="item-down box-shadwo d-flex align-items-center">
                                    <div>
                                        <div class="circle-item d-flex align-items-center justify-content-center">
                                            <a href="{{ route('services.index') }}">
                                                <svg class="arrow-right" style="stroke-width: 2;"
                                                    viewbox="0 0 34.2 32.3" x="0px" xml:space="preserve"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                                    <line x1="0" x2="33" y1="16" y2="16">
                                                    </line>
                                                    <line x1="17.3" x2="33.2" y1="0.7" y2="16.5">
                                                    </line>
                                                    <line x1="17.3" x2="33.5" y1="31.6" y2="15.4">
                                                    </line>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <h6 class="ml-15">
                                        <a href="{{ route('services.index') }}">
                                            خدمات ما
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <div class="box2">
                                <div class="item3 box-shadwo">
                                </div>
                                <div class="item4 box-shadwo d-flex align-items-center">
                                    <h6>
                                        <a href="{{ route('portfolio.index') }}">
                                            نمونه کارها ما
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-boxs">
                            <div class="item5 box-shadwo d-flex align-items-center justify-content-center">
                                <a class="icon" href="{{ $myinfo->linkedin_address }}" target=”_blank”>
                                    <i class="fab fa-linkedin-in">
                                    </i>
                                </a>
                            </div>
                            <div class="item6 box-shadwo d-flex align-items-center justify-content-center">
                                <a class="icon" href="{{ $myinfo->github_address }}" target=”_blank”>
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <div class="item7 box-shadwo d-flex align-items-center justify-content-center">
                                <a class="icon" href="{{ $myinfo->discord_address }}" target=”_blank”>
                                    <i class="fab fa-discord">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="author-profile">
                        <div class="author-img">
                            <div class="img">
                                <img alt="" src="{{ imageUrl($myinfo->primary_image) }}" />
                            </div>
                        </div>
                        <div class="author-info">
                            <div class="text-center">
                                <span class="main-color sub-title mb-10">
                                    {{ $myinfo->work_area }}
                                </span>
                                <h4 class="fw-500">
                                    سلام ، من {{ $myinfo->name }} هستم
                                </h4>
                            </div>
                            <div class="social mt-20">
                                <a class="icon" href="{{ $myinfo->whatsapp_address }}">
                                    <i class="fab fa-whatsapp">
                                    </i>
                                </a>
                                <a class="icon" href="{{ $myinfo->telegram_address }}">
                                    <i class="fab fa-telegram"></i>
                                    </i>
                                </a>
                                <a class="icon" href="{{ $myinfo->instagram_address }}">
                                    <i class="fab fa-instagram">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="butns mt-30">
                            <a class="inf-butn" href="{{ route('contact.index') }}">
                                <span>
                                    با ما تماس بگیرید
                                </span>
                            </a>
                            <a class="inf-butn" href="#">
                                <span>
                                    دانلود CV
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="content">
                        <h5 class="cd-headline slide">
                            <span>
                                سلام ، من
                            </span>
                            <span class="cd-words-wrapper main-color">
                                <b class="is-visible">
                                    {{ $myinfo->name }}
                                </b>
                                <b>
                                    {{ $myinfo->work_area }}
                                </b>

                            </span>
                            هستم
                        </h5>
                        <h1>
                            {{ $myinfo->about_title }}
                            <span class="bord">
                                {{ $myinfo->work_area }}
                            </span>
                             هستم.
                        </h1>
                        <p class="text">
                            {{ $myinfo->about_description }}
                        </p>
                        <div class="stauts mt-50 pt-50 bord-thin-top">
                            <div class="d-flex align-items-center">
                                <div class="mr-40">
                                    <div class="d-flex align-items-center">
                                        <h2>
                                            {{ convertNumbersToPersian($myinfo->Number_of_projects) }}
                                        </h2>
                                        <p>
                                            کامل
                                            <br />
                                            پروژه
                                        </p>
                                    </div>
                                </div>
                                <div class="mr-40">
                                    <div class="d-flex align-items-center">
                                        <h2>
                                            {{ convertNumbersToPersian($myinfo->Number_of_customers) }}
                                        </h2>
                                        <p>
                                            مشتری
                                            <br />
                                            در سراسر جهان
                                        </p>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="butn-presv">
                                        <a class="butn butn-md butn-bord radius-5 skew" href="{{ route('contact.index') }}">
                                            <span>
                                                من را استخدام کن!
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Hero ==================== -->
</main>
