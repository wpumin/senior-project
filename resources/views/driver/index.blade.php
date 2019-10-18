@extends('layouts.master_menu_bottom')

@section('title','หนักหลัก')

@section('content')

    {{-- ปิด pagination สำหรับหน้า driver/index เท่านั้น --}}
    <style>
        .dataTables_paginate{
            display: none;
        }
    </style>

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

    <!-- Dashboard summery Start Here -->
    <div class="heading text-left">
        <h3>สถานะนักเรียน</h3>
    </div>
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-bench text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">ยังไม่ขึ้นรถ</div>
                            <div class="item-number"><span class="counter" id="no" data-num="{{$no}}"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-bus text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">ขึ้นรถแล้ว</div>
                            <div class="item-number"><span class="counter" id="up" data-num="{{$up}}"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green">
                            <i class="flaticon-school text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">ลงรถแล้ว</div>
                            <div class="item-number"><span class="counter" id="down" data-num="{{$down}}"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-black">
                            <i class="flaticon-calendar-1 text-black"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">แจ้งเดินทางเอง</div>
                            <div class="item-number"><span class="counter" id="self" data-num="{{$self}}"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- Google Map Modal -->
    <div class="modal fade pr-0" id="mapEmbed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
                {{-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> --}}
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <h2 class="mb-2 text-special-orange">กาย</h2>
                    <p>ด.ช. สมเกียรติ เรียนดี | โรงเรียนทัพหลวง</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 modal_body_map">
                    <div class="location-map" id="location-map">
                        <div style="width: 800px; height: 400px;" id="map_canvas"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Modal End Here -->

    <!-- Picture Modal-->
    <div class="modal fade" id="studentProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document" style="max-width: 450px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <h2 class="mb-2 text-special-orange" id="nickname" ></h2>
                    <p><span id="firstname"></span> <span id="surname"></span> | </span> <span id="school"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img class="w-100" id="imgProfile" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Picture Modal End Here -->

    <script src="//maps.googleapis.com/maps/api/js"></script>
    <script>


        setInterval(function(){
            
            $.ajax({
                url:'/tasks/refresh',
                type:'GET',
                dataType:'json',
                success:function(response){

                if(response.status == 'success'){
                    document.getElementById("no").innerHTML = response.data['no'];
                    document.getElementById("up").innerHTML = response.data['up'];
                    document.getElementById("down").innerHTML = response.data['down'];
                    document.getElementById("self").innerHTML = response.data['self'];
                }
                },error:function(err){

                }
            })

            $.ajax({
                url:'/tasks/refresh/student',
                type:'GET',
                dataType:'json',
                success:function(response){

                if(response.status == 'success'){
                    $('table tbody').html('');
                    var status = '';
                    let modal = document.getElementById("studentProfile");
                    let modalImg = document.getElementById("imgProfile");
                    let modalNickName = document.getElementById("nickname");
                    let modalFirstName = document.getElementById("firstname");
                    let modalSurname = document.getElementById("surname");
                    let modalSchool = document.getElementById("school");

                    // console.log(response.data['student'].length);
                    for(var i=0;i<response.data['student'].length;i++){

                        if (response.data['student'][i]['status'] == '1') {
                            status = '<td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>';
                        }else if (response.data['student'][i]['status'] == '2') {
                            status = '<td class="badge badge-pill badge-orange d-block mg-t-8">ขึ้นรถแล้ว</td>';
                        }else if (response.data['student'][i]['status'] == '3') {
                            status = '<td class="badge badge-pill badge-green d-block mg-t-8">ลงรถแล้ว</td>';
                        }else {
                            status = '<td class="badge badge-pill badge-gray d-block mg-t-8">แจ้งเดินทางเอง</td>';
                        }

                        $('table tbody').append(
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+response.data['student'][i]['nickname']+'</td>'+
                        status+
                        '<td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" desc='+response.data['student'][i]['name_school']+' name='+response.data['student'][i]['fullname_s']+' src={{URL::asset('')}}'+response.data['student'][i]['image_stu']+' alt='+response.data['student'][i]['nickname']+'></a></td>'+
                        '<td>'+response.data['student'][i]['name_school']+'</td>'+
                        '<td>'+response.data['student'][i]['fullname_u']+'</td>'+
                        '<td>'+response.data['student'][i]['relationship']+'</td>'+
                        '<td>'+response.data['student'][i]['mobile']+'</td>'+
                        '<td>'+
                        '<div class="dropdown">'+
                        '<a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='+response.data['student'][i]['lattitude']+' data-lng='+response.data['student'][i]['longtitude']+'>'+
                        '<span class="flaticon-pin"></span>'+
                        '</a>'+
                        '</div>'+
                        '</td>'+
                        '</tr>'
                        );


                        let img = document.getElementsByClassName("myImg");
                        let firstname = response.data['student'][i]['first_name'];
                        let lastname = response.data['student'][i]['last_name'];
                        let nickname = response.data['student'][i]['nickname'];
                        let school = response.data['student'][i]['name_school'];

                        img[i].onclick = function () {
                            // console.log(img[i]);
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            modalFirstName.innerHTML = firstname;
                            modalSurname.innerHTML = lastname;
                            modalNickName.innerHTML = nickname;
                            modalSchool.innerHTML = school;

                        }
                    }

                }
                },error:function(err){

                }
            })
        }, 2000);


    </script>
@endsection


