<?php /* Smarty version Smarty-3.1.12, created on 2013-09-25 19:20:41
         compiled from "./templates/widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3169498855242472e580567-74662404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac44bc79ea8f3beabee8977e59a8becb55648a1' => 
    array (
      0 => './templates/widgets.tpl',
      1 => 1379808014,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1380161444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3169498855242472e580567-74662404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5242472e7e25b7_10934999',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5242472e7e25b7_10934999')) {function content_5242472e7e25b7_10934999($_smarty_tpl) {?><!DOCTYPE html>
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

	<div class="page-title"><h1>Widgets</h1></div>

    <div class="row">
    
        <div class="col-lg-6">
        
            <div class="widget-container scrollable list task-widget">
                <div class="heading"><i class="icon-list"></i> Task list <i class="icon-plus pull-right"></i>
            </div>
        
            <div class="widget-content scrollbar">
                <ul>
                    <li>
                        <label>
                        <input checked="checked" class="task-input" type="checkbox"/>
                            <span class="task-checkbox"></span>
                            <div class="label label-success pull-right"> Approved </div> Distribute latest marketing
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-success pull-right"> Approved </div> Create the latest mockup
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-warning pull-right"> Pending </div> Code the latest features
                        </label>
                    </li>
                    <li>
                        <label>
                        <input checked="checked" class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-danger pull-right"> Required</div> Coffee time
                        </label>
                    </li>
                    <li>
                        <label>
                        <input checked="checked" class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-success pull-right"> Approved </div> Distribute latest marketing
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-success pull-right"> Approved </div> Pick up lunch
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-warning pull-right"> Pending </div> Send out e-blast
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-warning pull-right"> Pending 
                        </div> Ask for a raise
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-success pull-right"> Approved 
                        </div> Coffe time pt. 2
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-success pull-right"> Approved </div> Bug fixes
                        </label>
                    </li>
                    <li>
                        <label>
                        <input class="task-input" type="checkbox"/>
                        <span class="task-checkbox"></span>
                        <div class="label label-success pull-right"> Approved </div> Happy hour!!!
                        </label>
                    </li>
                </ul>
            </div><!--.widget-content scrollbar-->
        </div><!--.col-lg-6-->
    </div><!--.row-->

	<div class="col-lg-6">

    <div class="widget-container scrollable list rating-widget">
        <div class="heading"><i class="icon-comment"></i> Recent Ratings <i class="icon-refresh pull-right"></i>
    </div>

    <div class="widget-content scrollbar">
        <ul>
            <li>
                <div class="reviewer-info">
                    <div class="star-rating pull-right"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                    </div><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    
                    <div class="review-text">
                    
                    <p> Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
            </li>
            <li>
                <div class="reviewer-info">
                
                <div class="star-rating pull-right"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                </div><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a><em> on 8/20/2013</em>
                </div>
                
                <div class="review-text">
                
                <p> Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy. </p>
                </div>
            </li>
            <li>
                
                <div class="reviewer-info">
                
                <div class="star-rating pull-right"><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                </div><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a><em> on 8/20/2013</em>
                </div>
                
                <div class="review-text">
                
                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. </p>
                
                <p> Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                </div>
            </li>
            <li>
                
                <div class="reviewer-info">
                
                <div class="star-rating pull-right"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i>
                </div><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a><em> on 8/20/2013</em>
                </div>
                
                <div class="review-text">
                
                <p> Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                </div>
            </li>
            <li>
                
            <div class="reviewer-info">
            
            <div class="star-rating pull-right"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
            </div><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a><em> on 8/20/2013</em>
            </div>
            
            <div class="review-text">
            
            <p> Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy. </p>
            </div>
            </li>
            <li>
                
            <div class="reviewer-info">
            
            <div class="star-rating pull-right"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
            </div><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a><em> on 8/20/2013</em>
            </div>
            
            <div class="review-text">
            
            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. </p>
            
            <p> Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
            </div>
            </li>
        </ul>
    </div><!--.widget-content scrollbar-->
</div><!--.col-lg-6-->
</div>
</div>

    <div class="row">
        <div class="col-lg-6">
            <div class="widget-container">
                <div class="heading">
                    <i class="icon-map-marker"></i> Interactive global map 
                    <i class="icon-plus pull-right"></i>
                    <i class="icon-refresh pull-right"></i>
                </div>
    
                <div class="widget-content">
                    <div class="map" id="vmap" style="height: 450px;"></div>
                </div>
            </div>
        </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
        
            <div class="widget-container scrollable list rollodex">
            
                <div class="heading">
                <i class="icon-comment"></i> Rollodex 
                <i class="icon-plus pull-right"></i>
                <i class="icon-search pull-right"></i>
                <i class="icon-refresh pull-right"></i>
            </div>
            
                <div class="widget-content scrollbar">
            
                <div class="roll-title"> A </div>
                <ul>
                    <li><img alt="Avatar female" height="30" src="images/avatar-female.png" width="30"/><a href="widgets/index.html">Joan Andrews</a></li>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">Jose Anderson</a></li>
                    <li><img alt="Avatar male2" height="30" src="images/avatar-male2.png" width="30"/><a href="widgets/index.html">Phil Aaron</a></li>
                </ul>
            
                <div class="roll-title"> B </div>
                <ul>
                    <li><img alt="Avatar female" height="30" src="images/avatar-female.png" width="30"/><a href="widgets/index.html">Samatha Brown</a></li>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">Chris Baker</a></li>
                    <li><img alt="Avatar female2" height="30" src="images/avatar-female2.png" width="30"/><a href="widgets/index.html">Kristin Blues</a></li>
                </ul>
            
                <div class="roll-title"> C </div>
                <ul>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">Adam Carter</a></li>
                    <li><img alt="Avatar male2" height="30" src="images/avatar-male2.png" width="30"/><a href="widgets/index.html">Greg Campbell</a></li>
                    <li><img alt="Avatar female2" height="30" src="images/avatar-female2.png" width="30"/><a href="widgets/index.html">Judy Collins</a></li>
                </ul>
            
                <div class="roll-title"> D </div>
                <ul>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                </ul>
            
                <div class="roll-title"> E </div>
                <ul>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                </ul>
            
                <div class="roll-title"> F </div>
                <div class="roll-title"> G  </div>
                <div class="roll-title"> H </div>
                <div class="roll-title"> I </div>
                <div class="roll-title"> J </div>
                <ul>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                </ul>
                <div class="roll-title"> K </div>
                <div class="roll-title"> L </div>
                <div class="roll-title"> M </div>
                <div class="roll-title"> N </div>
                <div class="roll-title"> O </div>
                <div class="roll-title"> P </div>
                <div class="roll-title"> Q </div>
                <div class="roll-title"> R </div>
                <div class="roll-title"> S </div>
                <ul>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">John Smith</a></li>
                    <li><img alt="Avatar male2" height="30" src="images/avatar-male2.png" width="30"/><a href="widgets/index.html">Brian Sullivan</a></li>
                    <li><img alt="Avatar male" height="30" src="images/avatar-male.jpg" width="30"/><a href="widgets/index.html">Chris Stevens</a></li>
                </ul>
                <div class="roll-title"> T </div>
                <div class="roll-title"> U </div>
                <div class="roll-title"> V </div>
                <div class="roll-title"> W </div>
                <div class="roll-title"> X </div>
                <div class="roll-title"> Y </div>
                <div class="roll-title"> Z </div>
            </div><!--.SCROLLBAR-->
            </div>
        </div><!--.col-lg-6-->
    </div><!--.ROW-->

    <div class="row">
    
        <div class="col-lg-6">
        
            <div class="widget-container">
            
                <div class="heading">
                <i class="icon-calendar"></i> Calendar 
                <i class="icon-plus pull-right"></i>
                <i class="icon-refresh pull-right"></i>
            </div>
            
                <div class="widget-content padded">
                    <div id="calendar"></div>
                </div>
            </div>
        </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
    
        <div class="widget-container scrollable chat">
        
            <div class="heading">
                <i class="icon-comments"></i> Chat Widget 
                <i class="icon-smile pull-right"></i>
            </div>
        
            <div class="widget-content padded scrollbar">
            <ul>
                <li><img alt="Avatar male" height="50" src="images/avatar-male.jpg" width="50"/>
                    <div class="bubble"><a class="user-name" href="widgets/index.html">John Smith</a>
                    
                    <p class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                    </div>
                </li>
                <li class="current-user"><img alt="Avatar female" height="50" src="images/avatar-female.jpg" width="50"/>
                
                    <div class="bubble"><a class="user-name" href="widgets/index.html">Jane Smith</a>
                    
                    <p class="message"> Donec odio. Quisque volutpat mattis eros. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                    </div>
                </li>
                <li><img alt="Avatar male" height="50" src="images/avatar-male.jpg" width="50"/>
            
                    <div class="bubble"><a class="user-name" href="widgets/index.html">John Smith</a>
                    
                    <p class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                    </div>
                </li>
                <li>
                    <img alt="Avatar male" height="50" src="images/avatar-male.jpg" width="50"/>
                    
                    <div class="bubble"><a class="user-name" href="widgets/index.html">John Smith</a>
                    
                    <p class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. </p><em class="time"><i class="icon-time"></i>10 min ago</em>
                    </div>
                </li>
            </ul>
            </div>
        
            <div class="post-message">
                <input class="form-control" placeholder="Write your message here…" type="text"/>
                <input class="btn btn-primary" type="submit" value="Post"/>
            </div>
        </div>
    </div><!--.col-lg-6-->
    </div><!--.row-->
</div>



</body>
</html>

<!-- Localized --><?php }} ?>