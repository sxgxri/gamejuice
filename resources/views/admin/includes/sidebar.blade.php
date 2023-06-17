  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >

    <!-- Sidebar -->
    <div class="sidebar">

    <ul class=" pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item ">
            <a href="{{ route('main.index') }}" class="nav-link">
                <i class="nav-icon fas fa-backward"></i>
                <p>
                    Вернуться на сайт
                </p>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    На главную
                </p>
            </a>
        </li>
          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
              <p>
                Категории
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
                <i class="nav-icon fa fa-tag"></i>
                <p>
                    Теги
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon far fa-sticky-note"></i>
                <p>
                    Посты
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    Пользователи
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.article.index') }}" class="nav-link">
                <i class="nav-icon far fa-sticky-note"></i>
                <p>
                    Статьи
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.artcategory.index') }}" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                    Категории статей
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.arttag.index') }}" class="nav-link">
                <i class="nav-icon fas fa fa-tag"></i>
                <p>
                    Теги для статей
                </p>
            </a>
        </li>
        </ul>

    </div>
    <!-- /.sidebar -->
  </aside>
