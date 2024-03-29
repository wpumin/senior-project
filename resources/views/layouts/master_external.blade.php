<!DOCTYPE html>
    <html lang="th">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta property="og:title" content="Comfortable with the bare by school bus tracking" />
            <meta property="og:type" content="school bus tracking" />
            <meta property="og:url" content="https:/bear-bus.com" />
            <meta property="og:image" content="https://bear-bus.com/images/bearbus.png" />

            <!-- Basic SEO -->
            <meta name="description" content="Comfortable with the bare by school bus tracking">
            <meta name="robots" content="Bear Bus, BEAR BUS, School bus tracking">
            <meta name="googlebot" content="Bear Bus, BEAR BUS, School bus tracking">

            <title> @yield('title') - Bear Bus </title>

            <!-- Manifest -->
            <meta name="theme-color" content="#f1f1f1">
            <link rel="icon" href="{{ URL::asset('images/bearbus.png') }}">
            <link rel="manifest" href="/manifest.json">
            <link rel="apple-touch-icon" href="{{ URL::asset('images/bearbus.png') }}">
            <meta rel="apple-mobile-web-app-status-bar" content="#aa7700">

            <!-- Bootstrap -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/bootstrap_external.min.css') }}">

            <!-- // ! StyleSheet -->
            <!-- WOW -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/wow/animate.css') }}">
            <!-- // TODO: Must to do everytime when you want to update stylesheet on server -->
            <link rel="stylesheet" href="{{ URL::asset('css/external/style.css?v=1.0.0.3') }}" >

            <!-- // ! Javascript -->
            <script src="{{ URL::asset('js/external/jquery-3.4.1.min.js') }}"></script>
            <script src="{{ URL::asset('plugins/bootstrap/popper_external.min.js') }}"></script>
            <script src="{{ URL::asset('plugins/bootstrap/bootstrap_external.min.js') }}"></script>
            <!-- WOW -->
            <script src="{{ URL::asset('plugins/wow/wow.min.js') }}"></script>
            <script src="{{ URL::asset('js/external/main.js') }}"></script>

            <script type="text/javascript">
                // Initialize the service worker
                if ('serviceWorker' in navigator) {
                    navigator.serviceWorker.register('/swe.js', {
                        scope: '.' 
                    }).then(function (registration) {
                        // Registration was successful
                        // console.log('Bear Bus: ServiceWorker registration successful with scope: ', registration.scope);
                    }, function (err) {
                        // registration failed :(
                        // console.log('Bear Bus: ServiceWorker registration failed: ', err);
                    });
                }
            </script>

        </head>
        <body>

        @yield('content')

    </body>
</html>
