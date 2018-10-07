<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
        <title>{{ config( 'app.name') }}</title>
        @include('layouts.css')
        @yield('css')
        @include('layouts.scripts')
        {{ Html::favicon( '/favicon.ico' ) }}
    </head>
    <body class="flat-black">
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            @include('layouts.header')
            @include('layouts.sidebar')
            <div id="content" class="content">
                @yield('content')
            </div>
            @include('layouts.footer')
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </body>
    @yield('scripts')

</html>
