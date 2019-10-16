@extends('layouts.master_menu_bottom')

@section('title','ชำระเงิน')

@section('content')

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

<div class="card ui-tab-card">
    <div class="card-body">
        <div class="heading-layout1 mg-b-25">
            <div class="item-title">
                <h3>Default Tab</h3>
            </div>
        </div>
        <div class="basic-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also</p>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel">
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also</p>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel">
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
