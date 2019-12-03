<?php
    $current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $current_page = (explode("/",$current_url));
    if(!empty($current_page[1]))
    {
        $menu_active = $current_page[1];
    }else{
        $menu_active = "";
    }

    // echo '<pre>'. $menu_active . '</pre>';
    // echo '<pre>'. $menu_active2 . '</pre>';
    // echo '<pre>'. $menu_active3 . '</pre>';
?>

@extends( ($menu_active==='admin') ? 'layouts.master_sidebar' : 'layouts.master_menu_bottom')


{{-- @if($menu_active==='admin')
    @extends('layouts.master_sidebar')
@endif
@if($menu_active==='driver' || $menu_active==='driver')
    @extends('layouts.master_menu_bottom')
@endif --}}

{{-- @foreach($datas as $info) --}}
    @section('title',$title)

    @section('content')
        <div class="heading text-left d-none d-md-block">
            <h3>อัพเดตข่าวสาร</h3>
        </div>

        <div class="card height-auto pb-0">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title heading-profile text-center text-md-left pt-2 pb-3 w-100">
                        <h3>{{ $title }}</h3>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 px-0">
                            <div class="item-img w-100 text-center">
                                <img src="{{ URL::asset($image) }}" alt="news image" class="my-3 text-center news-image w-100">
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            <p class="w-100 pt-5">
                                    {{ $content }}
                            </p>
                            <hr class="mt-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">โพสต์โดย: {{ $name }}</p>
                                <p class="mb-2">เมื่อ: {{ $release_date }} น.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
{{-- @endforeach --}}

@section('script')

@endsection
