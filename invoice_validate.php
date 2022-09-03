<?php
	include_once('includes/header.php');
?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-12">
                        <div class="authincation-content">
                            <a class="d-block text-right"><i class="fa fa-window-close text-danger mr-1 mt-2 p-2" style="font-size:30px;" ></i></a>
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="auth-form">
                                        <form action="" method="post">
                                            
                                            <!-- User's Credentials  -->
                                                <fieldset class="form-group border p-3">
                                                    <legend class="w-auto px-2"><h1>Invoice</h1></legend>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="number" class="form-control" placeholder="Cashback Code">
                                                        </div>
                                                        <div class="col">
                                                            <input type="date" class="form-control" placeholder="Card Generated Date" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <input type="text" class="form-control email" id="" placeholder="Chemist Name" name="">
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <input type="Number" class="form-control" placeholder="Manager Code">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="Manager Name">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <input type="Number" class="form-control" placeholder="Mobile No.">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="City">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <input type="Number" class="form-control" placeholder="Invoice No.">
                                                        </div>
                                                        <div class="col">
                                                            <input type="date" class="form-control" placeholder="Invoice Date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row text-left mt-3">
                                                        <div class="col">
                                                            <button type="submit" class="btn btn-primary btn-customized">Check Dupliacy</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group border p-3">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
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
                                                                            <button class="btn btn-sm btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Choose
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#">Approve</a>
                                                                                <a class="dropdown-item" href="#">Rejected</a>
                                                                                <a class="dropdown-item" href="#">Pending</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td>
                                                                        <input type="Number" class="" placeholder="">
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Product-2</th>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-sm btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Choose
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#">Approve</a>
                                                                                <a class="dropdown-item" href="#">Rejected</a>
                                                                                <a class="dropdown-item" href="#">Pending</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td>
                                                                        <input type="Number" class="" placeholder="">
                                                                    </td>
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
                                            </fieldset>
                                            
                                            <!-- User's Preferences  -->
                                            <fieldset class="form-group border p-3">
                                                <!-- <legend class="w-auto px-2"></legend> -->
                                                    <div class="row justify-space-between align-items-center">
                                                        <div class="col-4">
                                                            <input type="Number" class="form-control" placeholder="Cashback value">
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <label>
                                                                <input type="file" id="file" style="display: none;">
                                                                <img src="https://img.icons8.com/external-others-inmotus-design/67/000000/external-Upload-16px-set-others-inmotus-design.png"/>
                                                                Upload Invoice
                                                            </label>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <button type="submit" class="btn btn-primary btn-customized btn-sm">View Invoice</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-3">
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
                                            </fieldset>
                                            <!-- Submit Button  -->
                                            <div class="form-group row text-center">
                                                <div class="col">
                                                    <button type="submit" class="btn btn-primary btn-customized">Submit</button>
                                                </div>
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
        <!-- Raise Ticket -->
        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
        <!-- Raise Ticket -->
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
                        <script>
                                $(function(){
                            $(".dropdown-menu").on('click', 'a', function(){
                                $(this).parents('.dropdown').find('button').text($(this).text());
                            });
                            });
                        </script>

<?php
	include_once('includes/footer.php');
?>
