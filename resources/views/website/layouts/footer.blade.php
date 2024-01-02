{{--
<hr class="line"> --}}

{{-- footer --}}
<head>
<style>
.social_icons_div {
    background-color: #fff;
    color: #6246E5;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-left: 28px;
}
.text-start {
    text-align: left!important;
    margin-left: 20px;
}
.mb-4 {
    margin-bottom: 1.5rem!important;
    margin-left: -44px;
}
.more{
    margin-left: -177px;
}

</style>
</head>
<footer class="mt-4">
    <div class="footimg">

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-2">

                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div id="corn">
                        <div class="container mt-5">
                            <div class="row news text-center mt-5">
                                <h2 class="text-center fw-bold fs-1 mt-5 mb-5">Subscribe to our News letter</h2>
                                  <center> <div class="col-8 grid-margin"> @include('website.layouts.alert')</div></center>
                                <div class="input-group  ">
                                    <form class="footer_subscribe_form" action="{{ url('add-subscriber') }}"
                                        id="regForm" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="email" placeholder="example@example.com" class="form-control"
                                            name="email" value="{{ old('email') }}" id="email">
                                        <span id="number-validate" class="red-text"></span>
                                        @if ($errors->has('email'))
                                            <span class="red-text">
                                                <?php echo $errors->first('email', ':message'); ?>
                                            </span>
                                        @endif
                                        <input type="submit" name="submit" class="btnn" value="subscribe" >
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">

                </div>

            </div>
        </div>

        <div class="main"></div>
        <footer id="Footer" class="page-footer font-small stylish-color-dark pt-4">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <!-- Content -->
                        <img class="py-3" src="{{ asset('website/images/Logo1.png') }}" width="200px" alt="">
                        {{-- <h5 class="text-uppercase font-weight-bold mt-3 mb-4">About our Company</h5>
                             <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;"> --}}
                        <div class="row">
                        <p class="ps-0 text-start " style="width:61%" >Express Towers, Marine Dr, Nariman Point, Mumbai, Maharashtra 400021.</p>
                            <div class="col-md-6 set_social_media_icon">
                                <div class="col-md-4 set_icons_content">
                                    <a href="{{ $website_contact_details[0]['instagram_link'] }}">
                                        <div class="icon d-flex align-items-center justify-content-center social_icons_div">

                                            
                                                <span class="icon_span">
                                                    <i class="fa fa-instagram fa-1x icon" aria-hidden="true"></i></span>
                                        

                                        </div> 
                                    </a>
                                </div>
                                <div class="col-md-4 set_icons_content">
                                    <a href="{{ $website_contact_details[0]['facebook_link'] }}">
                                        <div class="icon d-flex align-items-center justify-content-center social_icons_div">
                                            <span class="icon_span">
                                               
                                                    <i class="fa fa-facebook fa-1x icon" aria-hidden="true"></i></span>
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 set_icons_content">
                                    <a href="mail:{{ $website_contact_details[0]['mail_id'] }}">
                                        <div class="icon d-flex align-items-center justify-content-center social_icons_div">
                                     
                                            <span class="icon_span">
                                            <i class="fa fa-envelope-o fa-1x icon" aria-hidden="true"></i></span>
                                        
                                       
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div id="link10" class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer_link">
                        <h6 class="text-uppercase mt-4 font-weight-bold mb-4">Company</h6>
                        {{--
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;"> --}}
                        <p class="ps-0 text-start">
                            <a href="{{ route('aboutus') }}" id="links">About</a>
                        </p>
                        <p class="ps-0 text-start"> 
                            <a href="{{ route('services') }}" id="links">Services</a>
                        </p>


                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div id="link10" class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 footer_link">
                        <h6 class="text-uppercase mt-4 font-weight-bold mb-4">Contact</h6>
                        {{--
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;"> --}}
                        <p class="ps-0 text-start">
                            <a href="#!" id="links">Help/FAQ</a>
                        </p>
                        <p class="ps-0 text-start">
                            <a href="#!" id="links">Privacy & Policy</a>
                        </p>

                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 footer_link">
                        <h6 class="text-uppercase mt-4 font-weight-bold mb-4 more">More</h6>
                        {{--
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> --}}
                        <p class="ps-0 text-start"><a href="{{ route('media') }}" id="links">Media</a></p>
                        <p class="ps-0 text-start"><a href="{{ route('resources-insights') }}" id="links">Insights</a></p>

                        {{-- <p>
              <i class="fas fa-phone mr-3"></i> + 91 80254 52xxx
            </p>
            <p>
              <i class="fas fa-print mr-3"></i> + 91 80254 55xxx
            </p> --}}
                    </div>
                </div>
            </div>
            <hr>
            <!-- Call to action -->

            <div class="container ">
                <div class="row">
                    <div id="links" class="col-lg-10 col-md-10 col-sm-6 mb-3">Copyright, Sumago infotech
                        <?php echo date('Y'); ?>. All rights reserved.
                    </div>
                    <div id="links" class="col-lg-2 col-md-10 col-sm-6 mb-3">Terms & Conditions</div>
                </div>
            </div>

    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script>
    function storeScrollPosition() {
        sessionStorage.setItem('scrollPosition', window.scrollY);
    }
    function setScrollPosition() {
        var scrollPosition = sessionStorage.getItem('scrollPosition');
        if (scrollPosition !== null) {
            window.scrollTo(0, parseInt(scrollPosition));
            sessionStorage.removeItem('scrollPosition');
        }
    }
    document.querySelector(".footer_subscribe_form").addEventListener("submit", function(event) {
        var isSubmissionSuccessful = true;

        if (isSubmissionSuccessful) {
            storeScrollPosition();
        }
    });
    window.addEventListener("load", setScrollPosition);
</script>
</body>

</html>
