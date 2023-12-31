<style>
    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>
<nav class="sidebar sidebar-offcanvas fixed-nav" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-name">
                    <p class="name">
                        Welcome Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="{{ request()->is('dashboard*') ? 'nav-item active' : 'nav-item' }}">
            <a class="{{ request()->is('dashboard*') ? 'nav-link active' : 'nav-link' }}"
                href="{{ route('/dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="@if (request()->is('list-solution*') || request()->is('list-our-solutions*')) {{ 'nav-item active' }} @else {{ 'nav-item' }} @endif">
            <a class="nav-link" data-toggle="collapse" href="#our_olutions" aria-expanded="false"
                aria-controls="our_olutions">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Our Solutions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="our_olutions">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-solution*')) {{ 'nav-link active' }} @else {{ 'nav-link' }} @endif"
                            href="{{ route('list-solution') }}">Solutions</a>
                    </li>

                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-our-solutions*')) {{ 'nav-link active' }} @else {{ 'nav-link' }} @endif"
                            href="{{ route('list-our-solutions') }}">Our Solutions</a></li>


                </ul>
            </div>
        </li>


        <li class="@if (request()->is('list-services*') || request()->is('list-service-details*')) {{ 'nav-item active' }} @else  {{ 'nav-item' }} @endif">
            <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="services">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-services*')) {{ 'nav-link active' }} @else  {{ 'nav-link' }} @endif"
                            href="{{ route('list-services') }}">Services</a></li>
                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-service-details*')) {{ 'nav-link active' }} @else  {{ 'nav-link' }} @endif"
                            href="{{ route('list-service-details') }}">Services Details</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="{{ request()->is('list-resource-and-insights*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Resources & Insights</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-resource-and-insights') }}">Resources and Insights Details</a></li>


                </ul>
            </div>
        </li>


        <li class="@if (request()->is('list-slide*') || request()->is('list-additional-solutions*')) {{ 'nav-item active' }} @else {{ 'nav-item' }} @endif">
            <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="home">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-slide*')) {{ 'nav-link active' }} @else {{ 'nav-link' }} @endif"
                            href="{{ route('list-slide') }}">Slider</a></li>

                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-additional-solutions*')) {{ 'nav-link active' }} @else {{ 'nav-link' }} @endif"
                            href="{{ route('list-additional-solutions') }}">Additional Solutions</a></li>

                </ul>
            </div>
        </li>

        <li class="{{ request()->is('list-gallery*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-gallery') }}">
                <i class="fas fa-newspaper menu-icon"></i>
                <span class="menu-title">Gallery</span>
            </a>
        </li>

        <li class="{{ request()->is('list-subscriber*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-subscriber') }}">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">Subscriber From Website</span>
            </a>
        </li>



        <li class="@if (request()->is('list-contactus-form*') || request()->is('list-about-us-contactus*')) {{ 'nav-item active' }} @else {{ 'nav-item' }} @endif">
            <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Contact From Website</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-contactus-form*')) {{ 'nav-link active' }} @else {{ 'nav-link' }} @endif"
                            href="{{ route('list-contactus-form') }}">Contact Us List</a></li>

                    <li class="nav-item d-none d-lg-block"><a
                            class="@if (request()->is('list-about-us-contactus*')) {{ 'nav-link active' }} @else {{ 'nav-link' }} @endif"
                            href="{{ route('list-about-us-contactus') }}">About Us Contact List</a></li>
                </ul>
            </div>
        </li>

        <li class="{{ request()->is('edit-website-contact-details*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ url('edit-website-contact-details') }}">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">Website Contact Details</span>
            </a>
        </li>

        <li class="{{ request()->is('log-out*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ url('log-out') }}">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">Log Out</span>
            </a>
        </li>

    </ul>
</nav>
<!-- partial -->

<script></script>
