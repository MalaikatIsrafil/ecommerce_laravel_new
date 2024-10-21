<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">


    <div class="sidebar-brand">
      <a href="#">Teknik Informatika | RPL</a>
    </div>

    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">RPL</a>
    </div>

    <!--
    <ul class="sidebar-menu">
      <li class="menu-header">Menu</li>

      <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-home"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="{{ Request::is('admin.product') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.product') }}">
          <i class="fas fa-box"></i><span>Produk</span></a>
      </li>

      <li class="{{ Request::is('admin.distributor') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.distributor') }}">
        <i class="fas fa-user"></i><span>Distributor</span></a>
      </li>

      <li class="{{ Request::is('admin.flashsale') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.flashsale') }}">
        <i class="fas fa-percentage"></i><span>Flash Sale</span></a>
      </li>

    </ul>
-->
    <ul class="sidebar-menu">
      <li class="menu-header">Menu</li>

      <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-home"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="{{ Route::is('admin.product') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.product') }}">
          <i class="fas fa-box"></i><span>Produk</span></a>
      </li>

      <li class="{{ Route::is('admin.distributor') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.distributor') }}">
          <i class="fas fa-user"></i><span>Distributor</span></a>
      </li>

      <li class="{{ Route::is('admin.flashsale') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.flashsale') }}">
          <i class="fas fa-percentage"></i><span>Flash Sale</span></a>
      </li>

    </ul>

  </aside>


</div>