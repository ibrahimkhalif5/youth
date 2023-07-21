<!doctype html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->


    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.min.js"></script>
        <script type="text/javascript" src="js/respond.min.js"></script>
	<![endif]-->

    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <title>Mandera Youth Centre</title>

    <link rel="stylesheet" type="text/css" href="front/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="front/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="front/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="front/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="front/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="front/css/mob_menu.css" />
    <link rel="stylesheet" type="text/css" href="front/css/rev/pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="/frontendcss/rev/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="front/css/rev/settings.css" />
    <link rel="stylesheet" type="text/css" href="front/css/rev/layers.css" />
    <link rel="stylesheet" type="text/css" href="front/css/rev/navigation.css" />
    <link rel="stylesheet" type="text/css" href="front/css/rev/rev_responsive.css" />
    <link rel="stylesheet" type="text/css" href="front/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="front/css/style.css" />

    <link
        href='https://fonts.googleapis.com/css?family=Raleway:800,500%7CLato:400,300,400italic,700,700italic,300italic,900italic,900,100,100italic%7CRoboto:400,500,600'
        rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-pzjw1PKFsZy0Ew5tFcfyQoJmP3VfL+5y9rjLzz+wwaQ1MDe0ilWepSsA0r4PWTN7" crossorigin="anonymous">



</head>

<body id="home" class="cms_index2">

    <header>

        <div class="header_top" style="background-color: #8f5444">
            <div class="container">
                <div class="top_info">
                    <span>Have any question?</span>
                    <span class="cont_no">
                        <i class="fa fa-phone"></i> <a href="#">Kenya : +254 7 123 1234</a>
                    </span>
                    <i class="fa fa-envelope"></i> <a href="mailto:abcxyz@abc.com">youthaffairs@mandera.go.ke</a>
                </div>
                <ul class="top_menu">
                    <li class="special">Mon - Fri &nbsp;&nbsp;(9am - 5pm) &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </div>

        <nav>
            <div class="container" style="background-color: green;">
                <div id="navbar" class="navbar navbar-default">
                    <div class="navbar-header col-md-2 col-sm-4 col-xs-4">
                        <a class="navbar-brand trigger" href="index.html" title="LearnMate"><img alt="Logo"
                                src="front/images/logo1.png"></a>
                    </div>



                    <div class="col-md-9 col-sm-7 col-xs-7 pull-xs-right">

                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger visible-sm visible-xs"><i class="fa fa-bars"></i></button>
                            <ul class="dl-menu">
                                <li>
                                    <h5 class="sp_module_title">Navigation page</h5>
                                </li>
                                <li><a class="trigger" href="/">Home</a></li>
                                <!-- <li><a class="trigger" href="/about_us">About</a></li> -->
                                <li>
                                    <a href="#">Applications</a>
                                    <ul class="dl-submenu">
                                        <li><a href="/university-placement">University Placement Program</a></li>
                                        <li><a href="/youth-employment">Youth Seeking Employment</a></li>
                                        <li><a href="/registered-group">Registered Groups</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Opportunities</a>
                                    <ul class="dl-submenu">
                                        <li><a href="/career-opportunities">Jobs</a></li>
                                        <li><a href="/intern-opportunities">Intern</a></li>
                                        <li><a href="/training-opportunities">Trainings</a></li>

                                    </ul>
                                </li>

                                <li><a class="trigger" href="/contact">Contact us</a></li>

                            </ul>
                        </div>

                        <div class="main_menu_wrap">
                            <ul class="main_menu">

                                <li><a class="trigger" href="/">Home</a></li>
                                <!-- <li><a class="trigger" href="/about_us">About</a></li> -->
                                <li><a class="trigger" href="#">Application <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="/university-placement">University Program</a></li>
                                        <li><a href="/youth-employment">employment program</a></li>
                                        <li><a href="/registered-group">Registered Groups</a></li>

                                    </ul>
                                </li>
                                <li><a class="trigger" href="#">Opportunities <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="/career-opportunities">Jobs </a></li>
                                        <li><a href="/intern-opportunities">Internship</a></li>
                                        <li><a href="/training-opportunities">Trainings</a></li>

                                    </ul>
                                </li>

                                <li><a class="trigger" href="/contact">Contact us</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')



    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="footer_link_wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <ul class="footer_list">
                            <li>
                                <div class="footer_logo"><img alt="Footer Logo" src="front/images/mdr1.png"></div>
                                <div class="footer_txt">
                                    <p>The Ministry of Youth, Gender and Social Services</p>
                                </div>
                                <div class="footer_email"><i class="fa fa-envelope"></i> <a
                                        href="mailto:abcxyz@abc.com">mogender.youth@mandera.go.ke</a></div>
                                <div class="footer_phone"><i class="fa fa-phone"></i> +1 800 123 1234</div>
                                <div class="social_links">
                                    <a href="#" target="_blank" rel="external nofollow" title="Share it"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank" rel="external nofollow" title="Tweet it"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank" rel="external nofollow" title="Linked it"><i
                                            class="fa fa-linkedin"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul class="footer_list">
                            <li>
                                <h3>Latest News</h3>
                                <ul class="foot_letnews_list">
                                    <li>
                                        <div class="foot_letnews_img"><img alt="" src="front/images/youth.jpg">
                                        </div>
                                        <div class="foot_letnews_info">
                                            <h4><a href="#">H.E. Mohamed Adan Khalif Government is panning to sent over
                                                    3000 youth abroad</a></h4>
                                            <em>jun 23, 2023</em>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="foot_letnews_img"><img alt="" src="front/images/mdr1.png">
                                        </div>
                                        <div class="foot_letnews_info">
                                            <h4><a href="#">CECM Madam Sumeya Advices the unemployed mandera youth to
                                                    register their details on the ministries website</a>
                                            </h4>
                                            <em>July 01, 2023</em>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <ul class="footer_list">
                            <li>
                                <h3>Links</h3>
                                <ul class="footer_sublist">
                                    <li><a href="#" title="About">About</a></li>
                                    <li><a href="#" title="Courses">Register</a></li>
                                    <li><a href="#" title="Blog">Contact</a></li>
                                    <li><a href="#" title="Gallery">Gallery</a></li>
                                    <li><a href="#" title="FAQ">Home</a></li>
                                    <li><a href="#" title="Contact">Jobs</a></li>
                                    <li><a href="#" title="Become a Teacher">Intern</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padd_rnone">
                        <div class="foot_gallery">
                            <h3>Event Gallery</h3>
                            <div class="col-md-4 col-xs-3"><a href="blog_right_sidebar.html"><img alt=""
                                        src="front/images/mdr1.png"></a></div>
                            <div class="col-md-4 col-xs-3"><a href="blog_right_sidebar.html"><img alt=""
                                        src="front/images/youth.jpg"></a></div>
                            <div class="col-md-4 col-xs-3"><a href="blog_right_sidebar.html"><img alt=""
                                        src="front/images/mdr1.png"></a></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 coppyright_txt">
                        <p> Copyright &copy; 2023-<script>
                            document.write(new Date().getFullYear())
                            </script> Abdotech All Rights Reserved</p>
                    </div>
                    <div class="time_available col-lg-3 col-md-3 col-sm-6 col-xs-6"><i class="fa fa-clock-o"></i> Mon -
                        Fri &nbsp;&nbsp;(9am - 5pm) &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="social col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <ul class="pull-right">
                            <li>IKAR</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="offcanvas_overlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script type="text/javascript" src="front/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="front/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="front/js/jquery.dlmenu.js"></script>
    <script type="text/javascript" src="front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="front/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="front/js/jquery-plugin-collection.js"></script>
    <script type="text/javascript" src="front/js/owl-carousel.js"></script>
    <script type="text/javascript" src="front/js/rev/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="front/js/rev/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="front/js/rev/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="front/js/js-functions.js"></script>
    <script type="text/javascript" src="front/js/flicker.js"></script>
    <script type="text/javascript" src="front/js/rev_slider.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"
        integrity="sha512-2HIM4Yx1LGLz3AOECEB+mAC7B1BYoiUPxYRvEJ7TwmW6eJQg6eHZvq6opvUvqI6IXKl6XN3gUL69z6xwT9g3qA=="
        crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css"
        integrity="sha384-pzjw1PKFsZy0Ew5tFcfyQoJmP3VfL+5y9rjLzz+wwaQ1MDe0ilWepSsA0r4PWTN7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css"
        integrity="sha384-pzjw1PKFsZy0Ew5tFcfyQoJmP3VfL+5y9rjLzz+wwaQ1MDe0ilWepSsA0r4PWTN7" crossorigin="anonymous"> -->

    <script>
    document.getElementById('age').addEventListener('input', function() {
        var age = parseInt(this.value);
        var errorElement = document.getElementById('age-error');

        if (isNaN(age)) {
            errorElement.textContent = 'Please enter age between 15 to 35 years.';
        } else if (age < 15) {
            errorElement.textContent = 'You are under age.';
        } else if (age > 35) {
            errorElement.textContent = 'You age is above the youth age bracket.';
        } else {
            errorElement.textContent = '';
        }
    });
    </script>

    <!-- id number -->
    <script>
    document.getElementById('idno').addEventListener('input', function() {
        var idNumber = this.value;
        var errorElement = document.getElementById('id-number-error');

        if (!/^\d{8}$/.test(idNumber)) {
            errorElement.textContent = 'Please enter a valid 8-digit ID number.';
        } else {
            errorElement.textContent = '';
        }
    });
    </script>


    <!-- mobile -->

    <script>
    document.getElementById('mobile').addEventListener('input', function() {
        var mobile = this.value;
        var errorElement = document.getElementById('id-number-error');

        if (!/^\d{10}$/.test(mobile)) {
            errorElement.textContent = 'Please enter a valid 10-digit  number.';
        } else {
            errorElement.textContent = '';
        }
    });
    </script>



    <!-- passport -->
    <script>
    var passportSelect = document.getElementById('passport');
    var passportField = document.getElementById('passportField');
    var dateField = document.getElementById('dateField');


    passportSelect.addEventListener('change', function() {
        if (passportSelect.value === 'yes') {
            passportField.style.display = 'block';
            dateField.style.display = 'block';
        } else {
            passportField.style.display = 'none';
            dateField.style.display = 'none';
        }
    });
    </script>



    <script>
    // Define the subcounty and ward data
    var data = {
        "lafey": ["Sala", "Fino", "Lafey", "Waranqara", "Alango Gof"],
        "elwak": ["Wargadud", "Kutulo", "Elwak South", "Elwak North", "Shimbir Fatuma"],
        "mandera": ["Arabia", "Libehia", "Khalalio", "Neboi", "Township"],
        "rhamu": ["Ashabito", "Guticha", "Marothile", "Rhamu", "Rhamu Ditmu"],
        "takaba": ["Takaba South", "Takaba", "Lagsure", "Dandu", "Gither"],
        "banisa": ["Banissa", "Derkhale", "Guba", "Malkamari", "Kiliwehiri"]
    };

    // Function to populate the ward select field based on the selected subcounty
    function populateWards() {
        var subcountySelect = document.getElementById("subcounty");
        var wardSelect = document.getElementById("ward");

        // Clear previous options
        wardSelect.innerHTML = '<option value="">Select Ward</option>';

        // Get the selected subcounty
        var selectedSubcounty = subcountySelect.value;

        // Check if a subcounty is selected
        if (selectedSubcounty) {
            // Get the wards for the selected subcounty from the data object
            var wards = data[selectedSubcounty];

            // Populate the ward select field with the corresponding wards
            wards.forEach(function(ward) {
                var option = document.createElement("option");
                option.text = ward;
                option.value = ward;
                wardSelect.appendChild(option);
            });
        }
    }
    </script>

</body>


</html>