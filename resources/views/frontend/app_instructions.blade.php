@extends('frontend.layouts.front')
@section('content')


<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url('{{asset('front/images/sport1.JPG')}}'); background-attachment: fixed; background-position: 50% 50%;">
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

            </div>
            <div class="dtl_wrapper">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="dtl_block">
                        <div class="dtl_img">
                            <img alt="Blog Image" src="{{asset('front/images/ban.jpeg')}}">
                        </div>
                        <div class="blog_auther_info">
                            <div class="blog_auther">
                                <span><a href="#">Mandera Empowerment Hub</a></span>
                            </div>
                        </div>
                        <div class="blog_info">
                            <p>
                            <p>Welcome to the Mandera Empowerment Hub, an innovative online platform initiated by the
                                Ministry
                                of Social Development under the visionary leadership of HE Mohamed Adan Khalif, Governor
                                of
                                Mandera County. Our mission is clear: to create an inclusive and prosperous future for
                                all
                                Mandera residents by focusing on three key groups – unemployed youth, Persons Living
                                With
                                Disabilities (PWDs), and Women. By registering on our platform, you become a vital part
                                of this
                                ambitious vision.</p>
                            <h4><b>Your Data, Our Catalyst for Informed Change</b></h4>
                            <p>The Mandera Empowerment Hub is more than just a website; it's an engine for change. Your
                                registration empowers us to better understand and serve our community's unique needs,
                                while also
                                equipping the county with crucial data about the education, skills, and abilities of its
                                residents. This data enables informed decision-making, shaping policies and
                                opportunities that
                                truly benefit our diverse community.</p>

                            .!</p>
                            <a href="/login" class="btn btn-success">Proceed to Application</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

</div>








@endsection