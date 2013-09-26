{extends file="layout.tpl"}


{block name=main}
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


{/block}