<?php /* Smarty version Smarty-3.1.12, created on 2013-09-25 19:24:25
         compiled from "./templates/tables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:458739795523e36011ac397-80678883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ab83ebb7546e509d6f79315535758f9efb056d' => 
    array (
      0 => './templates/tables.tpl',
      1 => 1379808012,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1380161444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '458739795523e36011ac397-80678883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523e36012942f8_21000830',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523e36012942f8_21000830')) {function content_523e36012942f8_21000830($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="page-title"><h1> Tables </h1></div>
    
    <div class="row">
    
        <div class="col-lg-12">
        
        <div class="widget-container fluid-height clearfix">
        
        <div class="heading"><i class="icon-table"></i>DataTable with Sorting </div>
        
        <div class="widget-content padded clearfix">
        <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
                <th class="check-header hidden-xs"></th>
                <th> First Name</th>
                <th> Last Name</th>
                <th class="hidden-xs"> Email </th>
                <th class="hidden-xs"> Date Added </th>
                <th class="hidden-xs"> Status </th>
                <th></th>
            </thead>
        <tbody>
        <tr>
        	<td class="check hidden-xs"> <input name="optionsRadios1" type="checkbox" value="option1"/> </td>
            <td> Robert </td>
            <td> Kelso  </td>
            <td class="hidden-xs"> robert@gmail.com </td>
            <td class="hidden-xs"> 8-15-2013 </td>
            <td class="hidden-xs"> <span class="label label-success">Approved</span></td>
            <td class="actions">
                 <div class="action-buttons">
                    <a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/> </td>
            <td> John </td>
            <td> Dorian </td>
            <td class="hidden-xs"> john@gmail.com </td>
            <td class="hidden-xs"> 8-15-2013 </td>
            <td class="hidden-xs"> <span class="label label-warning">Pending </span>
            </td>
            <td class="actions">        
                <div class="action-buttons">
                    <a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr>
            <tr>
            	<td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
       			<td> Olivia </td>
       			<td> Benson </td>
        		<td class="hidden-xs"> olivia@gmail.com </td>
        		<td class="hidden-xs"> 8-15-2013 </td>
        		<td class="hidden-xs"> <span class="label label-success">Approved  </span></td>
        		<td class="actions">
                	<div class="action-buttons">
                    	<a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                        <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                        <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        			</div>
        		</td>
           </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
        	<td> Elliot </td>
        	<td> Stabler </td>
        	<td class="hidden-xs"> elliot@gmail.com </td>
        	<td class="hidden-xs"> 8-15-2013 </td>
            <td class="hidden-xs"> <span class="label label-success">Approved </span></td>
            <td class="actions">
            	<div class="action-buttons">
                	<a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        		</div>
        	</td>
        </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
        	<td> Maggie </td>
       		<td> Smith </td>
       	    <td class="hidden-xs"> maggie@gmail.com </td>
            <td class="hidden-xs"> 8-15-2013 </td>
            <td class="hidden-xs"> <span class="label label-warning">Pending </span> </td>
            <td class="actions">
            	<div class="action-buttons">
                	<a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        		</div>
        	</td>
        </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
            <td> Sara </td>
            <td> Johnson </td>
            <td class="hidden-xs"> sara@gmail.com </td>
            <td class="hidden-xs"> 8-15-2013 </td>
            <td class="hidden-xs"> <span class="label label-danger">Rejected </span> </td>
            <td class="actions">            
            	<div class="action-buttons">
                	<a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
            </div>
            </td>
        </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/> </td>
        	<td> Michael </td>
        	<td> Gold </td>
        	<td class="hidden-xs"> michael@gmail.com </td>
        	<td class="hidden-xs"> 8-15-2013 </td>
        	<td class="hidden-xs"> <span class="label label-success">Approved </span></td>
            <td class="actions">
        		<div class="action-buttons">
                	<a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        		</div>
            </td>
        </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
        	<td> Rita </td>
        	<td> Johnson </td>
        	<td class="hidden-xs"> rita@gmail.com </td>
        	<td class="hidden-xs"> 8-15-2013 </td>
       		<td class="hidden-xs"> <span class="label label-success">Approved </span></td>
            <td class="actions">        
                <div class="action-buttons">
                    <a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
        	<td> Dexter </td>
        	<td> Morgan </td>
            <td class="hidden-xs"> dexter@gmail.com </td>
        	<td class="hidden-xs"> 8-15-2013 </td>
        	<td class="hidden-xs"> <span class="label label-success">Approved </span> </td>
        	<td class="actions">        
        		<div class="action-buttons">
                	<a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a>
                    <a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        		</div>
        	</td>
        </tr>
        <tr>
        <td class="check hidden-xs">
        <input name="optionsRadios1" type="checkbox" value="option1"/>
        </td>
        <td> Ben 
        </td>
        <td> Miller 
        </td>
        <td class="hidden-xs"> ben@gmail.com 
        </td>
        <td class="hidden-xs"> 8-15-2013 
        </td>
        <td class="hidden-xs">
        
        <span class="label label-warning">Pending
        </span>
        </td>
        <td class="actions">
        
        <div class="action-buttons"><a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        </div>
        </td>
        </tr>
        <tr>
        <td class="check hidden-xs">
        <input name="optionsRadios1" type="checkbox" value="option1"/>
        </td>
        <td> Barbara 
        </td>
        <td> Fisk 
        </td>
        <td class="hidden-xs"> barbara@gmail.com 
        </td>
        <td class="hidden-xs"> 8-15-2013 
        </td>
        <td class="hidden-xs">
        
        <span class="label label-warning">Pending
        </span>
        </td>
        <td class="actions">
        
        <div class="action-buttons"><a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        </div>
        </td>
        </tr>
        <tr>
        <td class="check hidden-xs">
        <input name="optionsRadios1" type="checkbox" value="option1"/>
        </td>
        <td> Jack 
        </td>
        <td> McCoy 
        </td>
        <td class="hidden-xs"> jack@gmail.com 
        </td>
        <td class="hidden-xs"> 8-15-2013 
        </td>
        <td class="hidden-xs">
        
        <span class="label label-danger">Rejected
        </span>
        </td>
        <td class="actions">
        
        <div class="action-buttons"><a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        </div>
        </td>
        </tr>
        <tr>
        <td class="check hidden-xs">
        <input name="optionsRadios1" type="checkbox" value="option1"/>
        </td>
        <td> Karen 
        </td>
        <td> Fuller 
        </td>
        <td class="hidden-xs"> karen@gmail.com 
        </td>
        <td class="hidden-xs"> 8-15-2013 
        </td>
        <td class="hidden-xs">
        
        <span class="label label-success">Approved
        </span>
        </td>
        <td class="actions">
        
        <div class="action-buttons"><a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        </div>
        </td>
        </tr>
        <tr>
        <td class="check hidden-xs">
        <input name="optionsRadios1" type="checkbox" value="option1"/>
        </td>
        <td> Denise 
        </td>
        <td> Compton 
        </td>
        <td class="hidden-xs"> denise@gmail.com 
        </td>
        <td class="hidden-xs"> 8-15-2013 
        </td>
        <td class="hidden-xs">
        
        <span class="label label-success">Approved
        </span>
        </td>
        <td class="actions">
        
        <div class="action-buttons"><a class="table-actions" href="tables/index.html"><i class="icon-eye-open"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-pencil"></i></a><a class="table-actions" href="tables/index.html"><i class="icon-trash"></i></a>
        </div>
        </td>
        </tr></tbody>
        </table>
        </div>
        </div>
        </div>
    </div>
    
    <div class="row">
    
    <div class="col-lg-6">
    
    <div class="widget-container fluid-height clearfix">
    
    <div class="heading"><i class="icon-table"></i>Basic Table 
    </div>
    
    <div class="widget-content padded clearfix">
    <table class="table">
    <thead>
    <th> First Name 
    </th>
    <th> Last Name 
    </th>
    <th> Email 
    </th>
    <th class="hidden-xs"> Date Added 
    </th>
    <th class="hidden-xs"> Status 
    </th></thead><tbody>
    <tr>
    <td> Robert 
    </td>
    <td> Kelso 
    </td>
    <td> robert@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> John 
    </td>
    <td> Dorian 
    </td>
    <td> john@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-warning">Pending
    </span>
    </td>
    </tr>
    <tr>
    <td> Olivia 
    </td>
    <td> Benson 
    </td>
    <td> olivia@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> Elliot 
    </td>
    <td> Stabler 
    </td>
    <td> elliot@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-danger">Rejected
    </span>
    </td>
    </tr>
    <tr>
    <td> Maggie 
    </td>
    <td> Smith 
    </td>
    <td> maggie@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr></tbody>
    </table>
    </div>
    </div>
    </div>
    
    <div class="col-lg-6">
    
    <div class="widget-container fluid-height clearfix">
    
    <div class="heading"><i class="icon-table"></i>Bordered Table 
    </div>
    
    <div class="widget-content padded clearfix">
    <table class="table table-bordered">
    <thead>
    <th> First Name 
    </th>
    <th> Last Name 
    </th>
    <th> Email 
    </th>
    <th class="hidden-xs"> Date Added 
    </th>
    <th class="hidden-xs"> Status 
    </th></thead><tbody>
    <tr>
    <td> Robert 
    </td>
    <td> Kelso 
    </td>
    <td> robert@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> John 
    </td>
    <td> Dorian 
    </td>
    <td> john@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-warning">Pending
    </span>
    </td>
    </tr>
    <tr>
    <td> Olivia 
    </td>
    <td> Benson 
    </td>
    <td> olivia@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> Elliot 
    </td>
    <td> Stabler 
    </td>
    <td> elliot@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-danger">Rejected
    </span>
    </td>
    </tr>
    <tr>
    <td> Maggie 
    </td>
    <td> Smith 
    </td>
    <td> maggie@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr></tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    
    <div class="row">
    
    <div class="col-lg-6">
    
    <div class="widget-container fluid-height clearfix">
    
    <div class="heading"><i class="icon-table"></i>Striped Table 
    </div>
    
    <div class="widget-content padded clearfix">
    <table class="table table-striped">
    <thead>
    <th> First Name 
    </th>
    <th> Last Name 
    </th>
    <th> Email 
    </th>
    <th class="hidden-xs"> Date Added 
    </th>
    <th class="hidden-xs"> Status 
    </th></thead><tbody>
    <tr>
    <td> Robert 
    </td>
    <td> Kelso 
    </td>
    <td> robert@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> John 
    </td>
    <td> Dorian 
    </td>
    <td> john@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-warning">Pending
    </span>
    </td>
    </tr>
    <tr>
    <td> Olivia 
    </td>
    <td> Benson 
    </td>
    <td> olivia@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> Elliot 
    </td>
    <td> Stabler 
    </td>
    <td> elliot@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-danger">Rejected
    </span>
    </td>
    </tr>
    <tr>
    <td> Maggie 
    </td>
    <td> Smith 
    </td>
    <td> maggie@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr></tbody>
    </table>
    </div>
    </div>
    </div>
    
    <div class="col-lg-6">
    
    <div class="widget-container fluid-height clearfix">
    
    <div class="heading"><i class="icon-table"></i>Condensed Table 
    </div>
    
    <div class="widget-content padded clearfix">
    <table class="table table-condensed">
    <thead>
    <th> First Name 
    </th>
    <th> Last Name 
    </th>
    <th> Email 
    </th>
    <th class="hidden-xs"> Date Added 
    </th>
    <th class="hidden-xs"> Status 
    </th></thead><tbody>
    <tr>
    <td> Robert 
    </td>
    <td> Kelso 
    </td>
    <td> robert@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> John 
    </td>
    <td> Dorian 
    </td>
    <td> john@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-warning">Pending
    </span>
    </td>
    </tr>
    <tr>
    <td> Olivia 
    </td>
    <td> Benson 
    </td>
    <td> olivia@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> Elliot 
    </td>
    <td> Stabler 
    </td>
    <td> elliot@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-danger">Rejected
    </span>
    </td>
    </tr>
    <tr>
    <td> Maggie 
    </td>
    <td> Smith 
    </td>
    <td> maggie@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr>
    <tr>
    <td> Lavar 
    </td>
    <td> Burton 
    </td>
    <td> lavar@gmail.com 
    </td>
    <td class="hidden-xs"> 8-15-2013 
    </td>
    <td class="hidden-xs">
    
    <span class="label label-success">Approved
    </span>
    </td>
    </tr></tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</div><!--.container-fluid-->




</body>
</html>

<!-- Localized --><?php }} ?>