<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>{{isset($title) ? $title : env('SET_AWARD_TITLE')}}</title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <!-- <link href="{{url('assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Animation Css -->
        <link href="{{url('assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{url('assets/css/themes/all-themes.css')}}" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="{{url('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
        <!-- Wait Me Css -->
        <link href="{{url('assets/plugins/waitme/waitMe.css')}}" rel="stylesheet" />
        <link href="{{url('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="{{ url('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
        <!-- Sweet alert Css-->
      <!--  <link href="{{url('assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    </head>
    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
      @include('layouts.top_nav')
      @include('layouts.side_nav')
        <section id="rightsidebar" class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
