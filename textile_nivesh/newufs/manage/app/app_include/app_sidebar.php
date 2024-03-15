<?php require_once("session.php");?>
<!-- start page container -->
<div class="page-container">
<!-- start sidebar menu -->
<div class="sidebar-container">
   <div class="sidemenu-container navbar-collapse collapse fixed-menu">
      <div id="remove-scroll">
         <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper hide">
               <div class="sidebar-toggler">
                  <span></span>
               </div>
            </li>
            <li class="sidebar-user-panel">
               <div class="user-panel">
                  <div class="row">
                     <div class="sidebar-userpic">
                        <?php
                           if(empty($_SESSION['profile_pic']))
                           {?>
                        <img src="upload/user/images.png" class="img-responsive" alt="User Image">
                        <?php }
                           else
                           {
                            $img = $_SESSION["profile_pic"];
                            echo '<img src="upload/user/' . $img . '"' .' class="img-responsive" alt="User Image">';
                             }?>
                     </div>
                  </div>
                  <div class="profile-usertitle">
                     <div class="sidebar-userpic-name"> <?php echo $_SESSION['name']; ?> </div>
                     <div class="profile-usertitle-job"> <?php echo $_SESSION['type']; ?> </div>
                  </div>
                  <div class="sidebar-userpic-btn">
                     <a class="tooltips" href="user_profile" data-placement="top" data-original-title="Profile">
                     <i class="material-icons">dashboard</i>
                     </a>
                     <a class="tooltips" href="logout" data-placement="top" data-original-title="Logout">
                     <i class="material-icons">input</i>
                     </a>
                  </div>
               </div>
            </li>
            <li class="menu-heading">
            </li>
            <li class="nav-item start active">
               <a href="home" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="nav-item start">
               <a href="add_project" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Projects</span>
               <span class="selected"></span>
               </a>
            </li>

             <li class="nav-item start">
               <a href="add_clients" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Certificate</span>
               <span class="selected"></span>
               </a>
            </li>

            <li class="nav-item start">
               <a href="add_team" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Team Members</span>
               <span class="selected"></span>
               </a>
            </li>

             <li class="nav-item">
                     <a href="javascript:;" class="nav-link nav-toggle">
                     <i class="fa fa-money"></i>
                     <span class="title">Blog </span>
                     <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">

                        <li class="nav-item">
                           <a href="add_blog" class="nav-link">
                           <i class="fa fa-angle-double-right"></i>Add Blog
                           </a>
                        </li>

                          <li class="nav-item">
                           <a href="blog_list" class="nav-link">
                           <i class="fa fa-angle-double-right"></i> List
                           </a>
                        </li>
                      
                     </ul>
                  </li>

              <li class="nav-item start">
               <a href="contact_list" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Contact</span>
               <span class="selected"></span>
               </a>
            </li>
             <li class="nav-item">
                     <a href="javascript:;" class="nav-link nav-toggle">
                     <i class="fa fa-money"></i>
                     <span class="title">Careers </span>
                     <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">

                        <li class="nav-item">
                           <a href="add_careers" class="nav-link">
                           <i class="fa fa-angle-double-right"></i>Add Careers
                           </a>
                        </li>

                          <li class="nav-item">
                           <a href="careers_list" class="nav-link">
                           <i class="fa fa-angle-double-right"></i> List
                           </a>
                        </li>
                      
                     </ul>
                  </li>

              <li class="nav-item start">
               <a href="contact_list" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Contact</span>
               <span class="selected"></span>
               </a>
            </li>
            
            <li class="nav-item start">
               <a href="ss_activity.php" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Activity Log</span>
               <span class="selected"></span>
               </a>
            </li>

            <li class="nav-item start">
               <a href="ss_login_activity.php" class="nav-link nav-toggle">
               <i class="material-icons">dashboard</i>
               <span class="title">Login Log</span>
               <span class="selected"></span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- end sidebar menu -->
