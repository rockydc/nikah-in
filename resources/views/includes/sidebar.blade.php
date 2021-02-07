        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('anesdashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">User Wedding</div>
            </a>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('anesdashboard')}}">
                <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - rsvp -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('anesrsvp')}}">
                    <i class="fa fa-inbox"></i>
                    <span>RSVP Online</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - guest book -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa fa-book"></i>
                    <span>Guest Book</span></a>
            </li>
             -->
            <!-- Divider -->
            <hr class="sidebar-divider">
          
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->