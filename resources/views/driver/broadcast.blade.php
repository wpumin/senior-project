@extends('layouts.master_menu_bottom')

@section('title','ประกาศ')

@section('content')

 <!-- Log Table Area Start Here -->
 <div class="heading text-left">
    <h3>Broadcast</h3>
</div>
<div class="row gutters-20 mt-md-4">
    <div class="col-12 btn-broadcast pb-2 pb-md-0" data-toggle="modal" data-target="#confirmBroadcast" data-display="รถจอดพักเทศบาลบ้านไร่">
        <div class="card dashboard-card-seven pointer">
            <div class="social-media bg-special-orange hover-fb">
                <div class="social-like"> <span class="flaticon-bus-stop"></span> รถจอดพักเทศบาลบ้านไร่</div>
            </div>
        </div>
    </div>
    <div class="col-12 btn-broadcast pb-2 pb-md-0" data-toggle="modal" data-target="#confirmBroadcast" data-display="รถเสีย">
        <div class="card dashboard-card-seven pointer">
            <div class="social-media bg-special-orange hover-twitter">
                <div class="social-like"> <span class="flaticon-exclamation"></span> รถเสีย</div>
            </div>
        </div>
    </div>
    <div class="col-12 btn-broadcast pb-2 pb-md-0" data-toggle="modal" data-target="#confirmBroadcast" data-display="การจราจรติดขัด">
        <div class="card dashboard-card-seven pointer">
            <div class="social-media bg-special-orange hover-gplus">
                <div class="social-like"> <span class="flaticon-exclamation"></span> การจราจรติดขัด</div>
            </div>
        </div>
    </div>
    <div class="col-12 btn-broadcast pb-2 pb-md-0" data-toggle="modal" data-target="#confirmBroadcast" data-display="ทัศนวิสัยไม่ดี">
        <div class="card dashboard-card-seven pointer">
            <div class="social-media bg-special-orange hover-linked">
                <div class="social-like"><span class="flaticon-exclamation"></span> ทัศนวิสัยไม่ดี</div>
            </div>
        </div>
    </div> 
    <div class="col-12 btn-broadcast pb-2 pb-md-0" data-toggle="modal" data-target="#confirmBroadcast" data-display="เกิดอุบัติเหตุ">
        <div class="card dashboard-card-seven pb-0 pointer">
            <div class="social-media bg-special-orange hover-linked">
                <div class="social-like"><span class="flaticon-exclamation"></span> เกิดอุบัติเหตุ</div>
            </div>
        </div>
    </div>
</div>
<!-- Log Table Area End Here -->

<!-- Accept Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="confirmBroadcast" tabindex="-1" role="dialog" aria-labelledby="confirmBroadcast" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ยืนยันการประกาศ</b>
                    <p><span id="data-display"></span> ใช่หรือไม่</p>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" id="confirmBroadcast">ยืนยัน</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Accept Modal End Here -->


<!-- Modal: Success Broadcast-->
<div class="modal fade" id="successBroadcast" tabindex="-1" role="dialog" aria-labelledby="systemError" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ประกาศสำเร็จ</b>
                    <p>การแจ้งเตือนถูกส่งไปยังผู้ปกครอง</p>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Success Broadcast End Here -->   

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

@endsection


@section('script')
    <script>
        // don't remove use only this page
        jQuery(document).ready(function(){
            if (jQuery(window).width() > 567) {
                // jQuery(".dashboard-page-one").css("height", "inherit");
                // jQuery(".dashboard-page-one").css("margin-top", "7rem");
                // jQuery(".navbar-expand-md").css("position", "fixed");
                // jQuery(".navbar-expand-md").css("width", "100%");
                // jQuery(".navbar-expand-md").css("z-index", "99");
            }  
        });

        // dynamic text in modal
        $('.btn-broadcast').click(function(){
            var txtBroadcast = $(this).data('display');
            console.log(txtBroadcast);
            $("#data-display").text( txtBroadcast );
        });

        // ajax
        $('#confirmBroadcast').click(function(){

            $.ajax({
                type: "POST",
                url: "",
                // url: "http://localhost:8000/delete-appointment",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                success: function(result){

                    // ยืนยันลำเร็จ
                    if(result.status == 'success') {
                        // ส่ง notification ไปเครื่อง ผปค
                        $('#confirmBroadcast').modal('hide');
                        $(".wrap-modal > #successBroadcast").modal('show');
                    }
                    
                },
                error: function(result){
                    $('#confirmBroadcast').modal('hide');
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        });
    </script>
@endsection


