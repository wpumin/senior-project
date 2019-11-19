<!doctype html>
<html class="no-js" lang="th">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ติดตามตำแหน่งรถรับส่วนักเรียน - Bear Bus </title>
    <meta name="description" content="">
    <meta rel="apple-mobile-web-app-status-bar" content="#aa7700">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/bearbus.png')}}">
    <!-- WOW -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/wow/animate.css') }}">
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
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/datepicker.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/animate.min.css') }}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/jquery.dataTables.min.css') }}">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <!-- Time Picker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/timepicker/mdtimepicker.css') }}">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/pignose.calendar.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/internal/style.css?v=1.0.0.3') }}">
    <!-- Modernize js -->
    <script src="{{ URL::asset('js/internal/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/external/jquery-3.4.1.min.js') }}"></script>
    <!-- WOW -->
    <script src="{{ URL::asset('plugins/wow/wow.min.js') }}"></script>
    <!-- Custom JS -->
    {{-- <script src="{{ URL::asset('js/external/main.js') }}"></script> --}}

</head>

<?php
    $current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $current_page = (explode("/",$current_url));
    if(!empty($current_page[3]))
    {
        $menu_active = $current_page[2];
    }else{
        $menu_active = "";
    }
    if(!empty($current_page[3]))
    {
        $menu_active2 = $current_page[3];
    }else{
        $menu_active2 = "";
    }
    if(!empty($current_page[4]))
    {
        $menu_active3 = $current_page[4];
    }else{
        $menu_active3 = "";
    }
?>

<body onload="init();">

    <div id="map" style=""></div>

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
    <!-- Full Calender Js -->
    <script src="{{ URL::asset('js/internal/datepicker.min.js') }}"></script>
    <!-- Chart Js -->
    <script src="{{ URL::asset('js/internal/Chart.min.js') }}"></script>
    <!-- Data Table Js -->
    <script src="{{ URL::asset('js/internal/jquery.dataTables.min.js') }}"></script>
    <!-- HighChart Js -->
    <script src="{{ URL::asset('js/internal/highcharts.js') }}"></script>
    <!-- Dropzone Js -->
    {{-- <script src="{{ URL::asset('plugins/dropzone/dropzone.js') }}"></script> --}}
    <!-- Owl-Carousel -->
    <script src="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
     <!-- Time Picker -->
     <script src="{{ URL::asset('plugins/timepicker/mdtimepicker.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ URL::asset('plugins/datepicker/pignose.calendar.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('js/internal/main.js') }}"></script>


    <script src="https://api.longdo.com/map/?key=d9d5dac05ff94fa24f89363eb7fbe538"></script>

    <script>

        $('.toggle-result').click(function(){
            $('#result').slideToggle();
        });

        setInterval(function(){
            $.getJSON('https://bear-bus.com/firebase/getlocation', function(result){
                // console.log(result['data']['lat']);
                map = new longdo.Map({
                placeholder: document.getElementById('map')
                });
                var marker = new longdo.Marker({ lon: result['data']['long'], lat: result['data']['lat'] },
                    {
                        title: 'รถรับส่งนักเรียน',
                        icon: {
                            url: 'https://bear-bus.com/images/internal/bearbus.png'
                        },
                        detail: 'ตำแหน่งปัจจุบัน',
                        // visibleRange: { min: 7, max: 9 },
                        draggable: false,
                        weight: longdo.OverlayWeight.Top,
                    });
                    init();

                    // marker.move(marker);
                    // map.location(longdo.LocationMode.Geolocation);
                    map.Overlays.add(marker);
            });
        }, 25000);

        // long do map
        function init() {

            map = new longdo.Map({
                placeholder: document.getElementById('map')
            });

            map.location({ lat: 15.263551, lon: 99.672852 }, true);
            map.zoomRange({ min:9, max: 16});
            map.Route.label(longdo.RouteLabel.Time);
            map.Route.line('road', { lineColor: '#ffbf29' });


            map.Route.placeholder(document.getElementById('result'));
            map.Route.add(new longdo.Marker({ lat: 15.083832, lon: 99.5170665 },
                {
                    title: 'จุดรับส่งที่ 1',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'เทศบาลตำบลบ้านไร่'
                }
            ));
            // หูช้าง
            map.Route.add(new longdo.Marker({ lat: 15.147868, lon: 99.672083  },
                {
                    title: 'จุดรับส่งที่ 2',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'ตำบลหูช้าง'
                }
            ));
            // การุ้ง
            map.Route.add(new longdo.Marker({ lat: 15.175955, lon: 99.696781 },
                {
                    title: 'จุดรับส่งที่ 3',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'ตำบลเมืองโบราณการุ้ง'
                }
            ));
            // คลองโป่ง
            map.Route.add(new longdo.Marker({ lat: 15.215208, lon: 99.690788 },
                {
                    title: 'จุดรับส่งที่ 4',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'ตำบลบ้านคลองโป่ง'
                }
            ));
            // เขาตะพาบ
            map.Route.add(new longdo.Marker({ lat: 15.260942, lon: 99.680222 },
                {
                    title: 'จุดรับส่งที่ 5',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'ตำบลเขาตะพาบ'
                }
            ));
            // ทุ่งนามงาม
            map.Route.add(new longdo.Marker({ lat: 15.313869, lon: 99.719501  },
                {
                    title: 'จุดรับส่งที่ 6',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'ตำบลทุ่งนางาม'
                }
            ));
            // โรงเรียนหนองฉางวิทยา
            map.Route.add(new longdo.Marker({ lat: 15.382140, lon: 99.851870 },
                {
                    title: 'จุดรับส่งที่ 7',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'โรงเรียนหนองฉางวิทยา'
                }
            ));
            // โรงเรียนธรรมานุวัตรวิทยา
            map.Route.add(new longdo.Marker({ lat: 15.390607, lon: 99.833714 },
                {
                    title: 'จุดรับส่งที่ 8',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'โรงเรียนธรรมานุวัตรวิทยา'
                }
            ));
            // โรงเรียนวัดหนองขุนชาติ
            map.Route.add(new longdo.Marker({ lat: 15.388589, lon: 99.835618 },
                {
                    title: 'จุดรับส่งที่ 9',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/busstop.png',
                    },
                    detail: 'โรงเรียนวัดหนองขุนชาติ'
                }
            ));
            map.Route.search();

            $('#map').find('.ldmap_placeholder').addClass('border-customtlr5');
        }

    </script>

</body>

</html>