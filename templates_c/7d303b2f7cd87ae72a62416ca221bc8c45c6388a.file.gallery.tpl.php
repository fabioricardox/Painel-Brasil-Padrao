<?php /* Smarty version Smarty-3.1.12, created on 2013-09-25 19:21:01
         compiled from "./templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:847109800523e3606205352-10716159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d303b2f7cd87ae72a62416ca221bc8c45c6388a' => 
    array (
      0 => './templates/gallery.tpl',
      1 => 1379808008,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1380161444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847109800523e3606205352-10716159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523e36062d0091_62543608',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523e36062d0091_62543608')) {function content_523e36062d0091_62543608($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>Brasil Soluções Criativas - Painel de Controle</title>
<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet"/>
<link href="stylesheets/application.css" media="all" rel="stylesheet"/>
<link href="stylesheets/isotope.css" media="all" rel="stylesheet"/>
<link href="stylesheets/normalize.css" media="all" rel="stylesheet"/>
<link href="stylesheets/fullcalendar.css" media="all" rel="stylesheet"/>
<link href="stylesheets/datatables.css" media="all" rel="stylesheet"/>
<link href="stylesheets/prettify.css" media="all" rel="stylesheet"/>
<link href="stylesheets/classyscroll.css" media="all" rel="stylesheet"/>
<link href="stylesheets/jquery.fancybox.css" media="all" rel="stylesheet"/>
<link href="stylesheets/select2.css" media="all" rel="stylesheet"/>
<link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet"/>
<link href="stylesheets/fontawesome.css" media="all" rel="stylesheet"/>
<link href="stylesheets/style.css" media="all" rel="stylesheet"/>
<link href="stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme"/>
<link href="stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme"/>
<link href="stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme"/>
<link href="stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme"/>

<script src="javascripts/modernizr.custom.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery.mousewheel.js"></script>
<script src="javascripts/jquery.classyscroll.js"></script>
<script src="javascripts/jquery.vmap.min.js"></script>
<script src="javascripts/jquery.vmap.sampledata.js"></script>
<script src="javascripts/jquery.vmap.world.js"></script>
<script src="javascripts/fullcalendar.min.js"></script>
<script src="javascripts/gcal.js"></script>
<script src="javascripts/prettify.js"></script>
<script src="javascripts/jquery.dataTables.min.js"></script>
<script src="javascripts/jquery.fancybox.pack.js"></script>
<script src="javascripts/jquery.sparkline.min.js"></script>
<script src="javascripts/jquery.easy-pie-chart.js"></script>
<script src="javascripts/excanvas.min.js"></script>
<script src="javascripts/jquery.isotope.min.js"></script>
<script src="javascripts/select2.js"></script>
<script src="javascripts/styleswitcher.js"></script>
<script src="javascripts/main.js"></script>
<meta content="width=device-width, initial-scale=1.0" charset="utf-8" name="viewport"/>
<link rel="shortcut icon" href="favicon.png" />
</head>

<body>

<div class="navbar navbar-fixed-top">

    <div class="container-fluid top-bar">
    
        <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown notifications hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="index"><span>Notifications</span><p class="counter"> 4 </p></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><div class="notifications label label-info"> New </div> New user added: Jane Smith </a></li>
                        <li><a href="#"><div class="notifications label label-info"> New </div> Sales targets available </a></li>
                        <li><a href="#"><div class="notifications label label-info"> New </div> New performance metric added </a></li>
                        <li><a href="#"><div class="notifications label label-info"> New </div> New growth data available </a></li>
                    </ul>
                </li>
                <li class="dropdown messages hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Messages</span><p class="counter">3</p></a>
                    <ul class="dropdown-menu messages">
                        <li><a href="#"><img alt="Avatar male2" height="34" src="images/avatar-male2.png" width="34"/> Could we meet today? I wanted... </a></li>
                        <li><a href="#"><img alt="Avatar female" height="34" src="images/avatar-female.png" width="34"/> Important data needs your analysis... </a></li>
                        <li><a href="#"><img alt="Avatar male2" height="34" src="images/avatar-male2.png" width="34"/> Buy Se7en today, it's a great theme... </a></li>
                    </ul>
                </li>
                <li class="dropdown settings hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="index"><span>Settings</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span> Blue </a></li>
                    <li><a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span> Green </a></li>
                    <li><a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span> Orange </a></li>
                    <li><a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span> Magenta </a></li>
                    <li><a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span> Gray </a></li>
                    </ul>
                </li>
                <li class="dropdown user hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="index"><img alt="Avatar male" height="34" src="images/avatar-male.jpg" width="34"/> John 						        Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><a href="index"><i class="icon-user"></i> My Account </a></li>
                    <li><a href="index"><i class="icon-gear"></i> Account Settings </a></li>
                    <li><a href="index"><i class="icon-signout"></i> Logout </a></li>
                    </ul>
                </li>
            </ul><!--.nav navbar-nav pull-right-->
        </div><!--.pull-right-->
    
        <button class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="logo" href="index">se7en</a>
        <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text"/>
        </form>
    </div><!--.container-fluid top-bar-->

    <div class="container-fluid main-nav clearfix">
    
        <div class="nav-collapse">
            <ul class="nav">
                <li class="dashboard"><a class="current" href="index"><span></span>Dashboard </a></li>
                <li class="dropdown ui"><a data-toggle="dropdown" href="#"><span></span> UI <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><a href="buttons">Buttons</a></li>
                    <li><a href="icons">Icons</a></li>
                    <li><a href="components">Components</a></li>
                    <li><a href="widgets">Widgets</a></li>
                    <li><a href="typo">Typography</a></li>
                    <li><a href="grid">Grid Layout</a></li>
                    </ul>
                </li>
                <li class="forms"><a href="forms"><span></span> Forms </a></li>
                <li class="tables"><a href="tables"><span></span> Tables </a></li>
                <li class="charts"><a href="charts"><span></span> Charts </a></li>
                <li class="gallery"><a href="gallery"><span></span> Gallery </a></li>
            </ul>
        </div><!--.nav-collapse-->
    </div><!--.container-fluid main-nav clearfix-->
</div><!--.navbar navbar-fixed-top-->

<!--
	
    ***************** FIM TOPO SITE ********************

-->




<div class="container-fluid">

	<div class="page-title"><h1> Gallery </h1></div>

    <div class="row">
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-picture"></i>Captions </div>
            
                <div class="widget-content padded">
                    <ul class="gallery-grid clearfix">
                        <li>
                            <figure><img alt="Nature1" src="images/nature1.jpg"/><div class="caption"><h3> Path </h3>	<span>by Envato</span></div></figure>
                       </li>
                        <li>
                            <figure><img alt="Nature3" src="images/nature3.jpg"/><div class="caption"><h3> Tree </h3><span>by Envato</span></div></figure>
                        </li>
                        <li>
                            <figure><img alt="Nature2" src="images/nature2.jpg"/><div class="caption"><h3> Leaf </h3><span>by Envato</span></div></figure>
                        </li>
                        <li>
                            <figure><img alt="Nature4" src="images/nature4.jpg"/><div class="caption"><h3> Water </h3><span>by Envato</span></div></figure>
                        </li>
                    </ul>
                </div>
            </div><!--.widget-container-->
        </div><!--.col-lg-12-->
    </div><!--.row-->

    <div class="row">
    
        <div class="col-lg-6">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-th-large"></i>Filtering and Actions 
                
                    <div class="gallery-filters list-inline btn-group pull-right">
                        <a class="btn btn-sm btn-primary-outline selected" data-filter="*" href="gallery/index.html#">All</a>
                        <a class="btn btn-sm btn-primary-outline" data-filter=".filter1" href="gallery/index.html#">Filter 1</a>
                        <a class="btn btn-sm btn-primary-outline" data-filter=".filter2" href="gallery/index.html#">Filter 2</a>
                    </div>
                </div>
            
                <div class="widget-content padded">
                
                    <div class="gallery-container">
                    
                    <a class="gallery-item filter1 fancybox" href="images/image-iso5.png" rel="gallery1" title="This is a caption"><img alt="Image iso5" src="images/image-iso5.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter1 fancybox" href="images/image-iso2.jpg" rel="gallery1" title="This is a caption"><img alt="Image iso2" src="images/image-iso2.jpg"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter2 fancybox" href="images/image-iso3.png" rel="gallery1" title="This is a caption"><img alt="Image iso3" src="images/image-iso3.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter1 fancybox" href="images/image-iso4.png" rel="gallery1" title="This is a caption"><img alt="Image iso4" src="images/image-iso4.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter2 fancybox" href="images/image-iso6.png" rel="gallery1" title="This is a caption"><img alt="Image iso6" src="images/image-iso6.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter2 fancybox" href="images/image-iso.png" rel="gallery1" title="This is a caption"><img alt="Image iso" src="images/image-iso.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter2 fancybox" href="images/image-iso7.png" rel="gallery1" title="This is a caption"><img alt="Image iso7" src="images/image-iso7.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter1 fancybox" href="images/image-iso8.png" rel="gallery1" title="This is a caption"><img alt="Image iso8" src="images/image-iso8.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a><a class="gallery-item filter2 fancybox" href="images/image-iso9.png" rel="gallery1" title="This is a caption"><img alt="Image iso9" src="images/image-iso9.png"/>
                    
                    <div class="actions"><i class="icon-trash"></i><i class="icon-zoom-in"></i><i class="icon-pencil"></i>
                    </div></a>
                </div><!--.widget-content padded-->
            </div><!--.widget-container fluid-height">-->
        </div><!--.col-lg-6-->
    </div><!--.row-->

    <div class="col-lg-6">
    
        <div class="widget-container">
        
            <div class="heading"><i class="icon-camera"></i>Carousel </div>
        
            <div class="widget-content padded">
            
                <div class="carousel slide" id="carousel-example-generic">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
                        <li data-slide-to="1" data-target="#carousel-example-generic"></li>
                        <li data-slide-to="2" data-target="#carousel-example-generic"></li>
                    </ol>
                
                    <div class="carousel-inner">
                        <div class="item active"><img alt="Image5" src="images/image5.jpg"/></div>
                        <div class="item"><img alt="Image6" src="images/image6.png"/></div>
                        <div class="item"><img alt="Image7" src="images/image7.png"/></div>
                    </div>
                
                    <a class="left carousel-control" data-slide="prev" href="gallery/index.html#carousel-example-generic"><span class="icon-angle-left"></span></a>
                    <a class="right carousel-control" data-slide="next" href="gallery/index.html#carousel-example-generic"><span class="icon-angle-right"></span></a>
                </div><!--.carousel slide-->
            </div><!--.widget-content padded-->
        </div><!--.widget-container-->
    </div><!--.col-lg-6-->
</div>
</div><!--.container-fluid-->




</body>
</html>

<!-- Localized --><?php }} ?>