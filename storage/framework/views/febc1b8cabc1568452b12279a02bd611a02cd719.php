

<?php $__env->startSection('title'); ?> Superação <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
   
    <!-- Responsive Table css -->
    <link href="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

    <style>
    .table-striped>tbody>tr:nth-of-type(odd)>* {
        --bs-table-accent-bg: #e5e5e5!important;
        
    }
    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="loader" id="fadeOut"
    style="position: fixed; z-index: 999999; top: 0; left: 0; width: 100%; height: 100%; background: #222736; display: block; justify-content: center; align-items: center;">
    <img style="left: 50%;top: 50%;position: absolute;" src="<?php echo e(URL::asset('assets/images/preloader.gif')); ?>" />
</div>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Comparador <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<!-- end page title -->

<div class="row">
  <div class="col-12">
    <!-- start page content -->
    <div class="row">
      <p>
        Selecione uma unidade para compararar resultados.
      </p>
    </div>

    <div class="row">
      <div class="col-6 mb-3">
        <label class="col-md-3 col-form-label">Minha unidade:</label>
        <select class="form-select" disabled="">
          <option>
            <?php echo e($minhaUnidade['nm_posto']); ?>

          </option>
        </select>
      </div>

      <div class="col-6 mb-3">
        <label class="col-md-2 col-form-label">Unidade:</label>
        <select id="selectUnidades" class="form-control select2">
          <option id="opcaoPadrao">Selecione</option>
          <optgroup label="Unidades grupo <?php echo e($participantesGrupo[0]['nm_grupo']); ?>">
               <?php $__currentLoopData = $participantesGrupo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if (! ($item['nm_posto']==$minhaUnidade['nm_posto'])): ?>
              <option id="<?php echo e($item['cd_coop']); ?>-<?php echo e($item['cd_posto']); ?>"><?php echo e($item['nm_posto']); ?></option>
              <?php endif; ?> 
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </optgroup>
      </select>
      </div>

      <label class="col-md-6 col-form-label">Classificação Geral: <?php echo e($ranking['posicao_ranking']); ?>º</label>
    </div>

    <div class="row">
      <!-- COOPERATIVA DEFAULT -->
      <div class="col-lg-6 dividerComparador">
        
        <div class="row">
           <div class="table-rep-plugin"> 
            <div class="table-responsive mb-0"> 
              <table id="tabelaInicialComparador" class="table table-lg align-middle">
                <tbody>
                  <?php  
                    $grupoSimilar = 0;
                  ?>
                  <?php $__currentLoopData = $dadosUsuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      $grupoSimilarTemp = $item['cd_gr_similares'];
                    ?>

                    <?php if($grupoSimilar!=$grupoSimilarTemp): ?>
                    <thead class="headComparador">
                        <tr>
                          <th>Indicador</th>
                          <th data-priority="1">Posição</th>

                          <?php if($item['label_vl_extra_1']!=0): ?>
                          <th data-priority="1"> <?php echo e($item['label_vl_extra_1']); ?> </th>
                          <?php endif; ?>
                          <?php if($item['label_vl_extra_2']!=0): ?>
                          <th data-priority="1"> <?php echo e($item['label_vl_extra_2']); ?> </th>
                          <?php endif; ?>
                          
                          <th data-priority="3" colspan="2"> <?php echo e($item['label_vl_lcto']); ?>  </th>
                          
                        </tr>
                    </thead> 
                    <?php endif; ?>
                    <tr class="linhaReferencia">
                    <th><?php echo e($item['nm_indicador']); ?></th>
                    <td class="referenciaComparador">
                      <?php echo e($item['ordem']); ?>º
                      
                    </td>
                    <?php if($item['label_vl_extra_1']!=0): ?>
                    <td> 
                      <?php if($item['sufixo_1']!=null): ?> 
                      <?php echo e($item['vl_extra_1']*100); ?><?php echo e($item['sufixo_1']); ?>

                      <?php else: ?>
                      <?php echo e($item['prefixo_1']); ?><?php echo e(number_format( $item['vl_extra_1'], 0, ',', '.')); ?> 
                      <?php endif; ?>
                    </td>  
                  <?php endif; ?>
                        <?php if($item['label_vl_extra_2']!=0): ?>
                          <td> 
                            <?php if($item['sufixo_2']!=null): ?> 
                            <?php echo e($item['vl_extra_2']*100); ?><?php echo e($item['sufixo_2']); ?>

                            <?php else: ?>
                            <?php echo e($item['prefixo_2']); ?><?php echo e(number_format( $item['vl_extra_2'], 0, ',', '.')); ?> 
                            <?php endif; ?>
                          </td>  
                        <?php endif; ?>
                    <td colspan="2">
                      <?php if($item['sufixo']!=null): ?> 
                      <?php echo e($item['vl_lcto']*100); ?><?php echo e($item['sufixo']); ?>

                      <?php else: ?> 
                      <?php echo e($item['prefixo']); ?><?php echo e(number_format($item['vl_lcto'], 0, ',', '.')); ?>

                      <?php endif; ?>
                    </td>
                    
                    </tr>
                    <?php
                    $grupoSimilar=$item['cd_gr_similares']
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        

      </div>
      <div id="example" class="col-lg-6">
 
      </div>
      </div>
    </div>
  </div>
</div>


<form id="formComparador"  action="<?php echo e(route('comparadorAjax')); ?>" class="form-horizontal d-none " method="POST"  enctype="multipart/form-data">
  <?php echo csrf_field(); ?>

  <input name="unidade"  class="inputComparador" type="text">

</form>

<!-- COOPERATIVA DEFAULT FIM -->

<!-- end page content -->
</div>
<!-- container-fluid -->
</div>

</div>
</div>
    
 <?php $__env->startSection('script-bottom'); ?>
 <script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>
 <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
 <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
 
 <script>

      // Carrega Loader por 1seg na troca de modo noturno
    $('.loader').show();
    //Adiciona classe para fechar sidebar
    document.getElementById("body").classList.add("sidebar-enable");
    document.getElementById("body").classList.add("vertical-collpsed");
    setTimeout(function () {
        $('.loader').hide();
    }, 500);
    // ================================================//

  var teste  = []
  
  function tabelaComparador(){

    var formulario = document.getElementById('formComparador')  
    var formData = new FormData(formulario)
    var link = "comparadorAjax"

    $.ajax({
        type: 'POST',
        url: link,
        data: formData ,
        processData: false,
        contentType: false
        , success: function(resposta){  
          teste = resposta
           var formulario = document.getElementById('example')
           formulario.innerHTML=resposta
          validaComparador();
        }
    })
  }

  function imprimirComparador(){
    $('#selectUnidades').select2();
   
   $('#selectUnidades').on('select2:select', function (e) {
     var data = e.params.data;
     
   document.querySelector('#formComparador .inputComparador').setAttribute('value',data.id)
   tabelaComparador()
   });
  } 

  function validaComparador() {

    var referenciaComparador = document.querySelectorAll(".referenciaComparador");
    var metaComparador = document.querySelectorAll(".metaComparador");
    var linhaReferencia = document.querySelectorAll(".linhaReferencia");
    var linhaMeta = document.querySelectorAll(".linhaMeta");

    for (var i = 0; i < referenciaComparador.length; i++) {
        if (referenciaComparador[i].innerText < metaComparador[i].innerText) {
            linhaReferencia[i].classList.add("bg-success");
            linhaMeta[i].classList.add("bg-danger");
        }
        else if (referenciaComparador[i].innerText > metaComparador[i].innerText) {
            linhaReferencia[i].classList.add("bg-danger");
            linhaMeta[i].classList.add("bg-success");
        } else {
            linhaReferencia[i].classList.add("bg-warning");
            linhaMeta[i].classList.add("bg-warning");
        }

    }
  }

 $(document).ready(function() {
  $('#formComparador').submit(function(e) {
        e.preventDefault();
    });
    
  imprimirComparador()
})

 
</script>
 <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mateus.g.0999\Documents\GitHub\plataforma-geracao\resources\views/comparador.blade.php ENDPATH**/ ?>