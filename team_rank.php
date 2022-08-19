<?php
	// include_once('includes/header.php');
?>
        <!-- Cashback Report Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
                    <!-- <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>TM Rank</h4>
                                <span>Top 30</span>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>TM Rank</h4>
                                    <p>Top 30</p>
                                </div>
                                    <div class="row justify-content-center align-items-center mt-2 mx-3 my-4">
                                        <div class="col-3 card bg-white p-3 mx-1 align-items-center" style="">
                                            <img src="images/user-icon.png" class="" alt="..." width="100">
                                            <h1 class="text-center">TM 1</h1>
                                        </div>
                                        <div class="col-3 card bg-white align-items-center mx-1 p-3" style="">
                                            <img src="images/user-icon.png" class="" alt="..." width="100">
                                            <h1 class="text-center">TM 1</h1>
                                        </div>
                                        <div class="col-3 card bg-white p-3 mx-1 align-items-center" style="">
                                            <img src="images/user-icon.png" class="" alt="..."width="100">
                                            <h1 class="text-center">TM 1</h1>
                                        </div>
                                        
                                    </div>
                                
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Zone</th>
                                                        <th>No.of POB</th>
                                                        <th>POB Value</th>
                                                        <th>Rank</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a class="rounded-circle bg-light" ><i class="bi bi-person-fill" style="font-size: 50px"></i></a></td>
                                                        <td>TM Name</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="rounded-circle bg-light" ><i class="bi bi-person-fill" style="font-size: 50px"></i></a></td>
                                                        <td>TM Name</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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