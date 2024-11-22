<x-main-layout>
    <!-- Start #page-title-->
    <section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{ asset('') }}images/page-titles/10.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="title text-lg-left">
                        <div class="title-sub-heading">
                            <p>Elevate Your Aviation Business</p>
                        </div>
                        <div class="title-heading">
                            <h1>Your Trusted Partner for Flight Support & Ground Handling Excellence!</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-lg-start">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </div>
                    <!-- End .title -->
                </div>
                <!-- End .col-lg-8 -->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title-->

    <section class="about about-4" id="about-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="about-img about-img-left">
                        <div class="about-img-warp bg-overlay">
                            <div class="bg-section">
                                <img class="img-fluid" src="{{ asset('storage/' . $about->image) }}"
                                    alt="{{ $about->title }}" />
                            </div>
                        </div>
                        <div class="counter">
                            <div class="counter-icon"> <i class="flaticon-018-packaging"></i></div>
                            <div class="counter-num"> <span class="counting">100</span>
                                <p>%</p>
                            </div>
                            <div class="counter-name">
                                <h6>Quality & Safety</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-3">
                        <p class="heading-subtitle">About Us</p>
                        <h2 class="heading-title">{{ $about->title }}</h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="block-left">
                                    <p>{!! $about->description !!}</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="block-right">
                                    <div class="detail">
                                        <h6>Safety</h6>
                                    </div>
                                    <div class="detail">
                                        <h6>Quality</h6>
                                    </div>
                                    <div class="detail">
                                        <h6>Innovation</h6>
                                    </div>
                                    <div class="detail">
                                        <h6>Employees</h6>
                                    </div>
                                    <div class="detail">
                                        <h6>Respect</h6>
                                    </div>
                                    <div class="detail">
                                        <h6>Enthusiasm</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="signature-block">
                        <div class="signature-body">
                            <h6>{{ $about->director_name }}</h6>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-6-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="cta cta-3 bg-theme" id="cta-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="heading heading-2 heading-light">
                        <p class="heading-subtitle">Our Company</p>
                        <h2 class="heading-title">Elevate Your Aviation Business</h2>
                    </div>
                </div>
                <!--End .col-lg-5-->
                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="prief-set">
                        <h2 style="font-size: 24px; font-weight: bold; color: #DFBE28; margin-bottom: 10px;">Our Vision
                        </h2>
                        <p>
                            {{ $about->vision }}
                        </p>
                        <h2
                            style="font-size: 24px; font-weight: bold; color: #DFBE28; margin-top: 20px; margin-bottom: 10px;">
                            Our Mission</h2>
                        <p>
                            {{ $about->mission }}
                        </p>
                    </div>
                </div>
                <!--End .col-lg-6-->
            </div>
            <!-- End .row-->
            <div class="action-panels">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="action-panel">
                            <div class="action-panel-img">
                                <div class="bg-section"><img src="{{ asset('') }}images/cta/2.jpg" alt="image" />
                                </div>
                            </div>
                            <div class="action-panel-content">
                                <div class="panel-icon"><i class="flaticon-015-scale"></i></div>
                                <div class="panel-heading">
                                    <h3>Affordable Price, Certified Forwarders</h3>
                                </div><a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="action-panel">
                            <div class="action-panel-img">
                                <div class="bg-section"><img src="{{ asset('') }}images/cta/3.jpg" alt="Image" />
                                </div>
                            </div>
                            <div class="action-panel-content inverted">
                                <div class="panel-icon"><i class="flaticon-017-pallet"></i></div>
                                <div class="panel-heading">
                                    <h3>Affordable Price, Certified Forwarders</h3>
                                </div><a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="cases-clients cases-clients-2 bg-parllax" id="cases-clients-2">
        <div class="cases-standard">
            <div class="container">
                <div class="heading text-center">
                    <p class="heading-subtitle">Explore Recent Works</p>
                    <h2 class="heading-title">featured projects</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3"
                            data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false"
                            data-space="30" data-loop="true" data-speed="3000">
                            @forelse ($services as $service)
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img">
                                            <img src="{{ asset('storage/' . $service->image) }}"
                                                alt="{{ $service->title }}" />
                                        </div>
                                        <!-- End .work-img-->
                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">{{ $service->title }}</a></h4>
                                            </div>
                                            <div class="case-desc">
                                                <p>
                                                    {!! Str::limit($service->description, 50) !!}
                                                </p>
                                            </div>
                                            <div class="case-more">
                                                <a href="{{ route('service.detail', $service->slug) }}">
                                                    <i class="icon-arrow-right"></i> Learn More
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End .work-content-->
                                    </div>
                                </div>
                            @empty
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img">
                                            <img src="{{ asset('') }}images/work/full/1.jpg"
                                                alt="work Item Image" />
                                        </div>
                                        <!-- End .work-img-->
                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="#">No Service</a></h4>
                                            </div>
                                            <div class="case-desc">
                                                <p>
                                                    -
                                                </p>
                                            </div>
                                            <div class="case-more">
                                                <a href="#">
                                                    <i class="icon-arrow-right"></i> Back
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End .work-content-->
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
        </div>
        <div class="clients clients-carousel clients-1 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="heading heading-5 text-center">
                            <p class="heading-subtitle">join us today</p>
                            <h2 class="heading-title">our partners</h2>
                            <p class="heading-desc">Our skilled personnel, utilising the latest communications,
                                tracking and processing software, combined with decades of experience! Through
                                integrated supply chain solutions, Equita drives sustainable competitive advantages to
                                some of Australia's largest companies.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true"
                            data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="3000">
                            <div class="client"><img src="{{ asset('') }}images/clients/1.png" alt="client" />
                            </div>
                            <div class="client"><img src="{{ asset('') }}images/clients/2.png" alt="client" />
                            </div>
                            <div class="client"><img src="{{ asset('') }}images/clients/3.png" alt="client" />
                            </div>
                            <div class="client"><img src="{{ asset('') }}images/clients/4.png" alt="client" />
                            </div>
                            <div class="client"><img src="{{ asset('') }}images/clients/5.png" alt="client" />
                            </div>
                            <div class="client"><img src="{{ asset('') }}images/clients/6.png" alt="client" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .container-->
        </div>
    </section>

    <section class="cta cta-5 bg-overlay" id="cta-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="heading heading-8 heading-light">
                    <p class="heading-subtitle">Excellence and Reliability</p>
                    <h2 class="heading-title">Company Values</h2>
                    <p class="heading-desc">Equita Group is a representative logistics operator providing full range of
                        service in the sphere of customs clearance transportation worldwide.</p>
                    <div class="icon-set icon-set2">
                        <div class="icon-panel"> <i class="icon flaticon-016-payment-terminal"></i><span>transparent
                                pricing</span></div>
                        <div class="icon-panel"> <i class="icon flaticon-014-box-3"></i><span>fast, effecient
                                delivery</span></div>
                        <div class="icon-panel"> <i class="icon flaticon-001-scale-1"></i><span>warehouse
                                storage</span></div>
                    </div>
                    <p class="heading-desc">We pride ourselves on providing the best transport and shipping services
                        available allover the world. Our skilled personnel, utilising the latest communications,
                        tracking and combined with experience through integrated supply chain solutions!</p>
                </div>
            </div>
            <!--End .col-lg-6-->
            <div class="col-12 col-lg-6">
                <div class="video video-1" id="video1">
                    <div class="bg-section"><img src="{{ asset('') }}images/video/4.jpg" alt="background" />
                    </div>
                    <div class="player"><a class="popup-video" href="https://www.youtube.com/watch?v=7e90gBu4pas"> <i
                                class="fas fa-play"></i></a></div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </section>

    <section class="blog blog-grid" id="blog-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">
                        <p class="heading-subtitle">insight and trends</p>
                        <h2 class="heading-title">recent articles</h2>
                        <p class="heading-desc">Follow our latest news and thoughts which focuses exclusively on
                            insight, industry trends, top news headlines.</p>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                @forelse ($blogs as $blog)
                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry-img">
                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" />
                                </a>
                            </div>
                            <!-- End .entry-img-->
                            <!-- End .entry-date-->
                            <div class="entry-content">
                                <div class="entry-title">
                                    <h4>
                                        <a href="{{ route('blog.detail', $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h4>
                                </div>
                                <div class="entry-date">
                                    <span class="month">{{ $blog->created_at->format('M d') }}</span>
                                    <span class="date">{{ $blog->created_at->format('Y') }}</span>
                                </div>
                                <div class="entry-bio">
                                    <p>
                                        {!! Str::limit($blog->description, 50) !!}
                                    </p>
                                </div>
                                <div class="entry-more">
                                    <a href="{{ route('blog.detail', $blog->slug) }}">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- End .entry-content-->
                    </div>
                @empty
                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry-img">
                                <a href="blog-single.html">
                                    <img src="{{ asset('') }}images/blog/grid/1.jpg"
                                        alt="Importers achieve cost savings through the First Sale rule!" />
                                </a>
                            </div>
                            <!-- End .entry-img-->
                            <!-- End .entry-date-->
                            <div class="entry-content">
                                <div class="entry-category">
                                    <a href="javascript:void(0)">cargo</a><a href="javascript:void(0)">insights</a>
                                </div>
                                <div class="entry-title">
                                    <h4>
                                        <a href="blog-single.html">
                                            Importers achieve cost savings through the First Sale rule!
                                        </a>
                                    </h4>
                                </div>
                                <div class="entry-date">
                                    <span class="month">jan 20</span><span class="date">2021</span>
                                </div>
                                <div class="entry-bio">
                                    <p>
                                        The trade war currently ensuing between the nations around the globe, fiercely
                                        with
                                        China, shows no signs of the first set of tariffs levied against solar...
                                    </p>
                                </div>
                                <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                            </div>
                        </div>
                        <!-- End .entry-content-->
                    </div>
                @endforelse
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
</x-main-layout>
