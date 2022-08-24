<?php
	// include_once('includes/header.php');
    $orgList = BASE_API_URL.'/organisation/all/';
    // $jsonResult = json_decode(file_get_contents($orgList), true);
    $orgList = json_decode(file_get_contents($orgList));

?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <form action="">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Organization Name</strong></label>
                                                <td>
                                                <select name="organisation" class="form-control">                                                    
                                                    <?php 
                                                        foreach ($orgList->result as $index => $row):?>
                                                        <option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Clients Name</strong></label>
                                                <input type="text" class="form-control" value="" name>
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


        <!-- <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/deznav-init.js"></script> -->
    </body>

</html>