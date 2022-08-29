

<?php $__env->startSection('title'); ?> Superação <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Comparador <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-12">

        
            <!-- end page title -->

            <!-- start page content -->
            <div class="row">
              <p>
                Selecione uma unidade para compararar resultados.
              </p>
            </div>

            <div class="row">
            <div class="col-6 mb-3">
                <label class="col-md-2 col-form-label">Unidade:</label>
                <select class="form-select" disabled="">
                  <option>Minha Unidade</option>
                </select>
            </div>

                <div class="col-6 mb-3">
                      <label class="col-md-2 col-form-label">Unidade:</label>
                      <select class="form-select">
                        <option>Selecione</option>
                        <option>27 - Un. Camaquã</option>
                        <option>27 - Un. Guaíba</option>
                        <option>60 - Un. Santa Vitória do Palmar</option>
                        <option>60 - Un. Fortaleza</option>
                        <option>94 - Un. Três Passos</option>
                        <option>116 - Un. Soledade</option>
                      </select>
                  </div>
                <label class="col-md-6 col-form-label">Classificação Geral: 2º</label>
            </div>

            <div class="row">
                 <!-- COOPERATIVA DEFAULT -->
              <div class="col-lg-6">
                <div class="row">
                  <div class="table-rep-plugin">
                    <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                      <table id="tech-companies-1" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Indicadores</th>
                            <th data-priority="1">Classificação</th>
                            <th data-priority="3">Carteira</th>
                            <th data-priority="1">Per Capita</th>
                            <th data-priority="3">Pontos</th>
                            <th data-priority="3">Peso</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>CARTEIRA DE CRÉDITO PF PER CAPITA</th>
                            <td>
                              3
                              <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                            </td>
                            <td>11.223.188</td>
                            <td>49</td>
                            <td>120</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <th>CARTEIRA DE CRÉDITO PJ PER CAPITA</th>
                            <td>
                              9
                              <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                            </td>
                            <td>440.733</td>
                            <td>25</td>
                            <td>30</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <th>DAP + FUNDOS PF PER CAPITA</th>
                            <td>
                              6
                              <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                            </td>
                            <td>11.540.842</td>
                            <td>41</td>
                            <td>150</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <th>DAP + FUNDOS PJ PER CAPITA</th>
                            <td>
                              6
                              <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                            </td>
                            <td>1.597.774</td>
                            <td>28</td>
                            <td>150</td>
                            <td>30</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end row -->

                <div class="row">
                  <div class="table-rep-plugin">
                    <div class="table-responsive table-sm table-bordered mb-0" data-pattern="priority-columns">
                      <table id="tech-companies-2" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Indicadores</th>
                            <th data-priority="1">Classificação</th>
                            <th data-priority="3">Unicred</th>
                            <th data-priority="3">PR</th>
                            <th data-priority="1">%</th>
                            <th data-priority="3">Pontos</th>
                            <th data-priority="3">Peso</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>STRESS PF</th>
                            <td>
                              1
                              <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                            </td>
                            <td>7.780.812</td>
                            <td>2.582.797</td>
                            <td>75,08%</td>
                            <td>100</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <th>STRESS PJ</th>
                            <td>
                              4
                              <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                            </td>
                            <td>417.349</td>
                            <td>573.061</td>
                            <td>42,14%</td>
                            <td>70</td>
                            <td>10</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end row -->

                <div class="row">
                  <div class="table-rep-plugin">
                    <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                      <table id="tech-companies-3" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Indicadores</th>
                            <th data-priority="1">Classificação</th>
                            <th data-priority="3">Rec. Prod/Ser</th>
                            <th data-priority="3">Rec. Total</th>
                            <th data-priority="1">%</th>
                            <th data-priority="3">Pontos</th>
                            <th data-priority="3">Peso</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>REC. DE PROD E SERV / REC. TOTAL</th>
                            <td>
                              2
                              <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                            </td>
                            <td>130.079</td>
                            <td>1.632.659</td>
                            <td>8,0%</td>
                            <td>225</td>
                            <td>25</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end row -->

                <div class="row">
                  <div class="table-rep-plugin">
                    <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                      <table id="tech-companies-3" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Indicadores</th>
                            <th data-priority="1">Classificação</th>
                            <th data-priority="3">Média 2021</th>
                            <th data-priority="3">Média 2022</th>
                            <th data-priority="1">% / Vol.</th>
                            <th data-priority="3">Pontos</th>
                            <th data-priority="3">Peso</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>RESULTADO TOTAL %</th>
                            <td>
                              9
                              <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                            </td>
                            <td>73.980</td>
                            <td>41.361</td>
                            <td>-44,09%</td>
                            <td>0</td>
                            <td>20</td>
                          </tr>
                          <tr>
                            <th>RESULTADO TOTAL VOL.</th>
                            <td>
                              9
                              <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                            </td>
                            <td>73.980</td>
                            <td>41.361</td>
                            <td>32.620</td>
                            <td>0</td>
                            <td>15</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end row -->

                <div class="row">
                  <div class="table-rep-plugin">
                    <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                      <table id="tech-companies-3" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Indicadores</th>
                            <th data-priority="1">Classificação</th>
                            <th data-priority="3">Cooperados</th>
                            <th data-priority="3">Fidelizados</th>
                            <th data-priority="1">%</th>
                            <th data-priority="3">Pontos</th>
                            <th data-priority="3">Peso</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>FIDELIZAÇÃO PF</th>
                            <td>
                              2
                              <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                            </td>
                            <td>279</td>
                            <td>148</td>
                            <td>53%</td>
                            <td>270</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <th>FIDELIZAÇÃO PJ</th>
                            <td>
                              5
                              <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                            </td>
                            <td>56</td>
                            <td>18</td>
                            <td>32%</td>
                            <td>180</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <th>CARTÃO DE CRÉDITO FIDELIZAÇÃO</th>
                            <td>
                              1
                              <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                            </td>
                            <td>335</td>
                            <td>145</td>
                            <td>43%</td>
                            <td>100</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <th>FIDELIZAÇÃO PREVIDÊNCIA</th>
                            <td>
                              3
                              <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                            </td>
                            <td>279</td>
                            <td>86</td>
                            <td>30%</td>
                            <td>80</td>
                            <td>10</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- COOPERATIVA DEFAULT FIM -->

              <!-- COOPERATIVA COMPARADA -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="row">
                    <div class="table-rep-plugin">
                      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Indicadores</th>
                              <th data-priority="1">Classificação</th>
                              <th data-priority="3">Carteira</th>
                              <th data-priority="1">Per Capita</th>
                              <th data-priority="3">Pontos</th>
                              <th data-priority="3">Peso</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>CARTEIRA DE CRÉDITO PF PER CAPITA</th>
                              <td>
                                3
                                <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                              </td>
                              <td>11.223.188</td>
                              <td>49</td>
                              <td>120</td>
                              <td>15</td>
                            </tr>
                            <tr>
                              <th>CARTEIRA DE CRÉDITO PJ PER CAPITA</th>
                              <td>
                                9
                                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                              </td>
                              <td>440.733</td>
                              <td>25</td>
                              <td>30</td>
                              <td>15</td>
                            </tr>
                            <tr>
                              <th>DAP + FUNDOS PF PER CAPITA</th>
                              <td>
                                6
                                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                              </td>
                              <td>11.540.842</td>
                              <td>41</td>
                              <td>150</td>
                              <td>30</td>
                            </tr>
                            <tr>
                              <th>DAP + FUNDOS PJ PER CAPITA</th>
                              <td>
                                6
                                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                              </td>
                              <td>1.597.774</td>
                              <td>28</td>
                              <td>150</td>
                              <td>30</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                    <div class="table-rep-plugin">
                      <div class="table-responsive table-sm table-bordered mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-2" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Indicadores</th>
                              <th data-priority="1">Classificação</th>
                              <th data-priority="3">Unicred</th>
                              <th data-priority="3">PR</th>
                              <th data-priority="1">%</th>
                              <th data-priority="3">Pontos</th>
                              <th data-priority="3">Peso</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>STRESS PF</th>
                              <td>
                                1
                                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                              </td>
                              <td>7.780.812</td>
                              <td>2.582.797</td>
                              <td>75,08%</td>
                              <td>100</td>
                              <td>10</td>
                            </tr>
                            <tr>
                              <th>STRESS PJ</th>
                              <td>
                                4
                                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                              </td>
                              <td>417.349</td>
                              <td>573.061</td>
                              <td>42,14%</td>
                              <td>70</td>
                              <td>10</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                    <div class="table-rep-plugin">
                      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-3" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Indicadores</th>
                              <th data-priority="1">Classificação</th>
                              <th data-priority="3">Rec. Prod/Ser</th>
                              <th data-priority="3">Rec. Total</th>
                              <th data-priority="1">%</th>
                              <th data-priority="3">Pontos</th>
                              <th data-priority="3">Peso</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>REC. DE PROD E SERV / REC. TOTAL</th>
                              <td>
                                2
                                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                              </td>
                              <td>130.079</td>
                              <td>1.632.659</td>
                              <td>8,0%</td>
                              <td>225</td>
                              <td>25</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
  
                  <div class="row">
                    <div class="table-rep-plugin">
                      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-3" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Indicadores</th>
                              <th data-priority="1">Classificação</th>
                              <th data-priority="3">Média 2021</th>
                              <th data-priority="3">Média 2022</th>
                              <th data-priority="1">% / Vol.</th>
                              <th data-priority="3">Pontos</th>
                              <th data-priority="3">Peso</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>RESULTADO TOTAL %</th>
                              <td>
                                9
                                <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                              </td>
                              <td>73.980</td>
                              <td>41.361</td>
                              <td>-44,09%</td>
                              <td>0</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <th>RESULTADO TOTAL VOL.</th>
                              <td>
                                9
                                <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                              </td>
                              <td>73.980</td>
                              <td>41.361</td>
                              <td>32.620</td>
                              <td>0</td>
                              <td>15</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
  
                  <div class="row">
                    <div class="table-rep-plugin">
                      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-3" class="table table-striped" style="margin-bottom: 0;">
                          <thead>
                            <tr>
                              <th>Indicadores</th>
                              <th data-priority="1">Classificação</th>
                              <th data-priority="3">Cooperados</th>
                              <th data-priority="3">Fidelizados</th>
                              <th data-priority="1">%</th>
                              <th data-priority="3">Pontos</th>
                              <th data-priority="3">Peso</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>FIDELIZAÇÃO PF</th>
                              <td>
                                2
                                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                              </td>
                              <td>279</td>
                              <td>148</td>
                              <td>53%</td>
                              <td>270</td>
                              <td>30</td>
                            </tr>
                            <tr>
                              <th>FIDELIZAÇÃO PJ</th>
                              <td>
                                5
                                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                              </td>
                              <td>56</td>
                              <td>18</td>
                              <td>32%</td>
                              <td>180</td>
                              <td>30</td>
                            </tr>
                            <tr>
                              <th>CARTÃO DE CRÉDITO FIDELIZAÇÃO</th>
                              <td>
                                1
                                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                              </td>
                              <td>335</td>
                              <td>145</td>
                              <td>43%</td>
                              <td>100</td>
                              <td>10</td>
                            </tr>
                            <tr>
                              <th>FIDELIZAÇÃO PREVIDÊNCIA</th>
                              <td>
                                3
                                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                              </td>
                              <td>279</td>
                              <td>86</td>
                              <td>30%</td>
                              <td>80</td>
                              <td>10</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                </div>
            </div>
            <!-- COOPERATIVA COMPARADA FIM -->

            <!-- end page content -->
          </div>
          <!-- container-fluid -->
        </div>



        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\matheus.0999\Documents\GitHub\template-plataforma-laravel\Admin\resources\views/comparador.blade.php ENDPATH**/ ?>