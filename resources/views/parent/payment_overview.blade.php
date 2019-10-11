@extends('layouts.master_menu_bottom')

@section('title','ชำระเงิน')

@section('content')

<style>

</style>

    <!-- QR Table Area Start Here -->
    <div class="heading mt-5 text-left">
        <h3>จ่ายเงินด้วย QR code</h3>
    </div>
    <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>รายการชำระเงิน</h3>
                    </div>
                    <div class="dropdown-refresh">
                        <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                    </div>
                </div>
                <form class="mg-b-20 ">
                    <div class="row gutters-8">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยหมายเลขรายการ" class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <select class="select2">
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
                                <th>ชื่อเล่น</th>
                                <th>เดือน</th>
                                <th>จำนวนเงิน (บาท)</th>
                                <th>สถานะ</th>
                                <th>รายละเอียด </th>
                                <th>สร้าง QR</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>001</td>
                                <td>จ๋าย</td>
                                <td>ก.ย. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>002</td>
                                <td>จ่า</td>
                                <td>ก.ย. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-orange d-block mg-t-8">รอการตรวจสอบ</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>003</td>
                                <td>จ๋าย</td>
                                <td>ส.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>004</td>
                                <td>จ่า</td>
                                <td>ส.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>005</td>
                                <td>จ๋าย</td>
                                <td>ก.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-red d-block mg-t-8">ค้างชำระ</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>006</td>
                                <td>จ่า</td>
                                <td>ก.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>007</td>
                                <td>จ๋าย</td>
                                <td>มิ.ย. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>008</td>
                                <td>จ่า</td>
                                <td>มิ.ย. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>009</td>
                                <td>จ๋าย</td>
                                <td>พ.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>010</td>
                                <td>จ่า</td>
                                <td>พ.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>011</td>
                                <td>จ๋าย</td>
                                <td>เม.ย. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>012</td>
                                <td>จ่า</td>
                                <td>เม.ย. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>013</td>
                                <td>จ๋าย</td>
                                <td>มี.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>014</td>
                                <td>จ่า</td>
                                <td>มี.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>015</td>
                                <td>จ๋าย</td>
                                <td>ก.พ. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>016</td>
                                <td>จ่า</td>
                                <td>ก.พ. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>017</td>
                                <td>จ๋าย</td>
                                <td>ม.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>018</td>
                                <td>จ่า</td>
                                <td>ม.ค. 2562</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>019</td>
                                <td>จ๋าย</td>
                                <td>ธ.ค. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>020</td>
                                <td>จ่า</td>
                                <td>ธ.ค. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>021</td>
                                <td>จ๋าย</td>
                                <td>พ.ย. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>022</td>
                                <td>จ่า</td>
                                <td>พ.ย. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>023</td>
                                <td>จ๋าย</td>
                                <td>ต.ค. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>024</td>
                                <td>จ่า</td>
                                <td>ต.ค. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>025</td>
                                <td>จ๋าย</td>
                                <td>ก.ย. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>026</td>
                                <td>จ่า</td>
                                <td>ก.ย. 2561</td>
                                <td>900</td>
                                <td class="badge badge-pill badge-light-gray d-block mg-t-8">ชำระแล้ว</td>
                                <td> <a href="#" data-toggle="modal" data-target="#invoiceModal"><span class="flaticon-invoice"></span></a> </td>
                                <td> <a href="#" data-toggle="modal" data-target="#qrModal"><span class="flaticon-qr-code"></span></a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- QR Table Area End Here -->
    
        <!-- Invoice Modal -->
        <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-light" aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 modal_body_content px-4">
                            <h2 class="mb-2 text-special-orange">กาย</h2>
                            <p>ด.ช. สมเกียรติ เรียนดี | โรงเรียนทัพหลวง</p>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                                detail
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice Modal End Here -->

        <!-- QR Modal -->
        <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-light" aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 modal_body_content px-4">
                            <h2 class="mb-2 text-special-orange">กาย</h2>
                            <p>ด.ช. สมเกียรติ เรียนดี | โรงเรียนทัพหลวง</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                detail
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- QR Modal End Here -->


        <script src="//maps.googleapis.com/maps/api/js"></script>

@endsection
