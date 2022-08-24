<?php


if($_REQUEST['pageName'] == "del_org") {
    $result = BASE_API_URL.'/organisation/delete/'.$_REQUEST['id'].'/';
    $jsonResult = json_decode(file_get_contents($result));
    // $result = curlRequest('/organisation/delete/'.$_REQUEST['id'].'/', null);   
    
    if($jsonResult) {
        echo "<script>alert('Successfully Deleted!')</script>";
        header('Location: /org_list');
    }
    else echo "<script>alert('Something went wrong!')</script>";
}


$orgList = BASE_API_URL.'/organisation/all/';
// $jsonResult = json_decode(file_get_contents($orgList), true);
$jsonResult = json_decode(file_get_contents($orgList));


?>

            <section class="container-sm mt-2 mx-3 my-4">            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Organisation Table </h4>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-block"><a  href="/add_org" class="text-white" id="add_org"> Add Organization</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Organization Name</th>
                                                <th>Logo</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jsonResult->result as $index => $row):
                                                # code...
                                             
                                                // print_r($value);
                                            ?>
                                            <tr>
                                                <th><?php echo ++$index;?></th>
                                                <th><?php echo $row->name?></th>
                                                <th><?php echo $row->logo?></th>
                                                <th><?php echo $row->created_at?></th>
                                                <th class="<?php echo $row->is_active? 'text-success':'text-danger' ?>"><?php echo $row->is_active? "Active":"Inactive" ?></th>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void()" class="text-info mx-1"><i class="fa fa-eye sharp"></i></a>
                                                        <a href="/edit_org/<?php echo $row->id?>" class="text-dark mx-1"><i class="fa fa-pencil sharp"></i></a>
                                                        <a href="/del_org/<?php echo $row->id?>" class="text-danger"><i class="fa fa-trash sharp"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php  endforeach; ?>
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