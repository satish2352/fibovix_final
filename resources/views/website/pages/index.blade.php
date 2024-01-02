@include('website.layouts.header')
{{-- start hero section --}}
<head>
<style>
img, svg {
    margin-left: -133px;
}
.h5, h5 {
    font-size: 1.25rem;
    margin-left: -119px;
    margin-top: 8px;
}
.text-start {
    text-align: left!important;
    margin-left: 29px;
}
.why_fibo_card {
    width: 19rem;
    border-radius: 150px 150px 0 150px;
    height: 16rem;
}
element.style {
    font-size: 13px;
    margin-top: 13px;
    color: #666666;
}
.center
{
    /* background-color: red; */
    text-align: center;
    margin-top: 20px;
}
</style>
</head>
<div class="container-fluid mt-5 g-0">

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


</div>



<div class="container-fluid">
    {{-- <img class="img-fluid" style="" src="{{asset('website/images/WHYFIBOVIX.png')}}" alt=""> --}}
    <div class="row">
        <div class="backimg1 text-center py-5">

            <div class="container mt-4">
                <div class="row text-center">
                    <h2 id="fibovix">Why FIBO<span style="color: #1F2D87 ">VIX</span></h2>
                    <div class="col-md-2 col-lg-2 col-sm-2">

                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-8 d-flex justify-content-center">
                        <p>Everything we do starts with our purpose. Re imagining the power of investing. Connecting people for a better world. This is our purpose. This is Fibovix
                        </p>

                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">

                    </div>

                </div>
            </div>
                
            <div class="container section_center">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-lg why_fibo_card text-left">
                            <div class="card-body">
                                <img src="{{ asset('website/images/Group.png') }}" width="50px" alt="">
                                <h5 id="hh" class="ps-0">Needs</h5>
                                <p class="ps-0 text-start" style="font-size: 13px; margin-top: 13px; color: #666666;" >
                                    Your strategy is built on your objectives, concerns, and investment mindset.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-lg why_fibo_card text-left">
                            <div class="card-body">
                                <img src="{{ asset('website/images/Group1.png') }}" width="50px" alt="">
                                <h5 id="hh" class="ps-0">Advisor</h5>
                                <p class="ps-0 text-start"style="font-size: 13px; margin-top: 13px; color: #666666;" >
                                    Your adviser is dedicated to supporting you in achieving your objectives & will
                                    offer
                                    tailored guidance from the start.
                                </p>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-lg why_fibo_card text-left">
                            <div class="card-body">
                                <img src="{{ asset('website/images/Group2.png') }}" width="50px" alt="">
                                <div class="lestAlign" style="margin-left:10px"><h5 id="hh" class="ps-0">Strategy</h5></div>
                                <p class="ps-0 text-start" style="font-size: 13px; margin-top: 13px; color: #666666;">
                                    Your adviser can recommend tax-minimization techniques as part of your overall
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

@if(count($ourSolutions))
<div class="container">
    <div class="row text-center">
        <h2 id="fibovix">Our <span style="color:#6246E5">Solutions </span> </h2>
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <p>Uncovering opportunities. Meeting challenges. Taking that next step forward. Whatever your goals, Merrill
                and Bank of America offer a wide range of solutions to help you get there.
                </p>
            </div>
            <div class="col-2">

            </div>
        </div>
        
    </div>
</div>

<div class="container-fluid contaback">
    <div class="card solution_card p-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mt-5">
                    <nav class="article_nav p-3">
                        <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">


                            <button class="nav-link article_tab_link mt-5 active" id="" onclick="getOurSolutions('all')"
                                data-bs-toggle="tab" data-bs-target="#" type="button" role="tab"
                                aria-controls="nav-home" aria-selected="true">All
                                items</button>
                            @forelse($ourSolutionsMaster as $key=>$categories_data)

                            <button class="nav-link article_tab_link" id="id_{{ $categories_data['id'] }}"
                                data-bs-toggle="tab" data-bs-target="#data_id_{{ $categories_data['id'] }}"
                                onclick="getOurSolutions('{{ $categories_data['id'] }}')" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">{{
                                $categories_data['solution_name'] }}</button>

                            @empty
                            <div class="alert alert-primary" role="alert">
                                No Data Found
                            </div>
                            @endforelse

                        </div>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="row d-flex gallery" id="gallary_data">
                           

                                <div class="row row-cols-1 row-cols-md-4 g-3">
                                    @forelse ($ourSolutions as $key=>$item)
                                    <div class="col-md-6 col-lg-4 col-sm-12">
                                        <div class="card article_card_container h-100">
                                            <img src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $item['image'] }}"
                                                class="card-img-top" alt="{{ $item['title'] }}">
                                            <div class="card-body">
                                                <h4 class="card-title fw-7">{{ $item['title'] }}</h4>
                                                <p class="text-align-justify">{{
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
@endif

<div class="container-fluid position-relative mb-5 bimg">
    <div class="container">
        <div class="row text-center ">
            <h2 id="fibovix">Take <span style="color:#6246E5; padding:5px;">Actions</span></h2>
        </div>

        <div class="row take_action_row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card shadow-lg action_circle d-flex align-items-center">
            <div class="card-body text-center">
                <span class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                    <span class="fs-2 tick_icon">✓</span>
                </span>
                <p class="card-text p-4 fs-5 fw-3 center">Find out what is important to you.</p>
            </div>
        </div>

        <div class="card shadow-lg action_square d-flex align-items-center">
            <div class="card-body text-center">
                <p class="card-text border-0 bg-light ">Together with your advisor, determine your
                    priorities for the now and your long-term goals. If you are in need of an advisor, we
                    can assist you in finding one.
                </p>
            </div>
        </div>
    </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3 center">Create a plan and a roadmap for yourself.
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

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 tick_circle py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3 center">Recognize your options and take action.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">Find out more about your program alternatives and
                            investment connection. Then, with the help of your adviser, implement your strategy.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3 center">Review & track your progress</p>
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
        <h2 id="fibovix">Additional <span style="color:#6246E5"> Solutions</span> </h2>
    </div>
    @foreach ($additionalSolutions as $item)
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card addi_sol_card">
            <img class="addi_sol_card_img"
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
@endif

<script>

    function getOurSolutions(our_solutions_master_id) {
    gallary_data").empty();
        $.ajax({
            url: "{{ route('list-our-solutions-ajax') }}",
            method: "POST",
            data: {
                "our_solutions_master_id": our_solutions_master_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                var path = '<?php echo Config:: get('DocumentConstant.OUR_SOLUTIONS_VIEW'); ?>';
            $("#gallary_data").empty();
            $.each(data, function (i, item) {
                $("#gallary_data").append(` 
                                <div class="col">
                                    <div class="card article_card_container h-100">
                                        <img src="`+ path + item.image + `"
                                            class="card-img-top" alt="`+ item.title + `">
                                        <div class="card-body">
                                            <h5 class="card-title">`+ item.title + `</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;"
                                                    class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;`+ item.short_description + `</small>
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


@include('website.layouts.footer')