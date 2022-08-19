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
                            <p>Stokist: New united Agency</p>
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
                                                <th>Cashback Vlaue</th>
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
                                    <div class="row justify-content-center align-items-center mx-2">
                                        <div class="col-3">
                                            <div><a class="btn btn-rounded btn-success"><i class="bi bi-check-circle"></i></a></div>
                                            POD  Upload
                                        </div>
                                        <div class="col-3">
                                            <div><a class="btn btn-rounded btn-success"><i class="bi bi-check-circle"></i></a></div>
                                            ASM Approved
                                        </div>
                                        <div class="col-3">
                                            <div><a class="btn btn-rounded btn-success"><i class="bi bi-check-circle"></i></a></div>
                                            Voucher ready to send
                                        </div>
                                        <div class="col-3">
                                            <div><a class="btn btn-rounded btn-success"><i class="bi bi-check-circle"></i></a></div>
                                            Completed
                                        </div>
                                        <div class="col-sm-12 justify-content-sm-end mt-4 mb-5 d-flex">
                                            <button type="submit" class="btn btn-primary btn-sm"><a  href="javascript:void(0);" class="text-white" id="">View POB</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </section>
            
        <!-- Cashback Report End -->
        
<?php
	include_once('includes/footer.php');
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