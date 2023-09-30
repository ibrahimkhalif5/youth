@extends('frontend.layouts.front')
@section('content')

<div class="content_wrapper" style="background-color: #eeeee4">


    @if(session('success'))
    <div class="alert alert-success">
        <span>&#10004;</span> {{ session('success') }}
    </div>
    @endif

    <div class="content_wrapper">

        <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
            style="background: url('{{ asset('front/images/banner.png') }}'); background-attachment: fixed; background-position: 50% 50%;">
            <div class="breadcrumb_wrap_inner">
                <div class="container">
                    <h1>View opportunity Details</h1>
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a> /</li>
                        <li>job</li>
                    </ul>
                </div>
            </div>
        </div>


        <div id="dtl_wrap" class="dtl_wrap">

            <div class="container">

                <div class="dtl_wrapper col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <div class="dtl_inner_wrap">

                        <div class="dtl_inner last">
                            <div class="dtl_head">
                                <h1>{{$Job->title}}</h1>

                            </div>
                            <div class="dtl_block">
                                <div class="dtl_img">
                                    <img alt="Blog Image" src="{{asset('uploads/image_files/'.$Job->image)}}">
                                </div>
                                <div class="detail_text_wrap">
                                    <div class="info_wrapper">
                                        <div class="info_head">
                                            <h4>Description</h4>
                                            <p>{{$Job->description}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="clearfix"></div>
                </div>


                <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">

                    <div class="hookup_wrap">
                        <a href="#" class="btn hookup_btn">Job Summary <i class="fa fa-reply"></i></a>
                        <ul>
                            <li><span class="hookup_tag"><i class="fa fa-calendar-check-o"></i> Posted date</span><span
                                    class="hookup_duration">{{$Job->created_at}}</span></li>
                            <li><span class="hookup_tag"><i class="fa fa-clock-o"></i> Status</span><span
                                    class="hookup_duration">{{$Job->status}}</span></li>
                            <li><span class="hookup_tag"><i class="fa fa-clock-o"></i> Venue</span><span
                                    class="hookup_duration">{{$Job->venue}}</span></li>
                            <li><span class="hookup_tag"><i class="fa fa-clock-o"></i> vacancy</span><span
                                    class="hookup_duration">{{$Job->vacancy}}</span></li>

                        </ul>
                    </div>



                </div>

            </div>

        </div>




    </div>



</div>





@endsection