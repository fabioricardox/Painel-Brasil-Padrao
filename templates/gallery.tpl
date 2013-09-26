{extends file="layout.tpl"}


{block name=main}

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


{/block}