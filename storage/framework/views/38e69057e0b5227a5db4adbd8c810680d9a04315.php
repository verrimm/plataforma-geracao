

<?php $__env->startSection('title'); ?>
    Superação
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Superação
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Ranking GRUPO <?php echo e($dadosRanking[0]['cd_grupo']); ?>

        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="col-xl-12" id="paginaRanking">

        <div class="row my-3">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link active" id="janeiro" data-bs-toggle="pill" data-bs-target="#pills-janeiro"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Janeiro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button id="fevereiro"  class="nav-link" id="fevereiro" data-bs-toggle="pill" data-bs-target="#pills-fevereiro"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Fevereiro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="marco" data-bs-toggle="pill" data-bs-target="#pills-marco"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Março</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="abril" data-bs-toggle="pill" data-bs-target="#pills-abril"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Abril</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="maio" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Maio</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="junho" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Junho</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="julho" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Julho</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="agosto" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Agosto</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="setembro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Setembro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="outubro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Outubro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="novembro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Novembro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="dezembro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dezembro</button>
                </li>
            </ul>
        </div>


        <div class="row" style="justify-content: flex-start;">
            <div class="col-md-8">
                <div class="card border border-primary page-leaderboard mb-3">
                    <div id="contain-all" class=" slideout-panel">
                        <section class="ranking">
                            <div class="contain">
                                <div class="ranking-table">
                                    <div class="ranking-table-header-row mb-2">
                                        <div class="ranking-table-header-data h6">Posição</div>
                                        <div class="ranking-table-header-data h6">Agência</div>
                                        <div class="ranking-table-header-data h6">Pontuação</div>
                                        <div class="ranking-table-header-data h6">Evolução</div>
                                    </div>

                                    <?php
                                        $contador = 0;
                                    ?>
                                    <?php $__currentLoopData = $dadosRanking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemRaking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($contador == 0): ?>
                                            <div class="ranking-table-row-leader-1">
                                                <div class="ranking-table-data-leader-1">
                                                    <div class="medal-gold"></div>
                                                </div>
                                                <div class="ranking-table-data">
                                                    <?php echo e($itemRaking['nm_posto']); ?>

                                                </div>
                                                <div class="ranking-table-data">
                                                    <?php echo e($itemRaking['pt_ranking']); ?>

                                                </div>
                                                <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                    <i class="fas fa-angle-up fa-2x success"></i>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($contador == 1): ?>
                                            <div class="ranking-table-row-leader-2">
                                                <div class="ranking-table-data-leader-2">
                                                    <div class="medal-silver"></div>
                                                </div>
                                                <div class="ranking-table-data">
                                                    <?php echo e($itemRaking['nm_posto']); ?>

                                                </div>
                                                <div class="ranking-table-data">
                                                    <?php echo e($itemRaking['pt_ranking']); ?>

                                                </div>
                                                <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                    <i class="fas fa-angle-down fa-2x danger"></i>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($contador == 2): ?>
                                            <div class="ranking-table-row-leader-3">
                                                <div class="ranking-table-data-leader-3">
                                                    <div class="medal-bronze"></div>
                                                </div>
                                                <div class="ranking-table-data">
                                                    <?php echo e($itemRaking['nm_posto']); ?>

                                                </div>
                                                <div class="ranking-table-data">
                                                    <?php echo e($itemRaking['pt_ranking']); ?>

                                                </div>
                                                <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                    <i class="fas fa-angle-up fa-2x success"></i>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php
                                            $contador++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <div class="ranking-table-body mb-3">

                                        <?php
                                            $contador = 0;
                                        ?>

                                        <?php $__currentLoopData = $dadosRanking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemRanking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($contador > 2): ?>
                                                <div class="ranking-table-row">
                                                    <div class="ranking-table-data">
                                                        <?php echo e($contador + 1); ?>

                                                    </div>
                                                    <div class="ranking-table-data">
                                                        <?php echo e($itemRanking['nm_posto']); ?>

                                                    </div>
                                                    <div class="ranking-table-data">
                                                        
                                                        <?php echo e($itemRanking['pt_ranking']); ?>

                                                    </div>
                                                    <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                        <i class="fas fa-minus fa-1x"></i>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php
                                                $contador++;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                                <!--Use Date Formatter-->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <?php $__currentLoopData = $listaGrupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (! ($dadosRanking[0]['cd_grupo'] == $item['cd_grupo'])): ?>
                        <div class="card border border-primary mini-stats-wid rankingCards bg-ranking-grupos"
                            data-bs-toggle="modal" data-bs-target=".<?php echo e($item['nm_grupo']); ?>" style="align-items: center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h3><?php echo e($item['nm_grupo']); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  Large modal example -->
                        <div class="modal fade <?php echo e($item['nm_grupo']); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Ranking - <?php echo e($item['nm_grupo']); ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Posição</th>
                                                    <th scope="col">Agência</th>
                                                    <th scope="col">Pontuação</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tableRanking">
                                                <?php $__currentLoopData = $listaGruposRanking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemLista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($itemLista['cd_grupo'] == $item['cd_grupo']): ?>
                                                        <tr>
                                                            <th scope="row"><?php echo e($itemLista['posicao_ranking']); ?></th>
                                                            <td><?php echo e($itemLista['nm_posto']); ?></td>
                                                            <td><?php echo e($itemLista['pt_ranking']); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>


    
<form id="formSeletorMes"  action="<?php echo e(route('comparadorAjax')); ?>" class="form-horizontal d-none " method="POST"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  
    <input name="mes"  class="inputMes" type="text">
  
  </form>

  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>

    <script>

            
  function seletorMes(elemento){

    var formulario = document.getElementById('formSeletorMes')  
    var formData = new FormData(formulario)
    var link = "seletorMesRanking"

    $.ajax({
        type: 'POST',
        url: link,
        data: formData ,
        processData: false,
        contentType: false
        , success: function(resposta){  
          teste = resposta
           var formulario = document.getElementById('paginaRanking')
           formulario.innerHTML=resposta
        console.log("sucesso")  
        },
        error: function(resposta){
            console.log("erro")
        }
    })


    }



    


    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mateus.g.0999\Documents\GitHub\plataforma-geracao\resources\views/ranking-geral.blade.php ENDPATH**/ ?>