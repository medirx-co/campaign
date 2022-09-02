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
                                        <h4 class="text-center mb-4">Raise Ticket</h4>
                                        <form action="">
                                            <div class="form-group">
                                                <label class="mb-1"><strong> Subject</strong></label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <input type="file" id="file" style="display: none;">
                                                    <img src="https://img.icons8.com/color/48/000000/upload-to-cloud.png"/>
                                                     Upload
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Problem Description</strong><span>(optional)</span></label>
                                                <textarea class="form-control" name="editor1" rows="3"></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
        <!-- Raise Ticket -->
            <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
        <!-- Raise Ticket -->
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
