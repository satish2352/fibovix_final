@include('website.layouts.header')
{{-- start hero section --}}

    <!-- Start contact-background -->
    <section>
            <div class="container-fluid about_img">
               
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 mt-5 text-center">
                                <img src="{{ asset('website/images/Logo1.png') }}" height="100" alt="">
                                <h2 class="mt-3 about_img_head">WHY US</h2>
                                <p class="mb-4 about_banner_para">We rely on our principles to guide how we interact with each other, our clients, and the communities in which we operate. These principles represent our core values. Aspirations and our cultural language – lived and embraced by every employee at our firm. The people we serve entrust us to help them prepare for the future. Our culture is defined by the deep sense of responsibility we feel to our clients and to each other.</p>
                            </div>
                        </div>
                    </div>
                
            </div>
    </section>
    <!-- End contact-background -->

    {{-- start gallary --}}

    <div class="container mt-1 mb-4">
        <div class="row founder_section_row">
            <div class="col-lg-5">
                <div class="row gy-4 d-grid">
                    <img src="{{ asset('website/images/f1.png') }}" alt="">
                    <img src="{{ asset('website/images/f2.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-5 d-grid">
                    <div class="fcard">
                        <div class="fcard_about">
                            <h4>Founder</h4>
                            <h2>Our Founder</h2>
                            <p>Fibovix investment approach is informed by three principles: we start by
                                understanding the client’s investment objectives we seek the best risk-adjusted
                                returns within the scope of the mandate they give us; and we underpin our work with
                                research, data, and analytics. Research informs our investment decisions and product
                                innovation. We research major structural trends shaping the economy, markets, and
                                asset prices.</p>
                        </div>
                    </div>
                    <img src="{{ asset('website/images/f3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- End gallary -->

    <div class="container">
        <div class="row">
            <h1 class="text-center our_advisor_heading p-2">Our <span style="color:#6246E5; padding:5px;">Advisor</span></h1>
            <div class="col-md-3 col-lg-3 col-sm-3">

            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 d-flex justify-content-center">
                <p>You will be collaborating with someone that you connect with and who is aware of your priorities in your connection with your specialized adviser.</p>

            </div>
            <div class="col-md-3 col-lg-3 col-sm-3">

            </div>
        </div>
    </div>

<!-- End contact-background -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-1">

            </div>
            <div class="main col-lg-11 col-md-11 col-sm-11">

                <div class="sub_main">
                    <h4 class="our_advisor_h1">The Right Guidance</h4>
                    <p class="our_advisor_p">Although you might feel that your advisor's involvement ends with your portfolio, we think it doesn't end there. Engaging with our adviser will help in transforming your aspirations into a customized financial plan. Your plan is your own financial road map, and your adviser is your resource.</p>
                </div>
                <img class="our_advisor_img position-relative"
                    src="{{ asset('website/images/our_advicer/Rectangleadvice.png') }}" width="450" height="300"
                    alt='Responsive 2-column layout'>

                <img class="circleimg  position-absolute"
                    src="{{ asset('website/images/our_advicer/advisorcircle.png') }}" alt='Responsive 3-column layout'>
            </div>
            <div class="col-1">

            </div>
        </div>

    </div>
</div>
<div class="container-fluid thing5_bg">
    <div class="container thing_5_top">
        <b><h2 class="text-center p-3">How<span style="color:#6246E5; padding:5px;">We</span> can help you ..
        </h2></b>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center">
                <div class="card_container">
                    <div class="card_header">
                        <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                    </div>
                    <div class="card_body">
                        <p>To Prioritize your goals  </p>
                    </div>
                    <div class="card_footer">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center">
                <div class="card_container">
                    <div class="card_header">
                        <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                    </div>
                    <div class="card_body">
                        <p>Create a personalized financial strategy </p>
                    </div>
                    <div class="card_footer">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center">
                <div class="card_container">
                    <div class="card_header">
                        <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                    </div>
                    <div class="card_body">
                        <p>The right analysis of situations</p>
                    </div>
                    <div class="card_footer">
                    </div>
                </div>
            </div>

            <div class="col-2">

            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 d-flex justify-content-center">
                <div class="card_container">
                    <div class="card_header">
                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image"
                            class="card_image" />
                    </div>
                    <div class="card_body">
                        <p>Optimal monetary benefit oriented approach</p>
                    </div>
                    <div class="card_footer">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 d-flex justify-content-center">
                <div class="card_container">
                    <div class="card_header">
                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                    </div>
                    <div class="card_body">
                        <p>Growth through a streamlined financial strategy </p>
                    </div>
                    <div class="card_footer">
                    </div>
                </div>
            </div>

            <div class="col-2">

            </div>

        </div>
    </div>
</div>


<div class="container fibovix_team mt-5 mb-5">
        <div class="row fibovix_team_setcard">
            <div class="col-12 col-md-8 set_team_img">
                <img class="img-fluid" src="{{ asset('website/images/Fibovix_team.jpg') }}" alt="Image">
            </div>
            <div class="col-12 col-md-4 media_set_about">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators carousel-indicators_new">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="text-slider">
                                <p>We are with you!</p>
                                    <h3>Every Milestone is  <span class="font_color">Important...</span> </h3>
                                    <p>Are you considering the potential value of having a dedicated advisor during specific stages of your life?</p>
                                    <h4><b>Typing the knot and starting a family </b></h4>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-slider">
                                    <p>WORKING TOGETHER-2</p>
                                    <h3>Prepare for important <span class="font_color">milestones</span> </h3>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable. Are any of these on your radar?</p>
                                    <h4><b>Typing the knot and starting a family </b></h4>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-slider">
                                    <p>WORKING TOGETHER-3</p>
                                    <h3>Prepare for important <span class="font_color">milestones</span> </h3>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable. Are any of these on your radar?</p>
                                    <h4><b>Typing the knot and starting a family </b></h4>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container-fluid about_contact_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">

                <div class="container about_contact_form">
                    <h2 class="text-center p-3">Connect with<span style="color:#6246E5; padding:5px;">Fivovix</span> 
                        </h2>
                    <p class="text-center">Alrady a client? Connect to your Fibovix Adviser</p>
                    <div class="row about_contact_row">
                        @include('website.layouts.alert')
                        <form class="row g-3 needs-validation" action="{{ url('add-about-us-contactus') }}" id="regForm"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}"
                                    id="full_name">
                                <span id="number-validate" class="red-text"></span>
                                @if ($errors->has('full_name'))
                                <span class="red-text">
                                    <?php echo $errors->first('full_name', ':message'); ?>
                                </span>
                                @endif

                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                <span id="number-validate" class="red-text"></span>
                                @if ($errors->has('email'))
                                <span class="red-text">
                                    <?php echo $errors->first('email', ':message'); ?>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="mobile_number"
                                    value="{{ old('mobile_number') }}" id="validationCustom03">
                                <span id="number-validate" class="red-text"></span>
                                @if ($errors->has('mobile_number'))
                                <span class="red-text">
                                    <?php echo $errors->first('mobile_number', ':message'); ?>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="zip_code" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="validationCustom03" name="zip_code"
                                    value="{{ old('zip_code') }}">
                                <span id="number-validate" class="red-text"></span>
                                @if ($errors->has('zip_code'))
                                <span class="red-text">
                                    <?php echo $errors->first('zip_code', ':message'); ?>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-12 py-3 captcha_set" style="text-align: -webkit-right;">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}

                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <span class="red-text">{{ $errors->first('g-recaptcha-response') }}</span>
                                </span>
                                @endif
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p class="form_para mt-4"> <input type="checkbox" id="agree_checkbox" name="agree_checkbox"
                                        value="">
                                    @if ($errors->has('agree_checkbox'))
                                    <span class="help-block">
                                        <span class="red-text">{{ $errors->first('agree_checkbox') }}</span>
                                    </span>
                                    @endif
                                    By providing your contact information above, you agree that a
                                    representative of Merrill, the Brokerage
                                    affiliate of Bank of America Corporation, may contact you via telephone and/or email to
                                    discuss and/or offer investment products and services that may be appropriate for you.
                                    You
                                    agree that
                                    you are providing to us your consent for us to contact you regardless of any Do Not Call
                                    or
                                    Do Not
                                    Email privacy choices you may have previously expressed until you revoke this consent,
                                    or up
                                    to 90 days.
                                    You may revoke your consent at any time by notifying the Merrill representative.
                                </p>
                            </div>


                            <div class="form_btn"><br>
                                <button class="btn btn-primary mb-2" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="container wtsub">
        <div class="row">
            <div class="col-lg-1">
                <div class="wtgrp-img">
                    <img src="{{ asset('website/images/Group_222-removebg-preview.png') }}" width="200px"
                        height="200px">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="wtsubmain">
                    <span class="wtsubtit1">Optimized analysis with better tools. <br />
                        <span class="wtsubtit2">analysis.</span>
                    </span>
                    <br />
                    <p class="wtsubpara">
                       Together with your advisor, you will delineate and prioritize your objectives, assess your financial standing, and assess trade-offs to formulate a personalized, easily understandable, and comprehensive plan using our optimized tools. In the event of changes in your situation, you and your advisor can revise the plan to ensure you remain on course toward your goals.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="{{ asset('website/images/Rectangle 1270.jpg') }}" class="wt-sub-img img-fluid" height="200px"
                    width="100%" />
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#agree_checkbox').on('change', function () {
            if (this.checked) {
                $('#submitBtn').prop('disabled', false);
            } else {
                $('#submitBtn').prop('disabled', true);
            }
        });
    });
</script>





@include('website.layouts.footer')