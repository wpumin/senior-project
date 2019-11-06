@extends('layouts.master_menu_bottom')

@section('title','โปรไฟล์')

@section('content')

<div class="heading text-left d-none d-md-block">
    <h3>โปรไฟล์</h3>
</div>
<div class="d-md-none text-center">
    <h3 class="text-special-orange"><b>โปรไฟล์ผู้ปกครอง</b></h3>
</div>

<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile text-center text-md-left d-none d-md-block pt-2 pb-3">
                <h3> ข้อมูลผู้ปกครอง</h3>
            </div>
        </div>
        <div class="single-info-details">
            <div class="item-img">
                {{-- <img src="{{ URL::asset('images/internal/figure/parent.jpg') }}" alt="parent" class="parent-profile"> --}}
                <img src="" id="photo_user" alt="Parent">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left">คุณ ภูมินท์ วงษ์ศิริ</h3>
                    {{-- <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                            <tr>
                                <td>ความสัมพันธ์:</td>
                                <td class="font-medium text-dark-medium" id="role_user"></td>
                            </tr>
                            <tr>
                                <td>ไลน์ไอดี:</td>
                                <td class="font-medium text-dark-medium">nonstop27</td>
                            </tr>
                            <tr>
                                <td>เบอร์โทร:</td>
                                <td class="font-medium text-dark-medium">089-811-5155</td>
                            </tr>
                            <tr>
                                <td>ชื่อผู้ใช้:</td>
                                <td class="font-medium text-dark-medium">nonstop</td>
                            </tr>
                            <tr>
                                <td>อีเมล:</td>
                                <td class="font-medium text-dark-medium">pumin.wongsiri@gmail.com</td>
                            </tr>
                            <tr>
                                <td>ที่อยู่:</td>
                                <td class="font-medium text-dark-medium">49 ซอยเทอดไท 15 ถนนเทอดไท บางยี่เรือ ธนบุรี กทม. 10600</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-md-none text-center">
    <h3 class="text-special-orange"><b>โปรไฟล์บุตรหลาน</b></h3>
</div>

{{-- คนสุดท้ายใส่คลาส pb-0 ด้วยตอนคิวรี่ --}}

{{-- ข้อมูลบุตรหลาน --}}
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3>ข้อมูลบุตรหลาน</h3>
                <h3>#1</h3>
            </div>
        </div>
        <div class="single-info-details">
            <div class="item-img">
                <img src="{{ URL::asset('images/internal/figure/studen10.png') }}" alt="parent" class="parent-profile">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left">นางสาว ลภัสลัล จิรเวชสุนทรกุล</h3>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                             <tr>
                                <td>ชื่อเล่น:</td>
                                <td class="font-medium text-dark-medium">มายด์</td>
                            </tr>
                            <tr>
                                <td>ความสัมพันธ์:</td>
                                <td class="font-medium text-dark-medium">ลูก</td>
                            </tr>
                            <tr>
                                <td>เบอร์โทร:</td>
                                <td class="font-medium text-dark-medium">090-978-5703</td>
                            </tr>
                            <tr>
                                <td>โรงเรียน:</td>
                                <td class="font-medium text-dark-medium">ทัพหลวง</td>
                            </tr>
                            <tr>
                                <td>รถ:</td>
                                <td class="font-medium text-dark-medium">โกญจนาท (คันที่ 2)</td>
                            </tr>
                            <tr>
                                <td>สถานะ:</td>
                                <td class="font-medium text-dark-medium">ขึ้นรถแล้ว (เช้า)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="heading-layout1 pt-3">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3> <i class="flaticon-address"></i> จุดรับส่ง</h3>
            </div>
        </div>
        <div class="w-100 maps">
            <iframe src="https://maps.google.com/maps?q=13.649467,100.495541&hl=es;z=14&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>

{{-- ข้อมูลบุตรหลาน end --}}

{{-- ข้อมูลบุตรหลาน --}}
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3>ข้อมูลบุตรหลาน</h3>
                <h3>#2</h3>
            </div>
        </div>
        <div class="single-info-details">
            <div class="item-img">
                <img src="{{ URL::asset('images/internal/figure/student15.jpg') }}" alt="parent" class="parent-profile">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left">นายโกญจนาท เกษศิลป์</h3>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                             <tr>
                                <td>ชื่อเล่น:</td>
                                <td class="font-medium text-dark-medium">บล้อน</td>
                            </tr>
                            <tr>
                                <td>ความสัมพันธ์:</td>
                                <td class="font-medium text-dark-medium">ลูก</td>
                            </tr>
                            <tr>
                                <td>เบอร์โทร:</td>
                                <td class="font-medium text-dark-medium">090-978-5703</td>
                            </tr>
                            <tr>
                                <td>โรงเรียน:</td>
                                <td class="font-medium text-dark-medium">ทัพหลวง</td>
                            </tr>
                            <tr>
                                <td>รถ:</td>
                                <td class="font-medium text-dark-medium">สินาท (คันที่ 1)</td>
                            </tr>
                            <tr>
                                <td>สถานะ:</td>
                                <td class="font-medium text-dark-medium">ขึ้นรถแล้ว (เช้า)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="heading-layout1 pt-3">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3> <i class="flaticon-address"></i> จุดรับส่ง</h3>
            </div>
        </div>
        <div class="w-100 maps">
            <iframe src="https://maps.google.com/maps?q=13.649467,100.495541&hl=es;z=14&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
{{-- ข้อมูลบุตรหลาน end --}}

{{-- ข้อมูลบุตรหลาน --}}
<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3>ข้อมูลบุตรหลาน</h3>
                <h3>#3</h3>
            </div>
        </div>
        <div class="single-info-details">
            <div class="item-img">
                <img src="{{ URL::asset('images/internal/figure/student16.jpg') }}" alt="parent" class="parent-profile">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left">นาย อชิตะ ลิลิจสัจจะ</h3>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                             <tr>
                                <td>ชื่อเล่น:</td>
                                <td class="font-medium text-dark-medium">คิด</td>
                            </tr>
                            <tr>
                                <td>ความสัมพันธ์:</td>
                                <td class="font-medium text-dark-medium">หลาน</td>
                            </tr>
                            <tr>
                                <td>เบอร์โทร:</td>
                                <td class="font-medium text-dark-medium">090-978-5703</td>
                            </tr>
                            <tr>
                                <td>โรงเรียน:</td>
                                <td class="font-medium text-dark-medium">ทัพหลวง</td>
                            </tr>
                            <tr>
                                <td>รถ:</td>
                                <td class="font-medium text-dark-medium">โกญจนาท (คันที่ 2)</td>
                            </tr>
                            <tr>
                                <td>สถานะ:</td>
                                <td class="font-medium text-dark-medium">ขึ้นรถแล้ว (เช้า)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="heading-layout1 pt-3">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3> <i class="flaticon-address"></i> จุดรับส่ง</h3>
            </div>
        </div>
        <div class="w-100 maps">
            <iframe src="https://maps.google.com/maps?q=13.649467,100.495541&hl=es;z=14&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
{{-- ข้อมูลบุตรหลาน end --}}

<div class="mt-4 mt-md-5 text-center">
    <a href="/" onclick="deleteAllCookies()">
        <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow logout-btn"><i class="flaticon-logout pr-1"></i> ออกจากระบบ</button>
    </a>
</div>

@endsection

@section('script')

<script>

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

        var fullname_u = document.getElementById("fullname").innerHTML = getCookie('fullname_u');
        var relationship = document.getElementById("role_user").innerHTML = getCookie('role_name');
        var first_name = document.getElementById("f_name").innerHTML = getCookie('f_name');
        var last_name = document.getElementById("l_name").innerHTML = getCookie('l_name');
        if(getCookie('image') != ""){
            var image = document.getElementById("photo_user").src = '{{URL::asset('')}}'+getCookie('image');
        }else{
            var image2 = document.getElementById("photo_user").src = '{{URL::asset("images/internal/figure/default.jpg")}}';
        }

        console.log(fullname_u)

        $.ajax({
            type: "POST",
            url: "http://localhost:8000/register/user",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:false,
            data: {
                image: image,
                image2: image2,
                fullname_u: fullname_u,
                relationship: relationship,
                first_name:first_name,
                last_name: last_name,

            },
            success: function(result){
                alert("success")
            },
            error: function(){
                // เซิร์ฟเวอร์มีปัญหา
            }
        });
        </script>
@endsection
