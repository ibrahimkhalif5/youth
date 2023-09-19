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

                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title example Training,Jobs or Intern">
                                </div>
                                <div class="form-group">

                                    <input type="text" class="form-control" name="vacancy"
                                        placeholder="Enter Vacancy Number">
                                </div>

                                <div class="form-group">

                                    <textarea class="form-control" name="description" id="description"
                                        placeholder="Enter Job Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>


                                <!-- <div class="form-group">

                                    <select class="form-control" name="status">
                                        <option>status</option>
                                        <option>open</option>
                                        <option>closed</option>

                                    </select>
                                </div> -->
                                <div class="card-footer text-right">
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection