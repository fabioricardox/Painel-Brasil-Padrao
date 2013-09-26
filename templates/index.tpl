{extends file="layout.tpl"}


{block name=main}
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
            <a href="index">Esqueceu sua senha? Clique aqui</a>
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
</div><!--.container-fluid-->{/block}