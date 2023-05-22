<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/profiles*') ? 'active' : '' }}" aria-current="page" href="/dashboard/profiles">
            <span data-feather="user" class="align-text-bottom"></span>
            Profile Akun
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Arsip Berita Acara</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/byDivisis*') ? 'active' : '' }}" href="dashboard/byDivisis" aria-current="page"><span data-feather="archive" class="align-text-bottom"></span> Divisi</a>
            <a class="nav-link {{ Request::is('dashboard/byClients*') ? 'active' : '' }}" href="dashboard/byClients" aria-current="page"><span data-feather="briefcase" class="align-text-bottom"></span> Client</a>
          </li>
        </ul>
      </ul>

      @can('konsultan')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Konsultan</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/beritaAcaras/create') ? 'active' : '' }}" aria-current="page" href="/dashboard/beritaAcaras/create">
            <span data-feather="file-plus" class="align-text-bottom"></span>
            Buat Berita Acara
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/beritaAcaras') ? 'active' : '' }}" aria-current="page" href="/dashboard/beritaAcaras">
            <span data-feather="upload" class="align-text-bottom"></span>
            Upload Berita Acara
          </a>
        </li>
      </ul>
      @endcan

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" aria-current="page" href="/dashboard/users">
            <span data-feather="users" class="align-text-bottom"></span>
            Kelola User
          </a>
        </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/perusahaans*') ? 'active' : '' }}" aria-current="page" href="/dashboard/perusahaans">
            <span data-feather="briefcase" class="align-text-bottom"></span>
            Kelola Client
          </a>
        </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/divisis*') ? 'active' : '' }}" aria-current="page" href="/dashboard/divisis">
            <span data-feather="clipboard" class="align-text-bottom"></span>
            Kelola Divisi
          </a>
        </li>
      </ul>
      @endcan

    </div>
</nav>