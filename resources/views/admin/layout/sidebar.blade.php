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

        <li class="{{request()->is('list-marquee-tab*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Our Solutions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                   
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-solution') }}">Solutions</a>
                    </li>

                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-our-solutions') }}">Our Solutions</a></li>

                   
                </ul>
            </div>
        </li>


        <li class="{{request()->is('list-marquee-tab*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                   
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-services') }}">Services</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-service-details') }}">Services Details</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="{{request()->is('list-marquee-tab*') 
            ? 'nav-item active' : 'nav-item' }}">
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


        <li class="{{request()->is('list-slide*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="home">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link active"
                            href="{{ route('list-slide') }}">Slider</a></li>
                    
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-additional-solutions') }}">Additional Solutions</a></li>

                    
            
                </ul>
            </div>
        </li>
     
        <li class="{{request()->is('list-gallery*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-gallery') }}">
                <i class="fas fa-newspaper menu-icon"></i>
                <span class="menu-title">Gallery</span>
            </a>
        </li>
        {{--
        <li class="{{request()->is('list-contactus-form*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">Contact Us</span>
            </a>
        </li>
        --}}


         <li class="{{request()->is('list-slide*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="home">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Contact</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link active"
                            href="{{ route('list-contactus-form') }}">Contact Us List</a></li>
                    
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-about-us-contactus') }}">About Us Contact List</a></li>

                    
            
                </ul>
            </div>
        </li>

    </ul>
</nav>
<!-- partial -->

<script></script>