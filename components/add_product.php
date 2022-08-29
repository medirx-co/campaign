<?php
	$campaginList = '/campaign/all/';
    $jsonResult = json_decode(curlRequest($campaginList));
?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content mt-4">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1" style="font-size:30px;" ></i></a>
                                        <h4 class="text-start mb-4">Add Product Form</h4>
                                        <form action="">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Campaign Name</strong></label>
                                                
                                                <select name="client" class="form-control" value="<?php //echo $campaginData['client_id']; ?>">                                                    
                                                    <?php 
                                                         foreach ($jsonResult->result as $index => $row):?>
                                                        <option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                              
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Product Name</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>PTR Value</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-row mt-4 mb-2 align-items-center">
                                                <div class="form-group col-12">
                                                    <!-- <div class="custom-control custom-checkbox ml-1">
                                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                        <label class="custom-control-label" for="basic_checkbox_1">Min Qty</label>
                                                    </div> -->
                                                    <div class="switcher">
                                                        <label for="toggle-0" class="w-100"><strong>Mininimum Qty.</strong>
                                                        <div class="d-inline-block float-lg-right">
                                                            <input type="checkbox" id="toggle-0" class="toggle-switch"/>
                                                            <span><small></small></span>
                                                        </div>
                                                        </label>
                                                        <input type="text" name="min_product_qty" id="" class="form-control input_val" disabled>
                                                    </div>
                                                    <div class="switcher">
                                                        <label for="toggle-1" class="w-100"><strong>Active</strong>
                                                        <div class="d-inline-block float-lg-right">
                                                            <input type="checkbox" id="toggle-1" class="toggle-switch"/>
                                                            <span><small></small></span>
                                                        </div>
                                                        </label>
                                                        <!-- <input type="text" name="min_product_qty" id="" class="form-control input_val" disabled> -->
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group col-xl-6 col-lg-6 col-md-6 col-12">
                                                    
                                                    <input type="text" class="form-control" placeholder="min quantity">
                                                </div> -->
                                                
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
	include_once('includes/footer.php');
    
?>
<script>
    $('.toggle-switch').on('change', (e)=> {
        var corresponding_input = $(e.target).parents('.switcher').find('.input_val');
        var if_custom_select = corresponding_input.parents('.dropdown');
        if($(e.target).prop('checked')) {
            corresponding_input.attr('disabled', false);
            if_custom_select.removeClass('disabled').children('button').removeClass('disabled');
        } else {
            corresponding_input.attr('disabled', true);
            if_custom_select.addClass('disabled').children('button').addClass('disabled');
        }
    })
</script>