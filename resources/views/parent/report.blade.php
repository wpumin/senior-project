@extends('layouts.master_menu_bottom')

@section('title','แจ้งเดินทางเอง')

@section('content')

<div class="heading text-left">
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
                            <input type="text" placeholder="หัวข้อ" class="form-control" required autocomplete="off" id="title">
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group">
                            <select class="select2" required autocomplete="off" id="type_id">
                                <option value="">ประเภทการร้องเรียน</option>
                                <option value="1">บริการทั่วไป</option>
                                <option value="2">พฤติกรรมคนขับ</option>
                                <option value="3">ระบบการชำระเงิน</option>
                                <option value="4">ระบบแจ้งเดินทางเอง</option>
                                <option value="5">ระบบติดตามรถบัส</option>
                                <option value="6">แดชบอร์ด</option>
                                <option value="7">แก้ไขโปรไฟล์</option>
                            </select>
                        </div>
                        {{-- <div class="col-12-xxxl col-lg-4 col-12 form-group">
                            <select class="select2" required autocomplete="off" id="order_id">
                                <option value="">ระดับความสำคัญ</option>
                                <option value="1">เล็กน้อย</option>
                                <option value="2">ปานกลาง</option>
                                <option value="3">เร่งด่วน</option>
                            </select>
                        </div> --}}
                        <div class="col-12 form-group">
                            <textarea class="textarea form-control" name="message" id="content" cols="10" rows="15" placeholder="หมายเหตุ (ถ้ามี)" autocomplete="off"></textarea>
                        </div>
                        <div class="col-12 form-group mg-t-8 text-center text-md-right">
                            <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow " id="btn-submit" data-toggle="modal" >ยืนยัน</button>
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
                            <input type="text" placeholder="ค้นหาด้วยวันที่" class="form-control air-datepicker calendar" data-position="bottom right" autocomplete="off">
                            <i class="far fa-calendar-alt" style="right: 22px !important;"></i>
                        </div>
                        <div class="col-lg-5 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยหัวข้อ" class="form-control">
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                        </div>
                    </div>
                </form>
                <div class="notice-board-wrap" id="report">
                    {{-- ข้อมูลในระบบ Report จะส่งเข้ามาในส่วนนี้ --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Success -->
<div class="wrap-modal">
    <div class="modal fade" id="successReport" tabindex="-1" role="dialog" aria-labelledby="successReport" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>การร้องเรียนสำเร็จ</b>
                <p>ระบบได้บันทึกการแจ้งการร้องเรียนของท่านแล้ว</p>
                <div class="modal-button text-center mt-3" >
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed -->
<div class="wrap-modal">
    <div class="modal fade" id="failReport" tabindex="-1" role="dialog" aria-labelledby="failReport" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
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
    <div class="modal fade" id="errorReport" tabindex="-1" role="dialog" aria-labelledby="errorReport" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>ขณะนี้เซิร์ฟเวอร์มีปัญหา กรุณาแจ้งเรื่องใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3" >
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script>


    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                    }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
                return "";
    }

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

    $.ajax({
                url: '/tasks/refresh/report',
                type: 'POST',
                data: {
                    user_id : getCookie('user_id')
                },
                success: function(response) {

                    // console.log(response['data'].length);
                    if (response['status'] == 'success') {

                        for (var i = 0; i < response['data'].length; i++) {
                            // if (response.data['report'][i]['order_id'] == '1') {
                            //     status = '<div class="post-date badge-green">';
                            //     } else if (response.data['report'][i]['order_id'] == '2') {
                            //     status = '<div class="post-date badge-orange">';
                            //     } else if (response.data['report'][i]['order_id'] == '3') {
                            //     status = '<div class="post-date badge-red">';
                            //     }
                            var tempTime = response['data'][i]['created_at'];
                            var time = tempTime.split(" ");
                            var time2 = time[1].substring(0,5);

                            $('#report').append(
                                '<div class="notice-list">' +
                                '<div class="post-date badge-orange">' + response['data'][i]['type_name'] + ' | ' + response['data'][i]['date'] + ' - '+ time2 + ' น.</div>' +
                                '<h5 class="mb-2">หัวข้อ: ' + response['data'][i]['title'] + '</h5>' +
                                '<p class="notice-title">' + response['data'][i]['content'] + '</p>'
                                 +
                                '</div>'
                            );
                        }
                    }
                },
                error: function(err) {

                }
            })


    function submitForm(){
        var user_id = getCookie('user_id');
        var type_id = $('#type_id').val();
        var title = $('#title').val();
        var content = $('#content').val();

        var d = new Date();
        var today = d.getDate() +'/'+(d.getMonth()+1)+'/'+(d.getFullYear()+543)

        $.ajax({
            type: "POST",
            url: "/report",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                user_id: user_id,
                type_id: type_id,
                title: title,
                content: content,

            },
            success: function(result){
                // ส่งฟอร์มสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successReport").modal('show');

                    $.ajax({
                            url: '/tasks/refresh/report',
                            type: 'POST',
                            data: {
                                user_id : getCookie('user_id')
                            },
                            success: function(response) {

                                console.log(response['data']);
                                if (response['status'] == 'success') {

                                    $('#report').html('');
                                    for (var i = 0; i < response['data'].length; i++) {
                                        // if (response.data['report'][i]['order_id'] == '1') {
                                        //     status = '<div class="post-date badge-green">';
                                        //     } else if (response.data['report'][i]['order_id'] == '2') {
                                        //     status = '<div class="post-date badge-orange">';
                                        //     } else if (response.data['report'][i]['order_id'] == '3') {
                                        //     status = '<div class="post-date badge-red">';
                                        //     }
                                        var tempTime = response['data'][i]['created_at'];
                                        var time = tempTime.split(" ");
                                        var time2 = time[1].substring(0,5);

                                        $('#report').append(
                                            '<div class="notice-list">' +
                                            '<div class="post-date badge-orange">' + response['data'][i]['type_name'] + ' | ' + response['data'][i]['date'] + ' - '+ time2 + ' น.</div>' +
                                            '<h5 class="mb-2">หัวข้อ: ' + response['data'][i]['title'] + '</h5>' +
                                            '<p class="notice-title">' + response['data'][i]['content'] + '</p>'
                                            +
                                            '</div>'
                                        );
                                    }
                                }
                            },
                            error: function(err) {

                            }
                        })
                }

                // ส่งไม่สำเร็จ (กรอกไม่ครบหรือกรอกผิด)
                if (result.status == 'field_required') {
                    $(".wrap-modal > #failAppointment").modal('show');
                    window.location.reload(true);
                }

            },
            error: function(){
                // เซิร์ฟเวอร์มีปัญหา
                $(".wrap-modal > #errorAppointment").modal('show');
            }
        });
    }

</script>
@endsection
