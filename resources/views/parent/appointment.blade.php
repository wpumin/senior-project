@extends('layouts.master_menu_bottom'), ['name' => $user])


@section('title','แจ้งเดินทางเอง')

@section('content')



<div class="heading mt-md-5 text-left">
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
                            <select class="select2" required autocomplete="off" id="user_id">
                                <option value="">ผู้ปกครอง</option>
                                <option value="1">นายสมโรจ โคตรเอา</option>
                                <option value="2">นางสาวสมสุข สู่สวรรค์</option>
                            </select>
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group ">
                            <select class="select2" required autocomplete="off" id="student_id">
                                <option value="">เด็กนักเรียน</option>
                                <option value="1">อชิตะ ลิลิตสัจจะ (รร. ทับหลวง)</option>
                                <option value="2">มาชิตะ ลิลิตสัจจะ (รร. บ้านไร่)</option>
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
                            <input type="text" id="date"placeholder="วว/ดด/ปปปป" class="form-control air-datepicker" data-position="bottom right" required autocomplete="off">
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
                    <div class="row gutters-8 new-added-form">
                        <div class="col-lg-4 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยชื่อ" class="form-control">
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <select class="select2" required autocomplete="off">
                                <option value="">ค้นหาช่วงเวลา</option>
                                <option value="1">เช้า (ขาไป)</option>
                                <option value="2">เย็น (ขากลับ)</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <input type="text" placeholder="ค้นหาวันที่" class="form-control air-datepicker" data-position="bottom right" required autocomplete="off">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive student-profile-table">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr class="bg-special-orange">
                                    <th>ลำดับ</th>
                                    <th>ชื่อ-สกุล นักเรียน</th>
                                    <th>ชื่อเล่น</th>
                                    <th>วันที่</th>
                                    <th>ช่วงเวลา</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>คิด</td>
                                    <td>08/08/2562</td>
                                    <td>ชวงเช้า</td>
                                    <td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>มาชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>10/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>มาชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>09/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>มาชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>08/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>มาชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>07/10/2562</td>
                                    <td>ช่วงเย็น</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>02/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>02/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>01/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>01/10/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>30/09/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>29/09/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>28/09/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>27/09/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>23/09/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>อชิตะ ลิลิตสัจจะ</td>
                                    <td>มาร์ช</td>
                                    <td>19/09/2562</td>
                                    <td>ช่วงเช้า</td>
                                    <td class="badge badge-pill badge-green d-block mg-t-8">ได้รับการอนุมัติ</td>
                                </tr>                            
                            </tbody> -->
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

        $('#sel1').change(function(){
            var value = $(this).val();
            // here redirect to link with item_count value
        });
    });

    function submitForm(){
        var user_id = $('#user_id').val();
        var student_id = $('#student_id').val();
        var period_time_id = $('#period_time_id').val();
        var date = $('#date').val();
        var content = $('#content').val();
        
        $.ajax({
            type: "POST",
            url: "/appointment",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:false,
            // data: $('form#appointmentForm').serialize(),
            data: {
                user_id: user_id,
                student_id: student_id,
                period_time_id: period_time_id,
                date: date,
                content: content,
            },
            
            success: function(result){
                alert(student_id)
                    // ส่งฟอร์มสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successAppointment").modal('show');
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



        $.ajax({
                url: '/tasks/refresh/appointment',
                type: 'GET',
                data: {},
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('table tbody').html('');
                        let modalUser = document.getElementById("user_id").innerHTML = user_id;
                        let modalStudent = document.getElementById("student_id").innerHTML = student_id;
                        let modalPeriodTime = document.getElementById("period_time_id").innerHTML = period_time_id;
                        let modalDate = document.getElementById("date").innerHTML = date;
                        let modalContent = document.getElementById("content").innerHTML = content;
                        console.log(response.data)
                        alert(modalUser)

                        for (var i = 0; i < response.data['appointment'].length; i++) {
                            $('table tbody').append(
                                '<tr>' +
                                '<td>' + (i + 1) + '</td>' +
                                '<td>' + response.data['appointment'][i]['fullname_s'] + '</td>' +
                                '<td>' + response.data['appointment'][i]['nickname'] + '</td>' +
                                '<td>' + response.data['appointment'][i]['date'] + '</td>' +
                                '<td>' + response.data['appointment'][i]['name'] + '</td>' +
                                '<td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ'+ '</td>' +
                                '</td>' +
                                '</tr>'
                            );


                            let student = response.data['appointment'][i]['fullname_s'];
                            let nickname = response.data['appointment'][i]['nickname'];
                            let date = response.data['appointment'][i]['date'];
                            let period = response.data['appointment'][i]['name'];
                        }
                    }
                },
                error: function(err) {

                }
            })
    }

</script>


@endsection