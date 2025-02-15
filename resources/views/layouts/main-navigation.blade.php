<nav class="navbar navbar-expand-lg navbar-light navbar-sticky" id="primary-menu">
    <div class="container">
        <a href="{{ route('home') }}" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
            <img src="{{ asset('images/logo/logo-light.png') }}" alt="Logo" style="width: 80px; height: 100%;">
            <div>
                <p style="margin: 0; font-size: 22px; font-weight: bold; color: #ffffff;">Berlian Flight Support</p>
                <p style="margin: 0; font-size: 14px; color: #dfbe28;">Elevate Your Aviation Business</p>
            </div>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--  Collect the nav links, forms, and other content for toggling  -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}"><span>Home</span></a>
                </li>
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}"><span>About Us</span></a>
                </li>
                <li
                    class="nav-item has-dropdown {{ Route::is('service') || Route::is('service.detail') ? 'active' : '' }}">
                    <a class="dropdown-toggle" href="{{ route('service') }}" data-toggle="dropdown">
                        <span>Services</span>
                    </a>
                    <ul class="dropdown-menu">
                        @forelse ($navServices as $item)
                            <li
                                class="nav-item {{ Route::is('service.detail') && request()->route('slug') === $item->slug ? 'active' : '' }}">
                                <a href="{{ route('service.detail', $item->slug) }}">
                                    <span>{{ $item->title }}</span>
                                </a>
                            </li>
                        @empty
                            <li class="nav-item"><a href="#"><span>No Services</span></a></li>
                        @endforelse
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('gallery') ? 'active' : '' }}">
                    <a href="{{ route('gallery') }}"><span>Gallery</span></a>
                </li>
                <li class="nav-item {{ Route::is('blog') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}"><span>Blog</span></a>
                </li>
                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}"><span>Contact</span></a>
                </li>
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
