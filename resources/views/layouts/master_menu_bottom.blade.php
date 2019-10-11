<?php if (!isset($_COOKIE['Authorization'])) { ?>

    <script type="text/javascript">
        window.location.replace('http://localhost:8000/');
    </script>

<?php } ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - Bear Bus </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/bearbus.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/bootstrap.min.css') }}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/select2.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('fonts/internal/flaticon.css') }}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/fullcalendar.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/animate.min.css') }}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/jquery.dataTables.min.css') }}">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/style.css?v=1.0.0.0') }}">
    <!-- Modernize js -->
    <script src="{{ URL::asset('js/internal/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light" id="navbar">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index">
                        <img class="logo-header" src="{{ URL::asset('images/internal/logo_temp.png') }}" alt="logo">
                    </a>
                    <div class="d-md-none mobile-nav-bar justify-content-between">
                        <h3 class="text-light mb-0 pl-2">BEAR BUS</h3>
                        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                            <i class="fas fa-user-circle text-light"></i>
                        </button>
                    </div>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    {{-- don't remove --}}
                </ul>
                {{-- header สำหรับคนขับ เอา @can ครอบตรงนี้ --}}
                <ul class="navbar-nav d-none">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title" id="name">ชื่อ</h5>
                                <span id="role">คนขับรถ</span>
                            </div>
                            <div class="admin-img">
                                <img id="photo_user" src="{{ URL::asset('images/internal/figure/driver.jpg') }}" alt="Driver">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">คุณ <span id="f_name"></span> <span id="l_name"></span></h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>โปรไฟล์</a></li>
                                    <li><a href="/" onclick="deleteAllCookies()"><i class="flaticon-logout"></i>ออกจากระบบ</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">แจ้งเตือน</div>
                            <span>2</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">2 การแจ้งเตือน</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">ส่งเด็กนักเรียนครบ</div>
                                        <span>1 นาทีที่แล้ว</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">แจ้งเดินทางกลับเอง 5 รายการ</div>
                                        <span>2 ชั่วโมง 20 นาทีที่แล้ว</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>TH</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Thai</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </li>
                </ul>
                {{-- header สำหรับผู้ปกครอง เอา @can ครอบตรงนี้ --}}
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">nonstop</h5>
                                <span>ผู้ปกครอง</span>
                            </div>
                            <div class="admin-img">
                                <img src="{{ URL::asset('images/internal/figure/parent.jpg') }}" alt="Parent">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">คุณ ภูมินท์ วงษ์ศิริ</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>โปรไฟล์</a></li>
                                    <li><a href="/" onclick="deleteAllCookies()"><i class="flaticon-logout"></i>ออกจากระบบ</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">แจ้งเตือน</div>
                            <span>2</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">2 การแจ้งเตือน</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">น้องคิดได้ลงจากรถแล้ว</div>
                                        <span>1 นาทีที่แล้ว</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">น้องมาร์ชได้ลงจากรถแล้ว</div>
                                        <span>1 นาทีที่แล้ว</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                        <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>TH</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Thai</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{-- สำหรับผู้ปกครอง --}}
        <div class="submenu-mobile d-flex flex-row justify-content-center align-items-center d-md-none">
            <div class="left active">
                <a href="#">ชำระเงิน</a>
            </div>
            <div class="right">
                <a href="#">แจ้งชำระเงิน</a>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
               </div>
                {{-- meu active (don't remove) --}}
                <?php
                    $current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                    $current_page = (explode("/",$current_url));
                    $menu_active = $current_page[2];
                    if(!empty($current_page[3])){
                        $menu_active2 = $current_page[3];
                    }else{
                        $menu_active2 = "";
                    }
                ?>
                {{-- เมนูสำหรับคนขับรถ เอา @can ครอบตรงนี้ --}}
                <div class="sidebar-menu-content d-none">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item">
                            <a href="{{ url('driver/index') }}" class="nav-link <?php if($menu_active == "index") echo "menu-active"; else echo ""?>"><i class="flaticon-home"></i><span>หน้าหลัก</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if($menu_active == "appoinment") echo "menu-active"; else echo ""?>"><i class="flaticon-appointment"></i><span>แจ้งเดินทางเอง</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if($menu_active == "boardcast") echo "menu-active"; else echo ""?>"><i class="flaticon-promotion"></i><span>ประกาศ</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if($menu_active == "profile") echo "menu-active"; else echo ""?>"><i class="flaticon-man"></i><span>โปรไฟล์</span></a>
                        </li>
                    </ul>
                </div>
                {{-- เมนูสำหรับผู้ปกครอง เอา @can ครอบตรงนี้ --}}
                <div class="sidebar-menu-content">
                        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                            <li class="nav-item">
                                <a href="{{url('driver/index')}}" class="nav-link <?php if($menu_active == "index") echo "menu-active"; else echo ""?>"><i class="flaticon-home"></i><span>หน้าหลัก</span></a>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link <?php if($menu_active == "payment") echo "menu-active"; else echo ""?>"><i class="flaticon-bank"></i><span>การชำระเงิน</span></a>
                                <ul class="nav sub-group-menu <?php if(!empty($menu_active2 == "overview")) echo "sub-group-active"; else echo "";?>">
                                    <li class="nav-item">
                                        <a href="{{url('parent/payment/overview')}}" class="nav-link <?php if($menu_active2 == "overview") echo "menu-active"; else echo ""?>"><i class="fas fa-angle-right"></i>ชำระเงิน</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index3.html" class="nav-link"><i class="fas fa-angle-right"></i>แจ้งชำระเงิน</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link <?php if($menu_active == "appointment") echo "menu-active"; else echo ""?>"><i class="flaticon-promotion"></i><span>แจ้งเดินทางเอง</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link <?php if($menu_active == "report") echo "menu-active"; else echo ""?>"><i class="flaticon-email"></i><span>ร้องเรียน / แนะนำการบริการ</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link <?php if($menu_active == "profile") echo "menu-active"; else echo ""?>"><i class="flaticon-man"></i><span>โปรไฟล์</span></a>
                            </li>
                        </ul>
                    </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">

                @yield('content')

            <!-- Footer Area -->
            <footer class="footer-wrap-layout1 fixed-bottom d-md-none">
                <div class="navbar navbar-expand-md header-menu-one bg-light p-0">
                    <div class="nav-bar-footer-user" style="padding-right: 2rem;">
                        <div class="header-logo">
                            {{-- เมนูสำหรับคนขับรถ เอา @can ครอบตรงนี้ --}}
                            <div class="d-none mobile-nav-bar justify-content-between">
                                <div><a href="#" class="nav-link <?php if($menu_active == "index") echo "active"; else echo ""?>"><i class="flaticon-home text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "appointment") echo "active"; else echo ""?>"><i class="flaticon-appointment text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "boardcast") echo "active"; else echo ""?>""><i class="flaticon-promotion text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "profile") echo "active"; else echo ""?>""><i class="flaticon-man text-noactive"></i></a></div>
                            </div>
                            {{-- เมนูสำหรับคนขับรถ เอา @can ครอบตรงนี้ --}}
                            <div class="d-md-none mobile-nav-bar justify-content-between">
                                <div><a href="#" class="nav-link <?php if($menu_active == "index") echo "active"; else echo ""?>"><i class="flaticon-home text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "payment") echo "active"; else echo ""?>"><i class="flaticon-bank text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "appointment") echo "active"; else echo ""?>"><i class="flaticon-appointment text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "report") echo "active"; else echo ""?>"><i class="flaticon-email text-noactive"></i></a></div>
                                <div><a href="#" class="nav-link <?php if($menu_active == "profile") echo "active"; else echo ""?>"><i class="flaticon-man text-noactive"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>

    <script>

        function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function deleteAllCookies() {

            var res = document.cookie;
            var multiple = res.split(";");


            for (var i = 0; i < multiple.length; i++) {

                var key = multiple[i].split("=");
                document.cookie = key[0] + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            }

            for (var i = 0; i < multiple.length; i++) {

                var key = multiple[i].split("=");
                document.cookie = key[0] + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC; ;";
            }

    }

    document.getElementById("name").innerHTML = getCookie('name');
    document.getElementById("role").innerHTML = getCookie('role');
    document.getElementById("f_name").innerHTML = getCookie('f_name');
    document.getElementById("l_name").innerHTML = getCookie('l_name');
    document.getElementById("photo_user").src = '{{URL::asset('')}}'+getCookie();
    </script>
    <!-- jquery-->
    <script src="{{ URL::asset('js/internal/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('js/internal/plugins.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ URL::asset('js/internal/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('js/internal/bootstrap.min.js') }}"></script>
    <!-- Select2 Js -->
    <script src="{{ URL::asset('js/internal/select2.min.js') }}"></script>
    <!-- Counterup Js -->
    <script src="{{ URL::asset('js/internal/jquery.counterup.min.js') }}"></script>
    <!-- Moment Js -->
    <script src="{{ URL::asset('js/internal/moment.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ URL::asset('js/internal/jquery.waypoints.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ URL::asset('js/internal/jquery.scrollUp.min.js') }}"></script>
    <!-- Full Calender Js -->
    <script src="{{ URL::asset('js/internal/fullcalendar.min.js') }}"></script>
    <!-- Chart Js -->
    <script src="{{ URL::asset('js/internal/Chart.min.js') }}"></script>
    <!-- Data Table Js -->
    <script src="{{ URL::asset('js/internal/jquery.dataTables.min.js') }}"></script>
    <!-- Owl-Carousel -->
    <script src="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('js/internal/main.js') }}"></script>

    <script>
        $('.fixed-bottom').css('bottom',-40);
    </script>

</body>

</html>
