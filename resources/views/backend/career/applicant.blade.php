@extends('backend.layouts.backend')
@section('content')
<div class="main-content">
    <section class="section">

        <div class="section-body">
            <div class="invoice" id="invoice-content">
                <h5><img src="{{asset('front/images/ban.jpeg')}}" width="100%" height="100%" alt="image">
                </h5>

                <div class="hr-container">
                    <hr class="hr-red">
                    <hr class="hr-green">
                    <hr class="hr-blue">
                </div>
                <br>
                <h5 class="" style="text-align: center;font-size: 20px"> <u>UNIVERSITY PLACEMENT
                        PROGRAM</u></h5>

                <style>
                .hr-container {
                    margin: 0;
                }

                .hr-container hr {
                    margin: 0;
                    padding: 2px;
                    border: none;
                    height: 2px;
                }

                .hr-red {
                    background-color: maroon;
                }

                .hr-green {
                    background-color: grey;
                }

                .hr-blue {
                    background-color: green;
                }
                </style>
                <br>
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">


                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <label for=""><strong><b><u>APPLICANT DETAILS:</u></b></strong></label><br>
                                        @php
                                        $nameParts = explode(' ', $University->fullname);
                                        $formattedName = implode(' ', $nameParts);
                                        @endphp

                                        <label for="" style=" width: 100px;font-size: 10px;">FULL
                                            NAME</label><b>{{ strtoupper($formattedName) }}</b>
                                        <br>
                                        <label for="" style=" width: 100px;font-size: 10px;">ID NUMBER:</label>
                                        <b>{{ strtoupper($University->idno) }}</b><br>

                                        <label for="" style=" width: 100px;font-size: 10px;">PHONE
                                            NUMBER</label><b>{{ strtoupper($University->mobile) }}</b>
                                        <br>
                                        <label for="" style=" width: 100px;font-size: 10px;">EMAIL ADDRESS:</label>
                                        <b>{{ strtoupper($University->email) }}</b><br>

                                        <label for="" style=" width: 100px;font-size: 10px;">SUBCOUNTY:</label>
                                        <b>{{ strtoupper($University->subcounty) }}</b><br>

                                        <label for="" style="width: 100px;font-size: 10px;">WARD:</label>
                                        <b>{{ strtoupper($University->ward) }}</b><br>
                                        <label for="" style=" width: 100px;font-size: 10px;">DATE OF BIRTH:</label>
                                        <b>{{ strtoupper($University->birth_date) }}</b><br>


                                        @if ($University->passport === 'yes')
                                        <label for="" style=" width: 100px;font-size: 10px;">PASSPORT
                                            NO:</label>
                                        <b><i>{{ strtoupper($University->passport_no) }}</b>
                                        <br>

                                        <label for="" style=" width: 100px;font-size: 10px;">EXPIRY
                                            DATE:</label>
                                        <b><i>{{ strtoupper($University->passport_date) }}</b><br>
                                        @else
                                        <!-- Display something else, like 'N/A' if the passport is not 'yes' -->

                                        @endif
                                        <label for="" style=" width: 100px;font-size: 10px;">PARENT NAME:</label>
                                        <b>{{ strtoupper($University->cont_person) }}<br>
                                            <label for="" style=" width: 100px;font-size: 10px;">PARENT
                                                NUMBER:</label>
                                            <b>{{ strtoupper($University->cont_number) }}<br>
                                    </address>
                                </div>

                                <h2 style="float: right;">
                                    <img src="{{asset('uploads/image_files/'.$University->id_copy)}}" width="100%"
                                        height="100%" alt="image">
                                </h2>




                            </div>


                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="section-title">Education Summary</div>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-md">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">photo</th>
                                    <th class="text-center">Institution</th>
                                    <th class="text-center">year</th>
                                    <th class="text-center">grade</th>
                                    <th class="text-center">course1</th>
                                    <th class="text-center">course2</th>
                                    <th class="text-center">course3</th>

                                </tr>

                                <tr>
                                    <td class="text-center">{{$University->index+1}}</td>
                                    <td class="text-center">
                                        <img src="{{asset('uploads/image_files/'.$University->image)}}" width="50px"
                                            height="50px" alt="image">
                                    </td>
                                    <td class="text-center">{{$University->school}}</td>
                                    <td class="text-center">{{$University->kcse_date}}</td>
                                    <td class="text-center">{{$University->grade}}</td>
                                    <td class="text-center">{{$University->course1}}</td>
                                    <td class="text-center">{{$University->course2}}</td>
                                    <td class="text-center">{{$University->course3}}</td>



                                </tr>


                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <hr>


        </div>

        <div class="text-md-right" id="buttons-section">
            <div class="float-lg-left mb-lg-0 mb-3">
                <button class="btn btn-primary btn-icon icon-left btn-download-cv"><i class="fas fa-credit-card"></i>
                    Download CV</button>
                <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
            </div>
        </div>
    </section>
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Select Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
                                checked>
                            <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                            <span class="selectgroup-button">Dark</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                                checked>
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Color Theme</h6>
                    <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                            <li title="white" class="active">
                                <div class="white"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="black">
                                <div class="black"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                id="mini_sidebar_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                id="sticky_header_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection