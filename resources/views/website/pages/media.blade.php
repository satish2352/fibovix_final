@include('website.layouts.header')
{{-- start hero section --}}


<!-- Start contact-background -->
<section>
    <div class="container-fluid conact_page_img">
        <div class="banner_desktop" style="display:none;">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img class="image-fluid" src="{{ asset('website/images/medias.jpg') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="banner_mobile" style="display:none;">
            <div class="row">
                <div class="col-md-12 g-0">
                    <div class="logo image-fluid">
                        <img class="image-fluid" src="{{ asset('website/images/media_mobile.jpg') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End contact-background -->

<div class="container mt-5">
    @forelse($gallery_data as $key=>$gallery_data_all)
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="image-fluid">
                <img class="image-fluid"
                    src="{{ Config::get('DocumentConstant.GALLERY_VIEW') }}{{ $gallery_data_all['image'] }}"
                    width="100%">
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-primary" role="alert">
        No Data Found
    </div>
    @endforelse
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