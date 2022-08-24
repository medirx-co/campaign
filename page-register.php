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
                                        <h4 class="text-center mb-4">Sign up your account</h4>
                                        <form action="index-2.html">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Username</strong></label>
                                                <input type="text" class="form-control" placeholder="username">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email" class="form-control" placeholder="hello@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Password</strong></label>
                                                <input type="password" class="form-control" value="Password">
                                            </div>
                                                <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                            </div>
                                        </form>
                                        <div class="new-account mt-3">
                                            <p>Already have an account? <a class="text-primary" href="page-login.html">Sign in</a></p>
                                        </div>
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