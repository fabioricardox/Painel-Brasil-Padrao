<?php /* Smarty version Smarty-3.1.12, created on 2013-09-25 14:32:05
         compiled from "./templates/typo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3304991465243565540cc68-52268876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34337c6ba79a3712cbc00cda921bd53adbc7134a' => 
    array (
      0 => './templates/typo.tpl',
      1 => 1379808013,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1379808011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3304991465243565540cc68-52268876',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5243565553db79_67364548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5243565553db79_67364548')) {function content_5243565553db79_67364548($_smarty_tpl) {?><!DOCTYPE html>
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

	<div class="page-title"><h1> Typography </h1></div>

    <div class="row">
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height clearfix">
            
                <div class="col-lg-4">
                    <div class="heading"><i class="icon-book"></i>Sample Text With Lead 
                </div>
            
                <div class="widget-content padded">
                
                <p class="lead"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. </p>
                
                <p> Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </p>
                
                <p> Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius. </p>
                </div>
            </div><!--.widget-container fluid-height clearfix-->
        
			             <div class="col-lg-4">
            
                <div class="heading"><i class="icon-book"></i>Sample Text </div>
            
                <div class="widget-content padded">
                
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. </p>
                    
                    <p> Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </p>
                    
                    <p> Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. </p>
                </div>
            </div><!--.col-lg-4-->
        
        
            <div class="col-lg-4">
            
                <div class="heading"><i class="icon-font"></i>Headings </div>
            
                <div class="widget-content padded">
                    <h1> h1. Heading 1 </h1>
                    <h2> h2. Heading 2 </h2>
                    <h3> h3. Heading 3 </h3>
                    <h4> h4. Heading 4 </h4>
                    <h5> h5. Heading 5 </h5>
                    <h6> h6. Heading 6 </h6>
                </div>
            </div><!--.col-lg-4-->
        </div><!--.col-lg-12-->
    </div><!--.row-->
</div>

    <div class="row">
    
        <div class="col-lg-4">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-list-ul"></i>Unordered List </div>
            
                <div class="widget-content padded">
                    <ul>
                        <li> Lorem ipsum dolor sit amet, consectetuer. </li>
                        <li> Aliquam tincidunt mauris eu risus. </li>
                        <li> Vestibulum auctor dapibus neque. </li>
                        <li> Nunc dignissim risus id metus. </li>
                        <li> Cras ornare tristique elit. </li>
                        <li> Vivamus vestibulum nulla nec ante. </li>
                        <li> Praesent placerat risus quis eros. </li>
                        <li> Fusce pellentesque suscipit nibh. </li>
                        <li> Integer vitae libero ac risus egestas. </li>
                        <li> Vestibulum commodo felis quis tortor. </li>
                    </ul>
                </div>
            </div><!--widget-container fluid-height-->
        </div><!--col-lg-4-->
    
        <div class="col-lg-4">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-list-ol"></i>Ordered List </div>
            
                <div class="widget-content padded">
                    <ol>
                        <li> Lorem ipsum dolor sit amet, consectetuer. </li>
                        <li> Aliquam tincidunt mauris eu risus. </li>
                        <li> Vestibulum auctor dapibus neque. </li>
                        <li> Nunc dignissim risus id metus. </li>
                        <li> Cras ornare tristique elit. </li>
                        <li> Vivamus vestibulum nulla nec ante. </li>
                        <li> Praesent placerat risus quis eros. </li>
                        <li> Fusce pellentesque suscipit nibh. </li>
                        <li> Integer vitae libero ac risus egestas. </li>
                        <li> Vestibulum commodo felis quis tortor. </li>
                    </ol>
                </div>
            </div>
        </div><!--col-lg-4-->
    
        <div class="col-lg-4">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-reorder"></i>Unstyled List </div>
            
                <div class="widget-content padded">
                    <ul class="no-style">
                        <li> Lorem ipsum dolor sit amet, consectetuer adipis. </li>
                        <li> Aliquam tincidunt mauris eu risus. </li>
                        <li> Vestibulum auctor dapibus neque. </li>
                        <li> Nunc dignissim risus id metus. </li>
                        <li> Cras ornare tristique elit. </li>
                        <li> Vivamus vestibulum nulla nec ante. </li>
                        <li> Praesent placerat risus quis eros. </li>
                        <li> Fusce pellentesque suscipit nibh. </li>
                        <li> Integer vitae libero ac risus egestas placerat. </li>
                        <li> Vestibulum commodo felis quis tortor. </li>
                    </ul>
                </div>
            </div>
        </div><!--.col-lg-4"-->
    </div><!--.row-->

    <div class="row">
        <div class="col-lg-12">
    
        <div class="widget-container fluid-height clearfix">
        
            <div class="col-lg-3">
            
                <div class="heading"><i class="icon-tags"></i>Descriptions </div>
                
                <div class="widget-content padded">
                    <dl>
                        <dt> Description lists </dt>
                        <dd> A description list is perfect for defining terms. </dd>
                        <dt> Euismod </dt>
                        <dd> Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. </dd>
                        <dt> Malesuada porta </dt>
                        <dd> Etiam porta sem malesuada magna mollis euismod. </dd>
                    </dl>
                </div>
            </div><!--.col-lg-3-->
        
             <div class="col-lg-6">
            
                <div class="heading"><i class="icon-quote-left"></i>Blockquotes </div>
            
                <div class="widget-content padded">
                    <blockquote>
                    <p> Lorem ipsum velit ullamco anim pariatur proident eu deserunt laborum. Lorem ipsum ad in nostrud adipisicing cupidatat anim officia ad id cupidatat veniam quis elit ullamco. </p><small>@JohnDoe</small>
                    </blockquote>
                    <blockquote class="pull-right">
                    <p> Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. </p><small>@JaneDoe</small>
                    </blockquote>
                </div>
            </div><!--.col-lg-6-->
        
            <div class="col-lg-3">
            
                <div class="heading"><i class="icon-home"></i>Address </div>
            
                <div class="widget-content padded">
                    <address><strong>Your Company, Inc.</strong><br/>123 Main Avenue<br/>Suite 200<br/>San Francisco, CA 94107<br/><abbr title="Phone"></abbr>(123) 456-7890</address>
                    <address><strong>Full Name</strong>
            <br><a href="mailto:#">john.smith@example.com</a></br></address>
            </div><!--.col-lg-3-->
        </div><!--.widget-container fluid-height clearfix-->
    </div><!--.col-lg-12-->	
    </div><!--.row-->
</div>
</div>




</body>
</html>

<!-- Localized --><?php }} ?>