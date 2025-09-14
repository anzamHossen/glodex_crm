{{-- left sidebat to admin --}}
@if(Auth::user()->user_type == 1)
    <!-- Brand Logo -->
    <a href="index.html" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

     <div data-simplebar>
        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Dash</li>

            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text"> Pending Agent </span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Pending Student</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Country</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarHospital" aria-expanded="false" aria-controls="sidebarHospital" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-medical-cross"></i></span>
                    <span class="menu-text"> Country</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarHospital">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="apps-hospital-staffs.html" class="side-nav-link">
                                <span class="menu-text">Add Country</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">University</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Course</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Appplication</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>
@endif

{{-- Left sidebar to agent --}}
@if(Auth::user()->user_type == 2)
    <!-- Brand Logo -->
    <a href="index.html" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>
        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Dash</li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Country</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarHospital" aria-expanded="false" aria-controls="sidebarHospital" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-medical-cross"></i></span>
                    <span class="menu-text"> Country</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarHospital">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="apps-hospital-staffs.html" class="side-nav-link">
                                <span class="menu-text">Add Country</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">University</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Course</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Appplication</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>
@endif

{{-- Left sidebar to student --}}
@if(Auth::user()->user_type == 3)
    <!-- Brand Logo -->
    <a href="index.html" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>
        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Dash</li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Country</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarHospital" aria-expanded="false" aria-controls="sidebarHospital" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-medical-cross"></i></span>
                    <span class="menu-text"> Country</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarHospital">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="apps-hospital-staffs.html" class="side-nav-link">
                                <span class="menu-text">Add Country</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">University</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Course</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text">Appplication</span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>
@endif

