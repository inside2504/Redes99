<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Redes evang&eacute;licas</title>
        <meta http-equiv="Content-Type" content="text/html; charset = utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?=base_url('')."assets/img/16x10.png"?>" type="image/x-icon"/>
        <link rel="stylesheet" href="<?=base_url('')."assets/css/layouts/pure.css"?>">
        <link rel="stylesheet" href="<?=base_url('')."assets/css/layouts/side-menu.css"?>">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:200">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="/combo/1.18.13?/css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?=base_url('')."assets/css/layouts/side-menu.css"?>">
        <link rel="stylesheet" href="<?=base_url('')."assets/css/layouts/grids-responsive.css"?>">
    <!--<![endif]-->
  


    
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->


    
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41480445-1', 'purecss.io');
ga('send', 'pageview');
</script>


</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="<?php echo site_url('auth/panel')?>">Bienvenido</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item">
                	<a href="<?php echo site_url('auth/tianadmin')?>" class="pure-menu-link">Tianguis</a>
                </li>
                <li class="pure-menu-item">
                    <a href="<?php echo site_url('/auth/logout')?>" class="pure-menu-link">Salir</a>
                </li>
            </ul>
        </div>
    </div>
