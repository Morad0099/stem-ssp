<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
            <img src="img/logo_212.png" alt="">
            
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/person-removebg-preview.png') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ strtoupper(Auth::user()->name ?? null) }}</h6>
                <span>{{ ucfirst(Auth::user()->role ?? null) }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <!-- Dashboard Link for all users -->
            <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>

            <!-- For Admin -->
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('applications.index') }}" class="nav-item nav-link {{ request()->is('applications') ? 'active' : '' }}">
                    <i class="fa fa-users me-2"></i> All Applications
                </a>
                <a href="{{ route('applications.all') }}" class="nav-item nav-link {{ request()->is('applications/all') ? 'active' : '' }}">
                    <i class="fa fa-users me-2"></i>Assigned Students
                </a>
                <a href="{{ route('users.index') }}" class="nav-item nav-link {{ request()->is('users*') ? 'active' : '' }}">
                    <i class="fa fa-users me-2"></i>User Management
                </a>
            @endif

            <!-- For Student -->
            @if(Auth::user()->role == 'student')
                <a href="{{ route('student.applications') }}" class="nav-item nav-link {{ request()->is('student/applications') ? 'active' : '' }}">
                    <i class="fa fa-book me-2"></i>My Applications
                </a>
            @endif
        </div>
    </nav>
</div>
