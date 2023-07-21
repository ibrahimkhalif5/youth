@extends('frontend.layouts.front')
@section('content')

<div class="content_wrapper" style="background-color: #eeeee4">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(front/images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a> /</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <div id="contact_wrap" class="contact_wrap">
        <div class="container">

            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>Contact Info</h3>
                <p>Welcome to our Website. We are glad to have you around.</p>
                <div class="contact_info">
                    <div class="contact_info_inner">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="icon_box"><i class="fa fa-phone"></i></div>
                            <div class="info_txt">
                                <h4>Phone</h4>
                                <p> +254 7 123 1234 </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="icon_box"><i class="fa fa-envelope"></i></div>
                            <div class="info_txt">
                                <h4>Email</h4>
                                <p><a href="mailto:abcxyz@abc.com">youthaffairs@mandera.go.ke</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="icon_box"><i class="fa fa-envelope"></i></div>
                        <div class="info_txt">
                            <h4>Email</h4>
                            <p><a href="mailto:abcxyz@abc.com">genderservices@mandera.go.ke</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>Send A Message</h3>
                <p>Your email address will not be published. Required fields are marked.</p>
                <div class="contact_form">
                    <form method="post" action="#">
                        <input class="form-control" placeholder="Your Name..." name="name" type="text">
                        <input class="form-control" placeholder="Email Addrress..." name="email" type="text">
                        <textarea class="form-control" rows="7" placeholder="Message..." name="message"></textarea>
                        <button type="submit" class="btn btn_contact">Submit <i class="fa fa-check"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>



</div>





@endsection