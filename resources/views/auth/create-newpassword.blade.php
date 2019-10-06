@extends('layouts.main_external')

@section('title','สร้างรหัสผ่านใหม่')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="">
                    <p class="text-center my-3"> กรุณายืนยันรหัสผ่านใหม่  <span class="spinner-border"> </span></p>
                    
                    <form action="#" class="" id="changePassword">
                        <div class="mt-4">
                            <input type="password" name="password" class="input-box" placeholder="รหัสผ่านใหม่" required autofocus>
                        </div>
                        <div class="mt-4">
                                <input type="password" name="password-confirm" class="input-box" placeholder="ยืนยันรหัสผ่านใหม่" required autocomplete="new-password">
                            </div>
                        <div class="mt-5">
                            <input type="submit" name="submit" class="submit-box w-100" value="ยืนยัน" data-toggle="modal">
                            <!-- data-target="#sendOTP" -->
                        </div>
                        <div class="mt-4 text-center">
                            <a class="small-ps underline" href="javascript:history.back()">ย้อนกลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Success-->
<div class="wrap-modal">
    <div class="modal fade" id="successNewPassword" tabindex="-1" role="dialog" aria-labelledby="successNewPassword" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                {{-- <b>เปลี่ยนรหัสผ่านสำเร็จ</b> --}}
                <p>เปลี่ยนรหัสผ่านสำเร็จ</p>
                <div class="modal-button text-center mt-3">
                    <a href="confirm-otp"><button type="button" class="btn btn-primary">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed-->
<div class="wrap-modal">
    <div class="modal fade" id="errorNewPassword" tabindex="-1" role="dialog" aria-labelledby="errorNewPassword" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>รหัสผ่านไม่ตรงกัน</b>
                <p>กรุณากรอกรหัสผ่านทั้งสองให้ตรงกัน</p>
                <div class="modal-button text-center mt-3">
                    <button type="button" class="btn btn-primary" id="delete-spinner" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>
    

<script>

    $('#delete-spinner').click(function() {
        $('.spinner-border').css('display','none');   
        $('.input-box').val('');
    });

    $(document).ready(function(){	
        $("#changePassword").submit(function(event){
            $('.spinner-border').css('display','inline-block');   
            submitForm();
            return false;
        });
    });

    function submitForm(){
        $.ajax({
            type: "POST",
            url: "",
            cache:false,
            data: $('form#changePassword').serialize(),
            success: function(result){

                // เปลี่ยนรหัสผ่านสำเร็จ
                if (result.status == 'success_create_newpassword')) {
                    $(".wrap-modal > #successNewPassword").modal('show');
                    setTimeout(function(){
                        $(location).attr('href', 'login');
                    },3000);
                }

                // รหัสผ่านไม่ตรงกัน
                if (result.status == 'error_create_newpassword')) {
                    $(".wrap-modal > #errorNewPassword").modal('show');
                }

            },
            error: function(){
                // $(".wrap-modal > #errorNewPassword").modal('show');
            }
        });
    }

</script>

@endsection



