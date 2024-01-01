@include('website.layouts.header')
@if(count($all_services_details))
<section>
    <div class="container-fluid about_img">

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 mt-5 text-center">
                    <img src="{{ asset('website/images/Logo1.png') }}" height="100" alt="">
                    <h2 class="mt-3 about_img_head">OUR SOLUTIONS</h2>
                    <p class="mb-4 about_banner_para">You probably expect your advisor to provide guidance developing
                        your financial
                        plan and investment approach. But with FIBOVIX , your advisor is so much
                        more – listening to your needs and understanding what matters most to you and
                        your family. You and your advisor will work together one on one to help
                        create a strategy that’s uniquely yours.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container-fluid contaback">
    <div class="card p-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mt-5">
                    <nav class="article_nav p-3">
                        <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">
                            <button class="nav-link article_tab_link mt-5 active" id="todays_market_tab"
                                data-bs-toggle="tab" data-bs-target="#todays_market" onclick="getServices('all')" type="button" role="tab"
                                aria-controls="nav-home" aria-selected="true">All items</button>
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
                </div>
                <div class="col-md-9">
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="row d-flex gallery" id="gallary_data">
                         
                                <div class="row row-cols-1 row-cols-md-4 g-3">
                                    @forelse ($all_services_details as $key=>$item)
                                    <div class="col-md-6 col-lg-4 col-sm-12">
                                        <div class="card article_card_container h-100">
                                            <img src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $item['image'] }}"
                                                class="card-img-top" alt="{{ $item['title'] }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                            </div>
                                            <div class="card-footer article_card_footer">
                                                <small class="text-muted"><i style="color: orange;"
                                                        class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;{{
                                                    $item['short_description'] }}</small>
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
                                        <img src="`+ path + item.image + `"
                                            class="card-img-top" alt="`+ item.title + `">
                                        <div class="card-body">
                                            <h5 class="card-title">`+ item.title + `</h5>
                                        </div>
                                        <div class="card-footer article_card_footer">
                                            <small class="text-muted"><i style="color: orange;"
                                                    class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;`+ item.short_description + `</small>
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


@include('website.layouts.footer')