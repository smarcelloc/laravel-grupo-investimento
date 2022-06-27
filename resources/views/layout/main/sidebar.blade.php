<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light shadow-sm" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    Usuários
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                    Instituições
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                    Grupos
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                    Investimentos
                </a>
            </div>
        </div>

        <div class="sb-sidenav-footer">
            <div class="small">Logado:</div>
            {{ Str::limit('Nome da pessoa', 20, '...') }}
        </div>
    </nav>
</div>
