<?php
	// include_once('includes/header.php');
    $url = '/CampaignPaymentMode/all/';
    $jsonResult = curlRequest($url)->result;
    
    $chemist_id = $_REQUEST['id'];

    $url = '/chemist/get/'.$chemist_id.'/';
    $chemistDetail = curlRequest($url)->result;


    $cbc_form_data = array(
        'chemist' => $_POST['chemist_id']??null,
        'payment_mode' => $_POST['payment_mode_id']?? null,
    );
    // print_r($chemistDetail);
    if(isset($_REQUEST['cbc_form'])) {
        $result = curlRequest('/CashbackCard/add/', true, $cbc_form_data);
        if($result) echo "<script>alert('Card Genererated successfully!')</script>";
        else echo "<script>alert('Something went wrong!')</script>";
    }
    ?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-12">
                        <div class="authincation-content mt-4">
                            <a class="d-block text-right p-2"><i class="fa fa-window-close text-danger mr-1" ></i></a>
                            <h1 class="text-center pt-4">Generate Cashback</h1>
                            <div class="row no-gutters">
                                <div class="col-xl-6">
                                    <div class="auth-form">
                                        <img src="/images/form.png" alt="" class="rounded mx-auto d-block" style="display: inline; width:100%;">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="auth-form">
                                        <form action="/template" method="post">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Chemical Medical Store</strong></label>
                                                <input type="text" class="form-control bg-light" value="<?php echo  $chemistDetail->name ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="<?php echo $chemist_id; ?>" name="chemist_id">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Location</strong></label>
                                                <input type="text" class="form-control bg-light" value="<?php echo  $chemistDetail->locality ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>City</strong></label>
                                                <input type="text" class="form-control bg-light" value="<?php echo  $chemistDetail->city ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Pincode</strong></label>
                                                <input type="text" class="form-control bg-light" value="<?php echo  $chemistDetail->pincode ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Contact No.</strong> <span class="text-danger">(KYC Mandate)*</span></label>
                                                <input type="text" class="form-control bg-light" value="<?php echo  $chemistDetail->mobile ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Payment Mode</strong></label>
                                                <select class="form-control" name="payment_mode_id">
                                                    <option disabled selected>--- Select ---</option>
                                                    <?php foreach($jsonResult as $row):?>
                                                    <option value="<?php echo $row->cashback_mode_id; ?>"><?php echo $row->cashback_mode_name; ?></option>
                                                    <!-- <option>None</option> -->
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="text-start mt-4">
                                                <button type="submit" class="btn btn-primary btn-block" name="cbc_form">Cashback Card Template</button>
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