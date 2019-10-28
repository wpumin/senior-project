@extends('layouts.master_sidebar')

@section('title','แจ้งชำระเงิน')

@section('content')


<!-- Payment Table Area Start Here -->
<div class="heading text-left">
    <h3>ภาพรวมการเงิน</h3>
</div>


<div class="row gutters-20">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bank-icon">
                        <img src="{{ URL::asset('images/bank/kbank.png') }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">กสิกรไทย</div>
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
                    <div class="item-icon bank-icon">
                        <img src="{{ URL::asset('images/bank/scb.png') }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">ไทยพาณิชย์</div>
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
                    <div class="item-icon bank-icon">
                        <img src="{{ URL::asset('images/bank/ktb.png') }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">กรุงไทย</div>
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
                    <div class="item-icon bank-icon">
                        <img src="{{ URL::asset('images/bank/krungsri.png') }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">กรุงศรี</div>
                        <div class="item-number"><span class="counter" id="self" data-num="8">8</span></div>
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
                <h3>ประจำคันรถที่ 1: เดือนตุลาคม 2562</h3>
            </div>
            {{-- <div class="dropdown-refresh">
                    <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                </div> --}}
        </div>
        <form class="mg-b-20 new-added-form">
            <div class="row gutters-8">
                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยรหัส" class="form-control">
                </div>
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <select class="form-control select2" required autocomplete="off">
                        <option value="">ค้นหาด้วยชื่อเล่น</option>
                        <option value="1">จ๋าย</option>
                        <option value="2">จ่า</option>
                        <option value="3">สกาย</option>
                        <option value="3">แพรว</option>
                    </select>
                </div>
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <select class="form-control select2" required autocomplete="off">
                        <option value="">ค้นหาด้วยจำนวนเงิน</option>
                        <option value="1">350.00</option>
                        <option value="2">500.00</option>
                        <option value="3">600.00</option>
                        <option value="4">650.00</option>
                        <option value="5">700.00</option>
                        <option value="6">900.00</option>
                    </select>
                </div>
                <div class="col-3-xxxl col-xl-2 col-lg-2 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยวันที่" class="form-control air-datepicker">
                    <i class="far fa-calendar-alt" style="position: absolute; right: -2rem;"></i>
                </div>  
                <div class="col-1-xxxl col-xl-1 col-lg-1 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        </form>
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>รหัส</th>
                        <th>ชื่อเล่น</th>
                        <th>โรงเรียน</th>
                        <th>จำนวนเงิน</th>
                        <th>เวลาแจ้ง</th>
                        <th>บัญชี</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>987</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>900.00</td>
                        <td>26/10/2562 16:52:23</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>876</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>900.00</td>
                        <td>26/10/2562 16:51:12</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>900.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>875</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-bill"></a></td>
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