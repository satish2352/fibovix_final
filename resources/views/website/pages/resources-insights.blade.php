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



    <div class="container">
        <div class="card p-3">
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


@include('website.layouts.footer')