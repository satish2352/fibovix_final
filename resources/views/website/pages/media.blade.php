@include('website.layouts.header')
{{-- start hero section --}}


    <!-- Start contact-background -->
    <section>
        <div class="container-fluid conact_page_img">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img class="image-fluid" src="{{ asset('website/images/media/media_banner.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-background -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-fluid">
                    <img class="image-fluid" src="{{ asset('website/images/media/media1.png') }}" width="100%">
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid media_bg_img">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 mt-4">
                    <div class="image-fluid">
                        <img class="image-fluid" src="{{ asset('website/images/media/media2.png') }}" width="100%">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-4">
                    <div class="image-fluid">
                        <img class="image-fluid" src="{{ asset('website/images/media/media3.png') }}" width="100%">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-4">
                    <div class="image-fluid">
                        <img class="image-fluid" src="{{ asset('website/images/media/media4.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>



@include('website.layouts.footer')