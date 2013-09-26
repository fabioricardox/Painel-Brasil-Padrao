<?php /* Smarty version Smarty-3.1.12, created on 2013-09-25 19:11:12
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1262680632523e35905ae4b9-92811332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1380161470,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1380161444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262680632523e35905ae4b9-92811332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523e35906a6f04_13314307',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523e35906a6f04_13314307')) {function content_523e35906a6f04_13314307($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="login">
    
        <div class="login-container"><img alt="Brasil Soluções" src="images/brasil.png" width="184" height="91">
        
            <form>
              <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                        <input class="form-control" placeholder="Email" type="text"/>
                    </div><!--.input-group-->
                </div><!--.form-group-->
            
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                        <input class="form-control" placeholder="Password" type="password"/>
                    </div><!--.input-group-->
                </div><!--.form-group-->
            
                <div class="form-group">
                <label class="checkbox"><input type="checkbox"/>Lembrar senha</label>
                </div><!--.form-group-->
            
                <div class="btn btn-lg btn-primary login-submit"> Entrar </div>
            </form>
            <a href="index">Esqueceu sua senha?</a>
        </div><!--.login-container-->
    </div><!--.login-->

    <div class="row">
        <div class="col-lg-12">
            <div class="widget-container stats-container">
                <div class="col-md-3">
                    <div class="number">
                        <div class="icon globe"></div> 86<small>%</small>
                    </div><!--.number-->
                    <div class="text"> Overall growth </div><!--.text-->
                </div><!--.col-md-3-->
    
                <div class="col-md-3">
                    <div class="number">
                        <div class="icon visitors"></div> 
                            613                     
                     </div><!--.number-->
                        <div class="text"> Unique visitors </div><!--.text-->
                </div><!--.col-md-3-->
    
                <div class="col-md-3">
                    <div class="number">
                        <div class="icon money">
                        </div><small>$</small>924 
                     </div><!--.number-->
                     <div class="text"> Sales </div>
                </div><!--.col-md-3-->
    
                <div class="col-md-3">
                    <div class="number">
                        <div class="icon chat-bubbles">
                        </div><!--.chat-bubbles--> 325 
                    </div><!--.number-->
                
                    <div class="text"> New followers </div>
                </div><!--.col-md-3-->
            </div><!--.widget-container stats-container-->
        </div><!--.col-lg-12-->
    </div><!--.row-->

    <div class="row">
    
        <div class="col-lg-6">
        
            <div class="widget-container">
            
                <div class="heading">
                    <div class="pull-right btn-group" data-toggle="buttons">
                    <label class="btn btn-sm btn-default-outline active">Day<input id="option1" name="options" type="radio"/></label>
                    <label class="btn btn-sm btn-default-outline">Week<input id="option2" name="options" type="radio"/></label>
                    <label class="btn btn-sm btn-default-outline">Month<input id="option3" name="options" type="radio"/></label>
                    </div><!--.pull-right--><i class="icon-bar-chart"></i>Growth over time 
                </div><!--.heading-->
            
                    <div class="widget-content padded">                    
                            <div class="chart-graph line-chart">                        
                                <div id="linechart-1"> Loading... </div><!--# linechart-1-->
                                    <ul class="chart-text-axis">
                                        <li> 1 </li>
                                        <li> 2 </li>
                                        <li> 3 </li>
                                        <li> 4 </li>
                                        <li> 5 </li>
                                        <li> 6 </li>
                                        <li> 7 </li>
                                        <li> 8 </li>
                                        <li> 9 </li>
                                        <li> 10 </li>
                                        <li> 11 </li>
                                        <li> 12 </li>
                                    </ul>
                            </div><!--.chart-graph -->
                        </div><!--.widget-content padded-->                        
                    </div><!--.widget-content-->
            </div><!--.col-lg-6 -->
        
            <div class="col-lg-3 col-sm-6">            
                <div class="widget-container">    
                    <div class="heading"><i class="icon-adjust"></i>Retention<i class="icon-refresh pull-right"></i></div><!--.heading-->                
                    <div class="widget-content">        
                        <div class="pie-chart1 pie-chart pie-number" data-percent="73"> 73% </div><!--.pie-chart1-->
                    </div><!--.widget-content-->
                </div><!--.widget-container-->
            </div><!--.col-lg-3-->
        
            <div class="col-lg-3 col-sm-6">            
                <div class="widget-container">        
                        <div class="heading"><i class="icon-adjust"></i>New users<i class="icon-refresh pull-right"></i></div><!--.heading-->        
                        <div class="widget-content">
                                <div class="pie-chart2 pie-chart pie-number" data-percent="36"> 26% </div><!--.pie-chart2-->
                        </div><!--.widget-content-->
                </div><!--.widget-container-->                
            </div><!--.col-lg-3-->
            
    </div><!--.row-->

    <div class="row">
    
        <div class="col-lg-4">
        
            <div class="widget-container small">
            
                <div class="heading"><i class="icon-signal"></i>Views Today<i class="icon-refresh pull-right"></i>
                </div><!--.heading-->
            
                <div class="widget-content padded">
                
                    <div class="bar-chart-widget">
                    
                        <div class="bar-chart-info">        
                            <div class="chart-number"><i class="icon-long-arrow-up"></i>246 </div>
                        </div><!--.bar-chart-info-->
                    
                        <div class="chart-graph">
                        
                            <div id="barcharts"> Loading... </div>
                            <ul class="chart-text-axis">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                                <li> 6 </li>
                                <li> 7 </li>
                                <li> 8 </li>
                                <li> 9 </li>
                                <li> 10 </li>
                                <li> 11 </li>
                                <li> 12 </li>
                            </ul><!--.chart-text-axis-->
                        </div><!--.chart-graph-->
                    </div><!--.bar-chart-widget-->
                </div><!--.widget-content padded-->
            </div><!--.widget-container small-->
        </div><!--.col-lg-4-->
        
        <div class="col-lg-4">        
            <div class="widget-container small">        
                <div class="heading"><i class="icon-signal"></i>Growth<i class="icon-refresh pull-right"></i></div>
                
                <div class="widget-content padded">        
                    <div class="bar-chart-widget">            
                        <div class="bar-chart-info">        
                            <div class="chart-number"><i class="icon-long-arrow-up"></i>42% </div>
                        </div><!--.bar-chart-info-->
                
                        <div class="chart-graph">                    
                            <div id="barcharts2"> Loading... </div>
                            <ul class="chart-text-axis">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                                <li> 6 </li>
                                <li> 7 </li>
                                <li> 8 </li>
                                <li> 9 </li>
                                <li> 10 </li>
                                <li> 11 </li>
                                <li> 12 </li>
                            </ul><!--.chart-text-axis-->
                        </div><!--.chart-graph-->
                    </div><!--.bar-chart-widget-->
                </div><!--.widget-content padded-->
            </div><!--.widget-container small-->
        </div><!--.col-lg-4-->
        
        <div class="col-lg-4">        
            <div class="widget-container small">            
                <div class="heading"><i class="icon-signal"></i>Today's Sales<i class="icon-refresh pull-right"></i></div>                
                    <div class="widget-content padded">        
                        <div class="bar-chart-widget">            
                            <div class="bar-chart-info">        
                                <div class="chart-number"><i class="icon-long-arrow-up"></i>$630 </div><!--.chart-number-->
                            </div><!--.bar-chart-info-->
                    
                            <div class="chart-graph">            
                                <div id="barcharts3"> Loading... </div><!--#barcharts3-->
                                <ul class="chart-text-axis">
                                    <li> 1 </li>
                                    <li> 2 </li>
                                    <li> 3 </li>
                                    <li> 4 </li>
                                    <li> 5 </li>
                                    <li> 6 </li>
                                    <li> 7 </li>
                                    <li> 8 </li>
                                    <li> 9 </li>
                                    <li> 10 </li>
                                    <li> 11 </li>
                                    <li> 12 </li>
                                </ul><!--.chart-text-axis-->
                            </div><!--.chart-graph-->
                        </div><!--.bar-chart-widget-->
                    </div><!--.widget-content padded-->
            </div><!--.widget-container small-->
        </div><!--.col-lg-4-->
        
    </div><!--.row-->

    <div class="row">
    <div class="col-lg-6">
            <div class="widget-container map-container">
                <div class="heading">
                     <i class="icon-map-marker"></i>Mapa global interativo <i class="icon-plus pull-right"></i>
                      <i class="icon-refresh pull-right"></i>
                 </div><!--.heading-->
             <div class="widget-content">
                  <div class="map" id="vmap" style="height: 450px;"></div>
             </div>
            </div>
         </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
        
            <div class="widget-container scrollable chat">
                <div class="heading"><i class="icon-comments"></i>Chat Widget<i class="icon-smile pull-right"></i></div><!--.heading-->
            

                <div class="widget-content padded scrollbar">
                    <ul>
                        <li><img alt="Avatar male" height="50" src="images/avatar-male.jpg" width="50"/>                        
                            <div class="bubble"><a class="user-name" href="index.html">John Smith</a>
                            
                            <p class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                            </div>
                        </li>
                    	<li class="current-user"><img alt="Avatar female" height="50" src="images/avatar-female.png" width="50"/>
                    
                    		<div class="bubble"><a class="user-name" href="index.html">Jane Smith</a>
                    
                            <p class="message"> Donec odio. Quisque volutpat mattis eros. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                            </div>
                    	</li>
                    	<li><img alt="Avatar male" height="50" src="images/avatar-male.jpg" width="50"/>
                    
                            <div class="bubble"><a class="user-name" href="index.html">John Smith</a>
                            
                            <p class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                            </div>
                        </li>
                    	<li><img alt="Avatar male" height="50" src="images/avatar-male.jpg" width="50"/>
                    
                    		<div class="bubble"><a class="user-name" href="index.html">John Smith</a>
                    
                    		<p class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                    			</div>
                    	</li>
                    </ul>
                </div><!--.widget-content padded scrollbar-->
            
                <div class="post-message">
                <input class="form-control" placeholder="Write your message here…" type="text"/>
                <input class="btn btn-primary" type="submit" value="Post"/>
                </div>
            </div><!--.widget-container scrollable chat-->
        </div><!--.col-lg-6-->
    </div><!--row-->
</div><!--.container-fluid-->

</body>
</html>

<!-- Localized --><?php }} ?>