@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Gallery</h4>
                            <a href="/gallery-add"><button class="btn btn-primary btn-block">Add
                                    image</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>image</th>
                                            <th>title</th>
                                            <th>description</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($gal as $row)
                                        <tr>
                                            <th> {{$loop->index+1}}</th>
                                            <td><img src="{{asset('uploads/image_files/'.$row->image)}}" width="100px"
                                                    height="100px" alt="image"></td>

                                            <td>{{$row->title}}</td>
                                            <td>{{$row->description}}</td>


                                            <td>

                                                <a href="" class="btn btn-success">Edit</a>

                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>





@endsection