@extends('frontend.layouts.front')
@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(front/images/slider_group_in_campus.jpg); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Available Job Opportunities</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a> /</li>
                    <li>Courses (grid view)</li>
                </ul>
            </div>
        </div>
    </div>


    <div id="courses_wrapper" class="courses_wrapper">

        <div class="container">

            <div class="course_wrapp col-lg-9 col-md-8 col-sm-12 col-xs-12">

                <div class="course_to_search_wrapp">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="course_to_search_inner">
                            <div class="course_to_search">
                                <div class="course_swicher">
                                    <a class="fa fa-th-large active" title="Grid Layout" href="course_grid.html"></a>
                                    <a class="fa fa-th-list" title="List Layout" href="course_list.html"></a>
                                </div>
                                <div class="search_pannel">
                                    <form method="post" action="#">
                                        <select class="selectpicker">
                                            <option>Opportunities</option>
                                            <option>Cleaners</option>
                                            <option>Drivers </option>
                                            <option>House Helps</option>
                                            <option>Construction Workers</option>
                                            <option>Experience Nurse needed </option>

                                        </select>
                                        <select class="selectpicker">
                                            <option>Locations</option>
                                            <option>Qatar</option>
                                            <option>Saudi</option>

                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wrapper_course">
                    @foreach($jobs as $row)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Science" src="front/images/jobs.jpg">
                                <div class="course_img_hoverlay_btn"><a href="course_dtl.html" title="View More"
                                        class="fa fa-eye"></a></div>
                                <h4>{{$row->title}}</h4>
                            </div>
                            <div class="science">
                                <div class="course_info">
                                    <p>{{$row->description}}</p>
                                </div>
                            </div>
                            <div class="science course_count_wrap">
                                <!-- <div class="course_count">
                                    Duration: <span>9 Month</span>
                                </div> -->
                                <div class="course_price">
                                    Vacancy: <span>{{$row->vacancy}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="clearfix"></div>

                <div class="pager">
                    <div class="pages">
                        <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>




        </div>

    </div>





</div>







@endsection