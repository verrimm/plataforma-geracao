

<?php $__env->startSection('title'); ?> Superação <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Pagina Inicial <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">

    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.css')); ?>">
<?php $__env->stopSection(); ?>

    <div class="row">
                    <div class="col-xl-12">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-8">
                                <div class="card border border-primary mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="badge bg-primary" style="font-size: 100%;"><span class="bx bx-map-pin"></span> Grupo 5</p>
                                                <h5 class="mb-0">Unicred Central RS</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="badge bg-primary" style="font-size: 100%;"><span class="bx bx-trophy"></span> Pontuação</p>
                                                <h5 class="mb-0">677</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer progressBarBG">
                                        <div class="d-flex titleProgressBar">
                                            <h6>Faltam <strong class="success pontosInicio">267 pontos</strong> para
                                                próxima colocação</h6>
                                        </div>

                                        <div class="custom-progess mt-3 mb-3">

                                            <div class="progress animated-progess progress-lg">
                                                <div class="progress-bar-striped js-completed-bar progress-bar bg-success rounded-bar" role="progressbar" data-complete="10" style="width: 10%; opacity: 1;">
                                                </div>
                                                <svg class="fogueteBar" viewBox="0 0 508.947 508.947" width="256" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <g class="animate__animated animate__shakeX animate__delay-1s animate__repeat-3">
                                                            <path class="animate__animated animate__pulse animate__infinite" d="m16.263 420.37c-9.695 28.427-13.445 62.327-16.263 88.568l63.293-34.367 31.809-60.735-3.243-26.787-33.507-9.964c-5.072 1.351-9.932 3.36-14.474 5.988-15.384 8.9-21.839 20.359-27.615 37.297z" fill="#ffd845"></path>
                                                            <path class="animate__animated animate__pulse animate__infinite" d="m88.567 492.674c16.963-5.785 28.406-12.249 37.297-27.615 2.628-4.541 4.638-9.401 5.988-14.473l-5.964-31.204-30.787-5.547c-11.497 11.498-83.528 83.53-95.101 95.103 16.067-1.726 56.392-5.291 88.567-16.264z" fill="#ffb454"></path>
                                                            <path d="m138.222 320.715-46.363-14.849c-11.075 11.074-42.221 42.219-52.363 52.361 6.727 6.728 48.836 48.837 55.606 55.607l42.453-12.62 9.91-39.742z" fill="#565686"></path>
                                                            <path d="m194.889 377.084-47.424-15.611c-10.335 10.334-42.361 42.36-52.363 52.362 6.728 6.727 48.836 48.836 55.606 55.607 9.854-9.853 42.13-42.129 52.363-52.362z" fill="#454572"></path>
                                                            <path d="m335.092 322.048c-.101.09-82.904 73.827-96.203 85.669v87.331c12.122-.116 18.674.35 30-.698 87.282-8.07 150-85.353 150-171.581 0-14.801 0-31.777 0-46.578z" fill="#2ebeef"></path>
                                                            <path d="m232.746 90.048c-14.801 0-31.777 0-46.578 0-86.584 0-163.54 63.033-171.581 150-1.047 11.324-.582 17.87-.698 30h87.331c101.888-117.148 79.073-90.915 82.336-94.666z" fill="#00e4ef"></path>
                                                            <path d="m358.067 22.168c-128.402 44.081-240.495 153.089-266.209 283.699 6.727 6.727 48.835 48.835 55.606 55.606l143.467-110.989 107.496-139.974-11.283-57.207z" fill="#f9f2f8"></path>
                                                            <path d="m398.427 110.51c-7.076 7.076-243.886 243.886-250.962 250.963 6.727 6.727 48.835 48.835 55.606 55.606 66.184-13.029 126.66-48.114 175.981-96.166 48.386-47.142 86.034-106.763 107.798-170.28l-32.949-27.072z" fill="#eceae7"></path>
                                                            <path d="m271.482 152.642c-23.431 23.431-23.486 61.327 0 84.814l53.406-31.407 31.406-53.406c-23.402-23.404-61.297-23.516-84.812-.001z" fill="#565686"></path>
                                                            <path d="m271.482 237.456c23.403 23.403 61.298 23.514 84.812 0 23.431-23.431 23.486-61.327 0-84.814-10.26 10.262-74.482 74.484-84.812 84.814z" fill="#454572"></path>
                                                            <path d="m508.889.048c-7.72.542-35.744-1.85-76.448 4.05-21.601 3.13-46.771 8.595-74.373 18.07 2.549 8.404 2.643 50.625 40.359 88.342l67.128-43.128z" fill="#ff8659"></path>
                                                            <path d="m398.427 110.51c36.905 36.904 82.628 38.388 88.424 40.123 9.479-27.668 14.938-52.762 18.056-74.254 5.897-40.65 3.429-68.414 3.982-76.331-6.129 6.129-104.333 104.333-110.462 110.462z" fill="#ff405c"></path>
                                                            <path d="m292.686 173.845c-11.711 11.711-11.746 30.661 0 42.407l32.203-10.204 10.203-32.203c-11.702-11.701-30.65-11.757-42.406 0z" fill="#00e4ef"></path>
                                                            <path d="m292.686 216.252c11.685 11.684 30.629 11.776 42.406 0 11.709-11.71 11.748-30.659 0-42.407-5.15 5.15-37.238 37.239-42.406 42.407z" fill="#2ebeef"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>

                                            <div class="avatar-xs progress-icon-start">
                                                <span class="avatar-title start border border-warning">
                                                    5º
                                                </span>
                                            </div>
                                            <div class="avatar-xs progress-icon-end">
                                                <span class="avatar-title-card border border-success">
                                                    4º
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border border-primary mini-stats-wid">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <p class="badge bg-primary" style="font-size: 100%;"><i
                                                        class="bx bx-filter-alt"></i> Filtros</p>
                                            </div>
                                        </div>
                                        <form action="">
                                            <div class="mb-2">
                                                <select class="form-control select2 selectFiltros">
                                                    <option>Selecione</option>
                                                    <optgroup label="Grupo 0">
                                                        <option value="AK">Agência 1</option>
                                                        <option value="HI">Agência 2</option>
                                                    </optgroup>
                                                    <optgroup label="Grupo 1">
                                                        <option value="CA">Agência 3</option>
                                                        <option value="NV">Agência 4</option>
                                                        <option value="OR">Agência 5</option>
                                                        <option value="WA">Agência 6</option>
                                                    </optgroup>
                                                    <optgroup label="Grupo 2">
                                                        <option value="AZ">Agência 7</option>
                                                        <option value="CO">Agência 8</option>
                                                        <option value="ID">Agência 9</option>
                                                        <option value="MT">Agência 10</option>
                                                        <option value="NE">Agência 11</option>
                                                    </optgroup>
                                                    <optgroup label="Grupo 3">
                                                        <option value="AL">Agência 12</option>
                                                        <option value="AR">Agência 13</option>
                                                        <option value="IL">Agência 14</option>
                                                        <option value="IA">Agência 15</option>
                                                        <option value="KS">Agência 16</option>
                                                    </optgroup>
                                                    <optgroup label="Grupo 4">
                                                        <option value="CT">Agência 17</option>
                                                        <option value="DE">Agência 18</option>
                                                        <option value="FL">Agência 19</option>
                                                        <option value="GA">Agência 20</option>
                                                        <option value="IN">Agência 21</option>
                                                        <option value="ME">Agência 22</option>
                                                        <option value="MD">Agência 23</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="input-group" id="datepicker4">
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                <input type="text" class="form-control"
                                                    data-date-container='#datepicker4' data-provide="datepicker"
                                                    data-date-format="MM yyyy" data-date-min-view-mode="1"
                                                    placeholder="Período">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row" style="justify-content: flex-end;">
                        <div class="col-md-3 indicadorCard">
                            <a href="./creditopf">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Crédito PF</p>
                                                <h5 class="mb-0">R$19.352.171</h5>
                                            </div>
                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-success avatarRanking">1º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="carousel-align">
                                            <h6>10% <span class="separador primary"></span>
                                                <i class="bx bxs-upvote success"></i> 15
                                                Pts.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./creditopj">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Crédito PJ</p>
                                                <h5 class="mb-0">R$5.301.170</h5>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="carousel-align">
                                            <h6>10% <span class="separador primary"></span>
                                                <i class="bx bxs-upvote success"></i> 15
                                                Pts.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./dapfundospf">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">DAP + Fundos PF</p>
                                                <h5 class="mb-0">52,67%</h5>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-success avatarRanking">1º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="carousel-align">
                                            <h6>10% <span class="separador primary"></span>
                                                <i class="bx bxs-upvote success"></i> 15
                                                Pts.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./dapfundospj">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">DAP + Fundos PJ</p>
                                                <h5 class="mb-0">R$14.693.380</h5>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-warning avatarRanking">4º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="carousel-align">
                                            <h6>10% <span class="separador primary"></span>
                                                <i class="bx bxs-upvote success"></i> 15
                                                Pts.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row" style="justify-content: flex-end;">
                        <div class="col-md-3 indicadorCard">
                            <a href="./stresspf">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Stress PF</p>
                                            <h5 class="mb-0">R$21.003.829</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-success avatarRanking">2º</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./stresspj">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Stress PJ</p>
                                            <h5 class="mb-0">R$3.960.828</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">7º</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./recorde%20producao%20serv">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Rec. de Prod e Serv.</p>
                                            <h5 class="mb-0">R$1.678.495</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">9º</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./resultado%20total%20porcentagem">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Resultado Total %</p>
                                            <h5 class="mb-0">52,67%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-warning avatarRanking">5º</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row" style="justify-content: flex-end;">
                        <div class="col-md-3 indicadorCard">
                            <a href="resultado%20total%20volume%20porcentagem">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Resultado Total Vol. %</p>
                                            <h5 class="mb-0">34,20%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-success avatarRanking">2º</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./fidelizacaopf%20porcento">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Fidelização PF %</p>
                                            <h5 class="mb-0">33%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./fidelizacaopj porcento">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Fidelização PJ %</p>
                                            <h5 class="mb-0">52,67%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">7º</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 indicadorCard">
                            <a href="./credito fidelizacao">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Crédito Fidelização</p>
                                            <h5 class="mb-0">23,36%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            <div class="row" style="justify-content: flex-start;">
                    <div class="col-md-3 indicadorCard">
                        <a href="./resultado total volume porcento">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Resultado Total Vol. %</p>
                                            <h5 class="mb-0">34,20%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-success avatarRanking">2º</span>
                                            </div>
                                        </div>
                                    </div>
                        </a>
                    </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-3 indicadorCard">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Fidelização PF %</p>
                                            <h5 class="mb-0">33%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3 indicadorCard">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Fidelização PJ %</p>
                                            <h5 class="mb-0">52,67%</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-danger avatarRanking">7º</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>10% <span class="separador primary"></span>
                                            <i class="bx bxs-upvote success"></i> 15
                                            Pts.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                    </div>


                    </div>
                    <!-- end row -->
                </div>
<!-- end row -->

            <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex flex-wrap mb-3">
                            <h4 class="card-title pb-4">Pontuação ao longo do tempo</h4>
                            <div class="ms-auto">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Semana</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="ranking-mensal" class="apex-charts" dir="ltr">
                        
                        </div>
                    </div>
            </div>
          
            <!-- end row -->
            <div class="row">

                <div class="card page-leaderboard mb-3">
                    <div id="contain-all" class=" slideout-panel">
                        <section class="ranking">
                            <div class="contain">
                                <div class="ranking-table">
                                    <div class="ranking-table-header-row mb-2">
                                        <div class="ranking-table-header-data h6">Posição</div>
                                        <div class="ranking-table-header-data h6">Agência</div>
                                        <div class="ranking-table-header-data h6">Pontuação</div>
                                    </div>
                                    <div class="ranking-table-row-leader-1">
                                        <div class="ranking-table-data-leader-1">
                                            <div class="medal-gold"></div>
                                        </div>
                                        <div class="ranking-table-data">
                                            Capão da Canoa
                                        </div>
                                        <div class="ranking-table-data">
                                            <div class="complete"></div>
                                        </div>
                                    </div>
                                    <div class="ranking-table-row-leader-2">
                                        <div class="ranking-table-data-leader-2">
                                            <div class="medal-silver"></div>
                                        </div>
                                        <div class="ranking-table-data">
                                            Guaíba
                                        </div>
                                        <div class="ranking-table-data">
                                            <div class="complete"></div>
                                        </div>
                                    </div>
                                    <div class="ranking-table-row-leader-3">
                                        <div class="ranking-table-data-leader-3">
                                            <div class="medal-bronze"></div>
                                        </div>
                                        <div class="ranking-table-data">
                                            Projeta
                                        </div>
                                        <div class="ranking-table-data">
                                            <div class="complete"></div>
                                        </div>
                                    </div>
                                    <div class="ranking-table-body mb-3">
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                4
                                            </div>
                                            <div class="ranking-table-data">
                                                Campo Bom
                                            </div>
                                            <div class="ranking-table-data">
                                                <div class="complete"></div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                5
                                            </div>
                                            <div class="ranking-table-data">
                                                Lajeado
                                            </div>
                                            <div class="ranking-table-data">
                                                <div class="complete"></div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                6
                                            </div>
                                            <div class="ranking-table-data">
                                                Gramado
                                            </div>
                                            <div class="ranking-table-data">
                                                <div class="complete"></div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                7
                                            </div>
                                            <div class="ranking-table-data">
                                                Mãe de Deus
                                            </div>
                                            <div class="ranking-table-data">
                                                <div class="complete"></div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                8
                                            </div>
                                            <div class="ranking-table-data">
                                                Recife
                                            </div>
                                            <div class="ranking-table-data">
                                                <div class="complete"></div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                9
                                            </div>
                                            <div class="ranking-table-data">
                                                Canoas
                                            </div>
                                            <div class="ranking-table-data">
                                                100<div class="complete"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Use Date Formatter-->
                            </div>
                        </section>
                    </div>

                </div>

            </div>
        </div>




<!-- Transaction Modal -->
<div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="<?php echo e(URL::asset('/assets/images/product/img-7.png')); ?>" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                    </div>
                                </td>
                                <td>$ 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="<?php echo e(URL::asset('/assets/images/product/img-4.png')); ?>" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                    </div>
                                </td>
                                <td>$ 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- subscribeModal -->
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                            <i class="mdi mdi-email-open"></i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h4 class="text-primary">Subscribe !</h4>
                            <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay
                                update.</p>

                            <div class="input-group bg-light rounded">
                                <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">

                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="bx bxs-paper-plane"></i>
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>
<!-- dashboard init -->


<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Public\Documents\teste superacao\themeforest-template\Skote_v3.3.2\Laravel\Admin\resources\views/index.blade.php ENDPATH**/ ?>