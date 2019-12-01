<!-- Parent Table Area Start Here -->
{{-- <div class="heading text-left">
    <h3>เพิ่มบัญชีผู้ปกครอง</h3>
</div> --}}
<div class="card height-auto pb-0">
    <div class="card-body pt-5">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ข้อมูลผู้ปกครอง</h3>
            </div>
        </div>
        <form id="addUserForm" class="mb-5 mb-lg-0 new-added-form">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12 form-group">
                     <div class="uploader" >
                        <span class='flaticon-photo'></span>
                        <img src="" alt="Profile Image" class="text-center" id="image0"/>
                        <input type="file" name="userprofile_picture"  id="parentImage0" data-id="0" class="filePhoto" onchange="readURL(this,this.getAttribute('data-id'))" />
                    </div>
                    <div class="text-center mt-3">
                        <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required>
                        <option value="">คำนำหน้า</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ชื่อ" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="นามสกุล" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2"required >
                        <option value="">ความสัมพันธ์</option>
                        <option value="1">พ่อ</option>
                        <option value="2">แม่</option>
                        <option value="3">ผู้ปกครอง</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="เบอร์โทร" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ไลน์ไอดี" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="email" placeholder="อีเมล" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="email" placeholder="ยืนยันอีเมล" class="form-control">
                </div>
                <div class="col-xl-12 col-12 form-group">
                    <textarea required class="textarea form-control" name="address" placeholder="ที่อยู่" rows="6"></textarea>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ชื่อผู้ใช้" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="password" placeholder="รหัสผ่าน" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control">
                </div>
            </div>
            <div class="row" id="student-profile">
                <div class="col-lg-12 col-12 form-group mb-2">
                    <hr class="mb-5 hr-adduser">
                    <div class="heading-layout1">
                        <div class="item-title d-flex student-heading w-100">
                            <h3 class="pb-3">ข้อมูลเด็กนักเรียน</h3>
                            <h3 class="pb-3" id="numberOfStudent">#1</h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="uploader" onclick="$('#studentImage1').click()">
                            <span class='flaticon-photo'></span>
                            <img src="" alt="Profile Image" class="text-center" id="image1"/>
                            <input type="file" name="userprofile_picture" id="studentImage1" class="filePhoto" data-id="1"  onchange="readURL(this,this.getAttribute('data-id'))" />
                        </div>
                        <div class="text-center mt-3">
                            <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <select class="select2" required name="prefix[]">
                                <option value="">คำนำหน้า</option>
                                <option value="1">เด็กชาย</option>
                                <option value="1">เด็กหญิง</option>
                                <option value="1">นาย</option>
                                <option value="2">นาง</option>
                                <option value="3">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" name="first_name[]" placeholder="ชื่อ" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" name="last_name[]" placeholder="นามสกุล" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" name="nickname[]" placeholder="ชื่อเล่น" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" name="tel[]" placeholder="เบอร์โทร" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <select class="select2" required name="school[]">
                                <option value="">โรงเรียน</option>
                                <option value="1">หนองฉางวิทยา</option>
                                <option value="2">ธรรมานุวัตร</option>
                                <option value="3">วัดหนองขุนชาติ</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <select class="select2"required name="car[]">
                                <option value="">ประจำคันรถ</option>
                                <option value="1">คันที่ 1: สินาท</option>
                                <option value="2">คันที่ 2: โกญจนาท</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group text-right">
                            <button type="button" name="remove" id="add" class="btn-fill-lg bg-blue-dark btn-hover-yellow w-100" style="margin-bottom: 2.3rem;"><span class="flaticon-plus"></span></span> เพิ่มบุตรหลาน</button>
                        </div>
                    </div>
                    <hr class="mb-5 hr-adduser">
                </div>
            </div>
            <div class="row">
                <div class="col-12 heading-layout1">
                    <div class="item-title">
                        <h3 class="pb-3">จุดรับ-ส่งนักเรียน</h3>
                    </div>
                </div>
                <div class="col-12 form-group">
                    <input id="address" type="text" class="form-control search_addr" style="height: auto; min-height: 45px; padding: 1.05rem 1.5rem;" placeholder="จุดรับ-ส่ง">
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <input id="lat" value="" type="number" readonly type="text" placeholder="ละติจูด" class="form-control search_latitude">
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <input id="lon" value="" type="number" readonly type="text" placeholder="ลองติจูด" class="form-control search_longitude">
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <select class="select2" required>
                        <option value="">ตำบล</option>
                        <option value="1">บ้านไร่ - ฿900 </option>
                        <option value="2">หูช้าง - ฿700 </option>
                        <option value="3">หนองหย่าง - ฿650</option>
                        <option value="4">การุ้ง - ฿650</option>
                        <option value="5">คลองโป่ง - ฿600</option>
                        <option value="6">วังหิน - ฿500</option>
                        <option value="7">เขาตะพาน - ฿350</option>
                    </select>
                </div>
                <div class="col-12 form-group">
                    <div type="button" class="map w-100" id="geomap" style="width:100%; height:25em;"></div>
                </div>
                <div class="col-12 form-group mg-t-8 text-right">
                    <input type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow" id="addUserBtn" value="ยืนยัน">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Parent Table Area End Here -->

<!-- Success Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>เพิ่มบัญชีผู้ใช้งานสำเร็จ</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยืนยัน</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal End Here -->

<!-- Tel Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="telModal" tabindex="-1" role="dialog" aria-labelledby="telModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>เบอร์โทรศัพท์นี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยืนยัน</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tel Modal End Here -->

<!-- Email Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>อีเมลนี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยืนยัน</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Email Modal End Here -->


<!--Username Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="usernameModal" tabindex="-1" role="dialog" aria-labelledby="usernameModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ชื่อผู้ใช้งานนี้ถูกใช้งานแล้ว</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยืนยัน</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Username Modal End Here -->


<!-- Modal: System error-->
<div class="modal fade" id="systemError" tabindex="-1" role="dialog" aria-labelledby="systemError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>กรุณาทำรายการใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- System error End Here -->  
