<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <title>{{ config('app.name', 'Sthung Engineering Pvt. Ltd') }}</title>
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link href="{{ asset('css/admin/dataTables.material.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/admin/material-components-web.css.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <!-- Scripts -->
    @yield('header')
     <style>
    /* Ensure layout covers the entire screen. */
    html {
      height: 100%;
    }

    /* Place drawer and content side by side. */
    .demo-body {
      display: flex;
      flex-direction: row;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      height: 100%;
      width: 100%;
      background-color: #eee;
    }

    /* Stack toolbar and main on top of each other. */
    .demo-content {
      display: inline-flex;
      flex-direction: column;
      flex-grow: 1;
      height: 100%;
      box-sizing: border-box;
    }

    /* Place drawer above toolbar shadow. */
    .mdc-permanent-drawer {
      z-index: 2;
    }

    .demo-main {
      padding-left: 16px;
    }
    </style>
  </head>
  <body class="demo-body mdc-typography">
    @include('admin.partials.nav')
    <div class="demo-content">
      <!-- TODO: #324 - Should switch to .mdc-toolbar--fixed -->
      @include('admin.partials.header')
      @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('js/admin/material-components-web.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/admin/dataTables.material.min.js') }}" charset="utf-8"></script>
    @yield('footer')
  </body>
</html>
