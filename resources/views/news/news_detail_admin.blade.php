@extends('layouts.master_sidebar')

@section('title','ข่าวสาร - query หัวข้อข่าวตรงนี้')

@section('content')

<div class="heading text-left d-none d-md-block">
    <h3>อัพตเดตข่าวสาร</h3>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title heading-profile text-center text-md-left pt-2 pb-3 w-100">
                <h3>query หัวข้อข่าวตรงนี้</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="item-img w-100 text-center">
                        <img src="{{ URL::asset('images/internal/banner/true.jpg') }}" alt="news image" class="news-image-show w-100">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <p class="w-100 pt-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas non minima facere dignissimos placeat aperiam fuga eaque nemo officiis amet, iste adipisci dolor, cupiditate quam odio! Exercitationem doloribus consequatur tenetur?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, minus officiis. Doloremque voluptatibus ut dicta corrupti recusandae corporis quo laudantium ipsa itaque. Iure porro, velit a delectus quam ipsa tempora!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam deleniti modi numquam error in voluptatem neque fuga, nesciunt nobis. Adipisci eaque est nam aperiam quod perferendis fugit corrupti, nesciunt delectus!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem cum, tempore vitae, dicta perferendis neque autem voluptatum deserunt aut iure adipisci culpa ex! Eos cum maiores mollitia voluptatem accusantium atque!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem cum, tempore vitae, dicta perferendis neque autem voluptatum deserunt aut iure adipisci culpa ex! Eos cum maiores mollitia voluptatem accusantium atque!
                    </p>
                    <hr class="mt-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">โพสต์โดย: adblon</p>
                        <p class="mb-2">เมื่อ: 05/11/2562 12:55 น.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    
@endsection
