<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('admin/images/invoice.png') }}" type="image" />

    <title> ahssan app dial facturation </title>

    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Datatables -->

    <link href={{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet">

    <script>
        function generatePDF() {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById('invoice');
            // Choose the element and save the PDF for our user.
            html2pdf().from(element).save();
        }
    </script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        
					@if(Auth::user()->is_admin==1)
                        <a href={{url('/dashboard');}} class="site_title"><i class="fa fa-user"></i> <span>FACTURIMI 
                                </span></a>
                    @endif
					@if(Auth::user()->is_admin==0)
                        <a href={{url('/dashboardClient');}} class="site_title"><i class="fa fa-user"></i> <span>FACTURIMI 
                                </span></a>
                    @endif
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('admin\images\icon-login-3.jpg') }}" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenue,</span>
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />