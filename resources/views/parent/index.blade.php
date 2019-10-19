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
    <a href="#"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
</div>
<!-- ไอแพดขึ้นไป -->
<div class="owl-carousel owl-theme d-none d-md-block">
    <a href="#"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="#"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
</div>
<!-- Owl-Carousel Area End Here-->

{{-- <div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card">
    <div class="card-body" style="padding: 15px;">
        <div class="basic-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item _index">
                    <a class="nav-link active" data-toggle="tab" href="#gps" role="tab" aria-selected="true" style="border-radius: 4px 0 0 0;">เส้นทางการเดินรถ</a>
                </li>
                <li class="nav-item _index">
                    <a class="nav-link" data-toggle="tab" href="#route" role="tab" aria-selected="false" style="border-radius: 0 4px 0 0;">GPS ติดตามรถ</a>
                </li>
            </ul> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="gps" role="tabpanel">
                    <div id="map"></div>
                    <div id="result" class="custom-scrollbar"></div>
                </div>
                <div class="tab-pane fade" id="route" role="tabpanel">
                    <div> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit asperiores unde, commodi eius sit molestiae. Possimus dolorem id exercitationem, odio ipsa quos rerum laborum saepe consequatur! Minima repellendus laudantium quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi tenetur tempora repellat quisquam fugit, voluptas obcaecati, in at perspiciatis cupiditate, totam ducimus excepturi harum omnis eligendi maxime! Fugiat, officia incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iusto eum molestias beatae, vitae quaerat aspernatur explicabo iure iste, odio hic a accusamus quos, ab enim quasi facilis magni nihil. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum mollitia sequi adipisci saepe, non corrupti voluptates, quasi cupiditate, numquam laborum reiciendis iusto laboriosam libero sit repellendus neque at? Dolor, doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel atque saepe laudantium dignissimos dolore, aperiam nisi, incidunt aliquam dicta mollitia ullam quas fugiat ad aut ab quos commodi at? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorum beatae praesentium quo mollitia possimus dicta, quos iusto error quae officiis quis hic. Cumque tempore alias, nostrum necessitatibus provident facilis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime expedita, debitis saepe ad reprehenderit fugit hic. Provident molestiae explicabo neque? Possimus, ipsum voluptates inventore hic itaque ipsa amet ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus saepe nemo perferendis quia blanditiis in quibusdam necessitatibus facilis, sit ratione eius amet dolorum molestiae quos beatae aliquam maiores exercitationem! Minima! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, ipsa, debitis earum quidem cumque optio repudiandae illo, consequuntur eum harum reiciendis? Reprehenderit cumque suscipit in est illo ut assumenda beatae? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi amet laboriosam molestiae placeat, repellat perspiciatis delectus atque similique quis illum aliquam accusamus provident sequi veritatis voluptatibus nostrum sed assumenda! Voluptatem?</div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card">
    <div class="card-body" style="padding: 15px;">
        <div id="map" style="border-radius: 5px 5px 0 0;"></div>
        <div id="result" class="custom-scrollbar" style="border-radius: 0 0 8px 8px;"></div>
    </div>
</div>

<div class="text-center">
    <a href="{{ url('parent/dashboard') }}"><button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow seeall">ดูทั้งหมด <i class="flaticon-keyboard-right-arrow-button ml-0"></i> </button></a>
</div>


@endsection

@section('script')

<script src="https://api.longdo.com/map/?key=d9d5dac05ff94fa24f89363eb7fbe538"></script>

<script>

// hide scrollup
$(document).ready(function(){
    $('#scrollUp').css('z-index','-1');
});

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
            detail: 'เทศบาลตำบลบ้านไร่' 
        }
    ));
    // หูช้าง
    map.Route.add(new longdo.Marker({ lat: 15.147868, lon: 99.672083  },
        { 
            title: 'จุดรับส่งที่ 2', 
            detail: 'ตำบลหูช้าง' 
        }
    ));
    // การุ้ง
    map.Route.add(new longdo.Marker({ lat: 15.175955, lon: 99.696781 },
        { 
            title: 'จุดรับส่งที่ 3', 
            detail: 'ตำบลเมืองโบราณการุ้ง' 
        }
    ));
    // คลองโป่ง
    map.Route.add(new longdo.Marker({ lat: 15.215208, lon: 99.690788 },
        { 
            title: 'จุดรับส่งที่ 4', 
            detail: 'ตำบลบ้านคลองโป่ง' 
        }
    ));
    // เขาตะพาบ
    map.Route.add(new longdo.Marker({ lat: 15.260942, lon: 99.680222 },
        { 
            title: 'จุดรับส่งที่ 5', 
            detail: 'ตำบลเขาตะพาบ' 
        }
    ));
    // โรงเรียนหนองฉางวิทยา
    map.Route.add(new longdo.Marker({ lat: 15.382140, lon: 99.851870 },
        { 
            title: 'จุดรับส่งที่ 6', 
            detail: 'โรงเรียนหนองฉางวิทยา' 
        }
    ));
    // โรงเรียนธรรมานุวัตรวิทยา
    map.Route.add(new longdo.Marker({ lat: 15.390607, lon: 99.833714 },
        { 
            title: 'จุดรับส่งที่ 7', 
            detail: 'โรงเรียนธรรมานุวัตรวิทยา' 
        }
    ));
    // โรงเรียนวัดหนองขุนชาติ
    map.Route.add(new longdo.Marker({ lat: 15.388589, lon: 99.835618 },
        { 
            title: 'จุดรับส่งที่ 8', 
            detail: 'โรงเรียนวัดหนองขุนชาติ' 
        }
    ));
    map.Route.search();

}

</script>
@endsection
