<!DOCTYPE html>
    <html lang="">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Basic SEO -->
            <meta name="description" content="Comfortable with the bare by school bus tracking">
            <meta name="robots" content="Bear Bus, BEAR BUS, School bus tracking">
            <meta name="googlebot" content="Bear Bus, BEAR BUS, School bus tracking">

            <title> @yield('title') - Bear Bus </title>
            
            <!-- Manifest -->
            <meta name="theme-color" content="#f1f1f1">
            <link rel="icon" href="images/bearbus.png">
            <link rel="manifest" href="../../../manifest.json">

            <!-- Bootstrap -->
            <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

            <!-- StyleSheet -->
            <link rel="stylesheet" href="plugins/datepicker/bootstrap-datepicker.min.css">
            <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
            <link rel="stylesheet" href="plugins/wow/animate.css">

            <!-- // TODO: Must to do everytime when you want to update stylesheet on server -->
            <link rel="stylesheet" href="css/style.css?v=1.0.0.0" >

            <!-- Javascript -->
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="plugins/bootstrap/popper.min.js"></script>
            <script src="plugins/bootstrap/bootstrap.min.js"></script>
            <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
            <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
            <script src="plugins/wow/wow.min.js"></script>
            <script src="plugins/highcharts/highcharts.js"></script>

            <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
            <script>
                var OneSignal = window.OneSignal || [];
                OneSignal.push(function () {
                    OneSignal.init({
                        appId: "74f3cba2-78c1-4a35-b99f-305a6e8137b5",
                        safari_web_id: "web.onesignal.auto.579431ec-451c-467f-a977-87d9f3b6152b",
                        autoRegister: true
                    });
                });
            </script>

            
            <script src="js/main.js"></script>

        </head>
        <body>

        <header class="header">
            <div class="container-fluid" style="background: red;">
                <div class="row menu-desktop">
                    <div class="col-12">
                        <h1>I'm in Header.</h1>
                    </div>
                </div>
                {{-- <div class="row menu-mobile">
                    <div class="col-12">
                        <h1>I'm in Header.</h1>
                    </div>
                </div> --}}
            </div>
        </header>

        @yield('content')

        <footer class="footer">
            <div class="container-fluid" style="background: yellow;">
                <div class="row">
                    <div class="col-12">
                        <h1>I'm in Footer</h1>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
