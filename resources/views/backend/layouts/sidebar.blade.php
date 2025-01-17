<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
  

    
    <hr class="sidebar-divider">
        <!-- Heading -->
        

<!-- 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#propertyCollapse" aria-expanded="true" aria-controls="propertyCollapse">
          <i class="fas fa-cubes"></i>
          <span>Event</span>
        </a>
        <div id="propertyCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Events Options:</h6>
            <a class="collapse-item" href="{{route('event.index')}}">View</a>
            <a class="collapse-item" href="{{route('event.create')}}">Add</a>
          </div>
        </div>
    </li> -->
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#wpropertyCollapse" aria-expanded="true" aria-controls="propertyCollapse">
          <i class="fas fa-cubes"></i>
          <span>Wedding Event</span>
        </a>
        <div id="wpropertyCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Events Options:</h6>
            <a class="collapse-item" href="{{route('wedding.index')}}">Wedding</a>
            <a class="collapse-item" href="{{route('nonwedding.index')}}">Non Wedding</a>
          </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        General Settings
    </div>
    <!--<li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}">
          <i class="fas fa-table"></i>
          <span>Coupon</span></a>
    </li>-->
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Settings</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>