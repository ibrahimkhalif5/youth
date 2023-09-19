@extends('frontend.layouts.front')
@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(front/images/banner.png); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Available Job Opportunities</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a> /</li>

                </ul>
            </div>
        </div>
    </div>


    <div id="courses_wrapper" class="courses_wrapper">

        <div class="container">
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
                                Vacancy: <span>{{$row->vacancy}}</span>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>



        </div>

    </div>





</div>







@endsection