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
                        <img src="{{ URL::asset('images/bank/kbank.png') }}" alt="" style="width: 30px;">
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
                            <img src="{{ URL::asset('images/bank/scb.png') }}" alt="" style="width: 30px;">
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
                        <img src="{{ URL::asset('images/bank/ktb.png') }}" alt="" style="width: 30px;">
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
                        <img src="{{ URL::asset('images/bank/krungsri.png') }}" alt="" style="width: 30px;">
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
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control" autocomplete="off">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยหมายเลขรายการ" class="form-control" autocomplete="off">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <select class="select2" autocomplete="off">
                        <option value="">ค้นหาด้วยรอบการชำระเงิน (12 เดือนย้อนหลัง) *</option>
                        <option value="1">ต.ค. 2562</option>
                        <option value="2">ก.ย. 2562</option>
                        <option value="3">ส.ค. 2562</option>
                        <option value="3">ก.ค. 2562</option>
                        <option value="3">มิ.ย. 2562</option>
                        <option value="3">พ.ค. 2562</option>
                        <option value="3">เม.ย. 2562</option>
                        <option value="3">มี.ค. 2562</option>
                        <option value="3">ก.พ. 2562</option>
                        <option value="3">ม.ค. 2562</option>
                        <option value="3">ธ.ค. 2561</option>
                        <option value="3">พ.ย. 2561</option>
                    </select>
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
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                        <td>จ๋าย</td>
                        <td>ก.ย. 2562</td>
                        <td>900</td>
                        <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                        <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                    </tr>
                    <tr>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Bill and QR Table Area End Here -->

<!-- Invoice Modal -->
<div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="text-light mb-0">รายละเอียดหมายเลขรายการ: 987</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-light" aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <table class="detail">
                        <tbody>
                            <tr>
                                <td style="width: 40%;">ชื่อ:</td>
                                <td>ด.ช. อชิตะ ลิลิตสัจจะ</td>
                            </tr>
                            <tr>
                                <td>ชื่อเล่น:</td>
                                <td>คิด</td>
                            </tr>
                            <tr>
                                <td>โรงเรียน:</td>
                                <td>โรงเรียนทัพหลวง</td>
                            </tr>
                            <tr>
                                <td>รถ:</td>
                                <td>โกญจนาท (คันที่ 2)</td>
                            </tr>
                            <tr>
                                <td>คนขับ:</td>
                                <td>นายเริงศักดิ์ คำโสภา</td>
                            </tr>
                            <tr>
                                <td>เดือน:</td>
                                <td>กันยายน</td>
                            </tr>
                            <tr>
                                <td>ปี:</td>
                                <td>2562</td>
                            </tr>
                            <tr>
                                <td>ราคา:</td>
                                <td>900.00 บาท</td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                    </div>
                </div>
                <div class="modal-footer text-left d-block px-0 pt-4 pb-0"">
                    <p class="mb-2 w-100 text-red" style="line-height: 1"> โปรดชำระเงินภายในวันที่ 31 ตุลาคม 2562</p>
                    <p class="mb-2 small w-100" style="line-height: 1"> สามารถชำระได้ 2 ช่องทาง คือ โอนเงิน และ QR code</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice Modal End Here -->

<!-- QR Modal -->
<div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <img class="w-50 text-center" src="{{ URL::asset('images/qrcode_pay/350.png') }}" alt="">
                        <p class="text-center text-special-orange">สแกน QR Code เข้าบัญชี</p>
                        <p class="text-center">ชื่อ: นายภูมินท์ วงษ์ศิริ <br> เลขที่บัญชี: 002-2-85496-8 </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p class="mb-2 small w-100"> <img class="logo-payment" src="{{ URL::asset('images/logo-bear-bus-icon-orange.png') }}" alt=""> Accepts all banks | รับเงินได้จากทุกธนาคาร</p>
            </div>
        </div>
    </div>
</div>
<!-- QR Modal End Here -->

<script src="//maps.googleapis.com/maps/api/js"></script>

@endsection
