@extends('layouts.master_sidebar')

@section('title','แก้ไขบัญชีผู้ปกครอง')

@section('content')

<!-- Parent Table Area Start Here -->
    <div class="heading text-left">
        <h3>แก้ไขข้อมูลเด็กนักเรียน</h3>
    </div>
    <div class="card height-auto pb-0">
        <div class="card-body pt-5">
            <div class="heading-layout1">
                {{-- <div class="item-title">
                    <h3>ข้อมูลผู้ปกครอง</h3>
                </div> --}}
            </div>
            <form action="{{url('admin/management/student/update')}}" method="POST" enctype="multipart/form-data" id="editStudentForm" class="mb-5 mb-lg-0 new-added-form">
                <input type="hidden" id="user_id" name="user_id" value="<?php echo $_COOKIE['user_id'] ?>">
                <input type="hidden" id="secure_code" name="secure_code" value="<?php echo $_COOKIE['secure_code'] ?>">
                {{-- @csrf --}}

                @foreach($datas as $key=>$data)
            <input type="hidden" id="student_id" name="student_id" value="{{ $data['no'] }}">
                <div class="row" id="student-profile">
                    <div class="col-lg-12 col-12 form-group mb-2">
                        <div class="heading-layout1">
                            <div class="item-title d-flex student-heading w-100">
                                {{-- <h3 class="pb-3">ข้อมูลเด็กนักเรียน</h3>
                                <h3 class="pb-3" id="">น้องจ๋าย</h3> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="uploader" onclick="$('#studentImage1').click()">
                                <span class='flaticon-photo'></span>
                            <img src="{{asset($data['image'])}}" alt="Profile Image" class="text-center" id="image1"/>
                                <input type="file" name="userprofile_picture" id="studentImage1" class="filePhoto" data-id="1"  onchange="readURL(this,this.getAttribute('data-id'))" />
                            </div>
                            <div class="text-center mt-3">
                                <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <select class="select2" required name="prefix">
                                        <option value="{{ $data['prefix'] }}" selected>{{ $data['prefix'] }}</option>
                                    <option value="">คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <input required type="text" name="first_name" value="{{ $data['first_name'] }}" placeholder="ชื่อ" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <input required type="text" name="last_name" value="{{ $data['last_name'] }}" placeholder="นามสกุล" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <input required type="text" name="nickname" value="{{ $data['nickname'] }}" placeholder="ชื่อเล่น" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <input required type="text" name="phone" value="{{ $data['phone'] }}" placeholder="เบอร์โทร" class="form-control">
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <select class="select2" required name="school_id">
                                        <option value="{{ $data['school_id'] }}" selected>{{ $data['school'] }}</option>
                                    <option value="">โรงเรียน</option>
                                    <option value="1">หนองฉางวิทยา</option>
                                    <option value="2">ธรรมานุวัตร</option>
                                    <option value="3">วัดหนองขุนชาติ</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <select class="select2"required name="car_id">
                                        <option value="{{ $data['car_id'] }}" selected>คันที่ {{ $data['car_id'] }}</option>
                                    <option value="">ประจำคันรถ</option>
                                    <option value="1">คันที่ 1: สินาท</option>
                                    <option value="2">คันที่ 2: โกญจนาท</option>
                                </select>
                            </div>

                            @endforeach
                            <div class="col-xl-3 col-lg-6 col-12 form-group text-right">
                                <input type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow w-100" id="editStudentBtn" value="ยืนยัน">
                            </div>
                        </div>
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
                    <b>แก้ไขข้อมูลนักเรียนสำเร็จ</b>
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
                    <b>เบอร์โทรศัพท์นี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยืนยัน</button>
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

    {{-- form  --}}
    <script>

        $(document).ready(function(){
            // $("#addUserBtn").submit(function(event){

            //     submitForm();
            //     return false;
            // });
        });

        function submitForm(){

            // $.ajax({
            //     type: "POST",
            //     url: "https://localhost:8000/addUserParent",
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     cache:false,
            //     data: $('form#addUserForm').serialize(),
            //     success: function(result){
            //         // เพิ่มบัญชีผู้ใช้สำเร็จ
            //         if(result.status == 'success') {
            //             $(".wrap-modal > #successModal").modal('show');
            //         }
            //         // เบอร์โทรซ้ำ
            //         if (result.status == 'same_tel') {
            //             $(".wrap-modal > #telModal").modal('show');
            //         }
            //         // อีเมลซ้ำ
            //         if (result.status == 'same_email') {
            //             $(".wrap-modal > #emailModal").modal('show');
            //         }
            //         // ชื่อบัญชีผู้ใช้ซ้ำ
            //         if (result.status == 'same_username') {
            //             $(".wrap-modal > #usernameModal").modal('show');
            //         }
            //     },
            //     error: function(result){
            //         $(".wrap-modal > #systemError").modal('show');
            //     }
            // });
        }
    </script>

    {{-- upload image --}}
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
@endsection
