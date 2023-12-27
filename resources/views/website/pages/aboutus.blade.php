@include('website.layouts.header')
{{-- start hero section --}}

    <!-- Start contact-background -->
    <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-md-12">
                        <div class="logo image-fluid">
                            <img src="{{ asset('website/images/contact-background.jpg') }}" width="100%" ;>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End contact-background -->

    {{-- start gallary --}}

    <div class="container mt-5 mb-5">
        <div class="row ">
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
            <div class="col-lg-md-12">
                <div class="logo image-fluid">
                    <img src="{{ asset('website/images/contact-background.jpg') }}" width="100%" ;>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact-background -->

<div class="container">
    <div class="row">
        <h2 class="text-center p-3">Our <span style="color:#6246E5; padding:5px;">Advisor</span></h2>
        <div class="col-md-3 col-lg-3 col-sm-3">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 d-flex justify-content-center">
            <p>Your relationship with your dedicated advisor is all about you – you’ll be working with someone you
                connect with and who understands your priorities</p>

        </div>
        <div class="col-md-3 col-lg-3 col-sm-3">

        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-1">

            </div>
            <div class="main col-lg-11 col-md-11 col-sm-11">

                <div class="sub_main">
                    <h4 class="our_advisor_h1">Guidance is just the beginning</h4>
                    <p class="our_advisor_p">You may think your advisor’s role is limited to your portfolio however we
                        believe it goes beyond that. Working with a Merrill advisor can help turn your hopes and dreams
                        into a personalized financial strategy. Your advisor is your resource, and your strategy is your
                        personal financial road map.</p>
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

<div class="container thing_5_top">
    <h2 class="text-center p-3">5 Things an <span style="color:#6246E5; padding:5px;">Advisor</span> can help you do
    </h2>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card_container">
                <div class="card_header">
                    <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                </div>
                <div class="card_body">
                    <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                </div>
                <div class="card_footer">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card_container">
                <div class="card_header">
                    <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                </div>
                <div class="card_body">
                    <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                </div>
                <div class="card_footer">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card_container">
                <div class="card_header">
                    <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                </div>
                <div class="card_body">
                    <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                </div>
                <div class="card_footer">
                </div>
            </div>
        </div>

        <div class="col-2">

        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card_container">
                <div class="card_header">
                    <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image"
                        class="card_image" />
                </div>
                <div class="card_body">
                    <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                </div>
                <div class="card_footer">
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card_container">
                <div class="card_header">
                    <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                </div>
                <div class="card_body">
                    <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                </div>
                <div class="card_footer">
                </div>
            </div>
        </div>

        <div class="col-2">

        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">

            <div class="container about_contact_form">
                <h2 class="text-center p-3">Have an <span style="color:#6246E5; padding:5px;">Advisor</span> contact
                    you.</h2>
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
                    <span class="wtsubtit1">Enhanced tools Real-time <br />
                        <span class="wtsubtit2">analysis.</span>
                    </span>
                    <br />
                    <p class="wtsubpara">
                        With the Merrill Personal Wealth Analysis™ tool, you and your
                        advisor will define and prioritize your goals, take stock of
                        your finances and evaluate trade-offs to create an easy-to-read,
                        personalized and comprehensive plan. And if your situation
                        changes, you and your advisor can update your plan to help you
                        stay on track toward your goals.
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






@include('website.layouts.footer')