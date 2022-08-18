<?php
	include_once('includes/header.php');
?>
        <!-- Edit User Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
                <!-- <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Organization</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Organization Table</a></li>
                        </ol>
                    </div>
                </div> -->
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="fs-1">Edit User </h1>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-8">
                                        <form action="index.html">
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>Employee Name *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>E Code *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>Designation *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>HQ*</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>Zone *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>Contact Number *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>Email *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>Status *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>ASM Code *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>ASM Name *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>RSM Code *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label"><strong>RSM Name *</strong></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                        <div class="mb-3 row ">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-light">Back</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </section>
            
        <!-- Edit User End -->
        
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
    </body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 04:48:24 GMT -->
</html>