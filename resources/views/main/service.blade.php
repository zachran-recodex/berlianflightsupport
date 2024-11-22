@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $pageSetups['service']->meta_description }}">
    <meta name="keywords" content="{{ $pageSetups['service']->meta_keywords }}">
    <meta name="author" content="Recodex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0c004f">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $pageSetups['service']->meta_title }}</title>
@endsection

<x-main-layout>
    <section class="hero bg-overlay bg-overlay-dark" id="hero">
        <div class="bg-section"><img src="{{ asset('') }}images/sliders/1.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="hero-content">
                        <div class="hero-title">
                            <h1>Individually Assess Each Plan And Offer Optimal Solutions! </h1>
                        </div><a class="btn btn--white" href="javascript:void(0)">Pricing &amp; Plans</a>
                    </div>
                    <!-- End .hero-content-->
                </div>
                <!-- End .col-lg-8 -->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="services" id="services-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text--center">
                        <p class="heading-subtitle">Safe & Reliable Cargo Solutions!</p>
                        <h2 class="heading-title">Managing Logistics For World’s Multinational Companies.</h2>
                    </div>
                </div>
                <!-- End .col-lg-6-->
            </div>
            <!-- End .row-->
            <div class="row">
                @forelse ($services as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-panel">
                            <div class="service-panel-container">
                                <div class="service-img">
                                    <a href="{{ route('service.detail', $service->slug) }}"></a>
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" />
                                </div>
                                <!-- End .work-img-->
                                <div class="service-content">
                                    <div class="service-title">
                                        <h4><a
                                                href="{{ route('service.detail', $service->slug) }}">{{ $service->title }}</a>
                                        </h4>
                                    </div>
                                    <div class="service-desc">
                                        <p>
                                            {!! Str::limit($service->description, 20) !!}
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
    <!--
      ============================
      CTA #1 Section
      ============================
      -->
    <section class="cta bg-overlay bg-overlay-dark2" id="cta-1">
        <div class="bg-section"><img src="{{ asset('') }}images/cta/1.jpg" alt="background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="heading heading-2 heading-light">
                        <p class="heading-subtitle">Dedicated Customer Teams & An Agile Services</p>
                        <h2 class="heading-title">Global Logistics Partner To World’s Famous Brands For Over 25 Years!
                        </h2>
                    </div>
                </div>
                <!--End .col-lg-6-->
                <div class="col-12 col-lg-6">
                    <div class="icon-set">
                        <div class="icon-panel"> <i class="icon flaticon-016-payment-terminal"></i><span>transparent
                                pricing</span></div>
                        <div class="icon-panel"> <i class="icon flaticon-014-box-3"></i><span>fast, effecient
                                delivery</span></div>
                        <div class="icon-panel"> <i class="icon flaticon-001-scale-1"></i><span>warehouse
                                storage</span></div>
                    </div>
                </div>
                <!--End .col-lg-6-->
                <div class="col-12">
                    <div class="contact-panel">
                        <div class="contact-types"> <a class="button quote-btn" href="javascript:void(0)"
                                data-form="quoteFormActive"> <i class="flaticon-020-order"> </i><span>request a
                                    quote</span></a><a class="button track-btn active" href="javascript:void(0)"
                                data-form="trackFormActive"> <i class="flaticon-009-shipping-1"> </i><span>track &amp;
                                    trace</span></a></div>
                        <div class="contact-card">
                            <div class="contact-body trackFormActive">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <form class="contactForm quote-form mb-0" method="post"
                                            action="{{ asset('') }}php/contact.php">
                                            <h5 class="card-heading">personal data</h5>
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-4">
                                                    <input class="form-control" type="text" name="contact-name"
                                                        placeholder="Name" required="" />
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text" name="contact-email"
                                                        placeholder="Email" required="" />
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text" name="contact-phone"
                                                        placeholder="Phone" required="" />
                                                </div>
                                            </div>
                                            <h5 class="card-heading">shipment data</h5>
                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <div class="select-container">
                                                        <select class="form-control">
                                                            <option value="default">freight type</option>
                                                            <option value="AL">freight type 1</option>
                                                            <option value="AK">freight type 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text" name="contact-city"
                                                        placeholder="city of departure" required="" />
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <input class="form-control" type="text"
                                                        name="contact-destination" placeholder="delivery city"
                                                        required="" />
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="select-container">
                                                        <select class="form-control">
                                                            <option value="default">incoterms</option>
                                                            <option value="AL">incoterms 1</option>
                                                            <option value="AK">incoterms 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <input class="form-control" type="text" name="contact-weight"
                                                        placeholder="weight" required="" />
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <input class="form-control" type="text" name="contact-height"
                                                        placeholder="height" required="" />
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <input class="form-control" type="text" name="contact-width"
                                                        placeholder="width" required="" />
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <input class="form-control" type="text" name="contact-length"
                                                        placeholder="length" required="" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-radio-group">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline1" name="customRadioInline1" />
                                                            <label for="customRadioInline1">fragile</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline2" name="customRadioInline1" />
                                                            <label for="customRadioInline2">express delivery</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline3" name="customRadioInline1" />
                                                            <label for="customRadioInline3">insurance</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline4" name="customRadioInline1" />
                                                            <label for="customRadioInline4">packaging</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <input class="btn btn--secondary btn--block" type="submit"
                                                        value="Request A Quote" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact-result"></div>
                                                </div>
                                            </div>
                                        </form>
                                        <form class="contactForm track-form mb-0" method="post"
                                            action="{{ asset('') }}php/contact.php">
                                            <h5 class="card-heading">personal data</h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="select-container">
                                                        <select class="form-control">
                                                            <option value="default">shipment type</option>
                                                            <option value="AL">type 1</option>
                                                            <option value="AK">type 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="card-heading">tracking number</h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea class="form-control" name="contact-tracking-number" cols="30" rows="2"
                                                        placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking." required=""></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-radio-group">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline5" name="customRadioInline2" />
                                                            <label for="customRadioInline5">fragile</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline6" name="customRadioInline2" />
                                                            <label for="customRadioInline6">express delivery</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline7" name="customRadioInline2" />
                                                            <label for="customRadioInline7">insurance</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadioInline8" name="customRadioInline2" />
                                                            <label for="customRadioInline8">packaging</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <input class="btn btn--secondary btn--block" type="submit"
                                                        value="Track &amp; Trace" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="apply-card widget widget-reservation"><img
                                                src="{{ asset('') }}images/contact/1.jpg"
                                                alt="Background Image" />
                                            <div class="widget-content">
                                                <h5>take your carreer to next level</h5>
                                                <p>We pride ourselves on providing the best transport & shipping
                                                    services available all over the world and there is no one comes
                                                    close to us. </p><a class="btn btn--white"
                                                    href="javascript:void(0)"><i class="icon-arrow-right"></i>apply
                                                    now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .contact-body -->
                        </div>
                        <!-- End .contact-card  -->
                    </div>
                </div>
                <!-- .col-lg-6-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Testimonial #1 Section
      ============================
      -->
    <section class="testimonial testimonial-1 bg-gray">
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
                                            <p>James Wane</p>
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
                                            src="{{ asset('') }}images/testimonial/3.jpg"
                                            alt="Testimonial Author" /></div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Equita Logistics International customer service is some of the best we have
                                            ever had with ocean we like to ship as much as possible with you all.</p>
                                        <div class="testimonial-meta">
                                            <h4>James Wane</h4>
                                            <p>James Wane</p>
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
    <!--
      ============================
      Clients #1 Section
      ============================
      -->
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
</x-main-layout>
