                    <!-- start sidebar menu -->
                    <div class="col-lg-3 col-md-12 p-3 mb-2 text-white side_bars">             
                            <p class="dsb_text text-center"></p>	
                            
                            <img src="assets/img/avatar.jpg" alt="User photo" class="rounded-circle img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">	
                            <h5 class="text-center dsb_sidebar_info text-dark"><?= $_SESSION['name']; ?></h5>

                            
                            <?php
                            
                                if($_SESSION['role_id']=='1'){
                            ?>

                            <h6 class="text-center dsb_sidebar_info text-dark">Admin</h6>

                            <?php
                                }                            
                            ?>
                            
                            <nav class="navbar navbar-expand-lg navbar-light"> <!-- responsive break point -->

                                <!-- icon & target for collapse -->

                                <div class="col-xl-12">
                                    
                                    <button type="button" class="navbar-toggler bg-light" data-toggle="collapse"
                                            data-target="#menus" > <!-- target id collapse -->
                                            <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="row menu">
                                        <!-- div for collapse with target id -->

                                        <div id="menus" class="collapse navbar-collapse sidevars">
                                            <ul>
                                                <?php
                                                    
                                                    if($_SESSION['role_id']=='1'){
                                                ?>
                                                
                                                        <li><a href="all-index-website.php" class="menul"> <i class="fas fa-users"></i> All Indexed Website </a></li>
                                                        <li><a href="index-website.php" class="menul"> <i class="fas fa-user-edit"></i> Index New Website </a></li>
                                                
												<?php
                                                    }
                                                
                                                ?>
											

                                                <li><a href="change-password.php" class="menul"><i class="fas fa-key"></i> Change Password </a></li>
                                                <li><a href="index.php" class="menul"><i class="fas fa-globe-asia"></i> Search Engine </a></li>
                                                
                                                <li><a href="logout.php" class="menul"><i class="fas fa-sign-out-alt"></i> Sign out </a></li>
                                            
                                            
                                            </ul>
                                        </div>
                                    
                                    </div>
                                </div>
                            
                            <!-- div end collapse -->
                        </nav>

                    </div>
                    <!-- end sidebar menu -->
                    
                    <!-- start dashboard information/content section -->
                    
                    
                    <div class="col-lg-9 col-md-12 p-3 mb-2 bg-light text-dark" id="dashboard_section"> 
                        <div class="scrollable">
                        <!--data/content -->




