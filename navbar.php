<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <?php
              $q = mysqli_query($link,"SELECT logo from logo");
              $row = mysqli_fetch_assoc($q);
            ?>
              <img src="<?php echo $row['logo']; ?>" class="logo">
            </a>
          </li>
         
       </ul>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="margin-top:65px;">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
          href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fab fa-blogger-b"></i>
            <span class="nav-link-text">Logo Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="logomanagement.php">Manage Logo</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
          href="#collapseComponen" data-parent="#exampleAccordion">
          <i class="fas fa-sliders-h"></i>
            <span class="nav-link-text">Image Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponen">
            <li>
              <a href="slidermanagement.php">Manage Slider Image</a>
            </li>
            <!-- <li>
              <a href="existingsliders.php">existing Slider Image</a>
            </li> -->
            <li>
              <a href="bannermanagement.php">Manage Banner Image</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
          href="#collapseComponent" data-parent="#exampleAccordion">
          <i class="fas fa-cart-plus"></i>
            <span class="nav-link-text">Category Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponent">
            <li>
              <a href="category.php">Category Management</a>
            </li>
            <li>
              <a href="subcategory.php">SubCategory Management</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti1" data-parent="#exampleAccordion">
            <i class="fab fa-product-hunt"></i>
            <span class="nav-link-text">Product Management </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti1">
            <li>
              <a href="manageproduct.php">Manage Product</a>
            </li>
            <li>
              <a href="manageitem.php">Manage Item</a>
            </li>
            <li>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="locationmanagement.php">
            <i class="fas fa-map-marker-alt"></i>
            <span class="nav-link-text">Location Management</span>
          </a>
        </li>
     
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <i class="fas fa-user"></i>
            <span class="nav-link-text">User Management </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="createuser.php">Create User</a>
            </li>
            <li>
              <a href="existinguser.php">Existing User</a>
            </li>
            <li>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Ordermanagement.php">
           <i class="fab fa-first-order-alt"></i>
            <span class="nav-link-text">Order Management</span>
          </a>
        </li>
      
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Customermanagement.php">
           <i class="fas fa-user-astronaut"></i>
            <span class="nav-link-text">Customer Management</span>
          </a>
        </li>
        
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Discountmanagement.php">
           <i class="fab fa-discourse"></i>
            <span class="nav-link-text">Discount Management</span>
          </a>
        </li>
         
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Reportmanagement.php">
           <i class="fas fa-flag"></i>
            <span class="nav-link-text">Report Management</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Deliverymanagement.php">
           <i class="fas fa-truck"></i>
            <span class="nav-link-text">Delivery Management</span>
          </a>
        </li>
         
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="pricemanagement.php">
            <!-- <i class="fa fa-fw fa-dashboard"></i> -->
          <i class="far fa-money-bill-alt"></i>
            <span class="nav-link-text">Price Management</span>
          </a>
        </li>
       </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
          <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-sign-out-alt"></i>Logout</a>
          </li>
       </ul>
    </div>
  </nav>