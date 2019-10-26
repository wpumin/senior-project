@extends('layouts.master_menu_bottom')

@section('title','แจ้งเดินทางเอง')

@section('content')

<div class="heading mt-md-5 text-left">
    <h3>ร้องเรียน / แนะนำการบริการ</h3>
</div>

<div class="row">
    <div class="col-4-xxxl col-12">
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title pt-md-3">
                        <h3>ฟอร์มการแจ้ง</h3>
                    </div>
                </div>
                <form id="reportForm" class="new-added-form">
                    <div class="row">
                        <div class="col-12-xxxl col-lg-4 col-12 form-group ">
                            <input type="text" placeholder="หัวข้อ" class="form-control" required autocomplete="off">
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group">
                            <select class="select2" required autocomplete="off">
                                <option value="">ประเภทการร้องเรียน</option>
                                <option value="2">บริการทั่วไป</option>
                                <option value="2">พฤติกรรมคนขับ</option>
                                <option value="3">ระบบการชำระเงิน</option>
                                <option value="4">ระบบแจ้งเดินทางเอง</option>
                                <option value="5">ระบบติดตามรถบัส</option>
                                <option value="6">แดชบอร์ด</option>
                                <option value="7">แก้ไขโปรไฟล์</option>
                            </select>
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group">
                            <select class="select2" required autocomplete="off">
                                <option value="">ระดับความสำคัญ</option>
                                <option value="1">เล็กน้อย</option>
                                <option value="2">ปานกลาง</option>
                                <option value="3">เร่งด่วน</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="15" placeholder="หมายเหตุ (ถ้ามี)" autocomplete="off"></textarea>
                        </div>
                        <div class="col-12 form-group mg-t-8 text-center text-md-right">
                            <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow " id="btn-submit" data-toggle="modal">ยืนยัน</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-8-xxxl col-12">
        <div class="card height-auto pb-0">
            <div class="card-body">
                <div class="heading-layout1 pt-md-3">
                    <div class="item-title">
                        <h3>ประวัติการแจ้งร้องเรียน</h3>
                    </div>
                </div>
                <form class="mg-b-10 mb-5 mb-lg-0" id="reportForm">
                    <div class="row gutters-8 new-added-form">
                        <div class="col-lg-5 col-12 form-group">
                            <input type="text" placeholder="ค้นหาวันที่" class="form-control air-datepicker" data-position="bottom right" required autocomplete="off">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-lg-5 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยหัวข้อ" class="form-control">
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                        </div>
                    </div>
                </form>
                <div class="notice-board-wrap">
                    <div class="notice-list">
                        <div class="post-date bg-special-orange">13/06/2562 | พฤติกรรมคนขับ</div>
                        <h5 class="mb-2">หัวข้อ: คนขับรถขับรถเร็ว น่าหวาดเสียว</h5>
                        <p class="notice-title">รบกวนเจ้าของช่วยอบรมการขับรถของคนขับรถคันสีแดงๆ สายบ้านไร่ด้วยครับ</p>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-orange-peel">07/06/2562 | ระบบการชำระเงิน</div>
                        <h5 class="mb-2">หัวข้อ: สถานะการจ่ายเงิน</h5>
                        <p class="notice-title">ผมกดยืนยันการชำระเงินไป 2 วันแลัว ตอนนี้ยังไม่มีการตรวจสอบสลิปอีกหรอครับ ยังไงรบกวนด้วยนะครับ</p>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-orange-peel">04/06/2562 | ระบบแจ้งเดินทางเอง</div>
                        <h5 class="mb-2">หัวข้อ: ระบบไม่อัพเดตข้อมูลที่กรอกในฟอร์ม</h5>
                        <p class="notice-title">ผมกดปุ่ม ยืนยัน เพื่อยืนยันการเดินทางเองของลูกผมแต่ว่าระบบไม่ยอมอัพเดตรายการให้ผมฝั่งขวาของหน้าเว็บให้ผมอะครับ ยังไงรบกวนตรวจสอบหน่อยนะครับ ผมรบกวนเพิ่มรายการกลับบ้านเองให้น้องคิดวันที่ 22 เดือนนี้ด้วยนะครับ ตอนเช้าไปโรงเรียนเอง</p>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-orange-peel">02/06/2562 | ระบบติดตามรถบัส</div>
                        <h5 class="mb-2">หัวข้อ: รถในแผนที่ไม่ขยับ</h5>
                        <p class="notice-title">ผมเปิดดู Google Map แล้วรถไม่ขยับเลยครับ ไม่ทราบว่าผมต้องทำยังไงรบกวนติดต่อกลับมาที่ 0898115155 ด้วยนะครับขอบคุณครับ</p>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-orange-peel">20/06/2562 | แดชบอร์ด</div>
                        <h5 class="mb-2">หัวข้อ: พยากรณ์สภาพอากาศอุณหภูมิสูงสุด ต่ำสุดเท่ากันทุกวัน</h5>
                        <p class="notice-title">ไม่มั่นใจว่าใช่บัคไหมครับอุณหภูมิสูงสุดและต่ำสุดของวันที่พยากรณ์ล่วงหน้าเท่ากันหมดทุกวันเลย</p>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-orange-peel">20/06/2562 | โปรไฟล์</div>
                        <h5 class="mb-2">หัวข้อ: แจ้งแก้ไขโปรไฟล์</h5>
                        <p class="notice-title">โปรไฟล์ของผมผิดยังไงรบกวนแก้ชื่อจาก ภูมินทร์ เป็นภูมินท์ ด้วยนะครับ</p>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-special-orange">20/06/2562 | พฤติกรรมคนขับ</div>
                        <h5 class="mb-2">หัวข้อ: คนขับโกงเงินค่ารถเด็กครับ</h5>
                        <p class="notice-title">คนขับรถคัน โกญจนาท โกงเงินค่ารถลูกผมครับ ลูกผมจ่ายแล้วแต่บอกว่ายังไม่ได้จ่าย ฝากจัดการให้ผมหน่อยครับ ขอบคุณครับ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Success -->
<div class="wrap-modal">
    <div class="modal fade" id="successReport" tabindex="-1" role="dialog" aria-labelledby="successReport" aria-hidden="true" style="max-width: 450px">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>การร้องเรียนสำเร็จ</b>
                <p>ระบบได้บันทึกการแจ้งการร้องเรียนของท่านแล้ว</p>
                <div class="modal-button text-center mt-3" >
                    <a href="{{url('parent/appointment')}}"><button type="button" class="btn btn-primary">ตกลง</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed -->
<div class="wrap-modal">
    <div class="modal fade" id="failReport" tabindex="-1" role="dialog" aria-labelledby="failReport" aria-hidden="true" style="max-width: 450px">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _error">
            </div>
            <div class="modal-body my-4 text-center">
                <b>การร้องเรียนไม่สำเร็จ</b>
                <p>กรุณากรอกข้อมูลให้ครบถ้วน</p>
                <div class="modal-button text-center mt-3" >
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Server Error -->
<div class="wrap-modal">
    <div class="modal fade" id="errorReport" tabindex="-1" role="dialog" aria-labelledby="errorReport" aria-hidden="true" style="max-width: 450px">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>ขณะนี้เซิร์ฟเวอร์มีปัญหา กรุณาแจ้งเรื่องใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3" >
                    <a href="{{url('parent/appointment')}}"><button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script>

    $(document).ready(function(){	

        $("#reportForm").submit(function(event){ 
            $('#btn-submit').prop('disabled',true);
            $('#btn-submit').css('cursor','not-allowed');
            submitForm();
            return false;
        });

        $('button.btn-primary').click(function(){
            $('#btn-submit').prop('disabled',false);
            $('#btn-submit').css('cursor','pointer');
        });
    });

    function submitForm(){
        $.ajax({
            type: "POST",
            url: "",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:false,
            data: $('form#reportForm').serialize(),
            success: function(result){
                
                // ส่งฟอร์มสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successReport").modal('show');
                }

                // ส่งไม่สำเร็จ (กรอกไม่ครบหรือกรอกผิด)
                if (result.status == 'error') {
                    $(".wrap-modal > #failReport").modal('show');
                }
                
            },
            error: function(){
                // เซิร์ฟเวอร์มีปัญหา
                $(".wrap-modal > #errorReport").modal('show');
            }
        });
    }
    
</script>
@endsection