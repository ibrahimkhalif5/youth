@extends('backend.layouts.backend')
@section('content')


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Job Seekers</h5>
                                        <h2 class="mb-3 font-18">{{ $job }}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/youth.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">University placemet</h5>
                                        <h2 class="mb-3 font-18">{{ $job }}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/uni.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Youth Group</h5>
                                        <h2 class="mb-3 font-18">{{ $youth }}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/youth.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15"> PWD Group</h5>
                                        <h2 class="mb-3 font-18">{{ $pwd }}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/pwd.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Woman Group</h5>
                                        <h2 class="mb-3 font-18">{{ $women }}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/woman.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Master </h5>
                                        <h2 class="mb-3 font-18">{{$postgraduate}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/post.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Bachelor </h5>
                                        <h2 class="mb-3 font-18">{{$graduate}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/under.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">College</h5>
                                        <h2 class="mb-3 font-18">{{$college}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/college.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Vocational</h5>
                                        <h2 class="mb-3 font-18">{{$vocational}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/voc.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">KCSE </h5>
                                        <h2 class="mb-3 font-18">{{$kcse}}</h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="back/assets/img/kcse.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="chart1">
            <canvas id="chartCanvas">


                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Revenue chart</h4>
                                <div class="card-header-action">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown"
                                            class="btn btn-warning dropdown-toggle">Options</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i>
                                                View</a>
                                            <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i>
                                                Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item has-icon text-danger"><i
                                                    class="far fa-trash-alt"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div id="chart1"></div>
                                        <div class="row mb-0">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                            data-feather="arrow-up-circle" class="col-green"></i>
                                                        <h5 class="m-b-0">$675</h5>
                                                        <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                            data-feather="arrow-down-circle" class="col-orange"></i>
                                                        <h5 class="m-b-0">$1,587</h5>
                                                        <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                            data-feather="arrow-up-circle" class="col-green"></i>
                                                        <h5 class="mb-0 m-b-0">$45,965</h5>
                                                        <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row mt-5">
                                            <div class="col-7 col-xl-7 mb-3">Total customers</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">8,257</span>
                                                <sup class="col-green">+09%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">Total Income</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$9,857</span>
                                                <sup class="text-danger">-18%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">Project completed</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">28</span>
                                                <sup class="col-green">+16%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">Total expense</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$6,287</span>
                                                <sup class="col-green">+09%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">New Customers</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">684</span>
                                                <sup class="col-green">+22%</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </canvas>
        </div>
 -->




</div>

@endsection