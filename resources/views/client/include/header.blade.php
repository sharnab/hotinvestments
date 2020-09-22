<?php
$user = \Illuminate\Support\Facades\Auth::user();
?>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" href="{{ url('/') }}/assets/client/fonts/glyphicons/css/glyphicons.min.css" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{url('assets')}}/client/css/selection.css" type="text/css" /><!-- DROPDOWN style -->
<link href={{url("/assets/admin/layout/css/star-rating-svg.css")}} rel="stylesheet">

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
<div class="account-popup-sec">
    <div class="account-popup-area">
        <div class="account-popup">
            <div class="row">
                <div class="col-md-6">
                    <div class="account-user">
                        <div class="logo">
                            <a href="#" title="" style="padding-left: 0">
                                <img src="{{url('/assets/global/img/logo.png')}}" style="width: 80%; padding-left: 0" />
                                <strong><uppercase style="font-size: 14px">Investment Properties</uppercase></strong>
                            </a>
                        </div><!-- LOGO -->
                        <form>
                            <h4>Login Form</h4>
                            <div class="field">
                                <input type="text" placeholder="Username" />
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" />
                            </div>
                            <div class="field">
                                <input type="submit" value="LOG IN" class="flat-btn" />
                            </div>
                        </form>
                        <i>OR</i>
                        <span>LOGIN WITH</span>
                        <ul class="social-btns">
                            <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-google"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-apple"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration-sec">
                        <h3>SIGNUP Form</h3>
                        <form>
                            <div class="field">
                                <input type="text" placeholder="Your Name" />
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Your Email" />
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Type Password" />
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Retype Password" />
                            </div>
                            <div class="field" style="text-align: left; margin-top: 16px">
                                <div class="col-12 pb-5">
            						<input class="checkbox-tools" type="radio" name="tools" id="tool-1" checked>
            						<label class="for-checkbox-tools" for="tool-1" style="width: 27%; margin: 0;">
            							Buying
            						</label><!--
            						--><input class="checkbox-tools" type="radio" name="tools" id="tool-2">
            						<label class="for-checkbox-tools" for="tool-2" style="width: 45%; margin: 0; padding: 10px 0 10px 0">
            							Selling / Wholeselling
            						</label><!--
            						--><input class="checkbox-tools" type="radio" name="tools" id="tool-3">
            						<label class="for-checkbox-tools" for="tool-3" style="width: 25%; margin: 0">
            							Both
            						</label>
                                </div>
                            </div>
                            <label>
                                By Registering, You are agreeing with our <a href="#" title="">Terms & Condition</a>
                            </label>
                            <input type="submit" value="REGISTER" class="flat-btn" />
                        </form>
                    </div><!-- Registration sec -->
                </div>
            </div>
            <span class="close-popup"><i class="fa fa-close"></i></span>
        </div>
    </div>
</div><!-- Account Popup Sec -->
