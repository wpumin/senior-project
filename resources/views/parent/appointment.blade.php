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
                    <div class="item-title pt-4">
                        <h3>ฟอร์มการแจ้ง</h3>
                    </div>
                </div>
                <form action="{{url('/appointment')}}" method="POST" id="appointmentForm" class="new-added-form">
                    {{-- @csrf --}}
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $_COOKIE['user_id'] ?>">
                    <input type="hidden" id="token" name="token" value="<?php echo $_COOKIE['Authorization'] ?>">

                    <div class="row">
                        <div class="col-12-xxxl col-lg-4 col-12 form-group " {{ $errors->has('student_id') ? 'has-error' : '' }}>
                            <select class="select2" required autocomplete="off" id="student_id" name="student_id">

                                <option value="">เด็กนักเรียน</option>
                            </select>
                            @if ($errors->has('student_id'))

                            <span class="help-block">
                                {{$errors->first('student_id')}}
                            </span>

                            @endif
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group" {{ $errors->has('period_time_id') ? 'has-error' : '' }}>
                            <select class="select2" autocomplete="off" id="period_time_id" name="period_time_id">
                                <option value="">ช่วงเวลา</option>
                                <option value="1">เช้า (ขาไป)</option>
                                <option value="2">เย็น (ขากลับ)</option>
                            </select>

                            @if ($errors->has('period_time_id'))

                            <span class="help-block">
                                {{$errors->first('period_time_id')}}
                            </span>

                            @endif
                        </div>
                        <div class="col-12-xxxl col-lg-4 col-12 form-group" {{ $errors->has('appointment_at') ? 'has-error' : '' }}>
                            <input type="text" id="appointment_at" name="appointment_at" placeholder="วว/ดด/ปปปป" class="form-control air-datepicker calendar" data-position="bottom right" autocomplete="off">
                            <i class="far fa-calendar-alt"></i>

                            @if ($errors->has('appointment_at'))

                            <span class="help-block">
                                {{$errors->first('appointment_at')}}
                            </span>

                            @endif
                        </div>
                        {{-- <div class="col-12 form-group">
                            <textarea class="textarea form-control" name="message" id="content" cols="10" rows="12" placeholder="หมายเหตุ (ถ้ามี)" autocomplete="off"></textarea>
                        </div> --}}
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
                    <div class="item-title pt-4">
                        <h3>ประวัติการแจ้งเดินทางเอง</h3>
                    </div>
                </div>
                {{-- <form class="mg-b-10"> --}}
                    <div class="row mb-5 mb-lg-0 new-added-form">
                        <div class="col-lg-4 col-12 form-group pr-lg-0">
                            <input type="text" placeholder="ค้นหาด้วยชื่อ" class="form-control" id="myInputName" >
                        </div>
                        <div class="col-lg-3 col-12 form-group pr-lg-0">
                            <select class="select2" autocomplete="off" id="myInputPeriodTime">
                                <option value="">ค้นหาด้วยช่วงเวลา</option>
                                <option value="ช่วงเช้า">เช้า (ขาไป)</option>
                                <option value="ช่วงเย็น">เย็น (ขากลับ)</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <input type="text" id="appointment_at" placeholder="ค้นหาด้วยวันที่นัด" class="form-control air-datepicker calendar" data-position="bottom right" autocomplete="off">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-lg-2 col-12 form-group pl-lg-0">
                            <button onclick="myFunction()" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                            {{-- right here --}}
                        </div>
                    </div>
                {{-- </form> --}}
                <div class="table-responsive student-profile-table">
                        <table class="table display data-table text-nowrap" id="myTable">
                            <thead>
                                <tr class="bg-special-orange">
                                    <th>ลำดับ</th>
                                    <th>สถานะ</th>
                                    <th>ชื่อเล่น</th>
                                    <th>วันที่นัดหมาย</th>
                                    <th>ช่วงเวลา</th>
                                    <th>เวลาที่แจ้ง</th>
                                 </tr>
                            </thead>
                            <tbody id="showForm">
                                {{-- <tr role="row" style="display: none;">
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>    --}}
                                <?php $count=1; ?>

                                @foreach($data as $key => $info)

                                    <?php
                                        $created_at = $info['created_at'];
                                        $year_substr = substr($created_at,0,4-0);
                                        $month_substr = substr($created_at,5,7-5);
                                        $date_substr = substr($created_at,8,10-8);
                                        $time_substr = substr($created_at,11,16-11);
                                        $concat_created_at = '' . $date_substr . '/' . $month_substr . '/' . $year_substr . ' - ' . $time_substr . ' น.';
                                    ?>

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
                                        <td><?php echo $concat_created_at; ?></td>
                                    </tr>

                                    <?php $count++ ?>

                                @endforeach

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
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal" id="reloadPage">ตกลง</button></a>
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
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal" id="reloadPage">ตกลง</button></a>
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

    $.post( "/tasks/refresh/appointment/student",{user_id : getCookie('user_id')} , function( result ) {
        //alert(result['data']['appointment']['student_id']);

        var student_id = document.getElementById('student_id');
        $(student_id).empty();
        // $(student_id).append('<option>'+ 'เด็กนักเรียน' + '</option>');

          for (var i = 0; i < result['data'].length; i++) {
                {{-- console.log(result['data'][i]['nickname']); --}}
              $(student_id).append('<option value=' + result['data'][i]['id'] + '>' + result['data'][i]['nickname'] + '</option>');
          }

      });


    $(document).ready(function(){

        $("#appointmentForm").submit(function(event){
            $('#btn-submit').prop('disabled',true);
            $('#btn-submit').css('cursor','not-allowed');
            // $(".wrap-modal > #successAppointment").modal('show');
            // submitForm();
            // return false;
        });

        $('button.btn-primary').click(function(){
            $('#btn-submit').prop('disabled',false);
            $('#btn-submit').css('cursor','pointer');
        });

    });

    // ---------  Search ----------//

    function myFunction() {
      // Declare variables
      var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

      input = document.getElementById("myInputName");
      var input_periodtime = document.getElementById("myInputPeriodTime");
      var input_month = document.getElementById("appointment_at");


      filter = input.value;
      filter_input_periodtime = input_periodtime.value;
      filter_month = input_month.value;

      table = document.getElementById("myTable");
        //   console.log('Filter: '+filter);
        //   console.log('Filter: '+filter_num);
        //   console.log('Filter: '+filter_month);
      tr = table.getElementsByTagName("tr");
        //   console.log(tr.length);

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {

        td_name = tr[i].getElementsByTagName("td")[2]; //choose table that search. (Name)
        td_period_time = tr[i].getElementsByTagName("td")[4]; //choose table that search. (PeriodTime)
        td_date = tr[i].getElementsByTagName("td")[3]; //choose table that search. (Date)
        // console.log(td);
        if (td_name) {
          txtValue = td_name.textContent || td_name.innerText;
          txtValue_period_time = td_period_time.textContent || td_period_time.innerText;
          txtValue_date = td_date.textContent || td_date.innerText;

        //   console.log('Total: '+txtValue);
        //   console.log('Total: '+txtValue_period_time);
        //   console.log('Total: '+txtValue_date);

          if (txtValue.indexOf(filter) > -1 && txtValue_period_time.indexOf(filter_input_periodtime) > -1 && txtValue_date.indexOf(filter_month) > -1) {
            tr[i].style.display = "";
            $('#myInputName').val("");
            $('#myInputPeriodTime').val(null).trigger('change');
            // $('#myInputPeriodTime').val();
            $('#appointment_at').val("");
            // myFunction();
          } else {
            tr[i].style.display = "none";
            $('#myInputName').val(null);
            $('#myInputPeriodTime').val(null).trigger('change');
            // $('#myInputPeriodTime').val();
            $('#appointment_at').val(null);

          }
        }else{
            // console.log('ไม่มีข้อมูล');

            // $('#myTable tbody tr').remove();
            // $('#myTable tbody').append(
            //     '<tr role="row" style="display: contents !important;">' +
            //         '<td></td>' +
            //         '<td></td>' +
            //         '<td>ไม่มีข้อมูล</td>' +
            //         '<td></td>' +
            //         '<td></td>' +
            //     '</tr>'
            // );

        }
      }
    }

    // $.ajax({
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
    //                                         status = '<td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>';
    //                                         } else if (response.data['appointment'][i]['app_status_id'] == '2') {
    //                                         status = '<td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว</td>';
    //                                         }
    //                         $('table tbody').append(
    //                             '<tr>' +
    //                             '<td>' + (i + 1) + '</td>' +
    //                             status +
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


    function submitForm(){

        // var user_id =  getCookie('user_id');
        // var student_id = $('#student_id').val();
        // var period_time_id = $('#period_time_id').val();
        // var appointment_at = $('#appointment_at').val();
        // var content = $('#content').val();

        var data = {
            'user_id' : getCookie('user_id'),
            'student_id' : $('#student_id').val(),
            'period_time_id' : $('#period_time_id').val(),
            'appointment_at' : $('#date').val(),
            'content' : $('#content').val()
        };

        $.ajax({
            type: "POST",
            url: "/appointment",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache:true,
            data: data,

            success: function(result){

                // ส่งฟอร์มสำเร็จ
                if (result.status == 'success') {
                    $(".wrap-modal > #successAppointment").modal('show');
                    // window.location.reload(true);
                    // window.location = window.location.href+'?eraseCache=true';
                    var url = "/parent/appointment/"+getCookie('user_id')+"?"+ new Date().getTime() + Math.random();
                    // alert(url);
                    window.location.assign(url);


                    // $.ajax({
                    //     url: '/tasks/refresh/appointment',
                    //     type: 'POST',
                    //     data: {
                    //         user_id : getCookie('user_id')
                    //     },
                    //     dataType: 'json',
                    //     success: function(response) {

                    //         if (response.status == 'success') {

                    //             $('table tbody').html('');
                    //             // let modalUser = document.getElementById("name").innerHTML = name;

                    //             for (var i = 0; i < response.data['appointment'].length; i++) {
                    //                 if (response.data['appointment'][i]['app_status_id'] == '1') {
                    //                                 status = '<td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>';
                    //                                 } else if (response.data['appointment'][i]['app_status_id'] == '2') {
                    //                                 status = '<td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว</td>';
                    //                                 }
                    //                 $('table tbody').append(
                    //                     '<tr>' +
                    //                     '<td>' + (i + 1) + '</td>' +
                    //                     status +
                    //                     // '<td>' + response.data['appointment'][i]['fullname_s'] + '</td>' +
                    //                     '<td>' + response.data['appointment'][i]['nickname'] + '</td>' +
                    //                     '<td>' + response.data['appointment'][i]['appointment_at'] + '</td>' +
                    //                     '<td>' + response.data['appointment'][i]['name'] + '</td>' +
                    //                     '</td>' +
                    //                     '</tr>'
                    //                 );
                    //             }

                    //             window.location.reload(true);

                    //         }

                    //     },
                    //     error: function(err) {

                    //     }
                    // })
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
