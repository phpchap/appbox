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
            <p>&copy; AppBox Media PLC <?php echo date("Y");?></p>
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
    <?php /*
    <body class="clearfix" data-spy="scroll" data-target="#navbar" data-offset="10">
        <div id="navbar" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <nav class="clearfix navi">  
                    <a class="brand" id="logo_flip" href="#Home"></a>
                    <ul class="nav">
                        <li class="active">
                            <a href="/#Home">Home</a>
                        </li>
                        <li>
                            <a href="/#Vision">Vision</a>
                        </li>
                        <li>
                            <a href="/#Opportunities">Opportunities</a>
                        </li>                            
                        <li>
                            <a href="/#Team">Team</a>
                        </li>                                                        
                        <li>
                            <a href="/#EISCalculator">EIS Calculator</a>
                        </li>                             
                        <li>
                            <a href="/#Contact">Contact</a>
                        </li>
                        <li>
                            <a href="#Presentation">Presentation</a>
                        </li>                            
                    </ul>
                    <a href="#" id="pull"></a>  
                </nav>                  
            </div>
        </div>
        <div class="container-fluid clearfix">
            <div class="row-fluid">                
                <div id="Presentation">
                    <div class="container-fluid clearfix Contact">
                        <div class="container clearfix">
                            <div class="container">
                                <div class="jumbotron">
                                    <h1>APPBOX MEDIA PRESENTATION</h1>                                     
                                    <img src="/images/delorean-back-future-1024x675.jpg" class="img-polaroid">
                                    <small>Image courtesy of Universal Pictures</small>
                                    <h3>We need a few details before we start the presentation</h3>
                                    <div class="well" id="contact">                 
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
                                                        <p style="width:500px;">* We promise not to share your details with anyone else!</p>                                                        
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>                                    
                                </div>               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

        <!-- END OF CONTACT -->                 
        <div class="container-fluid Footer">
            <div class="container">
                <footer>
                    <ul class="Social">
                        <li>
                            <a class="Facebook" rel="tooltip" href="#" data-original-title="Facebook">Facebook</a>
                        </li>
                        <li>
                            <a class="Twitter" rel="tooltip" href="#" data-original-title="Twitter">Twitter</a>
                        </li>
                        <li>
                            <a class="Pinterest" rel="tooltip" href="#" data-original-title="Pinterest">Pinterest</a>
                        </li>
                        <li>
                            <a data-original-title="Googleplus" href="#" rel="tooltip" class="Googleplus">Googleplus</a>
                        </li>                                
                        <li>
                            <a data-original-title="Instagram" href="#" rel="tooltip" class="Instagram">Instagram</a>
                        </li>                                
                    </ul>

                    <div style="margin:0 auto;width:240px">
                        <a class="brand" id="logo_bottom_flip" href="#Home"></a>
                    </div>
                    <p>
                        <a id="TermsConditionsBtn" data-toggle="modal" href="">Terms & Conditions</a> - 
                        <a id="PrivacyPolicyBtn" data-toggle="modal" href="">Privacy Policy</a> - 
                        <a id="ImportantNoticeBtn" data-toggle="modal" href="">Important Notice</a> - 
                        <a id="RiskWarningBtn" data-toggle="modal" href="">Risk Warning</a>
                    </p>
                </footer>
            </div>
        </div>                    
    </div>
    <input type="hidden" id="isModern" name="isModern"/>

    <!-- Le javascript==================================================-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/lean-slider.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/modernizr-2.6.1.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.min.js"></script>
    <script src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script src="js/jquery.scrollspy.js"></script>        
    <script src="js/my_script.min.js"></script>        
    <!-- EIS Calculator -->
    <script src="js/jquery.eis.js"></script>
    <!-- WOWSLIDER -->
    <script type="text/javascript" src="WOWSlider/js/wowslider.js"></script>
    <script type="text/javascript" src="WOWSlider/js/init.js"></script>        
    <!-- Start Charts head section -->        
<link href="/css/d3.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
<script type="text/javascript" src="/js/nv.js"></script>
<script type="text/javascript" src="/js/inview.js"></script>        
<!-- End Charts head section -->                
<script type='text/javascript' src='http://demos.flesler.com/jquery/scrollTo/js/jquery.scrollTo-min.js'></script>
<script type='text/javascript' src='http://demos.flesler.com/jquery/serialScroll/js/jquery.serialScroll-min.js'></script>
<script type='text/javascript' src='/js/scrollText.js'></script>
<script type='text/javascript' src='/js/modernizer.js'></script>
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

        // terms and condition modal
        jQuery("#TermsConditionsBtn").bind('click', function(){
            $('#TermsAndConditionsModal').modal();
        });
                
        // privacy policy modal
        jQuery("#PrivacyPolicyBtn").bind('click', function(){
            $('#PrivacyPolicyModal').modal();                    
        });

        // important notice modal
        jQuery("#ImportantNoticeBtn").bind('click', function(){
            $('#ImportantNoticeModal').modal();                    
        });

        // risk warning modal
        jQuery("#RiskWarningBtn").bind('click', function(){
            $('#RiskWarningModal').modal();                    
        });

        // disclaimer popup display on page load
        jQuery('#disclaimerModal').modal({
            backdrop: 'static',
            keyboard: false
        });                
    });

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-47895871-2', 'appboxmedia.com');
    ga('send', 'pageview');

            
</script>
 */?>

</body>
</html>