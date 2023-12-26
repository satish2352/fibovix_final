@include('website.layouts.header')
{{-- start hero section --}}

<div class="container-fluid">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('website/images/backimg1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="row">
                    <div class="col-md-6">
                    <img class="first_carousel" src="{{ asset('website/images/Logo1.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                    
                    </div>
                    <div class="col-md-6">
                        <h2 style="color: #1F2D87;display:flex;">WHY US</h2>
                        <p style="color: #808080;text-align: justify;">Fibovix's investment approach is informed by three principles: we start by
                            understanding the client’s investment objectives; we seek the best risk-adjusted returns
                            within the scope of the mandate they give us; and we underpin our work with research, data,
                            and analytics. Research informs our investment decisions and product innovation. We research
                            major structural trends shaping the economy, markets, and asset prices.
                        </p>
                    </div>
                </div> 
                
            </div>
        </div>
        <!-- <div class="carousel-item">
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
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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
    {{-- <img class="img-fluid" style="" src="{{asset('website/images/WHYFIBOVIX.png')}}"  alt=""> --}}
    <div class="row">
        <div class="backimg1 text-center py-5">
            <h2 id="fibovix">Why FIBO<span>VIX</span></h2>
            <div class="text-center">
                <p id="" class="px-5">Everything we do starts with our purpose. Re imagining the power of
                    investing. Connecting people for a better world. This is our purpose. This is Fibovix
                </p>
                <!-- Add your additional content here -->
            </div>
            <div class="container section_center">
                <div class="row ">

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow-lg whyfibocards" >
                            <div class="card-body ">
                                <img src="{{ asset('website/images/Group.png') }}" width="50px" alt="">
                                <h5 id="hh">Needs</h5>
                                <p>
                                    Your strategy is built on your objectives, concerns, and investment mindset.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow-lg whyfibocards" >
                            <div class="card-body ">
                                <img src="{{ asset('website/images/Group1.png') }}" width="50px" alt="">
                                <h5 id="hh">Advisor</h5>
                                <p>
                                    Your adviser is dedicated to supporting you in achieving your objectives & will offer
                                    tailored guidance from the start.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow-lg whyfibocards" >
                            <div class="card-body ">
                                <img src="{{ asset('website/images/Group2.png') }}" width="50px" alt="">
                                <h5 id="hh">Strategy</h5>
                                <p>Your adviser can recommend tax-minimization techniques as part of your overall investing
                                    strategy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- end whyfibovix section --}}


    {{-- start cards --}}

    <div class="container">
        <div class="row text-center">
            <h2 id="fibovix">Our <span style="color:#6246E5">Solutions </span> </h2>
            <p>Uncovering opportunities. Meeting challenges. Taking that next step forward. Whatever your goals, Merrill and Bank of America offer a wide range of solutions to help you get there.
            </p>
        </div>
        <div class="row text-center">
            <div id="rcorners3">
                <!-- Your container content goes here -->
                <nav class="navbar1 navbar-expand-lg navbar-light bg-transperant ">

                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Banking </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Investments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Retirement & savings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Insurance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Wealth Planning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All items </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="contaback text-center mx-auto">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagea.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Checking</h5>
                      <p class="card-text "> Accounts that offer discounts on regular banking services, relationship-based maintenance fee
                        exemptions, and tiered interest rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="border-radius:10%; " >
                    <img src="{{ asset('website/images/Imageb.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title"> Savings</h5>
                      <p class="card-text">A range of savings options, such as CDs and money market accounts, to help you reach your
                        savings objectives.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagec.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Credit cards</h5>
                      <p class="card-text"> Accounts that offer discounts on regular banking services, relationship-based maintenance fee
                        exemptions, and tiered interest rates.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagea.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Cash Management</h5>
                      <p class="card-text"> A collection of outstanding credit cards with cash back choices, travel incentives, and expanded
                        features.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="border-radius:10%; " >
                    <img src="{{ asset('website/images/Imageb.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Rewards</h5>
                      <p class="card-text">  We express our gratitude to you by offering you exclusive advantages and prizes related to the
                        various ways you collaborate with us.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagea.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Mobile and online access</h5>
                      <p class="card-text">  A range of savings options, such as CDs and money market accounts, to help you reach your
                        savings objectives.</p>
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
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">1</span>
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

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">2</span>
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

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">3</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Recognize your options and take action.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg action_square">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light">Find out more about your program alternatives and
                            investment connection. Then, with the help of your adviser, implement your strategy by
                            choosing from a variety of possible possibilities.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <div class="card shadow-lg action_circle">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">4</span>
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
    {{-- additional solution  --}}

    <div class="container mb-5 ">
        <div class="row text-center">
            <h2 id="fibovix">Additional <span style="color:#6246E5"> Solutions</span> </h2>
        </div>
   
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card addi_sol_card">
                        <img class="addi_sol_card_img" src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTNQx6dAy_XJh-wLZwOd5qGL63kg_JOHHqe8QJOsg5-C9HYswaFOAvHAkOx-KLHxsSU" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Diversify your investment</h5>
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
                        <img class="addi_sol_card_img" src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" class="card-img-top" alt="...">
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
                        <img class="addi_sol_card_img" src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" class="card-img-top" alt="...">
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
            </div>
            

     
    </div>


    {{-- end additional solution --}}
</div>

<div class="horizontal">
   	<div class="fvertical vertical1">
   </div>
   <div class="fvertical vertical2">
      <img src="{{ asset('website/images/f1.png') }}">
      <img src="{{ asset('website/images/f2.png') }}">
   </div>
   <div class="fvertical vertical3">
    <div class="fcard">
        <div class="fcard_about">
            <h4>Founder</h4>
            <h2>Our Founder</h2>
            <p>fibovix</p>
        </div>
    </div>
      <img src="{{ asset('website/images/f3.png') }}">
   </div>
   <div class="fvertical vertical4">
     
   </div>
</div>

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
                        <img src="{{ asset('website/images/why_fibovix.png') }}" width="450" height="300" alt='Responsive 2-column layout'>
                    </div>
                </div>
			</div>

			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="main">    
                    
                    <div class="sub_main">
                    <h4 class="our_advisor_h1">Guidance is just the beginning</h4>
                        <p class="our_advisor_p">You may think your advisor’s role is limited to your portfolio however we believe it goes beyond that. Working with a Merrill advisor can help turn your hopes and dreams into a personalized financial strategy. Your advisor is your resource, and your strategy is your personal financial road map.</p>
                    </div>
                    <img class="our_advisor_img" src="{{ asset('website/images/f1.png') }}" width="450" height="300" alt='Responsive 2-column layout'>
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
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label> <br>
                            <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label> <br>
                            <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label> <br>
                            <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label> <br>
                            <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label> <br>
                            <input type="text" id="name" name="name" required="" class="about_contact_input w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label> <br>
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
