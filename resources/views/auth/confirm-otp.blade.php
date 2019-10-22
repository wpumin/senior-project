@extends('layouts.master_external')

@section('title','ยืนยันรหัส OTP')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="">
                    <p class="text-center my-3"> กรุณายืนยันรหัส OTP 6 หลัก <span class="spinner-border"> </span></p>
                    
                    <form class="" id="checkOTP">
                        <div class="mt-4">
                            <input type="text" id="otp" name="otp" class="input-box" placeholder="รหัส OTP" required autofocus>
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
            <div class="modal-body my-4 text-center" >
                <b>รหัส OTP ไม่ถูกต้อง</b>
                <p>กรุณากรอก OTP ที่ถูกต้อง หากไม่ได้รับรหัส OTP สามารถกดปุ่ม <span>"ส่งอีกครั้ง"</span> ได้</p>
                <div class="modal-button text-center mt-3">
                    <a href="confirm-otp" ><button type="button" class="btn btn-secondary" onclick="sendAgain()">ส่งอีกครั้ง</button></a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="delete-spinner" data-dismiss="modal">ตกลง</button></a>
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
                    <button type="button" class="btn btn-primary" id="delete-spinner" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>
    

<script>
console.log(getCookie('email'));
console.log(getCookie('ref'));

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

        $("#sendAgain").submit(function(event){
            $('.spinner-border').css('display','inline-block');   
            sendAgain();
            return false;
        });
    });


    function submitForm() {
        var ref = getCookie('ref');
        var otp = $('#otp').val();
        // alert(ref);

        $.ajax({
            type: "POST",
            url: "http://localhost:8000/receiveotp",
            cache:false,
            data: {
                ref: ref,
                otp: otp
            },
            success: function(result){
                // alert(result);

                // ยืนยันสำเร็จ
                if (result.status == 'success') {

                    window.location.replace('http://localhost:8000/create-newpassword');
                    
                }
                
                // ยืนยันไม่สำเร็จ
                if (result.status == 'error') {
                    $(".wrap-modal > #errorOTP").modal('show');
                }

                
            },
            error: function(){
                // $(".wrap-modal > #errorOTP").modal('show');
            }
        });
    }


        function sendAgain(){

        var email = getCookie('email');
        // console.log(email);
        // alert(email);

        $.ajax({
            type: "POST",
            url: "http://localhost:8000/forgotpassword/againotp",
            cache:false,
            data: {
                email: email
            },
            success: function(result){
                
                // มีอีเมลนี้ในระบบ ส่ง OTP ไปยังอีเมล
                if (result.status == 'success') {
                    setCookie('ref', result.data['ref'], 30);
                }
            },
            error: function(){
                $(".wrap-modal > #systemError").modal('show');
            }
        });


    }

</script>


@endsection



