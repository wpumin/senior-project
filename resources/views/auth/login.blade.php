@extends('layouts.main')

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
                    <form action="#" id="loginForm">
                        <div class="mt-4">
                            <input type="text" name="username" class="input-box" placeholder="ชื่อผู้ใช้" required autofocus>
                        </div>
                        <div class="mt-4">
                            <input type="password" name="password" class="input-box" placeholder="รหัสผ่าน" required>
                        </div>
                        <div class="forgot-password text-right">
                            <span class="spinner-border hidden"><a href="forgot-password">ลืมรหัสผ่าน?</a>
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
        $('.spinner-border').addClass('hidden');
        $('.input-box').val('');
    });

    $(document).ready(function(){	
        $("#loginForm").submit(function(event){
            $('.spinner-border').removeClass('hidden');
            submitForm();
            return false;
        });
    });

    function submitForm(){
        $.ajax({
            type: "POST",
            url: "",
            cache:false,
            data: $('form#loginForm').serialize(),
            success: function(response){
                // $(location).attr('href', '');
            },
            error: function(){
                $(".wrap-modal > #errorLogin").modal('show');
            }
        });
    }

</script>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

{{-- @extends('layouts.footer') --}}


