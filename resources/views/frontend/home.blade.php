@extends('frontend.layouts.front')
@section('content')

<div class="content_wrapper">

    <div id="slider" class="main_slider">
        <div class="example">
            <div class="content">
                <div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                    data-alias="scroll-effect76" style="background-color:#111;padding:0px;">

                    <div id="rev_slider_104_1" class="rev_slider fullscreenbanner" style="display:none;"
                        data-version="5.0.7">
                        <ul>

                            @foreach($gal as $row)
                            <li data-index="rs-310" data-transition="slideoverhorizontal" data-slotamount="default"
                                data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"
                                data-thumb="{{asset('uploads/image_files/'.$row->image)}}" data-rotate="0"
                                data-saveperformance="off" data-title="{{$row->title}}" data-description="">

                                <img src="{{asset('uploads/image_files/'.$row->image)}}" alt=""
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>


                                <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0"
                                    id="slide-310-layer-11" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-start="0"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="['860','860','860','1010']" data-whitespace="nowrap"
                                    data-responsive="off" data-transform_idle="o:1;" data-style_hover="cursor:default;"
                                    data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;s:1000;" data-basealign="slide"
                                    data-responsive_offset="off" style="z-index: 5; background-color: rgba(0, 0, 0, 0.50); 
                                   border-color: rgba(0, 0, 0, 0); background: rgba(0,0,0,0.45);">
                                </div>

                                <div class="tp-caption BigBold-Title tp-resizeme rs-parallaxlevel-0"
                                    id="slide-310-layer-1" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','30','17']" data-height="none"
                                    data-y="['bottom','bottom','bottom','bottom']"
                                    data-voffset="['110','110','180','160']" data-fontsize="['100','100','70','60']"
                                    data-lineheight="['100','90','60','60']" data-width="['none','none','none','400']"
                                    data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;"
                                    data-mask_in="x:0px;y:[100%];" data-start="500"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                    data-mask_out="x:inherit;y:inherit;" data-splitin="none" data-splitout="none"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-basealign="slide" data-responsive_offset="off" style="z-index: 6; 
                                  white-space: nowrap;">{{$row->title}}
                                </div>

                                <div class="tp-caption BigBold-SubTitle rs-parallaxlevel-0" id="slide-310-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                    data-whitespace="normal" data-y="['bottom','bottom','bottom','bottom']"
                                    data-voffset="['40','1','74','58']" data-fontsize="['15','15','15','13']"
                                    data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
                                    data-height="['60','100','100','100']" data-transform_idle="o:1;" data-start="650"
                                    data-splitin="none" data-splitout="none"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                    data-basealign="slide" data-responsive_offset="off"
                                    data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; 
                                     max-width: 60px; white-space: normal;">{{$row->description}}
                                </div>


                            </li>
                            @endforeach
                        </ul>
                        <div class="tp-static-layers"></div>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="find_course">
        <div class="container" style="background-color: maroon">
            <div class="find_course_inner">
                <div class="find_course_txt_wrap col-md-8 col-xs-12" style="background-color: #eeeee4">
                    <div class="find_course_txt">
                        <div class="head_part">
                            <h2>Ministry of Social Development</h2>
                            <p>The Ministry of Social Development is comprised of two departments:
                                Gender
                                and Social Services and Youth Affairs. The department of Gender and Social Services
                                deals with women empowerment, persons with disability and children welfare while the
                                department of Youth Affairs deals with all youth related affairs except sports.</p>
                        </div>
                        <ul class="course_list">
                            <li class="fundamentals">
                                <div class="icon"><i class="fa fa-globe"></i></div>
                                <div class="course_info">
                                    <h4>Our Mission</h4>
                                    <p>To promote holistic quality social services to foster growth and development
                                        that
                                        is sustainable and nationally competitive..</p>
                                </div>
                            </li>
                            <li class="even expert">
                                <div class="icon"><i class="fa fa-eye"></i></div>
                                <div class="course_info">
                                    <h4>Our Vision</h4>
                                    <p>To improve quality of social services delivery founded on values such as
                                        honesty,
                                        co-operation, commitment and trust at most crucial period of human growth
                                        and
                                        development..</p>
                                </div>
                            </li>
                            <li class="online second_last">
                                <div class="icon"><i class="fa fa-handshake-o"></i></div>
                                <div class="course_info">
                                    <h4>Core Values</h4>


                                    <ul>Professionalism</ul>
                                    <ul>Integrity</ul>
                                    <ul>Efficiency</ul>
                                    <ul>Partnerships</ul>
                                    <ul>Gender equity</ul>
                                    <ul>Accountability</ul>


                                </div>
                            </li>
                            <li class="even last event ">
                                <div class="icon"><i class="fa fa-gift"></i></div>
                                <div class="course_info">
                                    <h4>Key Achievements</h4>

                                    <ul>PWD resource centre</ul>
                                    <ul>Mandera rehabilitation centre</ul>
                                    <ul>SOCIAL HALLS</ul>
                                    <ul>Capacity Building</ul>


                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="row find_course_form_inner">
                        <h2>Register Your Details</h2>
                        <button class="btn find_course_form_btn"></button>
                        <a href="user/youth-employment"><button class="btn find_course_form_btn" style="color: ;">
                                youth Seeking Employment</button></a>
                        <a href="user/registered-group"><button class="btn find_course_form_btn">
                                Group Registration</button></a>
                        <a href="user/university-placement"><button class="btn find_course_form_btn">
                                University Placement Program</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="overview" class="overview">
        <div class="overview_img col-lg-6 col-md-6 col-sm-12 col-xs-12"
            style="background-image: url('{{ asset('front/images/pr.jpg') }}'); background-size: cover; background-position: center center; min-height: 580px;">
        </div>

        <div class="overview_inner col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2>Our Programs</h2>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 overview_m_padd">
                <div class="overview_info instructor col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-xs-12">
                        <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                        <h5>University placement</h5>
                        <p>Our University Programs target the highest-achieving KCSE students, offering them the chance
                            to pursue undergraduate and master's degrees in Turkey. We proudly cover 80% of tuition
                            fees, making quality higher education more accessible. By investing in the academic growth
                            of our youth, we aim to equip them with the knowledge and skills needed for a bright future.
                        </p>

                    </div>
                    <figure><img alt="Professional Instructor" src="{{asset('front/images/uni.jpg')}}"></figure>
                </div>
                <div class="overview_info course col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-xs-12">
                        <div class="icon"><i class="fa fa-briefcase"></i></div>
                        <h5>Jobs placement</h5>
                        <p> Our Job Placement Programs align with the governor's vision to employ
                            2000 youth annually. These initiatives encompass both local and international employment
                            opportunities, aiming to provide meaningful work for young individuals. Whether it's
                            securing local jobs or exploring opportunities abroad, our programs are designed to empower
                            youth through gainful employment.
                        </p>

                    </div>
                    <figure><img alt="Online Courses" src="{{asset('front/images/jb.jpg')}}"></figure>
                </div>
                <div class="overview_info book col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-xs-12">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <h5> group Registration</h5>
                        <p>The Group Registrations initiative focuses on supporting various community groups, including
                            youth, persons with disabilities (PWDs), and women's groups. By collecting and analyzing
                            relevant data, Mandera County can provide tailored assistance and resources to these groups.
                            This program seeks to enhance the well-being and empowerment of these communities, fostering
                            positive change and development.</p>
                        <a href="#">See More</a>
                    </div>
                    <figure><img alt="Books &amp; Library" src="{{asset('front/images/woman.png')}}"></figure>
                </div>
            </div>
        </div>
    </div>

    <div id="courses" class="courses">
        <div class="container" style="background-color: #eeeee4">
            <div class="head_part">
                <h2>Available Opportunities</h2>

            </div>
            <div class="course_wrapper">
                @foreach($job as $row)

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="course_block">
                        <div class="img_wrap">
                            <img alt="job" src="{{asset('uploads/image_files/' . $row->image) }}"
                                style="max-width: 100%; max-height: 100%; object-fit: cover;">
                            <div class="course_img_hoverlay_btn">
                                <a href="/job-vacancy/{{$row->id}}" title="View More" class="fa fa-eye"></a>

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






<div id="count" class="count" data-stellar-background-ratio="0.8"
    style="background: url('{{ asset('front/images/border_bg.png') }}'); background-attachment: fixed; background-position: 50% 50%;">
    <div class="container">
        <div class="head_part">
            <h2>OUR SUCCESS RATE</h2>
            <p>What We have Done.</p>
        </div>
        <div class="row">
            <div class="col-sm-3 col-md-3 col-xs-6">
                <div class="funfact expert text-center mb-sm-30">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="counts">
                        <h2 class="animate-number" data-animation-duration="2000" data-value="730">0</h2>
                        <h4 class="title">Youth Employeed</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-6">
                <div class="funfact online text-center mb-sm-30">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="counts">
                        <h2 class="animate-number" data-animation-duration="2000" data-value="3565">0</h2>
                        <h4 class="title">Our Partners</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-6">
                <div class="funfact student second_one text-center mb-sm-30">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="counts">
                        <h2 class="animate-number" data-animation-duration="2000" data-value="7644">0</h2>
                        <h4 class="title">PWD</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-6">
                <div class="funfact placed last text-center mb-sm-30">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="counts">
                        <h2 class="animate-number" data-animation-duration="2000" data-value="4253">0</h2>
                        <h4 class="title">Women Group</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>

@endsection