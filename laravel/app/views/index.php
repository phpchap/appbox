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
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/parallax_style_1.1.3.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/about_slider/lean-slider.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/camera.css" />
        <link rel="stylesheet" href="css/blur.css" />
        <!-- start jquery ui -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />         
        <!-- end jquery ui -->
        <!--blur slideshow -->
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
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="WOWSlider/css/style.css" />
	<!-- End WOWSlider.com HEAD section -->                
        <script src="js/jquery-1.8.2.min.js"></script>                
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>               
        <!-- Start Tabs CSS -->
	<style>
            .tabs {
                position: relative;   
                min-height: 400px; /* This part sucks */
                clear: both;
                margin: 25px 0;
            }
            .tab {
                float: left;
            }
            .tab label:hover {
                background: white;
            }
            .tab label {
                background: #eee; 
                padding: 10px; 
                border: 1px solid #ccc; 
                margin-left: -1px; 
                position: relative;
                left: 1px; 
            }
            .tab [type=radio] {
                display: none;   
            }
            .content {
                position: absolute;
                top: 40px;
                left: 0;
                background: white;
                right: 0;
                bottom: 0;
                padding: 20px;
                border: 1px solid #ccc; 

                overflow: hidden;
            }
            .content > * {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                -webkit-transform: translateX(-100%);
                -moz-transform:    translateX(-100%);
                -ms-transform:     translateX(-100%);
                -o-transform:      translateX(-100%);
                -webkit-transition: all 0.6s ease;
                -moz-transition:    all 0.6s ease;
                -ms-transition:     all 0.6s ease;
                -o-transition:      all 0.6s ease;
            }
            [type=radio]:checked ~ label {
                background: white;
                border-bottom: 1px solid white;
                z-index: 2;
            }
            [type=radio]:checked ~ label ~ .content {
                z-index: 1;
            }
            [type=radio]:checked ~ label ~ .content > * {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform:    translateX(0);
                -ms-transform:     translateX(0);
                -o-transform:      translateX(0);
            }
                   
            .modal-body {
                position: relative;
                max-height: 350px;
                padding: 15px;
                overflow-y: auto;
            }                
            #screen{
                position:relative;
                height:425px;
                margin-top:20px;
            }
            #screen .next, #screen .prev{
                position:absolute;
                top:200px;
            }
            #screen .prev{
                left:10px;
            }
            #screen .next{
                right:10px;
            }
            #navigation{
                width:600px;
                text-align:center;
                margin-left:62px;
            }
            #navigation ul{
                margin-left:55px !important;
                margin-left:35px;
            }
            #navigation li{
                float:left;
                margin:0 20px;
                padding:10px 20px;
                background-color:#EEE;
            }
            #navigation a{
                color:#933;
                font-weight:bolder;
                text-decoration:none;
            }

            #sections{
                overflow:hidden;
                height:369px;
                clear:left;
                margin-left:62px;
            }

            #sections ul{
                width:3660px;
            }

            #sections li{
                float:left;
            }

            #sections p{
                font-size: 21px !important;
                width:409px;
                line-height:1.4em;
            }

            #sections h2{
                color:#993333;
                margin:20px 0pt;
            }
            #sections a{
                color:#777;
                font-weight:bolder;
                text-decoration:none;
            }            

            #logo_flip {
                display: block;
                width: 233px;
                height: 0px;
                margin-top: 20px;
                background: url('/images/flip.png') top no-repeat;
                text-indent: -99999px;
            }                    

            #logo_flip:hover {
                background-position: 10px -34px;
            }                    

        </style>        

        <link rel="stylesheet" href="/css/jquery.nouislider.css">
        <script src="http://refreshless.com/nouislider/source/jquery.nouislider.js"></script>
        
        <script>
            $(function(){
                $('.noUiSlider').noUiSlider({
                    range: [100000,1000000],
                    start: [100000],
                    handles: 1,
                    slide: function(){                        
                    
                        var target_input = $(this).attr('id').replace('slide_','');
                        var slider_value = Math.round($(this).val());

                        $("#"+target_input).val(slider_value);
                    },
                    step: 1000
                }).change(function(){
                    calculate();
                });
            });
        </script>
        <style>

/* Clearfix */
.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}
.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}


.navi {
	height: 40px;
	width: 100%;
	font-size: 20px;
	font-weight: bold;
	position: relative;
}
.navi ul {
	padding: 0;
	margin: 0 auto;
	width: 900px;
}
.navi li {
	display: inline;
	float: left;
}
.navi a {
        display: inline-block;
        padding: 13px 15px;
        text-align: center;
        text-decoration: none;
        line-height: 40px;

}
.navi li a {
	box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
}
.navi li:last-child a {
	border-right: 0;
}
.navi li.active{
	background-color: #fff;    
}
.navi a:hover, nav a:active {
}
.navi a#pull {
	display: none;
}

/*Styles for screen 600px and lower*/
@media screen and (max-width: 600px) {
	.navi { 
  		height: auto;
  	}
  	.navi ul {
  		width: 100%;
  		display: block;
  		height: auto;
  	}
  	.navi li {
  		width: 50%;
  		float: left;
  		position: relative;
  	}
  	.navi a {
	  	text-align: left;
	  	width: 100%;
	  	text-indent: 25px;
  	}
}

/*Styles for screen 515px and lower*/
@media only screen and (max-width : 480px) {
	.navi {
		border-bottom: 0;
	}
	.navi ul {
		display: none;
		height: auto;
	}
	.navi a#pull {
            display: block;
            width: 100%;
            height: 42px;
            background: magenta;
        }
	.navi a#pull:after {
		content:"";
                background: url('http://media02.hongkiat.com/responsive-web-nav/demo/nav-icon.png') no-repeat;  
		width: 30px;
		height: 30px;
		display: inline-block;
		position: absolute;
		right: 15px;
		top: 10px;
	}
}

/*Smartphone*/
@media only screen and (max-width : 320px) {
	.navi li {
		display: block;
		float: none;
		width: 100%;
	}
	.navi li a {
		border-bottom: 1px solid #576979;
	}
}
</style>
<script>
$(function() {
    
    var pull = $('#pull');
    menu = $('.navi ul');
    menuHeight	= menu.height();

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
});
</script>

        <!-- End Tabs CSS -->
    </head>
    <body class="clearfix" data-spy="scroll" data-target="#navbar" data-offset="10">
        <div id="navbar" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                
<nav class="clearfix navi">  
    <a class="brand" id="logo_flip" href="#Home"></a>
    <ul class="nav">
        <li class="active">
            <a href="#Home">Home</a>
        </li>
        <li>
            <a href="#Vision">Vision</a>
        </li>
        <li>
            <a href="#Opportunities">Opportunities</a>
        </li>                            
        <li>
            <a href="#Team">Team</a>
        </li>                                                        
        <li>
            <a href="#EISCalculator">EIS Calculator</a>
        </li>                             
        <li>
            <a href="#Contact">Contact</a>
        </li>
        <li>
            <a target="_blank" href="#">Presentation</a>
        </li>                            
    </ul>
    <a href="#" id="pull"></a>  
</nav>                  
            </div>
        </div>        
        <div class="container-fluid clearfix">
            <div class="row-fluid">                
                <!-- START HOME -->
                <div id="Home">
                    <div class="container-fluid clearfix" style="padding:0; overflow:hidden">                        
                        <!-- Start WOWSlider.com BODY section -->
                        <div id="wowslider-container1">
                            <div class="ws_images">
                                <ul id="homepage_slide_overlay">
                                    <li><img src="WOWSlider/home_slider/1_1.jpg" alt="App Box Media" title="AppBox Media PLC is a mobile application and video game software development company for Apple IOS, Google Android, Xbox OS and Orbis operating platforms." id="wows1_0"/></li>
                                    <li><img src="WOWSlider/home_slider/2.jpg" alt="App Box Media" title="The Company’s upcoming release titles will be accessible for instant download on smart phone, tablet, smart TV, PlayStation 4, Xbox One and Google GLΛSS devices. " id="wows1_1"/></li>
                                    <li><img src="WOWSlider/home_slider/3.jpg" alt="App Box Media" title="The Company undertakes the role of the brain child, designer and developer of mobile applications and digital games which demonstrate a high propensity to be monetised via global digital distribution channels. " id="wows1_2"/></li>
                                </ul>
                            </div>
                            <div class="ws_shadow"></div>
                        </div>
                        <!-- End WOWSlider.com BODY section -->                            
                    </div>
                </div>
                <!-- END HOME -->
                <!-- FIRST DID YOU KNOW -->
                <div id="first" class="Parallax">
                    <div class="ParallaxText">
                        <blockquote>Apple Passed 45 billion Total Unique App Downloads At A Rate Of 800 Per Second With Over $9 billion Paid To Developers</blockquote>             
                    </div>
                </div>                
                <!-- START OF VISION -->
                <div id="Vision">
                    <div class="container-fluid clearfix Services">
                        <div class="container clearfix TitleSection">
                            <h1>Vision</h1> 
                        </div>
                        <div class="container clearfix">
                            <div class="row-fluid">
                                <!-- LEFT HAND SIDE TEXT -->
                                <div class="span6">                                    
                                    <p>AppBox Media Plc aims to deliver exciting and creative mobile applications and digital games which embrace users both visually and interactively on a globally connected landscape.</p>
                                    <p>It is the vision of the Company to become one of the world’s leading mobile application and game software developers within 5 years.</p>
                                    <p>The founding shareholders and management agree that AppBox Media can realistically anticipate to achieve £2.5 million in earnings in three years. Subject to market sentiment, they also agree that in three years’ time buyers could be found who would pay up to 10 times earnings for the Company. </p>
                                    <p>Therefore based on these assumptions, in three years the Company’s worth could be estimated at £25 million.</p>
                                    <p>The current market capitalisation AppBox Media Plc stands at £3.6 million.</p>
                                </div>
                                <!-- RIGHT HAND SIDE IMAGE -->
                                <div class="span6">
                                    <img class="img-polaroid" src="http://www.newscientist.com/blogs/culturelab/Iron3.jpg"/>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>                
                <!-- END OF VISION -->                                                
                <!-- SECOND DID YOU KNOW -->
                <div id="second" class="Parallax">
                    <div class="ParallaxText">
                        <blockquote>Google Play Exceeds iOS App Store in App Downloads by 10% in Q2 2013. The iOS App Store still generated 2.3x the revenue.</blockquote>             
                    </div>
                </div>                                                
                <!-- START OF OPPORTUNITIES -->
                <div id="Opportunities">
                    
                    <div class="container-fluid clearfix Services">
                        <div class="container clearfix TitleSection">
                            <h1>Opportunities</h1> 
                        </div>
                        <div class="container clearfix">
                            <div class="row-fluid">                                
                                <!-- LEFT HAND SIDE TEXT -->
                                <div class="span5">
                                    <p>At the heart of AppBox media is its team. We hold an ethos of being big enough to take on big projects whilst being compact enough to care about all aspects of those projects.</p>
                                    <p>Our app technicians and project managers have designed and managed app builds for: Playboy, Universal Pictures, Motorola and Toshiba. Our programmers have built applications from the ground up for clients that include: SEGA, Fujitsu and Gumtree.</p>
                                    <p>The team at AppBox know what it is to work in major billion pound companies. Our accounts team even know how to structure such companies having worked on corporate finance at Nestle.</p>
                                    <p>At an academic level we know what it takes to be top achievers having a team that includes 1st class honours graduates and others who have worked on the world stage at the United Nations.</p>
                                    <p>We are proud of our individual achievements, but we shall be even prouder of our team achievements and what we intend to achieve with AppBox Media. At the core of AppBox is the knowledge that the team have achieved fantastic results in larger institutions.</p>
                                </div>
                                
                                <!-- Include Graphs -->                                
                                <script type="text/javascript" src="http://mbostock.github.com/d3/d3.js"></script>
                                <script type="text/javascript" src="/data/data.json"></script>        
                                <script type="text/javascript" src="/barchartjs/chart.js"></script>                                
                                
                                <!-- RIGHT HAND SIDE GRAPHICS -->
                                <div class="span7">       
                                    <!-- START TABS -->
                                    <div class="tabs">                                        
                                        <!-- START FIRST TAB -->
                                        <div class="tab">
                                            <input type="radio" id="tab-1" name="tab-group-1" checked>
                                            <label for="tab-1">Room for Growth</label>
                                            <div class="content">
                                                <!-- START CHART CONTAINER -->
                                                <div id="chart1" style="width:620px;height:340px;" class='with-3d-shadow with-transitions box'>
                                                    <svg></svg>
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- END FIRST TAB -->        

                                        <!-- START SECOND TAB -->       
                                        <div class="tab">
                                            <input type="radio" id="tab-2" name="tab-group-1">
                                            <label for="tab-2">iOS & Android Activations by Country</label>
                                            <div class="content">
                                                <!-- START CHART CONTAINER -->
                                                <div id="chart2" style="width:620px;height:340px;" class='with-3d-shadow with-transitions box'>
                                                    <svg></svg>
                                                </div>
                                                <!-- END CHART CONTAINER -->
                                            </div> 
                                        </div>
                                        <!-- END SECOND TAB --> 
                                    </div>                                    
                                    <!-- END TABS -->
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>                
                <!-- INSERT THIS SCRIPT BELOW THE THE GRAPHS -->
                <script>
                // inView Code
                $(document).ready(function() {
                    
                    $('#chart1').one('inview', function (event, visible) {
                        if (visible) {
                            showGraph1();
                        }
                    });

                    $("#tab-1").bind('click', function(){
                        showGraph1();                        
                    });

                    $("#tab-2").bind('click', function(){
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

                        nv.utils.windowResize(chart1.update);

                        return chart1;
                    });
                }
                // Function for second graph
                function showGraph2(){
                    historicalBarChart = [{
                        key: "Active iOS & Android Devices (millions)",
                        values: [ 
                        {"label" : "US","value" : 181,"color" : "#19496E"},
                        {"label" : "China","value" : 167,"color" : "#19496E"},
                        {"label" : "UK","value" : 35,"color" : "#19496E"},
                        {"label" : "Japan","value" : 28,"color" : "#19496E"},
                        {"label" : "S.Korea","value" : 27,"color" : "#19496E"},
                        {"label" : "Germany","value" : 22,"color" : "#19496E"},
                        {"label" : "France","value" : 19,"color" : "#19496E"},
                        {"label" : "Canada","value" : 19,"color" : "#19496E"},
                        {"label" : "Brazil","value" : 14,"color" : "#19496E"},
                        {"label" : "Spain","value" : 14,"color" : "#19496E" }
                        ]
                    }];
                
                    nv.addGraph(function() {
                        var chart2 = nv.models.discreteBarChart()
                            .margin({top: 20, right: 10, bottom: 40, left: 50})
                            .x(function(d) { return d.label })
                            .y(function(d) { return d.value })
                            .showValues(true)
                            .tooltips(false);

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
                
                <!-- THIRD DID YOU KNOW -->
                <div id="third" class="Parallax">
                    <div class="ParallaxText">
                        <blockquote>PlayStation 4 pre orders have already topped PlayStation 3 launch sale. 1.6m Playstation 3’s were sold at launch.</blockquote>             
                    </div>
                </div>                
                                
                <!-- START OF TEAM -->
                <div id="Team">
                    <div class="container-fluid clearfix About">
                        <div class="container clearfix">
                            <div class="container clearfix TitleSection">                                
                                <h1>Team</h1>         
                            </div>
                            <div class="container clearfix">
                                <!-- FIRST ROW -->
                                <div class="span12">
                                    <div class="span6">
                                        <p>At the heart of AppBox media is its team. We hold an ethos of being big enough to take on big projects whilst being compact enough to care about all aspects of those projects.</p>
                                        <p>The team at AppBox know what it is to work in major billion pound companies. Our accounts team even know how to structure such companies having worked on corporate finance at Nestle. At an academic level we know what it takes to be top achievers having a team that includes 1st class honours graduates and others who have worked on the world stage at the United Nations.</p>
                                        <p>We are proud of our individual achievements, but we shall be even prouder of our team achievements and what we intend to achieve with AppBox Media. At the core of AppBox is the knowledge that the team have achieved fantastic results in larger institutions.</p>                                            
                                    </div>
                                    <div class="span6">
                                        <style>
                                  
/* fujitsu */
#fujitsu {
    display: block;
    width: 125px;
    height: 125px;
    background: url("/images/clients/client_sprite_map.png") no-repeat scroll 0 -140px transparent;
    text-indent: -99999px;
}
#fujitsu:hover {
    background-position: 0 0;
}                                            

/* gumtree */
#gumtree{
    display: block;
    width: 125px;
    height: 125px;
    background: url("/images/clients/client_sprite_map.png") no-repeat scroll -140px -127px transparent;
    text-indent: -99999px;    
}
#gumtree:hover{
    background-position: -141px 2px;    
}

/* motorola */
#motorola{
    display: block;
    width: 125px;
    height: 125px;
    background: url("/images/clients/client_sprite_map.png") no-repeat scroll -270px -130px transparent;
    text-indent: -99999px;        
}

#motorola:hover{
    background-position: -270px 0px;        
}

/* nestle */
#nestle{
    display: block;
    width: 125px;
    height: 125px;
    background: url("/images/clients/client_sprite_map.png") no-repeat scroll -402px -121px transparent;
    text-indent: -99999px;        
}

#nestle:hover{
    background-position: -402px 0px;        
}


                                        </style>
                                        
                                        11111
                                        <img id="fujitsu"></a>
                                        <img id="gumtree"></a>
                                        <img id="motorola"></a>                                        
                                        <img id="nestle"></a>                                        
                                        
                                        2222222
                                        
                                        
                                        <p>Our developers and project managers have designed and built applications for: Playboy, Universal Pictures, Motorola, Toshiba, SEGA, Fujitsu and Gumtree.</p>                                        
                                        <img class="img-polaroid" src="/images/clients/fujitsu_s.jpg">
                                        
                                        
                                        <img class="img-polaroid" src="/images/clients/gumtree_s.jpg">
                                        <img class="img-polaroid" src="/images/clients/motorola_s.jpg">
                                        <img class="img-polaroid" src="/images/clients/nestle_s.jpg"> 
                                        <div class="clearfix">&nbsp;</div>
                                        <img class="img-polaroid" src="/images/clients/playboy_s.png">
                                        <img class="img-polaroid" src="/images/clients/sega_s.png">
                                        <img class="img-polaroid" src="/images/clients/toshiba_s.jpg">
                                        <img class="img-polaroid" src="/images/clients/universal_s.jpg">                                                                            
                                    </div>
                                    <!-- END OF FIRST ROW -->                                   
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF TEAM -->
                
                <!-- FOURTH DID YOU KNOW -->
                <div id="fourth" class="Parallax">
                    <div class="ParallaxText">
                        <blockquote>Smart TV shipments climbed 27% in 2012 to reach 66 million units. By 2015, the smart TVs will make up 55% of the market as global shipments climb to 141 million units.</blockquote>             
                    </div>
                </div>                                
                
                <!--START EIS CALCULATOR -->
                <div id="EISCalculator">
                    <div class="container-fluid clearfix Services">
                        <div class="container clearfix TitleSection">
                            <h1>EIS Calculator</h1> 
                        </div>
                        <div class="container clearfix">
                            <div class="row-fluid">
                                <div class="span6">                                    
                                    <p>The Enterprise Investment Scheme ("EIS") is a Government scheme that provides a range of tax reliefs for investors who subscribe for qualifying shares in qualifying companies.</p>
                                    <p>There are five current EIS tax reliefs available to investors in companies qualifying under the EIS, which are summarised below :</p>
                                    <p>1. Income tax relief</p>
                                    <ul>
                                        <li>An individual with no more than a 30% interest in the company can reduce their income tax liability by up to 30% of the amount invested. An EIS qualifying investment must be held for no less than three years from the date of issue, or until three years from commencement of trade, if later.</li>
                                        <li>There is no minimum subscription per company and the maximum in respect of which a subscriber may obtain income tax relief in any year is £1m. </li>
                                        <li>Individuals may elect to treat their subscription for EIS shares, up to their maximum annual allowance, as if made in the previous tax year, thereby effectively carrying income tax relief back one year. In other words, up to £2m may be invested of which £1m could be applied to the previous tax year.</li>
                                        <li>Individuals each have an EIS allowance of £1m, so a married couple could invest up to £2m per tax year.</li>
                                        <li>Income Tax Relief is limited to the amount which reduces the individual's income tax liability for the year to nil. </li>
                                    </ul>
                                    <br/>
                                    <p>2. CGT Freedom</p>
                                    <ul>
                                        <li>No Capital Gains Tax is payable on the disposal of shares after three years, or three years after commencement of trade, if later, provided the EIS initial income tax relief was given and not withdrawn on those shares. However, the shares can be held for much longer, thus potentially permitting CGT free gain to accrue over a longer period. The opportunity for a CGT free gain can be an extremely valuable benefit from subscribing for shares in a successful EIS qualifying company. </li>
                                    </ul>
                                    <br/>
                                    <p>3. Inheritance Tax Relief – ‘IHT’ Relief</p>
                                    <ul>
                                        <li>Shares in EIS qualifying companies will generally qualify for Business Property Relief for Inheritance Tax purposes at rates of up to 100% after two years of holding such investment, so that any liability for Inheritance Tax is reduced or eliminated in respect of such shares. For a simple example of the impact of IHT relief. </li>
                                    </ul>
                                    <br/>
                                    <p>4. CGT Deferral Relief</p>
                                    <ul>
                                        <li>Tax on capital gains realised on a different asset can be deferred for as long as the EIS qualifying shares are held or even indefinitely, where disposal of that asset was less than 36 months before the date of the issue of shares in the EIS investment or less than 12 months after it.</li>
                                        <li>Deferral relief is unlimited, in other words, this relief is not limited to investments of £1m per annum and can also be claimed by investors (individuals or trustees) whose interest in the company exceeds 30%. </li>
                                    </ul>
                                    <br/>
                                    <p>5. Loss Relief</p>
                                    <ul>
                                        <li>If EIS shares are disposed of at any time at a loss (after taking into account income tax relief), such loss can be set against the investor's capital gains, or his income in the year of disposal or the previous year.</li>
                                        <li>For losses offset against income, the net effect is to limit the investment exposure to 35p in the £1 for a 50% tax payer, if the shares were to become totally worthless.</li>
                                        <li>Alternatively the losses can be offset against Capital Gains at the prevailing rate 28% as applicable. </li>
                                    </ul>
                                    <br/>
                                    <p>More detailed information about EIS for Investors and businesses seeking EIS investment can be found by visiting the <a href="http://www.hmrc.gov.uk/eis/" target="_blank">HMRC website</a></p>
                                </div>
                                <div class="span6">
                                    <!-- EIS CALCULATOR -->
                                    <form name="seis-calculator" id="seis-calculator" method="post">
                                        <!--Assumptions for Tax Year 2012/13: -->
                                        <input type="hidden" name="basic_rate_band_limit" id="basic_rate_band_limit" value="34370">
                                        <input type="hidden" name="higher_rate_band_limit" id="higher_rate_band_limit" value="150000">
                                        <input type="hidden" name="basic_rate" id="basic_rate" value="20">
                                        <input type="hidden" name="higher_rate" id="higher_rate" value="40">
                                        <input type="hidden" name="add_rate" id="add_rate" value="50">
                                        <input type="hidden" name="basic_rate_inc_tax_payer" id="basic_rate_inc_tax_payer" value="18">
                                        <input type="hidden" name="above_basic_rate_inc_tax_payer" id="above_basic_rate_inc_tax_payer" value="28">
                                        <input type="hidden" name="income_tax_allowance" id="income_tax_allowance" value="8105">
                                        <input type="hidden" name="min_income_tax_allowance" id="min_income_tax_allowance" value="100000">
                                        <input type="hidden" name="cgt_amt" id="cgt_amt" value="10600">
                                        <!--Calculations (not for displaying on the website):-->
                                        <input type="hidden" name="taxable_income" id="taxable_income" value="100000">
                                        <input type="hidden" name="taxable_income_allowance" id="taxable_income_allowance" value="-8105">
                                        <input type="hidden" name="red_income_tax_allowance1" id="red_income_tax_allowance1" value="0">
                                        <input type="hidden" name="red_income_tax_allowance2" id="red_income_tax_allowance2" value="0">
                                        <input type="hidden" name="taxable_income_after_income_tax_allowance" id="taxable_income_after_income_tax_allowance" value="91895">
                                        <input type="hidden" name="basic_rate_band" id="basic_rate_band" value="6874">
                                        <input type="hidden" name="higher_rate_band" id="higher_rate_band" value="23010">
                                        <input type="hidden" name="add_rate_band" id="add_rate_band" value="0">
                                        <input type="hidden" name="income_tax_liability" id="income_tax_liability" value="29884">
                                        <input type="hidden" name="max_seis_inv_allowance" id="max_seis_inv_allowance" value="100000">
                                        <input type="hidden" name="seis_rate" id="seis_rate" value="50">
                                        <input type="hidden" name="max_seis_tax_relief_pos" id="max_seis_tax_relief_pos" value="50000">
                                        <input type="hidden" name="max_seis_tax_relief_pos_avail" id="max_seis_tax_relief_pos_avail" value="29884">
                                        <input type="hidden" name="invest_max_seis_tax_relief" id="invest_max_seis_tax_relief" value="59768">
                                        <input type="hidden" name="unused_basic_rate_band" id="unused_basic_rate_band" value="0">
                                        <input type="hidden" name="basic_rate_band_capital_gain" id="basic_rate_band_capital_gain" value="0">
                                        <input type="hidden" name="capital_gain_tax_liability" id="capital_gain_tax_liability" value="2800">
                                        <input type="hidden" name="seis_reinv_rel_cap" id="seis_reinv_rel_cap" value="2800">
                                        <input type="hidden" name="seis_reinv_rel" id="seis_reinv_rel" value="2800">
                                        <div id="caluculator_content">
                                            <div id="calculator">
                                                <div id="bg_calculator"></div>
                                                <h2>In the Tax Year ending 5 April 2014:</h2>
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>                                                 
                                                        <tr>
                                                            <td>                                                                
                                                                What is your Taxable Income? <font color="red">*</font>          
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="tax_income" id="tax_income" type="text" value="100000" class="blue_stroke_text_area" placeholder="0" onblur="calculate()" onkeyup="calculate()">
                                                                    <span class="add-on">.00</span>
                                                                </div>                         
                                                                <div id="slide_tax_income" class="noUiSlider"></div>                                                                                                                                
                                                                <hr>                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                What are your expected Capital Gains? <font color="red">*</font>          
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="capital_gain" id="capital_gain" type="text" value="100000" class="blue_stroke_text_area" placeholder="0" onblur="calculate()" onkeyup="calculate()">
                                                                    <span class="add-on">.00</span>
                                                                </div>                                
                                                                <div id="slide_capital_gain" class="noUiSlider"></div>                                                                                                                                
                                                                <hr>                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                How much do you plan to invest ? <font color="red">*</font>
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="invest" id="invest" type="text" value="10000" class="blue_stroke_text_area" placeholder="0" onblur="calculate()" onkeyup="calculate()">
                                                                    <span class="add-on">.00</span>
                                                                </div>                             
                                                                <div id="slide_invest" class="noUiSlider"></div>                                                                                                                               
                                                                <hr>
                                                            </td>                               
                                                    </tbody>
                                                </table>
                                                <hr>                        
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                            <td>
                                                                The Income Tax that you may save through claiming EIS Income Tax Relief is    
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="output_1" id="output_1" type="text" value="" placeholder="0" readonly="true">
                                                                    <span class="add-on">.00</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                The net cost, after EIS Income Tax relief, of your investment is:
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="output_2" id="output_2" type="text" value="" placeholder="0" readonly="true">
                                                                    <span class="add-on">.00</span>
                                                                </div>                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                The Capital Gains Tax that you may save by claiming EIS Reinvestment Relief is:                                
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="output_2" id="output_2" type="text" value="" placeholder="0" readonly="true">
                                                                    <span class="add-on">.00</span>
                                                                </div>                                                                                           
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                The net cost, after tax EIS Income Tax Relief and EIS Reinvestment Relief, of your investment is:                           
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="output_4" id="output_4" type="text" value="" placeholder="0" readonly="true">
                                                                    <span class="add-on">.00</span>
                                                                </div>                                                           
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                On day one the investment is worth to you, as a percentage of your net cost:                                
                                                                <div class="input-prepend input-append">
                                                                    <span class="add-on">£</span>
                                                                    <input name="output_4" id="output_4" type="text" value="" placeholder="0" readonly="true">
                                                                    <span class="add-on">.00</span>
                                                                </div>                                                           
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input name="returns_1_1" id="returns_1_1" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_1_2" id="returns_1_2" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_1_3" id="returns_1_3" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_2_1" id="returns_2_1" type="hidden" value="50"  placeholder="0" readonly="true">
                                                <input name="returns_2_2" id="returns_2_2" type="hidden" value="100"  placeholder="0" readonly="true">
                                                <input name="returns_2_3" id="returns_2_3" type="hidden" value="200"  placeholder="0" readonly="true">
                                                <input name="returns_3_1" id="returns_3_1" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_3_2" id="returns_3_2" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_3_3" id="returns_3_3" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_4_1" id="returns_4_1" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_4_2" id="returns_4_2" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_4_3" id="returns_4_3" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_5_1" id="returns_5_1" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_5_2" id="returns_5_2" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_5_3" id="returns_5_3" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_6_1" id="returns_6_1" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_6_2" id="returns_6_2" type="hidden" value="" placeholder="0" readonly="true">
                                                <input name="returns_6_3" id="returns_6_3" type="hidden" value="" placeholder="0" readonly="true">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
                <!--END EIS CALCULATOR -->                

                <!-- FIFTH DID YOU KNOW -->
                <div id="fifth" class="Parallax">
                    <div class="ParallaxText">
                        <blockquote>The Oculus Rift VR Headset announced a Kickstarter campaign to further development of the product. Within four hours, Oculus secured its intended amount of $250,000, less than 36 hours, the campaign surpassed $1m in funding, eventually ending with $2.4 million</blockquote>             
                        <div class="clearfix"></div>
                    </div>
                </div                
                
                <!-- START OF CONTACT -->
                <div id="Contact">
                    <div class="container-fluid clearfix Contact">
                        <div class="container clearfix TitleSection">
                            <h1>CONTACT US</h1> 
                        </div>
                        <div class="container clearfix">
                            <div class="container">
                                <div class="span12" style="margin-top:20px">
                                    <iframe width="100%" height="374" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=EC1A+4HD&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=EC1A+4HD,+United+Kingdom&amp;t=m&amp;z=18&amp;iwloc=near&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=EC1A+4HD&amp;aq=&amp;sll=37.09024,-95.712891&amp;sspn=38.775203,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=EC1A+4HD,+United+Kingdom&amp;t=m&amp;z=14&amp;iwloc=near&output=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>                                    
                                    <br />
                                </div>
                            </div>
                            <div class="container">
                                <div class="span6">
                                    <h2>Get In Touch With Us</h2>
                                    <div class="well">                 
                                        <form class="form-horizontal" id="registerHere" method='post' action=''>
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-xlarge" id="user_name" name="user_name">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Email</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-xlarge" id="user_email" name="user_email">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Subject</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-xlarge" id="pwd" name="pwd">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Your Message</label>
                                                    <div class="controls">
                                                        <textarea cols="" rows="" class="input-xlarge" id="cpwd" name="cpwd"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="input01"></label>
                                                    <div class="controls">
                                                        <button type="submit" id="contactForm" class="btn" rel="tooltip" title="Send Message">Send Message</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="span6">
                                    <h2>Contact</h2>
                                    <div class="well">
                                        <p>AppBox Media PLC</p>
                                        <p>200 Aldersgate</p> 
                                        <p>London</p>
                                        <p>EC1A 4HD</p>
                                        <hr>
                                        <div class="contact-info">
                                            <ul>
                                                <li><i class="icon-bullhorn" style="margin-right:10px"></i>0203 440 4110 / 0800 978 8018</li>
                                                <br>
                                                <li><i class="icon-envelope" style="margin-right:10px"></i><a target="_blank" href="mailto:hello@appboxmedia.com">hello@appboxmedia.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
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
                            <a class="brand" href="#Home"><img src="/images/logo.png"/></a>                            
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
            <!-- /Row -->
        </div>
        <!-- /container -->
        <div id="toTop">To Top</div>               
        <!-- Start Disclaimer modal -->
        <div id="disclaimerModal" class="modal hide fade" role="dialog" tabindex="-1" role="dialog" aria-labelledby="disclaimerModalLabel" aria-hidden="true">
            <div class="modal-header">
                <div style="float:left;">
                    <h3 id="disclaimerModalLabel">Disclaimer</h3>                    
                </div>
                <div style="float:right">
                    <button style="margin:0;" class="btn btn-primary" data-dismiss="modal">I Agree</button>                                                        
                </div>
                <div style="clear:both;height:1px">&nbsp;</div>
            </div>
            <div class="modal-body">                
                <p>Our Website and Placing Document is restricted to a limited number of investors, the website and document can be viewed if you qualify as a sophisticated investor or high net worth individual. If you wish to view our investment opportunity please accept that you qualify under one of the following criteria:</p>
                
                <b>STATEMENT FOR SELF-CERTIFIED HIGH NET WORTH INDIVIDUAL</b>
                
                <p>I understand that this means:</p>
                <p>(a) I can receive financial promotions that may not have been approved by a person authorised by the Financial Conduct Authority;</p>
                <p>(b) the content of such financial promotions may not conform to rules issued by the Financial Services Authority;</p>
                <p>(c) by signing this statement I may lose significant rights;</p>
                <p>(d) I may have no right to complain to either of the following —</p>
                <p>i. the Financial Conduct Authority; or ii. the Financial Ombudsman Scheme;</p>
                <p>(e) I may have no right to seek compensation from the Financial Conduct Compensation Scheme. I am a self-certified sophisticated investor because at least one of the following applies —</p>
                <p>(a) I am a member of a network or syndicate of business angels and have been so for at least the last six months prior to the date below;</p>
                <p>(b) I have made more than one investment in an unlisted company in the two years prior to the date below;</p>
                <p>(c) I am working, or have worked in the two years prior to the date below, in a professional capacity in the private equity sector, or in the provision of finance for small and medium enterprises;</p>
                <p>(d) I am currently, or have been in the two years prior to the date below, a director of a company with an annual turnover of at least £l million.</p>
                <p>I accept that I can lose my property and other assets from making investment decisions based on financial promotions. I am aware that it is open to me to seek advice from someone who specialises in advising on investments.</p>
                <p>I declare that I am a self-certified sophisticated investor for the purposes of the Financial Services and Markets Act (Financial Promotion) Order 2005.</p>
                
                <b>STATEMENT FOR SELF-CERTIFIED SOPHISTICATED INVESTOR</b>

                <p>I understand that this means:</p>
                <p>(a) I can receive financial promotions that may not have been approved by a person authorised by the Financial Conduct Authority;</p>
                <p>(b) the content of such financial promotions may not conform to rules issued by the Financial Conduct Authority;</p>
                <p>(c) by signing this statement I may lose significant rights;</p>
                <p>(d) I may have no right to complain to either of the following —</p>
                <p>i. the Financial Conduct Authority; or ii. the Financial Ombudsman Scheme;</p>
                <p>(e) I may have no right to seek compensation from the Financial Conduct Compensation Scheme. I am a self-certified sophisticated </p>
                <p>investor because at least one of the following applies —</p>
                <p>(a) I am a member of a network or syndicate of business angels and have been so for at least the last six months prior to the date below;</p>
                <p>(b) I have made more than one investment in an unlisted company in the two years prior to the date below;</p>
                <p>(c) I am working, or have worked in the two years prior to the date below, in a professional capacity in the private equity sector, or in the provision of finance for small and medium enterprises;</p>
                <p>(d) I am currently, or have been in the two years prior to the date below, a director of a company with an annual turnover of at least £l million.</p>
                <p>I accept that I can lose my property and other assets from making investment decisions based on financial promotions. I am aware that it is open to me to seek advice from someone who specialises in advising on investments.</p>
                <p>I declare that I am a self-certified sophisticated investor for the purposes of the Financial Services and Markets Act (Financial Promotion) Order 2005.</p>
                <p>Click agree to confirm.</p>

            </div>
            <div class="modal-footer">
                Click agree to confirm&nbsp;
                <button style="margin:0" class="btn btn-primary" data-dismiss="modal">I Agree</button>
            </div>
        </div>
        <!-- End Disclaimer modal -->

        <!-- Start Terms and Conditions Modal -->
        <div id="TermsAndConditionsModal" role="dialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="TermsAndConditionsModalLabel" aria-hidden="true">
            <div class="modal-header">
                <h3 id="TermsAndConditionsModalLabel">Terms and Conditions</h3>
            </div>
            <div class="modal-body">
                <p>Terms and conditions copy</p>
            </div>
        </div>
        <!-- End Start Terms and Conditions Modal -->
        
        <!-- Start Privacy Policy Modal -->
        <div id="PrivacyPolicyModal" role="dialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyModalLabel" aria-hidden="true">
            <div class="modal-header">
                <h3 id="PrivacyPolicyModalLabel">Privacy Policy</h3>
            </div>
            <div class="modal-body">
                <p>Privacy Policy copy</p>
            </div>
        </div>
        <!-- End Privacy Policy Modal -->

        <!-- Start Important Notice Modal -->
        <div id="ImportantNoticeModal" role="dialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ImportantNoticeModalLabel" aria-hidden="true">
            <div class="modal-header">
                <h3 id="ImportantNoticeModalLabel">Important Notice</h3>
            </div>
            <div class="modal-body">
                <p>Important Notice copy</p>
            </div>
        </div>
        <!-- End Important Notice Modal -->
        
        <!-- Start Risk Warning Modal -->
        <div id="RiskWarningModal" role="dialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="RiskWarningModalLabel" aria-hidden="true">
            <div class="modal-header">
                <h3 id="RiskWarningModalLabel">Risk Warning</h3>
            </div>
            <div class="modal-body">
                <p>Risk Warning copy</p>
            </div>
        </div>
        <!-- End Important Notice Modal -->
        
        <!-- Le javascript==================================================-->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/lean-slider.min.js"></script><!-- About Slider-->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.min.js"></script><!-- parallax-->
        <script src="js/modernizr-2.6.1.min.js"></script><!--blur slidShow -->
        <script src="js/jquery.quicksand.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.mobile.customized.min.js"></script><!-- camera Slider-->
<!--        <script src="js/camera.min.js"></script> -->
        <script src="js/jquery.parallax-1.1.3.min.js"></script><!--  parallax-->
        <script src="js/jquery.localscroll-1.2.7-min.js"></script><!--  scrollspy -->
        <script src="js/jquery.scrollspy.js"></script><!--  scrollspy -->                
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
        <script>            
            jQuery(function () {     
                
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
        </script>
    </body>
</html>