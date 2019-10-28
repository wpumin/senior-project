@extends('layouts.master_menu_bottom')

@section('title','แจ้งชำระเงิน')

@section('content')

<!-- Payment Form Area Start Here -->
<div class="heading mt-5 pt-5 mt-md-0 pt-md-0 text-left d-none d-md-block">
    <h3>แจ้งชำระเงิน</h3>
</div>
<div class="card height-auto pb-0 pt-5 mt-5 pt-md-0 mt-md-0">
    <div class="card-body">
        <form action="" class="new-added-form pt-5 pt-md-4" id="paymentConfirm">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="หมายเลขรายการ" class="form-control" required autocomplete="off">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="เวลา" class="form-control" required autocomplete="off">
                    <i class="far fa-clock"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="วว/ดด/ปปปป" class="form-control air-datepicker" data-position="bottom right" required autocomplete="off">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required autocomplete="off">
                        <option value="">กรุณาเลือกบัญชีที่ท่านชำระเงิน</option>
                        <option value="1">บัญชีกสิกรไทย 002-2-85496-8</option>
                        <option value="2">บัญชีไทยพาณีชย์ 002-2-85496-8</option>
                        <option value="3">บัญชีกกรุงไทย 002-2-85496-8</option>
                        <option value="4">บัญชีกกรุงศรี 002-2-85496-8</option>
                    </select>
                </div>
                <div class="col-12 form-group mb-0">
                    <label for="">ใบเสร็จชำระเงิน <span class="small text-red">(อัพโหลดได้ไม่เกิน 3 ไฟล์)</span></label>
                    <div class="dropzone text-center">
                    </div>
                    <div class="text-center text-lg-left mt-3">
                        <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                    </div>
                </div>
                <div class="col-12 form-group mt-5">
                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="10" placeholder="หมายเหตุ (ถ้ามี)" autocomplete="off"></textarea>
                </div>
                <div class="col-12 form-group mg-t-8 text-center text-md-right">
                    <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow " id="btn-submit" data-toggle="modal">ยืนยัน</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Payment Form Area End Here -->

<!-- Modal: Success -->
<div class="wrap-modal">
    <div class="modal fade" id="successConfirm" tabindex="-1" role="dialog" aria-labelledby="successConfirm" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>แจ้งชำระเงินสำเร็จ</b>
                <p>กรุณาตรวจสอบสถานะการชำระเงินของท่านภายใน 24 ชั่วโมง หลังการแจ้งชำระเงิน</p>
                <div class="modal-button text-center mt-3" >
                    <a href="{{url('parent/index')}}"><button type="button" class="btn btn-primary">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed -->
<div class="wrap-modal">
    <div class="modal fade" id="failConfirm" tabindex="-1" role="dialog" aria-labelledby="failConfirm" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _error">
            </div>
            <div class="modal-body my-4 text-center">
                <b>แจ้งชำระเงินไม่สำเร็จ</b>
                <p>กรุณากรอกข้อมูลให้ครบถ้วน</p>
                <div class="modal-button text-center mt-3" >
                    <a href=""><button type="button" class="btn btn-primary">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Server Error -->
<div class="wrap-modal">
    <div class="modal fade" id="errorConfirm" tabindex="-1" role="dialog" aria-labelledby="errorConfirm" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _error">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>ขณะนี้เซิร์ฟเวอร์มีปัญหา กรุณาแจ้งเรื่องใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3" >
                    <a href="{{url('parent/index')}}"><button type="button" class="btn btn-primary">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>

    $(document).ready(function(){	

        $("#paymentConfirm").submit(function(event){ 
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
            data: $('form#paymentConfirm').serialize(),
            success: function(result){
                
                // ส่งฟอร์มสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successConfirm").modal('show');
                }

                // ส่งไม่สำเร็จ (กรอกไม่ครบหรือกรอกผิด)
                if (result.status == 'error') {
                    $(".wrap-modal > #failConfirm").modal('show');
                }
                
            },
            error: function(){
                // เซิร์ฟเวอร์มีปัญหา
                $(".wrap-modal > #errorConfirm").modal('show');
            }
        });
    }
    
</script>
    
@endsection