<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>AppBox Media</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <meta name="description" content="Mobile Apps Company looking at towards the future">
        <meta name="author" content="">
        <link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icon/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="icon/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="icon/favicon.ico">
        <!-- End WOWSlider.com HEAD section -->
        <script src="js/jquery-1.8.2.min.js"></script>                
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/jquery-1.8.2.min.js"></script>
        <!-- Start Tabs CSS -->
        <style>
            /* Space out content a bit */
            body {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            /* Everything but the jumbotron gets side spacing for mobile first views */
            .header,
            .marketing,
            .footer {
                padding-left: 15px;
                padding-right: 15px;
            }

            /* Custom page header */
            .header {
                border-bottom: 1px solid #e5e5e5;
            }
            /* Make the masthead heading the same height as the navigation */
            .header h3 {
                margin-top: 0;
                margin-bottom: 0;
                line-height: 40px;
                padding-bottom: 19px;
            }

            /* Custom page footer */
            .footer {
                padding-top: 19px;
                color: #777;
                border-top: 1px solid #e5e5e5;
            }

            /* Customize container */
            @media (min-width: 768px) {
                .container {
                    max-width: 730px;
                }
            }
            .container-narrow > hr {
                margin: 30px 0;
            }

            /* Main marketing message and sign up button */
            .jumbotron {
                text-align: center;
                border-bottom: 1px solid #e5e5e5;
            }
            .jumbotron .btn {
                font-size: 21px;
                padding: 14px 24px;
            }

            /* Supporting marketing content */
            .marketing {
                margin: 40px 0;
            }
            .marketing p + h4 {
                margin-top: 28px;
            }

            /* Responsive: Portrait tablets and up */
            @media screen and (min-width: 768px) {
                /* Remove the padding we set earlier */
                .header,
                .marketing,
                .footer {
                    padding-left: 0;
                    padding-right: 0;
                }
                /* Space out the masthead */
                .header {
                    margin-bottom: 30px;
                }
                /* Remove the bottom border on the jumbotron for visual effect */
                .jumbotron {
                    border-bottom: 0;
                }
            }


            .arrow_box {
                position: relative;
                background: #82027e;
                border: 4px solid #ffffff;
            }
            .arrow_box:after, .arrow_box:before {
                right: 100%;
                top: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
            }

            .arrow_box:after {
                border-color: rgba(130, 2, 126, 0);
                border-right-color: #82027e;
                border-width: 30px;
                margin-top: -30px;
            }
            .arrow_box:before {
                border-color: rgba(255, 255, 255, 0);
                border-right-color: #ffffff;
                border-width: 36px;
                margin-top: -36px;
            }

            .control-group.error input:focus,
            .control-group.error select:focus,
            .control-group.error textarea:focus {
                border-color: #953b39;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
                -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
            }
            .control-group.error .control-label, .control-group.error .help-block, .control-group.error .help-inline {
                color: #b94a48;
            }
            .form-search input, .form-inline input, .form-horizontal input, .form-search textarea, .form-inline textarea, .form-horizontal textarea, .form-search select, .form-inline select, .form-horizontal select, .form-search .help-inline, .form-inline .help-inline, .form-horizontal .help-inline, .form-search .uneditable-input, .form-inline .uneditable-input, .form-horizontal .uneditable-input, .form-search .input-prepend, .form-inline .input-prepend, .form-horizontal .input-prepend, .form-search .input-append, .form-inline .input-append, .form-horizontal .input-append {
                display: block;
                margin-bottom: 0;
                vertical-align: middle;
            }
        </style>
        <link rel="stylesheet" href="/css/site.css">
        <script>
            $(function(){
                
                var pull = $('#pull');
                menu = $('.navi ul');
                menuHeight = menu.height();

                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });

                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });

                $("#toggle").bind('click', function(){
                    $("#toggler").toggle();
                });
                
            });
        </script>
        <!-- End Tabs CSS -->
    </head>

    <div class="container">

        <div class="jumbotron">
            <img src="/images/logo.png"/>
            <h1>Presentation</h1>
        </div>

        <div class="row marketing">
            <div class="col-lg-6">
                <form class="form-horizontal" id="registerHere" method="post" action="" novalidate="novalidate">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="input01">Name *</label>
                            <div class="controls">
                                <input type="text" id="user_name" name="user_name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Email *</label>
                            <div class="controls">
                                <input type="text" id="user_email" name="user_email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Contact Number *</label>
                            <div class="controls">
                                <input type="text" id="pwd" name="pwd">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01"></label>
                            <div class="controls">
                                <button type="submit" id="contactForm" class="btn" rel="tooltip" data-original-title="Send Message">View Presentation</button>
                                <p style="font-size: 14px !important">* We promise not to share your details!</p>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="col-lg-6 arrow_box" style="background: #82027e">
                <h2 style="color: #fff">Presentation Summary</h2>
                <ul style="color: #fff">
                    <li>About AppBox Media</li>
                    <li>Our Vision</li>
                    <li>The Team</li>
                    <li>Strategy</li>
                    <li>Market Analysis</li>
                    <li>EIS Investment</li>
                </ul>
                <p style="color: #fff">We need a few details before we get started!</p>
            </div>
        </div>

        <div class="footer">
            <p>&copy; AppBox Media PLC 2014</p>
        </div>

    </div> <!-- /container -->
    <input type="hidden" id="isModern" name="isModern"/>
    <script>

        jQuery(function () {

            // check we have canva support
            function supports_canvas() {
                return !!document.createElement('canvas').getContext;
            }

            // are we on a HTML5 enabled browser?
            if(supports_canvas() == true) {
                jQuery("#isModern").val("YES");
            } else {
                jQuery("#isModern").val("NO");
            }
        });

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-47895871-2', 'appboxmedia.com');
        ga('send', 'pageview');


    </script>
    <script type='text/javascript' src='/js/modernizer.js'></script>
    <script type='text/javascript' src="/js/lean-slider.min.js"></script>
    <script type='text/javascript' src="/js/bootstrap.min.js"></script>
    <script type='text/javascript' src="/js/jquery.validate.min.js"></script>
    <script type='text/javascript' src="/js/jquery.parallax-1.1.3.min.js"></script>
    <script type='text/javascript' src="/js/my_script.min.js"></script>
    
</body>
</html>
