<script>
  var usertype = localStorage.getItem('usertype');
</script>

<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

  <!-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li> -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span id="span_user_name" class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <div class="flex items-center w-full p-1 pl-6" style="display: flex; align-items: center; padding: 3px; width: 40px; background-color: transparent; height: 4rem;">
    <div class="flex items-center justify-center" style="display: flex; align-items: center; justify-content: center;">
        <img src="assets/img/bcplogo.png" alt="Logo" style="width: 30px; height: auto;">
    </div>
  </div>

  <div style="display: flex; flex-direction: column; align-items: center; padding: 16px;">
    <div style="display: flex; align-items: center; justify-content: center; width: 96px; height: 96px; border-radius: 50%; background-color: #334155; color: #e2e8f0; font-size: 48px; font-weight: bold; text-transform: uppercase; line-height: 1;">
        LC
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; margin-top: 24px; text-align: center;">
        <div style="font-weight: 500; color: #fff;">
            Name
        </div>
        <div style="margin-top: 4px; font-size: 14px; color: #fff;">
            ID
        </div>
    </div>
</div>

<hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <hr class="sidebar-divider">

  <li class="nav-heading" id="nav_heading">Pages</li>



  <hr class="sidebar-divider">

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="login.php">
      <i class="bi bi-box-arrow-right"></i>
      <span>Logout</span>
    </a>
  </li>


</ul>

</aside><!-- End Sidebar-->

<script src="assets/js/jquery/jquery.min.js"></script>

<script>
  var links="";
console.log(usertype.toUpperCase())
  if(usertype.toUpperCase()=="ENCODER"){
    links +=`
      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-globe2"></i><span>Student Council</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="system-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="modules.php">
          <i class="bi bi-circle icon"></i><span>Student Info</span>
        </a>
      </li>
      <li>
        <a href="orglist.php">
          <i class="bi bi-circle icon"></i><span>Organization List</span>
        </a>
      </li>
      <li>
        <a href="orgreg.php">
          <i class="bi bi-circle icon"></i><span>Registration</span>
        </a>
      </li>
      <li>
        <a href="orgren.php">
          <i class="bi bi-circle icon"></i><span>Renewal</span>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#logbook-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-check"></i><span>Logbook</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="logbook-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="logbook.php">
          <i class="bi bi-circle icon"></i><span>Visitors</span>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#activies-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-calendar2-week"></i><span>Student Activities</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="activies-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="logbook.php">
          <i class="bi bi-circle icon"></i><span>Calendar Events</span>
        </a>
      </li>
    </ul>
  </li><!-- End System Nav -->

    `;


  }
  else if(usertype.toUpperCase()=="ADMIN"){
    links+=`
    
  <li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#access-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>Manage Access</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="access-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="create-user.php">
          <i class="bi bi-circle icon"></i><span>Create User</span>
        </a>
      </li>
      <li>
        <a href="logs.php">
          <i class="bi bi-circle icon"></i><span>Logs</span>
        </a>
      </li>
    </ul>
    <a class="nav-link collapsed" data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-globe2"></i><span>Student Council</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="system-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="modules.php">
          <i class="bi bi-circle icon"></i><span>Student Info</span>
        </a>
      </li>
      <li>
        <a href="admin-org.php">
          <i class="bi bi-circle icon"></i><span>Organization List</span>
        </a>
      </li>
      <li>
        <a href="admin-reg.php">
          <i class="bi bi-circle icon"></i><span>Approval</span>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#logbook-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-check"></i><span>Logbook</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="logbook-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="logbook.php">
          <i class="bi bi-circle icon"></i><span>Visitors</span>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#activies-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-calendar2-week"></i><span>Student Activities</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="activies-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="logbook.php">
          <i class="bi bi-circle icon"></i><span>Calendar Events</span>
        </a>
      </li>
    </ul>
  </li><!-- End System Nav -->

    `;
   
  }
  const navbar = document.getElementById('nav_heading');
  $("#nav_heading").append(links);
</script>