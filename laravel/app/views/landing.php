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
        .video-unit {
            margin: 0 auto 0 auto;
            font-size: 18px;
            font-weight: 200;
            line-height: 30px;
            background-color: #eee;
            border-radius: 6px;
            padding: 30px;
        }
        .video-unit video {
            width: 100%;
        }

        div#up {
            width:0px;
            height:0px;
            border-left:5px solid transparent;  /* left arrow slant */
            border-right:5px solid transparent; /* right arrow slant */
            border-bottom:5px solid #2f2f2f; /* bottom, add background color here */
        }
        div#down {
            width:0px;
            height:0px;
            border-left:20px solid transparent;  /* left arrow slant */
            border-right:20px solid transparent; /* right arrow slant */
            border-top:20px solid #f00; /* top, add background color here */
        }
        div#right {
            width:0px;
            height:0px;
            border-top:60px solid transparent;  /* left arrow slant */
            border-bottom:60px solid transparent; /* right arrow slant */
            border-left:60px solid green; /* top, add background color here */
        }
        div#left {
            width:0px;
            height:0px;
            border-top:10px solid transparent;  /* left arrow slant */
            border-bottom:10px solid transparent; /* right arrow slant */
            border-right:10px solid yellow; /* top, add background color here */
        }

        /* base CSS element */
        .tip {
            background: #eee;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            width: 200px;
        }

        /* arrows - :before and :after */
        .tip:before {
            position: absolute;
            display: inline-block;
            border-top: 7px solid transparent;
            border-right: 7px solid #eee;
            border-bottom: 7px solid transparent;
            border-right-color: rgba(0, 0, 0, 0.2);
            left: -8px;
            top: 20px;
            content: '';
        }

        .tip:after {
            position: absolute;
            display: inline-block;
            border-top: 6px solid transparent;
            border-right: 6px solid #eee;
            border-bottom: 6px solid transparent;
            left: -6px;
            top: 21px;
            content: '';
        }

        #fujitsu {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll 0 -140px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #fujitsu:hover {
            background-position: 0 0;
        }
        #gumtree {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll -140px -127px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #gumtree:hover {
            background-position: -141px 2px;
        }
        #motorola {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll -270px -130px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #motorola:hover {
            background-position: -270px -1px;
        }
        #nestle {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll -402px -121px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #nestle:hover {
            background-position: -402px 0;
        }
        #playboy {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll 0 -405px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #playboy:hover {
            background-position: 0 -279px;
        }
        #sega {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll -138px -405px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #sega:hover {
            background-position: -140px -279px;
        }
        #toshiba {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll -289px -405px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #toshiba:hover {
            background-position: -289px -275px;
        }
        #universal {
            background: url("/images/clients/client_sprite_map.png") no-repeat scroll -422px -405px rgba(0, 0, 0, 0);
            height: 125px;
            text-indent: -99999px;
            width: 125px;
        }
        #universal:hover {
            background-position: -422px -280px;
        }
        .panel-default > .panel-heading {
            background-color: #82027E;
            transition: all 0.2s ease-in-out 0.2s;
        }

        .btn-custom.disabled:hover, .btn-custom.disabled:focus, .btn-custom.disabled:active, .btn-custom.disabled.active, .btn-custom[disabled]:hover, .btn-custom[disabled]:focus, .btn-custom[disabled]:active, .btn-custom.active[disabled], fieldset[disabled] .btn-custom:hover, fieldset[disabled] .btn-custom:focus, fieldset[disabled] .btn-custom:active, fieldset[disabled] .btn-custom.active {
            background-color: rgba(255, 255, 255, 0);
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: #52CDBF;
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
            <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 30px;">
                <img src="/images/logo.png"/>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <h1>30% of investment paid back in <span>first year.</span></h1>
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
                <img src="/images/video_overlay.png" style="width: 100%" id="video_overlay"/>
                <video id='video-player' preload='metadata' controls style="width: 100%;display: none">
                    <source src="http://m.wsj.net/video/20130303/030313appstats/030313appstats_1500k.mp4" type="video/mp4">
                </video>
                <h4 style="color:#fff;">Wall Street Journal video about fast growing mobile apps economy</h4>
            </div><!-- /.video -->
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">

                <?php if (Session::get('display_video') == false) { ?>
                    <!-- .form-subscribe -->
                    <div class="form-subscribe" style="background: rgba(130, 2, 126, 0.5);border:0;">
                        <div id="position:relative;" style="background: #f00;margin-bottom: -10px;">
                            <h1 style="padding:10px;font-weight: 500; font-size: 1.7em; color:#fff;background:#f00">Get your free report today</h1>
                        </div>
                        <div id="down">
                            &nbsp;
                        </div>
                        <form class="form-horizontal" id="signup" role="form" action="/landing" method="POST">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label>Title</label>
                                    <select class="form-control"  name="t">
                                        <option <?php if($t == "") { echo "SELECTED"; } ?> value="Mr">Mr</option>
                                        <option <?php if($t == "") { echo "SELECTED"; } ?> value="Dr">Dr</option>
                                        <option <?php if($t == "") { echo "SELECTED"; } ?> value="Ms">Ms</option>
                                        <option <?php if($t == "") { echo "SELECTED"; } ?> value="Mrs">Mrs</option>
                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="n" value="<?php if($n != "") { echo $n; } ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="email" name="e" value="<?php if($e != "") { echo $e; } ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" id="phone" name="p" value="<?php if($p != "") { echo $p; } ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="div-center col-sm-12">
                                    <button type="submit" id="SendButton" name="submit" class="btn btn-custom">Send me more information <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </form>

                    </div><!-- /.form-subscribe -->
                <?php } else { ?>
                <div class="form-subscribe" style="background: rgba(130, 2, 126, 0.5);border:0;">
                    <h1>We will be in touch shortly with more information</h1>
                    </div>
                <?php } ?>

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
                <h2>The Team at AppBox Media</h2>
                <p>At the heart of AppBox media is its team. We hold an ethos of being big enough to take on big projects whilst being compact enough to care about all aspects of those projects.</p>
                <p>The team at AppBox know what it is to work in major billion pound companies. Our accounts team even know how to structure such companies having worked on corporate finance at Nestle. At an academic level we know what it takes to be top achievers having a team that includes 1st class honours graduates and others who have worked on the world stage at the United Nations.</p>               <p>Our developers and project managers have designed and built applications for: Playboy, Universal Pictures, Motorola, Toshiba, SEGA, Fujitsu and Gumtree.</p>
                <p>We are proud of our individual achievements, but we shall be even prouder of our team achievements and what we intend to achieve with AppBox Media. At the core of AppBox is the knowledge that the team have achieved fantastic results in larger institutions.</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="chart1">
                <!-- .faq-cat-tabs -->
                <ul class="nav nav-tabs faq-cat-tabs">
                    <li class="active"><a href="#faq-cat-1" data-toggle="tab"><i class="fa  fa-check-circle"></i> iOS and Android Activations by Country</a></li>
                </ul><!-- /.faq-cat-tabs -->

                <!-- .faq-cat-content -->
                <div class="tab-content faq-cat-content">
                    <!-- #faq-cat-1 -->
                    <div class="tab-pane active in fade" id="faq-cat-1">
                        <div class="panel-group" id="accordion-cat-1">
                            <div id="chart2" style="width:100%;height:340px;" class='with-3d-shadow with-transitions box'>
                                <svg></svg>
                            </div>
                        </div>
                    </div><!-- /#faq-cat-1 -->

                </div><!-- /.faq-cat-content -->
            </div>
        </div>
    </div>
</section><!-- /#faqs-screenshots -->


<!-- INSERT THIS SCRIPT BELOW THE THE GRAPHS -->
<script>
    // inView Code
    $(document).ready(function() {

        <?php if (Session::get('display_video') == false) { ?>
            $("#video-player").hide();
            $("#video_overlay").show();
        <?php } else { ?>
            $("#video-player").show();
            $("#video_overlay").hide();
            var v = document.getElementsByTagName("video")[0];
            v.play();
        <?php } ?>

        $("#video_overlay").click(function(){
            <?php if (Session::get('display_video') == false) { ?>
                alert('Please fill in your details before watching video');
            <?php } else { ?>
                var v = document.getElementsByTagName("video")[0];
                v.play();
            <?php } ?>


        });

        var video = $("#video-player");
        var windowObj = $(window);

        function onResizeWindow() {
            resizeVideo(video[0]);
        }

        function onLoadMetaData(e) {
            resizeVideo(e.target);
        }

        function resizeVideo(videoObject) {
            var percentWidth = videoObject.clientWidth * 100 / videoObject.videoWidth;
            var videoHeight = videoObject.videoHeight * percentWidth / 100;
            video.height(videoHeight);
        }

        video.on("loadedmetadata", onLoadMetaData);
        windowObj.resize(onResizeWindow);

        $('#chart1').one('inview', function (event, visible) {
            if (visible) {
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
    }
</script>
<!-- END OF OPPORTUNITIES -->

<!-- #toTop -->
<div id="toTop">
    <i class="fa fa-angle-up"></i>
</div><!-- /#toTop -->
<section id="brands">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="item-customer">
                    <div id="fujitsu" style="float:left;margin:5px;"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="item-customer">
                    <div id="sega" style="float:left;margin:5px;"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="item-customer">
                    <div id="gumtree" style="float:left;margin:5px;"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="item-customer">
                    <div id="playboy" style="float:left;margin:5px;"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="item-customer">
                    <div id="toshiba" style="float:left;margin:5px;"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="item-customer">
                    <div id="universal" style="float:left;margin:5px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer>
    <div class="container">
        <!-- .items-footer -->
        <div class="row clearfix items-footer">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h3>About Us</h3>
                <p>AppBox Media PLC is a mobile application and video game software development company for Apple iOS, Google Android, Xbox and Orbis operating systems. The companies upcoming release titles will be available for instant download on smart phone, tablet, SmartTV, PlayStation 4, Xbox One and Google Glass devices.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h3>Company Details</h3>
                <h4><i class="fa fa-map-marker"></i> Address</h4>
                <p>200 Aldersgate</p>
                <p>London</p>
                <p>EC1A 4HD</p>
                <p>Company Registration: 08616729</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h3>Contact Us</h3>
                <h4><i class="fa fa-envelope"></i> Email</h4>
                <p><a href="mailto:investorrelations@appboxmedia.com">investorrelations@appboxmedia.com</a></p>
                <h4><i class="fa fa-phone"></i> Telephone Number</h4>
                <p>0203 440 4110</p>
                <p>0800 978 8018</p>
                <p></p>
            </div>
        </div><!-- /.items-footer -->
        <!-- .copyright -->
        <div class="row clearfix copyright">
            <!-- .social-icon -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 social-icon">
                <ul class="list-unstyled list-inline">
                    <li><a href="http://www.facebook.com/AppBoxMedia" class="icon-facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://www.twitter.com/AppBoxMedia" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-google-plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icon-skype"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div><!-- /.social-icon -->

        </div><!-- /.copyright -->
    </div>
</footer><!-- /footer -->
</div><!-- /#main_container -->

<!-- JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Non-Bootstrap JS -->
<script src="assets/js/fluidvids.js"></script>
<script src="assets/js/jquery.prettyPhoto.min.js"></script>
<script src="assets/js/switcher/switcher.js"></script>

<!-- Start Charts head section -->
<link href="/css/d3.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
<script type="text/javascript" src="/js/nv.js"></script>
<script type="text/javascript" src="/js/inview.js"></script>

<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-47895871-2', 'appboxmedia.com');
    ga('send', 'pageview');
</script>
</body>
</html>
