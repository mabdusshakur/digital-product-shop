<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{Storage::url('website/favicon.png')}}">
    <x-meta-component title="Digital Product Shop: Buy Any Digital Products" description="Digital Product Shop - Buy any digital products, subscriptions for OTT platforms, game currency, and more." keywords="Digital Product Shop, Subscriptions, Game Currency, VPN, Ecommerce" author="Digital Product Shop"/>
    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/swiper10-bundle.min.css') }}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/bootstrap-5.3.2.min.css') }}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/nouislider.min.css') }}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/aos-3.0.0.css') }}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/style.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
</head>

<body>


    <!--------------- header-section --------------->
    @livewire('user.header-component')
    <!--------------- header-section-end --------------->

    {{$slot}}

    <!--------------- footer-section--------------->
    @livewire('user.footer-component')
    <!--------------- footer-section-end--------------->





    <!--------------- jQuery ---------------->
    <script src="{{ asset('resources/user/assets/js/jquery_3.7.1.min.js') }}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{ asset('resources/user/assets/js/bootstrap_5.3.2.bundle.min.js') }}"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="{{ asset('resources/user/assets/js/nouislider.min.js') }}"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="{{ asset('resources/user/assets/js/aos-3.0.0.js') }}"></script>

    <!--------------- swiper-js ---------------->
    <script src="{{ asset('resources/user/assets/js/swiper10-bundle.min.js') }}"></script>

    <!--------------- additional-js ---------------->
    <script src="{{ asset('resources/user/assets/js/shopus.js') }}"></script>
    @livewireScripts

</body>

</html>