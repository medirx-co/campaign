<?php


$campaginId = $_REQUEST['id'] ?? null;
if($campaginId) {
    $getCampaginData = BASE_API_URL."/campagin/get/$campaginId/";
    $campaginDataResult = json_decode(file_get_contents($getCampaginData))->result;
    // print_r($orgDataResult);
}

$campaginData = array(
    'campagin_name' => $_POST['campagin_name'] ?? $campaginDataResult->name ?? null,
    'client_id' => $_POST['client_id'] ?? $campaginDataResult->client_id ?? null,
    'isActive' => $_POST['isActive'] ?? $campaginDataResult->is_active ?? 0,
);
$campaginData['isActive'] = (!empty($campaginId) && empty($_POST['isActive']))? 0: $campaginData['isActive'];

//CURL REQUEST


if(isset($_POST['add_campagin'])) {
    // print_r($_POST['isActive']);
    $result = curlRequest('/campagin/add/', $campaginData);
    if($result) echo "<script>alert('Successfully added!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
    
} else if(isset($_POST['edit_campagin'])) {
    $result = curlRequest('/campagin/update/'.$_REQUEST['id'].'/', $campaginData);
    // print_r($_REQUEST);
    
    if($result) echo "<script>alert('Successfully Edited!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
}

    $clientList = BASE_API_URL.'/client/all/';
    $jsonResult = json_decode(file_get_contents($clientList));

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
                                            <!-- <div class="form-group">
                                                <label class="mb-1"><strong>Requried Field</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div> -->
                                            <!-- <div class="form-row mt-4 mb-2">
                                                <div class="form-group col-12">
                                                    <div class="custom-control custom-checkbox ml-1">
                                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                        <label class="custom-control-label" for="basic_checkbox_1">Doctor Card</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="custom-control custom-checkbox ml-1">
                                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_2">
                                                        <label class="custom-control-label" for="basic_checkbox_2">Cashback Card </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="custom-control custom-checkbox ml-1">
                                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_3">
                                                        <label class="custom-control-label" for="basic_checkbox_3"> Tamplates</label>
                                                    </div>
                                                </div>
                                            </div>     -->
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