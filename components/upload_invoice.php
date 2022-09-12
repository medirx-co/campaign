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
    // print_r($isDuplicate);

    $products = curlRequest("/product/user/all/")->result;
}
$isDuplicate = $isDuplicate ?? null;
?>
<style>
    input.quantity {
        width: 80px;
        padding-left: 6px;
    }

    #cashbackRules li span {
        margin: 0 20px;
        font-weight: bold;
    }

    #cashbackRules li span[qualified='false']::before {
        content: "✗";
        color: var(--danger);
    }
    
    #cashbackRules li span[qualified='true']::before {
        content: "✓";
        color: var(--success);
    }

    /* tr td:last-child {
        width: fit-content;
    } */
</style>
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
                                            <table id="products" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Product Name</th>
                                                        <!-- <th>Order Type</th> -->
                                                        <th class="text-center">Rate</th>
                                                        <th class="text-center">Qty</th>
                                                        <th class="text-center">Amt.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($products as $index => $product):?>
                                                    <tr>
                                                        <th><?php echo ++$index;?></th>
                                                        <th> <label for="prod-<?php echo $index;?>" class="name"><?php echo $product->name;?></label></th>
                                                        <!-- <td>
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
                                                        </td> -->
                                                        <td>Rs. <span class="float-right rate"><?php echo $product->ptr_value;?></span></td>
                                                        <td class="text-center"><input type="number" class="quantity" name="quantity[]" id="prod-<?php echo $index;?>" min="0" value="0" min-quantity="<?php echo $product->min_order_qty;?>"></td>
                                                        <td>Rs. <span class="float-right amount">0.00</span></td>
                                                    </tr>
                                                    <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                    <th colspan="4" class="text-right">Total</th>
                                                    <th>Rs. <span class="float-right" id="totalAmount">0.00</span></th>
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
                                                <input type="Number" class="form-control bg-light text-right" id="cashbackValue" value="0.00" readonly>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <label>Cashback Rules: <small><strong>(to avail)</strong></small></label>
                                                <ul id="cashbackRules">
                                                    <li class="rule" id="requiredProducts">
                                                        <span qualified="0"></span>
                                                        <details open class="d-inline-block align-top">
                                                            <summary>Products Required :</summary>
                                                            <div class="container-body">
                                                                <ul>
                                                                    <!-- <li><span qualified="1"></span>Product 1 (0/5)</li>
                                                                    <li><span qualified="1"></span>Product 2 (10/50)</li> -->
                                                                </ul>
                                                            </div>
                                                        </details>
                                                    </li>
                                                    <li class="rule" id="minInvoiceValue"></li>
                                                    <li class="rule" id="minTotalProductQuantity"></li>
                                                    <li class="rule" id="minTotalProducts"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <!-- <label for="">Upload Invoice : </label> -->
                                                <label> Upload Invoice :
                                                    <input type="file" id="file" style="display: none;">
                                                    <img
                                                        src="https://img.icons8.com/external-others-inmotus-design/67/000000/external-Upload-16px-set-others-inmotus-design.png" />
                                                    <!-- Upload Invoice -->
                                                </label>
                                            </div>
                                            <div class="col">
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

    function updateTotalAmount() {
        var amounts = $('tr .amount');
        var total = 0;
        $.each(amounts, (index, row) => {
            total += +$(row).text(); // here (+) is used to convert string as number
        });
        $('#totalAmount').text(total.toFixed(2));
    }

    function updateCashbackRules(metaData) {
        var cashbackRules = $("#cashbackRules");
        var minQunatityProducts = cashbackRules.find("#requiredProducts div>ul");
        minQunatityProducts.empty();
        if (Object.keys(metaData.minQuantityProducts).length) {
            minQunatityProducts.parents('#requiredProducts').removeClass('d-none').children('span').attr("qualified", metaData.minQuantityProductsQualified);
            Object.keys(metaData.minQuantityProducts).forEach(key => {
                console.log(key);
                minQunatityProducts.append(`<li><span qualified='${metaData.minQuantityProducts[key]['qualified']}'></span>${key} (${metaData.minQuantityProducts[key]['quantity']} / ${metaData.minQuantityProducts[key]['minQuantity']})</li>`)
            });
        } else {
            minQunatityProducts.parents('#requiredProducts').addClass('d-none');
        }
        if (metaData.minimumInoiceValue) cashbackRules.find("#minInvoiceValue").empty().append(`<span qualified="${metaData.invoiceValue >= metaData.minimumInoiceValue}"></span><label>Minimum Invoice Value - Rs. ${metaData.minimumInoiceValue.toFixed(2)}</label>`)
        if (metaData.minTotalQuantity) cashbackRules.find("#minTotalProductQuantity").empty().append(`<span qualified="${metaData.totalQuantity >= metaData.minTotalQuantity}"></span><label>Minimum Total quantity (${metaData.minTotalQuantity})</label>`)
        if (metaData.minProducts) cashbackRules.find("#minTotalProducts").empty().append(`<span qualified="${metaData.purchasedProducts.length >= metaData.minProducts}"></span><label>Minimum ${metaData.minProducts} Products requred to be purchased</label>`)
    }

    function updateCashbackValue() {
        var cashback = $('#cashbackValue');
        let products = [];
        // get all product details
        $('table#products tbody tr').each((index, element) => {
            products.push({
                name: $(element).find('.name').text(),
                rate: +$(element).find('.rate').text(),
                quantity: +$(element).find('.quantity').val(),
                minQuantity: +$(element).find('.quantity').attr('min-quantity'),
                amount: +$(element).find('.amount').text(),
            });
        });


        // meta data for Cashback Rule //
        var metaData = {
            purchasedProducts: [],
            minQuantityProducts: {},
            minQuantityProductsQualified: true,
            
            minProducts: 2, // could be null to skip product count validation
            minTotalQuantity: 10, // sum of all product-quantity
            totalQuantity: 0,
            
            minCashbackValue: 50,
            maxCashbackValue: 500,
            cashbackIncrementValue: 50, // could be null to skip and made a fixed cashback value on any amount
            cashbackCalculated: 0,
            
            minimumInoiceValue: 250,
            invoiceStepDifference: 100, // Ex - for each 100 Rs after minimumInoiceValue there will be increment of cashbackIncrementValue
            invoiceValue: +$('#totalAmount').text(),
        }

        $.each(products, (index, product) => {
            // product(s) purchased //
            if(product.quantity) {
                metaData['purchasedProducts'].push(product);
                metaData.totalQuantity += product.quantity;
            }
            if(product.minQuantity) {
                var minQuantityProducts = {
                    quantity: product.quantity,
                    minQuantity: product.minQuantity,
                    qualified: product.quantity >= product.minQuantity,
                }
                if (metaData.minQuantityProductsQualified) metaData.minQuantityProductsQualified = minQuantityProducts.qualified;
                metaData.minQuantityProducts[product.name] = minQuantityProducts;
            }
        });

        var min_quantity_products_count = Object.keys(metaData.minQuantityProducts).length;
        // Validating cashback rules //
        if (
            ((metaData.minProducts && (metaData.purchasedProducts.length >= metaData.minProducts)) || !metaData.minProducts) // console.log("minimum products fulfilled");
            && ((min_quantity_products_count && metaData.minQuantityProductsQualified) || !min_quantity_products_count) // console.log("minimum quantity per product fulfilled");
            && ((metaData.minTotalQuantity && (metaData.totalQuantity >= metaData.minTotalQuantity)) || !metaData.minTotalQuantity) // console.log("minimum total products quantity fulfilled");
            && ((metaData.minimumInoiceValue && (metaData.invoiceValue >= metaData.minimumInoiceValue)) || !metaData.minimumInoiceValue) // console.log("minimum invoice value fulfilled");
        ) {
            metaData.cashbackCalculated = metaData.minCashbackValue;
            if(metaData.invoiceStepDifference) metaData.cashbackCalculated += (Math.floor((metaData.invoiceValue-metaData.minimumInoiceValue)/metaData.invoiceStepDifference)*metaData.cashbackIncrementValue);
        }
        
        // console.log(metaData);
        if (metaData.cashbackCalculated > metaData.maxCashbackValue) metaData.cashbackCalculated = metaData.maxCashbackValue;

        updateCashbackRules(metaData);

        cashback.val((metaData.cashbackCalculated).toFixed(2));
    }

    $(function () {
        $(".dropdown-menu").on('click', 'a', function () {
            $(this).parents('.dropdown').find('button').text($(this).text());
        });
    });

    $('input.quantity').on("input", (e) => {
        var trow = $(e.target).parents('tr');
        var rate = trow.find('.rate').text();
        var amount = trow.find('.amount');
        var quantity = e.target.value;
        // update amount
        amount.text(Number(quantity*rate).toFixed(2));
        // update total amount
        updateTotalAmount();
        // update cashback value
        updateCashbackValue();
    });

    updateCashbackValue();
</script>

<?php
// include_once('includes/footer.php');
?>