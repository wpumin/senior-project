@extends('layouts.master_menu_bottom')

@section('title','แจ้งเดินทางเอง')

@section('content')



<div class="heading text-left">
    <h3>แจ้งเดินทางเอง</h3>
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
                <form id="appointmentForm" class="new-added-form">
                    @csrf
                    <div class="row">
                        <div class="col-12-xxxl col-lg-4 col-12 form-group ">
                            <select class="select2" required autocomplete="off" id="student_id">
                                {{-- <option value="">เด็กนักเรียน</option> --}}
                            </select>
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group">
                            <select class="select2" required autocomplete="off" id="period_time_id">
                                <option value="">ช่วงเวลา</option>
                                <option value="1">เช้า (ขาไป)</option>
                                <option value="2">เย็น (ขากลับ)</option>
                            </select>
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group">
                            <input type="text" id="date" placeholder="วว/ดด/ปปปป" class="form-control air-datepicker calendar" data-position="bottom right" required autocomplete="off">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-12 form-group">
                            <textarea class="textarea form-control" name="message" id="content" cols="10" rows="12" placeholder="หมายเหตุ (ถ้ามี)" autocomplete="off"></textarea>
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
                <div class="heading-layout1">
                    <div class="item-title pt-md-3">
                        <h3>ประวัติการแจ้งเดินทางเอง</h3>
                    </div>
                </div>
                <form class="mg-b-10">
                    <div class="row mb-5 mb-lg-0 new-added-form">
                        <div class="col-lg-4 col-12 form-group pr-lg-0">
                            <input type="text" placeholder="ค้นหาด้วยชื่อ" class="form-control">
                        </div>
                        <div class="col-lg-3 col-12 form-group pr-lg-0">
                            <select class="select2" autocomplete="off">
                                <option value="">ค้นหาด้วยช่วงเวลา</option>
                                <option value="1">เช้า (ขาไป)</option>
                                <option value="2">เย็น (ขากลับ)</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <input type="text"id="appointment_at" placeholder="ค้นหาด้วยวันที่" class="form-control air-datepicker calendar" data-position="bottom right" autocomplete="off">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-lg-2 col-12 form-group pl-lg-0">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive student-profile-table">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr class="bg-special-orange">
                                    <th>ลำดับ</th>
                                    <th>สถานะ</th>
                                    <th>ชื่อเล่น</th>
                                    <th>วันที่</th>
                                    <th>ช่วงเวลา</th>
                                </tr>
                            </thead>
                            <tbody id="showForm">
                                    <?php $count=1; ?>

                                @foreach($data as $key => $info)

                                <tr>
                                    <td><?php print $count ?></td>
                                        @if($info['app_status_id'] == 1)
                                            <td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>
                                        @elseif($info['app_status_id'] == 2)
                                            <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว</td>
                                        @endif
                                    <td>{{ $info['student_id'] }}</td>
                                    <td>{{ $info['appointment_at'] }}</td>
                                    <td>{{ $info['period_time_id'] }}</td>
                                </tr>

                                <?php $count++ ?>
                                @endforeach
                                 {{-- <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>                --}}
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Success -->
<div class="wrap-modal">
    <div class="modal fade" id="successAppointment" tabindex="-1" role="dialog" aria-labelledby="successAppointment" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>การแจ้งการเดินทางเองสำเร็จ</b>
                <p>ระบบได้บันทึกการแจ้งการเดินทางเองของท่านแล้ว กรุณาตรวจสอบสถานะภายใน 24 ชั่วโมง</p>
                <div class="modal-button text-center mt-3" >
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Failed -->
<div class="wrap-modal">
    <div class="modal fade" id="failAppointment" tabindex="-1" role="dialog" aria-labelledby="failAppointment" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _error">
            </div>
            <div class="modal-body my-4 text-center">
                <b>แจ้งเดินทางเองไม่สำเร็จ</b>
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
    <div class="modal fade" id="errorAppointment" tabindex="-1" role="dialog" aria-labelledby="errorAppointment" aria-hidden="true">
        <div class="modal-dialog modal-dialog2 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ระบบเกิดข้อผิดพลาด</b>
                <p>ขณะนี้เซิร์ฟเวอร์มีปัญหา กรุณาแจ้งเรื่องใหม่ภายหลัง</p>
                <div class="modal-button text-center mt-3" >
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button></a>
                    <!-- data-dismiss="modal" -->
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

    // $.post( "/tasks/refresh/appointment/student",{user_id : getCookie('user_id')} , function( result ) {
    //     //alert(result['data']['appointment']['student_id']);

    //     var student_id = document.getElementById('student_id');
    //     $(student_id).empty();
    //     $(student_id).append('<option>'+ 'เด็กนักเรียน' + '</option>');

    //       for (var i = 0; i < result['data'].length; i++) {
    //             {{-- console.log(result['data'][i]['nickname']); --}}
    //           $(student_id).append('<option value=' + result['data'][i]['id'] + '>' + result['data'][i]['nickname'] + '</option>');
    //       }

    //   });

    //   $.ajax({
    //             url: '/tasks/refresh/appointment',
    //             type: 'POST',
    //             data: {
    //                 user_id : getCookie('user_id')
    //             },
    //             dataType: 'json',
    //             success: function(response) {
    //                 if (response.status == 'success') {

    //                     $('table tbody').html('');
    //                     // let modalUser = document.getElementById("name").innerHTML = name;

    //                     for (var i = 0; i < response.data['appointment'].length; i++) {
    //                         if (response.data['appointment'][i]['app_status_id'] == '1') {
    //                             status = '<td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ';
    //                         } else if (response.data['appointment'][i]['app_status_id'] == '2') {
    //                             status = '<td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว';
    //                         }

    //                         $('table tbody').append(
    //                             '<tr>' +
    //                             '<td>' + (i + 1) + '</td>' +
    //                             status + '</td>' +
    //                             // '<td>' + response.data['appointment'][i]['fullname_s'] + '</td>' +
    //                             '<td>' + response.data['appointment'][i]['nickname'] + '</td>' +
    //                             '<td>' + response.data['appointment'][i]['appointment_at'] + '</td>' +
    //                             '<td>' + response.data['appointment'][i]['name'] + '</td>' +
    //                             '</td>' +
    //                             '</tr>'
    //                         );
    //                     }
    //                 }
    //             },
    //             error: function(err) {

    //             }
    //         })



    $(document).ready(function(){

        $("#appointmentForm").submit(function(event){
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

        var user_id =  getCookie('user_id');
        var student_id = $('#student_id').val();
        var period_time_id = $('#period_time_id').val();
        var app_status_id = $('#app_status_id').val();
        var appointment_at = $('#appointment_at').val();
        var content = $('#content').val();
        $.ajax({
            type: "POST",
            url: "/appointment",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:false,
            data: {
                user_id: user_id,
                student_id: student_id,
                period_time_id: period_time_id,
                app_status_id: app_status_id,
                appointment_at: appointment_at,
                content: content,
            },

            success: function(result){
                // ส่งฟอร์มสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successAppointment").modal('show');

                    $.ajax({
                url: '/tasks/refresh/appointment',
                type: 'POST',
                data: {
                    user_id : getCookie('user_id')
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {

                        $('table tbody').html('');
                        // let modalUser = document.getElementById("name").innerHTML = name;

                        for (var i = 0; i < response.data['appointment'].length; i++) {
                            if (response.data['appointment'][i]['app_status_id'] == '1') {
                                            status = '<td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>';
                                            } else if (response.data['appointment'][i]['app_status_id'] == '2') {
                                            status = '<td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว</td>';
                                            }
                            $('table tbody').append(
                                '<tr>' +
                                '<td>' + (i + 1) + '</td>' +
                                status +
                                // '<td>' + response.data['appointment'][i]['fullname_s'] + '</td>' +
                                '<td>' + response.data['appointment'][i]['nickname'] + '</td>' +
                                '<td>' + response.data['appointment'][i]['appointment_at'] + '</td>' +
                                '<td>' + response.data['appointment'][i]['name'] + '</td>' +
                                '</td>' +
                                '</tr>'
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
