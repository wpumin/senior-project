@extends('layouts.master_menu_bottom')

@section('title','หน้าหลัก')

@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
        <h3>หน้าหลัก</h3>
        {{-- <ul>
            <li>
                <a href="#">หน้าหลัก</a>
            </li>
        </ul> --}}
    </div>
    <!-- Breadcubs Area End Here -->

    <!-- Owl-Carousel Area -->
    
    <!-- Owl-Carousel Area End Here-->


    <!-- Dashboard summery Start Here -->
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
                            <div class="item-number"><span class="counter" data-num="23">23 คน</span></div>
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
                            <div class="item-number"><span class="counter" data-num="34">34 คน</span></div>
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
                            <div class="item-number"><span class="counter" data-num="0">0 คน</span></div>
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
                            <div class="item-number"><span class="counter" data-num="2">2 คน</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>ข้อมูลนักเรียนประจำคันรถ</h3>
                    </div>
                    <div class="dropdown-refresh">
                        <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                    </div>
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
                            <tr>
                                <td>1</td>
                                <td>มายด์</td>
                                <td class="badge badge-pill badge-orange d-block mg-t-8">ขึ้นรถแล้ว</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.756664' data-lng='100.532987'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>มายด์2</td>
                                <td class="badge badge-pill badge-gray d-block mg-t-8">แจ้งเดินทางเอง</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.724490' data-lng='100.489828'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>มายด์3</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.724490' data-lng='100.489828'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>มายด์4</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>มายด์5</td>
                                <td class="badge badge-pill badge-green d-block mg-t-8">ลงรถแล้ว</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>มายด์6</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>มายด์7</td>
                                <td class="badge badge-pill badge-gray d-block mg-t-8">แจ้งเดินทางเอง</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>มายด์8</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>มายด์9</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>มายด์10</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>มายด์11</td>
                                <td class="badge badge-pill badge-orange d-block mg-t-8">ขึ้นรถแล้ว</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>มายด์12</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>มายด์13</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>มายด์14</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.725887' data-lng='100.492993'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>มายด์15</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ยังไม่ขึ้นรถ</td>
                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img src="images/internal/figure/student2.png" alt="student"></a></td>
                                <td>ทัพหลวง</td>
                                <td>ภูมินท์ วงษ์ศิริ</td>
                                <td>พ่อ</td>
                                <td>0898115155</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#mapEmbed" data-lat='13.756664' data-lng='100.532987'>
                                            <span class="flaticon-pin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Student Table Area End Here -->
    
        <!-- Google Map Modal -->
        <div class="modal fade" id="mapEmbed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
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
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 modal_body_content px-4">
                        <h2 class="mb-2 text-special-orange">มายด์</h2>
                        <p class="">ลภัสลัล จิรเวชสุนทรกุล | โรงเรียนทัพหลวง</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <img class="w-100" src="images/internal/figure/student2.png" alt="">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Picture Modal End Here -->

        <script src="//maps.googleapis.com/maps/api/js"></script>

        <script>
        
        responsive : {
            // breakpoint from 0 up
            0 : {
                option1 : value,
                option2 : value,
                ...
            },
            // breakpoint from 480 up
            480 : {
                option1 : value,
                option2 : value,
                ...
            },
            // breakpoint from 768 up
            768 : {
                option1 : value,
                option2 : value,
                ...
            }
        }
        
        </script>

@endsection
