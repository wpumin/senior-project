@extends('layouts.master_menu_bottom')

@section('title','แจ้งชำระเงิน')

@section('content')

<div class="heading mt-5 pt-5 mt-md-0 text-left d-none d-md-block">
    <h3>แจ้งชำระเงิน</h3>
</div>
<div class="card height-auto pb-0 pt-5 mt-5 pt-md-0 mt-md-0">
        <div class="card-body">
            <form action="payment-confirm" class="new-added-form pt-5 pt-md-4">
                @csrf
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input type="text" placeholder="หมายเลขรายการ" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input type="text" placeholder="เวลา" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input type="text" placeholder="วว/ดด/ปปปป" class="form-control air-datepicker" data-position="bottom right">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <select class="select2">
                            <option value="0">บัญชีกสิกรไทย 002-2-85496-8</option>
                            <option value="1">บัญชีไทยพาณีชย์ 002-2-85496-8</option>
                            <option value="2">บัญชีกกรุงไทย 002-2-85496-8</option>
                            <option value="3">บัญชีกกรุงศรี 002-2-85496-8</option>
                        </select>
                    </div>
                    <div class="col-12 form-group mb-0 text-center text-lg-left">
                      <div class="dropzone text-center">
                      </div>
                      <span class="text-red small mt-3">ไฟล์ภาพต้องไม่เกินขนาด 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                    </div>
                    <div class="col-12 form-group mt-5">
                        <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" placeholder="หมายเหตุ (ถ้ามี)"></textarea>
                    </div>
                    <div class="col-12 form-group mg-t-8 text-center text-md-right">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">ยืนยัน</button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow reset-data">รีเซ็ต</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
            // $('.reset-data').click(function(){
            //     $('.form-control').val('');
            // });
    </script>

@endsection