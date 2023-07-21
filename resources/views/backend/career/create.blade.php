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

                            <form class="" method="POST" action="{{url('opportunities')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Opportunity Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Vaccancy Number</label>
                                    <input type="text" class="form-control" name="vacancy">
                                </div>
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input type="text" class="form-control" name="duration">
                                </div>
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" class="form-control" name="venue">
                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>Active</option>
                                        <option>Off</option>

                                    </select>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection