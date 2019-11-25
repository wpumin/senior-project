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
                    <div class="item-number"><span class="counter" id="up" data-num="{{ $no_1 }}"></span></div>
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
                    <div class="item-number"><span class="counter" id="down" data-num="{{ $no_3 }}"></span></div>
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
                    <div class="item-number"><span class="counter" id="self" data-num="{{ $no_2 }}"></span></div>
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
                    <div class="item-number"><span>฿</span><span class="counter" id="self" data-num="{{ $income }}"></span></div>
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
                <h3>ประจำคันรถที่ <?php if(($menu_active2 == "overview") && !empty($menu_active3 == "car1")) echo "1"; else echo "2";?>: เดือน{{$display_month}} {{$display_year}}</h3>
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
                <div class="col-3-xxxl col-xl-2 col-lg-6 col-12 form-group">
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
                        <th>ชื่อเล่น</th>
                        <th>หมายเลขรายการ</th>
                        <th>สถานะ</th>
                        <th>โรงเรียน</th>
                        <th>ผู้ปกครอง</th>
                        <th>ติดต่อ</th>
                        <th>จำนวนเงิน</th>
                    </tr>
                </thead>
                <tbody>

                        <?php $count=1; ?>

                        @foreach($data as $key => $info)

                        <tr>
                                <td><?php print $count ?></td>
                                <td>{{ $info['nickname'] }}</td>
                                <td>{{ $info['tran_key'] }}</td>
                                @if ($info['status_bill']  == '1')
                                <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                                @elseif ( $info['status_bill']  == '2')
                                <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                                @elseif ( $info['status_bill']  == '3')
                                <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                                @endif
                                {{-- <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td> --}}
                                <td>{{ $info['school'] }}</td>
                                <td>{{ $info['parent_name'] }}</td>
                                <td>{{ $info['phone'] }}</td>
                                <td>{{ $info['price'] }}.00</td>
                            </tr>

                        <?php $count++ ?>
                        @endforeach
                    {{-- <tr>
                        <td>1</td>
                        <td>จ๋าย</td>
                        <td>987</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr> --}}
                    {{-- <tr>
                        <td>2</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>
                        <td>900.00</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>จ๋า</td>
                        <td>986</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>ทัพหลวง</td>
                        <td>ภูมินท์ วงษ์ศิริ</td>
                        <td>089-811-5155</td>

                        <td>900.00</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Payment Table Area End Here -->


@endsection

@section('script')


@endsection
