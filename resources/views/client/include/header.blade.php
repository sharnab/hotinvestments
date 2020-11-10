<?php
$user = \Illuminate\Support\Facades\Auth::user();
?>
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> --}}
<link rel="stylesheet" href="{{ url('/') }}/assets/client/fonts/glyphicons/css/glyphicons.min.css" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{url('assets')}}/client/css/selection.css" type="text/css" /><!-- DROPDOWN style -->
<link href={{url("/assets/client/layout/css/star-rating-svg.css")}} rel="stylesheet">
<link rel="stylesheet" href="{{asset('/assets/client/css/bootstrap.min.css')}}" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('/assets/client/fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{asset('/assets/client/fonts/themify-icons/themify-icons.css')}}" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{asset('/assets/client/css/owl.carousel.css')}}" type="text/css" /><!-- Owl Carousal -->
<link rel="stylesheet" href="{{asset('/assets/client/css/price-range.css')}}" type="text/css" /><!-- Owl Carousal -->
{{-- <link rel="stylesheet" href="{{asset('/assets/client/css/lightslider.min.css')}}"> --}}

<link rel="stylesheet" href="{{asset('/assets/client/css/style.css')}}" type="text/css" /><!-- Style -->
<link rel="stylesheet" href="{{asset('/assets/client/css/responsive.css')}}" type="text/css" /><!-- Responsive -->
<link rel="stylesheet" href="{{asset('/assets/client/css/colors.css')}}" type="text/css" /><!-- color -->

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/client/js/rs-plugin/css/settings.css')}}">
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrsRbcMCwCrRURPbjGpzcF4EMjHYVVDr4&libraries=places"></script> --}}
{{-- <div class="page-header navbar navbar-fixed-top" >
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/')}}">
                <!-- <h2>{{config('sys.app_short_name')}}</h2> -->
                <img style="height: 70px; width: 80px" src="{{url('/')}}/template/metronic/assets/admin/layout4/img/logo-ams.png" alt="{{config('sys.app_short_name')}}" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <li class="separator hide"></li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

								<span class="username username-hide-on-mobile">
								{{$user->full_name}}
								</span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="{{asset($user->image)}}"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="{{route('logout')}}">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div> --}}

<Login></Login>
