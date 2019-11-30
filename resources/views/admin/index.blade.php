@extends('layouts.master_sidebar')

@section('title','หน้าหลัก')

@section('content')

<!-- Owl-Carousel Area -->
<!-- คิวรี่ 2 ขนาด มือถือกับแท๊บเล็ตขึ้นไป -->
<!-- มือถือไล่สีแถบล่าง -->
<div class="heading text-left">
    <h3>อัพเดตข่าวสาร</h3>
</div>
<div class="owl-carousel owl-theme d-md-none">
        @foreach($datas as $key => $info_news)

        <a href="<?php echo "/admin/news/detail/"; ?>{{ $info_news['id'] }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{URL::asset($info_news['image'])}})"></div></a>

            @endforeach
    {{-- <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/true.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/seat_bus.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/brick.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/route.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: linear-gradient(to bottom, rgba(255, 94, 0, 0) 44%, rgba(255, 94, 0, 0.6) 89%), url({{ URL::asset("images/internal/banner/route2.jpg")}})"></div></a> --}}
</div>
<!-- ไอแพดขึ้นไป -->
<div class="owl-carousel owl-theme d-none d-md-block">
        @foreach($datas as $key => $info_news)

        <a href="<?php echo "/admin/news/detail/"; ?>{{ $info_news['id'] }}"><div class="item" style="background-image: url({{ URL::asset($info_news['image'])}})"></div></a>

            @endforeach
    {{-- <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/news.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/true.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/seat_bus.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/brick.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/route.jpg")}})"></div></a>
    <a href="{{ url('admin/news/detail') }}"><div class="item" style="background-image: url({{ URL::asset("images/internal/banner/route2.jpg")}})"></div></a> --}}
</div>
<!-- Owl-Carousel Area End Here-->

<!-- Report Table Area Start Here -->
<div class="heading text-left">
    <h3>ร้องเรียนการให้บริการ</h3>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                {{-- <h3>ข้อมูลนักเรียนประจำคันรถ</h3> --}}
            </div>
            {{-- <div class="dropdown-refresh">
                    <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
                </div> --}}
        </div>
        {{-- <form class="mb-5 mb-lg-0 new-added-form"> --}}
            <div class="row gutters-8 new-added-form mb-5 mb-md-0">
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยหัวข้อ" class="form-control" id="search_title">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="form-control select2" autocomplete="off" id="search_type">
                        <option value="">ค้นหาด้วยประเภท</option>
                        <option value="บริการทั่วไป">บริการทั่วไป</option>
                        <option value="พฤติกรรมคนขับ">พฤติกรรมคนขับ</option>
                        <option value="ระบบการชำระเงิน">ระบบการชำระเงิน</option>
                        <option value="ระบบการแจ้งเดินทางเอง">ระบบการแจ้งเดินทางเอง</option>
                        <option value="ระบบติดตามรถบัส">ระบบติดตามรถบัส</option>
                        <option value="แดชบอร์ด">แดชบอร์ด</option>
                        <option value="แก้ไขโปรไฟล์">แก้ไขโปรไฟล์</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยวันที่" class="form-control air-datepicker calendar" id="search_date">
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
                        <th>ประเภท</th>
                        <th>เวลาที่แจ้ง</th>
                        <th>รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                            <?php $count=1; ?>

                            @foreach($data as $key => $info)

                            <?php
                                $time = $info['time'];
                                $time_substr = substr($time,11,16-11);
                            ?>
                            <td><?php print $count ?></td>
                            <td class="text-left">{{ $info['title'] }}</td>
                            <td>{{ $info['type'] }}</td>
                            <td>{{ $info['date'] }} - <?php echo $time_substr; ?> น.</td>
                            <td><a href="#" data-toggle="modal" data-target="#reportModal-{{ $info['id'] }}"><span class="flaticon-invoice"></a></td>

                            <?php $count++ ?>

                        {{-- <td>1</td>
                        <td class="text-left">แจ้งพฤติกรรมคนขับรถคันที่ 2 แย่มากเลยค่ะ</td>
                        <td>พฤติกรรมคนขับรถ</td>
                        <td>26/10/2562 17:02:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td> --}}
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td>2</td>
                        <td class="text-left">ระบบจ่ายเงินไม่เสถียร</td>
                        <td>ระบบการเงิน</td>
                        <td>26/10/2562 16:52:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="text-left">อยากให้ดูแลเด็กให้ทั่วถึงด้วยค่ะ</td>
                        <td>บริการทั่วไป</td>
                        <td>26/10/2562 16:50:12</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="text-left">ฝากถึงเจ้าของรถ เรื่องพัดลมบนรถด้วยครับ</td>
                        <td>บริการทั่วไป</td>
                        <td>25/10/2562 09:43:51</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="text-left">อยากให้คนขับรถขับรถช้าลงกว่านี้</td>
                        <td>พฤติกรรมคนขับรถ</td>
                        <td>25/10/2562 07:43:51</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="text-left">GPS ไม่ค่อยเสถียรเลยครับ</td>
                        <td>ระบบติดตามรถบัส</td>
                        <td>24/10/2562 16:42:11</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="text-left">ลูกชอบบ่นว่าถึงโรงเรียนสาย</td>
                        <td>บริการทั่วไป</td>
                        <td>24/10/2562 11:24:33</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="text-left">อยากให้คนขับพูดจาดีๆกับเด็กๆ </td>
                        <td>พฤติกรรมคนขับรถ</td>
                        <td>24/10/2562 09:40:43</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="text-left">แจ้งพฤติกรรมคนขับรถคันที่ 2 แย่มากเลยค่ะ</td>
                        <td>พฤติกรรมคนขับรถ</td>
                        <td>26/10/2562 17:02:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="text-left">ระบบจ่ายเงินไม่เสถียร</td>
                        <td>ระบบการเงิน</td>
                        <td>26/10/2562 16:52:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td class="text-left">อยากให้ดูแลเด็กให้ทั่วถึงด้วยค่ะ</td>
                        <td>บริการทั่วไป</td>
                        <td>26/10/2562 16:50:12</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="text-left">ฝากถึงเจ้าของรถ เรื่องพัดลมบนรถด้วยครับ</td>
                        <td>บริการทั่วไป</td>
                        <td>25/10/2562 09:43:51</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td class="text-left">อยากให้คนขับรถขับรถช้าลงกว่านี้</td>
                        <td>พฤติกรรมคนขับรถ</td>
                        <td>25/10/2562 07:43:51</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td class="text-left">GPS ไม่ค่อยเสถียรเลยครับ</td>
                        <td>ระบบติดตามรถบัส</td>
                        <td>24/10/2562 16:42:11</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td class="text-left">ลูกชอบบ่นว่าถึงโรงเรียนสาย</td>
                        <td>บริการทั่วไป</td>
                        <td>24/10/2562 11:24:33</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td class="text-left">อยากให้คนขับพูดจาดีๆกับเด็กๆ </td>
                        <td>พฤติกรรมคนขับรถ</td>
                        <td>24/10/2562 09:40:43</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td class="text-left">โปรไฟล์ผมผิดคะ รบกวนด้วย </td>
                        <td>แก้ไขโปรไฟล์</td>
                        <td>23/10/2562 06:54:23</td>
                        <td><a href="#" data-toggle="modal" data-target="#reportModal"><span class="flaticon-invoice"></a></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Report Table Area End Here -->

@foreach($data as $key => $info)
<!-- Report Modal -->
<div class="modal fade" id="reportModal-{{ $info['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog1 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal_body_content px-4">
                    <table class="detail">
                        <tbody>
                            <tr>
                                <td>หัวข้อ:</td>
                                <td>{{ $info['title'] }}</td>
                            </tr>
                            <tr>
                                <td>ประเภท:</td>
                                <td>{{ $info['type'] }}</td>
                            </tr>
                            <tr>
                                <?php
                                    $time = $info['time'];
                                    $time_substr = substr($time,11,16-11);
                                ?>
                                <td style="min-width: 100px;">เวลาแจ้ง:</td>
                                <td>{{ $info['date'] }} - <?php echo $time_substr; ?> น.</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="my-4">
                        รายละเอียด: <br>
                        {{ $info['content'] }}
                    </p>
                    <p class="text-right mb-2">
                            {{ $info['name'] }} <br>
                            {{ $info['phone'] }}
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Report Modal End Here -->
@endforeach

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

        // ---------  Search ----------//

    function myFunction() {
      // Declare variables
      var input, filter, filter_num, filter_month, table, tr, td, i, txtValue;

      var title = document.getElementById("search_title");
      var type = document.getElementById("search_type");
      var input_date = document.getElementById("search_date");


      filter_title = title.value;
      filter_type = type.value;
      filter_date = input_date.value;

      table = document.getElementById("myTable");
    //   console.log('Filter: '+filter);
    //   console.log('Filter: '+filter_num);
    //   console.log('Filter: '+filter_month);
      tr = table.getElementsByTagName("tr");

    //   console.log(tr.length);

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {

        td_name = tr[i].getElementsByTagName("td")[1]; //choose table that search. (Name)
        td_period_time = tr[i].getElementsByTagName("td")[2]; //choose table that search. (PeriodTime)
        td_date = tr[i].getElementsByTagName("td")[3]; //choose table that search. (Date)
        // console.log(td);
        if (td_name) {
          txtValue = td_name.textContent || td_name.innerText;
          txtValue_period_time = td_period_time.textContent || td_period_time.innerText;
          txtValue_date = td_date.textContent || td_date.innerText;

        //   console.log('Total: '+txtValue);
        //   console.log('Total: '+txtValue_period_time);
        //   console.log('Total: '+txtValue_date);

          if (txtValue.indexOf(filter_title) > -1 && txtValue_period_time.indexOf(filter_type) > -1 && txtValue_date.indexOf(filter_date) > -1) {
            tr[i].style.display = "";

            $('#search_title').val(null);
            $('#search_type').val(null).trigger('change');
            // $('#search_type').val("");
            $('#search_date').val(null);
          } else {
            tr[i].style.display = "none";

            $('#search_title').val(null);
            $('#search_type').val(null).trigger('change');
            // $('#search_type').val("");
            $('#search_date').val(null);

          }
        }


      }
    }
    </script>
@endsection
