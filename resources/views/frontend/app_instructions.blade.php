@extends('frontend.layouts.front')
@section('content')


<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(images/slider_group_in_campus.jpg); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Application instructions</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a> /</li>

                </ul>
            </div>
        </div>
    </div>



    <div id="blog" class="blog">
        <div class="container">
            <div class="head_part">
                <h2>Kindly Read the instrcutions bellow Carefully</h2>
                <p>Mandera Empowerment Hub :is a pioneering online platform initiated by the Ministry of Social
                    Development , with a vision to foster inclusivity, equal opportunities, and prosperity for all. This
                    dynamic website is dedicated to capturing vital data and empowering three key groups in the
                    community: unemployed youth, Persons Living With Disabilities (PWDs), and Women.
                </p>
            </div>
            <div class="dtl_wrapper">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="dtl_block">
                        <div class="dtl_img">
                            <img alt="Blog Image" src="{{asset('front/images/latest_news1.jpg')}}">
                        </div>
                        <div class="blog_auther_info">
                            <div class="blog_auther">
                                <span><a href="#">Data Collection Program</a></span>
                            </div>
                        </div>
                        <div class="blog_info">
                            <p>The Council of Governors (COG), Kenya, is actively working towards the establishment of a
                                web-based County Open Data Portal. The portal is designed to capture, store, manage,
                                visualize and enable the download of data. The primary goals of this portal are to
                                enhance monitoring, evaluation, transparency, and accountability.

                                Step Innovations Africa is the consultant working on the design of the portal roadmap
                                including features and functionalities.

                                We request you to take a few minutes of your time to fill out this Google Form and
                                submit your feedback. Your feedback will be important in ensuring that the County Open
                                Data Portal meets the needs of all stakeholders effectively. Your responses will be
                                treated with confidentiality and used for the purposes set above.

                                Thank you for your participation and support!</p>
                            <a href="/login" class="btn btn-success">Proceed to Application</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

</div>








@endsection