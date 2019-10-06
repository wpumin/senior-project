<!DOCTYPE html>
    <html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Basic SEO -->
        <meta name="description" content="Comfortable with the bare by school bus tracking">
        <meta name="robots" content="Bear Bus, BEAR BUS, School bus tracking">
        <meta name="googlebot" content="Bear Bus, BEAR BUS, School bus tracking">

        <title> @yield('title') - Bear Bus </title>
        
        <!-- Manifest -->
        <meta name="theme-color" content="#f1f1f1">
        <link rel="icon" href="{{ URL::asset('images/bearbus.png') }}">
        <link rel="manifest" href="../../../manifest.json">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/bootstrap.min.css') }}">

        <!-- // ! StyleSheet -->

        <!-- Datepicker -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.min.css') }}">
        <!-- Fullcalendar -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/core/main.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/daygrid/main.css') }}">
        <!-- Owl-Carousel -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.css') }}">
        <!-- Perfect-Scrollbar -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
        <!-- SweetAlert -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/sweetalert/sweetalert2.css') }}">
        <!-- WOW -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/wow/animate.css') }}">

        <!-- // TODO: Must to do everytime when you want to update stylesheet on server -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css?v=1.0.0.1') }}" >

        <!-- // ! Javascript -->
        <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
        <!-- Datepicker -->
        <script src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- Fullcalendar -->
        <script src="{{ URL::asset('plugins/fullcalendar/core/main.js') }}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/core/th.js') }}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/daygrid/main.js') }}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/interaction/main.js') }}"></script>
        <!-- Highcharts -->
        <script src="{{ URL::asset('plugins/highcharts/highcharts.js') }}"></script>
        <!-- Owl-Carousel -->
        <script src="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- Perfect-Scrollbar -->
        <script src="{{ URL::asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <!-- Sweet-Alert -->
        <script src="{{ URL::asset('plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
        <!-- Validate -->
        <script src="{{ URL::asset('plugins/validate/jquery.validate.min.js') }}"></script>
        <!-- WOW -->
        <script src="{{ URL::asset('plugins/wow/wow.min.js') }}"></script>

        <!-- Onesignal -->
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            var OneSignal = window.OneSignal || [];
            OneSignal.push(function () {
                OneSignal.init({
                    appId: "74f3cba2-78c1-4a35-b99f-305a6e8137b5",
                    safari_web_id: "web.onesignal.auto.579431ec-451c-467f-a977-87d9f3b6152b",
                    autoRegister: true
                });
            });
        </script>

        
        <script src="{{ URL::asset('js/main.js') }}"></script>

    </head>
    <body>

        <header>
            <div class="row1" id="header-on-scroll">
                {{-- desktop --}}
                <div class="header d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="left d-none d-flex flex-row align-items-center">
                                    <img src="{{ url("images/login/logo-white.png") }}" alt="">
                                    <div class="left_sub d-flex flex-column align-items-start pl-3">
                                        <label>ระบบอำนวยความสะดวกเพื่อรถรับส่งนักเรียน</label>
                                        <label>Convenient transportation system for school bus</label>
                                    </div>
                                </div>
                                <div class="right d-none d-lg-flex flex-row align-items-center">
                                    <div class="right_sub d-flex flex-column align-items-start pl-3">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>ชื่อผู้ใช้งาน</td>
                                                    <td>:</td>
                                                    <td>Ashita Leeletsajja</td>
                                                </tr>
                                                <tr>
                                                    <td>บทบาทผู้ใช้งาน</td>
                                                    <td>:</td>
                                                    <td class="text-center role">คนขับรถ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="right_sub d-flex flex-column align-items-start pl-3">
                                        <a href="#"class="sign-out submit-box d-flex flex-row align-items-center"><object data="{{ url("images/general/logout.svg") }}" type=""></object> ออกจากระบบ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                {{-- mobile and tablet --}}
                <div class="mobile-header d-block d-lg-none" id="mobile-on-scroll">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <div class="left">
                                    <ul class="d-none d-md-block">
                                        <li class="hamburger">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <object data="{{ url("images/home/notification.svg") }}" type=""></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- only sub menu of tablet --}}
            <div class="row2">
                <div class="panel-menu-tablet">
                    <div class="container">
                        <ul class="d-flex flex-column d-lg-none justify-content-between mt-5  main-menu-tablet">
                            <li class="drop-down"><a href="#">หน้าหลัก</a>
                            <li class="drop-down" id="about-mobile"><span class="title-menu">เกี่ยวกับสำนักงาน</span>
                                <ul class=" about-mobile">
                                    <li class="col-12 col-lg-4 col-xl-3"><a href="#">ประวัติสำนักงาน</a></li>
                                    <li class="col-12 col-lg-4 col-xl-3"><a href="#">ประวัติสำนักงาน</a></li>
                                </ul>
                            </li>
                            <li class="drop-down" id="main-mission-mobile"><span class="title-menu">ภารกิจหลัก</span>
                                <ul class=" about-mobile">
                                    <li class="col-12 col-lg-4 col-xl-3"><a href="#">ประวัติสำนักงาน</a></li>
                                    <li class="col-12 col-lg-4 col-xl-3"><a href="#">ประวัติสำนักงาน</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <aside>

        </aside>

        @yield('content')     

        <footer>

        </footer>

    </body>
</html>
