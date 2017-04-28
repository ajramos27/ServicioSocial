<div id="page-wrapper">
      <!-- /.row -->
    <div class="row">
        <?php if ($this->session->flashdata('message')): ?>
        <div class="col-lg-12 col-md-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?=$this->session->flashdata('message')?>
            </div>
        </div>
        <?php endif; ?>

        <div class="inicio">
            <h2>BIENVENIDO</h2>
            <hr>
            <h3>Bienvenido al sistema de seguimiento de Servicio Social de la Facultad de Educación</h3>
            <br>
            <p>Verifica que tu informacion este correcta </p>

            <p>Nombre de proyecto</p>
            <p>Nombre de responsable</p>
            <p>Periodo</p>

            <button>Evaluar</button>


            <h4><a href="#">Evaluar Prestadores</a></h4>
            <h4><a href="#">Ver Proyectos</a></h4>

        </div>




    </div>

</div>
<!-- /#page-wrapper -->
