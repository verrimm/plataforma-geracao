

<?php $__env->startSection('title'); ?> Superação <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Ranking GRUPO <?php echo e($dadosRanking[0]['cd_grupo']); ?> <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="col-xl-12">
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
                                </div>


                                <?php
                                $contador = 0
                                ?>
                                <?php $__currentLoopData = $dadosRanking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemRaking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($contador==0): ?>
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
                                </div>
                                <?php endif; ?>
                                <?php if($contador==1): ?>
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
                                </div>
                                <?php endif; ?>
                                <?php if($contador==2): ?>
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
                                </div>
                                 <?php endif; ?>

                                <?php
                                $contador++
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                                <div class="ranking-table-body mb-3">
                                    
                                    <?php
                                        $contador = 0
                                    ?>
                                        
                                    <?php $__currentLoopData = $dadosRanking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemRanking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($contador>2): ?>
                                         
                                        <div class="ranking-table-row">
                                            <div class="ranking-table-data">
                                                <?php echo e($contador+1); ?>

                                            </div>  
                                            <div class="ranking-table-data">
                                                <?php echo e($itemRanking['nm_posto']); ?>

                                            </div>
                                            <div class="ranking-table-data">
                                                
                                                <?php echo e($itemRanking['pt_ranking']); ?>

                                            </div>
                                        </div>
                                        
                                        <?php endif; ?>

                                        <?php
                                            $contador++
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
            <div class="row" style="justify-content: flex-start;">
                
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 4</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 6</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mateus.g.0999\Documents\GitHub\plataforma-geracao\resources\views/ranking-geral.blade.php ENDPATH**/ ?>