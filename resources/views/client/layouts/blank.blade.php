<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{config('sys.app_short_name')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="{{config('sys.app_full_name')}}"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="template/metronic/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="template/metronic/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="template/metronic/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
    <link href="template/metronic/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login" >
<!-- BEGIN LOGO -->
<div class="logo">
    <h1 style="color: white;">{{config('sys.app_short_name')}}</h1>
</div>

<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    @yield('content')
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    {{date('Y')}} &copy; {{config('sys.app_short_name')}} - {{config('sys.app_full_name')}}
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="template/metronic/assets/global/plugins/respond.min.js"></script>
<script src="template/metronic/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="template/metronic/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="template/metronic/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="template/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="template/metronic/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="template/metronic/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="template/metronic/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="template/metronic/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="template/metronic/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="template/metronic/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="template/metronic/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="template/metronic/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="template/metronic/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="template/metronic/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
        // init background slide images
        $.backstretch([
                "template/metronic/assets/admin/pages/media/bg/1.jpg",
                // "template/metronic/assets/admin/pages/media/bg/2.jpg",
                // "template/metronic/assets/admin/pages/media/bg/3.jpg",
                // "template/metronic/assets/admin/pages/media/bg/4.jpg"
            ], {
                fade: 1000,
                duration: 8000
            }
        );
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>