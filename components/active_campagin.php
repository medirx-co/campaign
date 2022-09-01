<?php
	// include_once('includes/header.php');
    $url = '/campaign/user/all/';
    $jsonResult = curlRequest($url);


    // print_r($jsonResult);
?>
        <!-- campagin list Table Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Active Campagin </h4>
                                <div class="text-end">
                                    <!-- <button type="submit" class="btn btn-primary btn-block">Add New</button> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Active Campagin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jsonResult->result as $index => $row):
                                            ?>
                                            <tr>
                                                <th><?php echo ++$index; ?></th>
                                                <td><?php echo $row->name; ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/user_options/<?php echo $row->id; ?>/user/<?php echo $row->user_id; ?>" class="text-info shadow p-1 mx-1"> View Details</a>
                                                        <!-- <a href="/choose/<?php //echo $row->id; ?>" class="text-info shadow p-1 mx-1"> <i class="fa fa-file"></i> Report</a> -->
                                                        <!-- <a href="/choose/<?php //echo $row->id; ?>" class="text-info shadow p-1 mx-1"> <i class="fa fa-file"></i> </a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
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
    