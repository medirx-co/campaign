<?php
	include_once('includes/header.php');
?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-10">
                        <div class="authincation-content mt-4">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="auth-form">
                                        <h4 class="text-center mb-4">Reject Reason</h4><hr>
                                        <form action="">
                                            <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1" style="font-size:30px;" ></i></a>
                                            <div class="form-group">
                                                <label class="mb-1"></label>
                                                <textarea class="form-control" name="editor1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <input type="file" id="file" style="display: none;">
                                                    <img src="https://img.icons8.com/color/48/000000/upload-to-cloud.png"/>
                                                     Upload(optional)
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary  btn-sm btn-block">Reject</button>
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
        <!-- Rejected-->
            <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
        <!-- Rejected -->
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
