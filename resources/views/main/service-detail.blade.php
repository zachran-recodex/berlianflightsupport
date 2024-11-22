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

    <title>{{ $service->title }} | Berlian Ground Support</title>
@endsection

<x-main-layout>
    <!-- Start #page-title-->
    <section class="page-title page-title-3 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section">
            <img src=""{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="title text-center">
                        <div class="title-heading">
                            <h1>{{ $service->title }}</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('service') }}">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
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

    <section class="service-single case-study case-study-2 pb-70" id="service-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
                    <div class="sidebar sidebar-case-study">
                        <!-- Start .widget-categories-->
                        <div class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Other Services</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    @foreach ($services as $item)
                                        <li>
                                            <a href="{{ route('service.detail', $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End .widget-categories -->
                        <!-- Start .widget-reservation-->
                        <div class="widget widget-reservation"><img src="assets/images/blog/sidebar/reservation.jpg"
                                alt="Background Image" />
                            <div class="widget-content">
                                <h5>Dedicated Customer Teams & Agile Services</h5>
                                <p>Our worldwide presence ensures the timeliness, cost efficiency compliance adherence
                                    required to ensure your production timelines are met.</p><a
                                    class="btn btn--transparent btn--inverse btn--block"
                                    href="javascript:void(0)">Schedule An Appointment</a>
                            </div>
                        </div>
                        <!-- End .widget-reservation-->
                        <!-- Start .widget-download-->
                        <div class="widget widget-download">
                            <div class="widget-title">
                                <h5>download</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"> <span>company report 2019</span><span
                                                class="icon">pdf</span></a></li>
                                    <li><a href="javascript:void(0)"> <span>company brochure</span><span
                                                class="icon">pdf</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .widget-download-->
                    </div>
                </div>
                <!-- End .col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <!-- Start .case-study-entry-->
                    <div class="case-study-entry">
                        <div class="entry-content">
                            <div class="entry-bio">
                                <h5>overview</h5>
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End .case-study-entry-->
                </div>
                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
</x-main-layout>
