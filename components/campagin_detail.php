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
                                        <select class="form-select" aria-label="Default select example" id="mySelect">
                                            <option selected>Open this select menu</option>
                                            <option value="1"class="btn btn-danger btn-sm " id="sm-features" onclick="showSmFeatures();">Features</option>
                                            <option value="2"class="btn btn-danger btn-sm " id="sm-productlist" onclick="showSmProduct();">Product List</option>
                                            <option value="3"class="btn btn-danger btn-sm " id="sm-logics" onclick="showSmLogic();">Logic</option>
                                            <option value="4"class="btn btn-danger btn-sm " id="sm-addusers" onclick="showSmAddUsers();">Add Users</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-12 button-feature">
                                        <button type="button" class="btn btn-danger btn-sm " id="featuretable" onclick="showFeatures();">Features</button>
                                        <button type="button" class="btn btn-danger btn-sm " id="producttable" onclick="showProduct();">Product List</button>
                                        <button type="button" class="btn btn-danger btn-sm " id="logicform" onclick="showLogic();">Logic</button>
                                        <button type="button" class="btn btn-danger btn-sm " id="allusers" onclick="showAllUsers();">All Users</button>
                                    </div>
                                
                                </div>
                                <div class="row">
                                    <div class="col-12">
<<<<<<< HEAD
                                    <!-- all features start -->
                                            
                                    <!-- all features end -->
                                    
                                    <!-- all users start -->
=======
                                        
                                        <!-- Feature Table Start   -->

                                            <section class="container-sm mt-2 mx-3 my-4" id="Features" id="sm-feature" style="display:none;">
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
>>>>>>> 5dfbb0e7422a836d6e21d40745e3ff586d9f0aec
                                            
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title"> Features </h4>
                                                                <div class="text-end">
                                                                    <button type="submit" class="btn btn-primary btn-block">Add New</button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>S.No.</th>
                                                                                <th>Name</th>
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>1</th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <a href="#" class="btn btn-danger shadow btn-sm sharp mr-1">Remove</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>1</th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <a href="#" class="btn btn-success shadow btn-sm sharp">Add</i></a>
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
            
                                        <!-- Feature Table End -->

                                        <!-- Product Table Start   -->

                                            <section class="container-sm mt-2 mx-3 my-4" id="Product"  id="sm-product" style="display:none;">
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
                                                                <h4 class="card-title"> Product list </h4>
                                                                <div class="text-end">
                                                                    <button type="submit" class="btn btn-primary btn-block">Add New</button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>S.No.</th>
                                                                                <th>Name</th>
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>1</th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <a href="#" class="btn btn-danger shadow btn-sm sharp mr-1">Remove</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>1</th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <a href="#" class="btn btn-success shadow btn-sm sharp">Add</i></a>
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
                                            
                                        <!-- Product Table End -->

                                        <!-- All Users Start -->

                                            <section class="container-sm mt-2 mx-3 my-4" id="AllUsers" id="sm-adduser" style="display:none;">
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
                                                                <h3 class="card-title fs-1">Manage User </h3>
                                                                <div class="text-end">
                                                                    <button type="submit" class="btn btn-primary btn-block"><a href="#" class="text-white"> Add </button></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="example3" class="table table-hover table-responsive-sm" style="min-width: 845px">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>S.No.</th>
                                                                                <th>Name</th>
                                                                                <th>Emp Code</th>
                                                                                <th>Mobile Number</th>
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>1</th>
                                                                                <td>TM1</td>
                                                                                <td>101</td>
                                                                                <td></td>
                                                                                <td>Active</td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <a href="#" class="btn btn-info shadow btn-sm sharp mr-1"><i class="fa fa-eye"></i></a>
                                                                                        <a href="#" class="btn btn-dark shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                                                        <a href="#" class="btn btn-danger shadow btn-sm sharp"><i class="fa fa-trash"></i></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>2</th>
                                                                                <td>Surya pratap singh</td>
                                                                                <td>67177</td>
                                                                                <td>9058700995</td>
                                                                                <td>Active</td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <a href="#" class="btn btn-info shadow btn-sm sharp mr-1"><i class="fa fa-eye"></i></a>
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
                                        
                                        <!-- All Users End -->
                                        <!-- Logic Start -->
                                            <section class="container-sm mt-2 mx-3 my-4" id="logic" id="sm-logic" style="display:none;">
                                                <div class="authincation h-100" >
                                                    <div class="container h-100">
                                                        <div class="row justify-content-center h-100 align-items-center">
                                                            <div class="col-md-6">
                                                                <div class="authincation-content mt-4">
                                                                    <div class="row no-gutters">
                                                                        <div class="col-xl-12">
                                                                            <div class="auth-form">
                                                                                <div class="col-8 d-flex justify-content-sm-end">
                                                                                    <button type="submit" class="btn btn-primary btn-sm btn-block">Add Logic</button>
                                                                                </div>
                                                                                <form action="">
                                                                                    <div class="form-group ">
                                                                                        <label class="mb-1"><strong>Logic Name</strong></label>
                                                                                        <input type="text" class="form-control" value="">
                                                                                    </div>
                                                                                    <div class="text-center">
                                                                                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        <!-- Logic End -->
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
                
            });
        </script>
<<<<<<< HEAD
    
    <!-- custom script -->
=======
   
    <!-- Custom Js Start -->
        <script>
           
            // function showSmFeatures() {
            //     document.getElementById("sm-feature").style.display = "block";
            //     document.getElementById("sm-product").style.display = "none";
            //     document.getElementById("sm-logic").style.display = "none";
            //     document.getElementById("sm-adduser").style.display = "none";
            
            // }

            // function showSmProduct () {
            //     document.getElementById("sm-feature").style.display = "none";
            //     document.getElementById("sm-product").style.display = "block";
            //     document.getElementById("sm-logic").style.display = "none";
            //     document.getElementById("sm-adduser").style.display = "none";  
            // }

            // function showSmLogic () {
            //     document.getElementById("sm-feature").style.display = "none";
            //     document.getElementById("sm-product").style.display = "none";
            //     document.getElementById("sm-logic").style.display = "block";
            //     document.getElementById("sm-adduser").style.display = "none";
            // }

            // function showSmAddUsers () {
            //     document.getElementById("sm-feature").style.display = "none";
            //     document.getElementById("sm-product").style.display = "none";
            //     document.getElementById("sm-logic").style.display = "none";
            //     document.getElementById("sm-adduser").style.display = "block"; 
            // }

            function showFeatures() {
                document.getElementById("Features").style.display = "block";
                document.getElementById("Product").style.display = "none";
                document.getElementById("logic").style.display = "none";
                document.getElementById("AllUsers").style.display = "none"; 
            
            }

            function showProduct () {
                document.getElementById("Features").style.display ="none";
                document.getElementById("Product").style.display = "block";
                document.getElementById("logic").style.display = "none";
                document.getElementById("AllUsers").style.display = "none";
            }

            function showLogic () {
                document.getElementById("Features").style.display = "none";
                document.getElementById("Product").style.display = "none";
                document.getElementById("logic").style.display = "block";
                document.getElementById("AllUsers").style.display = "none"; 
            }

            function showAllUsers () {
                document.getElementById("Features").style.display = "none";
                document.getElementById("Product").style.display = "none";
                document.getElementById("logic").style.display = "none";
                document.getElementById("AllUsers").style.display = "block";
            }
        </script>
    <!-- Custom Js End -->
>>>>>>> 5dfbb0e7422a836d6e21d40745e3ff586d9f0aec
