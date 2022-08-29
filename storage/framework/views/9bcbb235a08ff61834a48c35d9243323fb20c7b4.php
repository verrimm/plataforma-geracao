

<?php $__env->startSection('title'); ?> Superação <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Ranking Geral <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
    <div class="col-12">
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


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Public\Documents\teste superacao\themeforest-template\Skote_v3.3.2\Laravel\Admin\resources\views/ranking-geral.blade.php ENDPATH**/ ?>