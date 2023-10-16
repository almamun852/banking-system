 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="https://github.com/almamun852">
    <meta name="keywords" content="https://github.com/almamun852">
    <meta name="author" content="https://github.com/almamun852">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{$companyInfo->avatar??null}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{$companyInfo->avatar??null}}">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet"> -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/vendors/css/vendors.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/vendors/css/charts/apexcharts.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/bootstrap-extended.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/colors.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/components.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/themes/dark-layout.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/themes/bordered-layout.css">
 <!--    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/themes/semi-dark-layout.css"> -->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/pages/dashboard-ecommerce.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/plugins/charts/chart-apex.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Custom CSS-->
   @stack('css')
