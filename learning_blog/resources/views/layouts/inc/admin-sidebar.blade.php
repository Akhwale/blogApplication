<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Panel</div>
                            <a class="nav-link " href="{{ url('admin/dashboard') }}">
                                <div class="sb-nav-link-icon text-warning "><i class="fas fa-tachometer-alt "></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Posts</div>
                            <a class="nav-link " href="{{url('admin/add-post')}}">
                                <div class="sb-nav-link-icon text-warning "><i class="fa-solid fa-plus text-warning"></i></div>
                                Add Post
                            </a>
                            <a class="nav-link " href="{{url('admin/posts')}}">
                                <div class="sb-nav-link-icon text-warning "><i class="fa-solid fa-eye"></i></div>
                                View Post
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Users</div>
        
                            <a class="nav-link " href="#">
                                <div class="sb-nav-link-icon text-warning "><i class="fa-solid fa-eye"></i></div>
                                View Users
                            </a>

                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       "To insert user name"
                    </div>
                </nav>
            </div>