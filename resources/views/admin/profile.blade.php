@extends('layouts.master_sidebar')

@section('title','โปรไฟล์')

@section('content')

<div class="heading mt-md-2 text-left d-none d-md-block">
    <h3>โปรไฟล์</h3>
</div>
<div class="d-md-none text-center">
    <h3 class="text-special-orange"><b>โปรไฟล์แอดมิน</b></h3>
</div>
{{-- ข้อมูลคนแอดมิน --}}
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile text-center text-md-left d-none d-md-block pt-2 pb-3">
                <h3> ข้อมูลแอดมิน</h3>
            </div>
        </div>
        <div class="single-info-details">
            <div class="item-img">
                    <img src="" id="pic_user" alt="parent profile" class="parent-profile">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left"><span id="prefix1"></span><span id="f_name1"></span> <span id="l_name1"></span></h3>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                           {{-- <tr>
                                <td>ชื่อเล่น:</td>
                                <td class="font-medium text-dark-medium">ต๊อบ</td>
                            </tr> --}}
                            <tr>
                                <td>คันรถ:</td>
                                <td class="font-medium text-dark-medium"><span id="car_id"></span> (<span id="f_name2"></span> <span id="l_name2"></span>)</td>
                            </tr>
                            <tr>
                                <td>ไลน์ไอดี:</td>
                                <td class="font-medium text-dark-medium"><span id="line_id"></span></td>
                            </tr>
                            <tr>
                                <td>เบอร์โทร:</td>
                                <td class="font-medium text-dark-medium"><span id="phone"></span></td>
                            </tr>
                            <tr>
                                <td>ชื่อผู้ใช้:</td>
                                <td class="font-medium text-dark-medium"><span id="username"></span></td>
                            </tr>
                            <tr>
                                <td>ที่อยู่:</td>
                                <td class="font-medium text-dark-medium"><span id="address"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ข้อมูลคนขับรถ end --}}

<div class="mt-4 mt-md-5 text-center">
    <a href="<?php echo "/logout/".$_COOKIE['user_id']."/".$_COOKIE['secure_code']; ?>" onclick="deleteAllCookies()">
        {{-- <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow logout-btn"><i class="flaticon-logout pr-1"></i> ออกจากระบบ</button> --}}
        <form id="logoutform" action="{{url('/logout')}}" method="POST">
            {{-- <input class="btn-fill-lg bg-blue-dark btn-hover-yellow logout-btn" type="submit" value="ออกจากระบบ"></<input> --}}
            <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow logout-btn" form="logoutform"><i class="flaticon-logout pr-1"></i> ออกจากระบบ</button>
        </form>
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

        function deleteAllCookies() {

        var res = document.cookie;
        var multiple = res.split(";");


        for (var i = 0; i < multiple.length; i++) {

            var key = multiple[i].split("=");
            document.cookie = key[0] + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }

        for (var i = 0; i < multiple.length; i++) {

            var key = multiple[i].split("=");
            document.cookie = key[0] + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC; ;";
        }
        }

        $(document).ready(function(){
                $("#logoutform").submit(function(event){
                    deleteAllCookies();
                });

                $("#logoutform1").submit(function(event){
                    deleteAllCookies();
                });
        });


        document.getElementById("prefix1").innerHTML = getCookie('prefix');
        document.getElementById("f_name1").innerHTML = getCookie('f_name');
        document.getElementById("l_name1").innerHTML = getCookie('l_name');
        document.getElementById("f_name2").innerHTML = getCookie('f_name');
        document.getElementById("l_name2").innerHTML = getCookie('l_name');
        if(getCookie('image') != ""){
            document.getElementById("pic_user").src = '{{URL::asset('')}}'+getCookie('image');
        }else{
            document.getElementById("pic_user").src = '{{URL::asset("images/internal/figure/default.jpg")}}';
        }
        document.getElementById("car_id").innerHTML = getCookie('car_id');
        document.getElementById("line_id").innerHTML = getCookie('line_id');
        document.getElementById("phone").innerHTML = getCookie('phone');
        document.getElementById("username").innerHTML = getCookie('username');
        document.getElementById("address").innerHTML = getCookie('address');

        // don't remove use only this page
        jQuery(document).ready(function(){
            if (jQuery(window).width() > 567) {
                // jQuery(".dashboard-page-one").css("height", "inherit");
                // jQuery(".dashboard-page-one").css("margin-top", "7rem");
                // jQuery(".navbar-expand-md").css("position", "fixed");
                // jQuery(".navbar-expand-md").css("width", "100%");
                // jQuery(".navbar-expand-md").css("z-index", "99");
            }
        });

    </script>
@endsection
