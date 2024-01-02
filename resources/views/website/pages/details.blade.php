@include('website.layouts.header')
{{-- start hero section --}}


<div class="container">

<div class="row mb-2">
            <div class="col-md-12">
                <div class="image-fluid">
                    <img class="image-fluid"
                        src="{{ Config::get('DocumentConstant.RESOURCES_AND_INSIGHTS_VIEW') }}{{ $insights_details->image }}" width="100%">
                </div>
            </div>
        </div>

    <div class="row set_details_pg_row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <h1 class="text-center">{{ $insights_details->title }}</h1>
            <p class="text-align-justify">{{ $insights_details->long_description }}</p>

        </div>
    </div>
</div>





@include('website.layouts.footer')