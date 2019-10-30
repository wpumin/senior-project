@extends('layouts.master_sidebar')

@section('title','จัดการบัญชีผู้ปกครอง')

@section('content')

<!-- Parent Table Area Start Here -->
<div class="heading text-left">
    <h3>จัดการบัญชีผู้ปกครอง</h3>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                {{-- <h3>ข้อมูลนักเรียนประจำคันรถ</h3> --}}
            </div>
            <a href="{{ url('admin/management/staff/create') }}" style="color: #bcbcbc !important;" role="button" aria-expanded="true"> <i class="fas fa-user-plus"></i> เพิ่มผู้ใช้งาน</a>
        </div>
        <form class="mb-5 mb-lg-0 new-added-form">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อผู้ใช้งาน" class="form-control">
                </div>
                <div class="col-4-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อ" class="form-control">
                </div>
                <div class="col-4-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยนามสกุล" class="form-control">
                </div>
                <div class="col-1-xxxl col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        </form>
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>ชื่อผู้ใช้</th>
                        <th>บทบาท</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ติดต่อ</th>
                        <th>เวลาสร้าง</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>nonstop</td>
                        <td>แอดมิน</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="{{ url('admin/management/staff/edit') }}"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>nonstop</td>
                        <td>คนขับรถ</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="{{ url('admin/management/staff/edit') }}"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>nonstop</td>
                        <td>คนขับรถ</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="{{ url('admin/management/staff/edit') }}"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>nonstop</td>
                        <td>คนขับรถ</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="{{ url('admin/management/staff/edit') }}"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>nonstop</td>
                        <td>แอดมิน</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="{{ url('admin/management/staff/edit') }}"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>nonstop</td>
                        <td>แอดมิน</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="{{ url('admin/management/staff/edit') }}"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Parent Table Area End Here -->

<!-- Accept Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ยืนยันการลบผู้ใช้งานใช่หรือไม่</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" id="confirmDelete">ยืนยัน</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Accept Modal End Here -->

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
        $('#confirmDelete').click(function(){

            $.ajax({
                type: "POST",
                url: "",
                // url: "http://localhost:8000/delete-user",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                success: function(result){

                    // ยืนยันลำเร็จ
                    if(result.status == 'success') {
                        // ลบชื่อผู้ใช้นั้น
                        $('#deleteUser').modal('hide');
                    }
                    
                },
                error: function(result){
                    $('#deleteUser').modal('hide');
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        });
    </script>
@endsection