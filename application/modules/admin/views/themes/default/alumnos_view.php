<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Prestadores
                <a  href="<?= base_url('admin/alumnos') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $alumno->nombres." ".$alumno->apellidos ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?=$this->session->flashdata('message')?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-lg-6 col-lg-offset-3">
                          <center>
                          <img src="<?= base_url() ?>assets/admin/images/profile.png" width="120" height="100">
                          <br><br>
                            <table class="table">
                                <tr>
                                <th>Nombre Completo:</th>
                                <td><?= $alumno->nombres." ".$alumno->apellidos ?></td>
                                </tr>

                                <th>E-mail:</th>
                                <td><?= $alumno->correo ?></td>
                                </tr>

                                <tr>
                                <th>Facultad:</th>
                                <td><?= $alumno->facultad ?></td>
                                </tr>

                                <tr>
                                <th>Licenciatura:</th>
                                <td><?= $alumno->licenciatura ?></td>
                                </tr>

                                <?php if (count($proyectos)): ?>
                                    <?php foreach ($proyectos as $key => $proyecto): ?>
                                        <?php if ($alumno->proyecto_id == $proyecto['id']): ?>
                                          <tr>
                                          <th>Proyecto:</th>
                                          <td><?= $proyecto['descripcion'] ?></td>
                                          </tr>
                                          <tr>
                                    <?php foreach ($responsables as $key => $responsable): ?>
                                        <?php if ($responsable['id'] == $proyecto['responsable_id']): ?>
                                          <th>Responsable:</th>
                                          <td><?= $responsable['nombres'].' '.$responsable['apellidos'] ?></td>
                                          </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </table>
                          </center>
                        <a  href="<?= base_url('admin/alumnos/generarCarta') ?>" class="btn btn-warning">Generar Carta</a>
                        <a  href="" class="btn btn-warning">Finalizar Servicio</a>
                        </div>
                        <?php if (count($formularios)): ?>
                            <?php foreach ($formularios as $key => $list): ?>

                              <div class="col-lg-8 col-lg-offset-2">
                                <center>
                                <br><br>
                                  <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Conducta</th>
                                            <th>Evaluación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th>1</th>
                                        <td>Asistió puntualmente.</td>
                                        <td><?=$list['asistePuntual']?> </td>
                                        </tr>
                                      <tr>
                                        <th>2</th>
                                        <td>Cumple el horario establecido para la realización del servicio social
                                        o en su defecto, notifica la necesidad de modificar su horario.</td>
                                        <td><?=$list['cumpleHorario']?> </td>
                                        </tr>
                                      <tr>
                                        <th>3</th>
                                        <td>Demuestra organización en el desarrollo de las actividades.</td>
                                        <td><?=$list['demuestraOrganizacion']?> </td>
                                      </tr>
                                      <tr>
                                        <th>4</th>
                                        <td>Demuestra competencias (genéricas o específicas ) propias de su
                                        perfil profesional (LE-LEII)</td>
                                        <td><?=$list['demuestraCompetencias']?> </td>
                                      </tr>
                                      <tr>
                                        <th>5</th>
                                        <td>Optimiza los recursos con los que cuenta la unidad receptora para
                                        la realización de las actividades propias del servicio social.</td>
                                        <td><?=$list['optimizaRecursos']?> </td>
                                      </tr>
                                      <tr>
                                        <th>6</th>
                                        <td>Establece relaciones favorables con los responsables del proyecto
                                        y del prestador o con quienes interactúa.</td>
                                        <td><?=$list['estableceRelaciones']?> </td>
                                      </tr>
                                      <tr>
                                        <th>7</th>
                                        <td>Atiende las indicaciones que se le proporcionan.</td>
                                        <td><?=$list['atiendeIndicaciones']?> </td>
                                      </tr>
                                      <tr>
                                        <th>8</th>
                                        <td>Observaciones.</td>
                                        <td><?=$list['observaciones']?> </td>
                                      </tr>
                                    </tbody>

                                  </table>
                                </center>
                              </div>

                            <?php endforeach; ?>
                        <?php else : ?>
                          <div class="col-lg-8 col-lg-offset-2">
                            <center>
                            <br><br>
                              <h4>No tiene evaluaciones</h4>
                            </center>
                          </div>
                        <?php endif; ?>


                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
