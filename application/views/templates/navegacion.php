<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Redes evang&eacute;licas</title>
	
	<!-- core CSS -->
    <link href="<?=base_url('')."assets/css/bootstrap.min.css"?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?=base_url('')."assets/css/font-awesome.min.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/animate.min.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/prettyPhoto.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/main.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/responsive.css"?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('#')?>"><img src="<?=base_url('')."assets/img/logo.png"?>" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('#')?>">Inicio</a></li>
                        <li><a href="<?php echo site_url('nosotrosview')?>">Nosotros</a></li>
                        <li><a href="<?php echo site_url('iglesiasview')?>">Iglesias</a></li>
                        <li><a href="<?php echo site_url('empresasview')?>">Empresas</a></li>
                        <li><a href="<?php echo site_url('serviciosview')?>">Servicios</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('eventosview')?>">Eventos</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('kidsview')?>">Kids</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('tianguisview')?>">Librer&iacute;a</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('materialesview')?>">Materiales</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('radioview')?>">Radio</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('taxiview')?>">Taxi</a>
                                </li>
                            </ul>
                        </li> 
                        
                        <li><a href="<?php echo site_url('auth/login')?>">Ingresar</a></li>
                        <!-- Escribir codigo para el redireccionamiento dependiendo del tipo de usuario que exista, si no esta logueado entonces
                        que aparezca la leyenda ingresar que redireccione al formulario para iniciar sesion, si es administrador entonces que
                        redireccione al panel de administrador, si es editor al de editor y si es de la libreria al de la libreria.-->                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->