<?php /* Smarty version Smarty-3.1.12, created on 2013-09-25 14:33:41
         compiled from "./templates/forms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1443125168524356b5557bb8-37641471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7417a6a944ba9c69a7b5727712983265bbbd35b8' => 
    array (
      0 => './templates/forms.tpl',
      1 => 1379808007,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1379808011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1443125168524356b5557bb8-37641471',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524356b56a3710_71457168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524356b56a3710_71457168')) {function content_524356b56a3710_71457168($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="page-title"><h1> Forms </h1></div>
    
    <div class="row">
    
        <div class="col-lg-6">
        
            <div class="widget-container fluid-height clearfix">
            
                <div class="heading"><i class="icon-adjust"></i>Form Components </div>
            
                <div class="widget-content padded">
                    <div class="col-lg-12">
                    
                        <form action="forms#" class="form-horizontal">
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Input</label>
                            <div class="col-lg-9">
                            <input class="form-control" placeholder="Text" type="text"/>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Dropdown</label>
                            <div class="col-lg-9">
                                <select class="form-control">
                                    <option value="Category 1">Option 1</option>
                                    <option value="Category 2">Option 2</option>
                                    <option value="Category 3">Option 3</option>
                                    <option value="Category 4">Option 4</option>
                                </select>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Multi-Select</label>
                            <div class="col-lg-9">
                                <select class="form-control" multiple="">
                                    <option value="Category 1">Option 1</option>
                                    <option value="Category 2">Option 2</option>
                                    <option value="Category 3">Option 3</option>
                                    <option value="Category 4">Option 4</option>
                                </select>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Username Input</label>
                            <div class="col-lg-9">
                            
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                        <input class="form-control" placeholder="Username" type="text"/>
                                </div>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Currency Input</label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                        <input class="form-control" type="text"><span class="input-group-addon">.00</span></input>
                                </div>
                            </div>
                        </div><!--form-group-->
                    
                        <fieldset disabled="">
                        
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="disabledInput">Disabled Input</label>    
                                <div class="col-lg-9">
                                    <input class="form-control" id="disabledInput" placeholder="Disabled input" type="text"/>
                                </div>
                            </div><!--form-group-->
                        
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="disabledInput">Disabled Select</label>
                                <div class="col-lg-9">
                                    <select class="form-control" id="disabledSelect">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                            </div><!--form-group-->
                        </fieldset>
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Toggle Switch</label>
                        
                            <div class="col-lg-9 clearfix">        
                                <div class="holder">
                                    <input checked="checked" class="check-ios" id="check" name="check" type="checkbox" value="None"/><label for="check"></label>
                                    <span></span>
                                </div>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Radio Buttons</label>
                        
                            <div class="col-lg-9">
                                <label class="radio">
                                    <input name="optionsRadios1" type="radio" value="option1"/>Option 1
                                </label>
                                <label class="radio">
                                    <input checked="" name="optionsRadios1" type="radio" value="option2"/>Option 2
                                </label>
                                <label class="radio">
                                    <input name="optionsRadios1" type="radio" value="option3"/>Option 3
                                </label>
                                <label class="radio">
                                    <input name="optionsRadios1" type="radio" value="option4"/>Option 4
                                </label>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Radio Buttons</label>
                        
                            <div class="col-lg-9">
                                <label class="radio-inline">
                                    <input name="optionsRadios2" type="radio" value="option1"/>Option 1
                                </label>
                                <label class="radio-inline">
                                    <input checked="" name="optionsRadios2" type="radio" value="option2"/>Option 2
                                </label>
                                <label class="radio-inline">
                                    <input name="optionsRadios2" type="radio" value="option3"/>Option 3
                                </label>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Checkbox</label>
                        
                            <div class="col-lg-9">
                                <label class="checkbox">
                                    <input type="checkbox" value=""/>Checkbox 1
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value=""/>Checkbox 2
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value=""/>Checkbox 3
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value=""/>Checkbox 4
                                </label>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Checkbox</label>
                        
                            <div class="col-lg-9">
                                <label class="checkbox-inline">
                                    <input type="checkbox" value=""/>Checkbox 1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value=""/>Checkbox 2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value=""/>Checkbox 3
                                </label>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-group">
                            <label class="control-label col-lg-3">Textarea</label>
                            <div class="col-lg-9">
                            <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div><!--form-group-->
                    
                        <div class="form-actions col-lg-offset-3 col-lg-9">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-default-outline">Cancel</button>
                        </div>
                    </form>
                    </div><!--col-lg-12-->
                </div>
            </div><!--.widget-container fluid-height clearfix-->
        </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
        
            <div class="row">
            
                <div class="col-lg-12">
                
                    <div class="widget-container fluid-height clearfix">
                    
                        <div class="heading"><i class="icon-adjust"></i>Select2 Dropdowns </div>
                    
                        <div class="widget-content padded">
                        
                            <form>
                            
                                <div class="form-group">
                                <label class="control-label col-lg-3">Select2 Dropdown</label>
                                
                                    <div class="col-lg-9">
                                        <select class="select2able">
                                            <option value="Category 1">Option 1</option>
                                            <option value="Category 2">Option 2</option>
                                            <option value="Category 3">Option 3</option>
                                            <option value="Category 4">Option 4</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Multi-Select2</label>
                                    
                                    <div class="col-lg-9">
                                        <select class="select2able" multiple="">
                                            <option value="Category 1">Option 1</option>
                                            <option value="Category 2">Option 2</option>
                                            <option value="Category 3">Option 3</option>
                                            <option value="Category 4">Option 4</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div><!--.padded-->
                    </div><!--.widget-container fluid-height clearfix-->
                </div><!--.col-lg-12-->
            </div><!--.row-->
        
            <div class="row">
            
                <div class="col-lg-12">
                
                    <div class="widget-container fluid-height clearfix">
                    
                            <div class="heading"><i class="icon-adjust"></i>User Profile </div>
                        
                            <div class="widget-content padded">
                        
                                <form>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">User photo</label><br/>
                                        <img alt="Avatar male2 lg" class="form-photo" height="150" src="images/avatar-male2-lg.png" width="150"/>
                                        <input id="exampleInputFile" type="file"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input class="form-control" id="exampleInputEmail" placeholder="Enter email" type="text"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password</label>
                                        <input class="form-control" id="exampleInputPassword" placeholder="Password" type="password"/>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputPassword">Profile</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button><button class="btn btn-default-outline">Cancel</button>
                            </form>
                            </div>
                    </div>
                </div><!--.col-lg-12-->
            
                <div class="col-lg-12">
                
                    <div class="widget-container">
                    
                        <div class="heading"><i class="icon-adjust"></i>Validations </div>
                    
                        <div class="widget-content padded">
                        
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Warning</label>
                                <input class="form-control" id="inputWarning" type="text"/>
                            </div>
                        
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Error</label>
                                <input class="form-control" id="inputError" type="text"/>
                            </div>
                        
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Success</label>
                                <input class="form-control" id="inputSuccess" type="text"/>
                            </div>
                        </div><!--.widget-content-->
                    </div><!--.widget-container-->
                </div><!--.col-lg-12-->
            </div><!--.row-->
        </div><!--.col-lg-6-->
    </div><!--.row-->
</div><!--.container-fluid-->




</body>
</html>

<!-- Localized --><?php }} ?>