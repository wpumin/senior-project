@extends('layouts.master_external')

@section('title','สร้างรหัสผ่านใหม่')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="logo">
                    <p class="text-center my-3"> กรุณายืนยันรหัสผ่านใหม่  <span class="spinner-border"> </span></p>
                    <h1 class="text-center my-3 d-none"> สร้างรหัสผ่านใหม่ </h1>
                    <form action="#" class="" id="changePassword">
                        <div class="mt-4">
                            <input type="password" name="password" id="password" class="input-box" placeholder="รหัสผ่านใหม่" required autofocus>
                        </div>
                        <div class="mt-4">
                                <input type="password" name="password-confirm" id="cfpassword" class="input-box" placeholder="ยืนยันรหัสผ่านใหม่" required autocomplete="new-password">
                            </div>
                        <div class="mt-5">
                            <input type="submit" name="submit" class="submit-box w-100" onclick="submitForm()" value="ยืนยัน" data-toggle="modal">
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
                    <a href="/"><button type="button" class="btn btn-primary">ตกลง</button></a>
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
                    <button type="button" class="btn btn-primary delete-spinner" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Password Short-->
<div class="wrap-modal">
    <div class="modal fade" id="shortPassword" tabindex="-1" role="dialog" aria-labelledby="shortPassword" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>รหัสผ่านต้องมีตัวอักขระ 8 ตัว ขึ้นไป</b>
                <p>กรุณากรอกรหัสผ่านให้ถูกต้อง</p>
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


    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    $('.delete-spinner').click(function() {
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
        var email = getCookie('email');
        var password = $('#password').val();
        var cfpassword = $('#cfpassword').val();
        $.ajax({
            type: "POST",
            url: "https://bear-bus.com/newpassword",
            data: {
                email: email,
                password: password,
                confirm_password: cfpassword
            },
            success: function(result){
                // เปลี่ยนรหัสผ่านสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successNewPassword").modal('show');
                    
                    // setTimeout(function(){
                    //     $(location).attr('href', 'login');
                    // },3000);
                }

                // รหัสผ่านไม่ตรงกัน
                if (result.status == 'pass_not_same') {
                    $(".wrap-modal > #errorNewPassword").modal('show');
                }
                // รหัสผ่านส้้นเกินไป
                if (result.status == 'pass_too_short') {
                    $(".wrap-modal > #shortPassword").modal('show');
                }

            },
            error: function(){
                $(".wrap-modal > #systemError").modal('show');
            }
        });
    }

</script>

@endsection



