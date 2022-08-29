

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb2'); ?>
<?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
<?php $__env->slot('li_2'); ?> Indicadores <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> <?php echo e($indicador->nomeIndicador); ?> <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('./assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('./assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">

<link href="<?php echo e(URL::asset('./assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::asset('./assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo e(URL::asset('./assets/libs/datepicker/datepicker.min.css')); ?>">
<?php $__env->stopSection(); ?>

<div class="row">
  <div class="col-xl-12">
    <div class="col-xl-12">
      <div class="row mx-0 my-0" style="justify-content: flex-end;">
        <button onclick="hideShow()" type="button" class="shrink btn border-primary btn-sm waves-effect waves-light px-2" id="botaoDescricao"><i class="fas fa-angle-right" id="iconDescricao"></i> <span id="textoDescricao">Descrição</span></button>
      </div>
    </div>
    <div class="card border border-primary mini-stats-wid" id="cardRegrasCalculo" style="display: none;">
      <div class="row" style="justify-content: flex-start;">
        <div class="col-md-6 sobreIndicador">
          <div class="card-body">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="badge bg-primary" style="font-size: 100%;"><span class="bx bx-notepad"></span> Sobre
                </p>
                <p class="mb-1">
                  <?php echo e($indicador->desc1); ?>

                </p>
                <p class="mb-1"><strong>
                    <?php echo e($indicador->desc2); ?>

                  </strong></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim Sobre Indicador -->

        <div class="col-md-6">
          <div class="regrasIndicador">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-grow-1">
                  <p class="badge bg-primary" style="font-size: 100%;"><span class="bx bx-calculator"></span>
                    Cálculo
                  </p>
                  <h5 class="mb-0"> <?php echo e($indicador->descCalc); ?> </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim Regras Indicador -->

      </div>
    </div>

    <div class="row mt-2" style="justify-content: flex-end;">
      <div class="col-md-6">
        <div class="card border border-primary mini-stats-wid">
          <div class="card-body">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="badge bg-primary" style="font-size: 100%;"><span class="bx bx-map-pin"></span> Indicador</p>
                <h5 class="mb-0 text-uppercase"><?php echo e($indicador->nomeIndicador); ?> </h5>
              </div>
              <div class="flex-grow-1">
                <p class="badge bg-primary" style="font-size: 100%;"><span class="bx bx-map-pin"></span> Pontos</p>
                <h5 class="mb-0">200</h5>
              </div>

              <div class="flex-shrink-0 align-self-center">
                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                  <span class="avatar-title rounded-circle avatarRanking iconePosicaoRanking bg-success">1º</span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="carousel-align mt-2 mb-1">
              <h6>Pontos referentes ao indicador</h6>
              <h5>13% <span class="separador primary"></span>
                <i class="bx bxs-upvote success"></i> 200
              </h5>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border border-primary mini-stats-wid">
          <div class="card-body">
            <div class="row">
              <div class="col-xl-12">
                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i> Filtros</p>
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
                <input type="text" class="form-control" data-date-container="#datepicker4" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1" placeholder="Período">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card">
    <div class="card-body">
        <div class="d-sm-flex flex-wrap mb-3">
            <h4 class="card-title pb-4">Pontuação ao longo do tempo</h4>
            <div class="ms-auto">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Ano</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="ranking-mensal" class="apex-charts" dir="ltr"></div>
    </div>
</div>
    </div>

  </div>
</div>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('./assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('./assets/js/pages/indicador.js')); ?>"></script>
<script>
  function hideShow() {
var e = document.getElementById("botaoDescricao"),
    t = document.getElementById("cardRegrasCalculo"),
    a = document.getElementById("textoDescricao"),
    o = document.getElementById("iconDescricao");
"none" === t.style.display ? (t.style.display = "block", a.innerHTML = "Esconder Descrição", o.classList.replace("fa-angle-right", "fa-angle-down"), e.classList.replace("shrink", "expand")) : (t.style.display = "none", a.innerHTML = "Ver Mais", o.classList.replace("fa-angle-down", "fa-angle-right"), e.classList.replace("expand", "shrink"))
}
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Public\Documents\teste superacao\themeforest-template\Skote_v3.3.2\Laravel\Admin\resources\views/indicador.blade.php ENDPATH**/ ?>