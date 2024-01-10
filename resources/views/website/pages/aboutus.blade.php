@include('website.layouts.header')
{{-- start hero section --}}
<style>
        .card {
            margin-bottom: 10px;
        }
     .card-header button {
    text-decoration: none; /* Remove underline from the button */
    font-weight: bold; /* Bold the text */
}


        .card-body {
            background-color: #E1F8FF;
        }
    </style>
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
                        <div class="fcard_about" style="margin-top:0; font-size:14px;">
                           
                            <p class="text-align-justify">Fibovix Wealth Management provides financial advice and solutions to private, institutional, and corporate clients worldwide. Headquartered in Nariman Point, Mumbai, we are present in all major financial assets worldwide. We provide corporate, institutional, and wealth management clients with expert advice, innovative solutions, execution, and comprehensive access to international capital markets. We deliver investment products, technology, and tools – helping millions meet immediate spending needs, build wealth, and retire securely. We are a fiduciary to our clients. We’re investing for the future on behalf of our clients, inspiring our employees, and supporting our local communities. Our purpose is to help more and more people experience financial well-being. Together with our clients, we’re contributing to a more equitable and resilient world – today and for generations to come. Our investment approach is informed by three principles: we start by understanding the client’s investment objectives; we seek the best risk-adjusted returns within the scope of the mandate they give us; and we underpin our work with research, data, and analytics.</p>
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
            <h1 class="text-center our_advisor_heading p-2">Who <span style="color:#6246E5; padding:5px;">We Are </span></h1>
            <div class="col-md-3 col-lg-3 col-sm-3">

            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 d-flex justify-content-center">
                <p>We are driven by a vision of a better retirement. We believe that people deserve financial security across their lifetimes and that retirement should be within reach for everyone. To make this a reality, we are building better solutions, and making them more accessible.</p>

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
                    <p class="our_advisor_p">Our team, clients, communities, and shareholders are at the center of everything we do. Through our tailored solutions spanning investment and commercial banking, payments processing, and asset management, we're relentlessly focused on serving our clients and driving sustainable impact for our communities.</p>
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
</div>
</div>
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Our Firm
                                </button>
                            </h2>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Fibovix Wealth Management provides a range of investment banking, investment management, and securities services for our clients. These services are delivered by teams working across multiple functions.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Our Purpose
                                </button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Our purpose is to help more and more people experience financial well-being. Together with our clients, we’re contributing to a more equitable and resilient world – today and for generations to come.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Diversity & Inclusion
                                </button>
                            </h2>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Our people are our greatest asset – we say it often and with good reason. It is only with the determination and dedication of our people that we can serve our clients, generate long-term value for our shareholders, and contribute to the broader public.
                                    Fibovix economists and experts share insights on macro trends shaping the global economy.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Acting as a fiduciary
                                </button>
                            </h2>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Fibovix's investment approach is informed by three principles: we start by understanding the client’s investment objectives; we seek the best risk-adjusted returns within the scope of the mandate they give us; and we underpin our work with research, data, and analytics. We apply those same principles to sustainability and the low-carbon transition.
                                    At Fibovix, we believe we’re at our best when our employees connect their personal purpose to their work and our firm’s purpose. In our “What’s Your Why” series, employees share how they bring their passions to what they do.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    People and Leadership
                                </button>
                            </h2>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    We frequently express that our team members are our most valuable treasure, and it's a sentiment we deeply believe in. Their unwavering commitment and dedication empower us to provide excellent service to our clients, create enduring value for our shareholders, and make meaningful contributions to society at large.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid thing5_bg">
    <div class="container thing_5_top">
        <h2 class="text-center p-3">How<span style="color:#6246E5; padding:5px;">WE</span> can help <span style="color:#6246E5; padding:5px;">YOU</span>..
        </h2>
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
                        <p>Create a personalized financial strategy  </p>
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
                        <p>Optimal monetary benefit oriented approach </p>
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
                        <p>Growth through a streamlined financial strategy  </p>
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
                                    <h4><b>Marriage and Family</b></h4>
                                    <p>Strike a balance between repaying your student loans and setting aside funds for your child's future</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-slider">
                                    <p>WORKING TOGETHER-2</p>
                                    <h3>Prepare for important <span class="font_color">milestones</span> </h3>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable. Are any of these on your radar?</p>
                                    <h4><b>Purchasing or selling a residence.</b></h4>
                                    <p>Navigating Real Estate transactions in buying or selling a Home.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-slider">
                                    <p>WORKING TOGETHER-3</p>
                                    <h3>Prepare for important <span class="font_color">milestones</span> </h3>
                                    <p>Having a dedicated advisor at certain times in your life can be valuable. Are any of these on your radar?</p>
                                    <h4><b>Retirement Planning</b></h4>
                                    <p>Preparing for your next chapter as you approach retirement.</p>
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
                    <h2 class="text-center p-3">Connect with <span style="color:#6246E5; padding:5px;">Fibovix</span> </h2>
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

                            <div class="col-md-12 py-3 captcha_set d-flex justify-content-center" style="text-align: -webkit-right;">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}

                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <span class="red-text">{{ $errors->first('g-recaptcha-response') }}</span>
                                </span>
                                @endif
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p class="form_para mt-4"> <input type="checkbox" id="agree_checkbox" name="agree_checkbox" onchange="enableSubmit()"
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
                                <button class="btn btn-primary mb-2" disabled type="submit">Submit</button>
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
                        <span class="wtsubtit2"></span>
                    </span>
                    <br />
                    <p class="wtsubpara">
                        Together with your advisor, you will delineate and prioritize your objectives, assess your financial standing, and assess trade-offs to formulate a personalized, easily understandable, and comprehensive plan using our optimized tools. In the event of changes in your situation, you and your advisor can revise the plan to ensure you remain on course toward your goals.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="{{ asset('website/images/Rectangle 1270.png') }}" class="wt-sub-img img-fluid" height="200px"
                    width="100%" />
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  function enableSubmit() {
        var checkbox = document.getElementById('agree_checkbox');
        var submitButton = document.querySelector('.form_btn button');

        if (checkbox.checked) {
            submitButton.removeAttribute('disabled');
        } else {
            submitButton.setAttribute('disabled', 'disabled');
        }
    }
</script>




@include('website.layouts.footer')