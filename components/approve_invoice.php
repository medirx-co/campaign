<?php
	// include_once('includes/header.php');
?>
        <!-- Feature Table Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Approve Invoice</h4>
                                <!-- <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-block">Add New</button>
                                </div> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Chemist Name</th>
                                                <th>Employee Code</th>
                                                <th>Mobile No.</th>
                                                <th>City</th>
                                                <th>Cashback Value</th>
                                                <th>Invoice Value</th>
                                                <th>Action [ManagerApproval]</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="d-flex mx-5">
                                                        <a href="#"><i class="fa fa-check text-success mr-1" style="font-size: 20px;"></i></a>
                                                        <a href="#"><i class="fa fa-times text-danger mr-1" style="font-size: 20px;"></i></a>
                                                        <a href="#"><i class="fa fa-eye text-secondary mr-1" style="font-size: 20px;"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="d-flex mx-5">
                                                        <a href="#"><i class="fa fa-check text-success mr-1" style="font-size: 20px;"></i></a>
                                                        <a href="#"><i class="fa fa-times text-danger mr-1" style="font-size: 20px;"></i></a>
                                                        <a href="#"><i class="fa fa-eye text-secondary mr-1" style="font-size: 20px;"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </section>
            
        <!-- Feature Table End -->
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
    