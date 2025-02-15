<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @yield('meta_tag')

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />

    <!-- Stylesheets -->
    <link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

</head>

<body>

    <div class="preloader">
        <div class="loader-spinner">
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
        <!-- Start .header-1-->
        <header class="header header-1 header-light header-tab" id="navbar-spy">
            <div class="tab">
                <p> <span>Need Help : </span>providing Innovative and Sustainable Solutions, Call (002) 01061245741</p>
            </div>
            @include('layouts.main-navigation')
        </header>

        {{ $slot }}

        <footer class="footer footer-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 col-xl-4">
                            <div class="footer-logo">
                                <img class="footer-logo" src="{{ asset('') }}images/logo/logo-light.png"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-xl-8">
                            <div class="widget-newsletter">
                                <div class="widget-content">
                                    <p>Subscribe for industry alerts, insights from Us.</p>
                                    <form class="form-newsletter mailchimp">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Your Email Address" />
                                        <input class="btn btn--primary" type="submit" value="Subscribe" />
                                        <div class="subscribe-alert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-about">
                            <div class="footer-widget-title">
                                <h5>Contact Us</h5>
                            </div>
                            <div class="widget-content">
                                <p>
                                    We look forward to working with you
                                </p>
                                <!-- Start .module-social-->
                                <div class="module module-social">
                                    <a class="share-facebook" href="javascript:void(0)">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="share-instagram" href="javascript:void(0)">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="share-twitter" href="javascript:void(0)">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <!-- End .module-social-->
                            </div>
                        </div>
                        <!--  End .col-lg-4 -->
                        <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-2 footer-widget widget-links">
                            <div class="footer-widget-title">
                                <h5>services</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    @forelse ($navServices as $item)
                                        <li>
                                            <a href="{{ route('service.detail', $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        @empty
                                        <li><a href="#">No Services</a></li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <!--  End .col-lg-2-->
                        <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                            <div class="footer-widget-title">
                                <h5>industries</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="javascript:void(0)">retail & consumer</a></li>
                                    <li><a href="javascript:void(0)">sciences & healthcare</a></li>
                                    <li><a href="javascript:void(0)">industrial & chemical</a></li>
                                    <li><a href="javascript:void(0)">power generation</a></li>
                                    <li><a href="javascript:void(0)">food & peverage</a></li>
                                    <li><a href="javascript:void(0)">oil & gas</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--  End .col-lg-2-->
                        <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-contact">
                            <div class="footer-widget-title">
                                <h5>quick contact</h5>
                            </div>
                            <div class="widget-content">
                                <p>If you have any questions or need help, feel free to contact with our team.</p>
                                <ul>
                                    <li class="phone"><a href="tel:+01061245741"><i class="fas fa-phone-alt"></i>
                                            01061245741</a></li>
                                    <li class="address"><a href="javascript:void(0)">2307 Beverley Rd Brooklyn, New
                                            York 11226 United States.</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--  End .col-lg-2-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--  End .container-->
            </div>
            <!--  End .footer-center-->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-12 col-md-12 text--center footer-copyright">
                        <div class="copyright">
                            <span>&copy; Berlian Ground Support, With Love by</span>
                            <a href="https://recodex.id"
                                style="color: #86C332; text-decoration: none; transition: color 0.3s;"
                                onmouseover="this.style.color='#496e1d';" onmouseout="this.style.color='#86C332';">
                                Recodex
                            </a>
                        </div>
                    </div>
                </div>
                <!--  End .row-->
            </div>
            <!--  End .footer-bottom-->
        </footer>
        <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
    </div>

    <!-- Footer Scripts -->
    <script src="{{ asset('') }}js/vendor/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('') }}js/vendor.min.js"></script>
    <script src="{{ asset('') }}js/functions.js"></script>
</body>

</html>
