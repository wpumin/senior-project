@extends('layouts.master_sidebar')

@section('title','จัดการบัญชีผู้ปกครอง')

@section('content')

<!-- Parent Table Area Start Here -->
<div class="heading text-left">
    <h3>จัดการบัญชีผู้ปกครอง</h3>
</div>

<div class="card height-auto pb-0">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                {{-- <h3>ข้อมูลนักเรียนประจำคันรถ</h3> --}}
            </div>
            <a href="{{ url('admin/management/parent/create') }}" style="color: #bcbcbc !important;" role="button" aria-expanded="true"> <i class="fas fa-user-plus"></i> เพิ่มผู้ใช้งาน</a>
        </div>
        <form class="mb-5 mb-lg-0 new-added-form">
            <div class="row gutters-8">
                <div class="col-4-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อผู้ใช้งาน" class="form-control">
                </div>
                <div class="col-4-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยชื่อ" class="form-control">
                </div>
                <div class="col-3-xxxl col-lg-3 col-12 form-group">
                    <input type="text" placeholder="ค้นหาด้วยเบอร์โทร" class="form-control">
                </div>
                <div class="col-1-xxxl col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">ค้นหา</button>
                </div>
            </div>
        </form>
        <div class="table-responsive student-profile-table">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr class="bg-special-orange">
                        <th>ลำดับ</th>
                        <th>ชื่อผู้ใช้</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ติดต่อ</th>
                        <th>แก้ไขล่าสุด</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>

                        <?php $count=1;?>

                        @foreach($datas as $key=>$data)
                        <?php
                            $updated_at = $data['datetime'];
                            $year_substr = substr($updated_at,0,4-0);
                            $month_substr = substr($updated_at,5,7-5);
                            $date_substr = substr($updated_at,8,10-8);
                            $time_substr = substr($updated_at,11,16-11);
                            $concat_updated_at = '' . $date_substr . '/' . $month_substr . '/' . $year_substr . ' - ' . $time_substr . ' น.';
                        ?>
                        <tr>
                                <td><?php print $count ?></td>
                                <td>{{ $data['username'] }}</td>
                                <td>{{ $data['first_name'] }}</td>
                                <td>{{ $data['last_name'] }}</td>
                                <td>{{ $data['phone'] }}</td>
                                <td>{{ $concat_updated_at }}</td>
                                <td>
                                    {{-- {{ url('admin/management/parent/edit') }} --}}
                                    <a href="<?php echo "/admin/management/parent/edit/"; ?>{{ $data['no'] }}"><span class="flaticon-edit"></span></a>
                                    <a href="#" data-toggle="modal" data-target="#deleteUser-{{ $data['no'] }}"><span class="flaticon-bin"></span></a>
                                </td>
                            </tr>
                            <?php $count++ ?>

                    @endforeach
                    {{-- <tr>
                        <td>1</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            {{ url('admin/management/parent/edit') }} //ต้องปิดด้วย
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <td>2</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>tanongsak12</td>
                        <td>ธนงศักดิ์</td>
                        <td>เรียนดี</td>
                        <td>089-811-5155</td>
                        <td>26/10/2562 17:02:23</td>
                        <td>
                            <a href="#"><span class="flaticon-edit"></span></a><a href="#" data-toggle="modal" data-target="#deleteUser"><span class="flaticon-bin"></span></a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Parent Table Area End Here -->

@foreach($datas as $key=>$data)
<!-- Accept Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="deleteUser-{{ $data['no'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ยืนยันการลบผู้ใช้งานใช่หรือไม่</b>
                    <div class="modal-button text-center mt-3">
                        <a class="btn btn-secondary" id="confirmDelete" href="<?php echo "/admin/management/parent/del/"; ?>{{ $data['no'] }}">ยืนยัน</a>
                        {{-- <button type="button" class="btn btn-secondary" id="confirmDelete">ยืนยัน</button> --}}
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

        // ajax
        // $('#confirmDelete').click(function(){

        //     window.location.href = "/admin/management/parent";
        // });
    </script>
@endsection
