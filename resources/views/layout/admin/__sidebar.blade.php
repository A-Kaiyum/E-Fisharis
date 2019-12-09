<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{Route('admin.dashboard')}}">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Employee Manager</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('employee.create')}}">Add Employee</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('employee.index')}}">List Of Employee</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Worker Manager</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('worker.create')}}">Add Worker</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('worker.index')}}">List Of Worker</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="ti-package menu-icon"></i>
                <span class="menu-title">Project Manager</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('project.create')}}">Open new Project</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('project.index')}}">List Of Project</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="ti-package menu-icon"></i>
                <span class="menu-title">Feed Manager</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Open new Project</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">List Of Project</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

