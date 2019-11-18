<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      <?php $currentUser = Auth::user() ?>
        <div class="pull-left image">
          <img src="{{$currentUser->gravatar()}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En Ligne</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{url('/home')}}">
            <i class="fa fa-dashboard"></i> <span>Tableau de Bord</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.articles.index')}}"><i class="fa fa-circle-o"></i> Tous les articles</a></li>
            <li><a href="{{route('backend.articles.create')}}"><i class="fa fa-circle-o"></i> Créer nouvel article</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
