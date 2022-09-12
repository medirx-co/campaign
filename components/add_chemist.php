<?php
	// include_once('includes/header.php');
    $chemistData = array(
        'name' => $_POST['name'] ?? null,
        'mobile' => $_POST['mobile'] ??  null,
        'pincode' => $_POST['pincode'] ?? null,
        'locality' => $_POST['locality'] ?? null,
        'city' => $_POST['city'] ?? null,
    );
 
    //CURL REQUEST
    
    if(isset($_POST['add_chemist'])) {
        // print_r($_POST['isActive']);
        $result = curlRequest('/chemist/add/', true, $chemistData);
        if($result->status == 'success') echo "<script>alert('Successfully added!')</script>";
        else echo "<script>alert('Something went wrong!')</script>";
    }
?>
        <div class="authincation h-90 mt-3 mb-3 pb-4">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-10">
                        <div class="authincation-content">
                            <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1 my-1" style="font-size:30px;" ></i></a>
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form p-5">
                                        <form action="" method="post">
                                            
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Name :</strong></label>
                                                <input type="text" class="form-control" value="" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Mobile :</strong></label>
                                                <input type="text" class="form-control" value="" name="mobile">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Pincode :</strong></label>
                                                <input type="text" class="form-control" value="" name="pincode">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Locality :</strong></label>
                                                <input type="text" class="form-control" value=""name="locality">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>City :</strong></label>
                                                <input type="text" class="form-control" value="" name="city">
                                            </div>
                                            
                                            <div class="form-group mt-4 text-center">
                                                <button type="submit" class="btn btn-primary mb-1" name="add_chemist">Add</button>
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
	// include_once('includes/footer.php');
?>
