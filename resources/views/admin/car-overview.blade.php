@extends('layouts.master_sidebar')

@section('title','รายละเอียดเด็กบนรถ')

@section('content')

{{-- สำหรับเขียนเลขคันรถ ถ้าไม่ใช่ให้ทำ js แทน --}}
<?php
    $current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $current_page = (explode("/",$current_url));
    // $menu_active = $current_page[2];
    // echo $menu_active;
    if(!empty($current_page[2]))
    {
        $menu_active = $current_page[2];
    }else{
        $menu_active2 = "";
    }
    if(!empty($current_page[3]))
    {
        $menu_active2 = $current_page[3];
    }else{
        $menu_active2 = "";
    }
    if(!empty($current_page[4]))
    {
        $menu_active3 = $current_page[4];
    }else{
        $menu_active3 = "";
    }
    // echo '<pre>'. $menu_active . '</pre>';
    // echo '<pre>'. $menu_active2 . '</pre>';
    // echo '<pre>'. $menu_active3 . '</pre>';
?>

<style>
    .dataTables_paginate {
        display: none;
    }
</style>

<!-- Payment Table Area Start Here -->
<div class="heading text-left">
    <h3>รายละเอียดเด็กบนรถ</h3>
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
                        <div class="item-title">เดินทางเอง</div>
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
        <div class="heading-layout1 pt-4">
            <div class="item-title">
            <h3>ข้อมูลนักเรียนประจำคันรถที่ <?php if(($menu_active == "car-overview") && !empty($menu_active2 == "car1")) echo "1"; else echo "2";?></h3>
            </div>
            {{-- <div class="dropdown-refresh">
                    <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                </div> --}}
        </div>
        {{-- <form class="mg-b-20"> --}}
            <div class="row gutters-8">
                <div class="col-4-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control" id="nickname">
                </div>
                <div class="col-4-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อโรงเรียน" class="form-control" id="school">
                </div>
                <div class="col-3-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยเบอร์ติดต่อ" class="form-control" id="phone">
                </div>
                <div class="col-1-xxxl col-lg-3 col-12 form-group">
                    <button onclick="myFunction()" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                    {{-- <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button> --}}
                </div>
            </div>
        {{-- </form> --}}
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap" id="myTable">
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
                <tbody id="showForm">
                    {{-- เตรียมโหลดข้อมูล --}}
                    {{-- <tr>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Student Table Area End Here -->

<!-- Google Map Modal -->
<div class="modal fade pr-0" id="mapEmbed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
                {{-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> --}}
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                        {{-- <h2 class="mb-2 text-special-orange">กาย</h2>
                        <p>ด.ช. สมเกียรติ เรียนดี | โรงเรียนทัพหลวง</p> --}}
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
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                        <h2 class="mb-2 text-special-orange" id="nickname"></h2>
                        <p><span id="firstname"></span> <span id="surname"></span> | </span> <span id="school"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img class="w-100" id="imgProfile" src="" alt="student profile">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var javaScriptVar = "<?php echo $menu_active2; ?>";
</script>
<!-- Picture Modal End Here -->

    {{-- free --}}
    {{-- <script src="//maps.googleapis.com/maps/api/js"></script> --}}
    {{-- paid --}}
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDBR5ep3J8E9BF3ZLanAvD_mYdSWbbrSPY"></script>

    <script>

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";";
        }

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

        setInterval(function() {

            $.ajax({
                url: '/tasks/refresh',
                type: 'POST',
                data: {
                    car_id: javaScriptVar[3]
                },
                dataType: 'json',
                success: function(response) {

                    if (response.status == 'success') {
                        document.getElementById("no").innerHTML = response.data['no'];
                        document.getElementById("up").innerHTML = response.data['up'];
                        document.getElementById("down").innerHTML = response.data['down'];
                        document.getElementById("self").innerHTML = response.data['self'];
                    }
                },
                error: function(err) {

                }
            })

            $.ajax({
                url: '/tasks/refresh/student',
                type: 'POST',
                data: {
                    car_id: javaScriptVar[3]
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('#showForm').html('');
                        var status = '';
                        let modal = document.getElementById("studentProfile");
                        let modalImg = document.getElementById("imgProfile");
                        let modalNickName = document.getElementById("nickname");
                        let modalFirstName = document.getElementById("firstname");
                        let modalSurname = document.getElementById("surname");
                        let modalSchool = document.getElementById("school");
                        for (var i = 0; i < response['data'].length; i++) {

                            if (response['data'][i]['std_status_id'] == '1') {
                                status = '<td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>';
                            } else if (response['data'][i]['std_status_id'] == '2') {
                                status = '<td class="badge badge-pill badge-orange d-block mg-t-8">ขึ้นรถแล้ว</td>';
                            } else if (response['data'][i]['std_status_id'] == '3') {
                                status = '<td class="badge badge-pill badge-green d-block mg-t-8">ลงรถแล้ว</td>';
                            } else {
                                status = '<td class="badge badge-pill badge-gray d-block mg-t-8">เดินทางเอง</td>';
                            }

                            $('#showForm').append(
                                '<tr>' +
                                '<td>' + (i + 1) + '</td>' +
                                '<td>' + response['data'][i]['nickname'] + '</td>' +

                                status +
                                //modal
                                '<td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" desc=' +
                                response['data'][i]['name_school'] + ' name=' +
                                response['data'][i]['fullname_s'] +
                                ' src=https://bear-bus.com/' +
                                response['data'][i]['image'] +
                                ' alt=' + response['data'][i]['nickname'] +
                                '></a></td>' +
                                //modal

                                '<td>' + response['data'][i]['name_school'] + '</td>' +
                                '<td>' + response['data'][i]['user_name'] + '</td>' +
                                '<td>' + response['data'][i]['relationship'] + '</td>' +
                                '<td>' + response['data'][i]['phone'] + '</td>' +
                                '<td>' +
                                // '<div class="dropdown">' +
                                // '<a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat=' + response.data[i]['lattitude'] + ' data-lng=' + response.data[i]['longtitude'] + '>' +
                                // '<span class="flaticon-pin" data-toggle="modal" data-target="#mapEmbed"  data-lat="15.263551" data-lng="99.672852"></span>' +
                                '<div class="dropdown">' +
                                '<a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat=' + response.data[i]['lattitude'] + ' data-lng=' + response.data[i]['longtitude'] + '>' +
                                '<span class="flaticon-pin"></span>' +
                                '</a>' +
                                '</div>' +
                                '</td>' +
                                '</tr>'
                            );

                            let img = document.getElementsByClassName("myImg");
                            let firstname = response['data'][i]['first_name'];
                            let lastname = response['data'][i]['last_name'];
                            let nickname = response['data'][i]['nickname'];
                            let school = response['data'][i]['name_school'];

                            img[i].onclick = function() {
                                modal.style.display = "block";
                                modalImg.src = this.src;
                                modalFirstName.innerHTML = firstname;
                                modalSurname.innerHTML = lastname;
                                modalNickName.innerHTML = nickname;
                                modalSchool.innerHTML = school;

                            }
                        }

                    }
                },
                error: function(err) {

                }
            })
        }, 2000);

    function myFunction() {
          // Declare variables
          var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

          input_username = document.getElementById("nickname");
          var input_name = document.getElementById("school");
          var input_phone = document.getElementById("phone");

          filter_input_username = input_username.value;
          filter_input_name = input_name.value;
          filter_input_phone = input_phone.value;

          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {

            td_username = tr[i].getElementsByTagName("td")[1]; //choose table that search. (Username)
            td_name = tr[i].getElementsByTagName("td")[4]; //choose table that search. (Name)
            td_phone = tr[i].getElementsByTagName("td")[7]; //choose table that search. (Phone)

            if (td_name) {

              txtValue_username = td_username.textContent || td_username.innerText;
              txtValue_name = td_name.textContent || td_name.innerText;
              txtValue_phone = td_phone.textContent || td_phone.innerText;

              if (txtValue_username.indexOf(filter_input_username) > -1 && txtValue_name.indexOf(filter_input_name) > -1 && txtValue_phone.indexOf(filter_input_phone) > -1) {

                tr[i].style.display = "";
                $('#school').val(null);
                $('#nickname').val(null);
                $('#phone').val(null);
              } else {

                tr[i].style.display = "none";
                $('#school').val(null);
                $('#nickname').val(null);
                $('#phone').val(null);
              }
            }
          }
        }

    </script>

@endsection
