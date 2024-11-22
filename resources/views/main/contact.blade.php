@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $pageSetups['contact']->meta_description }}">
    <meta name="keywords" content="{{ $pageSetups['contact']->meta_keywords }}">
    <meta name="author" content="Recodex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0c004f">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $pageSetups['contact']->meta_title }}</title>
@endsection

<x-main-layout>
    <section class="map map-2">
        <iframe class="map-gray"
            src="https://maps.google.com/maps?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
            width="600" height="450" style="border:0;"></iframe>
    </section>

    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="contact-details">
                                <h6>contact details</h6>
                                <ul class="list-unstyled info">
                                    <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">New York
                                            11226 United States.</a></li>
                                    <li><span class="fas fa-envelope"></span><a
                                            href="mailto::Equita@7oroof.com">Equita@7oroof.com</a></li>
                                    <li><span class="fas fa-phone-alt"></span><a href="tel:01061245741">(002)
                                            01061245741</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="opening-hours">
                                <h6>opening hours</h6>
                                <ul class="list-unstyled">
                                    <li> <span>Monday-friday</span><span>10:00 - 18:00</span></li>
                                    <li> <span>saturday</span><span>10:00 - 14:00</span></li>
                                    <li> <span>sunday</span><span>closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data"
                        class="contactForm">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <input class="form-control" type="text" name="name" id="name"
                                    placeholder="name">
                            </div>
                            <div class="col-12 col-lg-4">
                                <input class="form-control" type="email" name="email" id="email"
                                    placeholder="email">
                            </div>
                            <div class="col-12 col-lg-4">
                                <input class="form-control" type="tel" name="phone" id="phone"
                                    placeholder="phone">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="2" placeholder="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn--primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
</x-main-layout>
