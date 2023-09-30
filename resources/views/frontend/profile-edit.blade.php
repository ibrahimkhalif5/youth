@extends('frontend.layouts.profile-script')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update your application </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="/user/profile/update/{{$Job->id}}" id="postComment"
                                enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input id="fullname" name="fullname" placeholder="Enter fullname...."
                                            value="{{ $Job->User->name }}" class="form-control" type="text"
                                            required="required" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Enter Email...."
                                            id="email" name="email" value="{{ $Job->User->email }}"
                                            onblur="validateEmail()" readonly>
                                        <span id="emailError" style="color: red; display: none;">Invalid email
                                            address</span>
                                    </div>

                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <input id="mobile" name="mobile" placeholder="Enter phone number...."
                                            value="{{ $Job->mobile }}" class="form-control" required="required"
                                            type="number" pattern="[0-9]{10}">
                                        @error('mobile')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="idno" name="idno" placeholder="Enter idno...."
                                            value="{{ $Job->idno }}" class="form-control" required="required"
                                            type="number" pattern="[0-9]{8}">
                                        <div id="id-number-error" class="error-message"></div>
                                        @error('idno')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>




                                    <div class="form-group col-md-6">
                                        <input id="emergency" name="emergency" placeholder="Enter parent fullname...."
                                            value="{{ $Job->parent_name }}" class="form-control" type="text"
                                            required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="emobile" name="emobile" placeholder="Enter parent number...."
                                            value="{{ $Job->parent_no }}" class="form-control" required="required"
                                            type="number" pattern="[0-9]{10}">
                                        @error('emobile')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="pwd">Passport?</label>
                                        <select id="passport" name="passport" class="form-control">

                                            <option value="yes" {{ $Job->passport === 'yes' ? 'selected' : '' }}>YES
                                            </option>
                                            <option value="no" {{ $Job->passport === 'no' ? 'selected' : '' }}>NO
                                            </option>


                                        </select>
                                    </div>
                                    <div class="form-group col-md-6" id="passportField" style="display: none;">
                                        <label class="pwd" style="color:red;">Passport Number</label>
                                        <input id="passportNumber" name="passportNumber"
                                            placeholder="Enter passport number...." value="{{ $Job->passport_no }}"
                                            class="form-control" type="text">

                                    </div>
                                    <div class="form-group col-md-6" id="dateField" style="display: none;">
                                        <lebel class="pb-4">Expiry date</lebel>
                                        <input id="date" name="passdate" placeholder="passport Expiry date."
                                            class="form-control" type="date">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pwd">Highest Education Level</label>
                                        <select id="education" class="form-control" name="education">


                                            <option value="postgraduate"
                                                {{ $Job->postgraduate === 'postgraduate' ? 'selected' : '' }}>
                                                Masters Degree
                                            </option>
                                            <option value="undergraduate"
                                                {{ $Job->undergraduate === 'undergraduate' ? 'selected' : '' }}>
                                                Bachelors Degree
                                            </option>
                                            <option value="college" {{ $Job->college === 'college' ? 'selected' : '' }}>
                                                College
                                            </option>
                                            <option value="vocational"
                                                {{ $Job->vocational === 'vocational' ? 'selected' : '' }}>
                                                Vocational
                                            </option>
                                            <option value="kcse" {{ $Job->kcse === 'kcse' ? 'selected' : '' }}>Secondary
                                            </option>
                                            <option value="kcpe" {{ $Job->kcpe === 'kcpe' ? 'selected' : '' }}>Primary
                                            </option>
                                            <option value="madarasa"
                                                {{ $Job->madarasa === 'madarasa' ? 'selected' : '' }}>Madarasa
                                            </option>


                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="pwd" style="color:red;">Your grade</label>
                                        <input id="grade" name="grade" placeholder="Enter your grade...."
                                            value="{{ $Job->grade }}" class="form-control" type="text"
                                            required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="pwd" style="color:red;">Field of Study</label>
                                        <input id="qualification" name="qualification"
                                            placeholder="Enter field of study...." value="{{ $Job->qualification }}"
                                            class="form-control" type="text" required="required">
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
                                        <input id="employer" name="employer" placeholder="Enter years of experience"
                                            value="{{ $Job->employer }}" class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6 toggle-fields">
                                        <input id="job" name="job" placeholder="Enter designation"
                                            value="{{ $Job->position }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group col-md-12 toggle-fields">
                                        <label for="work">Duties & Responsibilities</label>
                                        <textarea id="work" name="work" value="{{ $Job->work }}" cols="40" rows="5"
                                            class="form-control"></textarea>

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="photo">Passport photo:</label>
                                        <input id="image" name="image" class="form-control" type="file"
                                            accept=".png, .jpeg, .jpg, image/*">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="photo">Id Copy:</label>
                                        <input id="id_copy" name="id_copy" class="form-control" type="file"
                                            accept=".png, .jpeg, .jpg, image/*">
                                    </div>

                                </div>


                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection