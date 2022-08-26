<?php

$clientId = $_REQUEST['id'] ?? null;
if($clientId) {
    $getClientData = BASE_API_URL."/client/get/$clientId/";
    $clientDataResult = json_decode(file_get_contents($getClientData))->result;
    // print_r($orgDataResult);
}

$clientData = array(
    'org_id' => $_POST['organisation'] ?? $clientDataResult->name ?? null,
    'name' => $_POST['client_name'] ?? $clientDataResult->name ?? null,
    'isActive' => $_POST['isActive'] ?? $clientDataResult->is_active ?? 0,
);
$clientData['isActive'] = (!empty($orgId) && empty($_POST['isActive']))? 0: $clientData['isActive'];

// print_r($_REQUEST);
if(isset($_POST['add_client'])) {
    // print_r($_POST['isActive']);
    $result = curlRequest('/client/add/', $clientData);
    if($result) echo "<script>alert('Successfully added!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
    
} else if(isset($_POST['edit_client'])) {
    $result = curlRequest('/client/update/'.$_REQUEST['id'].'/', $clientData);
    
    
    if($result) echo "<script>alert('Successfully Edited!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
}

    //for dropdown
    $orgList = BASE_API_URL.'/organisation/all/';
    $orgList = json_decode(file_get_contents($orgList));
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

                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Client Name</strong></label>
                                                
                                                <select name="organisation" class="form-control" value="<?php echo $clientData['org_id']; ?>">                                                    
                                                    <?php 
                                                        foreach ($orgList->result as $index => $row):?>
                                                        <option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                              
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Clients Name</strong></label>
                                                <input type="text" class="form-control"  value="<?php echo $clientData['name']; ?>" name="client_name">
                                            </div>
                                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                <div class="form-group">
                                                    <div class="form-check custom-control">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckChecked" <?php echo $clientData['isActive'] ? 'checked' : '' ?> name="isActive" value="1">
                                                        <label class="form-check-label" for="flexCheckChecked">Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-0"><strong>Mininimum Cashback Card</strong>
                                                                <input type="checkbox" id="toggle-0"/>
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                        <input type="text" name="" id="" class="form-control">
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-1"><strong>Mininimum Invoice Amount</strong>
                                                                <input type="checkbox" id="toggle-1"/>
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                        <input type="text" name="" id="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-2"><strong>Mininimum Cashback Amt</strong>
                                                                <input type="checkbox" id="toggle-2"/>
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                        <input type="text" name="" id="" class="form-control">
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-3"><strong>Mininimum Product Qty.(overall)</strong>
                                                                <input type="checkbox" id="toggle-3"/>
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                        <input type="text" name="" id="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="switcher">
                                                            <label for="toggle-4"><strong>Validation Team</strong>
                                                                <input type="checkbox" id="toggle-4"/>
                                                                <span><small></small></span>
                                                            </label>
                                                        </div>
                                                        <input type="text" name="" id="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                               
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block" name="<?php echo $clientId ? "edit_client": "add_client" ?>"> <?php echo ($clientId ? "Upadte" : "Add")?></button>
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


        <!-- <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/deznav-init.js"></script> -->
        <script>
            $(document).ready(function() {
                $('.switch__label').click(function() {
                    $('body').toggleClass('switch-bg');    
                    $('.switch').toggleClass('switch-border');    
                });
            });
        </script>
    </body>

</html>