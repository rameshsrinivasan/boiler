<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Laravel BoilerPlate</title>
        <link href="{{asset("lb-faveo/media/images/favicon.ico")}}"  rel="shortcut icon" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.css" rel="stylesheet" />
        <link href="{{asset("lb-faveo/css/load-styles.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/css.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/admin.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/setup.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/activation.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/style.css")}}" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/ggpopover.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/prism.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("lb-faveo/css/chosen.css")}}" rel="stylesheet" type="text/css" />
    </head>
    <body class="setup wp-core-ui">
        <center><a href="#">
            <img src="{{asset("lb-faveo/media/installer/faveo.png")}}" alt="Laravel" width="250px"></a></center>
    <ol class="setup-steps">
        <li class="@yield('license')">License Agreement</li>
        <li class="@yield('environment')">Environment Test</li>
        <li class="@yield('database')">Database Setup</li>
        <li class="@yield('locale')">Locale Information</li>
        <li class="@yield('ready')">Ready</li>
    </ol>
    <div class="setup-content">
        @yield('content')
    </div>
    <p style="text-align: center;"> Copyright &copy; 2017 - {{ Date("Y") }} · Sensiple Software Solution. All Rights Reserved. Powered by <a target="_blank" href="https://www.sensiple.com">Sensiple </a></p>

    <script src="{{asset("lb-faveo/js/ggpopover.js")}}" type="text/javascript"></script>

    <script type="text/javascript">
        $('[data-toggle="popover"]').ggpopover();
    </script>

    <script src="{{asset("lb-faveo/js/chosen.jquery.js")}}" type="text/javascript"></script>

    <script src="{{asset("lb-faveo/js/prism.js")}}" type="text/javascript"></script>

    <script type="text/javascript">
        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {
                allow_single_deselect: true
            },
            '.chosen-select-no-single': {
                disable_search_threshold: 10
            },
            '.chosen-select-no-results': {
                no_results_text: 'Oops, nothing found!'
            },
            '.chosen-select-width': {
                width: "95%"
            }
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    </script>

</body>
</html>