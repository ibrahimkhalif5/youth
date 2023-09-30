@extends('frontend.layouts.application')
@extends('frontend.layouts.script')
@section('content')


<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url({{asset('front/images/banner.jpg')}}); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Job Placement Program</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a> /</li>

                </ul>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        <span>&#10004;</span> {{ session('success') }}
    </div>
    @endif
    <style>
    .toggle-fields {
        display: none;
    }
    </style>
    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-4 py-5 bg-red text-white text-center">
                    <div class=" ">
                        <div class="card-body">
                            <img src="{{asset('front/images/mdr.png')}}" style="width:30%">
                            <h2 class="py-3">Mandera county Job Plecement program</h2>
                            <hr>



                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4 " style="color:red;"><b><i>Enter Your Details as it appear on your
                                Certificates</i></b>
                    </h4>
                    <form class="" method="POST" action="{{url('user/job-placement')}}" id="postComment"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="fullname" name="fullname" value="{{ Auth::user()->name }}"
                                    class="form-control" type="text" required="required" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::user()->email }}" onblur="validateEmail()" readonly>
                                <span id="emailError" style="color: red; display: none;">Invalid email address</span>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <select id="gender" name="gender" class="form-control">
                                    <option selected> Gender...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="mobile" name="mobile" placeholder="Mobile number....." class="form-control"
                                    required="required" type="number" pattern="[0-9]{10}">
                                <div id="mobile-number-error" class="error-message"></div>
                                @error('mobile')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="idno" name="idno" placeholder="Id number..." class="form-control"
                                    required="required" type="number" pattern="[0-9]{8}">
                                <div id="id-number-error" class="error-message"></div>
                                @error('idno')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <lebel class="pb-4">Birth Date</lebel>
                                <input id="dob" name="dob" class="form-control" type="date">

                            </div>


                            <div class="form-group col-md-6">
                                <input id="emergency" name="emergency" placeholder="Parent Fullname..."
                                    class="form-control" type="text" required="required"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter your parent Name Mother/Father*
                                            </i></b>
                                    </h4>
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="emobile" name="emobile" placeholder="Parent phone number..."
                                    class="form-control" required="required" type="number" pattern="[0-9]{10}"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter your parent phone number*
                                            </i></b>
                                    </h4>
                                </small>
                                @error('emobile')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">

                                <select id="pwd" name="pwd" class="form-control">
                                    <option selected>Disability ...</option>
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">

                                <select id="passport" name="passport" class="form-control">
                                    <option selected>Passport...</option>
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6" id="passportField" style="display: none;">

                                <input id="passportNumber" name="passportNumber" placeholder="Passport number..."
                                    class="form-control" type="text">

                            </div>
                            <div class="form-group col-md-6" id="dateField" style="display: none;">
                                <lebel class="pb-4">Expiry date</lebel>
                                <input id="date" name="passdate" placeholder="passport Expiry date."
                                    class="form-control" type="date">

                            </div>
                            <div class="form-group col-md-6">

                                <select id="education" class="form-control" name="education">
                                    <option selected>Highest Education Level ...</option>
                                    <option value="postgraduate">Masters Degree</option>
                                    <option value="undergraduate">Bachelors Degree</option>
                                    <option value="college">College</option>
                                    <option value="vocational">Vocational</option>
                                    <option value="kcse">Secondary</option>
                                    <option value="kcpe">Primary</option>
                                    <option value="madarasa">Madarasa</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="grade" name="grade" placeholder="Highest education grade.... "
                                    class="form-control" type="text" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="qualification" name="qualification" placeholder="Field of Study"
                                    class="form-control" type="text" required="required"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter your Field of Study example
                                                Nurse,Teacher etc*
                                            </i></b>
                                    </h4>
                                </small>
                            </div>

                            <div class="form-group col-md-6">

                                <select id="subcounty" class="form-control" name="subcounty" onchange="populateWards()">
                                    <option selected>Select Subcounty ...</option>
                                    <option value="mandera">Mandera East</option>
                                    <option value="rhamu">Rhamu</option>
                                    <option value="elwak">Elwak</option>
                                    <option value="banisa">Banisa</option>
                                    <option value="takaba">Takaba</option>
                                    <option value="lafey">Lafey</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">

                                <select id="ward" name="ward" class="form-control">
                                    <option selected>Select Ward ...</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="experience" class="form-control" name="experience">
                                    <option selected>Years of experience ...</option>
                                    <option value="0">None</option>
                                    <option value="1">1-2 years</option>
                                    <option value="3">3 years</option>
                                    <option value="4">4-6 years</option>
                                    <option value="5">above 7 years</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 toggle-fields">
                                <input id="employer" name="employer" placeholder="Employer Name.." class="form-control"
                                    type="text"> <small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter your recent Employer Name*
                                            </i></b>
                                    </h4>
                                </small>
                            </div>
                            <div class="form-group col-md-6 toggle-fields">
                                <input id="job" name="job" placeholder="Position held.." class="form-control"
                                    type="text">
                                <small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter your recent job
                                                designation*</i></b>
                                    </h4>
                                </small>
                            </div>
                            <div class="form-group col-md-12 toggle-fields">
                                <label for="work">Duties & Responsibilities</label>
                                <textarea id="work" name="work" cols="40" rows="5" class="form-control"></textarea>
                                <h4 class="pb-4 " style="color:green;"><b><i>*Enter your recent duties &
                                            Responsibilities*
                                        </i></b>
                                </h4>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="photo">Passport photo:</label>
                                <input id="image" name="image" class="form-control" type="file"
                                    accept=".png, .jpeg, .jpg, image/*"> <small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Upload your photo(Image only)
                                                *</i></b>
                                    </h4>
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">Id Copy:</label>
                                <input id="id_copy" name="id_copy" class="form-control" type="file"
                                    accept=".png, .jpeg, .jpg, image/*"> <small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Upload your ID Copy(Image only)
                                                *</i></b>
                                    </h4>
                                </small>
                            </div>

                        </div>


                        <div class="form-row">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection