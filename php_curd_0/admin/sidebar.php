 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

   <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
       <a class="nav-link " href="home.php">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
       </a>
     </li><!-- End Dashboard Nav -->

     <!--Add employee are here--->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-menu-button-wide"></i><span>Add_Employ Here</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="templates/add_employ.php">
             <i class="bi bi-circle"></i><span>Add_Employ</span>
           </a>
         </li>
       </ul>
       <!--End emlpoyee Section--->

       <!--Add employee are here--->
       <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="templates/view_All_employee.php">
             <i class="bi bi-circle"></i><span>View_All Employee</span>
           </a>
         </li>
       </ul>
       <!--End employee section --->

     <li class="nav-item">
       <a class="nav-link collapsed" href="registration.php">
         <i class="bi bi-card-list"></i>
         <span>Register</span>
       </a>
     </li><!-- End Register Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="login.php">
         <i class="bi bi-box-arrow-in-right"></i>
         <span>Login</span>
       </a>
     </li><!-- End Login Page Nav -->
   </ul>
 </aside><!-- End Sidebar-->