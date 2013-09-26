{extends file="layout.tpl"}


{block name=main}
<div class="container-fluid">

	<div class="page-title"><h1> Charts </h1></div>

    <div class="row">
    
        <div class="col-lg-6">    
           <div class="widget-container">    
             <div class="heading"><i class="icon-bar-chart"></i>Line Charts</div>    
                 <div class="widget-content padded">    
                    <div class="chart-graph line-chart">    
                        <div id="linechart-2"> Loading... </div>
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
                    </div><!--.chart-graph-->
                </div><!--.widget-content-->
            </div><!--.widget-container-->
        </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
        
            <div class="widget-container">
            
                <div class="heading"><i class="icon-bar-chart"></i>Line chart</div>
            
                    <div class="widget-content padded">
                
                        <div class="chart-graph line-chart">            
                            <div id="linechart-3"> Loading...  </div>
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
                        </div><!--.chart-graph-->
                    </div><!--.widget-content-->
                </div><!--.widget-container-->
        </div><!--.col-lg-6-->
    </div><!--.row-->

    <div class="row">
    
        <div class="col-lg-8">
            <div class="widget-container">    
                <div class="heading"><i class="icon-bar-chart"></i>Donut Charts</div>    
                <div class="widget-content clearfix">        
                    <div class="col-sm-4">
                        <div class="pie-chart1 pie-chart pie-number" data-percent="87"> 87% </div>
                    </div><!--.col-sm-4-->
                    
                    <div class="col-sm-4">
                        <div class="pie-chart2 pie-chart pie-number" data-percent="26"> 26% </div>
                    </div><!--.col-sm-4-->
                
                    <div class="col-sm-4">
                        <div class="pie-chart3 pie-chart pie-number" data-percent="54"> 54% </div>
                    </div><!--.col-sm-4-->
                </div><!--.widget-content-->
            </div><!--.widget-container-->
        </div><!--.col-lg-8-->
    
        <div class="col-lg-4">
            <div class="widget-container">    
                    <div class="heading"><i class="icon-bar-chart"></i>Pie Chart </div>        
                    <div class="widget-content padded">            
                        <div class="pie-chart">
                            <div id="pie-chart"></div>
                            <ul class="chart-key">
                                <li><span class="green"></span>Category 1 </li>
                                <li><span class="orange"></span>Category 2 </li>
                                <li><span class="red"></span>Category 3 </li>
                                <li><span class="blue"></span>Category 4 </li>
                            </ul>
                        </div><!--.pie-chart-->
                    </div><!--.widget-content padded-->
            </div><!--.widget-content-->
        </div><!--.col-lg-4-->
    </div><!--.row-->

    <div class="row">
    
        <div class="col-lg-6">    
            <div class="widget-container">        
                <div class="heading"><i class="icon-bar-chart"></i>Composite Graph </div>
                <div class="widget-content padded text-center">
                    <div id="composite-chart-1"> Loading... </div><!--#composite-chart-1-->
                </div><!--.widget-content padded-->
            </div><!--.widget-container-->
        </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
        
            <div class="widget-container">
            
                <div class="heading"><i class="icon-bar-chart"></i>Composite Graph </div><!--.heading-->
            
                <div class="widget-content padded">
                    <div id="linechart-1"> Loading...</div>
                </div><!--.widget-content padded-->
            </div><!--.widget-container-->
        </div><!--.col-lg-6-->
    </div><!--.row-->
</div><!--.container-fluid-->



{/block}