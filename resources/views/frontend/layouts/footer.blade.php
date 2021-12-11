<!-- ========== Footer ========== -->
<footer class="footer border-top">
    <div class="dsn-container">
        <div class="d-grid grid-sm-2">
            <div class="footer-item">
                <a href="/" class="logo-footer m-auto">
                    <img src="{{ asset('img/satex_logo_new_c.png') }}" alt="" class="logo-dark cover-bg-img">
                    <img src="{{ asset('img/satex_logo_new_w.png') }}" alt="" class="logo-light cover-bg-img">
                </a>
            </div>

            <div class="footer-item text-right">
                <h5 class="sm-title-block mb-10">{{ __('main.follow_us') }}</h5>
                <ul class="box-social">
                    @foreach(\App\Models\Content::where('type','social')->get() as $social)
                    <li data-dsn="parallax">
                        <a href="{{ $social->link }}">
                            <i data-feather="{{ $social->name }}"></i>Salam
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="footer-bottom d-grid grid-md-2 border-top pt-30 mt-30">
            <div class="footer-item order-md-2">
                <div class="nav-footer text-right">
                    <ul>
                        <li class="d-inline-block over-hidden"><a class="link-hover"
                                data-dsn="parallax" href="/">{{ __('main.home') }}</a>
                        </li>
                        <li class="d-inline-block over-hidden"><a class="link-hover"
                                data-dsn="parallax" href="/products">{{ __('main.products') }}</a>
                        </li>
                        <li class="d-inline-block over-hidden"><a class="link-hover"
                                data-dsn="parallax" href="/about">{{ __('main.about_us') }}</a>
                        </li>
                        <li class="d-inline-block over-hidden"><a class="link-hover"
                                data-dsn="parallax" href="/contact">{{ __('main.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-item">
                <div class="copyright">
                    <div class="copright-text over-hidden">{{ __('main.copyright') }}</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ========== End Footer ========== -->