    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
        <div class="app-sidebar__user">
          <img class="app-sidebar__user-avatar" src="{{ '/img/user.png' }}" alt="User Image">
          <div>
            <p class="app-sidebar__user-name">{{ session('user.nome') }}</p>
            <p class="app-sidebar__user-designation">{{ session('user.cargo') }}</p>
          </div>
        </div>
        <hr style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
        <ul class="app-menu">
          <li><a class="app-menu__item" href="/"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a></li>
          <li><a class="app-menu__item" href="/funcionarios"><i class="app-menu__icon fa fa-address-card-o"></i><span class="app-menu__label">Funcionários</span></a></li>
          <li><a class="app-menu__item" href="/usuarios"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Usuários</span></a></li>
        </ul>
      </aside>
  </div>