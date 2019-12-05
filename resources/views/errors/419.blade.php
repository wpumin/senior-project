@extends('layouts.master_external')

@section('title','Session expried')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="logo">
                    <p class="text-center my-3"> ขณะนี้บัญชีนี้ถูกใช้ด้วยอุปกรณ์เครื่องอื่นอยู่ <span class="spinner-border"> </span></p>
                    <h1 class="text-center my-3 d-none"> 419 page</h1>
                    <div class="my-3">
                        <a href="{{ url('/') }}" onclick="deleteAllCookies()" class="submit-box d-block w-100">กลับสู่หน้าหลัก</a>
                    </div>
                    <div class="mt-4 text-center">
                        {{-- <a class="small-ps underline" href="javascript:history.back()">ย้อนกลับ</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>

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


</script>

@endsection



