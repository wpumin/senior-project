@extends('layouts.master_sidebar')

@section('title','แจ้งชำระเงิน')

@section('content')
<?php
    $current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $current_page = (explode("/",$current_url));
    // echo $menu_active;
    if(!empty($current_page[2]))
    {
        $menu_active = $current_page[2];
    }else{
        $menu_active = "";
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
                <h3>ประจำคันรถที่ <?php if(($menu_active2 == "confirm") && !empty($menu_active3 == "car1")) echo "1"; else echo "2";?>: เดือนตุลาคม 2562</h3>
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
                <div class="col-2-xxxl col-xl-2 col-lg-6 col-12 form-group">
                    <select class="form-control select2" autocomplete="off">
                        <option value="">ค้นหาด้วยชื่อเล่น</option>
                        <option value="1">จ๋าย</option>
                        <option value="2">จ่า</option>
                        <option value="3">สกาย</option>
                        <option value="3">แพรว</option>
                    </select>
                </div>
                <div class="col-3-xxxl col-xl-3 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยหมายเลขรายการ" class="form-control">
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
                        <th>หมายเลขรายการ</th>
                        <th>เวลาแจ้ง</th>
                        <th>บัญชี</th>
                        <th>ชื่อเล่น</th>
                        <th>โรงเรียน</th>
                        <th>จำนวนเงิน</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1;
                        if($menu_active3 == "car1"){
                            $temp_car = 1;
                        }else{
                            $temp_car = 2;
                        }
                    ?>

                    @foreach($datas as $key=>$data)

                        @if($data['car_id'] == $temp_car)
                            <tr>
                                <td>
                                <?php print $count ?>
                                </td>
                                <td>{{ $data['tran_key'] }}</td>
                                <td>{{ $data['date'] }}</td>
                                @if($data['bank_id'] == 1)
                                    <td class="badge badge-pill badge-kbank d-block mg-t-8">กสิกรไทย</td>
                                @elseif($data['bank_id'] == 2)
                                    <td class="badge badge-pill badge-scb d-block mg-t-8">ไทยพาณิชย์</td>
                                @elseif($data['bank_id'] == 3)
                                    <td class="badge badge-pill badge-ktb d-block mg-t-8">กรุงไทย</td>
                                @elseif($data['bank_id'] == 4)
                                    <td class="badge badge-pill badge-krungsri d-block mg-t-8">กรุงศรี</td>
                                @endif
                                <td>{{ $data['nickname'] }}</td>
                                <td>{{ $data['school'] }}</td>
                                <td>{{ $data['price'] }}</td>
                                <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                            </tr>
                            <?php $count++ ?>
                        @endif

                    @endforeach
                    {{-- <tr>
                        <td>1</td>
                        <td>987</td>
                        <td>26/10/2562 16:52:23</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>900.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>876</td>
                        <td>26/10/2562 16:51:12</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>900.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>900.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-scb d-block mg-t-8">ไทยพาณิชย์</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-kbank d-block mg-t-8">กสิกรไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-krungsri d-block mg-t-8">กรุงศรี</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>875</td>
                        <td>26/10/2562 16:50:02</td>
                        <td class="badge badge-pill bg-ktb d-block mg-t-8">กรุงไทย</td>
                        <td>จ๋าย</td>
                        <td>ทัพหลวง</td>
                        <td>650.00</td>
                        <td><a href="#" data-toggle="modal" data-target="#confirmModal"><span class="flaticon-bill"></a></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Payment Table Area End Here -->

<!-- Confirm Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-light" aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4 text-center">
                        <h3 class="mb-2 text-special-orange text-right py-2">หมายเลขรายการ: 987</h3>
                        <table>
                            <tbody class="text-left">
                                <tr>
                                    <td style="width: 40%">นักเรียน: </td>
                                    <td> ด.ช. สมเกียรติ เรียนดี</td>
                                </tr>
                                <tr>
                                    <td>ผู้ปกตรอง: </td>
                                    <td>นาย ธนงศักดิ์ เรียนดี</td>
                                </tr>
                                <tr>
                                    <td>ติดต่อ: </td>
                                    <td>089-811-5155</td>
                                </tr>
                                <tr>
                                    <td>โอนเข้าบัญชี: </td>
                                    <td>กรุงไทย</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <h6 class="mb-2 text-special-orange text-center py-2">หลักฐานการโอนเงิน (โปรดแสกน)</h6>
                        <img class="w-50 text-center" src="{{ URL::asset('images/internal/bill/246407.jpg') }}" alt="">
                        <h6 class="mb-2 text-special-orange text-center pt-4 pb-0">เป็นเงิน 4,000.00 บาท</h6>
                        <p class="text-center mb-2 small">จ่ายเมื่อ 4/10/2562 08:03</p>
                        <hr>
                        <div class="mt-2">
                            <button type="button" class="btn btn-secondary" id="confirmPayment">ยืนยัน</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirm Modal End Here -->

<!-- Modal: System error-->
<div class="modal fade" id="systemError" tabindex="-1" role="dialog" aria-labelledby="systemError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>กรุณาทำรายการใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- System error End Here -->

@endsection

@section('script')
<script>

    // ajax
    $('#confirmPayment').click(function(){

        $.ajax({
            type: "POST",
            url: ","
            // url: "http://localhost:8000/admin/confirm-payment",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:false,
            success: function(result){

                // ยืนยันลำเร็จ
                if(result.status == 'success') {
                    // ลบออกจากตารางแจ้งชำระเงิน แล้วเปลี่ยนสถานะการรอการตรวจสอบเป็น ชำระแล้ว
                    $('#confirmModal').modal('hide');
                }
            },
            error: function(result){
                $('#confirmModal').modal('hide');
                $(".wrap-modal > #systemError").modal('show');
            }
        });
    });

</script>
@endsection
