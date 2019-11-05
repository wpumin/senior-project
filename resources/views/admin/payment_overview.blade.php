@extends('layouts.master_sidebar')

@section('title','แจ้งชำระเงิน')

@section('content')

<?php
    $current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $current_page = (explode("/",$current_url));
    $menu_active = $current_page[2];
    // echo $menu_active;
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

<!-- Payment Table Area Start Here -->
<div class="heading text-left">
    <h3>ภาพรวมการเงิน</h3>
</div>


<div class="row gutters-20">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-red">
                        <i class="flaticon-cancel-event-interface-symbol-of-a-calendar-with-a-cross-button text-red"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">ค้างชำระ</div>
                        <div class="item-number"><span class="counter" id="up" data-num="7">7</span></div>
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
                        <i class="flaticon-calendar-1 text-orange"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">รอการยืนยัน</div>
                        <div class="item-number"><span class="counter" id="down" data-num="10">10</span></div>
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
                        <i class="flaticon-calendar text-green"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">ชำระแล้ว</div>
                        <div class="item-number"><span class="counter" id="self" data-num="40">40</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-blue">
                        <i class="flaticon-money text-blue"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">รายได้ปัจจุบัน</div>
                        <div class="item-number"><span>฿</span><span class="counter" id="self" data-num="32400">32400</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ประจำคันรถที่ <?php if(($menu_active2 == "overview") && !empty($menu_active3 == "car1")) echo "1"; else echo "2";?>: เดือนตุลาคม 2562</h3>
            </div>
            {{-- <div class="dropdown-refresh">
                    <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                </div> --}}
        </div>
        <form class="mb-5 mb-lg-0 new-added-form">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-6 col-12 form-group">
                    <select class="form-control select2" autocomplete="off">
                        <option value="1">ตุลาคม 2562</option>
                        <option value="2">กันยายน 2562</option>
                        <option value="3">สิงหาคม 2562</option>
                        <option value="4">กรกฎาคม 2562</option>
                        <option value="5">มิถุนายน 2562</option>
                        <option value="6">พฤษภาคม 2562</option>
                    </select>
                </div>
                <div class="col-3-xxxl col-xl-3 col-lg-6 col-12 form-group">
                    <select class="form-control select2" autocomplete="off">
                        <option value="">ค้นหาด้วยจำนวนเงิน</option>
                        <option value="1">350.00</option>
                        <option value="2">500.00</option>
                        <option value="3">600.00</option>
                        <option value="4">650.00</option>
                        <option value="5">700.00</option>
                        <option value="6">900.00</option>
                    </select>
                </div>
                <div class="col-3-xxxl col-xl-2 col-lg-6 col-12 form-group">
                    <select class="form-control select2" autocomplete="off">
                        <option value="">ค้นหาด้วยชื่อเล่น</option>
                        <option value="1">จ๋าย</option>
                        <option value="2">จ่า</option>
                        <option value="3">สกาย</option>
                        <option value="3">แพรว</option>
                    </select>
                </div>
                <div class="col-2-xxxl col-xl-2 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยรหัส" class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-12 col-12 form-group pb-lg-5 pb-xl-0">
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
                        <th>โรงเรียน</th>
                        <th>ผู้ปกครอง</th>
                        <th>ติดต่อ</th>
                        <th>รหัส</th>
                        <th>จำนวนเงิน</th>
                        <th>สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>987</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>                    
                    <tr>
                        <td>13</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>จ๋า</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>986</td>
                        <td>900.00</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Payment Table Area End Here -->

<!-- Report Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog1 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <table class="detail">
                        <tbody>
                            <tr>
                                <td style="width: 30%;">หัวข้อ:</td>
                                <td>คนขับรถโกญจนาท ขับรถเร็วครับ</td>
                            </tr>
                            <tr>
                                <td>ประเภท:</td>
                                <td>พฤติกรรมคนขับ</td>
                            </tr>
                            <tr>
                                <td>เวลาแจ้ง:</td>
                                <td>24/10/2562 06:54:23</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="my-4">
                        รายละเอียด: <br>
                        รถรับส่งนักเรียน (โกญจนาท เกษศิลป์) ขับเร็ว
                        มากครับ วันก่อนผมเจอเส้นโรงเรียนบ้านไร่วิทยา
                        ยังไงรบกวนช่วยอบรมคนขับด้วยนะครับ เป็นห่วง
                        บุตรหลานจริง ๆ
                    </p>
                    <p class="text-right mb-2">
                        นาย สมัคร ลิลิตสัจจะ <br>
                        087-234-2721
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Report Modal End Here -->

@endsection