@extends('layouts.master_sidebar')

@section('title','จัดการข่าวสาร')

@section('content')

<!-- Parent Table Area Start Here -->
<div class="heading text-left">
    <h3>จัดการข่าวสาร</h3>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                {{-- <h3>ข้อมูลนักเรียนประจำคันรถ</h3> --}}
            </div>
            <a href="{{ url('admin/management/news/create') }}" style="color: #bcbcbc !important;" role="button" aria-expanded="true"> <i class="flaticon-new"></i> เพิ่มหัวข้อข่าว</a>
        </div>
        {{-- <form class="mb-5 mb-lg-0 new-added-form"> --}}
            <div class="row gutters-8">
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อหัวข้อ" class="form-control" id="search_title">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยผู้บันทึก" class="form-control" id="search_name">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input type="text" placeholder="ค้นหาด้วยเวลาบันทึกล่าสุด" class="form-control air-datepicker calendar" id="search_timing">
                        <i class="far fa-calendar-alt" style="right: 22px;"></i>
                    </div>
                <div class="col-xl-2 col-lg-6 col-12 form-group pb-lg-5 pb-xl-0">
                    <button type="submit" onclick="myFunction()" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        {{-- </form> --}}
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap" id="myTable">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>หัวข้อ</th>
                        <th>บันทึกล่าสุด</th>
                        <th>ผู้บันทึก</th>
                        <th>สถานะ</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $count=1; ?>

                        @foreach($datas as $key => $info)
                        <tr>
                                <td><?php print $count ?></td>
                                <td class="text-left">{{ $info['title'] }}</td>
                                <td>{{ $info['created_at'] }}</td>
                                <td>{{ $info['name'] }}</td>
                                @if( $info['status']  == 1)
                                <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                                @else

                                <td class="badge badge-pill badge-orange d-block mg-t-8">งดเผยแพร่ชั่วคราว</td>
                                @endif
                                <td>
                                    {{-- {{ url('admin/management/parent/edit') }} --}}
                                    <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews-{{ $info['id'] }}"><span class="flaticon-bin"></span></a>
                                </td>
                            </tr>

                        <?php $count++ ?>
                        @endforeach

                    {{-- <tr>
                        <td>2</td>
                        <td class="text-left">โปรโมชันเพียงใช้เครือข่าย TRUE</td>
                        <td>02/11/2562 15:42</td>
                        <td>adblon</td>
                        <td class="badge badge-pill badge-orange d-block mg-t-8">งดเผยแพร่ชั่วคราว</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="text-left">เปิดเทอมนี้ เพิ่มที่นั่งอีก</td>
                        <td>02/11/2562 12:00</td>
                        <td>adblon</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">งดเผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="text-left">ประกาศขึ้นราคาค่ารถ</td>
                        <td>31/09/2562 10:00</td>
                        <td>adblon</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="text-left">ประกาศเปลี่ยนเส้นทางการเดินรถ</td>
                        <td>24/09/2562 09:00</td>
                        <td>adbam</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="text-left">ประกาศเปลี่ยนเส้นทางการเดินรถ</td>
                        <td>12/09/2562 16:30</td>
                        <td>adbam</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="text-left">ประกาศเปลี่ยนเส้นทางการเดินรถ</td>
                        <td>11/08/2562 12:30</td>
                        <td>adbam</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="text-left">ประกาศเปลี่ยนเส้นทางการเดินรถ</td>
                        <td>11/08/2562 12:00</td>
                        <td>adbam</td>
                        <td class="badge badge-pill badge-red d-block mg-t-8">งดเผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="text-left">ประกาศเปลี่ยนเส้นทางการเดินรถ</td>
                        <td>05/07/2562 16:00</td>
                        <td>adbam</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="text-left">ประกาศเปลี่ยนเส้นทางการเดินรถ</td>
                        <td>04/07/2562 16:00</td>
                        <td>adbam</td>
                        <td class="badge badge-pill badge-green d-block mg-t-8">เผยแพร่</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteNews"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Parent Table Area End Here -->

@foreach($datas as $key => $info)
<!-- Accept Modal -->
<div class="wrap-modal">
<div class="modal fade" id="deleteNews-{{ $info['id'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ยืนยันการลบข่าวสารนี้ใช่หรือไม่</b>
                    <div class="modal-button text-center mt-3">
                        <button type="button" class="btn btn-secondary" id="confirmDelete">ยืนยัน</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Accept Modal End Here -->
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

$('body').on('change', '.calendar', function() {
  console.log('aaa');
});

        // ajax
        $('#confirmDelete').click(function(){

            $.ajax({
                type: "POST",
                url: "",
                // url: "http://localhost:8000/delete-user",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                success: function(result){

                    // ยืนยันลำเร็จ
                    if(result.status == 'success') {
                        // ลบชื่อผู้ใช้นั้น
                        $('#deleteUser').modal('hide');
                    }

                },
                error: function(result){
                    $('#deleteUser').modal('hide');
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        });


        // ---------  Search ----------//

    function myFunction() {
      // Declare variables
      var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

      input = document.getElementById("search_title");
      var input_name = document.getElementById("search_name");
      var input_timing = document.getElementById("search_timing");


      filter = input.value;
      filter_input_name = input_name.value;
      filter_timing = input_timing.value;

      table = document.getElementById("myTable");
    //   console.log('Filter: '+filter);
    //   console.log('Filter: '+filter_num);
    //   console.log('Filter: '+filter_month);
    //   console.log('----------');

      tr = table.getElementsByTagName("tr");

    //   console.log(tr.length);

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {

        td_name = tr[i].getElementsByTagName("td")[1]; //choose table that search. (Name)
        td_period_time = tr[i].getElementsByTagName("td")[3]; //choose table that search. (PeriodTime)
        td_date = tr[i].getElementsByTagName("td")[2]; //choose table that search. (Date)
        // console.log(td_period_time);
        // console.log('----------');

        if (td_name) {
          txtValue = td_name.textContent || td_name.innerText;
          txtValue_period_time = td_period_time.textContent || td_period_time.innerText;
          txtValue_date = td_date.textContent || td_date.innerText;

        //   console.log('Total: '+txtValue);
        //   console.log('Total: '+txtValue_period_time);
        //   console.log('Total: '+txtValue_date);
        //   console.log('----------');

          if (txtValue.indexOf(filter) > -1 && txtValue_period_time.indexOf(filter_input_name) > -1 && txtValue_date.indexOf(filter_timing) > -1) {
            tr[i].style.display = "";
            $('#search_timing').val("");
          } else {
            tr[i].style.display = "none";
            $('#search_timing').val("");
          }
        }
      }
    }
    </script>
@endsection
