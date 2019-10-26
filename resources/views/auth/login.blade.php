@extends('layouts.master_external')

@section('title','เข้าสู่ระบบ')

{{-- @extends('layouts.header') --}}

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="">
                    <h1 class="text-center my-3 d-none"> เข้าสู่ระบบ </h1>
                    <form id="loginForm">
                            @csrf
                        <div class="mt-4">
                            <input type="text" name="username" id="username" class="input-box" placeholder="ชื่อผู้ใช้" required autofocus>
                        </div>
                        <div class="mt-4">
                            <input type="password" name="password" id="password" class="input-box" placeholder="รหัสผ่าน" required>
                        </div>
                        <div class="forgot-password text-right">
                                <span class="spinner-border"></span> <a href="forgot-password">ลืมรหัสผ่าน?</a>
                        </div>
                        <div class="mt-5">
                            <input type="submit" name="submit" class="submit-box w-100" value="เข้าสู่ระบบ">
                        </div>
                        <div class="mt-4">
                            <label class="small-ps" for="readCondition">หากยังไม่ได้สมัครสมาชิก <a class="small-ps underline" href="#">อ่านเงื่อนไขการให้บริการ</a></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed-->
<div class="wrap-modal">
    <div class="modal fade" id="errorLogin" tabindex="-1" role="dialog" aria-labelledby="errorLogin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>เข้าสู่ระบบไม่สำเร็จ</b>
                <p>ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง</p>
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
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";";
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

    function deleteAllCookies() {

        var res = document.cookie;
        var multiple = res.split(";");


        for (var i = 0; i < multiple.length; i++) {

            var key = multiple[i].split("=");
            document.cookie = key[0] + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }

        for (var i = 0; i < multiple.length; i++) {

            var key = multiple[i].split("=");
            document.cookie = key[0] + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC; ;";
        }

    }

    $('.delete-spinner').click(function() {
        $('.spinner-border').css('display','none');
        $('.input-box').val('');
    });

    $(document).ready(function(){

        $("#loginForm").submit(function(event){
            $('.spinner-border').css('display','inline-block');
            submitForm();
            return false;
        });
    });

    function submitForm(){

        $.ajax({
            type: "POST",
            url: "/login",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:false,
            data: $('form#loginForm').serialize(),
            success: function(result){

                // login สำเร็จ
                if(result.status == 'success') {
                    setCookie('Authorization', result.data['token'], 30);
                    setCookie('name', result.data['first_name'], 30);
                    setCookie('role', result.data['role'], 30);
                    setCookie('role_name', result.data['role_name'], 30);
                    setCookie('f_name', result.data['first_name'], 30);
                    setCookie('l_name', result.data['last_name'], 30);
                    setCookie('image', result.data['image'], 30);
                    setCookie('car_id', result.data['car_id'], 30);

                    if (result.data['role'] == '1') {
                        //Page User
                        $(location).attr('href', '/parent/index');
                    }else  if (result.data['role'] == '2') {
                        //Page Driver
                        $(location).attr('href', '/driver/index');
                    }else  if (result.data['role'] == '3') {
                        //Page Admin
                        $(location).attr('href', '/admin/index');
                    }


                }

                // รหัสผ่านผิด
                if (result.status == 'incorrect_password') {
                    $(".wrap-modal > #errorLogin").modal('show');
                }

                // ไม่มี user ในระบบ
                if (result.status == 'no_user') {
                    $(".wrap-modal > #errorLogin").modal('show');
                }
            },
            error: function(result){
                $(".wrap-modal > #systemError").modal('show');
            }
        });
    }

</script>

@endsection



