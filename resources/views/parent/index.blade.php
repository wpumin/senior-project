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
    @foreach($datas as $key => $info)
        @if ($info['id'] == null)

        @else
        <a href="<?php echo "/parent/news/detail/"; ?>{{ $info['id'] }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{URL::asset($info['image'])}})"></div></a>
        @endif
    @endforeach
</div>
<!-- ไอแพดขึ้นไป -->
<div class="owl-carousel owl-theme d-none d-md-block mb-md-5">
    @foreach($datas as $key => $info)
        @if ($info['id'] == null)

        @else
        <a href="<?php echo "/parent/news/detail/"; ?>{{ $info['id'] }}"><div class="item" style="background-image: url({{ URL::asset($info['image'])}})"></div></a>
        @endif
    @endforeach
</div>
<!-- Owl-Carousel Area End Here-->

<div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card maptoggle" style="height: 490px; transition: 0.3s all;">
    <div class="card-body" style="padding: 15px; position: relative;">
        <span class="toggle-result flaticon-info-1 text-theme"></span>
        {{-- <div id="map" style=""></div> --}}
        <iframe type="text/html" frameborder="0" height="100%" width="100%" src="https://bear-bus.com/map" style="min-height: 435px; max-height: 900px" scrolling="no"></iframe>
        {{-- <div id="result" class="custom-scrollbar" style="display: none;"></div> --}}
    </div>
</div>

<div class="text-center">
    <a href="<?php echo "/parent/dashboard/".$_COOKIE['user_id']."/".$_COOKIE['secure_code']; ?>"><button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow seeall">แดชบอร์ด <i class="flaticon-keyboard-right-arrow-button ml-0"></i> </button></a>
</div>


@endsection

@section('script')

<script src="https://api.longdo.com/map/?key=d9d5dac05ff94fa24f89363eb7fbe538"></script>

<script>

    $('.sidebar-color').addClass('addHeight');

    // hide scrollup
    $(document).ready(function(){
        $("#map").attr("src","https://bear-bus.com/map");
        $('#scrollUp').css('z-index','-1');
    });

    $('.toggle-result').click(function(){
        $('#result').slideToggle();
        // console.log('asdasdasdasdasdasd');
        $('.maptoggle').toggleClass('customHeight');
    });

    function init() {

        map = new longdo.Map({
            placeholder: document.getElementById('map')
        });

        map.location({ lat: 15.263551, lon: 99.672852 }, true);
        map.zoomRange({ min:9, max: 16});
        map.Route.label(longdo.RouteLabel.Time);
        map.Route.line('road', { lineColor: '#ffbf29' });


        map.Route.placeholder(document.getElementById('result'));
        // เทศบาลตำบลบ้านไร่
        map.Route.add(new longdo.Marker({ lat: 15.083335, lon: 99.519920 },
            {
                title: 'จุดแจ้งเตือนที่ 1',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'เทศบาลตำบลบ้านไร่'
            }
        ));
        // ตำบลบ้านไร่
        map.Route.add(new longdo.Marker({ lat: 15.084132, lon: 99.542818  },
            {
                title: 'จุดแจ้งเตือนที่ 2',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลบ้านไร่'
            }
        ));
        // ตำบลหูช้าง
        map.Route.add(new longdo.Marker({ lat: 15.128309, lon: 99.644424 },
            {
                title: 'จุดแจ้งเตือนที่ 3',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลหูช้าง',
            }
        ));
        // ตำบลหนองฝาง
        map.Route.add(new longdo.Marker({ lat: 15.155432, lon: 99.684063 },
            {
                title: 'จุดแจ้งเตือนที่ 4',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลหนองฝาง'
            }
        ));
        // ตำบลเมืองการุ้ง
        map.Route.add(new longdo.Marker({ lat: 15.179317, lon: 99.697472 },
            {
                title: 'จุดแจ้งเตือนที่ 5',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลเมืองการุ้ง'
            }
        ));
        // ตำบลคลองโป่ง
        map.Route.add(new longdo.Marker({ lat: 15.215815, lon: 99.690587  },
            {
                title: 'จุดแจ้งเตือนที่ 6',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลคลองโป่ง'
            }
        ));
        // ตำบลวังหิน
        map.Route.add(new longdo.Marker({ lat: 15.253373, lon: 99.679328 },
            {
                title: 'จุดแจ้งเตือนที่ 7',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลวังหิน'
            }
        ));
        // ตำบลเขาตะพาบ
        map.Route.add(new longdo.Marker({ lat: 15.264788, lon: 99.680491 },
            {
                title: 'จุดแจ้งเตือนที่ 8',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลเขาตะพาบ'
            }
        ));
        // โรงเรียนหนองฉางวิทยา
        map.Route.add(new longdo.Marker({ lat: 15.382140, lon: 99.851870 },
            {
                title: 'โรงเรียนที่ 1,
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'โรงเรียนหนองฉางวิทยา'
            }
        ));
        // โรงเรียนธรรมานุวัตรวิทยา
        map.Route.add(new longdo.Marker({ lat: 15.390607, lon: 99.833714 },
            {
                title: 'โรงเรียนที่ 2',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'โรงเรียนธรรมานุวัตรวิทยา'
            }
        ));
        // โรงเรียนวัดหนองขุนชาติ
        map.Route.add(new longdo.Marker({ lat: 15.388589, lon: 99.835618 },
            {
                title: 'โรงเรียนที่ 3',
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
@endsection
