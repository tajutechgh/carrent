<div class="side-content-wrap">
  <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true">
    <ul class="navigation-left">
      <li class="nav-item active">
        <a class="nav-item-hold" href="{{ route('index') }}">
          <i class="nav-icon i-Bar-Chart"></i>
          <span class="nav-text">Dashboard</span>
        </a>
        <div class="triangle"></div>
      </li>
      @can('user.report', Auth::user())
      <li class="nav-item">
        <a class="nav-item-hold" href="{{ route('bookingReport') }}">
          <i class="nav-icon i-File-Horizontal-Text"></i>
          <span class="nav-text">Report</span>
        </a>
        <div class="triangle"></div>
      </li>
      @endcan
      @can('user.manage', Auth::user())
      <li class="nav-item" data-item="manages">
        <a class="nav-item-hold" href="dashboard.v1.html#">
          <i class="nav-icon i-Suitcase"></i>
          <span class="nav-text">Manage</span>
        </a>
        <div class="triangle"></div>
      </li>
      @endcan
      @can('user.settings', Auth::user())
      <li class="nav-item" data-item="settings">
        <a class="nav-item-hold" href="dashboard.v1.html#">
          <i class="nav-icon i-Double-Tap"></i>
          <span class="nav-text">Settings</span>
        </a>
        <div class="triangle"></div>
      </li>
      @endcan
    </ul>
  </div>

  <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
    <!-- Submenu Dashboards -->
    <ul class="childNav" data-parent="manages">
      <li class="nav-item">
        <a href="{{ route('vehicle.index') }}">
          <span class="item-name">Vehicles</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('driver.index') }}">
          <span class="item-name">Drivers</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('booking.index') }}">
          <span class="item-name">Bookings</span>
        </a>
      </li>
    </ul>
    <ul class="childNav" data-parent="settings">
      <li class="nav-item">
        <a href="{{ route('role.index') }}">
          <span class="item-name">Roles</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('permission.index') }}">
          <span class="item-name">Permissions</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('user.index') }}">
          <span class="item-name">Users</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidebar-overlay"></div>
</div>