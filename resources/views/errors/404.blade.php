@extends('layouts.master_external')

@section('title','Page not found')

@section('content')
<div class="content-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center login-form animated fadeInUp">
                    <img class="logo text-center" src="{{ url("images/login/logo-white.png") }}" alt="logo">
                    <p class="text-center my-3"> อุ๊ปส์, ไม่พบหน้าดังกล่าว <span class="spinner-border"> </span></p>
                    <h1 class="text-center my-3 d-none"> 404 page</h1>
                    <div class="my-3">
                        <?php

                            $role = $_COOKIE['role_id'];
                            $url = null;
                            if ($role == '1') {
                                $url = 'parent';
                            }else if ($role == '2') {
                                $url = 'driver';
                            }else if ($role == '3') {
                                $url = 'admin';
                            }


                            ?>
                            <?php if($url != null) { ?>

                                <a href="/<?php echo $url?>/index" class="submit-box d-block w-100">กลับสู่หน้าหลัก</a>

                           <?php } else { ?>

                            <a href="/" class="submit-box d-block w-100">กลับสู่หน้าหลัก</a>
                         <?php  } ?>

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



