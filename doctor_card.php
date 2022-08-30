<?php
	include_once('includes/header.php');
?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-12">
                        <div class="authincation-content mt-4 mb-4">
                            <a class="d-block text-right p-2"><i class="fa fa-window-close text-danger mr-1" ></i></a>
                            <h1 class="text-center pt-4">Generate Card</h1>
                            <div class="row no-gutters">
                                <div class="col-xl-6">
                                    <div class="auth-form">
                                        <img src="images/form.png" alt="" class="rounded mx-auto d-block" style="display: inline; width:100%;">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="auth-form">
                                        <div id="example_filter" class=" row dataTables_filter justify-content-end">
                                            <label class="mb-1 col-form-label">
                                                <input type="search" class="form-control" placeholder="Enter Pincode..">
                                            </label>
                                        </div>
                                        <form action="index.html">
                                            <div class="form-group">
                                                <label class="mb-1 mt-1" for=""><strong>Select Doctor</strong></label>
                                                <select class="form-control">
                                                    <option>Choose...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 mt-1" for=""><strong>Select Chemist 1</strong></label>
                                                <select class="form-control">
                                                    <option>Choose...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 mt-1" for=""><strong>Select Chemist 2</strong></label>
                                                <select class="form-control">
                                                    <option>Choose...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 mt-1" for=""><strong>Select Chemist 3</strong></label>
                                                <select class="form-control">
                                                    <option>Choose...</option>
                                                </select>
                                            </div>
                                            <div class="text-start mt-4">
                                                <button type="submit" class="btn btn-primary shadow mb-1">Submit</button>
                                                <button type="submit" class="btn btn-secondary shadow mb-1">Home</button>
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