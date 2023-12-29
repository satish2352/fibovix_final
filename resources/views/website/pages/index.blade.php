@include('website.layouts.header')
{{-- start hero section --}}

    <div class="container-fluid">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">


                @foreach ($data_output_slider as $item)


                <div class="carousel-item active">
                    <img src="{{ asset('website/images/backimg1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="first_carousel"
                                    src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $item->image }}" alt="">
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <h2 style="color: #1F2D87;display:flex;">{{ strip_tags($item->title) }}</h2>
                                <p style="color: #808080;text-align: justify;">
                                    {{ strip_tags($item->desc) }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <h2 style="color: #1F2D87;display:flex;">WHY US</h2>
                            <p style="color: #808080;text-align: justify;">Fibovix's investment approach is informed by
                                three principles: we start by
                                understanding the client’s investment objectives; we seek the best risk-adjusted returns
                                within the scope of the mandate they give us; and we underpin our work with research, data,
                                and analytics. Research informs our investment decisions and product innovation. We research
                                major structural trends shaping the economy, markets, and asset prices.
                            </p>
                        </div>
                    </div>

                </div>

                @endforeach
                <!-- 

                <div class="carousel-item">
                    <img src="{{ asset('website/images/backimg1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('website/images/backimg1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                -->
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Content Section -->
        <!-- <div class="row">
            <img class="img1" src="{{ asset('website/images/backimg1.jpg') }}" alt="">
            <div class="container  content ">
                <div class="container col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-3" style="height: 250px; margin-left:150px">
                            <img class="img2" src="{{ asset('website/images/Logo1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row whyus ">
                        <div class="whyus">
                            <h1 id="whyus1">WHY US</h1>
                            <p id="content">Fibovix's investment approach is informed by three principles: we start by
                                understanding the client’s investment objectives; we seek the best risk-adjusted returns
                                within the scope of the mandate they give us; and we underpin our work with research, data,
                                and analytics. Research informs our investment decisions and product innovation. We research
                                major structural trends shaping the economy, markets, and asset prices.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

{{-- end hero section --}}

{{-- start whyfibovix section --}}


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
                        <p>Uncovering opportunities. Meeting challenges. Taking that next step forward. Whatever your goals, Merrill
                            and Bank of America offer a wide range of solutions to help you get there.
                        </p>

                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2">

                        </div>
                        
                    </div>
                </div>
                
                <div class="container section_center">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card shadow-lg"
                                style="width: 20rem; border-radius:150px 150px 0 150px; height:15rem">
                                <div class="card-body ">
                                    <img src="{{ asset('website/images/Group.png') }}" width="50px" alt="">
                                    <h5 id="hh">Needs</h5>
                                    <p>
                                        Your strategy is built on your objectives, concerns, and investment mindset.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card shadow-lg"
                                style="width: 20rem; border-radius:150px 150px 0 150px; height:15rem">
                                <div class="card-body ">
                                    <img src="{{ asset('website/images/Group1.png') }}" width="50px" alt="">
                                    <h5 id="hh">Advisor</h5>
                                    <p>
                                        Your adviser is dedicated to supporting you in achieving your objectives & will
                                        offer
                                        tailored guidance from the start.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card shadow-lg"
                                style="width: 20rem; border-radius:150px 150px 0 150px; height:15rem">
                                <div class="card-body ">
                                    <img src="{{ asset('website/images/Group2.png') }}" width="50px" alt="">
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

    {{-- end whyfibovix section --}}
    <!-- <div class="contaback text-center mx-auto"> -->


    {{-- start cards --}}

    <div class="container mt-2">
        <div class="row text-center">
            <h2 id="fibovix">Our <span style="color:#6246E5">Solutions </span> </h2>
            <div class="col-md-2 col-lg-2 col-sm-2">

            </div>
            <div class="col-md-8 col-lg-8 col-sm-8 d-flex justify-content-center">
            <p>Uncovering opportunities. Meeting challenges. Taking that next step forward. Whatever your goals, Merrill
                and Bank of America offer a wide range of solutions to help you get there.
            </p>

            </div>
            <div class="col-md-2 col-lg-2 col-sm-2">

            </div>
            
        </div>
    </div>

    <div class="container contaback">
        <div class="card solution_card p-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 mt-5">
                        <nav class="article_nav p-3">
                            <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">
                                <button class="nav-link article_tab_link mt-5 active" id="todays_market_tab" data-bs-toggle="tab" data-bs-target="#todays_market" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All items</button>
                                <button class="nav-link article_tab_link" id="invesment_trends_tab" data-bs-toggle="tab" data-bs-target="#invesment_trends" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Wealth Planning</button>
                                <button class="nav-link article_tab_link" id="portfolio_tab" data-bs-toggle="tab" data-bs-target="#portfolio" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Insurance</button>
                                <button class="nav-link article_tab_link" id="banking_tab" data-bs-toggle="tab" data-bs-target="#banking" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Banking</button>

                                <button class="nav-link article_tab_link" id="financial_planning_tab" data-bs-toggle="tab" data-bs-target="#financial_planning" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Retirement & savings</button>
                                <button class="nav-link article_tab_link" id="retirement_tab" data-bs-toggle="tab" data-bs-target="#retirement" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Investments</button>
                                <button class="nav-link article_tab_link mb-5" id="diverse_viewport_tab" data-bs-toggle="tab" data-bs-target="#diverse_viewport" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Lending</button>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="todays_market" role="tabpanel" aria-labelledby="todays_market_tab">

                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article4.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>

                            <div class="tab-pane fade" id="invesment_trends" role="tabpanel" aria-labelledby="invesment_trends_tab">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio_tab">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="banking" role="tabpanel" aria-labelledby="banking_tab_tab">

                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>

                            <div class="tab-pane fade" id="financial_planning" role="tabpanel" aria-labelledby="financial_planning_tab">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="retirement" role="tabpanel" aria-labelledby="retirement_tab">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="diverse_viewport" role="tabpanel" aria-labelledby="diverse_viewport_tab">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Looking toward a new era of growth</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Global elections and the markets: What to expect in 2024.</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card article_card_container h-100">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">How much is too much global debt?</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Todays Market</small>
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
    </div>

{{-- end cards --}}

{{-- start take action --}}
<div class="container-fluid position-relative mb-5 bimg">
    <div class="container">
        <div class="row text-center ">
            <h2 id="fibovix">Take <span style="color:#6246E5; padding:5px;">Actions</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Find out what is important to you.
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

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute tick_circle px-3 py-2 badge outerBadge border border-light rounded-circle">
                            <span class="fs-2 tick_icon">✓</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Create a plan and a roadmap for yourself.
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
                        <p class="card-text p-4 fs-5 fw-3">Recognize your options and take action.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light">Find out more about your program alternatives and
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
                        <p class="card-text p-4 fs-5 fw-3">Review & track your progress</p>
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

{{-- end take action --}}
{{-- additional solution --}}

<div class="container mb-5 ">
    <div class="row text-center">
        <h2 id="fibovix">Additional <span style="color:#6246E5"> Solutions</span> </h2>
    </div>

    {{-- end take action --}}
    {{-- additional solution --}}


    @foreach ($additionalSolutions as $item)
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card addi_sol_card">
            <img class="addi_sol_card_img"
                src="{{ Config::get('DocumentConstant.ADDITIONAL_SOLUTIONS_VIEW') }}{{ $item->image }}"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ strip_tags($item->title) }}</h5>
                <p class="card-text">{{ strip_tags($item->short_description) }}</p>
                <a href="" target="_blank">
                    <button class="btn btn-primary1 float-right">
                        Learn More
                    </button>
                </a>
            </div>

        </div>
    </div>
    @endforeach

    {{--
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card addi_sol_card">
            <img class="addi_sol_card_img"
                src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Investment consolidation</h5>
                <p class="card-text">Increase the diversity of your solutions to diversify your portfolio.</p>
                <a href="" target="_blank">
                    <button class="btn btn-primary1 float-right">
                        Learn More
                    </button>
                </a>
            </div>

        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card addi_sol_card">
            <img class="addi_sol_card_img"
                src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> Online Account view</h5>
                <p class="card-text">Combine your online banking and investment.</p>
                <br>
                <a href="" target="_blank">
                    <button class="btn btn-primary1 float-right">
                        Learn More
                    </button>
                </a>
            </div>

        </div>
    </div>
    --}}
</div>



</div>


{{-- end additional solution --}}
</div>

    {{-- start gallary --}}

            {{-- end additional solution --}}
        </div>



        {{-- --}}



        @include('website.layouts.footer')