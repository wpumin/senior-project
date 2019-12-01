@extends('layouts.master_sidebar')

@section('title','เพิ่มหัวข้อข่าว')

@section('content')

<!-- News Create Area Start Here -->
<div class="heading text-left">
    <h3>แก้ไขข่าวสาร</h3>
</div>
<div class="card height-auto pb-0">
    <div class="card-body pt-5">
        <div class="heading-layout1">
        </div>
        <form id="addUserForm" class="mb-5 mb-lg-0 new-added-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 form-group">
                <input required type="text" placeholder="หัวข้อข่าวสาร" id="title" class="form-control" value="{{ $title }}">
                <input type="hidden" class="form-control" id="news_id" value="{{ $id }}">
            </div>
                <div class="col-12 form-group mb-0">
                        <label for="">ภาพหน้าปก</label>
                        <div class="text-center">
                            <div class='file-input px-0 mb-3'>
                                <input type='file' class="text-center" id="imgInp">
                                <span class='button'>เลือกไฟล์</span>
                                <span class='label' data-js-label>ยังไม่ได้เลือกไฟล์</label>
                            </div>
                            <img id="blah" src="{{asset($image)}}" alt="news image" class="my-3 text-center news-image w-100"/>
                        </div>
                        <div class="text-center text-lg-left mt-3">
                            <span class="text-red small">ไฟล์ต้องเป็นสกุลไฟล์ .jpg, jpeg และ .png เท่านั้น<span>
                        </div>
                    </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required id="role_id">
                        <option value="{{ $role_id }}" selected>{{ $role_name }}</option>
                        <option value="">ผู้ที่สามารถเห็นได้</option>
                        <option value="1">ผู้ปกครอง</option>
                        <option value="2">คนขับรถ</option>
                        <option value="3">แอดมิน</option>
                    </select>
                </div>
                <input type="hidden" class="form-control" id="id_user" value="{{ $id_user }}">
                <div class="col-xl-3 col-lg-6 col-12 form-group" id="status">
                    <select class="select2"required id="status_id" >
                        <option value="{{ $status_id }}" selected>{{ $status_name }}</option>
                        <option value="">สถานะ</option>
                        <option value="1">เผยแพร่</option>
                        <option value="2">งดเผยแพร่ชั่วคราว</option>
                        <option value="3">งดเผยแพร่</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                <input required type="text" id="release_date" placeholder="วันที่เผยแพร่" class="form-control air-datepicker calendar" value="{{ $release_date }}">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" id="release_time" placeholder="เวลาเผยแพร่" class="form-control" id="timepicker" value="{{ $release_time }}">
                    <i class="far fa-clock"></i>
                </div>
                <div class="col-xl-12 col-12 form-group">
                    <textarea required class="textarea form-control" id="content" name="address" placeholder="รายละเอียดข่าว" rows="15">{{ $content }}</textarea>
                </div>
                <div class="col-12 form-group mg-t-8 text-right">
                    <input type="submit"  class="btn-fill-lg bg-blue-dark btn-hover-yellow" id="addNewsBtn" value="ยืนยัน">
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
                    <b>เพิ่มข่าวสารสำเร็จ</b>
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
            $("#addNewsBtn").click(function(event){
                event.preventDefault();
                submitForm();
                return false;
            });
        });

        function submitForm(){

            var title = document.getElementById("title").value;
            var role_id = document.getElementById("role_id").value;
            var status_id = document.getElementById("status_id").value;
            var release_date = document.getElementById("release_date").value;
            var release_time = document.getElementById("release_time").value;
            var content = document.getElementById("content").value;
            var id = document.getElementById("news_id").value;
            var id_user = document.getElementById("id_user").value;

            let myForm = document.getElementById('addUserForm');
            var image_file = myForm[3].files[0];
            // console.log(image_file);


            var formData_1 = new FormData();
            formData_1.append("file", image_file);
            // console.log('----------');

            $.ajax({
                type: "POST",
                url: "/admin/management/news/update",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                // cache:false,
                data: formData_1,
                // processData: false,
                // contentType: false,      async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(result){
                    console.log(result);
                    alert(result);

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
