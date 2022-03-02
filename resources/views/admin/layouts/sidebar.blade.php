      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/user" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/admin" class="nav-link {{ (request()->segment(2) == '') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/message" class="nav-link {{ (request()->segment(2) == 'message') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/competition" class="nav-link {{ (request()->segment(2) == 'competition') ? 'active' : '' }}">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Competitions
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/sponsorship" class="nav-link {{ (request()->segment(2) == 'sponsorship') ? 'active' : '' }}">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Sponsorships
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/exhibition" class="nav-link {{ (request()->segment(2) == 'exhibition') ? 'active' : '' }}">
              <i class="nav-icon fas fa-camera"></i>
              <p>
                Exhibitions
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/talkshow" class="nav-link {{ (request()->segment(2) == 'talkshow') ? 'active' : '' }}">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Talkshows
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/judge" class="nav-link {{ (request()->segment(2) == 'judge') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Judges
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/finalist" class="nav-link {{ (request()->segment(2) == 'finalist') ? 'active' : '' }}">
              <i class="nav-icon fas fa-rocket"></i>
              <p>
                Finalists
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->