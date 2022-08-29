

<?php $__env->startSection('title'); ?> Superação <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Ranking Geral <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    
    <?php echo e($dadosRanking); ?>


    
<div class="col-xl-12">
    <div class="row" style="justify-content: center;">
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
                                <div class="ranking-table-row-leader-1">
                                    <div class="ranking-table-data-leader-1">
                                        <div class="medal-gold"></div>
                                    </div>
                                    <div class="ranking-table-data">
                                        Capão da Canoa
                                    </div>
                                    <div class="ranking-table-data">
                                        
                                        100
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
                                        
                                        100
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
                                        
                                        100
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
                                            
                                            100
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
                                            
                                            100
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
                                            
                                            100
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
                                            
                                            100
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
                                            
                                            100
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
                                            
                                            100
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
        <div class="col-md-4">
            <div class="card border border-primary mini-stats-wid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                Filtros</p>
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
                            <input type="text" class="form-control" data-date-container='#datepicker4'
                                data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1"
                                placeholder="Período">
                        </div>
                    </form>
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




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mateus.g.0999\Documents\GitHub\template-plataforma-laravel\Admin\resources\views/ranking-geral.blade.php ENDPATH**/ ?>