<?php
// include_once('includes/header.php');
$url = "/CashbackCard/get/".$_REQUEST['id']."/";
$jsonResult = curlRequest($url)->result;
// print_r($jsonResult);

if (isset($_POST['check_duplicacy'])) {
    $parameters = [
        'invoice_number' => $_POST['invoice_number']
    ];
    $isDuplicate = curlRequest("/CashbackCard/checkDuplicate/", true, $parameters)->result;
    print_r($isDuplicate);
}
$isDuplicate = $isDuplicate ?? null;
?>
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-12">
                <div class="authincation-content">
                    <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1 mt-2 p-2"
                            style="font-size:30px;"></i></a>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="auth-form">
                                <!-- <form action="" method="post"> -->
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">
                                            <p>Invoice</p>
                                        </legend>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Cashback Code : </label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $jsonResult->cashback_code; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="">Card Generated Date : </label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $jsonResult->created_at; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Chemist Name : </label>
                                            <input type="text" class="form-control email" id=""
                                                placeholder="" name="" value="<?php echo $jsonResult->chemist_name; ?>">
                                        </div>
                                        <div class="row mt-2">
                                            <!-- <div class="col">
                                                <label for="">Manager Code : </label>
                                                <input type="Number" class="form-control" placeholder="">
                                            </div> -->
                                            <div class="col-12">
                                                <label for="">Manager Name : </label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $jsonResult->chemist_manager_name; ?>">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <label for="">Mobile : </label>
                                                <input type="Number" class="form-control" placeholder="" value="<?php echo $jsonResult->chemist_mobile; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="">City : </label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $jsonResult->chemist_city; ?>">
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                <!-- </form> -->
                                <form method="post">                                
                                    <fieldset class="form-group border p-3">
                                    <legend class="w-auto px-2">Invoice Validatation</legend>
                                    <div class="row mt-2 align-items-end">
                                        <div class="col">
                                            <label for="">Invoice Number : </label>
                                            <input type="text" class="form-control" placeholder="" name="invoice_number" value="<?php echo $parameters['invoice_number'] ?? null;?>">
                                        </div>
                                        <?php if ($isDuplicate !== false):?>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary" name="check_duplicacy">Check
                                                Dupliacy</button>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                </form>
                                <?php if ($isDuplicate === false):?>
                                <form>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-hover table-responsive-sm"
                                                style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Order Type</th>
                                                        <th>Rate</th>
                                                        <th>Qty</th>
                                                        <th>Amt.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Product-1</th>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-sm btn-outline-info dropdown-toggle"
                                                                    type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    Choose
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Approve</a>
                                                                    <a class="dropdown-item" href="#">Rejected</a>
                                                                    <a class="dropdown-item" href="#">Pending</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Product-2</th>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-sm btn-outline-info dropdown-toggle"
                                                                    type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    Choose
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Approve</a>
                                                                    <a class="dropdown-item" href="#">Rejected</a>
                                                                    <a class="dropdown-item" href="#">Pending</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                                <tfoot>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <th>Total</th>
                                                    <th>200</th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                      
                                  

                                    <!-- User's Preferences  -->
                                    <!-- <fieldset class="form-group border p-3"> -->
                                        <!-- <legend class="w-auto px-2"></legend> -->
                                        <div class="row justify-space-between align-items-center">
                                            <div class="col-4">
                                                <label for="">Cashback Value : </label>
                                                <input type="Number" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-4 text-center">
                                                <!-- <label for="">Upload Invoice : </label> -->
                                                <label> Upload Invoice :
                                                    <input type="file" id="file" style="display: none;">
                                                    <img
                                                        src="https://img.icons8.com/external-others-inmotus-design/67/000000/external-Upload-16px-set-others-inmotus-design.png" />
                                                    <!-- Upload Invoice -->
                                                </label>
                                            </div>
                                            <div class="col-4 text-right">
                                                <button type="submit" class="btn btn-primary btn-customized btn-sm">View
                                                    Invoice</button>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Status : </label>
                                            <select class="form-control">
                                                <option>Open this select menu</option>
                                                <option>Approve</option>
                                                <option>Rejected</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="editor1" rows="3"></textarea>
                                        </div>
                                        <!-- Submit Button  -->
                                        <div class="form-group row text-center">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary btn-customized">Submit</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Raise Ticket -->
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<!-- Raise Ticket -->
<script>
    CKEDITOR.replace('editor1');
</script>
<script>
    $(function () {
        $(".dropdown-menu").on('click', 'a', function () {
            $(this).parents('.dropdown').find('button').text($(this).text());
        });
    });
</script>

<!-- <script>
    $("#checkDuplicacy").click(() => {
        console.log($("input[name=invoice_number]"));
    });
</script> -->

<?php
// include_once('includes/footer.php');
?>