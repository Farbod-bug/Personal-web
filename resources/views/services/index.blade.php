@extends('layout.master')

@section('title', 'Services Page')

@section('content')

<main class="pt-80">
    <!-- ==================== Start Services ==================== -->
    <section class="services section-padding">
        <div class="container with-pad">
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-bell">
                                </span>
                                <h6>
                                    خدمات من
                                </h6>
                            </div>
                        </div>
                        <h3>
                            چه خدماتی ارائه می دهم؟
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <div class="cont">
                            <div class="d-flex align-items-center mb-30">
                                <div>
                                    <span class="icon-img-50 mr-40">
                                        <img alt="" src="{{ asset('imgs/serv-img/2.png') }}" />
                                    </span>
                                </div>
                                <div>
                                    <h5 class="fz-20">
                                        {{ $service->title }}
                                    </h5>
                                </div>
                            </div>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==================== End Services ==================== -->
    <!-- ==================== Start Pricing ==================== -->
    <section class="price section-padding pt-0">
        <div class="container with-pad">
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-rocket">
                                </span>
                                <h6>
                                    پلن های خدمات
                                </h6>
                            </div>
                        </div>
                        <h3>
                            قیمت گذاری شگفت انگیز برای پروژه های شما
                        </h3>
                        <p class="mt-15">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-6 mt-4">
                    <div class="item md-mb50">
                        <h6 class="type">
                            {{ $service->title }}
                        </h6>
                        <div class="content d-flex align-items-center">
                            <div class="amount mr-40">
                                <h2 class="main-color">
                                    {{ convertToReadableNumber($service->price) }}
                                </h2>
                                <a class="butn butn-md butn-bord radius-30 text-u text-center mt-30" href="#0">
                                    <span>
                                        ثبت درخواست
                                    </span>
                                </a>
                            </div>
                            <div class="feat">
                                <ul class="rest">
                                    @foreach ($service->descriptions as $description)
                                    <li>
                                        <i class="fas fa-check">
                                        </i>
                                        <span>
                                            {{ $description->description }}
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==================== End Pricing ==================== -->
</main>

@endsection

