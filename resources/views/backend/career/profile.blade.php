@extends('backend.layouts.backend')
@section('content')
<div class="main-content">
    <section class="section">

        <div class="section-body">
            <div class="invoice" id="invoice-content">

                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="invoice-title">

                                <h2><img src="{{asset('uploads/image_files/'.$Job->image)}}" width="70px" heaight="70px"
                                        alt="image"></h2>

                            </div>

                            <p>Name:{{$Job->fullname}}</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Contact Details:</strong><br>
                                        Mobile Number:{{$Job->mobile}}<br>
                                        Emergency contact:07233445<br>
                                        Email:<br>
                                        Emergency person:
                                    </address>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="section-title">Education Summary</div>
                            <p class="section-lead">All items here cannot be deleted.</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th class="text-center">Education Level</th>
                                        <th class="text-center">Course</th>
                                        <th class="text-center">Grade</th>
                                        <th class="text-right">passport</th>
                                    </tr>

                                    <tr>
                                        <td class="text-center"> {{$Job->index+1}}</td>
                                        <td class="text-center">{{$Job->education}}</td>
                                        <td class="text-center">{{$Job->qualification}}</td>
                                        <td class="text-center">{{$Job->grade}}</td>
                                        <td class="text-center">{{$Job->passport}}</td>

                                    </tr>


                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <div class="section-title">Work Experience</div>
                                    <ul>
                                        <li>
                                            <p class="section-lead">Employer{{$Job->employer}}</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <p class="section-lead">Years of experience{{$Job->exp_year}}</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <p class="section-lead">Position Held{{$Job->position}}</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <p class="section-lead">Duties & Responsibility,
                                            <ol>{{$Job->work}}</ol>
                                            </p>
                                        </li>
                                    </ul>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right" id="buttons-section">
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <button class="btn btn-primary btn-icon icon-left btn-download-cv"><i
                                class="fas fa-credit-card"></i> Download CV</button>
                        <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                    </div>
                </div>

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