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
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                                    class="hide-menu">Visitas</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/admin/visita/ver-visitas.php" class="sidebar-link"><span
                                            class="hide-menu">Lista de visitas
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