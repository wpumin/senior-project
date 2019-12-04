@extends('layouts.master_sidebar')

@section('title','เพิ่มข่าวสาร')

@section('content')

<!-- News Create Area Start Here -->
<div class="heading text-left">
    <h3>เพิ่มข่าวสาร</3>
</div>
<div class="card height-auto pb-0">
    <div class="card-body pt-5">
        <div class="heading-layout1">
        </div>
        <form action="{{url('admin/management/news/create/new')}}" method="POST" enctype="multipart/form-data" class="mb-5 mb-lg-0 new-added-form row">
            <div class="col-12 form-group">
                <input required type="text" placeholder="หัวข้อข่าวสาร" id="title" class="form-control" name="title">
                <input type="hidden" class="form-control" id="user_id" value="<?php echo $_COOKIE['user_id']; ?>" name="user_id">
                {{-- <input type="hidden" class="form-control" id="news_statuses_id" value="1" name="news_statuses_id"> --}}
            </div>
            <div class="col-12 form-group mb-0">
                <label for="">ภาพหน้าปก</label>
                <div class="text-center">
                    <div class='file-input px-0 mb-3'>
                        <input type='file' class="text-center" id="imgInp" name="imgInp">
                        <span class='button'>เลือกไฟล์</span>
                        <span class='label' data-js-label>ยังไม่ได้เลือกไฟล์</label>
                    </div>
                    <img id="blah" src="https://atasouthport.com/wp-content/uploads/2017/04/default-image.jpg" alt="news image" class="my-3 text-center news-image w-100"/>
                </div>
                <div class="text-center text-lg-left mt-3">
                    {{-- <span class="text-red small">ไฟล์ต้องเป็นสกุลไฟล์ .jpg, jpeg และ .png เท่านั้น<span> --}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group">
                <select class="select2" required id="role_id" name="role_id">
                    <option value="">ผู้ที่สามารถเห็นได้</option>
                    <option value="1">ผู้ปกครอง</option>
                    <option value="2">คนขับรถ</option>
                    <option value="3">แอดมิน</option>
                    <option value="4">ทั้งหมด</option>
                </select>
            </div>
            <input type="hidden" class="form-control" id="id_user" >
            <div class="col-xl-3 col-lg-6 col-12 form-group" id="status">
                <select class="select2"required id="news_statuses_id" name="news_statuses_id" >

                    <option value="">สถานะ</option>
                    <option value="1">เผยแพร่</option>
                    <option value="2">งดเผยแพร่</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group">
                <input required type="text" id="release_date" name="release_date" placeholder="วันที่เผยแพร่" class="form-control air-datepicker calendar" >
                <i class="far fa-calendar-alt"></i>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group">
                <input required type="text" name="release_time" placeholder="เวลาเผยแพร่" class="form-control" id="timepicker" >
                <i class="far fa-clock"></i>
            </div>
            <div class="col-xl-12 col-12 form-group">
                <textarea required class="textarea form-control" id="content" name="content" placeholder="รายละเอียดข่าว" rows="15"></textarea>
            </div>
            <div class="col-12 form-group mg-t-8 text-right">
                <input type="submit"  class="btn-fill-lg bg-blue-dark btn-hover-yellow" id="addNewsBtn" value="ยืนยัน">
            </div>
        </form>
    </div>
</div>
@endsection

