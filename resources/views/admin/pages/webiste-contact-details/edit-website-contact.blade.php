@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Website Contact Details
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"> Update Website Contact Details</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                        @include('admin.layout.alert')
                            <form class="forms-sample" action="{{ route('update-website-contact') }}" method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="contact_one"> Enter Contact No 1<span
                                                    class="red-text">*</span></label>
                                            <input class="form-control mb-2" name="contact_one" id="contact_one"
                                                placeholder=" Enter Contact No 1"
                                                value="@if (old('contact_one')) {{ old('contact_one') }}@else{{ $website_contact_details[0]['contact_one'] }} @endif">
                                            @if ($errors->has('contact_one'))
                                                <span class="red-text"><?php echo $errors->first('contact_one', ':message'); ?></span>
                                            @endif

                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="contact_two"> Enter Contact No 2<span
                                                    class="red-text">*</span></label>

                                            <input class="form-control mb-2" name="contact_two" id="contact_two"
                                                placeholder=" Enter Contact No 2"
                                                value="@if (old('contact_two')) {{ old('contact_two') }}@else{{ $website_contact_details[0]['contact_two'] }} @endif">
                                            @if ($errors->has('contact_two'))
                                                <span class="red-text"><?php echo $errors->first('contact_two', ':message'); ?></span>
                                            @endif

                                        </div>
                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="mail_id"> Enter Mail Id<span class="red-text">*</span></label>
                                            <input class="form-control mb-2" name="mail_id" id="mail_id"
                                                placeholder=" Enter mail id"
                                                value="@if (old('mail_id')) {{ old('mail_id') }}@else{{ $website_contact_details[0]['mail_id'] }} @endif">
                                            @if ($errors->has('mail_id'))
                                                <span class="red-text"><?php echo $errors->first('mail_id', ':message'); ?></span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="facebook_link"> Enter Facebook Link<span
                                                    class="red-text">*</span></label>


                                            <input class="form-control mb-2" name="facebook_link" id="facebook_link"
                                                placeholder="Enter Facebook Link"
                                                value="@if (old('facebook_link')) {{ old('facebook_link') }}@else{{ $website_contact_details[0]['facebook_link'] }} @endif">
                                            @if ($errors->has('facebook_link'))
                                                <span class="red-text"><?php echo $errors->first('facebook_link', ':message'); ?></span>
                                            @endif


                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="instagram_link">Instagram Link<span class="red-text">*</span></label>

                                            <input class="form-control mb-2" name="instagram_link" id="instagram_link"
                                                placeholder=" Instagram Link"
                                                value="@if (old('instagram_link')) {{ old('instagram_link') }}@else{{ $website_contact_details[0]['instagram_link'] }} @endif">
                                            @if ($errors->has('instagram_link'))
                                                <span class="red-text"><?php echo $errors->first('instagram_link', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id">
                                            <label for="long_description">Enter address</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                                <textarea class="form-control" name="address" id="address" placeholder="Enter address">@if (old('address')){{ old('address') }}@else{{ $website_contact_details[0]['address'] }}@endif</textarea>
                                            </span>
                                            @if ($errors->has('address'))
                                                <span class="red-text"><?php echo $errors->first('address', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Update
                                        </button>


                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
