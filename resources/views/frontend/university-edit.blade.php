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
                            <h4>Update your university application </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="">
                                @csrf

                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" value="{{$Job->fullname}}" class="form-control" name="fullname"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>IDNO</label>
                                    <input type="email" value="{{$Job->idno}}" class="form-control" name="email"
                                        readonly></input>
                                </div>
                                <div class="form-group">
                                    <label>phone</label>
                                    <input type="email" value="{{$Job->mobile}}" class="form-control" name="email"
                                        readonly></input>
                                </div>
                                <div class="form-group">
                                    <label>passport</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="yes">YES</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Passport expiry</label>
                                    <input type="email" value="" class="form-control" name="email" readonly></input>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Update</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection