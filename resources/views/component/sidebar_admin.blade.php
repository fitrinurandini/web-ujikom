<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item">
        <a href="{{ route('admin.users.index') }}" class='sidebar-link'>

                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li>

        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-text"></i>
                <span>Article</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="#">Tag</a>
                </li>
                <li class="submenu-item">
                    <a href="#">Article</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-puzzle"></i>
                <span>Module</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-gear"></i>
                <span>Setting</span>
            </a>
        </li>

        <li class="sidebar-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="sidebar-link" style="background: none; border: none; width: 100%; text-align: left; padding: 0.75rem 1rem; display: flex; align-items: center;">
            <i class="bi bi-box-arrow-right" style="margin-right: 0.5rem;"></i>
            <span>Logout</span>
        </button>
    </form>
</li>


    </ul>
</div>
