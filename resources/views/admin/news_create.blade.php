@extends('layouts.master_sidebar')

@section('title','เพิ่มหัวข้อข่าว')

@section('content')

<!-- News Create Area Start Here -->
<div class="heading text-left">
    <h3>เพิ่มหัวข้อข่าว</h3>
</div>
<div class="card height-auto pb-0">
    <div class="card-body pt-5">
        <div class="heading-layout1">
        </div>
        <form id="addUserForm" class="mb-5 mb-lg-0 new-added-form">
            @csrf
            <div class="row">
                <div class="col-12 form-group">
                    <input required type="text" placeholder="หัวข้อข่าวสาร" class="form-control">
                </div>
                <div class="col-lg-12 col-12 form-group">
                    <label for="dropzone">ภาพหน้าปก <span class="small text-red">(อัพโหลดได้เพียง 1 ไฟล์)</span> </label>
                    <div class="dropzone text-center mt-4">
                    </div>
                    <div class="text-center text-md-left mt-3">
                        <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required>
                        <option value="">ประเภทข่าว</option>
                        <option value="1">ประชาสัมพันธ์</option>
                        <option value="2">ประกาศ</option>
                        <option value="3">บทความ</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2"required >
                        <option value="">สถานะ</option>
                        <option value="1">เผยแพร่</option>
                        <option value="2">งดเผยแพร่ชั่วคราว</option>
                        <option value="3">งดเผยแพร่</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group"> 
                    <input required type="text" placeholder="วันที่เผยแพร่" class="form-control air-datepicker calendar">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="เวลาเผยแพร่" class="form-control" id="timepicker">
                    <i class="far fa-clock"></i>
                </div>
                <div class="col-xl-12 col-lg-6 col-12 form-group">
                    <textarea required class="textarea form-control" name="address" placeholder="รายละเอียดข่าว" rows="15"></textarea>
                </div>
                <div class="col-12 form-group mg-t-8 text-right">
                    <input type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow" id="addNewsBtn" value="ยืนยัน">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- News Create Area End Here -->

<!-- Success Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>เพิ่มหัวข้อข่าวสำเร็จ</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" id="confirmDelete">ตกลง</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal End Here -->

<!-- Error Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>เกิดข้อผิดพลาด</b>
                    <p>กรุณากรอกข้อมูลให้ครบถ้วน</p>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" id="confirmDelete">ตกลง</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Error Modal End Here -->

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

    {{-- form  --}}
    <script>
        
        
        $(document).ready(function(){
            $("#addNewsBtn").submit(function(event){
                submitForm();
                return false;
            });
        });

        function submitForm(){
            $.ajax({
                type: "POST",
                url: "https://localhost:8000/addNews",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                data: $('form#addUserForm').serialize(),
                success: function(result){
                    // เพิ่มบัญชีผู้ใช้สำเร็จ
                    if(result.status == 'success') {
                        $(".wrap-modal > #successModal").modal('show');
                        $(location).attr('href', '/admin/management/news');

                    }
                    // ชื่อบัญชีผู้ใช้ซ้ำ
                    if (result.status == 'error') {
                        $(".wrap-modal > #errorModal").modal('show');
                    }
                },
                error: function(result){
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        }
    </script>

@endsection