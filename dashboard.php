<?php
	include_once('includes/header.php');
?>
        <!-- Dashboard Start  -->
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card bg-primary overflow-hidden">
                                    <div class="card-body pb-0 px-2 pt-3">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="mb-1">Clients</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card bg-success	overflow-hidden">
                                    <div class="card-body pb-0 px-2 pt-3">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-white mb-1">Live Campagins</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card bg-info overflow-hidden">
                                    <div class="card-body pb-0 px-2 pt-3">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-white mb-1">Campagins</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card bg-warning	overflow-hidden">
                                    <div class="card-body pb-0 px-2 pt-3">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-white mb-1">Compagins</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12 col-lg-12 col-md-12">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <div>
                                    <h4 class="card-title">History 2013 - 2021</h4>
                                    <p class="mb-1">Lorem Ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="card-action">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#user" role="tab">
                                            Monthly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
                                            Weekly
                                            </a>
                                            </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
                                            Today
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="user" role="tabpanel">
                                        <canvas id="activity" class="chartjs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
         <!-- Dashboard End -->
        
    >



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
   