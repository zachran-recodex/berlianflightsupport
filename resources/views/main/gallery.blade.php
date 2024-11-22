@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $pageSetups['gallery']->meta_description }}">
    <meta name="keywords" content="{{ $pageSetups['gallery']->meta_keywords }}">
    <meta name="author" content="Recodex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0c004f">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $pageSetups['gallery']->meta_title }}</title>
@endsection

<x-main-layout>
    <!-- Start #page-title-->
    <section class="page-title page-title-8 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{ asset('') }}images/page-titles/13.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="title">
                        <div class="title-heading">
                            <h1>our gallery</h1>
                        </div>
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

    <section class="work work-gallery">
        <div class="container">
            <div class="row">
                @forelse ($galleries as $gallery)
                    <div class="col-12 col-md-6 col-lg-4 work-item ">
                        <div class="work-item-container">
                            <div class="work-img">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery" />
                                <div class="work-hover">
                                    <div class="work-action">
                                        <div class="work-zoom">
                                            <a class="img-gallery-item" href="{{ asset('storage/' . $gallery->image) }}"
                                                title="Gallery"></a>
                                        </div>
                                    </div>
                                    <!-- End .work-action -->
                                </div>
                                <!-- End .work-hover-->
                            </div>
                            <!-- End .work-img-->
                        </div>
                        <!-- End .work-item-container-->
                    </div>
                @empty
                    <div class="col-12 col-md-6 col-lg-4 work-item ">
                        <div class="work-item-container">
                            <div class="work-img"><img src="{{ asset('') }}images/work/grid/1.jpg"
                                    alt="undefined item" />
                                <div class="work-hover">
                                    <div class="work-action">
                                        <div class="work-zoom"><a class="img-gallery-item"
                                                href="{{ asset('') }}images/work/full/1.jpg"
                                                title="undefined item"></a>
                                        </div>
                                    </div>
                                    <!-- End .work-action -->
                                </div>
                                <!-- End .work-hover-->
                            </div>
                            <!-- End .work-img-->
                        </div>
                        <!-- End .work-item-container-->
                    </div>
                @endforelse
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12 text-center"><a class="btn btn--primary" id="loadMore"
                        href="javascript:void(0)">Load More</a></div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
</x-main-layout>
