<html <?php language_attributes(); ?>>
<head dir="ltr" lang="zh-CN">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php
    	global $page, $paged;
    
    	wp_title( '|', true, 'right' );
    
    	// Add the blog name.
    	bloginfo( 'name' );
    
    	// Add the blog description for the home/front page.
    	$site_description = get_bloginfo( 'description', 'display' );
    	if ( $site_description && ( is_home() || is_front_page() ) )
    		echo " | $site_description";
    
    	// Add a page number if necessary:
    	if ( $paged >= 2 || $page >= 2 )
    		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    
    	?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="" type="image/x-icon" rel="icon">

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>

<header id="header">
    <h1 title="ERIC&CATHY">
        <span class="eric">ERI</span>
        <div id="CClock" class="clock">
            <div class="clock-m">
                <div class="clock-s">c</div>
            </div>
        </div>
        <span class="cathy">ATHY</span>
    </h1>
</header>

<section id="theTime">
    <h5>我们结婚已经<h5>
    <h2 class="timer" data-time="2013-1-4 10:00:00"></h2>
    <h5>我们在一起已经<h5>
    <h2 class="timer" data-time="2009-9-22 0:00:00"></h2>
</section>

<section id="body" class="clearfix">
