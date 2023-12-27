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

    <!-- Start Cards -->
    <div class="container mb-md-4">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch">
                                <div class="services">
                                    <div class="icon d-flex align-items-center justify-content-center"><span>
                                            <i><img src="{{ asset('website/images/Group 1000003610.png') }}" alt=""></i></span>
                                    </div>
                                    <div class="text">
                                        <h2>Office</h2>
                                        <p>Express towers, Marine Dr, Nariman Point, Mumbai, Maharashtra 400021 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch">
                                <div class="services">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span<i><img src="{{ asset('website/images/Group 1000003611.png') }}" alt=""></i></span>
                                    </div>
                                    <div class="text">
                                        <h2>Email</h2>
                                        <p>info@fibovix.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch">
                                <div class="services">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span<i><img src="{{ asset('website/images/Group 1000003612.png') }}" alt=""></i> </span>
                                    </div>
                                    <div class="text">
                                        <h2>Phone</h2>
                                        <p>6262757562 </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End Cards -->

    <!-- start Map -->
    <section>
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="col-md-12 col-lg-12 d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22097.967898937644!2d73.78348365959188!3d19.987863371093294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1703580760467!5m2!1sen!2sin"
                        width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map -->

    <!--Start form -->
    <section class=" d-flex justify-content-center">
        <div class="contact-form col-md-4 background-color p-5">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" required>

            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationCustom02" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Phone</label>
                <input type="text" class="form-control" id="validationCustom03" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Subject</label>
                <input type="text" class="form-control" id="validationCustom03" required>
            </div>
            <div class="col-md-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
            </div>

            <div class="col-12 d-flex justify-content-center mt-3"><br>
                <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
        </form>

        </div>
    </section>
    <!-- End form -->



@include('website.layouts.footer')