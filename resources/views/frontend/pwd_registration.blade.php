@extends('frontend.layouts.front')
@extends('frontend.layouts.script')
@section('content')


<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(front/images/slider_graduate.jpg); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>University Placement Program</h1>
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

    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-success text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="front/images/mdr1.png" style="width:30%">
                            <h2 class="py-3">Mandera county University Plecement program</h2>
                            <hr>
                            <h2><u>Requirements</u></h2>
                            <p class="text-red">COPY OF KCSE RESULT SLIP</p>
                            <p class="text-red">COPY OF PASSPORT</p>
                            <p class="text-red">COPY OF LEAVING CERTIFICATE</p>
                            <p class="text-red">COPY OF NATIONAL ID</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4">Enter Your Details as it appear on your Certificate</h4>
                    <form method="POST" action="{{url('university-placement')}}" id="postComment"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="fullname" name="fullname" placeholder="Applicant Name" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email"
                                    onblur="validateEmail()">
                                <span id="emailError" style="color: red; display: none;">Invalid email address</span>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="mobile" name="mobile" placeholder="mobile number." class="form-control"
                                    required="required" type="number" pattern="[0-9]{10}">
                                @error('mobile')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="idno" name="idno" placeholder="Id number." class="form-control"
                                    required="required" type="number" pattern="[0-9]{8}">
                                <div id="id-number-error" class="error-message"></div>
                                @error('idno')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="school" name="school" placeholder="school Name" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="kcse" name="kcse" placeholder="year completed." class="form-control"
                                    required="required" type="number">


                            </div>
                            <div class="form-group col-md-6">

                                <select id="grade" name="grade" class="form-control">
                                    <option selected>your grade ...</option>
                                    <option value="A PLAIN"> A PLAIN</option>
                                    <option value="A MINUS"> A MINUS</option>
                                    <option value="B PLUS"> B PLUS</option>
                                    <option value="B PLAIN"> B PLAIN</option>
                                    <option value="B MINUS"> B MINUS</option>
                                    <option value="C PLUS"> C PLUS</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="emergency" name="emergency" placeholder="Emergency contact person"
                                    class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="emobile" name="emobile" placeholder="Contact number." class="form-control"
                                    required="required" type="number" pattern="[0-9]{10}">
                                @error('emobile')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">

                                <select id="pwd" name="pwd" class="form-control">
                                    <option selected>disability ...</option>
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

                                <input id="passportNumber" name="passportNumber" placeholder="passport number."
                                    class="form-control" required="required" type="text" pattern="[0-9]{9}">
                                @error('passportNumber')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6" id="dateField" style="display: none;">
                                <lebel class="pb-4">Expiry date</lebel>
                                <input id="date" name="passdate" placeholder="passport number." class="form-control"
                                    required="required" type="date">

                            </div>

                            <div class="form-group col-md-6">

                                <select id="subcounty" class="form-control" name="subcounty" onchange="populateWards()">
                                    <option selected>subcounty ...</option>
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
                                    <option selected>ward ...</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">

                                <select id="inputState" class="form-control">
                                    <option selected>select course ...</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="dentist">Dentistry</option>
                                    <option value="Nursing and Midwifery">Nursing and Midwifery</option>
                                    <option value="Radiology">Radiology</option>
                                    <option value="Veterinary Medicine">Veterinary Medicine</option>
                                    <option value="Computer Engineering">Computer Engineering</option>
                                    <option value="Bio Engineering">Bio Engineering</option>
                                    <option value="Electrical-Electronic Engineering">Electrical-Electronic
                                        Engineering</option>
                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                    <option value="Agricultural Engineering">Agricultural Engineering
                                    </option>
                                    <option value="Agronomy">Agronomy </option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Structural Engineering">Structural Engineering</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Architecture">Architecture </option>
                                    <option value="Survey Engineering">Survey Engineering</option>
                                    <option value="Petroleum and Mining Engineering">Petroleum and Mining
                                        Engineering</option>
                                    <option value="Geology Engineering">Geology Engineering</option>
                                    <option value="Environmental Science">Environmental Science </option>

                                    <option value="Data Science">Data Science </option>
                                    <option value="Commerce,Accounting & Statistics Engineering">
                                        Commerce,Accounting & Statistics Engineering
                                    </option>
                                    <option value="Communication & PR">Communication & PR</option>
                                </select>
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <textarea id="comment" name="comment" cols="40" rows="5"
                                    class="form-control"></textarea>
                            </div> -->

                            <div class="form-group col-md-6">
                                <label for="photo">passport:</label>
                                <input id="pass" name="pass." placeholder="photo." class="form-control"
                                    required="required" type="file">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">KCSE Result Slip:</label>
                                <input id="result" name="result." placeholder="photo." class="form-control"
                                    required="required" type="file">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">Leaving certificate:</label>
                                <input id="cert" name="cert." placeholder="photo." class="form-control"
                                    required="required" type="file">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">National ID:</label>
                                <input id="national" name="national." placeholder="photo." class="form-control"
                                    required="required" type="file">
                            </div>
                        </div>


                        <div class="form-row">
                            <button type="button" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>






@endsection