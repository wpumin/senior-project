@extends('layouts.master_external')

@section('title','ลืมรหัสผ่าน')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="">
                    <p class="text-center my-3"> กรุณากรอกอีเมลของท่าน <span class="spinner-border"> </span></p>
                    <h1 class="text-center my-3 d-none"> ลืมรหัสผ่าน </h1>
                    <form class="" id="checkEmail">
                        <div class="mt-4">
                            <input type="email" id="email" name="email" class="input-box" placeholder="อีเมล" required autofocus>
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
    <div class="modal fade" id="sendOTP" tabindex="-1" role="dialog" aria-labelledby="sendOTP" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบส่ง OTP ไปยังอีเมลท่านสำเร็จ</b>
                <p>กรุณาตรวจสอบอีเมลของท่าน หากไม่พบ ให้ตรวจสอบที่ถังขยะ หรือ รายการที่ลบ</p>
                <div class="modal-button text-center mt-3" >
                    <a href="confirm-otp"><button type="button" class="btn btn-secondary" onclick="submitForm()">ส่งอีกครั้ง</button></a>
                    <a href="confirm-otp"><button type="button" class="btn btn-primary">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed-->
<div class="wrap-modal">
    <div class="modal fade" id="errorEmail" tabindex="-1" role="dialog" aria-labelledby="errorEmail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>อีเมลไม่ถูกต้อง</b>
                <p>ไม่พบอีเมลดังกล่าวในระบบ</p>
                <div class="modal-button text-center mt-3">
                    <button type="button" class="btn btn-primary delete-spinner" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal: System error-->
<div class="wrap-modal">
    <div class="modal fade" id="systemError" tabindex="-1" role="dialog" aria-labelledby="systemError" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>กรุณาทำรายการใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3">
                    <button type="button" class="btn btn-primary delete-spinner" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    $('.delete-spinner').click(function() {
        $('.spinner-border').css('display','none');   
        $('.input-box').val('');
    });

    $(document).ready(function(){	
        $("#checkEmail").submit(function(event){
            $('.spinner-border').css('display','inline-block');   
            submitForm();
            return false;
        });
    });

    function submitForm(){
        var email = $('#email').val();
        $.ajax({
            type: "POST",
            url: "https://bear-bus.com/forgotpassword",
            cache:false,
            data: {
                email: email
            },
            success: function(result){
                
                // มีอีเมลนี้ในระบบ ส่ง OTP ไปยังอีเมล
                if (result.status == 'success') {
                    setCookie('ref', result.data['ref'], 30);
                    setCookie('email', result.data['email'], 30);
                    window.location.replace('https://bear-bus.com/confirm-otp');
                    // $(".wrap-modal > #sendOTP").modal('show');
                }

                // ไม่มีอีเมลในระบบ กรอกอีเมลใหม่
                if (result.status == 'error') {
                    $(".wrap-modal > #errorEmail").modal('show');
                }
 
            },
            error: function(){
                $(".wrap-modal > #systemError").modal('show');
            }
        });


    }

</script>

@endsection



