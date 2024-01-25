@include('website.layouts.header')

<style>
    .group_img {
        margin-top: 30px;
    }

    .career_form {
        align-items: center;
        margin-left: 200px;
        margin-right: 200px;
        background-color: white;
        border: solid 2px white;
        position: relative;
        top: -160px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: -132px;
    }

    .data {
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
    }

    .row {
        margin-right: 5px;
        margin-left: 0;
    }

    .form-label {
        margin-top: 10px;
    }

    /* Add media queries for responsiveness */
    @media (max-width: 768px) {
        .career_form {
            margin-top: 10rem;
            margin-left: 10px;
            margin-right: 10px;
        }
    }
</style>



<div class="container-fluid group_img g-0">
    <div class="banner_desktop" style="display:none;">
        <div class="row g-0">
            <div class="col-12">
                <img src="{{ asset('website/images/career_desk.jpg') }}" alt="background" class="img-fluid">
            </div>
        </div>
    </div>


    <div class="banner_mobile" style="display:none;">
        <div class="row g-0">
            <div class="col-12">
                <img src="{{ asset('website/images/career_mobile.jpg') }}" alt="background" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container custom-container mt-3 careere_img_bottom">

    <div id="banner_desktop_new" style="display:none;">
        <div class="row g-0">
            <div class="col-12">
                <img src="{{ asset('website/images/CAREER.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
    </div>

    <div id="banner_mobile_new" style="display:none;">
        <div class="row g-0">
            <div class="col-12">
                <img src="{{ asset('website/images/CAREER_mobile.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-align-center">
            <button type="button" class="btn banner_btn career_btn" data-bs-toggle="modal" data-bs-target="#careerBackdrop">Explore Career</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">

        </div>
    </div>


    <!-- <div class="career_form">
        @if (Session::get('status') == 'succesed')

        <div class="col-12 grid-margin">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> {{ Session::get('msg') }}
            </div>
        </div>

        @endif

        @if (Session::get('status') == 'errors')
        <div class="col-12 grid-margin">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Danger!</strong> {!! session('msg') !!}
            </div>
        </div>
        @endif
        <form method="POST" action="{{ route('add-career') }}" enctype="multipart/form-data">
            @csrf
            <div class="container data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="position" class="form-label">Choose Position</label>
                        <select class="form-select" id="position" name="position" required>
                            <option value="" selected disabled>Select Position</option>
                            <option value="developer">Developer</option>
                            <option value="designer">Designer</option>
                            <option value="manager">Manager</option>
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="resume" class="form-label">Resume/CV</label>
                        <input type="file" class="form-control" id="resume" name="resume" accept=".pdf, .doc, .docx"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                </div>
                <center>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" style="margin-top: 10px; background-color:#1F2D87; color:white"
                                class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </center>
            </div>
        </form>
        
    </div> -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (Session:: has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
    }
    @endif




    $(document).ready(() => {
        if (isMobileDevice()) {
            $(".banner_mobile").show();
            $("#banner_mobile_new").show();
        } else {
           
            $(".banner_desktop").show();
            $("#banner_desktop_new").show();
        }
    });

    function isMobileDevice() {
        if(window.innerWidth <= 800) {
            return true;    
        }
        return false;    
    }



</script>

<!-- Modal 1 -->
<div class="modal fade" id="careerBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Career Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
            @if (Session::get('status') == 'succesed')

            <div class="col-12 grid-margin">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Success!</strong> {{ Session::get('msg') }}
                </div>
            </div>

            @endif

            @if (Session::get('status') == 'errors')
            <div class="col-12 grid-margin">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Danger!</strong> {!! session('msg') !!}
                </div>
            </div>
            @endif
            <form method="POST" action="{{ route('add-career') }}" enctype="multipart/form-data">
                @csrf
                <div class="container data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
                        </div>
                        <div class="col-md-6">
                            <label for="position" class="form-label">Choose Position</label>
                            <select class="form-select" id="position" name="position" required>
                                <option value="" selected disabled>Select Position</option>
                                <option value="developer">Developer</option>
                                <option value="designer">Designer</option>
                                <option value="manager">Manager</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="resume" class="form-label">Resume/CV</label>
                            <input type="file" class="form-control" id="resume" name="resume" accept=".pdf, .doc, .docx"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                    </div>

                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" style="background-color:#1F2D87; color:white"
                                    class="btn btn-primary">Submit</button>
                            <!-- <button type="button" class="btn investor_btn">Submit</button> -->
                        </div>
            </form>
        </div>
    </div>
</div>



@include('website.layouts.footer')