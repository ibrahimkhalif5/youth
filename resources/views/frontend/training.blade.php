@extends('frontend.layouts.front')
@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(front/images/border_bg.png); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Upcoming Trainings</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a> /</li>
                    <li>Training</li>
                </ul>
            </div>
        </div>
    </div>


    <div id="courses_wrapper" class="courses_wrapper">

        <div class="container">

            <div class="course_wrapp col-lg-9 col-md-8 col-sm-12 col-xs-12">



                <div class="wrapper_course">
                    @foreach($jobs as $row)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Science" src="{{asset('uploads/image_files/' . $row->image) }}">
                                <div class="course_img_hoverlay_btn"><a href="" title="View More" class="fa fa-eye"></a>
                                </div>
                                <h4>{{$row->title}}</h4>
                            </div>
                            <div class="science">
                                <div class="course_info">
                                    <p>{{$row->description}}</p>
                                </div>
                            </div>
                            <div class="science course_count_wrap">
                                <div class="course_count">
                                    Duration: <span>{{$row->duration}}</span>
                                </div>
                                <div class="course_price">
                                    Venue: <span>{{$row->venue}}</span>
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