<?php
	// include_once('includes/header.php');
    try {

        $user = curlRequest("/user/profile/")->result;
        $dict_role_columns = [
            'TM' => "L1_manager_status",
            'ASM' => "L2_manager_status",
            'RSM' => "L3_manager_status"
        ];
        print_r($user);
        $role_column = $dict_role_columns[$user->role] ?? null;
        echo $role_column;
    
        $post_action = $_POST['action'] ?? null;
        $parameters = [
            'id' => $_REQUEST['id'],
            'comment' => $_REQUEST['comment'] ?? null,
        ];
        if($post_action) {
            if ($post_action == 'approve') {
                $parameters[$role_column] = "";
            } elseif ($post_action == 'reject') {
                $parameters[$role_column] = "";
                
            }
            curlRequest("/cashbackCard/update/", true, $parameters);
        }
    
        $cashback = curlRequest("/cashbackcard/get/".$_REQUEST['id']."/")->result;
        $products = curlRequest("/invoiceproducts/invoice/".$_REQUEST['id']."/")->result;
        print_r($cashback);
        // echo "=========";
        // print_r($products);
        $totalAmount = "0.00";
    
        // initatePayment
        if (isset($_POST['initiatePayment'])) {
            $parameters = [
                'cashbackCardId' => $_REQUEST['id'] ?? throw new Exception("Cann't process payment"),
            ];
    
            $url = "/payment/";
    
            switch ($cashback->campaign_cashback_mode_id) {
                case 1:
                    # paytm wallet
                    $url .= "paytm/";
                    break;
                
                default:
                    # not allowed...
                    throw new Exception("Cann't process payment for cashback mode: ".$cashback->campaign_cashback_mode);
            }
            echo $url;
            $result = curlRequest($url, true, $parameters);
            echo "============ transaction ===========";
            print_r ($result);
        }
    } catch (Throwable $th) {
        echo "<br>Something Went Wrong";
        echo "<br>Code: ".$th->getCode();
        echo "<br>Message: ".$th->getMessage();
        echo "<br>Trace: ".$th->getTraceAsString();
    }
?>
        <!-- Cashback Report Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4><?php echo $cashback->chemist_name;?></h4>
                            <span><?php echo $cashback->chemist_mobile;?></span>
                            <p><?php echo $cashback->chemist_city;?></p>
                            <!-- <p>Stockist: New united Agency</p> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 mb-5 d-flex flex-column">
                       <p><strong>Cashback Card Genereated: </strong><?php echo $cashback->created_at;?></p>
                       <P><strong>Cashback Mode: </strong><?php echo $cashback->campaign_cashback_mode;?></P>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Qty</th>
                                                <th>Rate</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($products as $product):?>
                                            <tr>
                                                <th><?php echo $product->product_name?></th>
                                                <td><?php echo $product->quantity?></td>
                                                <td>Rs. <span class="float-right"><?php echo number_format($product->product_ptr_value, 2)?></span></td>
                                                <td>Rs. <span class="float-right"><?php echo number_format($product->product_amount, 2); $totalAmount += $product->product_amount;?></span></td>
                                            </tr>
                                            <?php endforeach;?>
                                            <!-- <tr>
                                                <th>Med-2</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-right"><strong>Total</strong></td>
                                                <td>Rs. <span class="float-right"><?php echo number_format((float)$totalAmount, 2);?></span></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="row m-5">
                                        <div class="col text-center">
                                            <i class="fa-2x fa fa-<?php echo ($cashback->is_invoice_uploaded)? "check-circle-o text-success" : "times-circle-o text-danger";?>"></i>
                                            <div class="mt-2"><b>Invoice Uploaded</b></div>
                                            <div><a href="">Click Here</a></div>
                                        </div>
                                        <div class="col text-center">
                                            <i class="fa-2x fa fa-<?php echo ($cashback->L2_manager_status=='approved')? "check-circle-o text-success" : (($cashback->L2_manager_status=='rejected') ? "times-circle-o text-danger" : "hourglass-half text-secondary");?>"></i>
                                            <div class="mt-2"><b>ASM Approved</b></div>
                                        </div>
                                        <div class="col text-center">
                                            <i class="fa-2x fa fa-<?php echo ($cashback->L3_manager_status=='approved')? "check-circle-o text-success" : (($cashback->L3_manager_status=='rejected') ? "times-circle-o text-danger" : "hourglass-half text-secondary");?>"></i>
                                            <div class="mt-2"><b>RSM Approved</b></div>
                                        </div>
                                        <div class="col text-center">
                                        <i class="fa-2x fa fa-<?php echo ($cashback->status_id==2)? "check-circle-o text-success" : (($cashback->status_id==1) ? "times-circle-o text-danger" : "hourglass-half text-secondary");?>"></i>
                                            <div class="mt-2"><b>Voucher Release<b></div>
                                        </div>
                                    </div>
                                    <div class="row mt-4  align-items-center justify-space-between">
                                        <div class="col-lg-6 col-12">
                                            <h6><strong>Cashback Value: Rs. <span class="text-primary"><?php echo $cashback->cashback_amount ?? "0.00";?></span></strong></h6>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-2" style="text-align: end;">
                                            <form method="post">
                                                <button type="submit" class="btn btn-primary btn-sm" name="initiatePayment">Initaite Payment</button>
                                            </form>
                                        </div>
                                    </div>    
                                </div>
                                <?php if(in_array($cashback->$role_column, [null, 'pending'])):?>
                                <div class="row mt-4">
                                    <div class="col">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="">Comments <small><b>(optional)</b></small></label>
                                                <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group text-right">
                                                <button class="btn btn-success shadow" name="action" value="approve">Approve</button>
                                                <button class="btn btn-danger shadow" name="action" value="reject">Reject</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </section>
            
        <!-- Cashback Report End -->
        
<?php
	// include_once('includes/footer.php');
?>
        <script>
            function getUrlParams(dParam) {
                var dPageURL = window.location.search.substring(1),
                    dURLVariables = dPageURL.split('&'),
                    dParameterName,
                    i;

                for (i = 0; i < dURLVariables.length; i++) {
                    dParameterName = dURLVariables[i].split('=');

                    if (dParameterName[0] === dParam) {
                        return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
                    }
                }
            }
            
            (function($) {
                "use strict"

                var direction =  getUrlParams('dir');
                if(direction != 'rtl')
                {direction = 'ltr'; }
                
                var dezSettingsOptions = {
                    typography: "roboto",
                    version: "light",
                    layout: "vertical",
                    headerBg: "color_1",
                    navheaderBg: "color_3",
                    sidebarBg: "color_1",
                    sidebarStyle: "full",
                    sidebarPosition: "fixed",
                    headerPosition: "fixed",
                    containerLayout: "wide",
                    direction: direction
                };
                
                new dezSettings(dezSettingsOptions); 

                jQuery(window).on('resize',function(){
                    
                    var sidebar = 'full';
                    var screenWidth = jQuery(window).width();
                    if(screenWidth < 600){
                        sidebar = 'overlay';
                    }else if(screenWidth > 600  && screenWidth < 1199){
                        sidebar = 'mini';
                    }
                    
                    dezSettingsOptions.sidebarStyle = sidebar;
                    
                    new dezSettings(dezSettingsOptions); 
                });
                
            })(jQuery);
        </script>