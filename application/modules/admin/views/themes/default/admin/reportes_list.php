<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Reportes
                </h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Matricula</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Evaluaciones</th>
                                    <th>Autoevaluacion</th>
                                    <th>Informe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($alumnos)): ?>
                                    <?php foreach ($alumnos as $key => $alumno):
                                        $json_alumno = json_encode($alumno);?>

                                      <?php if (count($proyectos)): ?>
                                          <?php foreach ($proyectos as $key => $proyecto): ?>
                                              <?php if ($alumno['proyecto_id'] == $proyecto['id']):
                                                $json_proyecto = json_encode($proyecto);?>
                                          <?php foreach ($responsables as $key => $responsable): ?>
                                              <?php if ($responsable['id'] == $proyecto['responsable_id']):
                                                $json_responsable = json_encode($responsable) ?>
                                                <?php foreach ($dependencias as $key => $dependencia): ?>
                                                    <?php if ($dependencia['id'] == $responsable['dependencia_id']):
                                                      $json_dependencia = json_encode($dependencia) ?>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                              <?php endif; ?>
                                          <?php endforeach; ?>
                                              <?php endif; ?>
                                          <?php endforeach; ?>
                                      <?php endif; ?>

                                        <tr class="odd gradeX">
                                            <td><?=$alumno['matricula']?></td>
                                            <td><?=$alumno['nombres']?></td>
                                            <td><?=$alumno['apellidos']?></td>
                                            <td>
                                              <?php foreach ($formularios as $key => $formulario): ?>
                                                <?php if ($alumno['id'] == $formulario['alumno_id']): ?>
                                                  <?php if($formulario['form_num'] == 1):
                                                    $json_formulario1 = json_encode($formulario) ?>
                                                    <button class='btn btn-success'
                                                      onclick='descargarEvaluacion(<?php echo $json_alumno?>,<?php echo $json_responsable?>,
                                                                        <?php echo $json_proyecto?>,<?php echo $json_dependencia?>, <?php echo $json_formulario1?> )' id='button'>Periodo 1</button>
                                                  <?php  endif; ?>
                                                  <?php if($formulario['form_num'] == 2):
                                                    $json_formulario2 = json_encode($formulario)?>
                                                    <button class='btn btn-success'
                                                      onclick='descargarEvaluacion(<?php echo $json_alumno?>,<?php echo $json_responsable?>,
                                                                        <?php echo $json_proyecto?>,<?php echo $json_dependencia?>, <?php echo $json_formulario2?> )' id='button'>Periodo 2</button>
                                                  <?php  endif; ?>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            </td>
                                            <td>
                                              <?php foreach ($autoformularios as $key => $autoformulario): ?>
                                                <?php if ($alumno['id'] == $autoformulario['alumno_id']):
                                                  $json_autoformulario = json_encode($autoformulario) ?>
                                                  <button class='btn btn-success'
                                                    onclick='descargarAutoevaluacion(<?php echo $json_alumno?>,<?php echo $json_responsable?>,
                                                                      <?php echo $json_proyecto?>,<?php echo $json_dependencia?>, <?php echo $json_autoformulario?> )' id='button'>Descargar</button>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            </td>
                                            <td>
                                              <?php foreach ($informes as $key => $informe): ?>
                                                <?php if ($alumno['id'] == $informe['alumno_id']): ?>
                                                  <?php
                                                  $json_informe = json_encode($informe)?>
                                                  <button class='btn btn-success'
                                                    onclick='descargarInforme(<?php echo $json_alumno?>,<?php echo $json_responsable?>,
                                                                      <?php echo $json_proyecto?>,<?php echo $json_dependencia?>, <?php echo $json_informe?> )' id='button'>Descargar</button>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
</div>
<!-- /#page-wrapper -->
