@extends('frontend.layouts.application')
@extends('frontend.layouts.script')
@section('content')


<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url({{asset('front/images/banner.jpg')}}); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Registered Groups</h1>
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
            <div class="row">
                <div class="col-md-4 py-5 bg-red text-white text-center">
                    <div class=" ">
                        <div class="card-body">
                            <img src="{{asset('front/images/mdr.png')}}" style="width:30%">
                            <h2 class="py-3">Mandera county Group Registration</h2>
                            <hr>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4 " style="color:red;"><b><i>Kindly Enter Your Group Details Correctly </i></b>
                    </h4>
                    <form class="" method="POST" action="{{url('user/registered-group')}}" id="postComment"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="grouptype" name="grouptype" class="form-control">
                                    <option selected>group type ...</option>
                                    <option value="youth">Youth Group</option>
                                    <option value="pwd">PWD Group</option>
                                    <option value="women">Women Group</option>
                                </select>
                            </div>


                            <div class="form-group col-md-6">
                                <input id="gname" name="gname" placeholder="group Name.." class="form-control"
                                    type="text" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="contact" name="contact" placeholder="Contact person.." class="form-control"
                                    type="text" required="required"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter contact person i.e chairperson
                                                *</i></b>
                                    </h4>
                                </small>
                            </div>



                            <div class="form-group col-md-6">
                                <input id="contno" name="contno" placeholder="Contact number." class="form-control"
                                    required="required" type="number" pattern="[0-9]{10}"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter contact number
                                                *</i></b>
                                    </h4>
                                </small>
                                @error('contno')
                                <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <lebel class="pb-4">Registration Date</lebel>
                                <input id="regdate" name="regdate" class="form-control" type="date">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="regno" name="regno" placeholder="Registration number...."
                                    class="form-control" type="text" required="required"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Group Registration number
                                                *</i></b>
                                    </h4>
                                </small>

                            </div>
                            <div class="form-group col-md-6">
                                <input id="member" name="member" placeholder="Total members..." class="form-control"
                                    type="number" required="required"><small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Enter total number of members in your
                                                group
                                                *</i></b>
                                    </h4>
                                </small>
                            </div>

                            <div class="form-group col-md-6">

                                <select id="subcounty" class="form-control" name="subcounty" onchange="populateWards()">
                                    <option selected>Select subcounty ...</option>
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
                                <lebel class="pb-4">Registration certificate</lebel>
                                <input id="reg_cert" name="reg_cert" class="form-control" type="file"
                                    accept=".png, .jpeg, .jpg, image/*"> <small>
                                    <h4 class="pb-4 " style="color:green;"><b><i>*Upload Certificate Copy(Image only)
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