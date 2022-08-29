<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo/logo-pinheiro-unicred-preto.svg') }}" alt=""
                            height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo/unicred-preto.png') }}" alt="" height="17">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo/logo-pinheiro-unicred-branco.svg') }}" alt=""
                            height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo/logo-unicred-branco.svg') }}" alt="" height="25">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <a href="./ranking-geral" class="linkCarousel d-none d-md-block">
            <div class="carousel-align">
                <div id="carouselRanking" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <span class="img-fluid badge badge-soft-dark">Ranking</span>
                            <span class="img-fluid badge badge-soft-success">Grupo 0</span>
                            <span class="img-fluid"><i class="bx bxs-trophy first"></i> Canoas <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy second"></i> Guaíba <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy third"></i> Lajeado </span>
                        </div>
                        <div class="carousel-item">
                            <span class="img-fluid badge badge-soft-dark">Ranking</span>
                            <span class="img-fluid badge badge-soft-success">Grupo 1</span>
                            <span class="img-fluid"><i class="bx bxs-trophy first"></i> Marau <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy second"></i> Venâncio <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy third"></i> Projeta </span>
                        </div>
                        <div class="carousel-item active">
                            <span class="img-fluid badge badge-soft-dark">Ranking</span>
                            <span class="img-fluid badge badge-soft-success">Grupo 2</span>
                            <span class="img-fluid"><i class="bx bxs-trophy first"></i> Capão da Canoa <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy second"></i> Porto Alegre <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy third"></i> Casca </span>
                        </div>
                        <div class="carousel-item">
                            <span class="img-fluid badge badge-soft-dark">Ranking</span>
                            <span class="img-fluid badge badge-soft-success">Grupo 3</span>
                            <span class="img-fluid"><i class="bx bxs-trophy first"></i> Gramado <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy second"></i> Caruaru <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy third"></i> Recife</span>
                        </div>
                        <div class="carousel-item">
                            <span class="img-fluid badge badge-soft-dark">Ranking</span>
                            <span class="img-fluid badge badge-soft-success">Grupo 4</span>
                            <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves <span
                                    class="separador"></span></span>
                            <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                        </div>
                    </div>
                </div>
            </div> <!-- carrousel superior -->
        </a>
        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/github.png') }}" alt="Github">
                                    <span>Sistema 1</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                    <span>Sistema 2</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Sistema 3</span>
                                </a>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Sistema 4</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/mail_chimp.png') }}"
                                        alt="mail_chimp">
                                    <span>Sistema 5</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Sistema 6</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ucfirst(Auth::user()->name)}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="contacts-profile"><i
                            class="bx bx-user font-size-16 align-middle me-1"></i> <span
                            key="t-profile">Perfil</span></a>
                    <a class="dropdown-item d-block" href="#" data-bs-toggle="modal"
                        data-bs-target=".change-password"><span class="badge bg-success float-end">11</span><i
                            class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                            key="t-settings">Config</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                            key="t-logout">Sair</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <div>
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" hidden
                            checked>
                        <label onclick="toggleMode()" class="form-check-label" for="light-mode-switch"><i
                                class="bx bxs-moon" id="labelSwitch"></i></label>
                    </div>
                </button>
            </div>
        </div>
    </div>
</header>

<script>
    
    function toggleMode() {

        // Carrega Loader por 2seg na troca de modo noturno
        $('.loader').show();
        setTimeout(function(){
            $('.loader').hide();
        }, 1000);
        // ================================================//

        var botaoSwitcherModo = document.getElementById("labelSwitch");

        if (botaoSwitcherModo.className == "bx bxs-moon") {
            botaoSwitcherModo.className = "bx bxs-sun";
        }
        else {
            botaoSwitcherModo.className = "bx bxs-moon";
        }
    }
</script>


<!--  Change-Password example -->
<div class="modal fade change-password" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="change-password">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">
                    <div class="mb-3">
                        <label for="current_password">Current Password</label>
                        <input id="current-password" type="password"
                            class="form-control @error('current_password') is-invalid @enderror" name="current_password"
                            autocomplete="current_password" placeholder="Enter Current Password"
                            value="{{ old('current_password') }}">
                        <div class="text-danger" id="current_passwordError" data-ajax-feedback="current_password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="newpassword">New Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="new_password" placeholder="Enter New Password">
                        <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userpassword">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new_password" placeholder="Enter New Confirm password">
                        <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword"
                            data-id="{{ Auth::user()->id }}" type="submit">Update Password</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
