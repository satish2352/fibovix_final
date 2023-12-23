@extends('website.layout.master')

@section('content')
    <div class="stricky-header stricked-menu main-menu main-header-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
        <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
        <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
        <div class="container text-center">
            <h2 class="page-header__title">Student Result</h2><!-- /.page-title -->
            <ul class="page-header__breadcrumb list-unstyled">
                <li><a href="index-2.html">Home</a></li>
                <li><span>Student Result</span></li>
            </ul><!-- /.page-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
     <!-- course-details-start -->
     <section class="course-details">
        <div class="container-fluid">
            <div class="section-title wow fadeInUp text-center pt-5" data-wow-delay="100ms">
                <h5 class="section-title__tagline">
                    Result
                    <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                        <g clip-path="url(#clip0_324_36194)">
                            <path
                                d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                            <path
                                d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                            <path
                                d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                            <path
                                d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                        </g>
                    </svg>
                </h5>
                <h2 class="section-title__title">Student Result</h2>
            </div><!-- section-title -->
            <div class="row">
                <div class="col-xl-12">
                   
                   
                    <div class="course-details__tabs tabs-box">
                        <ul class="course-details__tabs__lists tab-buttons list-unstyled">
                            <li data-tab="#overview" class="tab-btn active-btn"><span>JEE - ADVANCED 2023 ACHIEVERS</span></li>
                            <li data-tab="#curriculum" class="tab-btn"><span>JEE - MAINS 2023 ACHIEVERS</span></li>
                            <li data-tab="#reviews" class="tab-btn"><span>MHT - CET 2023 ACHIEVERS</span></li>
                            <li data-tab="#instructor" class="tab-btn "><span>NEET 2023 ACHIEVERS 2023 ACHIEVERS</span></li>
                        </ul><!-- tab-title -->
                        <div class="tabs-content">
                            <div class="tab fadeInUp animated" id="overview">
                                <section class="team-one" style="background-image: url({{ asset('website/assets/images/shapes/team-bg-1.png')}});">
                                    <div class="container">
                                        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                                        </div><!-- section-title -->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/team-1-1.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">MANISH AHIRE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">AIR 1167</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/team-1-2.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">GAURAV KADAM</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">AIR 1326</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/team-1-3.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">RUSHIKESH DUSANE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">AIR 1684</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/team-1-4.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">SOHAN SARKATE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">AIR 2782</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div><!-- tab-content-overview -->
                            <div class="tab fadeInUp animated" id="curriculum">
                                <section class="team-one" style="background-image: url({{ asset('website/assets/images/shapes/team-bg-1.png')}});">
                                    <div class="container">
                                        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                                        </div><!-- section-title -->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/JEEMAINS/1.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">SAKSHI MALI</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">98.67%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/JEEMAINS/2.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">RUSHIKESH DUSANE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">98.49</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/JEEMAINS/3.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">SOHAN SARKATE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">94.04</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/JEEMAINS/4.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">MAITRE MAHAJAN</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">95.56%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/JEEMAINS/5.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">PRATIK SAWANT</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">92.94%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div><!-- tab-content-curriculum -->
                            <div class="tab fadeInUp animated" id="reviews">
                                <section class="team-one" style="background-image: url({{ asset('website/assets/images/shapes/team-bg-1.png')}});">
                                    <div class="container">
                                        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                                        </div><!-- section-title -->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/1.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">PRACHI MOKASHI</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">99.93%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/2.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">PRERNA BHARAMBE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">99.86%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/3.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">SALONI GOSAVI</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">99.58%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/4.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">KAUSHAL ALGAT</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">99.53%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/5.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">RUSHIKESH UKHADE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">99.20%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/6.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">NAMEERA PINJARI</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">98.92%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/7.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">SHARVARI VAIBHAV DEO</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">98.14%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/8.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">ROHAN NEMADE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">98.08%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/9.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">VEDASHREE NAIGAONKAR</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">98.86%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/MHT - CET 2023/10.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">DEEPALI SHINDE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">97.96%</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div><!-- tab-content-reviews -->
                            <div class="tab active-tab fadeInUp animated" id="instructor">
                                <section class="team-one" style="background-image: url({{ asset('website/assets/images/shapes/team-bg-1.png')}});">
                                    <div class="container">
                                        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                                        </div><!-- section-title -->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/1.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">DURVESH VALVI</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">GS MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/2.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">HEMANT KALE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">TN MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/3.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">VAIBHAV DEORE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">BJ MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/4.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">SHRUTIKA CHAVAN</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">BJ MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/5.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">LEELA KRISHNA</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">BJ MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/6.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">PRATIK GIRASE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">AIMS NAGPUR</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/7.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">PRIYANKA SABLE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">GMC JALGOAN</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/8.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">MAHIMA CHAUDHARI</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">GMC GONDIYA</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/9.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">HRITIK DIGHE</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">LT SION MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                                <div class="team-one__item">
                                                    <div class="team-one__image">
                                                        <img src="{{ asset('website/assets/images/team/NEET-ACHIEVERS/10.jpg')}}" alt="eduact">
                                                    </div><!-- /.team-image -->
                                                    <div class="team-one__content">
                                                        <h3 class="team-one__title">
                                                            <a href="team-details.html">HARSHAL CHAVAN</a>
                                                        </h3><!-- /.team-name -->
                                                        <span class="team-one__designation">SION MEDICAL</span><!-- /.team-designation -->
                                                    </div><!-- /.team-content -->
                                                </div><!-- /.team-one -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div><!-- tab-content-instructor -->
                        </div><!-- tab-content -->
                    </div><!-- tabs -->
                </div>
              
            </div>
        </div>
    </section>
    <!-- course-details-end -->
@endsection
