@include('website.layouts.header')
{{-- start hero section --}}

<!-- Start contact-background -->
<section>
    <div class="container-fluid conact_page_img">

        <div class="banner_desktop" style="display:none;">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img src="{{ asset('website/images/articless.jpg') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="banner_mobile" style="display:none;">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img src="{{ asset('website/images/article_mobile.jpg') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- End contact-background -->


<div class="container insights_top">
    <div class="row resources_row">



        @foreach ($resourceInsights as $item)
        <div class="col-md-4 col-lg-4 col-sm-6">
            <!-- <a href="{{route('insight-details',$item['id'])}}"> -->
                <div class="card article_card_container h-100">
                    <img src="{{ Config::get('DocumentConstant.RESOURCES_AND_INSIGHTS_VIEW') }}{{ $item->image }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ strip_tags($item->title) }}</h5>
                    </div>
                    <div class="card-footer article_card_footer">
                        <small class="text-muted"><i style="color: orange;" class="fa fa-paper-plane"
                                aria-hidden="true"></i> &nbsp;{{ strip_tags($item->short_description) }}</small>
                    </div>
                </div>
            <!-- </a> -->
        </div>

        @endforeach


    </div>
</div>



<script>

    $(document).ready(() => {
        if (isMobileDevice()) {
            $(".banner_mobile").show();
        } else {
            
            $(".banner_desktop").show();
        }
    });

    function isMobileDevice() {
        if(window.innerWidth <= 800) {
            return true;    
        }
        return false;    
    }


</script>


@include('website.layouts.footer')