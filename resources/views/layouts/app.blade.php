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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title', 'Clicktravel - Đăng ký vé máy bay nội địa quốc tế giá rẻ')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/vi.js"></script> -->

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.0/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.0/slick.css"/>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.2/datepicker.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.3/datepicker.css"> -->
   <!--  <script type="text/javascript">
        var IBEBasePath = ("https:" == document.location.protocol ? "https://" : "http://") + "ibev2.maybay.net";
        var IBEConfigs = {
            languageCode: 'vi-VN',
            colorScheme: 'default',
            productKey: 'anhjyzmiuwvtjlr',
            searchForm: {
                showHeader: true
            }
        };
        (function () {
            var ibe = document.createElement('script');
            ibe.type = 'text/javascript';
            ibe.async = true;
            ibe.src = IBEBasePath + '/embed.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ibe, s);
        })();
    </script> -->
    <script>
  // function resizeIframe(obj) {
  //   console.log(obj.contentWindow);
  //   obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  // }
</script>

</head>
<body>
<!--  <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",71015]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script> -->
    <div id="app">
        @component('component.header')
        @endcomponent
        @yield('content')
    </div>
    @component('modal.modal_login')
    @endcomponent
    <!-- Scripts -->
</body>
</html>
