@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $pageSetups['home']->meta_description }}">
    <meta name="keywords" content="{{ $pageSetups['home']->meta_keywords }}">
    <meta name="author" content="Recodex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0c004f">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $pageSetups['home']->meta_title }}</title>
@endsection

<x-main-layout>
    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pr-0 pl-0">
            <div class="carousel owl-carousel custom-carousel carousel-navs carousel-dots" data-slide="1"
                data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true"
                data-speed="800" data-slider-id="#custom-carousel">
                @forelse ($heroSections as $heroSection)
                    <!--  Start .slide-->
                    <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                        <div class="bg-section">
                            <img src="{{ asset('storage/' . $heroSection->image) }}" alt="{{ $heroSection->title }}" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <!-- Subtitle -->
                                        <p class="slide-subheadline">{{ $heroSection->subtitle }}</p>

                                        <!-- Title -->
                                        <h2 class="slide-headline">{!! nl2br(e($heroSection->title)) !!}</h2>

                                        <!-- Description -->
                                        <p class="slide-desc">{{ $heroSection->description }}</p>

                                        <!-- Buttons -->
                                        <div class="slide-buttons">
                                            <a class="btn btn--gold" href="{{ route('about') }}">Company Profile</a>
                                            <a class="btn btn--primary" href="{{ route('contact') }}">Contact Us</a>
                                        </div>
                                    </div>
                                    <!-- End .slide-content -->
                                </div>
                            </div>
                            <!--  End .row-->
                        </div>
                    </div>
                    <!-- End .slide-->
                @empty
                    <!-- Pesan jika tidak ada data -->
                    <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="slide-content">
                                        <h2 class="slide-headline text-white">No Hero Sections Available</h2>
                                        <p class="slide-desc text-white">Please add some Hero Sections to display here.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--  End .row-->
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        <!--  End .container-fluid-->
    </section>

    <section class="company-data" id="company-data-1">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-lg-3">
                    <div class="data">
                        <div class="data-icon"><i class="flaticon-034-call-center"></i></div>
                        <div class="data-body">
                            <h6>quick contact </h6><a
                                href="mailto::ops@berlianflightsupport.com">ops@berlianflightsupport.com</a><a
                                href="tel:01061245741">(002) 01061245741</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="data">
                        <div class="data-icon"><i class="flaticon-036-address-book"></i></div>
                        <div class="data-body">
                            <h6>our location</h6>
                            <a href="javascript:void(0)">
                                Graha Dirgantara, Jl. Raya Protokol Halim Perdanakusuma No.8
                                2nd Floor Unit H
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="panels-container">
                        <div class="panel-action">
                            <div class="panel-content">
                                <div class="panel-icon"><i class="flaticon-035-plane"></i></div>
                                <div class="panel-heading">
                                    <h6>Quality</h6>
                                </div>
                            </div>
                        </div>
                        <div class="panel-action">
                            <div class="panel-content">
                                <div class="panel-icon"><i class="flaticon-017-pallet"></i></div>
                                <div class="panel-heading">
                                    <h6>Safety</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="about about-2" id="about-2">
        <div class="container">
            <div class="row">
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
                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-warp bg-overlay">
                            <div class="bg-section">
                                <img class="img-fluid" src="{{ asset('storage/' . $about->image) }}"
                                    alt="{{ $about->title }}" />
                            </div>
                        </div>
                        <div class="counter">
                            <div class="counter-icon"> <i class="flaticon-035-plane"></i></div>
                            <div class="counter-num"> <span>100</span>
                                <p>%</p>
                            </div>
                            <div class="counter-name">
                                <h6>Quality & Safety</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="services services-2 bg-gray" id="services-2">
        <div class="bg-section"><img src="{{ asset('images/background/map-pattern.png') }}" alt="map-img" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text--center">
                        <p class="heading-subtitle">Our Services</p>
                        <h2 class="heading-title">Providing Comprehensive Flight & Ground Support Solutions.</h2>
                    </div>
                </div>
                <!-- End .col-lg-6-->
            </div>
            <!-- End .row-->
            <div class="row services-container">
                @forelse ($services as $service)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="service-panel">
                            <div class="service-panel-container">
                                <div class="service-img">
                                    <a href="{{ route('service.detail', $service->slug) }}"></a>
                                    <img src="{{ asset('storage/' . $service->image) }}"
                                        alt="{{ $service->title }}" />
                                </div>
                                <!-- End .work-img-->
                                <div class="service-content">
                                    <div class="service-title">
                                        <h4>
                                            <a href="{{ route('service.detail', $service->slug) }}">
                                                {{ $service->title }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="service-desc">
                                        <p>
                                            {!! Str::limit($service->description, 50) !!}
                                        </p>
                                    </div>
                                    <div class="service-more">
                                        <a class="btn" href="{{ route('service.detail', $service->slug) }}">
                                            <i class="icon-arrow-right"></i>
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End .work-content -->
                            </div>
                            <!-- End .work-item-container-->
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <p class="text-gray-500">No services available at the moment.</p>
                            <a href="{{ route('home') }}" class="btn btn-primary">
                                <i class="icon-home"></i>
                                <span>Go Back to Home</span>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="cta cta-2 cta-4 bg-overlay bg-overlay-theme" id="cta-4">
        <div class="bg-section"><img src="{{ asset('images/cta/1.jpg') }}" alt="background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="heading heading-2 heading-light">
                        <p class="heading-subtitle">Know Who We Are</p>
                        <h2 class="heading-title">Complete Flight Support Solutions</h2>
                    </div>
                </div>
                <!--End .col-lg-6-->
                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="prief-set prief-set-2">
                        <p>We pride ourselves on providing the best transport and shipping services available allover
                            the world. Our skilled personnal and processing software, combined with decades of
                            experience! Through integrated supply chain solutions, Equita drives sustainable competitive
                            advantages to some of Australia's largest companies.</p>
                        <ul class="advantages-list">
                            @forelse ($services as $service)
                                <li><i class="fas fa-check-circle"></i> {{ $service->title }}</li>
                            @empty
                                <li><i class="fas fa-check-circle"></i> No Services</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <!--End .col-lg-6-->
                <div class="col-12">
                    <div class="contact-panel contact-panel-2">
                        <div class="contact-types">
                            <a class="button quote-btn" href="javascript:void(0)" data-form="quoteFormActive">
                                <i class="flaticon-020-order"></i>
                                <span>Request A Quote</span>
                            </a>
                            <a class="button track-btn active" href="javascript:void(0)" data-form="trackFormActive">
                                <i class="flaticon-009-shipping-1"> </i>
                                <span>Contact Us</span>
                            </a>
                        </div>
                        <div class="contact-card">
                            <div class="contact-body trackFormActive">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <form class="contactForm quote-form mb-0" method="POST"
                                            action="{{ route('home.quote.store') }}">
                                            @csrf
                                            <h5 class="card-heading">Personal Data</h5>
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-4">
                                                    <input class="form-control" type="text" name="name"
                                                        id="name" placeholder="Name" required>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="email" name="email"
                                                        id="email" placeholder="Email" required>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text" name="phone"
                                                        id="phone" placeholder="Phone" required>
                                                </div>
                                            </div>
                                            <h5 class="card-heading">Send Message</h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="2" placeholder="Message"
                                                        required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="card-heading">Select a Service</h6>
                                                    <div class="custom-radio-group">
                                                        @foreach ($services as $service)
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input class="custom-control-input" type="radio"
                                                                    id="service{{ $service->id }}" name="service_id"
                                                                    value="{{ $service->id }}" required>
                                                                <label
                                                                    for="service{{ $service->id }}">{{ $service->title }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn--secondary btn--block"
                                                        type="submit">Request A Quote</button>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="contactForm track-form mb-0" method="POST"
                                            action="{{ route('home.contact.store') }}">
                                            @csrf
                                            <h5 class="card-heading">personal data</h5>
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-4">
                                                    <input class="form-control" type="text" name="name"
                                                        id="name" placeholder="Name">
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text" name="phone"
                                                        id="phone" placeholder="Phone">
                                                </div>
                                            </div>
                                            <h5 class="card-heading">Send Message</h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="2" placeholder="message"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn--secondary btn--block" type="submit">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="apply-card widget widget-reservation"><img
                                                src="{{ asset('') }}images/contact/1.jpg" alt="image" />
                                            <div class="widget-content">
                                                <h5>Our Vision</h5>
                                                <p>
                                                    {{ $about->vision }}
                                                </p>
                                                <a class="btn btn--white" href="{{ route('service') }}">
                                                    <i class="icon-arrow-right"></i>
                                                    Learn More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .contact-body -->
                        </div>
                    </div>
                    <!-- End .contact-panel-->
                </div>
                <!-- End .col-lg-6-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="testimonial testimonial-1 testimonial-2 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel owl-carousel carousel-dots" data-slide="2" data-slide-rs="1"
                        data-autoplay="false" data-nav="false" data-dots="false" data-space="40" data-loop="true"
                        data-speed="800">
                        <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-img"><img
                                            src="{{ asset('') }}images/testimonial/3.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>John R Peter</h4>
                                            <p>movein</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-img"><img
                                            src="{{ asset('') }}images/testimonial/4.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>James Wane</h4>
                                            <p>Aleko Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-img"><img
                                            src="{{ asset('') }}images/testimonial/3.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>Marko Smith</h4>
                                            <p>Aify Agency</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-img"><img
                                            src="{{ asset('') }}images/testimonial/4.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>Marko Smith</h4>
                                            <p>movein</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-img"><img
                                            src="{{ asset('') }}images/testimonial/3.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>Marko Smith</h4>
                                            <p>Aleko Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-img"><img
                                            src="{{ asset('') }}images/testimonial/4.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>Marko Smith</h4>
                                            <p>Aify Agency</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <hr />

    <section class="clients clients-carousel clients-1 bg-gray" id="clients-1">
        <div class="container">
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
    </section>

    <section class="cta cta-5 bg-overlay" id="cta-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="heading heading-8 heading-light">
                    <p class="heading-subtitle">About Us</p>
                    <h2 class="heading-title">Our Excellence Portfolio</h2>
                    <p class="heading-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sunt amet hic, illum placeat
                        aut, consequuntur dolore laboriosam quam commodi suscipit illo quo. Expedita alias fuga,
                        repellat sunt ipsa corporis.
                    </p>
                    <div class="icon-set icon-set2">
                        <div class="icon-panel">
                            <i class="icon flaticon-016-payment-terminal"></i>
                            <span>AD-HOC</span>
                        </div>
                        <div class="icon-panel">
                            <i class="icon flaticon-014-box-3"></i>
                            <span>Corporate</span>
                        </div>
                    </div>
                    <p class="heading-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eveniet perferendis laudantium
                        at veniam possimus, facilis distinctio velit rem voluptate dignissimos eos vel inventore culpa
                        aspernatur eius! Accusantium, dignissimos eligendi!
                    </p>
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
                        <p class="heading-subtitle">Aviation</p>
                        <h2 class="heading-title">recent Blogs</h2>
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
