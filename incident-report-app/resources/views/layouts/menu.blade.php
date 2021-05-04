<!-- need to remove -->

<li class="nav-item">
    @role('Super Admin')
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <!-- <a href="{{ route('user.profile') }}" class="nav-link active">
        <i class="nav-icon fas fa-user"></i>
        <p>Profile</p>
    </a> -->
    <a href="{{ route('userGetPassword') }}" class="nav-link active">
        <i class="nav-icon fas fa-lock"></i>
        <p>Password Change</p>
    </a>

    <a href="{{ route('permission.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-bomb"></i>
        <p>Permissions</p>
    </a>
    <a href="{{ route('role.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-bomb"></i>
        <p>Roles</p>
    </a>
    <a href="{{ route('user.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-user"></i>
        <p>Users</p>
    </a>
     <a href="{{ route('reports.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Records</p>
    </a>
    @endrole
    @role('Admin')
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <a href="{{ route('reports.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-book"></i>
        <p>Records</p>
    </a>
    @endrole
    
  
    
</li>

