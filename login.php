<?php
include_once('includes/header.php');

$verifyLogin = array(
    'username' => $_POST['username'] ?? null,
    'password' => $_POST['password'] ?? null
);

if (isset($_REQUEST['login'])) {
    $result = curlRequest('/user/login/', true, $verifyLogin);
    // print_r($_SESSION);
    // $_SESSION['user'] = '5';
    // print_r($result);
    if ($result->status == 'success') {
        sessionUser($result->result->id ?? $result->result->user);
        echo "<script>alert('Login Successful!')</script>";
    } else echo "<script>alert('Something went wrong!')</script>";
}
// print_r($_SESSION);
if (!empty(sessionUser())) redirect("/dashboard");
?>

<div class="authincation" style="display: flex;justify-content: center;align-items: center;height: 100vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="authincation-content mt-4">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1" style="font-size:30px;"></i></a>
                                <h4 class="text-center mb-4">Login in your account</h4>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Username</strong></label>
                                        <input type="text" class="form-control" value="<?php echo $verifyLogin['username']; ?>" name="username" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" value="" name="password">
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
                                        <button type="submit" name="login" class="btn btn-primary btn-block">Log In</button>
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