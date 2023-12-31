@include('website.layouts.header')
{{-- start hero section --}}

    <!-- Start contact-background -->
    <section>
            <div class="container-fluid about_img">
               
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 mt-5 text-center">
                                <img src="{{ asset('website/images/Logo1.png') }}" height="100" alt="">
                                <h2 class="mt-3 about_img_head">ARTICLES</h2>
                                <p class="mb-4 about_banner_para">You probably expect your advisor to provide guidance developing your financial 
                                    plan and investment approach. But with FIBOVIX , your advisor is so much 
                                    more – listening to your needs and understanding what matters most to you and 
                                    your family. You and your advisor will work together one on one to help 
                                    create a strategy that’s uniquely yours.</p>
                            </div>
                        </div>
                    </div>
                
            </div>
    </section>
    <!-- End contact-background -->


    <div class="container mt-2">
        <div class="row resources_row">



        @foreach ($resourceInsights as $item)
       <div class="col-md-4 col-lg-4 col-sm-6">
 <a href="{{route('insight-details',$item['id'])}}">
                <div class="card article_card_container h-100">
                    <img src="{{ Config::get('DocumentConstant.RESOURCES_AND_INSIGHTS_VIEW') }}{{ $item->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ strip_tags($item->title) }}</h5>
                    </div>
                    <div class="card-footer article_card_footer">
                        <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;{{ strip_tags($item->short_description) }}</small>
                    </div>
                </div>
</a>
            </div>

    @endforeach
         

        </div>
    </div>



@include('website.layouts.footer')