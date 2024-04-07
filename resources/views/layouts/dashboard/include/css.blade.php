<head>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="{{asset('admin')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    @if(app()->getLocale()=='en')
        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/app.css" />
        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/app-ltr.css" />
    @endif

    @if(app()->getLocale()=='ar')

        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/app.css" />

        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/app-rtl.css" />
        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/rtl.css" />
        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/bootstrap-rtl.min.css" />
        <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/custom.css" />


        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }

        </style>




    @endif
</head>
