@extends('layouts.master_menu_bottom')

@section('title','แจ้งเดินทางเอง')

@section('content')

 <!-- Log Table Area Start Here -->
 <div class="heading text-left">
    <h3>ประวัติแจ้งเดินทางไป-กลับเอง</h3>
</div>
 <div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1 pt-4">
            <div class="item-title">
            <h3>วันที่ {{ $date_ }}</h3>
            </div>
            {{-- <div class="dropdown-refresh">
                <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
            </div> --}}
        </div>
        {{-- <form class="mg-b-20"> --}}
            <div class="row gutters-8 mg-b-20">
                <div class="col-2-xxxl col-xl-2 col-lg-2 col-12 form-group">
                    <select class="select2" required autocomplete="off" id="period_time" name="period_time">
                        <option value="">ค้นหาด้วยช่วงเวลา</option>
                        <option value="ช่วงเช้า">ช่วงเช้า</option>
                        <option value="ช่วงย็น">ช่วงย็น</option>
                    </select>
                </div>
                <div class="col-2-xxxl col-xl-2 col-lg-2 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control" id="search_nickname">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อโรงเรียน" class="form-control" id="search_school">
                </div>
                <div class="col-3-xxxl col-xl-3 col-lg-2 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยเบอร์ติดต่อ" class="form-control" id="search_phone">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" onclick="myFunction()" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        {{-- </form> --}}
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap" id="myTable">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>ชื่อเล่น</th>
                        <th>สถานะ</th>
                        <th>รูปเด็ก</th>
                        <th>โรงเรียน</th>
                        <th>ช่วงเวลา</th>
                        <th>ชื่อผู้ปกครอง</th>
                        <th>ความสัมพันธ์</th>
                        <th>เบอร์ติดต่อ</th>
                        <th>เวลาที่แจ้ง</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- @if ($datas->completed->count() > 0) --}}

                        <?php $count=1;
                        // dd(count($datas) > 0);
                        if(count($datas) > 0 ) {
                        ?>

                        @foreach($datas as $key => $info)

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
                                <td>{{ $info['nickname'] }}</td>

                                @if($info['app_status'] == 1)
                                    <td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>
                                @elseif($info['app_status'] == 2)
                                    <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว</td>
                                @endif

                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile-{{ $info['no'] }}" data-toggle="modal"><img class="myImg-{{ $info['no'] }}" src="{{asset($info['photo_stu'])}}"></a></td>

                                <td>{{ $info['school'] }}</td>

                                @if($info['period_time'] == 1)
                                    <td>ช่วงเช้า</td>
                                @elseif($info['period_time'] == 2)
                                    <td>ช่วงเย็น</td>
                                @endif


                                <td>{{ $info['parent_name'] }}</td>
                                <td>{{ $info['relationship'] }}</td>
                                <td>{{ $info['phone'] }}</td>
                                <td><?php echo $concat_created_at; ?></td>

                                @if($info['app_status'] == 1)
                                    <td>
                                        <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran-{{ $info['no'] }}"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran-{{ $info['no'] }}"><span class="flaticon-correct-1"></span></a></div>
                                    </td>
                                @elseif($info['app_status'] == 2)
                                    <td>
                                        <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran-{{ $info['no'] }}"><span class="flaticon-close-2"></span></a></div>
                                    </td>
                                @endif

                            </tr>

                        <?php $count++ ?>
                        @endforeach
                        <?php } ?>
                        {{-- @endif --}}


                    {{-- <tr>
                        <td>2</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>มอส</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัตแล้ว</td>
                        <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}"></a></td>
                        <td>ทัพหลวง</td>
                        <td>สมปอง ทองเหลือง</td>
                        <td>แม่</td>
                        <td>090-978-5703</td>
                        <td>
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran"><span class="flaticon-correct-1"></span></a></div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Log Table Area End Here -->

@foreach($datas as $key => $info)
<!-- Delete Modal -->
<div class="wrap-modal">
<div class="modal fade" id="deleteTran-{{ $info['no'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteTran" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ยกเลิกการนัดหมาย</b>
                <p>การแจ้งเดินทางไป-กลับเอง ใช่หรือไม่</p>
                <div class="modal-button text-center mt-3">
                    <a class="btn btn-secondary" href="<?php echo "/driver/appointment/".$_COOKIE['car_id']."/del/"; ?>{{ $info['no'].'/'.$_COOKIE['user_id'].'/'.$_COOKIE['secure_code'] }}">ยืนยัน</a>
                    {{-- <button type="button" class="btn btn-secondary" id="confirmDelete">ยืนยัน</button> --}}
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal End Here -->
@endforeach

@foreach($datas as $key => $info)
<!-- Accept Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="acceptTran-{{ $info['no'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteTran" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header _success">
            </div>
            <div class="modal-body my-4 text-center">
                <b>ยืนยันการนัดหมาย</b>
                <p>การแจ้งเดินทางไป-กลับเอง ใช่หรือไม่</p>
                <div class="modal-button text-center mt-3">
                    <a class="btn btn-secondary" href="<?php echo "/driver/appointment/".$_COOKIE['car_id']."/accept/"; ?>{{ $info['no'].'/'.$_COOKIE['user_id'].'/'.$_COOKIE['secure_code'] }}">ยืนยัน</a>
                    {{-- <button type="button" class="btn btn-secondary" id="confirmAccept">ยืนยัน</button> --}}
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                    <!-- data-dismiss="modal" -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Accept Modal End Here -->
@endforeach

@foreach($datas as $key => $info)
<!-- Picture Modal-->
<div class="modal fade" id="studentProfile-{{ $info['no'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <h2 class="mb-2 text-special-orange" id="nickname" >{{ $info['nickname'] }}</h2>
                    <p>{{ $info['fullname'] }} | {{ $info['school'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img class="w-100" id="imgProfile-{{ $info['no'] }}" src="{{asset($info['photo_stu'])}}" alt="student profile">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Picture Modal End Here -->
@endforeach

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
                    <button type="button" class="btn btn-primary" id="delete-spinner" data-dismiss="modal">ตกลง</button>
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
        $('.sidebar-color').addClass('addHeight');

        $('#confirmDelete').click(function(){

            $.ajax({
                type: "POST",
                url: "",
                // url: "http://localhost:8000/delete-appointment",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                success: function(result){

                    // ลบสำเร็จ
                    if(result.status == 'success') {
                        // ลบข้อมูลแบบ ajax
                    }

                },
                error: function(result){
                    $('#deleteTran').modal('hide');
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        });



        $('#confirmAccept').click(function(){

            $.ajax({
                type: "POST",
                url: "",
                // url: "http://localhost:8000/accept-appointment",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                success: function(result){

                    // ยืนยันสำเร็จ
                    if(result.status == 'success') {
                        // ยืนยันการนัดหมายแบบ ajax
                    }

                },
                error: function(result){
                    $('#acceptTran').modal('hide');
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        });

        // ---------  Search ----------//

    function myFunction() {
      // Declare variables
      var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

      input = document.getElementById("search_nickname");
      var input_school = document.getElementById("search_school");
      var input_month = document.getElementById("search_phone"); //period_time
      var input_period_time = document.getElementById("period_time");


      filter = input.value;
      filter_input_school = input_school.value;
      filter_month = input_month.value;
      filter_input_period_time = input_period_time.value;

      table = document.getElementById("myTable");
    //   console.log('Filter: '+filter);
    //   console.log('Filter: '+filter_num);
    //   console.log('Filter: '+filter_month);
      tr = table.getElementsByTagName("tr");

    //   console.log(tr.length);

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {

        td_name = tr[i].getElementsByTagName("td")[1]; //choose table that search. (Name)
        td_school = tr[i].getElementsByTagName("td")[4]; //choose table that search. (td_school)
        td_period_time = tr[i].getElementsByTagName("td")[5]; //choose table that search. (Date)
        // console.log(td);
        if (td_name) {
          txtValue = td_name.textContent || td_name.innerText;
          txtValue_school = td_school.textContent || td_school.innerText;
          txtValue_period_time = td_period_time.textContent || td_period_time.innerText;

        //   console.log('Total: '+txtValue);
          console.log('Total: '+txtValue_period_time);
        //   console.log('Total: '+txtValue_date);

          if (txtValue.indexOf(filter) > -1 && txtValue_school.indexOf(filter_input_school) > -1 && txtValue_period_time.indexOf(filter_input_period_time) > -1) {
            tr[i].style.display = "";

            $('#search_nickname').val(null);
            $('#search_school').val(null);
            $('#search_phone').val(null);
            $('#period_time').val(null).trigger('change');

          } else {
            tr[i].style.display = "none";

            $('#search_nickname').val(null);
            $('#search_school').val(null);
            $('#search_phone').val(null);
            $('#period_time').val(null).trigger('change');
          }
        }
      }
    }
    </script>
@endsection


