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

    <title>{{ $pageSetups['blog']->meta_title }}</title>
@endsection

<x-main-layout>
    <!-- Start #page-title-->
    <section class="page-title bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{ asset('') }}images/page-titles/2.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="title text-lg-left">
                        <div class="title-heading">
                            <h1>our blog</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-lg-start">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

    <section class="blog blog-grid pb-90" id="blog">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                    <div class=" col-sm-6 col-md-6 col-lg-4">
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
                    <div class=" col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry-img"><a href="blog-single.html"><img
                                        src="{{ asset('') }}images/blog/grid/1.jpg"
                                        alt="Importers achieve cost savings through the First Sale rule!" /></a></div>
                            <!-- End .entry-img-->
                            <!-- End .entry-date-->
                            <div class="entry-content">
                                <div class="entry-category"><a href="javascript:void(0)">cargo</a><a
                                        href="javascript:void(0)">insights</a>
                                </div>
                                <div class="entry-title">
                                    <h4><a href="blog-single.html">Importers achieve cost savings through the First Sale
                                            rule!</a></h4>
                                </div>
                                <div class="entry-date"><span class="month">jan 20</span><span
                                        class="date">2021</span>
                                </div>
                                <div class="entry-bio">
                                    <p>The trade war currently ensuing between the nations around the globe, fiercely
                                        with
                                        China, shows no signs of the first set of tariffs levied against solar...</p>
                                </div>
                                <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                            </div>
                        </div>
                        <!-- End .entry-content-->
                    </div>
                @endforelse
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 clearfix text--center">
                    <ul class="pagination">
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)" aria-label="Next"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- End .col-lg-12-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
</x-main-layout>
