@include('website.layouts.header')
{{-- start hero section --}}


    <div class="container">
        <div class="card p-3">
            
            <nav class="article_nav p-3">
                <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">
                    <button class="nav-link article_tab_link active" id="todays_market_tab" data-bs-toggle="tab" data-bs-target="#todays_market" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Today's market</button>
                    <button class="nav-link article_tab_link" id="invesment_trends_tab" data-bs-toggle="tab" data-bs-target="#invesment_trends" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Invesment trends</button>
                    <button class="nav-link article_tab_link" id="portfolio_tab" data-bs-toggle="tab" data-bs-target="#portfolio" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Portfolio strategies</button>

                    <button class="nav-link article_tab_link" id="financial_planning_tab" data-bs-toggle="tab" data-bs-target="#financial_planning" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Financial planning</button>
                    <button class="nav-link article_tab_link" id="retirement_tab" data-bs-toggle="tab" data-bs-target="#retirement" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Retirement</button>
                    <button class="nav-link article_tab_link" id="diverse_viewport_tab" data-bs-toggle="tab" data-bs-target="#diverse_viewport" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Diverse viewport</button>
                </div>
            </nav>
            
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade active show" id="todays_market" role="tabpanel" aria-labelledby="todays_market_tab">

                    <!-- <div class="container mt-4">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/resource/article1.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/resource/article2.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/resource/article3.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/resource/article4.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/resource/article5.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div> -->

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                            <img src="{{ asset('website/images/resource/article1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer article_card_footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="{{ asset('website/images/resource/article2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer article_card_footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="{{ asset('website/images/resource/article3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer article_card_footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                    </div>
                        
                </div>

                <div class="tab-pane fade" id="invesment_trends" role="tabpanel" aria-labelledby="invesment_trends_tab">
                    <div class="container mt-4">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div>
                </div>

                <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio_tab">
                    <div class="container mt-4">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div>

                </div>

                <div class="tab-pane fade" id="financial_planning" role="tabpanel" aria-labelledby="financial_planning_tab">
                    <div class="container mt-4">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div>

                </div>

                <div class="tab-pane fade" id="retirement" role="tabpanel" aria-labelledby="retirement_tab">
                    <div class="container mt-4">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div>

                </div>

                <div class="tab-pane fade" id="diverse_viewport" role="tabpanel" aria-labelledby="diverse_viewport_tab">
                    <div class="container mt-4">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/starg.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/market.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/goals.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="article_card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body article_card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
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