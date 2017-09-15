<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Rf4Y9AEIA1YH4q0rJGUZsKZXoVPH3i0_KiZm-7VzwZA" />
    <meta name="description" content="Đặt mua vé máy bay giá rẻ trực tuyến Clicktravel Cam kết giá vé ... Trực tiếp lên website, nhanh nhất - tiện nhất; Ve may bay Clicktravel - Hinh thuc mua ve qua chat">
<meta name="keywords" content=" Đặt mua vé máy bay, giá rẻ, trực tuyến đơn giản, an toàn, tiết kiệm, Khuyến mại, ưu đãi lớn, Dịch vụ tin cậy, hỗ trợ 24/7.">

    <link rel="icon" 
    type="image/png" 
    href="/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clicktravel.vn | Đại lý vé máy bay nội địa quốc tế</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datedropper.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="{{ asset('css/easy-autocomplete.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/easy-autocomplete.themes.css') }}" rel="stylesheet"> -->

    <script src="{{ asset('js/datedropper.min.js')}}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/vi.js"></script>
    <!-- <script src="{{ asset('js/jquery.easy-autocomplete.js')}}"></script> -->
</head>
<body>
    <div id="app">
        @component('component.header')
        @endcomponent
        @yield('content')
    </div>
@component('modal.modal_login')
@endcomponent
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
