@extends('layouts.master_menu_bottom')
@foreach($datas as $info)
@section('title',$info['title'])

@section('content')

<div class="heading text-left d-none d-md-block">
    <h3>อัพตเดตข่าวสาร</h3>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile text-center text-md-left pt-2 pb-3 w-100">
                <h3>{{ $info['title'] }}</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="item-img w-100 text-center">
                        <img src="{{ URL::asset($info['image']) }}" alt="news image" class="my-3 text-center news-image w-100">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <p class="w-100 pt-5">
                            {{ $info['content'] }}
                    </p>
                    <hr class="mt-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">โพสต์โดย: {{ $info['name'] }}</p>
                        <p class="mb-2">เมื่อ: {{ $info['release_date'] }} น.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('script')

@endsection
