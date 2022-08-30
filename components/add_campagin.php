<?php


$campaginId = $_REQUEST['id'] ?? null;
if($campaginId) {
    $getCampaginData = BASE_API_URL."/campagin/get/$campaginId/";
    $campaginDataResult = json_decode(file_get_contents($getCampaginData))->result;
    // print_r($orgDataResult);
}

$campaginData = array(
    'name' => $_POST['campagin_name'] ?? $campaginDataResult->name ?? null,
    'client_id' => $_POST['client'] ?? $campaginDataResult->client_id ?? null,
    'max_cashback_card' => $_POST['max_cashback_card'] ?? $campaginDataResult->max_cashback_card ?? null,
    'min_invoice_amt' => $_POST['min_invoice_amt'] ?? $campaginDataResult->min_invoice_amt ?? null,
    'min_product_qty' => $_POST['min_product_qty'] ?? $campaginDataResult->min_product_qty ?? null,
    'max_cashback_amt' => $_POST['max_cashback_amt'] ?? $campaginDataResult->max_cashback_amt ?? null,
    'verification_team_id' => $_POST['validation_team'] ?? $campaginDataResult->verification_team_id ?? null,
    'isActive' => $_POST['isActive'] ?? $campaginDataResult->is_active ?? 0,
);
$campaginData['isActive'] = (!empty($campaginId) && empty($_POST['isActive']))? 0: $campaginData['isActive'];

//CURL REQUEST

if(isset($_POST['add_campagin'])) {
    // print_r($_POST['isActive']);
    $result = curlRequest('/campaign/add/', true, $campaginData);
    if($result) echo "<script>alert('Successfully added!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
    
} else if(isset($_POST['edit_campagin'])) {
    $result = curlRequest('/campagin/update/'.$_REQUEST['id'].'/', true, $campaginData);
    // print_r($_REQUEST);
    
    if($result) echo "<script>alert('Successfully Edited!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
}

    $clientList = '/client/all/';
    $jsonResult = curlRequest($clientList);

?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-8">
                        <div class="authincation-content mt-4">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1" style="font-size:30px;" ></i></a>
                                        <h4 class="text-start mb-4">Campaign (Weblink)</h4>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Client Name</strong></label>
                                                
                                                <select name="client" class="form-control" value="<?php echo $campaginData['client_id']; ?>">                                                    
                                                    <?php 
                                                         foreach ($jsonResult->result as $index => $row):?>
                                                        <option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                              
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Enter Campaign Name</strong></label>
                                                <input type="text" class="form-control" value="" name = "campagin_name">
                                            </div>


                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-0" class="w-100"><strong>Max Cashback Card</strong>
                                                            <div class="d-inline-block float-lg-right">
                                                                <input type="checkbox" id="toggle-0" class="toggle-switch"/>
                                                                <span><small></small></span>                                                                
                                                            </div>
                                                            </label>
                                                            <input type="text" name="max_cashback_card" id="" class="form-control input_val" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-1" class="w-100"><strong>Minimum Invoice Amount</strong>
                                                            <div class="d-inline-block float-lg-right">
                                                                <input type="checkbox" id="toggle-1" class="toggle-switch"/>
                                                                <span><small></small></span>
                                                            </div>
                                                            </label>
                                                            <input type="text" name="min_invoice_amt" id="" class="form-control input_val" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-2" class="w-100"><strong>Maxmimum Cashback Amt</strong>
                                                            <div class="d-inline-block float-lg-right">
                                                                <input type="checkbox" id="toggle-2" class="toggle-switch"/>
                                                                <span><small></small></span>
                                                            </div>
                                                            </label>
                                                            <input type="text" name="max_cashback_amt" id="" class="form-control input_val" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-3" class="w-100"><strong>Mininimum Product Qty.(overall)</strong>
                                                            <div class="d-inline-block float-lg-right">
                                                                <input type="checkbox" id="toggle-3" class="toggle-switch"/>
                                                                <span><small></small></span>
                                                            </div>
                                                            </label>
                                                            <input type="text" name="min_product_qty" id="" class="form-control input_val" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-4" class="w-100"><strong>Validation Team</strong>
                                                            <div class="d-inline-block float-lg-right">
                                                                <input type="checkbox" id="toggle-4" class="toggle-switch"/>
                                                                <span><small></small></span>
                                                            </div>
                                                            </label>
                                                            <select name="validation_team" class="form-control input_val" disabled="disabled">
                                                                <option value="1">Client</option>
                                                                <option value="2">Medirx</option>
                                                                <option value="3">Both</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                           
                                            <div class="form-row d-flex justify-content-between mt-2 mb-2">
                                                <div class="form-group">
                                                    <div class="form-check custom-control">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckChecked" <?php echo $campaginData['isActive'] ? 'checked' : '' ?> name="isActive" value="1">
                                                        <label class="form-check-label" for="flexCheckChecked">Active</label>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block" name="add_campagin">Add</button>
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