@include('website.layouts.header')
{{-- start hero section --}}

<div class="container-fluid">
    <!-- Content Section -->
    <div class="row">
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
                        <!-- Add your additional content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end hero section --}}

{{-- start whyfibovix section --}}


<div class="container-fluid">
    {{-- <img class="img-fluid" style="" src="{{asset('website/images/WHYFIBOVIX.png')}}"  alt=""> --}}
    <div class="row">
        <div class="backimg1 text-center py-5">
            <h2 id="fibovix">Why FIBO<span style="color: #1F2D87 ">VIX</span></h2>
            <div class="text-center">
                <p id="" class="px-5">Everything we do starts with our purpose. Re imagining the power of
                    investing. Connecting people for a better world. This is our purpose. This is Fibovix
                </p>
                <!-- Add your additional content here -->
            </div>
            <div class=" container">
                <div class="row ">

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow-lg" style="width: 20rem; border-radius:150px 150px 0 150px; height:15rem">
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
                        <div class="card shadow-lg" style="width: 20rem; border-radius:150px 150px 0 150px; height:15rem">
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
                        <div class="card shadow-lg" style="width: 20rem; border-radius:150px 150px 0 150px; height:15rem">
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
            <h2 id="fibovix"> <span style="color:#6246E5"> Services </span> </h2>
            <p>Finding the right opportunity. Conquering obstacles. Moving onward with the next phase. We provide a
                variety of options to assist you in achieving your objectives.
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
                <div class="card shadow" style="width: 20rem; border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagea.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Checking</h5>
                      <p class="card-text "> Accounts that offer discounts on regular banking services, relationship-based maintenance fee
                        exemptions, and tiered interest rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="width: 18rem; border-radius:10%; " >
                    <img src="{{ asset('website/images/Imageb.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title"> Savings</h5>
                      <p class="card-text">A range of savings options, such as CDs and money market accounts, to help you reach your
                        savings objectives.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="width: 18rem; border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagec.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Credit cards</h5>
                      <p class="card-text"> Accounts that offer discounts on regular banking services, relationship-based maintenance fee
                        exemptions, and tiered interest rates.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="width: 18rem; border-radius:10%; " >
                    <img src="{{ asset('website/images/Imagea.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Cash Management</h5>
                      <p class="card-text"> A collection of outstanding credit cards with cash back choices, travel incentives, and expanded
                        features.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="width: 18rem; border-radius:10%; " >
                    <img src="{{ asset('website/images/Imageb.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                      <h5 class="card-title">Rewards</h5>
                      <p class="card-text">  We express our gratitude to you by offering you exclusive advantages and prizes related to the
                        various ways you collaborate with us.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow" style="width: 18rem; border-radius:10%; " >
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
                <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">1</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Find out what is important to you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">2</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Create a plan and a roadmap for yourself.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">3</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Recognize your options and take action.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                    <div class="card-body ">
                        <span
                            class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                            <span class="fs-2">4</span>
                        </span>
                        <p class="card-text p-4 fs-5 fw-3">Review & track your progress</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">Together with your advisor, determine your
                            priorities for the now and your long-term goals. If you are in need of an advisor, we
                            can assist you in finding one.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-3 col-sm-1">
                <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">With assistance that genuinely supports you, we'll
                            develop a customized strategy that is all about you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light">Find out more about your program alternatives and
                            investment connection. Then, with the help of your adviser, implement your strategy by
                            choosing from a variety of possible possibilities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                    <div class="card-body ">
                        <p class="card-text border-0 bg-light ">You can monitor your progress and adjust your
                            strategy in response to both anticipated and unforeseen events in life.
                        </p>
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
                    <div class="card" style="width: 18rem; " >
                        <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTNQx6dAy_XJh-wLZwOd5qGL63kg_JOHHqe8QJOsg5-C9HYswaFOAvHAkOx-KLHxsSU" class="card-img-top" alt="...">
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
                    <div class="card" style="width: 18rem;" >
                        <img src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" class="card-img-top" alt="...">
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
                    <div class="card" style="width: 18rem;" >
                        <img src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" class="card-img-top" alt="...">
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

@include('website.layouts.footer')
