@extends('layout.master')

@section('title', 'Portfolio Page')

@section('content')

<main class="pt-80">
    <!-- ==================== Start portfolio ==================== -->
    <section class="portfolio section-padding">
        <div class="container">
            <div class="sec-head mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-portfolio">
                                </span>
                                <h6>
                                    نمونه کارهای من
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery">
                <div class="row">
                    @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 items">
                        <div class="item">
                            <div class="img">
                                <img alt="" src="{{ imageUrl($portfolio->primary_image) }}" />
                                <a class="link" href="{{ route('project.details.index', ['Portfolio' => $portfolio->id]) }}">
                                </a>
                            </div>
                            <div class="cont d-flex align-items-center">
                                <div>
                                    <h6>
                                        {{ $portfolio->title }}
                                    </h6>
                                    <span class="tag">
                                        {{ $portfolio->tag }}
                                    </span>
                                </div>
                                <div class="ml-auto">
                                    <div class="arrow">
                                        <a href="{{ route('project.details.index',['Portfolio' => $portfolio->id]) }}">
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
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End portfolio ==================== -->
</main>

@endsection

