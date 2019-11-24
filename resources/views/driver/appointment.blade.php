@extends('layouts.master_menu_bottom')

@section('title','แจ้งเดินทางเอง')

@section('content')

 <!-- Log Table Area Start Here -->
 <div class="heading text-left">
    <h3>ประวัติแจ้งเดินทางไป-กลับเอง</h3>
</div>
 <div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
            <h3>วันที่ {{ $date_ }}</h3>
            </div>
            {{-- <div class="dropdown-refresh">
                <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" value = "Refresh" onclick="history.go(0)"> <i class="fas fa-redo-alt"></i></a>
            </div> --}}
        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อเล่น" class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อโรงเรียน" class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยเบอร์ติดต่อ" class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        </form>
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>ชื่อเล่น</th>
                        <th>สถานะ</th>
                        <th>รูปเด็ก</th>
                        <th>โรงเรียน</th>
                        <th>ชื่อผู้ปกครอง</th>
                        <th>ความสัมพันธ์</th>
                        <th>เบอร์ติดต่อ</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>

                        <?php $count=1; ?>

                        @foreach($datas as $key => $info)
                        <tr>
                                <td><?php print $count ?></td>
                                <td>{{ $info['nickname'] }}</td>

                                @if($info['app_status'] == 1)
                                    <td class="badge badge-pill badge-red d-block mg-t-8">รอการอนุมัติ</td>
                                @elseif($info['app_status'] == 2)
                                    <td class="badge badge-pill badge-green d-block mg-t-8">อนุมัติแล้ว</td>
                                @endif

                                <td class="text-center student-profile"><a href="#" data-target="#studentProfile" data-toggle="modal"><img class="myImg" src="{{asset($info['photo_stu'])}}"></a></td>

                                <td>{{ $info['school'] }}</td>
                                <td>{{ $info['parent_name'] }}</td>
                                <td>{{ $info['relationship'] }}</td>
                                <td>{{ $info['phone'] }}</td>

                                @if($info['app_status'] == 1)
                                <td>
                                        <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#deleteTran-{{ $info['no'] }}"><span class="flaticon-close-2"></span></a><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#acceptTran-{{ $info['no'] }}"><span class="flaticon-correct-1"></span></a></div>
                                </td>
                                @elseif($info['app_status'] == 2)
                                    <td>-</td>
                                @endif

                        </tr>

                        <?php $count++ ?>
                        @endforeach

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
                    <a class="btn btn-secondary" href="<?php echo "/driver/appointment/".$_COOKIE['user_id']."/del/"; ?>{{ $info['no'] }}">ยืนยัน</a>
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
                    <a class="btn btn-secondary" href="<?php echo "/driver/appointment/".$_COOKIE['user_id']."/accept/"; ?>{{ $info['no'] }}">ยืนยัน</a>
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

<!-- Picture Modal-->
<div class="modal fade" id="studentProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog2 modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-md-12 modal_body_content px-4">
                <h2 class="mb-2 text-special-orange" id="nickname" >มอส</h2>
                <p>กฤตภาส แสงวิกุลกิจ | โรงเรียนคลองบ้านโป่ง</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img class="w-100" id="imgProfile" src="{{ URL::asset('images/internal/figure/nongmos.jpg') }}" alt="student profile">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Picture Modal End Here -->

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
    </script>
@endsection


