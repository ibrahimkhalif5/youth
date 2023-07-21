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
                            <h4>Registered Youth group</h4>
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
                                            <th>GROUP NAME</th>
                                            <th>REG_NUMBER</th>
                                            <th>REG_DATE</th>
                                            <th>MEMBERS</th>
                                            <th>SUBCOUNTY</th>
                                            <th>WARD</th>
                                            <th>CONTACT NAME</th>
                                            <th>CONTACT NO</th>




                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($register as $row)
                                        <tr>


                                            <th> {{$loop->index+1}}</th>
                                            <td>{{strtoupper($row->group_name)}}</td>
                                            <td>{{strtoupper($row->reg_number)}}</td>
                                            <td>{{strtoupper($row->reg_date)}}</td>
                                            <td>{{strtoupper($row->total_member)}}</td>
                                            <td>{{strtoupper($row->subcounty)}}</td>
                                            <td>{{strtoupper($row->ward)}}</td>
                                            <td>{{strtoupper($row->contact_person)}}</td>
                                            <td>{{strtoupper($row->contant_no)}}</td>

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