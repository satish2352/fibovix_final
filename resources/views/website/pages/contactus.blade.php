@include('website.layouts.header')
{{-- start hero section --}}

<!-- Start contact-background -->
<section>
    <div class="container-fluid conact_page_img">
        <div class="banner_desktop" style="display:none;">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img src="{{ asset('website/images/get_in_touch.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="banner_mobile" style="display:none;">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img src="{{ asset('website/images/get_in_touch_mobile.jpg') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact-background -->

<!-- Start Cards -->
<div class="container contactus_bg">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="row mt-5 g-3 justify-content-center">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch">
                                <div class="services">
                                    <div class="icon d-flex align-items-center justify-content-center"><span>
                                            <i><img src="{{ asset('website/images/Group 1000003610.png') }}"
                                                    alt=""></i></span>
                                    </div>
                                    <div class="text">
                                        <h2>Office</h2>
                                        <p>{{ $website_contact_details[0]['address'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch">
                                <div class="services">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span<i><img src="{{ asset('website/images/Group 1000003611.png') }}"
                                                alt=""></i></span>
                                    </div>
                                    <div class="text">
                                        <h2>Email</h2>
                                        <p><a href="mail:{{ $website_contact_details[0]['mail_id'] }}">{{
                                                $website_contact_details[0]['mail_id'] }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch">
                                <div class="services">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span<i><img src="{{ asset('website/images/Group 1000003612.png') }}"
                                                alt=""></i>
                                            </span>
                                    </div>
                                    <div class="text">
                                        <h2>Phone</h2>
                                        <p><a href="tel:{{ $website_contact_details[0]['contact_one'] }}">{{
                                                $website_contact_details[0]['contact_one'] }} </a> &nbsp;
                                            <a href="tel:{{ $website_contact_details[0]['contact_two'] }}">{{
                                                $website_contact_details[0]['contact_two'] }} </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cards -->

<!-- start Map -->
<section>
    <div class="container" style="position: relative;">
        <div class="row">
            <div class="col-md-12 col-lg-12 d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.072690993769!2d72.81970837433005!3d18.928176356598303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e8d34ef5d7%3A0xd03369a7fcfee789!2sExpress%20Towers%2C%20Ramnath%20Goenka%20Marg%2C%20Nariman%20Point%2C%20Mumbai%2C%20Maharashtra%20400021!5e0!3m2!1sen!2sin!4v1704026033480!5m2!1sen!2sin"
                    width="85%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
</section>
<!-- End Map -->

<!--Start form -->
<section class=" d-flex justify-content-center">
    <div class="contact-form col-md-4 background-color p-5">
        @include('website.layouts.alert')
        <form class="row g-3 needs-validation" action="{{ url('add-contactus') }}" id="regForm" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" id="full_name">
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
                <input type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}"
                    id="validationCustom03">
                <span id="number-validate" class="red-text"></span>
                @if ($errors->has('mobile_number'))
                <span class="red-text">
                    <?php echo $errors->first('mobile_number', ':message'); ?>
                </span>
                @endif
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Subject</label>
                <input type="text" class="form-control" id="validationCustom03" name="subject"
                    value="{{ old('subject') }}">
                <span id="number-validate" class="red-text"></span>
                @if ($errors->has('subject'))
                <span class="red-text">
                    <?php echo $errors->first('subject', ':message'); ?>
                </span>
                @endif
            </div>
            <div class="col-md-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" name="message"
                    id="message" placeholder="Write a Message" class="form-control">{{ old('message') }}</textarea>
                <span id="number-validate" class="red-text"></span>
                @if ($errors->has('message'))
                <span class="red-text">
                    <?php echo $errors->first('message', ':message'); ?>
                </span>
                @endif
            </div>
            <div class="col-md-12 py-3 captcha_set captcha_css" style="text-align: -webkit-right;">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}

                @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <span class="red-text">{{ $errors->first('g-recaptcha-response') }}</span>
                </span>
                @endif
            </div>
            <div class="col-12 d-flex justify-content-center mt-3"><br>
                <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
        </form>

    </div>
</section>
<!-- End form -->

<script>

    $(document).ready(() => {
        if (isMobileDevice()) {
            $(".banner_mobile").show();
        } else {
            
            $(".banner_desktop").show();
        }
    });

    function isMobileDevice() {
        if(window.innerWidth <= 800) {
            return true;    
        }
        return false;    
    }


</script>


@include('website.layouts.footer')