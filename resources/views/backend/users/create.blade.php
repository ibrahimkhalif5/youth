@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Opportunities</h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="{{url('users')}}">
                                @csrf

                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="fullname">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"></input>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection