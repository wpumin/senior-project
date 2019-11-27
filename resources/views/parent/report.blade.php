@extends('layouts.master_menu_bottom')

@section('title','ร้องเรียน/แนะนำการบริการ')

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
                {{-- <form class="mg-b-10 mb-5 mb-lg-0" id="reportForm"> --}}
                    <div class="row gutters-8 new-added-form  mb-5 mb-md-0">
                        <div class="col-lg-5 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยวันที่" id="datetime" class="form-control air-datepicker calendar" data-position="bottom right" autocomplete="off">
                            <i class="far fa-calendar-alt" style="right: 22px !important;"></i>
                        </div>
                        <div class="col-lg-5 col-12 form-group">
                            <input type="text" placeholder="ค้นหาด้วยหัวข้อ" id="title_search" class="form-control">
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <button type="submit" onclick="myFunction()" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                        </div>
                    </div>
                {{-- </form> --}}
                <div class="notice-board-wrap" id="report">
                    {{-- ข้อมูลในระบบ Report จะส่งเข้ามาในส่วนนี้ --}}

                    <?php $count=1; ?>

                    @foreach($data as $key => $info)
                    <?php 
                        $date = $info['created_at'];
                        $date_day = substr($date,8,10-8);
                        $date_month = substr($date,5,7-5);
                        $date_year = (int)substr($date,0,4-0)+543;
                        $date_substrtime = substr($date,11,16-11);
                    ?>


                    <div class="notice-list">
                    <div class="post-date badge-orange filterDiv-1">{{ $info['type_name'] }} | <?php echo $date_day; ?>/<?php echo $date_month; ?>/<?php echo $date_year; ?> - <?php echo $date_substrtime; ?></div>
                    <h5 class="mb-2 filterDiv">หัวข้อ: {{ $info['title'] }}</h5>
                    <p class="notice-title filterDiv-2">{{ $info['content'] }}</p>
                    </div>

                    <?php $count++ ?>
                    @endforeach
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
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal" id="reloadPage">ตกลง</button></a>
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
                    <a href=""><button type="button" class="btn btn-primary" data-dismiss="modal" id="reloadPage">ตกลง</button></a>
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
    function myFunction() {
      // Declare variables
      var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

      input = document.getElementById("datetime");
      var input_title = document.getElementById("title_search");

    //   var x = document.getElementsByClassName("filterDiv");
    //   console.log(x[0]);
    //   var input_month = document.getElementById("myInputMonth");


      filter = input.value;
      filter_num = input_title.value;
    //   filter_month = input_month.value;

      table = document.getElementById("report");

      console.log('Filter: '+filter);
      console.log('Filter: '+filter_num);
    // //   console.log('Filter: '+filter_month);
    //   tr = table.getElementsByTagName("tr");

      var x = table.getElementsByClassName("filterDiv");
      var y = table.getElementsByClassName("filterDiv-1");
      var z = table.getElementsByClassName("filterDiv-2"); //content

    //   console.log(x);
    //   console.log(y);
    //   console.log(z);
    //   console.log(x.length);

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < x.length; i++) {

        td_num = x[i]; //choose table that search.
        td_y = y[i]; //date
        td_z = z[i];
        // td = tr[i].getElementsByTagName("td")[3]; //choose table that search.
        // td_month = tr[i].getElementsByTagName("td")[4]; //choose table that search.
        // console.log(td_num);
        // console.log(td_y);
        // console.log(td_z);

        if (td_num) {
          txtValue = td_num.textContent || td_num.innerText;
          txtValue_date = td_y.textContent || td_y.innerText;
        //   txtValue_month = td_month.textContent || td_month.innerText;

          console.log('Total: '+txtValue);
          console.log('Total: '+txtValue_date);
        //   console.log('Total: '+txtValue_month);

          if (txtValue.indexOf(filter_num) > -1 || txtValue_date.match('/'+filter+'/g')) {
            x[i].style.display = "";
            y[i].style.display = "";
            z[i].style.display = "";
          } else {
            x[i].style.display = "none";
            y[i].style.display = "none";
            z[i].style.display = "none";
          }
        }
      }
    }
    </script>
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



    // $.ajax({
    //             url: '/tasks/refresh/report',
    //             type: 'POST',
    //             data: {
    //                 user_id : getCookie('user_id')
    //             },
    //             success: function(response) {

    //                 // console.log(response['data'].length);
    //                 if (response['status'] == 'success') {

    //                     for (var i = 0; i < response['data'].length; i++) {
    //                         // if (response.data['report'][i]['order_id'] == '1') {
    //                         //     status = '<div class="post-date badge-green">';
    //                         //     } else if (response.data['report'][i]['order_id'] == '2') {
    //                         //     status = '<div class="post-date badge-orange">';
    //                         //     } else if (response.data['report'][i]['order_id'] == '3') {
    //                         //     status = '<div class="post-date badge-red">';
    //                         //     }
    //                         var tempTime = response['data'][i]['created_at'];
    //                         var time = tempTime.split(" ");
    //                         var time2 = time[1].substring(0,5);

    //                         $('#report').append(
    //                             '<div class="notice-list">' +
    //                             '<div class="post-date badge-orange">' + response['data'][i]['type_name'] + ' | ' + response['data'][i]['created_at'] + '</div>' +
    //                             '<h5 class="mb-2">หัวข้อ: ' + response['data'][i]['title'] + '</h5>' +
    //                             '<p class="notice-title">' + response['data'][i]['content'] + '</p>'
    //                              +
    //                             '</div>'
    //                         );
    //                     }
    //                 }
    //             },
    //             error: function(err) {

    //             }
    //         })


    function submitForm(){

        var user_id = getCookie('user_id');
        var type_id = $('#type_id').val();
        var title = $('#title').val();
        var content = $('#content').val();

        var d = new Date();
        var today = d.getDate() +'/'+(d.getMonth()+1)+'/'+(d.getFullYear()+543);

        var data = {
            'user_id' : getCookie('user_id'),
            'type_id' : $('#type_id').val(),
            'title' : $('#title').val(),
            'content' : $('#content').val()
        };

        // console.log(data);

        $.post( "/report",data , function( result ) {
            // console.log(result);
            if (result['status'] == 'success') {
                // console.log('true');
                $(".wrap-modal > #successReport").modal('show');
                setInterval(function(){
                    var url = "/parent/report/"+getCookie('user_id')+"?"+ new Date().getTime() + Math.random();
                    // alert(url);
                    window.location.assign(url);

                }, 3000);
                $('#reloadPage').click(function(){
                    var url = "/parent/report/"+getCookie('user_id')+"?"+ new Date().getTime() + Math.random();
                    // alert(url);
                    window.location.assign(url);
                });
                // window.location.reload();
            }

            //ส่งไม่สำเร็จ (กรอกไม่ครบหรือกรอกผิด)
                if (result['status'] == 'field_required') {
                    $(".wrap-modal > #failAppointment").modal('show');
                setInterval(function(){
                    window.location.reload();
                }, 3000);
                $('#reloadPage').click(function(){
                    window.location.reload();
                });
                    // window.location.reload(true);
                }
        });

        // $.ajax({
        //     type: "POST",
        //     url: "/report",
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     data: {
        //         user_id: user_id,
        //         type_id: type_id,
        //         title: title,
        //         content: content,

        //     },
        //     success: function(result){
        //         // ส่งฟอร์มสำเร็จ
        //         if (result.status == 'success') {
        //             $(".wrap-modal > #successReport").modal('show');

        //             $.ajax({
        //                     url: '/tasks/refresh/report',
        //                     type: 'POST',
        //                     data: {
        //                         user_id : getCookie('user_id')
        //                     },
        //                     success: function(response) {

        //                         // console.log(response['data']);
        //                         if (response['status'] == 'success') {

        //                             $('#report').html('');
        //                             for (var i = 0; i < response['data'].length; i++) {
        //                                 // if (response.data['report'][i]['order_id'] == '1') {
        //                                 //     status = '<div class="post-date badge-green">';
        //                                 //     } else if (response.data['report'][i]['order_id'] == '2') {
        //                                 //     status = '<div class="post-date badge-orange">';
        //                                 //     } else if (response.data['report'][i]['order_id'] == '3') {
        //                                 //     status = '<div class="post-date badge-red">';
        //                                 //     }
        //                                 var tempTime = response['data'][i]['created_at'];
        //                                 var time = tempTime.split(" ");
        //                                 var time2 = time[1].substring(0,5);

        //                                 $('#report').append(
        //                                     '<div class="notice-list">' +
        //                                     '<div class="post-date badge-orange">' + response['data'][i]['type_name'] + ' | ' + response['data'][i]['created_at'] + '</div>' +
        //                                     '<h5 class="mb-2">หัวข้อ: ' + response['data'][i]['title'] + '</h5>' +
        //                                     '<p class="notice-title">' + response['data'][i]['content'] + '</p>'
        //                                     +
        //                                     '</div>'
        //                                 );
        //                             $('#type_id').val("");
        //                             $('#title').val("");
        //                             $('#content').val("");
        //                             }
        //                         }
        //                     },
        //                     error: function(err) {

        //                     }
        //                 })
        //         }

        //         // ส่งไม่สำเร็จ (กรอกไม่ครบหรือกรอกผิด)
        //         if (result.status == 'field_required') {
        //             $(".wrap-modal > #failAppointment").modal('show');
        //             window.location.reload(true);
        //         }

        //     },
        //     error: function(){
        //         // เซิร์ฟเวอร์มีปัญหา
        //         $(".wrap-modal > #errorAppointment").modal('show');
        //     }
        // });
    }

</script>
@endsection
