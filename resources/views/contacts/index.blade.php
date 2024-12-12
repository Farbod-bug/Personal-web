@extends('layout.master')

@section('title', 'Contatc us Page')

@section('content')

<main class="pt-80">
    <!-- ==================== Start Contact ==================== -->
    <section class="contact section-padding">
        <div class="container">
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-map-marker">
                                </span>
                                <h6>
                                    با ما تماس بگیرید
                                </h6>
                            </div>
                        </div>
                        <h3>
                            بیایید در تماس باشیم!
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                {{-- <div class="col-lg-12">
                    <div class="google-map mb-80">
                        <iframe id="gmap_canvas"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12950.331018037285!2d51.31934880689841!3d35.761058923152206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dfd420e8e1b11%3A0x4306cde5c02091c7!2sPunak%2C%20District%202%2C%20Tehran%2C%20Tehran%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1729012944298!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> --}}
                <div class="col-lg-5 valign">
                    <div class="info full-width md-mb80">
                        <div class="item mb-30 d-flex align-items-center">
                            <div class="mr-15">
                                <span class="icon fz-40 main-color pe-7s-call">
                                </span>
                            </div>
                            <div class="mr-10">
                                <h6 class="opacity-7">
                                    تلفن
                                </h6>
                            </div>
                            <div class="ml-auto">
                                <h4>
                                    {{ convertNumbersToPersian($myinfo->cellphone) }}
                                </h4>
                            </div>
                        </div>
                        <div class="item mb-30 d-flex align-items-center">
                            <div class="mr-15">
                                <span class="icon fz-40 main-color pe-7s-mail">
                                </span>
                            </div>
                            <div class="mr-10">
                                <h6 class="opacity-7">
                                    ایمیل
                                </h6>
                            </div>
                            <div class="ml-auto">
                                <h4>
                                    <a href="mailto:{{ $myinfo->email }}">
                                        {{ $myinfo->email }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                        {{-- <div class="item d-flex align-items-center">
                            <div class="mr-15">
                                <span class="icon fz-40 main-color pe-7s-map-marker">
                                </span>
                            </div>
                            <div class="mr-10">
                                <h6 class="opacity-7">
                                    آدرس
                                </h6>
                            </div>
                            <div class="ml-auto">
                                <h4>
                                    ایران ، تهران
                                </h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="full-width">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="messages">
                            </div>
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label>
                                            نام شما
                                        </label>
                                        <input id="form_name" name="name" required="required" type="text" value="{{ old('name') }}"/>
                                        <div class="form-text text-danger">@error('name') {{ $message }} @enderror</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label>
                                            عنوان پیام
                                        </label>
                                        <input id="form_title" name="title" required="required" type="text" value="{{ old('title') }}"/>
                                        <div class="form-text text-danger">@error('title') {{ $message }} @enderror</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label>
                                            شماره تماس شما
                                        </label>
                                        <input id="form_cellphone" name="cellphone" required="required" type="text" value="{{ old('cellphone') }}"/>
                                        <div class="form-text text-danger">@error('cellphone') {{ $message }} @enderror</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label>
                                            ایمیل شما
                                        </label>
                                        <input id="form_email" name="email" required="required" type="email" value="{{ old('email') }}"/>
                                        <div class="form-text text-danger">@error('email') {{ $message }} @enderror</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>
                                            پیام شما
                                        </label>
                                        <textarea id="form_message" name="message" required="required">{{ old('message') }}</textarea>
                                        <div class="form-text text-danger">@error('message') {{ $message }} @enderror</div>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit">
                                            <span class="text">
                                                ارسال پیام
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Contact ==================== -->
</main>

@endsection

