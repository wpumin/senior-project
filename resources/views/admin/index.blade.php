@extends('layouts.master_sidebar')

@section('title','หนักหลัก')

@section('content')

{{-- ปิด pagination สำหรับหน้า driver/index เท่านั้น --}}
<style>
    .dataTables_paginate {
        display: none;
    }
</style>

<!-- Owl-Carousel Area -->
<!-- คิวรี่ 2 ขนาด มือถือกับแท๊บเล็ตขึ้นไป -->
<!-- มือถือไล่สีแถบล่าง -->
<div class="heading text-left mt-5">
    <h3>อัพเดตข่าวสาร</h3>
</div>
<div class="owl-carousel owl-theme d-md-none">
    <a href="#">
        <div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
</div>
<!-- ไอแพดขึ้นไป -->
<div class="owl-carousel owl-theme d-none d-md-block">
    <a href="#">
        <div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
    <a href="#">
        <div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div>
    </a>
</div>
<!-- Owl-Carousel Area End Here-->

<!-- Dashboard summery Start Here -->
<div class="heading text-left">
    <h3>สถานะนักเรียน</h3>
</div>
<!-- Dashboard summery End Here -->

<!-- Student Table Area Start Here -->
<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ข้อมูลนักเรียนประจำคันรถ</h3>
            </div>
            {{-- <div class="dropdown-refresh">
                    <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                </div> --}}
        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อโรงเรียน" class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยเบอร์ติดต่อ" class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        </form>
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>ชื่อเล่น</th>
                        <th>สถานะ</th>
                        <th>รูปเด็ก</th>
                        <th>โรงเรียน</th>
                        <th>ชื่อผู้ปกครอง</th>
                        <th>ความสัมพันธ์</th>
                        <th>เบอร์ติดต่อ</th>
                        <th>จุดรับส่ง</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Student Table Area End Here -->

@endsection