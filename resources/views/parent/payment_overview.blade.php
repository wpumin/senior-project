@extends('layouts.master_menu_bottom')

@section('title','ชำระเงิน')

@section('content')

<!-- Bank Account Table Area Start Here -->
<div class="heading mt-5 pt-5 mt-md-0 pt-md-0 text-left">
    <h3>บัญชีธนาคาร</h3>
</div>
<div class="row gutters-20">
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-kbank hover-fb">
                <div class="media media-none--lg">
                    <div class="bank-icon">
                        {{-- <i class="fab fa-facebook-f"></i> --}}
                        {{-- <img src="{{}}" alt=""> --}}
                        <img src="{{ URL::asset('images/bank/kbank.png') }}" alt="kasikornthai" style="width: 30px;">
                    </div>
                    <div class="media-body space-sm">
                        <h6 class="item-title">ชื่อบัญชี: นายภูมินท์ วงษ์ศิริ</h6>
                    </div>
                </div>
                <div class="social-like">002-2-85496-8</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-scb hover-twitter">
                <div class="media media-none--lg">
                        <div class="bank-icon">
                            {{-- <i class="fab fa-twitter"></i> --}}
                            <img src="{{ URL::asset('images/bank/scb.png') }}" alt="scb" style="width: 30px;">
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title">ชื่อบัญชี: นายภูมินท์ วงษ์ศิริ</h6>
                        </div>
                </div>
                <div class="social-like">002-2-85496-8</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-ktb hover-gplus">
                <div class="media media-none--lg">
                    <div class="bank-icon">
                        {{-- <i class="fab fa-google-plus-g"></i> --}}
                        <img src="{{ URL::asset('images/bank/ktb.png') }}" alt="ktb" style="width: 30px;">
                    </div>
                    <div class="media-body space-sm">
                        <h6 class="item-title">ชื่อบัญชี: นายภูมินท์ วงษ์ศิริ</h6>
                    </div>
                </div>
                <div class="social-like">002-2-85496-8</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-krungsri hover-linked">
                <div class="media media-none--lg">
                    <div class="bank-icon">
                        {{-- <i class="fab fa-linkedin-in"></i> --}}
                        <img src="{{ URL::asset('images/bank/krungsri.png') }}" alt="krungsri" style="width: 30px;">
                    </div>
                    <div class="media-body space-sm">
                        <h6 class="item-title">ชื่อบัญชี: นายภูมินท์ วงษ์ศิริ</h6>
                    </div>
                </div>
                <div class="social-like">002-2-85496-8</div>
            </div>
        </div>
    </div>
</div>
<!-- Bank Account Table Area End Here -->

<!-- Bill and QR Table Area Start Here -->
<div class="heading mt-5 text-left">
    <h3>จ่ายเงินด้วย QR code</h3>
</div>
<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>รายการชำระเงิน</h3>
            </div>
        </div>
        {{-- <form class="mg-b-20"> --}}
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control" autocomplete="off" id="myInputName" onkeyup="myFunction()">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยหมายเลขรายการ" class="form-control" autocomplete="off" id="myInpNumber" onkeyup="myFunction()">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <select class="select2" autocomplete="off" id="myInputMonth" onchange="myFunction()">
                        <option value="">ค้นหาด้วยรอบการชำระเงิน (12 เดือนย้อนหลัง) *</option>
                        <option value="ต.ค.">ต.ค.</option>
                        <option value="ก.ย.">ก.ย.</option>
                        <option value="ส.ค.">ส.ค.</option>
                        <option value="ก.ค.">ก.ค.</option>
                        <option value="มิ.ย.">มิ.ย.</option>
                        <option value="พ.ค.">พ.ค.</option>
                        <option value="เม.ย.">เม.ย.</option>
                        <option value="มี.ค.">มี.ค.</option>
                        <option value="ก.พ.">ก.พ.</option>
                        <option value="ม.ค.">ม.ค.</option>
                        <option value="ธ.ค.">ธ.ค.</option>
                        <option value="พ.ย.">พ.ย.</option>
                    </select>
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        {{-- </form> --}}
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap" id="myTable">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>หมายเลขรายการ</th>
                        <th>สถานะ</th>
                        <th>ชื่อเล่น</th>
                        <th>เดือน</th>
                        <th>จำนวนเงิน (บาท)</th>
                        <th>รายละเอียด </th>
                        <th>สร้าง QR</th>
                    </tr>
                </thead>
                <tbody>

                        <?php $count=1; ?>

                        @foreach($data as $key => $info)

                        <tr>
                                <td><?php print $count ?></td>
                                <td>{{ $info['tran_key'] }}</td>

                                @if ($info['status']  == '1')
                                <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                                @elseif ( $info['status']  == '2')
                                <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                                @elseif ( $info['status']  == '3')
                                <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                                @endif
                                {{-- <td class="badge badge-pill badge-red d-block mg-t-8">{{ $info['status'] }}</td> --}}
                                <td>{{ $info['name'] }}</td>
                        <td>{{ $info['month'] }}  {{ $info['year'] }}</td>
                                <td>{{ $info['price'] }}</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal-{{ $info['tran_key'] }}"><span class="flaticon-invoice"></span></a> </td>
                        @if ($info['status']  == '2' || $info['status']  == '3')
                        <td> <a href="#"></a> - </td>
                        @else
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal-{{ $info['tran_key'] }}"><span class="flaticon-qr-code"></span></a> </td>
                        @endif

                        </tr>

                        <?php $count++ ?>
                        @endforeach
                    {{-- <tr>
                        <td>1</td>
                        <td>001</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>จ๋าย</td>
                        <td>ก.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr> --}}
                    {{-- <tr>
                        <td>2</td>
                        <td>002</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                        <td>จ่า</td>
                        <td>ก.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>003</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>ส.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>004</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>จ่า</td>
                        <td>ส.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>005</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>จ๋าย</td>
                        <td>ก.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>006</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>ก.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>007</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>มิ.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>008</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>มิ.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>009</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>พ.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>010</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>พ.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>011</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>เม.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>012</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>เม.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>013</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>มี.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>014</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>มี.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>015</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>ก.พ. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>016</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>ก.พ. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>017</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>ม.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>018</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>ม.ค. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>019</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>ธ.ค. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>020</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>ธ.ค. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>021</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>พ.ย. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>022</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>พ.ย. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>023</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>ต.ค. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>024</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>ต.ค. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>025</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ๋าย</td>
                        <td>ก.ย. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>026</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">ชำระแล้ว</td>
                        <td>จ่า</td>
                        <td>ก.ย. 2561</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Bill and QR Table Area End Here -->


@foreach($data as $key => $info)
<!-- Invoice Modal -->
<div class="modal fade" id="invoiceModal-{{ $info['tran_key'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="text-light mb-0">รายละเอียดหมายเลขรายการ: {{ $info['tran_key'] }}</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-light" aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <table class="detail">
                        <tbody>
                            <tr>
                                <td style="width: 40%;">ชื่อ:</td>
                                <td>{{ $info['fullname'] }}</td>
                            </tr>
                            <tr>
                                <td>ชื่อเล่น:</td>
                                <td>{{ $info['name'] }}</td>
                            </tr>
                            <tr>
                                <td>โรงเรียน:</td>
                                <td>โรงเรียน{{ $info['school'] }}</td>
                            </tr>
                            <tr>
                                <td>รถ:</td>
                                <td>({{ $info['car_id'] }})</td>
                            </tr>
                            <tr>
                                <td>คนขับ:</td>
                                <td>{{ $info['car_name'] }}</td>
                            </tr>
                            <tr>
                                <td>เดือน:</td>
                                <td>{{ $info['month'] }}</td>
                            </tr>
                            <tr>
                                <td>ปี:</td>
                                <td>{{ $info['year'] }}</td>
                            </tr>
                            <tr>
                                <td>ราคา:</td>
                                <td>{{ $info['price'] }} บาท</td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                    </div>
                </div>
                <div class="modal-footer text-left d-block px-0 pt-4 pb-0"">
                    <p class="mb-2 w-100 text-red" style="line-height: 1"> โปรดชำระเงินภายในวันที่ 3 ของทุกเดือน</p>
                    <p class="mb-2 small w-100" style="line-height: 1"> สามารถชำระได้ 2 ช่องทาง คือ โอนเงิน และ QR code</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice Modal End Here -->
@endforeach


@foreach($data as $key => $info)
<!-- QR Modal -->
<div class="modal fade" id="qrModal-{{ $info['tran_key'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-light" aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4 text-center">
                        <h2 class="mb-2 text-special-orange text-center pt-4">สแกนเพื่อชำระเงิน</h2>
                        <p class="text-center">กรุณาเปิดแอปพลิเคชันธนาคารและสแกน QR code เพื่อชำระเงิน</p>
                        <img class="w-50 text-center" src="{{asset($info['qrcode'])}}" alt="qr code">
                        <p class="text-center text-special-orange">สแกน QR Code เข้าบัญชี</p>
                        <p class="text-center">ชื่อ: นายภูมินท์ วงษ์ศิริ <br> เลขที่บัญชี: 002-2-85496-8 </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p class="mb-2 small w-100"> <img class="logo-payment" src="{{ URL::asset('images/logo-bear-bus-icon-orange.png') }}" alt="logo"> Accepts all banks | รับเงินได้จากทุกธนาคาร</p>
            </div>
        </div>
    </div>
</div>
<!-- QR Modal End Here -->
@endforeach

<script src="//maps.googleapis.com/maps/api/js"></script>

<script>
    function myFunction() {
      // Declare variables
      var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

      input = document.getElementById("myInputName");
      var input_num = document.getElementById("myInpNumber");
      var input_month = document.getElementById("myInputMonth");


      filter = input.value;
      filter_num = input_num.value;
      filter_month = input_month.value;

      table = document.getElementById("myTable");
    //   console.log('Filter: '+filter);
    //   console.log('Filter: '+filter_num);
    //   console.log('Filter: '+filter_month);
      tr = table.getElementsByTagName("tr");

    //   console.log(tr.length);

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {

        td_num = tr[i].getElementsByTagName("td")[1]; //choose table that search.
        td = tr[i].getElementsByTagName("td")[3]; //choose table that search.
        td_month = tr[i].getElementsByTagName("td")[4]; //choose table that search.
        // console.log(td);
        if (td) {
          txtValue = td.textContent || td.innerText;
          txtValue_num = td_num.textContent || td_num.innerText;
          txtValue_month = td_month.textContent || td_month.innerText;

        //   console.log('Total: '+txtValue);
        //   console.log('Total: '+txtValue_num);
        //   console.log('Total: '+txtValue_month);

          if (txtValue.indexOf(filter) > -1 && txtValue_num.indexOf(filter_num) > -1 && txtValue_month.indexOf(filter_month) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

@endsection
