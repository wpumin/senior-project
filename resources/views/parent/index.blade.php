@extends('layouts.master_menu_bottom')

@section('title','หน้าหลัก')

@section('content')

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

<!-- Owl-Carousel Area -->
<!-- คิวรี่ 2 ขนาด มือถือกับแท๊บเล็ตขึ้นไป -->
<!-- มือถือไล่สีแถบล่าง -->
<div class="heading text-left">
    <h3>อัพเดตข่าวสาร</h3>
</div>
<div class="owl-carousel owl-theme d-md-none">
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/true.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/seat_bus.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/brick.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/route.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/route2.jpg")}})"></div></a>
</div>
<!-- ไอแพดขึ้นไป -->
<div class="owl-carousel owl-theme d-none d-md-block">
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/true.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/seat_bus.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/brick.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/route.jpg")}})"></div></a>
    <a href="{{ url('parent/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/route2.jpg")}})"></div></a>
</div>
<!-- Owl-Carousel Area End Here-->

<div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card">
    <div class="card-body" style="padding: 15px; position: relative;">
        <span class="toggle-result flaticon-info-1 text-theme"></span>
        <div id="map" style=""></div>
        <div id="result" class="custom-scrollbar" style="display: none;"></div>
    </div>
</div>

<div class="text-center">
    <a href="{{ url('parent/dashboard') }}"><button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow seeall">ดูทั้งหมด <i class="flaticon-keyboard-right-arrow-button ml-0"></i> </button></a>
</div>


@endsection

@section('script')

<script src="https://api.longdo.com/map/?key=d9d5dac05ff94fa24f89363eb7fbe538"></script>

<script>
    $('.sidebar-color').addClass('addHeight');

    // hide scrollup
    $(document).ready(function(){
        $('#scrollUp').css('z-index','-1');
    });

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
    }

</script>
@endsection
