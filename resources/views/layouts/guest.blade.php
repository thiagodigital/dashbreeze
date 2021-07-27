<!DOCTYPE html>
<html
    class="loading semi-dark-layout"
    data-layout="semi-dark-layout"
    data-textdirection="ltr"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/semi-dark-layout.css') }}">
        {{--
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
            --}}
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/page-auth.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> --}}
        <!-- END: Custom CSS-->
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    </head>
    <body
        class="
            vertical-layout vertical-menu-modern
            blank-page
            navbar-floating
            footer-static
            antialiased
        "
        data-open="click"
        data-menu="vertical-menu-modern"
        data-col="blank-page"
    >
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row"></div>
                <div class="content-body">
                    <div class="auth-wrapper auth-v2">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('app-assets/js/vendors/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    </body>
</html>
