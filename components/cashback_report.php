<?php
	// include_once('includes/header.php');
    $url = '/cashbackCard/user/all/';
    $jsonResult = curlRequest($url)->result;
?>
        <!-- Cashback Report Start   -->

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
                                <h4 class="card-title">Cashback Report </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Chemist Name</th>
                                                <th>City</th>
                                                <th>Mobile No.</th>
                                                <th>Cashback Code</th>
                                                <th>Date</th>
                                                <th>Cashback Value</th>
                                                <th>ASM Approve</th>
                                                <th>RSM Approve</th>
                                                <th>Status</th>
                                                <th>Date Release</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jsonResult as $index => $row): 
                                                # code...
                                            ?>
                                            <tr>
                                                <th><?php echo ++$index ?></th>
                                                <td><?php echo $row->chemist_name ?></td>
                                                <td><?php echo $row->chemist_city ?></td>
                                                <td><?php echo $row->chemist_mobile ?></td>
                                                <td><?php echo $row->cashback_code ?></td>
                                                <td><?php echo $row->created_at ?></td>
                                                <td><?php echo 5 ?></td>
                                                <td><?php echo ($row->L2_manager_approval)?></td>
                                                <td><?php echo $row->L3_manager_approval; ?></td>
                                                <td><i class="text-center <?php echo ($row->status == 'pending')?'fa fa-hourglass-half text-warning' :(($row->status == 'approved')?'fa fa-check text-success' :'fa fa-times text-danger');?>"> <?php echo ($row->status == 'pending')? 'Pending' :(($row->status == 'approved')?'Approved' :'Rejected');?></i></td>
                                                <td>Date of paymeent release</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/cashback_details" class="text-info btn-sm sharp p-1 mx-1"><i class="fa fa-eye"></i></a>
                                                        <a href="/upload_invoice/<?php echo $row->id;?>" class="btn btn-dark shadow btn-sm sharp mr-1"><i class="fa fa-upload"></i></a>
                                                        <a href="#" class="text-danger btn-sm sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                           <?php endforeach; ?>
                                           
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