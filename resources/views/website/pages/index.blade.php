@include('website.layouts.header')
{{-- start hero section --}}
<style>
    label.error {
        color: red; /* Change 'red' to your desired text color */
        font-size: 12px; /* Adjust font size if needed */
        /* Add any other styling as per your design */
    }
</style>

<div class="banner_desktop" style="display:none;">
    <!-- <div class="container-fluid mt-5 g-0 mobile_carousel">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                @foreach ($data_output_slider as $key=> $item)
                <div class="carousel-item @if($key == 0) {{'active'}} @endif">
                    <img src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $item->image }}" class="d-block w-100"
                        alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <img class="img-fluid mt-5" style="" src="{{asset('website/images/home.jpg')}}" alt="">
    <div class="container">
        <div class="row">

            <div class="col-md-12 titles_container">
                <div class="home_heading">
                    <h1>Welcome to FIBOVIX. Together, we can identify an investment strategy that best suits your needs.</h1>
                </div>
                <div class="home_titles_para">
                    <p class="span_para"><span>No matter where you are in your investing journey, we have the knowledge, resources, and skills to provide the right support for you.</span></p>
                </div>
                <div class="home_title_btn mb-4">
                    <a class="btn banner_btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Join Us</a>
                    
                </div>

            </div>
            
        </div>
    </div>
</div>
@if(session('success'))
        <div class="container">
    <div class="alert alert-success" id="autoCloseAlert">
        {{ session('success') }}
    </div>
    </div>

    <script>
        $(document).ready(function(){
            // Close the alert after 3 seconds
            setTimeout(function(){
                $("#autoCloseAlert").alert('close');
            }, 3000);
        });
    </script>
@endif



<div class="banner_mobile" style="display:none;"> 
    <!-- <div class="container-fluid mt-5 g-0 mobile_carousel">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                @foreach ($data_output_slider as $key=> $item)
                <div class="carousel-item @if($key == 0) {{'active'}} @endif">
                    <img src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $item->mobile_view_image }}"
                        class="d-block w-100" alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <img class="img-fluid mt-5" style="" src="{{asset('website/images/home_mobile_view.png')}}" alt="">
    <div class="container">
        <div class="row">

            <div class="col-md-12 titles_container">
                <div class="home_heading">
                    <h1>Welcome to FIBOVIX. Together, we can identify an investment strategy that best suits your needs.</h1>
                </div>
                <div class="home_titles_para">
                    <p class="span_para"><span>No matter where you are in your investing journey, we have the knowledge, resources, and skills to provide the right support for you.</span></p>
                </div>
                <div class="home_title_btn mb-4">
                    <a class="btn banner_btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Join Us</a>

                </div>

            </div>
            
        </div>
    </div>
</div>



<div class="container-fluid mb-4">
    {{-- <img class="img-fluid" style="" src="{{asset('website/images/WHYFIBOVIX.png')}}" alt=""> --}}
    <div class="row">
        <div class="backimg1 text-center py-5">

            <div class="container">
                <div class="row text-center">
                    <h2 id="fibovix" class="white">Our<span style="color: #fff"> Purpose</span></h2>
                    <div class="col-md-2 col-lg-2 col-sm-2">

                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-8 d-flex justify-content-center">
                        <p class="white">We aspire to be the most exceptional financial institution, united by our shared values of partnership, client service, integrity, and excellence. Everything we do starts with our purpose. Reimagining the power of investing. Connecting people for a better world. This is our purpose. This is Fibovix.</p>

                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">

                    </div>

                </div>
            </div>

            <div class="container section_center">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card shadow-lg why_fibo_card">
                            <div class="card-body">
                                <img src="{{ asset('website/images/Group.png') }}" width="70px" alt="">
                                <h5 id="hh">Needs</h5>
                                <p>
                                    Your strategy is built on your objectives, concerns, and investment mindset.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card shadow-lg why_fibo_card">
                            <div class="card-body">
                                <img src="{{ asset('website/images/Group1.png') }}" width="70px" alt="">
                                <h5 id="hh">Advice</h5>
                                <p>
                                    Your adviser is dedicated to supporting you in achieving your objectives & will
                                    offer
                                    tailored guidance from the start.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card shadow-lg why_fibo_card">
                            <div class="card-body">
                                <img src="{{ asset('website/images/Group2.png') }}" width="70px" alt="">
                                <h5 id="hh">Strategy</h5>
                                <p>Your adviser can recommend tax-minimization techniques as part of your overall
                                    investing
                                    strategy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@if(count($all_services))
<div class="container">
    <div class="row text-center">
        <h2 id="fibovix">Discover Fibovix Wealth Management</span> </h2>
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <p>Across our divisions, digital platforms, and services, our clients and customers have access to the
                    resources and reach of a unified global firm to help them achieve their goals.</p>
            </div>
            <div class="col-2">

            </div>
        </div>

    </div>
</div>

<!-- contaback -->
<div class="container-fluid">
    <div class="card p-3">
        <div class="col-md-12 artical_top_mob artical_row_top">
            <div class="container">
            <div class="row">
                <!-- <div class="col-md-3 mt-5">
                    <nav class="article_nav p-3">
                        <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">
                            <button class="nav-link article_tab_link mt-5 active" id="todays_market_tab"
                                data-bs-toggle="tab" data-bs-target="#todays_market" onclick="getServices('all')"
                                type="button" role="tab" aria-controls="nav-home" aria-selected="true">All
                                items</button>
                            @forelse($all_services as $key=>$categories_data)

                            <button class="nav-link article_tab_link" id="id_{{ $categories_data['id'] }}"
                                data-bs-toggle="tab" data-bs-target="#data_id_{{ $categories_data['id'] }}"
                                onclick="getServices('{{ $categories_data['id'] }}')" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">{{
                                $categories_data['service_name'] }}</button>

                            @empty
                            <div class="alert alert-primary" role="alert">
                                No Data Found
                            </div>
                            @endforelse
                        </div>
                    </nav>
                </div> -->
                <div class="col-md-12">
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="row d-flex gallery" id="gallary_data">

                            <div class="row row-cols-1 row-cols-md-4 g-3 d-flex justify-content-center">
                                @forelse ($all_services_details as $key=>$item)
                                <div class="col-md-6 col-lg-4 col-sm-12 d-flex justify-content-center">
                                    <div class="card article_card_container h-100">
                                        <img src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $item['image'] }}"
                                            class="card-img-top" alt="{{ $item['title'] }}">
                                        <div class="card-body">
                                            <h4 class="card-title fw-7">{{ $item['title'] }}</h4>
                                            <p class="text-align-nojustify">{{
                                                $item['short_description'] }}</p>
                                        </div>
                                        <div class="card-footer article_card_footer">

                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="alert alert-primary" role="alert">
                                    No Data Found
                                </div>
                                @endforelse
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endif

<!-- bimg -->
<div class="container-fluid position-relative mb-5">
    <div class="container">
        <div class="row text-center ">
            <h2 id="fibovix">Explore <span style="color:#6246E5; padding:5px;">With Us</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 take_action_row">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text circle-text p-4 fs-5 fw-3">Find out what is important to you.
                        </p>
                    </div>
                </div>

                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">Together with your advisor, determine your
                            priorities for the now and your long-term goals. If you are in need of an advisor, we
                            can assist you in finding one.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 take_action_row">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3 circle-text">Create a plan and a roadmap for yourself.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">With assistance that genuinely supports you, we'll
                            develop a customized strategy that is all about you.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 take_action_row">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 tick_circle py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3 circle-text">Recognize your options and take action.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light">Find out more about your program alternatives and investment connections. Then, with the help of your adviser, implement your strategy.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 take_action_row">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3 circle-text">Review & track your progress.</p>
                    </div>
                </div>
                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">You can monitor your progress and adjust your
                            strategy in response to both anticipated and unforeseen events in life.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@if(count($additionalSolutions))
<div class="container mb-5 ">
    <div class="row text-center">
        <h2 id="fibovix">We Always <span style="color:#6246E5"> Offer More </span> </h2>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-3">
        @foreach ($additionalSolutions as $item)
        <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card addi_sol_card">
                <img class="addi_sol_card_img img-fluid"
                    src="{{ Config::get('DocumentConstant.ADDITIONAL_SOLUTIONS_VIEW') }}{{ $item->image }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ strip_tags($item->title) }}</h5>
                    <p class="card-text">{{ strip_tags($item->short_description) }}</p>
                    <!-- <a href="" target="_blank">
                    <button class="btn btn-primary1 float-right">
                        Learn More
                    </button>
                </a> -->
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

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




    function getServices(our_services_master_id) {
        $("#gallary_data").empty();
        $.ajax({
            url: "{{ route('list-our-services-ajax') }}",
            method: "POST",
            data: {
                "our_services_master_id": our_services_master_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                var path = '<?php echo Config:: get('DocumentConstant.SERVICES_VIEW'); ?>';
            $("#gallary_data").empty();
            $.each(data, function (i, item) {
               $("#gallary_data").append(` 
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card article_card_container h-100">
                            <img src="` + path + item.image + `" class="card-img-top" alt="` + item.title + `">
                                <div class="card-body">
                                <h4 class="card-title fw-7">` + item.title + `</h4>
                                <p class="text-align-nojustify">` + item.short_description + `</p>
                            </div>
                            <div class="card-footer article_card_footer">
                            </div>
                        </div>
                    </div>
                `);

            });
        },
            error: function (data) { }
        });
}



</script>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header modal_header_new">
        <h5 class="modal-title" id="exampleModalToggleLabel">Join Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-align-center">
        <div class="row">
            <div class="col-6">
                <div class="icon d-flex align-items-center justify-content-center"><span>
                    <i><img class="img-fluid" src="{{ asset('website/images/investor.png') }}" alt="" style="width: 50%;"></i></span>
                </div>
                <button type="button" class="btn banner_btn" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModalToggle2">INVESTOR</button>

            </div>
            <div class="col-6">
                <div class="icon d-flex align-items-center justify-content-center"><span>
                    <i><img class="img-fluid" src="{{ asset('website/images/trader_new.png') }}" alt="" style="width: 50%;"></i></span>
                </div>
                <button type="button" class="btn banner_btn" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModalToggle3">TRADER</button>

            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div> -->
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Investor Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{ route('investorStore') }}" id="investorForm">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="contact" name="contact" required>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" id="comment" name="comment" required></textarea>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn investor_btn">Submit</button>
      </div></form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Trader Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form method="POST" action="{{ route('traderStore') }}" id="traderForm" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" name="contact" id="contact" required>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="comment" class="form-label">Comment</label>
                                <input type="text" class="form-control" name="comment" id="comment" required>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="resume" class="form-label">Resume/CV</label>
                                <input type="file" class="form-control" id="resume" name="resume" accept=".pdf, .doc, .docx"
                                    required>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn investor_btn">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

</script>
<script>

$(document).ready(function () {
    $("#investorForm").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            contact: {
                required: true,
                digits: true, // Only accept digits (numbers)
                minlength: 10, // Minimum length is 10 digits
                maxlength: 10 // Maximum length is 10 digits
            },
            comment: {
                required: true
            }
            
        },
        messages: {
            name: "Please enter your name",
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            contact: {
                required: "Please enter a valid 10-digit contact number",
                digits: "Please enter only digits",
                minlength: "Contact number must be at least 10 digits",
                maxlength: "Contact number must not exceed 10 digits"
            },
            comment: "Please enter your comment"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});

</script>
<script>

$(document).ready(function () {
    $("#traderForm").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            contact: {
                required: true,
                digits: true, // Only accept digits (numbers)
                minlength: 10, // Minimum length is 10 digits
                maxlength: 10 // Maximum length is 10 digits
            },
            comment: {
                required: true
            },
            resume: {
                required: true
            }
        },
        messages: {
            name: "Please enter your name",
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            contact: {
                required: "Please enter a valid 10-digit contact number",
                digits: "Please enter only digits",
                minlength: "Contact number must be at least 10 digits",
                maxlength: "Contact number must not exceed 10 digits"
            },
            comment: "Please enter your comment",
            resume: "Please select your resume"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});

</script>


@include('website.layouts.footer')