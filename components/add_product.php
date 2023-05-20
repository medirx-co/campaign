<?php
	$campaginList = '/campaign/all/';
    $jsonResult = curlRequest($campaginList);
    $product = [
        'name' => $_POST['product_name']?? null,
        'ptr' => $_POST['ptr_value']?? null,
        'campaign' => $_POST['campaign_id']?? null,
        'min_quantity' => $_POST['min_product_qty']?? null,
        
    ];
    if(isset($_POST['add_product'])) {
        $url = '/product/add/';
        $result = curlRequest($url,true, $product);
        if($result->status =="success") {
            echo "<script>alert('Product added successfully!')</script>";
        } else {
            echo "<script>alert('Something went wrong!')</script>";
        }
    }
?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-10">
                        <div class="authincation-content mt-4">
                            <div class="row no-gutters justify-content-center">
                                <div class="col-xl-10">
                                    <div class="auth-form">
                                        <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1" style="font-size:30px;" ></i></a>
                                        <h4 class="text-start mb-4">Add Product Form</h4>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Campaign Name</strong></label>
                                                
                                                <select name="campaign_id" class="form-control" value="<?php //echo $campaginData['client_id']; ?>">                                                    
                                                    <?php 
                                                         foreach ($jsonResult->result as $index => $row):?>
                                                        <option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                              
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Product Name</strong></label>
                                                <input type="text" class="form-control" value="" name="product_name">
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 col-12">
                                                    <label class="mb-1"><strong>PTR Value</strong></label>
                                                    <input type="text" class="form-control" value="" name="ptr_value">
                                                </div>
                                                    <div class="form-group align-items-center col-md-6 col-lg-6 col-xl-6 col-12">
                                                        <div class="switcher">
                                                            <label for="toggle-1" class="w-100"><strong>Mininimum Qty.</strong>
                                                            <div class="d-inline-block float-lg-right">
                                                                <input type="checkbox" id="toggle-1" class="toggle-switch"/>
                                                                <span><small></small></span>
                                                            </div>
                                                            </label>
                                                            <input type="text" name="min_product_qty" id="" class="form-control input_val" disabled>
                                                        </div>
                                                    </div> 
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary btn-block" name="add_product">Add</button>
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