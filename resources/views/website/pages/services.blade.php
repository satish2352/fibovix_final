@include('website.layouts.header')
@if(count($all_services_details))
<section>
    <div class="container-fluid g-0">

        <div class="container-fluid">
            <div class="banner_desktop" style="display:none;">
                <div class="row g-0">
                    <div class="col-md-12 services-banner">
                        <img src="{{ asset('website/images/Services.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="banner_mobile" style="display:none;">
                <div class="row g-0">
                    <div class="col-md-12 services-banner">
                        <img src="{{ asset('website/images/services_mobile.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<!-- contaback -->
<div class="container-fluid" style="margin-bottom: -3rem;">
    <div class="card p-3">
        <div class="col-md-12">
            <div class="container">
            <div class="row">
                <!-- <div class="col-md-3 mt-5">
                    <nav class="article_nav p-3">
                        <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">
                            <button class="nav-link article_tab_link mt-5 active" id="todays_market_tab"
                                data-bs-toggle="tab" data-bs-target="#todays_market" onclick="getServices('all')"
                                type="button" role="tab" aria-controls="nav-home" aria-selected="true">All
                                items</button>
                            @forelse($all_services as $key=>$categories_data)

                            <button class="nav-link article_tab_link" id="id_{{ $categories_data['id'] }}"
                                data-bs-toggle="tab" data-bs-target="#data_id_{{ $categories_data['id'] }}"
                                onclick="getServices('{{ $categories_data['id'] }}')" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">{{
                                $categories_data['service_name'] }}</button>

                            @empty
                            <div class="alert alert-primary" role="alert">
                                No Data Found
                            </div>
                            @endforelse
                        </div>
                    </nav>
                </div> -->
                <div class="col-md-12">
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="row d-flex justify-content-center gallery" id="gallary_data">

                            <!-- row-cols-1 row-cols-md-4 g-3  -->
                            <div class="row d-flex justify-content-center">
                                @forelse ($all_services_details as $key=>$item)
                                <div class="col-md-6 col-lg-4 col-sm-12 d-flex justify-content-center">
                                    <div class="card article_card_container h-100">
                                        <img src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $item['image'] }}"
                                            class="card-img-top img-fluid" alt="{{ $item['title'] }}">
                                        <div class="card-body">
                                            <h4 class="card-title fw-7">{{ $item['title'] }}</h4>
                                            <p class="text-align-nojustify">{{
                                                $item['short_description'] }}</p>
                                        </div>
                                        <div class="card-footer article_card_footer">

                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="alert alert-primary" role="alert">
                                    No Data Found
                                </div>
                                @endforelse
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endif

<script>

    function getServices(our_services_master_id) {
        $("#gallary_data").empty();
        $.ajax({
            url: "{{ route('list-our-services-ajax') }}",
            method: "POST",
            data: {
                "our_services_master_id": our_services_master_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                var path = '<?php echo Config:: get('DocumentConstant.SERVICES_VIEW'); ?>';
            $("#gallary_data").empty();
            $.each(data, function (i, item) {
                $("#gallary_data").append(` 
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card article_card_container h-100">
                            <img src="` + path + item.image + `" class="card-img-top" alt="` + item.title + `">
                                <div class="card-body">
                                <h4 class="card-title fw-7">` + item.title + `</h4>
                                <p class="text-align-nojustify">` + item.short_description + `</p>
                            </div>
                            <div class="card-footer article_card_footer">
                            </div>
                        </div>
                    </div>
                `);
            });
        },
            error: function (data) { }
        });
}



</script>

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