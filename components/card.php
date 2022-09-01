<?php
	include_once('includes/header.php');
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
                                        <form action="index.html">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Chemical Medical Store</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Location</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>City</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Pincode</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Contact No.</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Payment Mode</strong></label>
                                                <select class="form-control">
                                                    <option class="text-light">--- Select ---</option>
                                                    <option>Paytm</option>
                                                    <option>Amazon</option>
                                                    <!-- <option>None</option> -->
                                                </select>
                                            </div>
                                            <div class="text-start mt-4">
                                                <button type="submit" class="btn btn-primary btn-block">Cashback Card Template</button>
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