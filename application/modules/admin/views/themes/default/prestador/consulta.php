<div id="user-wrapper">
      <!-- /.row -->
      <div class="row">
        <div class="inicio">
            <h2>Consulta de Informe Final</h2>
            <hr>
            <?php
            $json_alumno = json_encode($alumno);
            $json_responsable = json_encode($responsable);
            $json_proyecto = json_encode($proyecto);
            $json_informe = json_encode($informe)?>

            <button class='btn btn-success'
              onclick='imprimir(<?php echo $json_alumno?>,<?php echo $json_responsable?>,
                                <?php echo $json_proyecto?>,<?php echo $json_informe?> )' id='button'>
            <i class="fa fa-print"></i> Descargar</button>
        </div>


    </div>

</div>
<!-- /#page-wrapper -->
