@extends('layouts.main_external')

@section('title','ยืนยันรหัส OTP')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="">
                    <p class="text-center my-3"> กรุณายืนยันรหัส OTP 6 หลัก <span class="spinner-border"> </span></p>
                    
                    <form action="#" class="" id="checkOTP">
                        <div class="mt-4">
                            <input type="text" name="otp" class="input-box" placeholder="รหัส OTP" required autofocus>
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

<!-- Modal: Failed-->
<div class="wrap-modal">
    <div class="modal fade" id="errorOTP" tabindex="-1" role="dialog" aria-labelledby="errorOTP" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>รหัส OTP ไม่ถูกต้อง</b>
                <p>กรุณากรอก OTP ที่ถูกต้อง หากไม่ได้รับรหัส OTP สามารถกดปุ่ม <span>"ส่งอีกครั้ง"</span> ได้</p>
                <div class="modal-button text-center mt-3">
                    <a href="#"><button type="button" class="btn btn-secondary">ส่งอีกครั้ง</button></a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="delete-spinner" data-dismiss="modal">ตกลง</button></a>
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
        $("#checkOTP").submit(function(event){
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
            data: $('form#checkOTP').serialize(),
            success: function(result){

                // ยืนยันสำเร็จ
                if (result.status == 'success_confirm_otp')) {
                    $(location).attr('href', 'create-newpassword');
                }
                
                // ยืนยันไม่สำเร็จ
                if (result.status == 'error_confirm_otp')) {
                    $(".wrap-modal > #errorOTP").modal('show');
                }

                
            },
            error: function(){
                // $(".wrap-modal > #errorOTP").modal('show');
            }
        });
    }

</script>

@endsection



