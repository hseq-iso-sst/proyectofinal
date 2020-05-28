<?php 
    require_once('config.php');
?>
<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo constant('URL');?>index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Servicios</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="#" aria-expanded="false"><i
                                    data-feather="cloud" class="feather-icon"></i><span
                                    class="hide-menu">Fichas</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/admin/ficha/regFicha.php" class="sidebar-link"><span
                                            class="hide-menu"> Fichas
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/ficha/verFicha.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Fichas
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="#" aria-expanded="false"><i
                                    data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/registrar-user.php"
                                        class="sidebar-link"><span class="hide-menu"> Registrar Usuarios
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/ver-user.php" class="sidebar-link"><span
                                            class="hide-menu"> Lista de Usuarios
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span
                                    class="hide-menu">Empresas</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/admin/empresa/registrar-empresa.php"
                                        class="sidebar-link"><span class="hide-menu">Registrar empresas
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/admin/empresa/ver-empresa.php" class="sidebar-link"><span
                                            class="hide-menu">Lista de empresas
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/visitas.php" class="sidebar-link"><span
                                            class="hide-menu">Visitas
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/procesos_certificacion.php" class="sidebar-link"><span
                                    class="hide-menu">Certificados</span></a>
                                </li>
                               

                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->