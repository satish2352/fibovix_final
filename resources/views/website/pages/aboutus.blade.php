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
            
            <nav class="our_advi_nav p-3">
                <div class="nav nav-tabs our_advi_tab" id="nav-tab" role="tablist">
                    <button class="nav-link our_advi_tab_link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Why Fibovix</button>
                    <button class="nav-link our_advi_tab_link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Our Advisor</button>
                    <button class="nav-link our_advi_tab_link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Working together</button>
                </div>
            </nav>
            <h2 class="text-center p-3">Our <span style="color:#6246E5; padding:5px;">Advisor</span></h2>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <h1 class="p-3">Your goals are your <span style="color:#6246E5; padding:5px;">advisor’s </span>priority</h1>
                            <p class="why_fibovis_p">You probably expect your advisor to provide guidance developing your financial plan and investment approach. 
                                But with Merrill, your advisor is so much more – listening to your needs and understanding what matters most to you and your family. 
                                You and your advisor will work together one on one to help create a strategy that’s uniquely yours.. </p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <img class="goal_advisor_img" src="{{ asset('website/images/why_fibovix.png') }}" alt='Responsive 2-column layout'>
                        </div>
                    </div>

                    <!--  -->

                    <div class="container about_contact_form mt-5">
                        <h2 class="text-center p-3">New to <span style="color:#6246E5; padding:5px;">Fibovix</span> Connect with a Fibovix Advisor.</h2>
                        <p class="text-center">Alrady a client? Connect to your Fibovix Adviser</p>
                        <div class="row about_contact_row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p class="form_para mt-4">By providing your contact information above, you agree that a representative of Merrill, the Brokerage 
                                    affiliate of Bank of America Corporation, may contact you via telephone and/or email to 
                                    discuss and/or offer investment products and services that may be appropriate for you. You agree that 
                                    you are providing to us your consent for us to contact you regardless of any Do Not Call or Do Not 
                                    Email privacy choices you may have previously expressed until you revoke this consent, or up to 90 days. 
                                    You may revoke your consent at any time by notifying the Merrill representative.</p>
                            </div>
                            <div class="form_btn">
                            <button type="button" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </div>

                    <!--  -->

                    <div class="row anytime_section">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <h2 class="p-3">Everything you need <span style="color:#6246E5; padding:5px;">anytime, anywhere </span></h2>
                            <p class="anytime_section_p">You probably expect your advisor to provide guidance developing your financial plan and investment approach. 
                                But with Merrill, your advisor is so much more – listening to your needs and understanding what matters most to you and your family. 
                                You and your advisor will work together one on one to help create a strategy that’s uniquely yours.. </p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <img class="goal_advisor_img" src="{{ asset('website/images/WHY FIBOVIX/Group 1000003627.png') }}" alt='Responsive 2-column layout'>
                        </div>
                    </div>
                    
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="main">    
                        
                        <div class="sub_main">
                        <h4 class="our_advisor_h1">Guidance is just the beginning</h4>
                            <p class="our_advisor_p">You may think your advisor’s role is limited to your portfolio however we believe it goes beyond that. Working with a Merrill advisor can help turn your hopes and dreams into a personalized financial strategy. Your advisor is your resource, and your strategy is your personal financial road map.</p>
                        </div>
                        <img class="our_advisor_img" src="{{ asset('website/images/f1.png') }}" alt='Responsive 2-column layout'>
                    </div>

                    <!--  -->

                    <div class="container mt-5">
                        <h2 class="text-center p-3">5 Things an <span style="color:#6246E5; padding:5px;">Advisor</span> can help you do</h2>
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

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="card_container">
                                    <div class="card_header">
                                        <img src="{{ asset('website/images/advisor/tax_final.png') }}" alt="card-image" class="card_image" />
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
                                        <img src="{{ asset('website/images/advisor/tax.png') }}" alt="card-image" class="card_image" />
                                    </div>
                                    <div class="card_body">
                                        <p>Priortize your goals ans create a apersonalized finanacial strategy </p>
                                    </div>
                                    <div class="card_footer">
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div>

                    <!--  -->

                    <div class="container about_contact_form">
                        <h2 class="text-center p-3">Have an <span style="color:#6246E5; padding:5px;">Advisor</span> contact you.</h2>
                        <p class="text-center">Alrady a client? Connect to your Fibovix Adviser</p>
                        <div class="row about_contact_row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="name" class="leading-7 py-2 text-lg text-gray-900">Your Name</label> <br>
                                <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p class="form_para mt-4">By providing your contact information above, you agree that a representative of Merrill, the Brokerage 
                                    affiliate of Bank of America Corporation, may contact you via telephone and/or email to 
                                    discuss and/or offer investment products and services that may be appropriate for you. You agree that 
                                    you are providing to us your consent for us to contact you regardless of any Do Not Call or Do Not 
                                    Email privacy choices you may have previously expressed until you revoke this consent, or up to 90 days. 
                                    You may revoke your consent at any time by notifying the Merrill representative.</p>
                            </div>
                            <div class="form_btn">
                            <button type="button" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p><strong>This is some placeholder content the Contact tab's associated content.</strong>
                        Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling. You can use it with
                        tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                </div>
            </div>
        </div>
    </div>




@include('website.layouts.footer')