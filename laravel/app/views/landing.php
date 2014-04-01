<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AppBox Media">
    <meta name="author" content="AppBox Media">
    <title>AppBox Media</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/wide.css" id="layout" rel="stylesheet" />
    <link href="assets/css/colors/blue.css" id="colors" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!--Components-->
    <link href="assets/css/prettyPhoto.css" id="prettyphoto-css" rel="stylesheet" />
    <link href="assets/js/switcher/switcher.css" rel="stylesheet" />

    <!-- Awesome fonts -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 9]>
    <link href="assets/css/ie.css" rel="stylesheet">
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <script src="js/jquery-1.8.2.min.js"></script>

    <style>
        .arrow-down {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 20px solid #f00;
        }
    </style>
</head>

<body>
<!-- #main_container -->
<div class="container" id="main_container">

<!-- #call-to-action -->
<section id="call-to-action">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <img src="/images/logo.png"/>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <h1>Invest in the next <span>big mobile company!</span></h1>
            </div>
        </div>
    </div>
</section><!-- /#call-to-action -->
<!-- #call-to-action-form -->
<section id="call-to-action-form">
    <div class="container">
        <div class="row clearfix">
            <!-- .video -->
            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 video">
                <iframe src="http://player.vimeo.com/video/80255970?title=0&amp;portrait=0&amp;byline=0&amp;badge=0" width="500" height="281" allowfullscreen></iframe>
            </div><!-- /.video -->
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                <!-- .form-subscribe -->

                <div class="form-subscribe">
                    <h1>Lets talk! </h1>
                    <?php /*
                    <h1>Find out more<span style="  background: url('/images/arrow.png') no-repeat scroll 0 0 rgba(0, 0, 0, 0);
                        display: inline-block;
                        height: 196px;
                        left: 168px;
                        position: absolute;
                        top: -132px;
                        width: 169px;
                        text-indent: -9999px;
                        z-index: 999;">aa</span> */ ?> </h1>
                    <p></p>
                    <div id="message"></div>
                    <form class="form-horizontal" id="signup" role="form">

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="div-center col-sm-12">
                                <button type="submit" id="SendButton" name="submit" class="btn btn-custom">Send me more information <i class="fa fa-check"></i></button>
                            </div>
                        </div>
                    </form>

                </div><!-- /.form-subscribe -->
            </div>
        </div>
    </div>
</section><!-- /#call-to-action-form -->

<!-- #features -->
<section id="features">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <!-- .panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-check"></i> Investment Opportunity</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>35% Forecast CAGR</li>
                            <li>30% of Investment paid back in first year</li>
                            <li>App Sector grew 115% in 2013</li>
                            <li>Exponential growth opportunities in India, China and Africa</li>
                        </ul>
                    </div>
                </div><!-- /.panel -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <!-- .panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-check"></i> Business Overview</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Generous tax breaks; EIS, SEIS and Capital Gains Tax relief</li>
                            <li>HMRC Approved</li>
                            <li>Risk Protection through SEIS and EIS</li>
                            <li>Defined exit strategies</li>
                        </ul>
                    </div>
                </div><!-- /.panel -->
            </div>
        </div>
    </div>
</section><!-- /#features -->

<section id="faqs-screenshots">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 screenshots">
                <h2>About App Box Media</h2>
                <p>AppBox Media PLC is a mobile application and video game software development company for Apple iOS, Google Android, Xbox and Orbis operating systems. The companies upcoming release titles will be available for instant download on smart phone, tablet, SmartTV, PlayStation 4, Xbox One and Google Glass devices.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="chart1">
                <!-- .faq-cat-tabs -->
                <ul class="nav nav-tabs faq-cat-tabs">
                    <li class="active"><a href="#faq-cat-1" data-toggle="tab"><i class="fa  fa-check-circle"></i> Room for Growth</a></li>
                    <li><a href="#faq-cat-2" data-toggle="tab"><i class="fa fa-question-circle"></i> iOS and Android Activations by Country</a></li>
                </ul><!-- /.faq-cat-tabs -->

                <!-- .faq-cat-content -->
                <div class="tab-content faq-cat-content">
                    <!-- #faq-cat-1 -->
                    <div class="tab-pane active in fade" id="faq-cat-1">
                        <div class="panel-group" id="accordion-cat-1">
                            <div id="chart1" style="width:100%;height:340px;" class='with-3d-shadow with-transitions box'>
                                <svg></svg>
                            </div>
                        </div>
                    </div><!-- /#faq-cat-1 -->
                    <!-- #faq-cat-2 -->
                    <div class="tab-pane fade" id="faq-cat-2">
                        <div class="panel-group" id="accordion-cat-2">
                            <div id="chart2" style="width:100%;height:340px;" class='with-3d-shadow with-transitions box'>
                                <svg></svg>
                            </div>
                        </div>
                    </div><!-- /#faq-cat-2 -->
                </div><!-- /.faq-cat-content -->
            </div>
        </div>
    </div>
</section><!-- /#faqs-screenshots -->


<!-- INSERT THIS SCRIPT BELOW THE THE GRAPHS -->
<script>
    // inView Code
    $(document).ready(function() {

        $('#chart1').one('inview', function (event, visible) {
            if (visible) {
                showGraph1();
                showGraph2();
            }
        });

        $("#faq-cat-1").bind('click', function(){
            showGraph1();
        });

        $("#faq-cat-2").bind('click', function(){
            showGraph2();
        });

    });

    // Function for first graph
    function showGraph1(){
        nv.addGraph(function() {
            var chart1 = nv.models.multiBarChart().margin({top: 0, right: 10, bottom: 40, left: 90});
            chart1.yAxis.tickFormat(d3.format(',1f'));
            d3.select('#chart1 svg')
                .datum(
                    [{
                        values: [{x:"USA",y:240000000},{x:"China",y:240000000},{x:"Malaysia",y:20000000},{x:"Canada",y:35000000},{x:"India",y:35000000}],
                        key: "Active Devices",
                        color: "#46ADDA"
                    }, {
                        values: [{x:"USA",y:300000000},{x:"China",y:1360000000},{x:"Malaysia",y:40000000},{x:"Canada",y:70000000},{x:"India",y:1260000000}],
                        key: "Population",
                        color: "#E54521"
                    }])
                .transition()
                .duration(1500)
                .delay(100)
                .call(chart1);

            //nv.utils.windowResize(chart1.update);

            return chart1;
        });
    }
    // Function for second graph
    function showGraph2(){
        historicalBarChart = [{
            key: "Active iOS & Android Devices (millions)",
            values: [
                {"label" : "Spain","value" : 14,"color" : "#19496E" },
                {"label" : "Brazil","value" : 14,"color" : "#19496E"},
                {"label" : "Canada","value" : 19,"color" : "#19496E"},
                {"label" : "France","value" : 19,"color" : "#19496E"},
                {"label" : "Germany","value" : 22,"color" : "#19496E"},
                {"label" : "S.Korea","value" : 27,"color" : "#19496E"},
                {"label" : "Japan","value" : 28,"color" : "#19496E"},
                {"label" : "UK","value" : 35,"color" : "#19496E"},
                {"label" : "China","value" : 167,"color" : "#19496E"},
                {"label" : "US","value" : 181,"color" : "#19496E"},
            ]
        }];

        var chart2 = nv.addGraph(function() {

            var width = 600, height = 350;

            var chart2 = nv.models.discreteBarChart()
                .margin({top: 20, right: 10, bottom: 40, left: 50})
                .x(function(d) { return d.label })
                .y(function(d) { return d.value })
                .showValues(true)
                .tooltips(true)
                .width(width)
                .height(height);

            d3.select('#chart2 svg')
                .datum(historicalBarChart)
                .transition()
                .duration(1500)
                .call(chart2);

            nv.utils.windowResize(chart2.update);

            return chart2;
        });

//alert('call');
        //nv.utils.windowResize(chart2.update);

    }
</script>
<!-- END OF OPPORTUNITIES -->


<!-- #toTop -->
<div id="toTop">
    <i class="fa fa-angle-up"></i>
</div><!-- /#toTop -->
</div><!-- /#main_container -->

<!-- JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Non-Bootstrap JS -->
<script src="assets/js/fluidvids.js"></script>
<script src="assets/js/jquery.prettyPhoto.min.js"></script>
<script src="assets/js/switcher/switcher.js"></script>
<script src="php/mcapi-subscribe/js/mailing-list.js"></script>

<!-- Start Charts head section -->
<link href="/css/d3.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
<script type="text/javascript" src="/js/nv.js"></script>
<script type="text/javascript" src="/js/inview.js"></script>

</body>
</html>
