{extends file="layout.tpl"}


{block name=main}
<div class="container-fluid">

	<div class="page-title"><h1> Components </h1></div>

<div class="row">

    <div class="col-lg-12">
        <ul class="breadcrumb">
            <li><a href="components/index.html#"><i class="icon-home"></i></a></li>
            <li><a href="components/index.html#">UI</a></li>
            <li class="active"> Components </li>
        </ul>
    </div>

<div class="col-lg-6">
    
    <div class="row">
    
        <div class="col-lg-12">
        
            <div class="widget-container">
            
                    <div class="heading"><i class="icon-spinner"></i>Progress bars </div>
            
                    <div class="widget-content padded">
                    
                        <p> General </p>
                    
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                        </div>
                    
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                        </div>
                    
                        <p> Animated </p>
                    
                        <div class="progress progress-striped active">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                        </div>
                    
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                        </div>
                    
                        <p> Stacked </p>
                    
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 30%"></div>    
                            <div class="progress-bar progress-bar-warning" style="width: 20%"></div>    
                            <div class="progress-bar progress-bar" style="width: 30%"></div>
                        </div>
                   </div><!--.widget-content padded-->
            </div><!--widget-content-->
        </div><!--.col-lg-12-->
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height">
            
                <div class="heading tabs"><i class="icon-sitemap"></i>Tabs 
                    <ul class="nav nav-tabs pull-right" data-tabs="tabs" id="tabs">
                        <li class="active"><a data-toggle="tab" href="components/index.html#tab1"><i class="icon-comments"></i><span class="tabs-hidden-tab"> Comments 
                        </span></a></li>
                        <li><a data-toggle="tab" href="components/index.html#tab2"><i class="icon-user"></i><span class="tabs-hidden-tab"> Profile </span></a></li>
                        <li><a data-toggle="tab" href="components/index.html#tab3"><i class="icon-paper-clip"></i><span class="tabs-hidden-tab"> Attachments </span></a></li>
                    </ul>
                </div>
            
                <div class="tab-content padded" id="my-tab-content">
                
                    <div class="tab-pane active" id="tab1">
                        <h3> Overview </h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet auctor purus, non imperdiet sapien dapibus non. Phasellus pretium rutrum elit in cursus. Donec ullamcorper nec massa vel mattis. Curabitur eros metus, dapibus quis est et, dapibus imperdiet dolor. </p>
                    </div>
                
                    <div class="tab-pane" id="tab2">
                        <h3> Profile </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet auctor purus, non imperdiet sapien dapibus non. Phasellus pretium rutrum elit in cursus. Donec ullamcorper nec massa vel mattis. Curabitur eros metus, dapibus quis est et, dapibus imperdiet dolor. </p>
                    </div>
                
                    <div class="tab-pane" id="tab3">
                        <h3> Attachments </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet auctor purus, non imperdiet sapien dapibus non. Phasellus pretium rutrum elit in cursus. Donec ullamcorper nec massa vel mattis. Curabitur eros metus, dapibus quis est et, dapibus imperdiet dolor. </p>
                    </div>
                </div><!--.tab-content padded-->
            </div><!--.widget-container-->
        </div><!--.col-lg-12-->
    
        <div class="col-lg-12">
        
            <div class="widget-container label-container fluid-height">
            
                <div class="heading"><i class="icon-tags"></i>Labels </div>
            
                <div class="widget-content text-center">
                    <h3> Example heading <span class="label label-primary">New</span></h3>
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                    <span class="label label-info">Info</span>
                </div>
            </div><!--.widget-container-->
        </div><!--.col-lg-12-->
    
        <div class="col-lg-6">
    
            <div class="widget-container fluid-height">
        
                <div class="heading"><i class="icon-question"></i>Tooltip </div>
            
                <div class="widget-content padded text-center">
                    <a class="btn btn btn-default" data-toggle="tooltip" id="tooltip-top" style="width:45%" title="Tooltip content">Top </a><br/>
                    <a class="btn btn btn-default" data-toggle="tooltip-right" id="tooltip-right" style="width:45%" title="Tooltip content">Right</a>
                    <a class="btn btn btn-default" data-toggle="tooltip-left" id="tooltip-left" style="width:45%" title="Tooltip content">Left</a>
                    <a class="btn btn btn-default" data-toggle="tooltip-bottom" id="tooltip-bottom" style="width:45%" title="Tooltip content">Bottom popover</a>
                </div>
            </div><!--.widget-container-->
        </div><!--.col-lg-6-->
    
        <div class="col-lg-6">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-comment"></i>Popover </div>
            
                <div class="widget-content padded text-center">
                    <a class="btn btn btn-default" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" data-toggle="popover-top" id="popover-top" style="width:45%" title="">Top </a><br/>
                    <a class="btn btn btn-default" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" data-toggle="popover-right" id="popover-right" style="width:45%" title="">Right</a>
                    <a class="btn btn btn-default" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" data-toggle="popover-left" id="popover-left" style="width:45%" title="">Left</a>
                    <a class="btn btn btn-default" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" data-toggle="popover-bottom" id="popover-bottom" style="width:45%" title="">Bottom</a>
                </div>
            </div><!--.widget-container-->
        </div><!--.col-lg-6-->
    </div><!--.row-->
</div><!--.col-lg-6-->

    <div class="col-lg-6">
    
    <div class="row">
    
        <div class="col-lg-12">
            <div class="widget-container fluid-height">
                <div class="heading"><i class="icon-warning-sign"></i>Alerts and Badges </div>
            
                <div class="widget-content padded">
                
                    <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert" type="button">×</button>Danger! This needs your attention. 
                        <div class="badge pull-right"> 12 </div>
                    </div>
                
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert" type="button">×</button>Success! You have completed your task. 
                        <div class="badge pull-right"> 42 </div>
                    </div>
            
                    <div class="alert alert-info">
                        <button class="close" data-dismiss="alert" type="button">×</button>Information. Please review your task list for the latest. 
                        <div class="badge pull-right"> 106 </div>
                    </div>
            
                    <div class="alert alert">
                        <button class="close" data-dismiss="alert" type="button">×</button>Notes. You have new messages to read. 
                        <div class="badge pull-right"> 2 </div>
                    </div>
                </div><!--.widget-content padded-->
            </div><!--widget-container fluid-height-->
        </div><!--col-lg-12-->
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-collapse"></i>Accordion </div>
            
                <div class="widget-content">
                
                    <div class="panel-group" id="accordion">
                    
                        <div class="panel">
                        
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="components/index.html#collapseOne">1. Welcome</a>
                                </div>
                            </div><!--.panel-heading-->
                        
                            <div class="panel-collapse collapse in" id="collapseOne">
                            
                                <div class="panel-body">
                                    <h2> Introduction </h2> 
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able. 
                                </div>
                            </div><!--.panel-collapse-->
                        </div><!--.panel-->
                    
                        <div class="panel">
                        
                            <div class="panel-heading">    
                                <div class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="components/index.html#collapseTwo">2. Tutorial</a>
                                </div>
                            </div>
                        
                            <div class="panel-collapse collapse" id="collapseTwo">
                            
                                <div class="panel-body">
                                <h2> Tutorial </h2> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able. 
                                </div>
                            </div>
                        </div><!--.panel-->
                    
                        <div class="panel">
                        
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="components/index.html#collapseThree">3. Summary and Quiz</a>
                                </div>
                            </div><!--.panel-heading-->
                        
                            <div class="panel-collapse collapse" id="collapseThree">
                            
                                <div class="panel-body">
                                    <h2> Summary and Quiz </h2> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able. 
                                </div>
                            </div>
                        </div><!--.panel-->
                    </div><!--PANEL-GROUP-->
                </div><!--.widget-content-->
            </div><!--widget-container fluid-height-->
        </div><!--col-lg-12-->
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-book"></i>Pagination </div>
            
                <div class="widget-content padded text-center">
                    <ul class="pagination pagination-lg">
                        <li><a class="icon" href="#"><i class="icon-long-arrow-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a class="icon" href="#"><i class="icon-long-arrow-right"></i></a></li>
                    </ul><br/>
                    <ul class="pagination">
                        <li><a class="icon" href="#"><i class="icon-long-arrow-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a class="icon" href="#"><i class="icon-long-arrow-right"></i></a></li>
                    </ul>
                </div><!--widget-content-->
            </div><!--widget-container fluid-height-->
        </div><!--col-lg-12-->
    
        <div class="col-lg-12">
        
            <div class="widget-container fluid-height">
            
                <div class="heading"><i class="icon-fullscreen"></i>Modal </div>
                    <div class="widget-content padded text-center">
                        <a class="btn btn-primary btn" data-toggle="modal" href="#myModal">Bootstrap Modal</a><a class="btn btn-default btn fancybox" href="#fancybox" rel="gallery1" title="">Fancybox Modal</a>
                    </div>
                </div>
            
                <div class="text-center" id="fancybox" style="display: none">
                    <h2> Welcome </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet auctor purus, non imperdiet sapien dapibus non. Phasellus pretium rutrum elit in cursus. Donec ullamcorper nec massa vel mattis. Curabitur eros metus, dapibus quis est et, dapibus imperdiet dolor. Aenean ac aliquet dolor. Ut porta ultrices justo a tempor. Curabitur eget magna mattis risus accumsan aliquet et a lorem. Pellentesque hendrerit dapibus urna, adipiscing ultrices velit accumsan eget. Fusce eget ultrices turpis, vitae facilisis orci. Curabitur scelerisque consequat vulputate. Aenean felis orci, porttitor ut eros vel, egestas ultricies nunc. Duis suscipit elementum tincidunt. </p>
                </div>
            
                <div class="modal fade" id="myModal">
                
                    <div class="modal-dialog">
                    
                        <div class="modal-content">
                        
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button><h4 class="modal-title"> Se7en </h4>
                            </div>
                        
                            <div class="modal-body">
                                <h1> Welcome </h1>
                            
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet auctor purus, non imperdiet sapien dapibus non. Phasellus pretium rutrum elit in cursus. Donec ullamcorper nec massa vel mattis. Curabitur eros metus, dapibus quis est et, dapibus imperdiet dolor. Aenean ac aliquet dolor. Ut porta ultrices justo a tempor. Curabitur eget magna mattis risus accumsan aliquet et a lorem. Pellentesque hendrerit dapibus urna, adipiscing ultrices velit accumsan eget. Fusce eget ultrices turpis, vitae facilisis orci. Curabitur scelerisque consequat vulputate. Aenean felis orci, porttitor ut eros vel, egestas ultricies nunc. Duis suscipit elementum tincidunt. </p>
                            </div>
                        
                            <div class="modal-footer">
                                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save Changes</button>
                            </div>
                        </div><!--.modal-content-->
                    </div><!--.modal-dialog-->
                </div><!--.modal-->
            </div>
        </div><!--col-lg-12-->
    </div><!--.row-->
    </div><!--.col-lg-6-->
</div>


{/block}