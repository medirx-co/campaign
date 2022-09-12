<?php

$clientId = $_REQUEST['id'] ?? null;
if($clientId) {
    $getClientData = "/client/get/$clientId/";
    $clientDataResult = curlRequest($getClientData)->result;
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
    $result = curlRequest('/client/add/', true, $clientData);
    if($result) echo "<script>alert('Successfully added!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
    
} else if(isset($_POST['edit_client'])) {
    $result = curlRequest('/client/update/'.$_REQUEST['id'].'/', true, $clientData);
    
    
    if($result) echo "<script>alert('Successfully Edited!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
}

    //for dropdown
    $orgList = '/organisation/all/';
    $orgList = curlRequest($orgList);
?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-10">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <a class="d-block text-right"><i class="fa fa-window-close text-danger" style="font-size:30px;" ></i></a>
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