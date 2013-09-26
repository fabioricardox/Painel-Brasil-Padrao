{extends file="layout.tpl"}


{block name=main}

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


{/block}