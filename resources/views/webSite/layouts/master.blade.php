<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Schalade Hotels</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @include('webSite.layouts.header-links')
</head>

<body id="app-container">
    <div class="page-loader"></div>

    <div class="wrapper">


     <!--*******************
        header start
    ********************-->
    @include('webSite.layouts.header' )
    <!--*******************
        header end
    ********************-->

    <!--*******************
        main start
    ********************-->
    @yield('content')

    <!--*******************
        main end
    ********************-->

    <!--*******************
    footer script start
    ********************-->
    @include('webSite.layouts.subscribe')
    <!--*******************
        footer script end
    ********************-->


    <!--*******************
        footer script start
    ********************-->
    @include('webSite.layouts.footer')
    <!--*******************
        footer script end
    ********************-->
    </div>
    @include('webSite.layouts.footer-scripts')
</body>

</html>
