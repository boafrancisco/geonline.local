<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ asset('Auth-Panel/index3.html') }}" class="brand-link">
        <img src="{{ asset('Auth-Panel/dist/img/sticon-logo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GestaESCOLAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Auth-Panel/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->first_name ?? 'Desconhecido' }}
                    {{ auth()->user()->last_name ?? 'Desconhecido' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ asset('Auth-Panel/#') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panel.main.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Principal</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('Auth-Panel/#') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Cadastro
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panel.student.index') }}" class="nav-link">
                                <i class="far fa-school nav-icon"></i>
                                <p>Estudante</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('panel.teacher.index') }}" class="nav-link">
                                <i class="far fa-book nav-icon"></i>
                                <p>Professor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('panel.course.index') }}" class="nav-link">
                                <i class="far fa-book nav-icon"></i>
                                <p>Curso</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('panel.class.index') }}" class="nav-link">
                                <i class="far fa-class nav-icon"></i>
                                <p>Turma</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('panel.subject.index') }}" class="nav-link">
                                <i class="far fa-subject nav-icon"></i>
                                <p>Disciplina</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('Auth-Panel/#') }}" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuários
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panel.user.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de Usuários</p>
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
