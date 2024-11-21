<nav class="navbar navbar-expand-lg navbar-light navbar-sticky" id="primary-menu">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo logo-light" src="{{ asset('') }}images/logo/logo-light.png" alt="Equita Logo" />
            <img class="logo logo-dark" src="{{ asset('') }}images/logo/logo-dark.png" alt="Equita Logo" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <!--  Collect the nav links, forms, and other content for toggling  -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}"><span>Home</span></a></li>
                <li class="nav-item"><a href="{{ route('about') }}"><span>About Us</span></a></li>
                <li class="nav-item has-dropdown"><a class="dropdown-toggle" href="#"
                        data-toggle="dropdown"><span>Services</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="{{ route('about') }}"><span>about us</span></a></li>
                        <li class="nav-item"><a href="page-core.html"><span>core values</span></a></li>
                        <li class="nav-item"><a href="page-team.html"><span>leadership team</span></a></li>
                        <li class="nav-item"><a href="page-locations.html"><span>global locations</span></a>
                        </li>
                        <li class="nav-item"><a href="page-gallery.html"><span>our gallery</span></a></li>
                        <li class="nav-item"><a href="page-awards.html"><span>awards &amp;
                                    recognition</span></a></li>
                        <li class="nav-item"><a href="page-careers.html"><span>careers</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('blog') }}"><span>Blog</span></a></li>
                <li class="nav-item"><a href="{{ route('contact') }}"><span>contact</span></a></li>
            </ul>
            <div class="module-container">
                <!-- Start .module-contact-->
                <div class="module-contact"><a class="btn btn--primary" href="{{ route('quote') }}">request
                        a quote</a>
                </div>
            </div>
            <!-- End .module-container -->
        </div>
        <!--  End .navbar-collapse  -->
    </div>
    <!-- End .container-->
</nav>
