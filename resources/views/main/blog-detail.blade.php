@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $pageSetups['blog']->meta_description }}">
    <meta name="keywords" content="{{ $pageSetups['blog']->meta_keywords }}">
    <meta name="author" content="Recodex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0c004f">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $blog->title }} | Berlian Ground Support</title>
@endsection

<x-main-layout>
    <!-- Start #page-title-->
    <section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="title text-center">
                        <ol class="breadcrumb d-flex">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}">blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $blog->title }}
                            </li>
                        </ol>
                        <div class="title-heading">
                            <h1>{{ $blog->title }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- End .title -->
                </div>
                <!-- End .col-lg-8 -->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

    <section class="blog blog-single blog-standard" id="blog">
        <div class="container">
            <div class="row">
                <!--
            ============================
            Sidebar Area
            ============================
            -->
                <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
                    <div class="sidebar sidebar-blog">
                        <!-- Recent Posts-->
                        <div class="widget widget-recent-posts">
                            <div class="widget-title">
                                <h5>recent posts</h5>
                            </div>
                            <div class="widget-content">
                                <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-rs="1"
                                    data-autoplay="true" data-nav="false" data-dots="true" data-space="0"
                                    data-loop="true" data-speed="800">
                                    @forelse ($blogs as $item)
                                        <div class="entry">
                                            <div class="entry-img">
                                                <a href="{{ route('blog.detail', $item->slug) }}">
                                                    <img src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->title }}" />
                                                </a>
                                            </div>
                                            <div class="entry-desc">
                                                <div class="entry-title">
                                                    <a href="{{ route('blog.detail', $item->slug) }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="entry">
                                            <div class="entry-img"><a href="javascript:void(0)"><img
                                                        src="assets/images/blog/sidebar/post-1.jpg"
                                                        alt="title" /></a>
                                            </div>
                                            <div class="entry-desc">
                                                <div class="entry-meta"><a href="javascript:void(0)">warhouse</a><a
                                                        href="javascript:void(0)">construction</a></div>
                                                <div class="entry-title"><a href="blog-single.html">Cargo flow through
                                                        better supply chain visibility</a></div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- .widget-recent-posts end-->
                        <!-- Categories-->
                        <div class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Our Services</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    @foreach ($services as $service)
                                        <li>
                                            <a href="{{ route('service.detail', $service->slug) }}">
                                                {{ $service->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <!-- Blog Entry-->
                    <div class="blog-entry">
                        <div class="entry-meta-container">
                            <div class="entry-author"><span>by: <i>{{ $blog->author }}</i></span></div>
                            <div class="entry-date">
                                <span class="month">{{ $blog->created_at->format('M d') }}</span>
                                <span class="date">{{ $blog->created_at->format('Y') }}</span>
                            </div>
                        </div>
                        <!-- .entry-meta-container end-->
                        <div class="entry-content clearfix">
                            <div class="entry-bio">
                                <p>{!! $blog->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .blog-entry-->
            </div>
            <!-- End .col-lg-8-->
        </div>
        <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
</x-main-layout>
