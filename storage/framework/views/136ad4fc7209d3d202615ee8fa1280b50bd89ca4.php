

<?php $__env->startSection('title'); ?> Regulamento@endsection

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Superação <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Regulamento <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-12">
        
        <div class="card ">
                <div class="card-body">
                    <div class="p-lg-1">

                        <div class="d-xl-flex">

                            <div class="w-100 container">

                                <h4 class="mt-0 mb-4">CAMPANHA DE SUPERAÇÃO 2022</h4>

                                <div id="desc" class="mb-5">
                                    <h5 class="mt-4">Sobre a campanha</h5>
                                    <p>
                                      A Campanha de Superação Unicred 2022 visa alcançar os objetivos do Planejamento
                                      Estratégico e motivar as Unidades e Cooperativas em busca do crescimento
                                      sustentável.
                                    </p>
                                </div>
                                <div id="prerequisites" class="mb-5">
                                  <h5>PERÍODO DA CAMPANHA:                                  </h5>
                                  <p>
                                    Janeiro a dezembro de 2022.

                                  </p>
                                </div>
                                <div id="prerequisites" class="mb-5">
                                  <h5 class="mt-4">PRINCIPAIS OBJETIVOS:</h5>    

                                    <ul>
                                        <li>
                                            <p>Apoiar o desenvolvimento de negócios das cooperativas
                                            </p>
                                        </li>
                                        <li>
                                          <p>Facilitar a Gestão Estratégica;
                                          </p>
                                      </li>
                                      <li>
                                        <p>Incentivar a troca de experiências entre os colaboradores;
                                        </p>
                                    </li>
                                    <li>
                                      <p>Acompanhar a evolução do Sistema Unicred RS;
                                      </p>
                                  </li>
                                  <li>
                                    <p>Fomentar o atingimento dos objetivos do Planejamento Estratégico Estadual.
                                    </p>
                                </li>
                                    </ul>

                                    <p>APROVAÇÃO DO REGULAMENTO: O regulamento da Campanha Superação 2022 foi
aprovada pelo Conselho de Administração em 14/12/2021, conforme ATA 176.</p>


                                </div>

                                <div id="installation">
                                    <h5 class="mt-4">Installation</h5>

                                    <p>
                                        To setup the admin theme, follow below-mentioned steps:
                                    </p>

                                    <ul>
                                        <li>
                                            <strong>Install Prerequisites</strong>
                                            <p>
                                                Make sure to have all above prerequisites installed
                                                &amp; running on your computer
                                            </p>
                                        </li>

                                    </ul>


                                    <p class="mt-4">
                                        After you finished with the above steps, you can run the
                                        following commands into the terminal / command prompt from the
                                        root directory of the project to run the project locally or
                                        build for
                                        production use:
                                    </p>
                                    <table class="table table-bordered m-0">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th style="width: 20%;">
                                                    <i class="ti-file"></i> Command</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="cursor: pointer;">
                                                <td>
                                                    <code>yarn install</code>
                                                </td>
                                                <td>
                                                    This would install all the required dependencies in
                                                    the <code>node_modules</code> folder.
                                                </td>
                                            </tr>
                                            <tr style="cursor: pointer;">
                                                <td>
                                                    <code>gulp</code>
                                                </td>
                                                <td>
                                                    Runs the project locally, starts the development
                                                    server and watches for any changes in your code,
                                                    including your HTML, javascript, sass, etc. The
                                                    development server is accessible at <a href="http://localhost:3000">http://localhost:3000</a>.
                                                </td>
                                            </tr>
                                            <tr style="cursor: pointer;">
                                                <td>
                                                    <code>gulp build</code>
                                                </td>
                                                <td>
                                                    Generates a <code>/dist</code> directory with all
                                                    the production files.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="multi" class="mb-5">
                                    <h5 class="mt-4">Multi Language Settings</h5>
                                    <p>Lets add french language.</p>
                                    <ul>
                                        <li> Create new file fr.json in the fr folder in the <code>src/assets/lang</code> folder and copy the en.json file code in this file.</li>
                                        <li>
                                            Now you need to add the language in the <code>src/assets/js/lang/jquery.multiLanguage.js</code> file. In the function setLanguage add the "else if" condition as below and make sure to add french.jpg file.
<pre>    else if(lang=='fr') {
document.getElementById("header-lang-img").src = "assets/images/flags/french.jpg";
}
</pre>
                                        </li>
                                        <li> You can simply use in the HTML file to convert the language text just add the attribute "key" to the parent div or any HTML tag.
                                            Example: &lt;div key="t-title"&gt;This is title.&lt;/div&gt;</li>
                                    </ul>
                                </div>
                                <div id="tips">
                                    <h5 class="mt-4">Tips</h5>

                                    <p>
                                        SCSS: We suggest you to do not change any scss files from the assets/scss/custom folders because to get new updates will might be break your SCSS changes if any you have made. We strongly suggest you
                                        to create new custom.scss file and use that instead of overwrite
                                        any theme's custom scss files.
                                    </p>

                                </div>
                            </div>

                            <!-- Start right-side-nav -->
                            <div class="d-none d-xl-block">
                                <div class="right-side-nav">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a href="#desc" class="nav-link active">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#prerequisites" class="nav-link">Prerequisites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#installation" class="nav-link">Installation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#multi" class="nav-link">Multi Language Settings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tips" class="nav-link">Tips</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- End right-side-nav -->
                        </div>

                    </div> <!-- end padding-->
                </div> <!-- end card-body-->
            </div>
    
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Public\Documents\teste superacao\themeforest-template\Skote_v3.3.2\Laravel\Admin\resources\views/regulamento.blade.php ENDPATH**/ ?>