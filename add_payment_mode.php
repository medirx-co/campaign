<?php
	include_once('includes/header.php');
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
                                        <h4 class="text-center mb-4">Assign Campagin Payment Mode</h4>
                                        <form action="">
                                            <div class="form-group">
                                                <label class="mb-1"><h5><strong>Select Campagin</strong></h5></label>
                                                <select class="form-control">
                                                    <option>Choose...</option>
                                                    <option>Amazon</option>
                                                    <option>PhonePe</option>
                                                    <option>Flipkart</option>
                                                </select>
                                            </div>
                                            <div class="form-row d-flex justify-content-between mt-3 mb-2 mx-2">
                                                <div class="form-group">
                                                    <div class="form-check custom-control">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">Amazon</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row d-flex justify-content-between mt-2 mb-2 mx-2">
                                                <div class="form-group">
                                                    <div class="form-check custom-control">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">PhonePe</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row d-flex justify-content-between mt-2 mb-2 mx-2">
                                                <div class="form-group">
                                                    <div class="form-check custom-control">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">Flipkart</label>
                                                    </div>
                                                </div>
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


        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/deznav-init.js"></script>
        