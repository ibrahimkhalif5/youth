@extends('frontend.layouts.front')
@extends('frontend.layouts.gallery')
@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(front/images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Our Gallery</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a> /</li>
                    <li>gallery</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container page-top">
        <div class="row">
            @foreach($gal as $row)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('uploads/image_files/'.$row->image)}}" class="fancybox" title="{{ $row->title }}">
                    <!-- Use 'data-caption' attribute to store the caption -->
                    <img src="{{asset('uploads/image_files/'.$row->image)}}" class="zoom img-fluid" alt="">
                </a>
            </div>
            @endforeach
        </div>

    </div>




</div>

@endsection