@extends('layouts.master_external')

@section('title','เข้าสู่ระบบ')

{{-- @extends('layouts.header') --}}

@section('content')

<div class="content-login">
    <div class="container-fluid" style="position: relative;">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="logo">
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
                            <label class="small-ps" for="readCondition">หากยังไม่ได้สมัครสมาชิก <a class="small-ps underline" href="{{ url('/public') }}">อ่านเงื่อนไขการให้บริการ</a></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <a href="{{ url('/public') }}">
            <div class="information-index">
                ?
            </div>
        </a>
    </div>
</div>

<!-- Modal: Failed-->
<div class="wrap-modal">
    <div class="modal fade" id="errorLogin" tabindex="-1" role="dialog" aria-labelledby="errorLogin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-3 text-center">
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

<!-- Modal: Occupied-->
<div class="wrap-modal">
    <div class="modal fade" id="occupiedUser" tabindex="-1" role="dialog" aria-labelledby="occupiedUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-3 text-center">
                <b>เข้าสู่ระบบไม่สำเร็จ</b>
                <p>ชื่อผู้ใช้นี้ถูกใช้งานอยู่ในขณะนี้</p>
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
            <div class="modal-body my-3 text-center">
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

    if (getCookie('role_id') == '1') {

        $(location).attr('href', '/parent/index');
    }

    if (getCookie('role_id') == '2') {

        $(location).attr('href', '/driver/index');
    }

    if (getCookie('role_id') == '3') {

        $(location).attr('href', '/index/index');
    }



    if (!getCookie('role_id')) {

        setCookie('role_id', 0, 30);
        console.log(getCookie('role_id'));

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
                    setCookie('secure_code', result.data['secure_code'], 30);
                    setCookie('role_id', result.data['role_id'], 30);
                    setCookie('role_name', result.data['role_name'], 30);
                    setCookie('relationship_id', result.data['relationship_id'], 30);
                    setCookie('relationship_name', result.data['relationship_name'], 30);
                    setCookie('car_id', result.data['car_id'], 30);
                    setCookie('car_name', result.data['car_name'], 30);
                    setCookie('prefix', result.data['prefix'], 30);
                    setCookie('f_name', result.data['first_name'], 30);
                    setCookie('l_name', result.data['last_name'], 30);
                    setCookie('line_id', result.data['line_id'], 30);
                    setCookie('phone', result.data['phone'], 30);
                    setCookie('username', result.data['username'], 30);
                    setCookie('email', result.data['email'], 30);
                    setCookie('address', result.data['address'], 30);
                    setCookie('image', result.data['image'], 30);
                    setCookie('user_id', result.data['id'], 30);


                    if (result.data['role_id'] == '1') {
                            //Page User
                            $(location).attr('href', '/parent/index');

                    } else if (result.data['role_id'] == '2') {
                            //Page Driver
                            $(location).attr('href', '/driver/index');

                    }else if (result.data['role_id'] == '3') {
                            //Page Admin
                            $(location).attr('href', '/admin/index');
                    }

                }

                if (result.status == 'occupied') {
                    $(".wrap-modal > #occupiedUser").modal('show');
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

<!-- Hotjar Tracking Code for https://bear-bus.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1614662,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

@endsection



