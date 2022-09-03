<?php
	// include_once('includes/header.php');
?>
        <!-- Cashback Report Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Dr Gouranga Sardar</h4>
                            <span>9734544201</span>
                            <p>Kolkata</p>
                            <p>Stockist: New united Agency</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mb-5 d-flex">
                       <h5>6-Jul</h5>
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
                                                <th>Amount</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Med-1</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Med-2</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mx-5">
                                        <div class="col">
                                            <img src="images/green-icon.png" alt="" class="text-center" style="width: 40px;">
                                            <div>POD Upload</div>
                                        </div>
                                        <div class="col">
                                            <img src="images/green-icon.png" alt="" style="width: 40px;">
                                            <div>POD Upload</div>
                                        </div>
                                        <div class="col">
                                            <img src="images/green-icon.png" alt="" style="width: 40px;">
                                            <div>POD Upload</div>
                                        </div>
                                        <div class="col">
                                            <img src="images/green-icon.png" alt="" style="width: 40px;">
                                            <div>POD Upload</div>
                                        </div>
                                    </div>
                                    <div class="row mt-4  align-items-center justify-space-between">
                                        <div class="col-lg-6 col-12">
                                            <h6><strong>Cashback Value</strong></h6>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-2" style="text-align: end;">
                                            <button type="submit" class="btn btn-primary btn-sm"><a  href="javascript:void(0);" class="text-white" id="">View Invoice</button></a>
                                        </div>

                                        <!-- <div class="col-6 p-md-0 mt-2 mt-sm-0 mb-2 my-3 d-flex">
                                            <button type="submit" class="btn btn-primary btn-sm"><a  href="javascript:void(0);" class="text-white" id="">View Invoice</button></a>
                                        </div> -->
                                    </div>    
                                    
                                </div>
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