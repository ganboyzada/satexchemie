@extends('frontend.layouts.master')

@php
    $contact_side = \App\Models\Content::where('type', 'pagecontent')->where('name', 'contact_side')->first();
@endphp

                @section('side')
                <div class="p-fixed before-z-index h-100 left-bar" data-overlay="7" data-dsn-ajax="img">
                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-dsn-src="{{ asset($contact_side->img) }}" alt="">
                </div>

                @endsection

                @section('head')
                <div class="shap-linear w-100"></div>

                <!-- ========== Header Section ========== -->
                <header class="header-pages dsn-container mb-section header-padding-top background-main">
                    <div class="box-title ">
                        <h1 class="title">
                            <span class="letter-stroke">{{ __('main.contact') }}</span> <br>
                            <span class="line-bg-left pl-80">{{ __('main.get_in_touch') }}</span>
                        </h1>
                        <div class="mt-30 d-flex w-100 justify-content-end">
                            @php
                                $about = \App\Models\Content::where('type', 'pagecontent')->where('name', 'haqqimizda')->first();
                            @endphp
                            <p class="border-left pl-20 max-w570">
                                {!! $about->{'value_'.session('locale')} !!}
                            </p>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Section ========== -->

                @endsection

                @section('main')
                    <div class="box-map section-margin">
                        <div class="map-custom p-absolute w-100 h-100" data-dsn-lat="30.0489206"
                            data-dsn-len="31.258553" data-dsn-zoom="14">
                        </div>
                    </div>

                    <div class="dsn-container contact-inner section-margin">
                        <div class="section-title">
                            <!-- <span class="tag-heading background-section color-heading">{{ __('main.get_in_touch') }}</span> -->
                            <h2 class="heading-h2">{{ __('main.get_in_touch') }}</h2>
                        </div>


                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="form-box d-flex flex-column">
                                    
                                    <form id="contact-form" class="form w-100" method="post" action="contact.php"
                                        data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">
                                            <div class="form-group">
                                                <div class="entry-box">
                                                    <label>{{ __('main.form.fullname') }} *</label>
                                                    <input id="form_name" type="text" name="name"
                                                        placeholder="{{ __('main.form.fullname') }}" required="required"
                                                        data-error="name is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="entry-box">
                                                    <label>{{ __('main.form.email') }} *</label>
                                                    <input id="form_email" type="email" name="email"
                                                        placeholder="{{ __('main.form.fullname') }}" required="required"
                                                        data-error="Valid email is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="entry-box">
                                                    <label>{{ __('main.form.message') }}</label>
                                                    <textarea id="form_message" class="form-control" name="message"
                                                        placeholder="{{ __('main.form.message') }}"
                                                        required="required"
                                                        data-error="Please,leave us a message."></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="text-right">
                                                <div class="image-zoom w-auto d-inline-block move-circle"
                                                    data-dsn="parallax">
                                                    <input type="submit" value="Send Message" class="v-light">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="contact-content xs-mt-block d-flex flex-column p-relative background-section style-box h-100">
                                    <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">
                                        {{ __('main.contact') }}</h4>

                                    <div class="content-bottom">
                                        <div class="item">
                                            <h5 class="sm-title-block mb-15">{{ __('main.address') }}</h5>
                                            <p>{{ \App\Models\Content::where('type', 'address')->first()->{'value_'.session('locale')} }}</p>
                                        </div>

                                        <div class="item">
                                            <h5 class="sm-title-block mb-15">{{ __('main.email') }}</h5>
                                            @foreach(\App\Models\Content::where('type', 'email')->get() as $email)
                                            <p><a href="tel:{{ $email->name }}">{{ $email->name }}</a></p>
                                            @endforeach
                                        </div>

                                        <div class="item">
                                            <h5 class="sm-title-block mb-15">{{ __('main.phone') }}</h5>
                                            @foreach(\App\Models\Content::where('type', 'phone')->get() as $phone)
                                            <p><a href="tel:{{ $phone->name }}">{{ $phone->name }}</a></p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection