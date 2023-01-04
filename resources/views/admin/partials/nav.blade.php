<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

    <li class="nav-header">NAVEGACION</li>
    <li class="nav-item">
      <a href="{{ route('admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : ''}}" >
        <i class="nav-icon fas fa-home"></i>
        <p>
            Inicio
        </p>
      </a>
    </li>
    <li class="nav-item {{ request()->is('admin/posts') ? 'menu-is-opening menu-open' : '' }}">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-envelope"></i>
        <p>
          Blog
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.posts.index') }}" class="nav-link">
          <a href="{{ route('admin.posts.index') }}" class="nav-link {{ request()->is('admin/posts') ? 'active' : ''}}">
            <i class="far fa-eye nav-icon"></i>
            <p>Ver todos los posts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-pencil"></i>
            <p>Crear un post</p>
          </a>
        </li>
      </ul>
    </li>

    {{-- <li class="nav-header">MULTI LEVEL EXAMPLE</li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-circle nav-icon"></i>
        <p>Level 1</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Level 1
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Level 2</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Level 2
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Level 3</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Level 3</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Level 3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Level 2</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-circle nav-icon"></i>
        <p>Level 1</p>
      </a>
    </li>
    <li class="nav-header">LABELS</li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-danger"></i>
        <p class="text">Important</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-warning"></i>
        <p>Warning</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-info"></i>
        <p>Informational</p>
      </a>
    </li> --}}
  </ul>
