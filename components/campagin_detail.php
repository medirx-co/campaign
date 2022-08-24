<?php
?>
        <!-- Assign Licenses Table Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
               
            
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <h4 class="card-title"> Campaign Name : <span class="text-warning">DEMO</span></h4>
                                <h4 class="card-title text-center">Organization : ORG-1 </h4>
                                <h4 class="card-title text-end"> Client Name: Client-1</h4> -->
                                <div class="row justify-space-between">
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <h4> Campaign Name : <span class="text-warning">DEMO</span></h4>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <h4>Organization : ORG-1 </h4>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <h4> Client Name: Client-1</h4>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-12 select-feature">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1"class="btn btn-danger btn-sm ">Features</option>
                                            <option value="2"class="btn btn-danger btn-sm ">Product List</option>
                                            <option value="3"class="btn btn-danger btn-sm ">logic</option>
                                            <option value="4"class="btn btn-danger btn-sm ">Add Users</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-12 button-feature">
                                        <button type="button" class="btn btn-danger btn-sm ">Features</button>
                                        <button type="button" class="btn btn-danger btn-sm ">Product List</button>
                                        <button type="button" class="btn btn-danger btn-sm ">logic</button>
                                        <button type="button" class="btn btn-danger btn-sm ">Add Users</button>
                                    </div>
                                
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
            </section>
            
        <!-- Assign Licenses Table End -->
        
<?php
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
    