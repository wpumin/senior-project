@extends('layouts.master_menu_bottom')

@section('title','แจ้งเดินทางเอง')

@section('content')

 <!-- Log Table Area Start Here -->
 <div class="heading text-left">
    <h3>ประวัติแจ้งเดินทางไป-กลับเอง</h3>
</div>
 <div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>วันที่ 31/09/2562</h3>
            </div>
            {{-- <div class="dropdown-refresh">
                <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
            </div> --}}
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
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-gray d-block mg-t-8">รอการอนุมัติ</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/driver.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td><div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-bin"></span></a></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Log Table Area End Here -->

<!-- Delete Modal -->
<div class="wrap-modal">
        <div class="modal fade" id="deleteTran" tabindex="-1" role="dialog" aria-labelledby="deleteTran" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 350px">
                <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ต้องการลบ</b>
                    <p>ประวัติแจ้งเดินทางไป-กลับเอง ใช่หรือไม่</p>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ตกลง</button>
                        <button type="button" class="btn btn-primary" id="delete-spinner" data-dismiss="modal">ยกเลิก</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Google Map Modal End Here -->

@endsection


