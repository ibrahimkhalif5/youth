<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ministry of Social Development</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='back/assets/img/mdr1.png' />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>




</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <h5>{{ Auth::user()->name }}</h5>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{asset('back/assets/img/mdr1.png')}}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html"> <img alt="image" src="{{asset('back/assets/img/mdr1.png')}}"
                                class="header-logo" />
                            <span class="logo-name">Mandera</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="/admin" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>

                    </ul>
                </aside>
            </div>
            @yield('content')
            <footer class="main-footer">
                <div class="footer-left">
                    <p> Copyright &copy; 2023-<script>
                        document.write(new Date().getFullYear())
                        </script> Mandera County Powered by Abdotech Solutions</p>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('back/assets/js/app.min.js') }}">
    </script>
    <!-- JS Libraies -->
    <script src="{{ asset('back/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('back/assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('back/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('back/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('back/assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/page/datatables.js') }}"></script>
    <!-- Template JS File -->








</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
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
<script>
const experienceSelect = document.getElementById('experience');
const toggleFields = document.querySelectorAll('.toggle-fields');

experienceSelect.addEventListener('change', function() {
    const selectedValue = this.value;
    if (selectedValue === '0') {
        // Hide the fields when 'None' is selected
        toggleFields.forEach(field => {
            field.style.display = 'none';
        });
    } else {
        // Show the fields for other options
        toggleFields.forEach(field => {
            field.style.display = 'block';
        });
    }
});
</script>