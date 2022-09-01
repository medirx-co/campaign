<?php
	// include_once('includes/header.php');
    if($_REQUEST['pageName'] == "del_client") {
        $result = '/client/delete/'.$_REQUEST['id'].'/';
        $jsonResult = curlRequest($result);
        // $result = curlRequest('/organisation/delete/'.$_REQUEST['id'].'/', null);   
        
        if($jsonResult) {
            echo "<script>alert('Successfully Deleted!')</script>";
            header('Location: /client_list');
        }
        else echo "<script>alert('Something went wrong!')</script>";
    }


$clientList = '/client/all/';
$jsonResult = curlRequest($clientList);

?>
        <!-- Client Status Start   -->

            <section class="container-sm mt-2 mx-3 my-4">
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Clients Table </h4>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-block"><a href="/add_client" class="text-white"> Add Client</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm table_hover" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th> Clients Name</th>
                                                <th> Organisation</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jsonResult->result as $index => $row):
                                            ?>
                                            <tr> 
                                                <th><?php echo ++$index?></th>
                                                <td><a href="/report/<?php echo $row->id?>"><?php echo $row->name; ?></a></td>
                                                <td><?php echo $row->org_name; ?></td>
                                                
                                                <th class="<?php echo $row->is_active? 'text-success':'text-danger' ?>"><?php echo $row->is_active? "Active":"Inactive" ?></th>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/report" class="text-info mx-1"><i class="fa fa-eye sharp"></i></a>
                                                        <a href="/edit_client/<?php echo $row->id?>" class="text-dark mx-1"><i class="fa fa-pencil sharp"></i></a>
                                                        <a href="/del_client/<?php echo $row->id?>" class="text-danger"><i class="fa fa-trash sharp"></i></a>
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
            
        <!-- Client Status End -->
        
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

</html>