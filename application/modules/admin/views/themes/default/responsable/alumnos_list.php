<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Prestadores
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
                        <table class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Licenciatura</th>
                                    <th>Proyecto</th>
                                    <th>Status</th>
                                    <th>Evaluar</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($alumnos)): ?>
                                    <?php foreach ($alumnos as $key => $list): ?>
                                      <?php $form1= false; $form2 = false; ?>
                                      <?php if ($this->logged_in_id == $list['usuario_id']): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['nombres']?></td>
                                            <td><?=$list['apellidos']?></td>
                                            <td><?=$list['licenciatura']?></td>
                                            <td>
                                              <?php foreach ($proyectos as $key => $proyecto): ?>
                                                <?php if ($list['proyecto_id'] == $proyecto['id']): ?>
                                                    <?= $proyecto['nombre'] ?>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            </td>
                                            <td><?=$list['status']?></td>
                                            <td>
                                              <?php foreach ($formularios as $key => $form):
                                                    if ($list['id'] == $form['alumno_id']):
                                                      if ($form['form_num'] == 1):
                                                        $form1=true;
                                                      endif;
                                                      if ($form['form_num'] == 2):
                                                        $form2=true;
                                                      endif;
                                                    endif;
                                                    endforeach; ?>
                                                <button <?php if ($form1==true){?>style="display:none"<?php } ?> href="#evaluacionModal" id="openBtn" data-id="<?= $list['id'] ?>" data-num ="1" data-toggle="modal" class="open-EvaluacionModal btn btn-success">Periodo 1</button>
                                                <button <?php if ($form2==true){?>style="display:none"<?php } ?> href="#evaluacionModal" id="openBtn" data-id="<?= $list['id'] ?>" data-num ="2" data-toggle="modal" class="open-EvaluacionModal btn btn-success">Periodo 2</button>
                                                <?php if($form1 && $form2): ?>
                                                  <p>Evaluado</p>
                                                  <?php endif;?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/adminresponsable/viewAlumno/'.$list['id']) ?>" class="btn btn-info">Ver</a>
                                                <?php if($list['status'] == 'Finalizado'): ?>
                                                  <a  href="<?= base_url('admin/adminresponsable/carta/'.$list['id']) ?>" class="btn btn-warning">Generar Carta</a>
                                                <?php else : ?>
                                                  <a  href="<?= base_url('admin/adminresponsable/finalizarServicio/'.$list['id']) ?>" class="btn btn-warning">Finalizar Servicio</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td></td>
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


<div class="modal fade" id="evaluacionModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">Evaluación</h3>
        </div>
        <div class="modal-body">
          <h5 class="text-center"></h5>
          <form method="POST" action="<?=base_url('admin/formularios/create')?>">
          <input type="hidden" class="form-control" id = "alumno_id" name= "alumno_id" value="">
          <input type="hidden" class="form-control" id = "form_num" name= "form_num" value="">
          <div class="form-group">
              <label>Al momento, el número de horas cubiertas:</label>
              <input id="horas" name="horas">
          </div>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>#</th>
                <th>Conducta</th>
                <th>Si</th>
                <th>No</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Asistió puntualmente.</td>
                <td><input value="SI" type="radio" id = "asistePuntual" name="asistePuntual" ></td>
                <td><input value="NO" type="radio" id = "asistePuntual" name="asistePuntual"></td>
              </tr>
              <tr>
                <th>2</th>
                <td>Cumple el horario establecido para la realización del servicio social
                o en su defecto, notifica la necesidad de modificar su horario.</td>
                <td><input value="SI" type="radio" id = "cumpleHorario" name="cumpleHorario"></td>
                <td><input value="NO" type="radio" id = "cumpleHorario" name="cumpleHorario"></td>
              </tr>
              <tr>
                <th>3</th>
                <td>Demuestra organización en el desarrollo de las actividades.</td>
                <td><input value="SI" type="radio" id = "demuestraOrganizacion" name="demuestraOrganizacion"></td>
                <td><input value="NO" type="radio" id = "demuestraOrganizacion" name="demuestraOrganizacion"></td>
              </tr>
              <tr>
                <th>4</th>
                <td>Demuestra competencias (genéricas o específicas ) propias de su
                perfil profesional (LE-LEII)</td>
                <td><input value="SI" type="radio" id = "demuestraCompetencias" name="demuestraCompetencias"></td>
                <td><input value="NO" type="radio" id = "demuestraCompetencias" name="demuestraCompetencias"></td>
              </tr>
              <tr>
                <th>5</th>
                <td>Optimiza los recursos con los que cuenta la unidad receptora para
                la realización de las actividades propias del servicio social.</td>
                <td><input value="SI" type="radio" id = "optimizaRecursos" name="optimizaRecursos"></td>
                <td><input value="NO" type="radio" id = "optimizaRecursos" name="optimizaRecursos"></td>
              </tr>
              <tr>
                <th>6</th>
                <td>Establece relaciones favorables con los responsables del proyecto
                y del prestador o con quienes interactúa.</td>
                <td><input value="SI" type="radio" id = "estableceRelaciones" name="estableceRelaciones"></td>
                <td><input value="NO" type="radio" id = "estableceRelaciones" name="estableceRelaciones"></td>
              </tr>
              <tr>
                <th>7</th>
                <td>Atiende las indicaciones que se le proporcionan.</td>
                <td><input value="SI" type="radio" id = "atiendeIndicaciones" name="atiendeIndicaciones"></td>
                <td><input value="NO" type="radio" id = "atiendeIndicaciones" name="atiendeIndicaciones"></td>
              </tr>
            </tbody>
          </table>

          <p>Observaciones:</p>
          <textarea class="form-control" name="observaciones" id="observaciones" style="min-width: 100%"></textarea>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
