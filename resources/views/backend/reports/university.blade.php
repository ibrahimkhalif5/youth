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
                            <h4>University placement program</h4>
                        </div>
                        <div class="card-body">
                            <!-- <div class="text-center mb-4">
                                <img src="{{ asset('back/assets/img/mdr1.png') }}" alt="Logo" width="200" class="logo">
                            </div> -->

                            <div class="table-responsive">

                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                    <thead>
                                        <tr>

                                            <th>#</th>

                                            <th>Full Name</th>
                                            <th>ID</th>
                                            <th>Passport</th>
                                            <th>subcounty</th>
                                            <th>ward</th>
                                            <th>Pwd</th>
                                            <th>Institution</th>
                                            <th>Course</th>
                                            <th>KCSE</th>
                                            <th>Grade</th>
                                            <th>phone</th>
                                            <th>action</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($uni as $row)
                                        <tr>


                                            <th> {{$loop->index+1}}</th>

                                            <td>{{strtoupper($row->fullname)}}</td>
                                            <td>{{strtoupper($row->idno)}}</td>
                                            <td>{{strtoupper($row->passport)}}</td>
                                            <td>{{strtoupper($row->subcounty)}}</td>
                                            <td>{{strtoupper($row->ward)}}</td>
                                            <td>{{strtoupper($row->pwd)}}</td>
                                            <td>{{strtoupper($row->school)}}</td>
                                            <td>{{strtoupper($row->course)}}</td>
                                            <td>{{strtoupper($row->kcse_date)}}</td>
                                            <td>{{strtoupper($row->grade)}}</td>
                                            <td>{{strtoupper($row->mobile)}}</td>
                                            <td><a href="/applicant-details/{{$row->id}}"
                                                    class="btn btn-success">View</a>
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