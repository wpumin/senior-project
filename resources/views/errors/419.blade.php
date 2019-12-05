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
                        <a href="{{ url('/') }}" class="submit-box d-block w-100">กลับสู่หน้าหลัก</a>
                    </div>
                    <div class="mt-4 text-center">
                        <a class="small-ps underline" href="javascript:history.back()">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



