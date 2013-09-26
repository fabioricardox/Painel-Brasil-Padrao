<?php /* Smarty version Smarty-3.1.12, created on 2013-09-21 17:11:16
         compiled from "./templates/buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49393818523e35a4eda553-00939791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb10cb71df0c881a7557703c231fc62ec6afb53c' => 
    array (
      0 => './templates/buttons.tpl',
      1 => 1379808005,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1379808011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49393818523e35a4eda553-00939791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523e35a50dd5c1_39847338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523e35a50dd5c1_39847338')) {function content_523e35a50dd5c1_39847338($_smarty_tpl) {?><!DOCTYPE html>
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
                <li class="dropdown settings hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="widgets/index.html#"><span>Settings</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span> Blue </a></li>
                    <li><a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span> Green </a></li>
                    <li><a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span> Orange </a></li>
                    <li><a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span> Magenta </a></li>
                    <li><a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span> Gray </a></li>
                    </ul>
                </li>
                <li class="dropdown user hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown" href="widgets/index.html#"><img alt="Avatar male" height="34" src="images/avatar-male.jpg" width="34"/> John 						        Smith <b class="caret"></b></a>
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
        <a class="logo" href="index.html">se7en</a>
        <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text"/>
        </form>
    </div><!--.container-fluid top-bar-->

    <div class="container-fluid main-nav clearfix">
    
        <div class="nav-collapse">
            <ul class="nav">
                <li class="dashboard"><a class="current" href="index.html"><span></span>Dashboard </a></li>
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

    <div class="page-title"><h1> Buttons </h1></div>
    
    <div class="row">
    
    	<div class="col-lg-12">
    
    		<div class="widget-container fluid-height clearfix">
    
                <div class="col-lg-6">    
                    <div class="heading"><i class="icon-link"></i>Standard Buttons </div>
                
                        <div class="widget-content padded">
                            
                             <div class="row">
                                    <button class="btn btn-lg btn-default">Default</button>
                                    <button class="btn btn-lg btn-primary">Primary</button>
                                    <button class="btn btn-lg btn-success">Success</button>
                                    <button class="btn btn-lg btn-info">Info</button>
                                    <button class="btn btn-lg btn-warning">Caution</button>
                                    <button class="btn btn-lg btn-danger">Danger</button>
                                </div><!--.row-->
                                
                                <div class="row">
                                    <button class="btn btn-default">Default</button>
                                    <button class="btn btn-primary">Primary</button>
                                    <button class="btn btn-success">Success</button>
                                    <button class="btn btn-info">Info</button>
                                    <button class="btn btn-warning">Caution</button>
                                    <button class="btn btn-danger">Danger</button>
                                </div><!--.row-->
                            
                                <div class="row">
                                    <button class="btn btn-xs btn-default">Default</button>
                                    <button class="btn btn-xs btn-primary">Primary</button>
                                    <button class="btn btn-xs btn-success">Success</button><button class="btn btn-xs btn-info">Info</button><button class="btn btn-xs btn-warning">Caution</button>			                                    <button class="btn btn-xs btn-danger">Danger</button>
                            </div><!--.row-->
                        </div><!--.widget-content padded-->
   				</div><!--.col-lg-6-->
    
                <div class="col-lg-6">
                
                    	<div class="heading"><i class="icon-link"></i>Standard Outlined Buttons </div>
                
                        <div class="widget-content padded">
                        
                            <div class="row">
                                <button class="btn btn-lg btn-default-outline">Default</button>
                                <button class="btn btn-lg btn-primary-outline">Primary</button>
                                <button class="btn btn-lg btn-success-outline">Success</button>
                                <button class="btn btn-lg btn-info-outline">Info</button>
                                <button class="btn btn-lg btn-warning-outline">Caution</button>
                                <button class="btn btn-lg btn-danger-outline">Danger</button>
                            </div><!--.row-->
                            
                            <div class="row">
                                <button class="btn btn-default-outline">Default</button>
                                <button class="btn btn-primary-outline">Primary</button>
                                <button class="btn btn-success-outline">Success</button>
                                <button class="btn btn-info-outline">Info</button>
                                <button class="btn btn-warning-outline">Caution</button>
                                <button class="btn btn-danger-outline">Danger</button>
                            </div><!--.row-->
                            
                            <div class="row">
                                <button class="btn btn-xs btn-default-outline">Default</button>
                                <button class="btn btn-xs btn-primary-outline">Primary</button>
                                <button class="btn btn-xs btn-success-outline">Success</button>
                                <button class="btn btn-xs btn-info-outline">Info</button>
                                <button class="btn btn-xs btn-warning-outline">Caution</button>
                                <button class="btn btn-xs btn-danger-outline">Danger</button>
                            </div><!--.row-->
                      </div><!--.widget-content padded-->
    			</div><!--.col-lg-6-->
    		</div><!--.widget-container fluid-height clearfix-->
    	</div><!--.col-lg-12-->
    </div><!--.row-->
    
    <div class="row">
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height clearfix">
            
                <div class="col-lg-6">
                
                    <div class="heading"><i class="icon-reorder"></i>Button Dropdowns </div>
                
                    <div class="widget-content padded">
                    
                        <div class="row">
                        
                            <div class="btn-group">
                                <button class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-lg btn-success dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-lg btn-info dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-lg btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-lg btn-danger dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        </div><!--.row-->
                    
                        <div class="row">
                    
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                    </div><!--.row-->

                        <div class="row">
                        
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-xs btn-success dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-xs btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group">
                                <button class="btn btn-xs btn-danger dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        </div><!--.row-->
                    </div><!--.widget-content padded-->
                </div><!--.col-lg-6-->
    
                <div class="col-lg-6">
                
                    <div class="heading"><i class="icon-reorder"></i>Outlined Button Dropdowns </div>
            
                    <div class="widget-content padded">
            
                            <div class="row">
                            
                                <div class="btn-group">
                                    <button class="btn btn-lg btn-default-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-lg btn-primary-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-lg btn-success-outline dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-lg btn-info-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-lg btn-warning-outline dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-lg btn-danger-outline dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            </div><!--.row-->
                
                            <div class="row">
                            
                                <div class="btn-group">
                                    <button class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-success-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                                
                                <div class="btn-group">
                                    <button class="btn btn-info-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                                
                                <div class="btn-group">
                                    <button class="btn btn-warning-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                                
                                <div class="btn-group">
                                    <button class="btn btn-danger-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            </div><!--.row-->
                
                            <div class="row">
                            
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-default-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-primary-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-success-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-warning-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                                
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-danger-outline dropdown-toggle" data-toggle="dropdown">Action <span class="caret"> </span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            </div><!--.row-->
                     </div><!--.widget-content padded-->
                </div><!--.col-lg-6-->
            </div><!--.widget-container-->
        </div><!--.col-lg-12-->
    </div><!--.row-->
    
    <div class="row">
    
    	<div class="col-lg-12">
    
    		<div class="widget-container fluid-height clearfix">
    
    			<div class="col-lg-6">
    
                    <div class="heading"><i class="icon-reorder"></i>Split Button Dropdowns </div>

                    <div class="widget-content padded">

                        <div class="row">

                            <div class="btn-group">
                                <button class="btn btn-default">Action</button><button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->

                            <div class="btn-group">
                                <button class="btn btn-primary">Action</button><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->

                            <div class="btn-group">
                                <button class="btn btn-success">Action</button><button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->

                            <div class="btn-group">
                                <button class="btn btn-info">Action</button><button class="btn btn-info dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->

                            <div class="btn-group">
                                <button class="btn btn-warning">Action</button><button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->

                            <div class="btn-group">
                                <button class="btn btn-danger">Action</button><button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        </div><!--.row-->

                        <div class="row">

                            <div class="btn-group dropup">
                                <button class="btn btn-default">Action</button><button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group dropup">
                                <button class="btn btn-primary">Action</button><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group dropup">
                                <button class="btn btn-success">Action</button><button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group dropup">
                                <button class="btn btn-info">Action</button><button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group dropup">
                                <button class="btn btn-warning">Action</button><button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                            
                            <div class="btn-group dropup">
                                <button class="btn btn-danger">Action</button><button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        </div><!--.row-->
                    </div><!--.widget-content padded-->
    			</div><!--.col-lg-6-->
    
    			<div class="col-lg-6">
    
    				<div class="heading"><i class="icon-reorder"></i>Outlined Split Button Dropdowns </div>
    
    					<div class="widget-content padded">
    
    						<div class="row">
    
    							<div class="btn-group">
                                	<button class="btn btn-default-outline">Action</button><button class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
    
                                <div class="btn-group">
                                	<button class="btn btn-primary-outline">Action</button><button class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
    
                                <div class="btn-group">
                                	<button class="btn btn-success-outline">Action</button><button class="btn btn-success-outline dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
    
                                <div class="btn-group">
                                	<button class="btn btn-info-outline">Action</button><button class="btn btn-info-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
    
                                <div class="btn-group">
                                	<button class="btn btn-warning-outline">Action</button><button class="btn btn-warning-outline dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                                
                                <div class="btn-group">
                                	<button class="btn btn-danger-outline">Action</button><button class="btn btn-danger-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            </div><!--.row-->
    
    						<div class="row">
    
                                <div class="btn-group dropup">
                                	<button class="btn btn-default-outline">Action</button><button class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
        
                                <div class="btn-group dropup">
                                	<button class="btn btn-primary-outline">Action</button><button class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
        
                                <div class="btn-group dropup">
                                	<button class="btn btn-success-outline">Action</button><button class="btn btn-success-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
        
                                <div class="btn-group dropup">
                                	<button class="btn btn-info-outline">Action</button><button class="btn btn-info-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
        
                                <div class="btn-group dropup">
                                	<button class="btn btn-warning-outline">Action</button><button class="btn btn-warning-outline dropdown-toggle" data-toggle="dropdown"><span class="caret">
</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
        
                                <div class="btn-group dropup">
                                	<button class="btn btn-danger-outline">Action</button><button class="btn btn-danger-outline dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                        <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                    </ul>
                                </div><!--.btn-group-->
                            </div><!--.row-->
                            
    					</div><!--.widget-content padded-->
    				</div><!--.col-lg-6-->
    			</div><!--.widget-container-->
    	</div><!--.col-lg-12-->
    </div><!--.row-->
    
    <div class="row">
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height clearfix">
            
                <div class="col-lg-6">
                
                    <div class="heading"><i class="icon-reorder"></i>Icon Buttons </div>
                
                    <div class="widget-content padded">
                    
                        <div class="row">
                            <button class="btn btn-default"><i class="icon-home"></i>Home</button>
                            <button class="btn btn-primary"><i class="icon-user"></i>My Profile</button>
                            <button class="btn btn-success"><i class="icon-cog"></i>Settings</button>
                            <button class="btn btn-info"><i class="icon-cloud-download"></i>Download</button>
                            <button class="btn btn-warning"><i class="icon-warning-sign"></i>Warning</button>
                            <button class="btn btn-danger"><i class="icon-trash"></i>Delete</button>
                        </div><!--.row-->
                    
                        <div class="row">
                        
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        
                            <div class="btn-group">
                                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        
                            <div class="btn-group">
                                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        
                            <div class="btn-group">
                                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div><!--.btn-group-->
                        </div><!--.row-->
                    </div><!--.widget-content-->
                    
                </div><!--.col-lg-6-->
            
                <div class="col-lg-6">
                
                    <div class="heading"><i class="icon-reorder"></i>Outlined Icon Buttons</div>
                
                    <div class="widget-content padded">
                    
                        <div class="row">
                            <button class="btn btn-default-outline"><i class="icon-home"></i>Home</button>
                            <button class="btn btn-primary-outline"><i class="icon-user"></i>My Profile</button>
                            <button class="btn btn-success-outline"><i class="icon-cog"></i>Settings</button>
                            <button class="btn btn-info-outline"><i class="icon-cloud-download"></i>Download</button>
                            <button class="btn btn-warning-outline"><i class="icon-warning-sign"></i>Warning</button>
                            <button class="btn btn-danger-outline"><i class="icon-trash"></i>Delete</button>
                        </div><!--.row-->
                    
                        <div class="row">
                        
                            <div class="btn-group"><button class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div>
                        
                            <div class="btn-group">
                                <button class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div>
                        
                            <div class="btn-group"><button class="btn btn-success-outline dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div>
                        
                            <div class="btn-group">
                                <button class="btn btn-info-outline dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div>
                        
                            <div class="btn-group">
                                <button class="btn btn-warning-outline dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i>Options<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="buttons/index.html#"><i class="icon-plus-sign"></i>New Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-edit"></i>Edit Item</a></li>
                                    <li><a href="buttons/index.html#"><i class="icon-remove"></i>Remove Item</a></li>
                                </ul>
                            </div>
                        </div><!--.row-->
                    </div>
                </div><!--.col-lg-6-->
            </div><!--.widget-container-->
        </div><!--.col-lg-12-->
    </div><!--.row-->
    
    <div class="row">
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height clearfix">
            
                <div class="col-lg-6">
                
                    <div class="heading"><i class="icon-reorder"></i>Block Buttons </div>
                
                    <div class="widget-content padded">
                        <button class="btn btn-lg btn-block btn-default">Submit</button><button class="btn btn-lg btn-block btn-primary">Submit</button>
                    </div>
                </div><!--.col-lg-6-->
            
                <div class="col-lg-6">
                
                    <div class="heading"><i class="icon-reorder"></i>Outlined Block Buttons</div>
                    
                    <div class="widget-content padded">
                        <button class="btn btn-lg btn-block btn-default-outline">Submit</button>
                        <button class="btn btn-lg btn-block btn-primary-outline">Submit</button>
                    </div>
                </div><!--.col-lg-6-->
           </div><!--.widget-container-->
        </div><!--.col-lg-12-->
    </div><!--.row-->
</div><!--.container-fluid-->



</body>
</html>

<!-- Localized --><?php }} ?>