<?php
	// include_once('includes/header.php');

// print_r($_REQUEST);
$orgId = $_REQUEST['id'] ?? null;
if($orgId) {
    $getOrgData = BASE_API_URL."/organisation/get/$orgId/";
    $orgDataResult = json_decode(file_get_contents($getOrgData))->result;
    // print_r($orgDataResult);
}

$orgData = array(
    'org_name' => $_POST['org_name'] ?? $orgDataResult->name ?? null,
    'org_logo' => $_FILES['org_logo']['name'] ?? $orgDataResult->logo ?? null,
    'isActive' => $_POST['isActive'] ?? $orgDataResult->is_active ?? 0,
);
$orgData['isActive'] = (!empty($orgId) && empty($_POST['isActive']))? 0: $orgData['isActive'];

//CURL REQUEST


if(isset($_POST['add_organisation'])) {
    // print_r($_POST['isActive']);
    $result = curlRequest('/organisation/add/', $orgData);
    if($result) echo "<script>alert('Successfully added!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
    
} else if(isset($_POST['edit_org'])) {
    $result = curlRequest('/organisation/update/'.$_REQUEST['id'].'/', $orgData);
    // print_r($_REQUEST);
    
    if($result) echo "<script>alert('Successfully Edited!')</script>";
    else echo "<script>alert('Something went wrong!')</script>";
}

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
 
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <div class="form-group ">
                                                <label class="mb-1"><strong>Organization Name</strong></label>
                                                <input type="text" class="form-control" name="org_name" value="<?php echo $orgData['org_name']?>">
                                            </div>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile02" name="org_logo" accept="image/*">
                                                <label class="input-group-text" for="inputGroupFile02"></label>
                                            </div>
                                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                <div class="form-group">
                                                    <div class="form-check custom-control">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckChecked" <?php echo $orgData['isActive'] ? 'checked' : '' ?> name="isActive" value="1">
                                                        <label class="form-check-label" for="flexCheckChecked">Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                
                                             <button type="submit" class="btn btn-primary btn-block" name="<?php echo $orgId ? "edit_org": "add_organisation" ?>"> <?php echo ($orgId ? "Upadte" : "Add")?></button>
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
    </body>

</html>