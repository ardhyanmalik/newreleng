<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/assets/js/utility/highlight/styles/googlecode.css') }}" />

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/vendor/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/vendor/plugins/daterange/daterangepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/vendor/plugins/tagmanager/tagmanager.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/assets/skin/default_skin/css/theme.css') }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="form-input-page">

    <!-- Start: Main -->
    <div id="main">

        @include('header')
        @include('menubar')

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="#">Form Input</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="#">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">
                            <a href="#">Home</a>
                        </li>
                        <li class="crumb-trail">Form Input</li>
                    </ol>
                </div>
                <div class="topbar-right">
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel-heading">
                            <span class="panel-title">Input Your RFC</span>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @foreach($errors->all(':message') as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check pr10"></i>
                            <strong>{{ Session::get('success') }}!</strong>
                        </div>
                        @endif
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="{{URL::route('postRFC')}}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">RFC Number</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="rfcnumber" name="rfcnumber" class="form-control" placeholder="Your RFC Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">RFC Tittle</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="rfctitle" name="rfctitle" class="form-control" placeholder="Your RFC Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea1">Description</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="textArea2" name="description" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="executionstart">Execution</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="executionstart" name="executionstart" type="text" placeholder="Execution Start">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" id="executionend" name="executionend" type="text" placeholder="Execution End">
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- End: Content -->
            
        </section>
        <!-- End: Content-Wrapper -->
    </div>
    <!-- End: Main -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    
    <!-- jQuery -->
    <script type="text/javascript" src="{{URL::asset('templates/vendor/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{URL::asset('templates/assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- via local files 
    <script type="text/javascript" src="vendor/plugins/globalize/src/core.js"></script>
    <script type="text/javascript" src="vendor/plugins/moment/moment.min.js"></script> -->

    <!-- Page Plugins -->
    <script type="text/javascript" src="{{URL::asset('templates/vendor/plugins/daterange/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.j')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/vendor/plugins/jquerymask/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/vendor/plugins/tagmanager/tagmanager.js')}}"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{URL::asset('templates/assets/js/utility/utility.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('templates/assets/js/demo.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS    
            Demo.init();

            // daterange plugin options
            var rangeOptions = {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            }

            // Init datetimepicker - fields
            $('#executionstart').datetimepicker();
            $('#executionend').datetimepicker();


            // Init datetimepicker - inline + range detection
            $('#datetimepicker3').datetimepicker({
                defaultDate: "9/4/2014",
                inline: true,
            });

            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker5').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker6').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - inline + Date disabled (only time picker)
            $('#datetimepicker7').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
                inline: true
            });

            // Init colorpicker plugin
            $('#demo_apidemo').colorpicker({
                color: bgPrimary
            });
            $('.demo-auto').colorpicker();

            // Init jQuery Tags Manager 
            $(".tm-input").tagsManager({
                tagsContainer: '.tags',
                prefilled: ["Miley Cyrus", "Apple", "A Long Tag", "Na uh"],
                tagClass: 'tm-tag-info',
            });

            // Init Boostrap Multiselect
            $('#multiselect1').multiselect();
            $('#multiselect2').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect3').multiselect();
            $('#multiselect4').multiselect({
                enableFiltering: true,
            });
            $('#multiselect5').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
            });
            $('#multiselect6').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-info'
            });
            $('#multiselect7').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-success'
            });
            $('#multiselect8').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-warning'
            });

            // Init jQuery spinner init - default
            $("#spinner1").spinner();

            // Init jQuery spinner init - currency 
            $("#spinner2").spinner({
                min: 5,
                max: 2500,
                step: 25,
                start: 1000,
                //numberFormat: "C"
            });

            // Init jQuery spinner init - decimal  
            $("#spinner3").spinner({
                step: 0.01,
                numberFormat: "n"
            });

            // jQuery Time Spinner settings
            $.widget("ui.timespinner", $.ui.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },
                _parse: function(value) {
                    if (typeof value === "string") {
                        // already a timestamp
                        if (Number(value) == value) {
                            return Number(value);
                        }
                        return +Globalize.parseDate(value);
                    }
                    return value;
                },

                _format: function(value) {
                    return Globalize.format(new Date(value), "t");
                }
            });
            // Init jQuery Time Spinner
            $("#spinner4").timespinner();


            // Init jQuery masked inputs
            $('.date').mask('99/99/9999');
            $('.time').mask('99:99:99');
            $('.date_time').mask('99/99/9999 99:99:99');
            $('.zip').mask('99999-999');
            $('.phone').mask('(999) 999-9999');
            $('.phoneext').mask("(999) 999-9999 x99999");
            $(".money").mask("999,999,999.999");
            $(".product").mask("999.999.999.999");
            $(".tin").mask("99-9999999");
            $(".ssn").mask("999-99-9999");
            $(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
            $(".eyescript").mask("~9.99 ~9.99 999");
            $(".custom").mask("9.99.999.9999");

        });
    </script>
</body>

</html>
