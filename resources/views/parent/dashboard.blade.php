@extends('layouts.master_menu_bottom')

@section('title','แดชบอร์ด')

@section('content')


<?php

function convertStringDay($input){

    if($input == "Monday"){
        echo "วันจันทร์ที่";
    }
    if($input == "Tuesday"){
        echo "วันอังคารที่";
    }
    if($input == "Wednesday"){
        echo "วันพุธที่";
    }
    if($input == "Thursday"){
        echo "วันพฤสหัสที่";
    }
    if($input == "Friday"){
        echo "วันศุกร์ที่";
    }
    if($input == "Saturday"){
        echo "วันเสาร์ที่";
    }
    if($input == "Sunday"){
        echo "วันอาทิตย์ที่";
    }

}

function convertStringDes($input){

    echo $input;

    if(strcmp($input,"clear sky") == 0 ){
        echo "ฟ้าโปร่ง";
    }
    if(strcmp($input,"few clouds") == 0 ){
        echo "มีเมฆเล็กน้อย";
    }
    if(strcmp($input,"scattered clouds") == 0 ){
        echo "เมฆกระจายตัว";
    }
    if(strcmp($input,"broken clouds") == 0 ){
        echo "เมฆกระจายตัว";
    }
    if(strcmp($input,"shower rain") == 0  or strcmp($input,"rain") == 0 ){
        echo "ฝนตก";
    }
    if(strcmp($input,"thunderstorm") == 0 ){
        echo "ฝนฟ้าคะนอง";
    }
    if(strcmp($input,"snow") == 0 ){
        echo "อากาศหนาว";
    }
    if(strcmp($input,"mist") == 0 ){
        echo "ฝุ่นหนา";
    }

}

?>

<div class="heading text-left">
    <h3>ติดตามรถรับส่งนักเรียน</h3>
</div>
<div class="card ui-tab-card">
    <div class="card-body" style="padding: 15px;">
        <div id="map" style="border-radius: 5px 5px 0 0;"></div>
        <div id="result" class="custom-scrollbar" style="border-radius: 0 0 8px 8px;"></div>
    </div>
</div>

<div class="heading text-left">
    <h3>กราฟเฉลี่ยเวลาขึ้นลงรถ</h3>
</div>

<div class="card ui-tab-card">
    <div class="card-body" style="padding: 15px;">
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
</div>


<div class="heading text-left">
    <h3>พยากรณ์สภาพอากาศ</h3>
</div>

<div class="owl-carousel weather-carousel owl-theme">
    <div class="item text-center">
        <h4> วันนี้ </h4>
        <div class="thumbnail-item__img">
            <img src="" alt="" id="weather-forecast1" class="icon-weather">
        </div>
        <div class="thumbnail-item__detail text-center">
            <div class="detail">
                <p id="weather-des1" class="description-weather"></p>
                <p id="weather-temp-max-min1"></p>
            </div>
        </div>
    </div>
    <div class="item text-center">
        <h4> <?php convertStringDay(date("l", strtotime("+1 days"))); echo " " . date("d", strtotime("+1 days")) ?> </h4>
        <div class="thumbnail-item__img">
            <img src="" alt="" id="weather-forecast2" class="icon-weather">
        </div>
        <div class="thumbnail-item__detail text-center">
            <div class="detail">
                <p id="weather-des2" class="description-weather"></p>
                <p id="weather-temp-max-min2"></p>
            </div>
        </div>
    </div>
    <div class="item text-center">
        <h4> <?php convertStringDay(date("l", strtotime("+2 days"))); echo " " . date("d", strtotime("+2 days")) ?> </h4>
        <div class="thumbnail-item__img">
            <img src="" alt="" id="weather-forecast3" class="icon-weather">
        </div>
        <div class="thumbnail-item__detail text-center">
            <div class="detail">
                <p id="weather-des3" class="description-weather"></p>
                <p id="weather-temp-max-min3"></p>
            </div>
        </div>
    </div>
    <div class="item text-center">
        <h4> <?php convertStringDay(date("l", strtotime("+3 days"))); echo " " . date("d", strtotime("+3 days")) ?> </h4>
        <div class="thumbnail-item__img">
            <img src="" alt="" id="weather-forecast4" class="icon-weather">
        </div>
        <div class="thumbnail-item__detail text-center">
            <div class="detail">
                <p id="weather-des4" class="description-weather"></p>
                <p id="weather-temp-max-min4"></p>
            </div>
        </div>
    </div>
    <div class="item text-center">
        <h4> <?php convertStringDay(date("l", strtotime("+4 days"))); echo " " . date("d", strtotime("+4 days")) ?> </h4>
        <div class="thumbnail-item__img">
            <img src="" alt="" id="weather-forecast5" class="icon-weather">
        </div>
        <div class="thumbnail-item__detail text-center">
            <div class="detail">
                <p id="weather-des5" class="description-weather"></p>
                <p id="weather-temp-max-min5"></p>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')


<script src="https://api.longdo.com/map/?key=d9d5dac05ff94fa24f89363eb7fbe538"></script>

<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                '01/10/2562', 
                '02/10/2562', 
                '03/10/2562', 
                '04/10/2562', 
                '05/10/2562', 
                '06/10/2562',
                '07/10/2562', 
                '08/10/2562', 
                '09/10/2562', 
                '10/10/2562', 
                '11/10/2562', 
                '12/10/2562',
                '13/10/2562',
                '14/10/2562'
            ]
        },
        yAxis: {
            title: {
                text: 'เวลา'
            },
            labels: {
                formatter: function () {
                    return this.value + ' น.';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' น.',
            valueDecimals: 2,
            animation: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    // lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [
            {
                areaspline: {
                    fillOpacity: 1
                },
                color: "#f6cb43",
                name: 'เย็น',
                marker: {
                    symbol: 'circle'
                },
                data: [16.23, 16.12, 16.25, 16.34, 16.32, 16.26, 16.07, 16.27, 16.12, 16.11, 16.28, 16.12, 16.45 ,16.00]
            },
            {
                areaspline: {
                    fillOpacity: 1
                },
                color: "#fb7a2e",
                name: 'เช้า',
                marker: {
                    symbol: 'cicle'
                },
                data: [7.27, 7.29, 7.21, 7.20, 7.12, 7.34, 7.36, 7.45, 7.23, 7.13, 7.23, 7.34, 7.54, 7.52]

            }
        ]
    });
</script>

<script>
    

    setInterval(function(){

        $.ajax({
            url:'https://www.bear-bus.com/firebase/getlocation',
            type:'GET',
            dataType:'json',
            success:function(response){

            if(response.status == 'success'){

                init();

                // console.log(response['data']['lat']);
                var marker = new longdo.Marker({ lon: response['data']['long'], lat: response['data']['lat'] },
                {
                    title: 'Bear-Bus',
                    icon: {
                        url: 'https://bear-bus.com/images/internal/marker3.png'
                    },
                    detail: 'ตำแหน่งปัจจุบัน',
                    // visibleRange: { min: 7, max: 9 },
                    draggable: false,
                    weight: longdo.OverlayWeight.Top,
                });

                map.Overlays.add(marker);

            }
            },error:function(err){

            }
        })


    }, 30000);

    // long do map
    function init() {


        map = new longdo.Map({
            placeholder: document.getElementById('map')
        });

        map.location({ lat: 15.263551, lon: 99.672852 }, true);
        map.zoomRange({ min:9, max: 16});


        map.Route.placeholder(document.getElementById('result'));
        map.Route.add(new longdo.Marker({ lat: 15.083832, lon: 99.5170665 },
            {
                title: 'จุดรับส่งที่ 1',
                detail: 'เทศบาลตำบลบ้านไร่'
            }
        ));
        // หูช้าง
        map.Route.add(new longdo.Marker({ lat: 15.147868, lon: 99.672083  },
            {
                title: 'จุดรับส่งที่ 2',
                detail: 'ตำบลหูช้าง'
            }
        ));
        // การุ้ง
        map.Route.add(new longdo.Marker({ lat: 15.175955, lon: 99.696781 },
            {
                title: 'จุดรับส่งที่ 3',
                detail: 'ตำบลเมืองโบราณการุ้ง'
            }
        ));
        // คลองโป่ง
        map.Route.add(new longdo.Marker({ lat: 15.215208, lon: 99.690788 },
            {
                title: 'จุดรับส่งที่ 4',
                detail: 'ตำบลบ้านคลองโป่ง'
            }
        ));
        // เขาตะพาบ
        map.Route.add(new longdo.Marker({ lat: 15.260942, lon: 99.680222 },
            {
                title: 'จุดรับส่งที่ 5',
                detail: 'ตำบลเขาตะพาบ'
            }
        ));
        // โรงเรียนหนองฉางวิทยา
        map.Route.add(new longdo.Marker({ lat: 15.382140, lon: 99.851870 },
            {
                title: 'จุดรับส่งที่ 6',
                detail: 'โรงเรียนหนองฉางวิทยา'
            }
        ));
        // โรงเรียนธรรมานุวัตรวิทยา
        map.Route.add(new longdo.Marker({ lat: 15.390607, lon: 99.833714 },
            {
                title: 'จุดรับส่งที่ 7',
                detail: 'โรงเรียนธรรมานุวัตรวิทยา'
            }
        ));
        // โรงเรียนวัดหนองขุนชาติ
        map.Route.add(new longdo.Marker({ lat: 15.388589, lon: 99.835618 },
            {
                title: 'จุดรับส่งที่ 8',
                detail: 'โรงเรียนวัดหนองขุนชาติ'
            }
        ));
        map.Route.search();

        $('#map').find('.ldmap_placeholder').addClass('border-customtlr5');
    }

    // Open API Weather
    // ************************************* API Weather ***************************************************************
    const apiKey = "d301010cd434715400ddfa07b232b7c7"; // User: ez-top Email:
    const cityID = "1605221"; // cityName: prachin+buri
    const urlCurrent = "https://api.openweathermap.org/data/2.5/weather?id=" + cityID + "&appid=" + apiKey;
    const urlForecast = "https://api.openweathermap.org/data/2.5/forecast?id=" + cityID + "&appid=" + apiKey;

    // ************************************* Function *******************************************************************
    httpRequestAsync(urlForecast, theResponseForecast);

    // TODO ******************************** HttpRequest ****************************************************************
    function httpRequestAsync(url, callback){
        const httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = () => {
            if(httpRequest.readyState == 4 && httpRequest.status == 200){ // 4 = OK, 200 = OK
                callback(httpRequest.responseText);
            }
        }
        httpRequest.open("GET", url, true); // true = Async
        httpRequest.send(); // send request
    }

    // TODO ******************************** Forecast *******************************************************************

    const weatherForecast1 = document.querySelector("#weather-forecast1");
    const weatherForecast2 = document.querySelector("#weather-forecast2");
    const weatherForecast3 = document.querySelector("#weather-forecast3");
    const weatherForecast4 = document.querySelector("#weather-forecast4");
    const weatherForecast5 = document.querySelector("#weather-forecast5");

    const weatherDes1 = document.querySelector("#weather-des1");
    const weatherDes2 = document.querySelector("#weather-des2");
    const weatherDes3 = document.querySelector("#weather-des3");
    const weatherDes4 = document.querySelector("#weather-des4");
    const weatherDes5 = document.querySelector("#weather-des5");

    const weatherTempMaxMin1 = document.querySelector("#weather-temp-max-min1");
    const weatherTempMaxMin2 = document.querySelector("#weather-temp-max-min2");
    const weatherTempMaxMin3 = document.querySelector("#weather-temp-max-min3");
    const weatherTempMaxMin4 = document.querySelector("#weather-temp-max-min4");
    const weatherTempMaxMin5 = document.querySelector("#weather-temp-max-min5");

    function theResponseForecast(response){
        var jsonObject = JSON.parse(response); // jsonObj -> jsObject

        // console.log(jsonObject);

        weatherForecast1.src =  "<?php echo url('images/internal/weather') ?>/" + jsonObject.list[2].weather[0].icon + ".svg";
        weatherForecast2.src =  "<?php echo url('images/internal/weather') ?>/" + jsonObject.list[10].weather[0].icon + ".svg";
        weatherForecast3.src =  "<?php echo url('images/internal/weather') ?>/" + jsonObject.list[18].weather[0].icon + ".svg";
        weatherForecast4.src =  "<?php echo url('images/internal/weather') ?>/" + jsonObject.list[26].weather[0].icon + ".svg";
        weatherForecast5.src =  "<?php echo url('images/internal/weather') ?>/" + jsonObject.list[34].weather[0].icon + ".svg";

        weatherDes1.innerHTML = "<?php convertStringDes('" + jsonObject.list[2].weather[0].description + "') ?>";
        weatherDes2.innerHTML = "<?php convertStringDes('" + jsonObject.list[10].weather[0].description + "') ?>";
        weatherDes3.innerHTML = "<?php convertStringDes('" + jsonObject.list[18].weather[0].description + "') ?>";
        weatherDes4.innerHTML = "<?php convertStringDes('" + jsonObject.list[26].weather[0].description + "') ?>"
        weatherDes5.innerHTML = "<?php convertStringDes('" + jsonObject.list[34].weather[0].description + "') ?>"

        weatherTempMaxMin1.innerHTML = (jsonObject.list[2].main.temp_min - 273 ).toFixed(1) + "&deg;C / " +  (jsonObject.list[2].main.temp_max - 273).toFixed(1) + "&deg;C";
        weatherTempMaxMin2.innerHTML = (jsonObject.list[10].main.temp_min - 273 ).toFixed(1) + "&deg;C / " +  (jsonObject.list[10].main.temp_max - 273).toFixed(1) + "&deg;C";
        weatherTempMaxMin3.innerHTML = (jsonObject.list[18].main.temp_min - 273 ).toFixed(1) + "&deg;C / " +  (jsonObject.list[18].main.temp_max - 273).toFixed(1) + "&deg;C";
        weatherTempMaxMin4.innerHTML = (jsonObject.list[26].main.temp_min - 273 ).toFixed(1) + "&deg;C / " +  (jsonObject.list[26].main.temp_max - 273).toFixed(1) + "&deg;C";
        weatherTempMaxMin5.innerHTML = (jsonObject.list[34].main.temp_min - 273 ).toFixed(1) + "&deg;C / " +  (jsonObject.list[34].main.temp_max - 273).toFixed(1) + "&deg;C";
    }

    </script>
@endsection
