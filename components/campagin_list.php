<?php
	$url = '/campaign/all/';
    // $jsonResult = json_decode(file_get_contents($orgList), true);
    $jsonResult = curlRequest($url);
?>
        <!-- Organization Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Campagin List</h4>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-block"><a  href="/add_campagin" class="text-white" id="add_org"> Add Campaign</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Campaign Name</th>
                                                <th>Client Name</th>
                                                <th>Status</th>
                                                <th>Active</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jsonResult->result as $index => $row):
                                            ?>
                                            <tr>
                                                <th><?php echo ++$index; ?></th>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->client_name; ?></td>
                                                <th class="<?php echo $row->is_active? 'text-success':'text-danger' ?>"><?php echo $row->is_active? "Active":"Inactive" ?></th>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/campagin_detail" class="text-info mx-1"><i class="fa fa-eye sharp"></i></a>
                                                        <a href="/edit_campagin/<?php echo $row->id; ?>" class="text-dark mx-1"><i class="fa fa-pencil sharp"></i></a>
                                                        <a href="/del_campagin/<?php echo $row->id; ?>" class="text-danger"><i class="fa fa-trash sharp"></i></a>
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
            
        <!-- Organization End -->
        
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