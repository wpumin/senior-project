@extends('layouts.master_sidebar')

@section('title','แดชบอร์ด')

@section('content')

<div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card">
    <div class="card-body" style="padding: 15px; position: relative;">
        <span class="toggle-result flaticon-info-1 text-theme"></span>
        <iframe id="map" type="text/html" frameborder="0" height="245" width="100%" src="https://bear-bus.com/map"></iframe>
        <div id="result" class="custom-scrollbar" style="display: none;"></div>
    </div>
</div>
<div class="heading text-left">
    <h3>บันทึกการขึ้น-ลงรถประจำเดือน</h3>
</div>
<div class="card ui-tab-card pb-0">
    <div class="card-body p-4 p-md-5">
        <div class="border-nav-tab">
            <ul class="nav nav-tabs d-none d-lg-flex" role="tablist">
                <li class="nav-item custom-nav">
                    <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">ขึ้นรถ (เช้า)</a>
                </li>
                <li class="nav-item custom-nav">
                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">ลงรถ (เช้า)</a>
                </li>
                <li class="nav-item custom-nav">
                    <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">ขึ้นรถ (เย็น)</a>
                </li>
                <li class="nav-item custom-nav">
                    <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-selected="false">ลงรถ (เย็น)</a>
                </li>
            </ul>
            <div class="form-group d-block d-lg-none">
                <select class="form-control select2" id="select-box">
                    <option value="1">ขึ้นรถ (เช้า)</option>
                    <option value="2">ลงรถ (เช้า)</option>
                    <option value="3">ขึ้นรถ (เย็น)</option>
                    <option value="4">ลงรถ (เย็น)</option>
                </select>
            </div>
            <div class="tab-content pt-2 pt-lg-5">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table bs-table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">ชื่อเล่น</th>
                                    <th class="text-center">โรงเรียน</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>21</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">จิน</td>
                                    <td class="text-left">หนองฉางวิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">กาย</td>
                                    <td class="text-left">หนองฉางวิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">ดิว</td>
                                    <td class="text-left">หนองฉางวิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">น้ำฟ้า</td>
                                    <td class="text-left">หนองฉางวิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">ทิวทัศ</td>
                                    <td class="text-left">หนองฉางวิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table bs-table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">ชื่อเล่น</th>
                                    <th class="text-center">โรงเรียน</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>21</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">จิน</td>
                                    <td class="text-left">ธรรมานุวัตร</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">กาย</td>
                                    <td class="text-left">ธรรมานุวัตร</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">ดิว</td>
                                    <td class="text-left">ธรรมานุวัตร</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">น้ำฟ้า</td>
                                    <td class="text-left">ธรรมานุวัตร</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">ทิวทัศ</td>
                                    <td class="text-left">ธรรมานุวัตร</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table bs-table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">ชื่อเล่น</th>
                                    <th class="text-center">โรงเรียน</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>21</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">จิน</td>
                                    <td class="text-left">วัดหนองขุนชาติ</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">กาย</td>
                                    <td class="text-left">วัดหนองขุนชาติ</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">ดิว</td>
                                    <td class="text-left">วัดหนองขุนชาติ</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">น้ำฟ้า</td>
                                    <td class="text-left">วัดหนองขุนชาติ</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">ทิวทัศ</td>
                                    <td class="text-left">วัดหนองขุนชาติ</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab4" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table bs-table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">ชื่อเล่น</th>
                                    <th class="text-center">โรงเรียน</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>21</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">จิน</td>
                                    <td class="text-left">บ้านไร่วิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">กาย</td>
                                    <td class="text-left">บ้านไร่วิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">ดิว</td>
                                    <td class="text-left">บ้านไร่วิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">น้ำฟ้า</td>
                                    <td class="text-left">บ้านไร่วิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">ทิวทัศ</td>
                                    <td class="text-left">บ้านไร่วิทยา</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>

$('#select-box').change(function () {
   dropdown = $(this).val();
  //first hide all tabs again when a new option is selected
  $('.tab-pane').hide();
//   $('.tab-pane.fade').fadeOut();
//   console.log(dropdown);
  //then show the tab content of whatever option value was selected
  $('#tab' + dropdown).show();
  $('#tab' + dropdown).css('opacity','1');                                        
});

</script>

<script src="https://api.longdo.com/map/?key=d9d5dac05ff94fa24f89363eb7fbe538"></script>

<script>
    $('.sidebar-color').addClass('addHeight');

    // hide scrollup
    $(document).ready(function(){
        $("#map").attr("src","https://bear-bus.com/map"); 
        $('#scrollUp').css('z-index','-1');
    });

    $('.toggle-result').click(function(){
        $('#result').slideToggle();
    });

    // long do map
    function init() {

        map = new longdo.Map({
            placeholder: document.getElementById('map')
        });

        map.location({ lat: 15.263551, lon: 99.672852 }, true);
        map.zoomRange({ min:9, max: 16});
        map.Route.label(longdo.RouteLabel.Time);
        map.Route.line('road', { lineColor: '#ffbf29' });


        map.Route.placeholder(document.getElementById('result'));
        map.Route.add(new longdo.Marker({ lat: 15.083832, lon: 99.5170665 },
            {
                title: 'จุดรับส่งที่ 1',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'เทศบาลตำบลบ้านไร่'
            }
        ));
        // หูช้าง
        map.Route.add(new longdo.Marker({ lat: 15.147868, lon: 99.672083  },
            {
                title: 'จุดรับส่งที่ 2',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลหูช้าง'
            }
        ));
        // การุ้ง
        map.Route.add(new longdo.Marker({ lat: 15.175955, lon: 99.696781 },
            {
                title: 'จุดรับส่งที่ 3',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลเมืองโบราณการุ้ง'
            }
        ));
        // คลองโป่ง
        map.Route.add(new longdo.Marker({ lat: 15.215208, lon: 99.690788 },
            {
                title: 'จุดรับส่งที่ 4',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลบ้านคลองโป่ง'
            }
        ));
        // เขาตะพาบ
        map.Route.add(new longdo.Marker({ lat: 15.260942, lon: 99.680222 },
            {
                title: 'จุดรับส่งที่ 5',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลเขาตะพาบ'
            }
        ));
        // ทุ่งนามงาม
        map.Route.add(new longdo.Marker({ lat: 15.313869, lon: 99.719501  },
            {
                title: 'จุดรับส่งที่ 6',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'ตำบลทุ่งนางาม'
            }
        ));
        // โรงเรียนหนองฉางวิทยา
        map.Route.add(new longdo.Marker({ lat: 15.382140, lon: 99.851870 },
            {
                title: 'จุดรับส่งที่ 7',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'โรงเรียนหนองฉางวิทยา'
            }
        ));
        // โรงเรียนธรรมานุวัตรวิทยา
        map.Route.add(new longdo.Marker({ lat: 15.390607, lon: 99.833714 },
            {
                title: 'จุดรับส่งที่ 8',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'โรงเรียนธรรมานุวัตรวิทยา'
            }
        ));
        // โรงเรียนวัดหนองขุนชาติ
        map.Route.add(new longdo.Marker({ lat: 15.388589, lon: 99.835618 },
            {
                title: 'จุดรับส่งที่ 9',
                icon: {
                    url: 'https://bear-bus.com/images/internal/busstop.png',
                },
                detail: 'โรงเรียนวัดหนองขุนชาติ'
            }
        ));
        map.Route.search();

        $('#map').find('.ldmap_placeholder').addClass('border-customtlr5');
    }

</script>
@endsection
