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
                <img src="" id="pic_user" alt="Parent" class="parent-profile">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left"><span id="prefix1"></span><span id="f_name1"></span> <span id="l_name1"></span></h3>
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
                                <td class="font-medium text-dark-medium" id="relationship"></td>
                            </tr>
                            <tr>
                                <td>ไลน์ไอดี:</td>
                                <td class="font-medium text-dark-medium" id="line_id"></td>
                            </tr>
                            <tr>
                                <td>เบอร์โทร:</td>
                                <td class="font-medium text-dark-medium" id="phone"></td>
                            </tr>
                            <tr>
                                <td>ชื่อผู้ใช้:</td>
                                <td class="font-medium text-dark-medium" id="username"></td>
                            </tr>
                            <tr>
                                <td>อีเมล:</td>
                                <td class="font-medium text-dark-medium" id="email"></td>
                            </tr>
                            <tr>
                                <td>ที่อยู่:</td>
                                <td class="font-medium text-dark-medium" id="address"></td>
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
        <div id="showForm">
        {{-- <div class="heading-layout1">
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
        </div> --}}
        </div>
        <div id="mapp">
        {{-- <div class="heading-layout1 pt-3">
            <div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">
                <h3> <i class="flaticon-address"></i> จุดรับส่ง</h3>
            </div>
        </div>
        <div class="w-100 maps">
            <iframe src="https://maps.google.com/maps?q=13.649467,100.495541&hl=es;z=14&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div> --}}
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

        // document.getElementById("pf_name").innerHTML = getCookie('f_name');
        document.getElementById("prefix1").innerHTML = getCookie('prefix');
        document.getElementById("f_name1").innerHTML = getCookie('f_name');
        document.getElementById("l_name1").innerHTML = getCookie('l_name');
        if(getCookie('image') != ""){
            document.getElementById("pic_user").src = '{{URL::asset('')}}'+getCookie('image');
        }else{
            document.getElementById("pic_user").src = '{{URL::asset("images/internal/figure/default.jpg")}}';
        }
        document.getElementById("relationship").innerHTML = getCookie('relationship_name');
        document.getElementById("line_id").innerHTML = getCookie('line_id');
        document.getElementById("phone").innerHTML = getCookie('phone');
        document.getElementById("username").innerHTML = getCookie('username');
        document.getElementById("email").innerHTML = getCookie('email');
        document.getElementById("address").innerHTML = getCookie('address');

        $.ajax({
                url: '/tasks/refresh/pf_student',
                type: 'POST',
                data: {
                    user_id : getCookie('user_id')
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        
                        $('#showForm').html('');
                        for (var i = 0; i < response.data['student'].length; i++) {
                            if (response.data['student'][i]['std_status_id'] == '1') {
                                status = '<td class="font-medium text-dark-medium">ยังไม่ขึ้นรถ</td>';
                                } else if (response.data['student'][i]['std_status_id'] == '2') {
                                status = '<td class="font-medium text-dark-medium">ขึ้นรถแล้ว</td>';
                                } else if (response.data['student'][i]['std_status_id'] == '3') {
                                status = '<td class="font-medium text-dark-medium">ลงรถแล้ว</td>';
                                } else if (response.data['student'][i]['std_status_id'] == '4') {
                                status = '<td class="font-medium text-dark-medium">แจ้งเดินทางเอง</td>';
                                } 


                        $('#showForm').append(
                            '<div class="heading-layout1">' + '<div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">' +
                            '<h3>ข้อมูลบุตรหลาน</h3>' + '<h3>' + (i + 1) + '</h3>' + '</div>' + '</div>' +

                            '<div class="single-info-details">' + '<div class="item-img">' + '<img src={{URL::asset('')}}'+ response.data['student'][i]['image']+' alt="parent" class="parent-profile">' + '</div>' + 
                             
                             '<div class="item-content">' + '<div class="header-inline item-header">' +
                             '<h3 class="text-dark-medium font-medium text-center text-md-left">' 
                             + response.data['student'][i]['prefix'] + response.data['student'][i]['first_name'] + ' ' + response.data['student'][i]['last_name']
                             + '</h3>' + '</div>' +

                             '<div class="info-table table-responsive">' + 
                             '<table class="table text-nowrap">' + 
                             '<tbody>' + 

                             '<tr>' + 
                             '<td>ชื่อเล่น:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['nickname'] +
                              '</td>' + 
                              '</tr>' +

                            //  '<tr>' + 
                            //  '<td>ความสัมพันธ์:</td>' + 
                            //  '<td class="font-medium text-dark-medium">' + response.data['student'][i]['relationship'] +
                            //  '</td>' +
                            //  '</tr>' +

                             '<tr>' + 
                             '<td>เบอร์โทร:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['phone'] +
                             '</td>' +
                             '</tr>' +

                             '<tr>' + 
                             '<td>โรงเรียน:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['name_school'] + 
                             '</td>' +
                             '</tr>' +

                             '<tr>' + 
                             '<td>รถ:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['name_driver'] +
                             ' ('+response.data['student'][i]['name'] +')' +
                             '</td>' +
                             '</tr>' +

                             '<tr>'+
                                '<td>สถานะ:</td>'+
                                status +
                            '</tr>'+
                        '</tbody>'+
                    '</table>'+

                '</div>'+
            '</div>'+
        '</div>'
                        );
                        $('#mapp').html('');

                        $('#mapp').append(

                            '<div class="heading-layout1 pt-3">'+
            '<div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">'+
                '<h3> <i class="flaticon-address"></i> จุดรับส่ง</h3>'+
            '</div>'+
        '</div>'+
        '<div class="w-100 maps">'+
            '<iframe src="https://maps.google.com/maps?q='+response.data['student'][i]['lattitude']+','+response.data['student'][i]['longtitude']+'&hl=es;z=14&output=embed" width="600" height="450"' +'frameborder="0" style="border:0;" allowfullscreen=""></iframe>'+
        '</div>'
                        );
                    }
                }
            },
                error: function(err) {

                }
            })


        setInterval(function() {
        $.ajax({
                url: '/tasks/refresh/pf_student',
                type: 'POST',
                data: {
                    user_id : getCookie('user_id')
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        
                        $('#showForm').html('');
                        for (var i = 0; i < response.data['student'].length; i++) {
                            if (response.data['student'][i]['status'] == '1') {
                                status = '<td class="font-medium text-dark-medium">ยังไม่ขึ้นรถ</td>';
                                } else if (response.data['student'][i]['status'] == '2') {
                                status = '<td class="font-medium text-dark-medium">ขึ้นรถแล้ว</td>';
                                } else if (response.data['student'][i]['status'] == '3') {
                                status = '<td class="font-medium text-dark-medium">ลงรถแล้ว</td>';
                                } else if (response.data['student'][i]['status'] == '4') {
                                status = '<td class="font-medium text-dark-medium">แจ้งเดินทางเอง</td>';
                                } 


                        $('#showForm').append(
                            '<div class="heading-layout1">' + '<div class="item-title heading-profile pt-2 pb-3 d-flex justify-content-between w-100">' +
                            '<h3>ข้อมูลบุตรหลาน</h3>' + '<h3>' + (i + 1) + '</h3>' + '</div>' + '</div>' +

                            '<div class="single-info-details">' + '<div class="item-img">' + '<img src={{URL::asset('')}}'+ response.data['student'][i]['image']+' alt="parent" class="parent-profile">' + '</div>' + 
                             
                             '<div class="item-content">' + '<div class="header-inline item-header">' +
                             '<h3 class="text-dark-medium font-medium text-center text-md-left">' 
                             + response.data['student'][i]['prefix'] + response.data['student'][i]['first_name'] + ' ' + response.data['student'][i]['last_name']
                             + '</h3>' + '</div>' +

                             '<div class="info-table table-responsive">' + 
                             '<table class="table text-nowrap">' + 
                             '<tbody>' + 

                             '<tr>' + 
                             '<td>ชื่อเล่น:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['nickname'] +
                              '</td>' + 
                              '</tr>' +

                            //  '<tr>' + 
                            //  '<td>ความสัมพันธ์:</td>' + 
                            //  '<td class="font-medium text-dark-medium">' + response.data['student'][i]['relationship'] +
                            //  '</td>' +
                            //  '</tr>' +

                             '<tr>' + 
                             '<td>เบอร์โทร:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['phone'] +
                             '</td>' +
                             '</tr>' +

                             '<tr>' + 
                             '<td>โรงเรียน:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['name_school'] + 
                             '</td>' +
                             '</tr>' +

                             '<tr>' + 
                             '<td>รถ:</td>' + 
                             '<td class="font-medium text-dark-medium">' + response.data['student'][i]['name_driver'] +
                             ' ('+response.data['student'][i]['name'] +')' +
                             '</td>' +
                             '</tr>' +

                             '<tr>'+
                                '<td>สถานะ:</td>'+
                                status +
                            '</tr>'+
                        '</tbody>'+
                    '</table>'+

                '</div>'+
            '</div>'+
        '</div>'
        


                        );
                    }
                }
            },
                error: function(err) {

                }
            })
        }, 7000);
        </script>
@endsection
