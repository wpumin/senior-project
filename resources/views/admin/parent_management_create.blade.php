@extends('layouts.master_sidebar')

@section('title','เพิ่มบัญชีผู้ปกครอง')

@section('content')

<!-- Parent Table Area Start Here -->
<div class="heading text-left">
    <h3>เพิ่มบัญชีผู้ปกครอง</h3>
</div>
<div class="card height-auto">
    <div class="card-body pt-5">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ข้อมูลผู้ปกครอง</h3>
            </div>
        </div>
        <form id="addUserForm" class="mb-5 mb-lg-0 new-added-form">
            <div class="row">
                <div class="col-lg-12 col-12 form-group">
                    <div class="dropzone text-center mt-4">
                    </div>
                    <div class="text-center text-lg-left mt-3">
                        <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2" required>
                        <option value="">คำนำหน้า</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ชื่อ" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="นามสกุล" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <select class="select2"required >
                        <option value="">ความสัมพันธ์</option>
                        <option value="1">พ่อ</option>
                        <option value="2">แม่</option>
                        <option value="3">ผู้ปกครอง</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="เบอร์โทร" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ไลน์ไอดี" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="email" placeholder="อีเมล" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="email" placeholder="ยืนยันอีเมล" class="form-control">
                </div>
                <div class="col-xl-12 col-lg-6 col-12 form-group">
                    <textarea required class="textarea form-control" name="address" placeholder="ที่อยู่" rows="6"></textarea>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="text" placeholder="ชื่อผู้ใช้" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="password" placeholder="รหัสผ่าน" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <input required type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control">
                </div>

                <div class="col-lg-12 col-12 form-group clone-student">
                    <hr class="mb-5 hr-adduser">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3 class="pb-3">ข้อมูลเด็กนักเรียน</h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="dropzone text-center mt-4">
                        </div>
                        <div class="text-center text-lg-left mt-3">
                            <span class="text-red small">ไฟล์ต้องมีขนาดไม่เกิน 4MB และเป็นสกุลไฟล์ .jpg, .png, เท่านั้น<span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <select class="select2" required>
                                <option value="">คำนำหน้า</option>
                                <option value="1">เด็กชาย</option>
                                <option value="1">เด็กหญิง</option>
                                <option value="1">นาย</option>
                                <option value="2">นาง</option>
                                <option value="3">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" placeholder="ชื่อ" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" placeholder="นามสกุล" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" placeholder="ชื่อเล่น" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" placeholder="อายุ" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" placeholder="ส่วนสูง" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input required type="text" placeholder="เบอร์โทร" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <select class="select2"required >
                                <option value="">โรงเรียน</option>
                                <option value="1">หนองฉางวิทยา</option>
                                <option value="2">ธรรมานุวัตร</option>
                                <option value="3">วัดหนองขุนชาติ</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <input id="address" type="text" class="form-control search_addr" style="height: auto; min-height: 45px; padding: 1.05rem 1.5rem;" placeholder="จุดรับ-ส่ง">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-12 form-group">
                            <input id="lat" value="" type="number" step="0.000001" type="text" placeholder="ละติจูด" class="form-control search_latitude">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-12 form-group">
                            <input id="lon" value="" type="number" step="0.000001" type="text" placeholder="ลองติจูด" class="form-control search_longitude">
                        </div>
                        <div class="col-12 map" id="geomap" style="width:100%; height:25em;"></div>
                    </div>
                </div>

                <div class="col-12 form-group mg-t-8 text-right">
                    <input type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="ยืนยัน">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Parent Table Area End Here -->

<!-- Accept Modal -->
<div class="wrap-modal">
    <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog3 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header _success">
                </div>
                <div class="modal-body my-4 text-center">
                    <b>ยืนยันการลบผู้ใช้งานใช่หรือไม่</b>
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

    {{-- get lat, long and address openlayers (Free) --}}
    {{-- <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
    <script>
    var map = new ol.Map({
        layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
        ],
        target: 'map',
        view: new ol.View({
        center: [99.522879, 15.090422],
        zoom: 5
        })
    });
    

    function CenterMap(long, lat) {
        // console.log("Long: " + long + " Lat: " + lat);
        map.getView().setCenter(ol.proj.transform([long, lat], 'EPSG:4326', 'EPSG:3857'));
        map.getView().setZoom(10);
    }
    function simpleReverseGeocoding(lon, lat) {
        fetch('https://nominatim.openstreetmap.org/reverse?format=json&lon=' + lon + '&lat=' + lat).then(function(response) {
        return response.json();
        }).then(function(json) {
        document.getElementById('address').innerHTML = json.display_name;
        })
    }
    map.on('click', function(e) {
        var coordinate = ol.proj.toLonLat(e.coordinate).map(function(val) {
            return val.toFixed(6);
        });
        var lon = document.getElementById('lon').value = coordinate[0];
        var lat = document.getElementById('lat').value = coordinate[1];
        simpleReverseGeocoding(lon, lat);
        var layer = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: [
                new ol.Feature({
                    geometry: new ol.geom.Point(ol.proj.fromLonLat([lon, lat]))
                })
            ]
        })
    });

    map.addLayer(layer);
    });
    </script>
    <script src="https://www.google-analytics.com/urchin.js" type="text/javascript"> </script>

    <script>
    // ajax and initial center of map
    $(document).ready(function(){

        CenterMap(99.522879, 15.090422);

        $("#addUserForm").submit(function(event){
            submitForm();
            return false;
        });
    }); --}}

    {{-- google maps (Free Trail) --}}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBR5ep3J8E9BF3ZLanAvD_mYdSWbbrSPY"></script>
    <script>
        var geocoder;
        var map;
        var marker;
        
        /*
            * Google Map with marker
            */
        function initialize() {
            var initialLat = $('.search_latitude').val();
            var initialLong = $('.search_longitude').val();
            initialLat = initialLat?initialLat:15.082973757663751;
            initialLong = initialLong?initialLong:99.51978236690366;
        
            var latlng = new google.maps.LatLng(initialLat, initialLong);
            var options = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        
            map = new google.maps.Map(document.getElementById("geomap"), options);
        
            geocoder = new google.maps.Geocoder();
        
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                position: latlng
            });
        
            google.maps.event.addListener(marker, "dragend", function () {
                var point = marker.getPosition();
                map.panTo(point);
                geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        marker.setPosition(results[0].geometry.location);
                        $('.search_addr').val(results[0].formatted_address);
                        $('.search_latitude').val(marker.getPosition().lat());
                        $('.search_longitude').val(marker.getPosition().lng());
                    }
                });
            });
        
        }
        
        $(document).ready(function () {
            //load google map
            initialize();
            
            /*
                * autocomplete location search
                */
            var PostCodeid = '#search_location';
            $(function () {
                $(PostCodeid).autocomplete({
                    source: function (request, response) {
                        geocoder.geocode({
                            'address': request.term
                        }, function (results, status) {
                            response($.map(results, function (item) {
                                return {
                                    label: item.formatted_address,
                                    value: item.formatted_address,
                                    lat: item.geometry.location.lat(),
                                    lon: item.geometry.location.lng()
                                };
                            }));
                        });
                    },
                    select: function (event, ui) {
                        $('.search_addr').val(ui.item.value);
                        $('.search_latitude').val(ui.item.lat);
                        $('.search_longitude').val(ui.item.lon);
                        var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
                        marker.setPosition(latlng);
                        initialize();
                    }
                });
            });
            
            /*
                * Point location on google map
                */
            $('.get_map').click(function (e) {
                var address = $(PostCodeid).val();
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        marker.setPosition(results[0].geometry.location);
                        $('.search_addr').val(results[0].formatted_address);
                        $('.search_latitude').val(marker.getPosition().lat());
                        $('.search_longitude').val(marker.getPosition().lng());
                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });
                e.preventDefault();
            });
        
            //Add listener to marker for reverse geocoding
            google.maps.event.addListener(marker, 'drag', function () {
                geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('.search_addr').val(results[0].formatted_address);
                            $('.search_latitude').val(marker.getPosition().lat());
                            $('.search_longitude').val(marker.getPosition().lng());
                        }
                    }
                });
            });
        });
    </script>
    
    <script>
        function submitForm(){
            $.ajax({
                type: "POST",
                url: "https://localhost:8000/addUser",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache:false,
                data: $('form#addUserForm').serialize(),
                success: function(result){

                    // เพิ่มบัญชีผู้ใช้สำเร็จ
                    if(result.status == 'success') {
                        $(".wrap-modal > #successModal").modal('show');
                    }

                    // เบอร์โทรซ้ำ
                    if (result.status == 'same_tel') {
                        $(".wrap-modal > #telModal").modal('show');
                    }

                    // อีเมลซ้ำ
                    if (result.status == 'same_email') {
                        $(".wrap-modal > #emailModal").modal('show');
                    }

                    // ชื่อบัญชีผู้ใช้ซ้ำ
                    if (result.status == 'same_username') {
                        $(".wrap-modal > #usernameModal").modal('show');
                    }

                },
                error: function(result){
                    $(".wrap-modal > #systemError").modal('show');
                }
            });
        }
    </script>
@endsection