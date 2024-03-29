<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <span class="brand-text font-weight-light">TreinaWeb</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info d-flex justify-content-between w-100">
            <a href="#">{{auth()->user()->name}}</a>
            <a 
                href="{{route('logout')}}" 
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" 
                            class="btn btn-danger btn-sm">
                            Sair
                            <i class="fas fa-share-square"></i>
            </a>
            <form action="{{route('logout')}}" method="post" style="display: none;" id="logout-form">
                @csrf
            </form>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="{{route('home')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Entrada
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('empresas.create')}}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Novo fornecedor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('empresas.index')}}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de fornecedores</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-up"></i>
                    <p>
                        Saída
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('empresas.create')}}?tipo=cliente" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Novo cliente</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('empresas.index')}}?tipo=cliente" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de clientes</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Financeiro
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('movimentos-financeiros.create')}}" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo lançamento</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('movimentos-financeiros.index')}}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Relatório financeiro</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-box"></i>
                    <p>
                        Cadastros
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('produtos.index')}}" class="nav-link">
                            <i class="fas fa-boxes dollar-sign nav-icon"></i>
                            <p>Produtos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('users.index')}}" class="nav-link">
                            <i class="fas fa-users dollar-sign nav-icon"></i>
                            <p>Usuarios</p>
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