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
                <img src="{{ URL::asset('images/internal/figure/admin.jpg') }}" alt="parent" class="parent-profile">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium text-center text-md-left">คุณ ภูมินท์ วงษ์ศิริ</h3>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                           <tr>
                                <td>ชื่อเล่น:</td>
                                <td class="font-medium text-dark-medium">ต๊อบ</td>
                            </tr>
                            <tr>
                                <td>คันรถ:</td>
                                <td class="font-medium text-dark-medium">2 (โกญจนาท เกษศิลป์)</td>
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
                                <td class="font-medium text-dark-medium">balalon</td>
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
{{-- ข้อมูลคนขับรถ end --}}

<div class="mt-4 mt-md-5 text-center">
    <a href="/" onclick="deleteAllCookies()">
        <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow logout-btn"><i class="flaticon-logout pr-1"></i> ออกจากระบบ</button>
    </a>
</div>

@endsection

@section('script')
    <script>
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
