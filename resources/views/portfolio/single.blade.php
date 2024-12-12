@extends('layout.master')

@section('title', 'Project Page')

@section('content')

<main>
    <!-- ==================== Start project ==================== -->
    <section class="project section-padding radius-15">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="cont md-mb50">
                                <h3 class="mb-15 mt-15 fw-500">
                                    {{ $Portfolio->title }}
                                </h3>
                                <div class="mt-30">
                                    <p>
                                        {{ $Portfolio->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div id="sticky_item">
                                <div class="info">
                                    <ul>
                                        <li class="mb-30">
                                            <span class="sub-title">
                                                <i class="far fa-calendar-alt mr-10">
                                                </i>
                                                تاریخ:
                                            </span>
                                            <p>
                                                {{ convertNumbersToPersian(getJalaliDate($Portfolio->date)) }}
                                            </p>
                                        </li>
                                        <li class="mb-30">
                                            <span class="sub-title">
                                                <i class="fas fa-list-ul mr-10">
                                                </i>
                                                دسته بندی ها:
                                            </span>
                                            <p>
                                                {{ $Portfolio->category }}
                                            </p>
                                        </li>
                                        <li class="mb-30">
                                            <span class="sub-title">
                                                <i class="far fa-user mr-10">
                                                </i>
                                                مشتری:
                                            </span>
                                            <p>
                                                {{ $Portfolio->customer !== null ? $Portfolio->customer : 'فروخته نشده' }}
                                            </p>
                                        </li>
                                        <li>
                                            <span class="sub-title">
                                                <i class="fas fa-globe mr-10">
                                                </i>
                                                وب سایت:
                                            </span>
                                            <p>
                                                {{ $Portfolio->web_address !== null ? $Portfolio->web_address : 'فروخته نشده' }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imgs mt-80">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row md-marg">
                            @foreach ($Portfolio->images as $image)
                            <div class="col-md-6">
                                <div class="img sm-mb30">
                                    <img alt="" src="{{ imageUrl($image->name) }}" />
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="next-prev">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center mt-80 pt-80 bord-thin-top">
                            <div class="prev">
                                <h6 class="sub-title">
                                    <a href="#">
                                        <i class="fas fa-long-arrow-alt-right">
                                        </i>
                                        پروژه قبلی
                                    </a>
                                </h6>
                            </div>
                            <div class="next ml-auto">
                                <h6 class="sub-title">
                                    <a href="#">
                                        پروژه بعدی
                                        <i class="fas fa-long-arrow-alt-left">
                                        </i>
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- ==================== End project ==================== -->
</main>

@endsection

