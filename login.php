<?php
	include_once('includes/header.php');
?>
    
        <div class="authincation" style="display: flex;justify-content: center;align-items: center;height: 100vh;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content mt-4">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1" style="font-size:30px;" ></i></a>
                                        <h4 class="text-center mb-4">Login in your account</h4>
                                        <form action="index-2.php">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Username</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Password</strong></label>
                                                <input type="password" class="form-control" value="">
                                            </div>
                                            <!-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox ml-1">
                                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                        <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Log In</button>
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