@extends('layouts.master_sidebar')

@section('title','เพิ่มบัญชีพนักงาน')

@section('content')

<!-- Parent Table Area Start Here -->
<div class="heading text-left">
    <h3>เพิ่มบัญชีพนักงาน</h3>
</div>
<div class="card height-auto">
    <div class="card-body pt-5">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ข้อมูลพนักงาน</h3>
            </div>
        </div>
        <form id="addUserForm" class="mb-5 mb-lg-0 new-added-form">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12 form-group">
                        <div class="uploader" onclick="$('#staffImage').click()">
                                <span class='flaticon-photo'></span>
                                <img src="" alt="Profile Image" class="text-center" id="image1"/>
                                <input type="file" name="userprofile_picture" id="staffImage" class="filePhoto" data-id="1"  onchange="readURL(this,this.getAttribute('data-id'))" />
                            </div>
                    <div class="text-center mt-3">
                        <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required>
                        <option value="">คำนำหน้า</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ชื่อ" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="นามสกุล" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required >
                        <option value="">ประจำคันรถ</option>
                        <option value="1">คันที่ 1: สินาท</option>
                        <option value="2">คันที่ 2: โกญจนาท</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="เบอร์โทร" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ไลน์ไอดี" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="email" placeholder="อีเมล" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="email" placeholder="ยืนยันอีเมล" class="form-control">
                </div>
                <div class="col-xl-12 col-lg-6 col-12 form-group">
                    <textarea required class="textarea form-control" name="address" placeholder="ที่อยู่" rows="6"></textarea>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ชื่อผู้ใช้" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="password" placeholder="รหัสผ่าน" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2">
                        <option value="">บทบาท</option>
                        <option value="1">คนขับรถ</option>
                        <option value="2">แอดมิน</option>
                    </select>
                </div>
                <div class="col-12 form-group mg-t-8 text-right">
                    <input type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="ยืนยัน">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Parent Table Area End Here -->

<!-- Success Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>สร้างบัญชีผู้ใช้งานสำเร็จ</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยืนยัน</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal End Here -->

<!-- Tel Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="telModal" tabindex="-1" role="dialog" aria-labelledby="telModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>เบอร์โทรนี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ตกลง</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tel Modal End Here -->

<!-- Tel Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>อีเมลนี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ตกลง</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tel Modal End Here -->

<!-- Tel Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="usernameModal" tabindex="-1" role="dialog" aria-labelledby="usernameModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ชื่อผู้ใช้นี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ตกลง</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tel Modal End Here -->

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

    {{-- upload staff image  --}}
    <script>
        function readURL(e,id){
            var reader = new FileReader();
            reader.onload = function (event) {
                // var temp =  $('.uploader img').attr('id');
                $('#image'+id).attr('src',event.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
        function handleImage(e) {
        console.log(e);
        var reader = new FileReader();
        reader.onload = function (event) {
            var temp =  $('.uploader img').attr('id');
            $('.uploader img#'+temp).attr('src',event.target.result);
           }
           reader.readAsDataURL(e.target.files[0]);
       }
    </script>

    {{-- form for add user --}}
    <script>
        // ajax
        $(document).ready(function(){
            $("#addUserForm").submit(function(event){
                submitForm();
                return false;
            });
        });

        function submitForm(){

            $.ajax({
                type: "POST",
                url: "http://localhost:8000/addUserStaff",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                data: $('form#addUserForm').serialize(),
                success: function(result){

                    // เพิ่มบัญชีผู้ใช้สำเร็จ
                    if(result.status == 'success') {
                        $(".wrap-modal > #successModal").modal('show');
                    }

                    // เบอร์โทรซ้ำ
                    if (result.status == 'same_tel') {
                        $(".wrap-modal > #telModal").modal('show');
                    }

                    // อีเมลซ้ำ
                    if (result.status == 'same_email') {
                        $(".wrap-modal > #emailModal").modal('show');
                    }

                    // ชื่อบัญชีผู้ใช้ซ้ำ
                    if (result.status == 'same_username') {
                        $(".wrap-modal > #usernameModal").modal('show');
                    }

                },
                error: function(result){
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        }
    </script>
@endsection