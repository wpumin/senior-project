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

<div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card">
    <div class="card-body">
        <div class="basic-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#gps" role="tab" aria-selected="true">GPS ติดตามรถ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#route" role="tab" aria-selected="false">เส้นทางการเดินรถ</a>
                </li>
            </ul> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="gps" role="tabpanel">
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also</p>
                </div>
                <div class="tab-pane fade" id="route" role="tabpanel">
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

@endsection
