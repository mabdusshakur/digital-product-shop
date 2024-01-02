<!doctype html>
<html lang="en">

<head>
    
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