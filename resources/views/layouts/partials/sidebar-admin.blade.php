{{-- left sidebat to admin --}}
<!-- Brand Logo -->
<a href="{{ route('admin_dashboard') }}" class="logo">
    <span class="logo-light">
        <span class="logo-lg"><img src="{{asset('back-end/assets/images/logo-main.png')}}" style="height: 2rem" alt="logo"></span>
        <span class="logo-sm"><img src="{{asset('back-end/assets/images/icon-sm.png')}}" style="height: 2rem" alt="small logo"></span>
    </span>

    <span class="logo-dark">
        <span class="logo-lg"><img src="{{ asset('back-end/assets/images/logo-main.png') }}" alt="dark logo"></span>
        <span class="logo-sm"><img src="{{ asset('back-end/assets/images/icon-sm.png') }}" alt="small logo"></span>
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
        <li class="side-nav-item">
            <a href="{{ route('admin_dashboard') }}" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('pending_agent_user') }}" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-user-pause"></i></span>
                <span class="menu-text">Pending Agent</span>
                <span class="badge bg-success rounded-pill">{{ $pendingAgentUser ?? 0}}</span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('active_agent_user') }}" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-user-check"></i></span>
                <span class="menu-text">Active Agent</span>
                <span class="badge bg-success rounded-pill">{{ $activeAgentUser ?? 0}}</span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('pending_student_user') }}" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-user-pause"></i></span>
                <span class="menu-text">Pending Student</span>
                <span class="badge bg-success rounded-pill">{{ $pendingStudenttUser ?? 0}}</span>
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
                        <a href="{{ route('add_new_country') }}" class="side-nav-link">
                            <span class="menu-text">Add Country</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('country_list') }}" class="side-nav-link">
                            <span class="menu-text">Country List</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarUniversity" aria-expanded="false" aria-controls="sidebarUniversity" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-map-heart"></i></span>
                <span class="menu-text"> University</span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarUniversity">
                <ul class="sub-menu">
                    <li class="side-nav-item">
                        <a href="{{ route('add_new_university') }}" class="side-nav-link">
                            <span class="menu-text">Add University</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <span class="menu-text">University List</span>
                        </a>
                    </li>
                </ul>
            </div>
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



