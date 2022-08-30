<?php
	include_once('includes/header.php');
?>
        <!-- Doctor list Table Start   -->

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
                                <h4 class="card-title"> Doctor List </h4>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-block"><a href="/add_doctor">Add New</a></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Doctor</th>
                                                <th>location</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                                <th>Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td></td>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/doctor_invoice" class="btn btn-info shadow btn-sm sharp p-1 mx-1"> Generate</a>
                                                        <a href="#" class="btn btn-dark shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-sm sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td></td>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void()" class="btn btn-info shadow btn-sm sharp p-1 mx-1"> Generate</a>
                                                        <a href="#" class="btn btn-dark shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-sm sharp"><i class="fa fa-trash"></i></a>
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
            
        <!-- Doctor list Table End -->
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
    