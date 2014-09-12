<!doctype html>
<html <?php language_attributes(); ?>>
<head dir="ltr" lang="zh-CN">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php
    	global $page, $paged;
    
    	wp_title( '|', true, 'right' );
    
    	// Add the blog name.
    	bloginfo( 'name' );
    
    	// Add a page number if necessary:
    	if ( $paged >= 2 || $page >= 2 )
    		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    
    	?></title>
    <meta name="keywords" content="">
    <meta name="description" content="<?=$site_description?>">
    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-37930912-1']);
      _gaq.push(['_setDomainName', 'ericathy.us']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.3.js"></script>
</head>
<body>

<header id="header">
    <h1 title="ERIC&CATHY">
        <span class="eric">ERI</span>
        <div id="CClock">
            <div class="clock">
                <div class="clock-h">
                <div class="clock-m">
                    <div class="clock-s">c</div>
                </div>
                </div>
            </div>
        </div>
        <span class="cathy">ATHY</span>
    </h1>
</header>

<div id="theTime">
    <h5>我们结婚已经<h5>
    <h2 class="timer" data-time="2013-01-04"></h2>
    <h5>我们在一起已经<h5>
    <h2 class="timer" data-time="2009-09-22"></h2>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<div id="separator" class="clearfix">
    <div class="eric"></div>
    <div class="cathy"></div>
</div>

<div id="body" class="clearfix">
