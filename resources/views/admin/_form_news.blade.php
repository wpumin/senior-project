<div class="card height-auto pb-0">
    <div class="card-body pt-5">
        <div class="heading-layout1">
        </div>
        <form id="addUserForm" class="mb-5 mb-lg-0 new-added-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 form-group">
                <input required type="text" placeholder="หัวข้อข่าวสาร" id="title" class="form-control" value="{{ $title }}">
                <input type="hidden" class="form-control" id="news_id" value="{{ $id }}">

            </div>
                <div class="col-12 form-group mb-0">
                        <label for="">ภาพหน้าปก</label>
                        <div class="text-center">
                            <div class='file-input px-0 mb-3'>
                                <input type='file' class="text-center" id="imgInp">
                                <span class='button'>เลือกไฟล์</span>
                                <span class='label' data-js-label>ยังไม่ได้เลือกไฟล์</label>
                            </div>
                            <img id="blah" src="{{asset($image)}}" alt="news image" class="my-3 text-center news-image w-100"/>
                        </div>
                        <div class="text-center text-lg-left mt-3">
                            <span class="text-red small">ไฟล์ต้องเป็นสกุลไฟล์ .jpg, jpeg และ .png เท่านั้น<span>
                        </div>
                    </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required id="role_id">
                        <option value="{{ $role_id }}" selected>{{ $role_name }}</option>
                        <option value="">ผู้ที่สามารถเห็นได้</option>
                        <option value="1">ผู้ปกครอง</option>
                        <option value="2">คนขับรถ</option>
                        <option value="3">แอดมิน</option>
                    </select>
                </div>
                <input type="hidden" class="form-control" id="id_user" value="{{ $id_user }}">
                <div class="col-xl-3 col-lg-6 col-12 form-group" id="status">
                    <select class="select2"required id="status_id" >
                        <option value="{{ $status_id }}" selected>{{ $status_name }}</option>
                        <option value="">สถานะ</option>
                        <option value="1">เผยแพร่</option>
                        <option value="2">งดเผยแพร่ชั่วคราว</option>
                        <option value="3">งดเผยแพร่</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                <input required type="text" id="release_date" placeholder="วันที่เผยแพร่" class="form-control air-datepicker calendar" value="{{ $release_date }}">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" id="release_time" placeholder="เวลาเผยแพร่" class="form-control" id="timepicker" value="{{ $release_time }}">
                    <i class="far fa-clock"></i>
                </div>
                <div class="col-xl-12 col-12 form-group">
                    <textarea required class="textarea form-control" id="content" name="address" placeholder="รายละเอียดข่าว" rows="15">{{ $content }}</textarea>
                </div>
                <div class="col-12 form-group mg-t-8 text-right">
                    <input type="submit"  class="btn-fill-lg bg-blue-dark btn-hover-yellow" id="addNewsBtn" value="ยืนยัน">
                </div>
            </div>
        </form>
    </div>
</div>