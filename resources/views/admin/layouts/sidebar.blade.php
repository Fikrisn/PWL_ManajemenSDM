<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Kegiatan</li>
            <li class="nav-item">
                <a href="{{ url('/kegiatan-agenda') }}" class="nav-link {{ $activeMenu == 'kegiatan-agenda' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Kegiatan Agenda</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/kegiatan-anggota') }}" class="nav-link {{ $activeMenu == 'kegiatan-anggota' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calendar-check"></i>
                    <p>Kegiatan Anggota</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dosen') }}" class="nav-link {{ $activeMenu == 'dosen' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    <p>Dosen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/repository') }}" class="nav-link {{ $activeMenu == 'repository' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Repository</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/saran') }}" class="nav-link {{ $activeMenu == 'saran' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>Saran</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
