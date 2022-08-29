<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                      
                        <span key="t-dashboards">Superação</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./" key="t-default">  <i class="bx bx-home-circle"></i>Pagina inicial</a></li>
                        <!-- <li><a href="dashboard-saas" key="t-saas">Comparador</a></li>
                        <li><a href="dashboard-crypto" key="t-crypto">Simulador</a></li>
                        <li><a href="dashboard-blog" key="t-blog">Regulamento</a></li>
                        <li><a href="dashboard-blog" key="t-blog">Ranking geral</a></li> -->
                        <li><a href="./comparador" key="t-saas"><i class="bx bx-git-compare bx-tada-hover"></i>Comparador</a></li>
                        <li><a href="./simulador" key="t-crypto"><i class="bx bx-calculator bx-tada-hover"></i>Simulador</a></li>
                        <li><a href="./regulamento" key="t-blog"><i class="bx bx-book-open bx-tada-hover"></i>Regulamento</a></li>
                        <li><a href="./ranking-geral" key="t-blog"><i class="bx bx-bar-chart-alt-2 bx-tada-hover"></i>Ranking geral</a></li>
                    </ul>
                </li>

              
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\Users\Public\Documents\teste superacao\themeforest-template\Skote_v3.3.2\Laravel\Admin\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>