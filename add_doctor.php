<?php
	include_once('includes/header.php');
?>
        <div class="authincation h-90 mt-3 mb-3 pb-4">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-8">
                        <div class="authincation-content mt-4">
                            <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1 my-1 mx-1 mt-1" style="font-size:30px;" ></i></a>
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="auth-form">
                                        <form action="index.html">
                                            <div class="form-group">
                                                <label class="mb-1"></label>
                                                <input type="text" class="form-control" placeholder="Enter Doctor Code">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"></label>
                                                <input type="text" class="form-control" value="" placeholder="Enter Doctor Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"></label>
                                                <input type="text" class="form-control" value="" placeholder="Enter Pincode">
                                            </div>
                                            
                                            <div class="form-group mt-4">
                                                <button type="submit" class="btn btn-primary mb-1">Add</button>
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
