@extends('layouts.main_external')

@section('title','เข้าสู่ระบบ')

{{-- @extends('layouts.header') --}}

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="">
                    {{-- <h3 class="text-center my-3"> เข้าสู่ระบบ </h3> --}}
                    <form id="loginForm">
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
        $("#loginForm").submit(function(event){
            $('.spinner-border').css('display','inline-block');
            submitForm();
            return false;
        });
    });

    function submitForm(){
        $.ajax({
            type: "POST",
            url: "http://localhost:8000/login",
            cache:false,
            data: $('form#loginForm').serialize(),
            success: function(result){

                // login สำรเ็จ
                if(result.status == 'success') {
                    $(location).attr('href', 'index');
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
                // $(".wrap-modal > #errorLogin").modal('show');
            }
        });
    }

</script>

@endsection



