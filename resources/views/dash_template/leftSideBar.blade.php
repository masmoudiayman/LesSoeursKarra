 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Soeurs Karra</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="{{url('/dashboard')}}" class="nav-link {{request()->is('dashboard') ? 'active' :'' }} ">
              <p>
                Soeurs Karra
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview {{request()->is('ajouterGamme') ? 'menu-open' :'' }}
            {{request()->is('gamme') ? 'menu-open' :'' }}">
            <a href="#" class="nav-link {{request()->is('ajouterGamme') ? 'active' :'' }}
                {{request()->is('gamme') ? 'active' :'' }} ">
              <i class="nav-icon fas fa-folder "></i>
              <p>
                Gammes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/ajouterGamme')}}" class="nav-link {{request()->is('ajouterGamme') ? 'active' :'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter Gamme</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/gamme')}}" class="nav-link {{request()->is('gamme') ? 'active' :'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Les gammes</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview  {{request()->is('ajouterSousGamme') ? 'menu-open' :'' }}
            {{request()->is('sousGamme') ? 'menu-open' :''}}">
            <a href="#" class="nav-link {{request()->is('ajouterSousGamme') ? 'active' :'' }}
                {{request()->is('sousGamme') ? 'active' :'' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Sous gammes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/ajouterSousGamme')}}" class="nav-link {{request()->is('ajouterSousGamme') ? 'active' :'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter sous gamme</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/sousGamme')}}" class="nav-link {{request()->is('sousGamme') ? 'active' :'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Les sous gammes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('ajouterArticle') ? 'menu-open' :'' }}
            {{request()->is('article') ? 'menu-open' :''}}">
            <a href="#" class="nav-link {{request()->is('ajouterArticle') ? 'active' :'' }}
                {{request()->is('article') ? 'active' :''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/ajouterArticle')}}" class="nav-link {{request()->is('ajouterArticle') ? 'active' :'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter un article</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/article')}}" class="nav-link {{request()->is('article') ? 'active' :'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Les articles </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('client') ? 'menu-open' :''}}">
            <a href="#" class="nav-link {{request()->is('client') ? 'active' :''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Clients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/client')}}" class="nav-link {{request()->is('client') ? 'active' :''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p> Les clients</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('commande') ? 'menu-open' :''}}">
            <a href="#" class="nav-link {{request()->is('commande') ? 'active' :''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Commandes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/commande')}}" class="nav-link {{request()->is('commande') ? 'active' :''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Les commandes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('parametre') ? 'menu-open' :''}}">
            <a href="#" class="nav-link {{request()->is('parametre') ? 'active' :''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Parametres
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/parametre')}}" class="nav-link {{request()->is('parametre') ? 'active' :''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Les parametres</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('contacts') ? 'menu-open' :''}}">
            <a href="#" class="nav-link {{request()->is('contacts') ? 'active' :''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Contacts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/contacts')}}" class="nav-link {{request()->is('contacts') ? 'active' :''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Les contact</p>
                </a>
              </li>
            </ul>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>