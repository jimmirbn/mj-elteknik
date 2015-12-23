<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if lt IE 9]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?></title>
            
        <!-- meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
        <meta name="google" value="notranslate">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        
        <!-- icons -->
            
        <!-- css + javascript -->
        <?php wp_head(); ?>

    </head>
    <body <?php body_class();?> id="ng-app">
    <div id="wrap">
        <section id="headerNav">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a title="Mj-Elteknik" class="navbar-brand" href="<?php print get_bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png" alt="MJ-Elteknik" title="Mj-elteknik logo"></a>
                    </div>
                    <!-- Collect the nav links, forms, and otheindr content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           <ul class="nav navbar-nav">
                           <?php 
                                wp_list_pages('title_li=');
                           ?>
                            </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>
