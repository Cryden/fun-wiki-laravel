<div id="sidebar-menu" class="main_menu_side hidden-print main_menu fw_menu">
  <div class="menu_section">
    <h3>Основные</h3>
    <ul class="nav side-menu">
      <li><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> Home </a>
      </li>
      <li><a><i class="fa fa-user"></i> Пользователи <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('admin.users') }}">Все пользователи</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>