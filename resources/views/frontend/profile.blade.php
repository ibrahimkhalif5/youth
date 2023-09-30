@extends('frontend.layouts.profile-script')
@section('content')

<!-- job application -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>My Job Application</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>photo</th>
                                            <th>Name</th>
                                            <th>Idno</th>
                                            <th>passport</th>
                                            <th>ward</th>
                                            <th>phone</th>
                                            <th>Education level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td> <img src="{{asset('uploads/image_files/'.$job->image)}}" width="20%"
                                                    height="20%" alt="image"></td>
                                            <td>{{ $job->user->name }}</td>
                                            <td>{{ $job->idno }}</td>
                                            <td>{{ $job->passport }}</td>
                                            <td>{{ $job->ward }}</td>
                                            <td>{{ $job->mobile }}</td>
                                            <td>{{ $job->education }}</td>
                                            <td>


                                                <a href="/user/profile-edit/{{$job->id}}"
                                                    class="btn btn-success">Edit</a>


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