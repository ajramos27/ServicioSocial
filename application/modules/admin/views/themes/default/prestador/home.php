<div id="page-wrapper">
      <!-- /.row -->
      <div class="row">
        <div class="inicio">
            <h2>BIENVENIDO</h2>
            <hr>
            <h3>Bienvenido al sistema de seguimiento de Servicio Social de la Facultad de Educación</h3>
            <br>
            <h4>Informe final del Prestador de Servicio Social</h4>
            <p>Verifica que tu informacion sea correcta </p>
            <div class="col-lg-6 col-lg-offset-3">
              <div class="form-group form-inline">
                  <label>Nombre:</label>
                  <select class="form-control" name="">
                    <option><?= $alumno->nombres." ".$alumno->apellidos ?></option>
                  </select>
              </div>
              <?php if (count($proyectos)): ?>
                  <?php foreach ($proyectos as $key => $proyecto): ?>
                      <?php if ($alumno->proyecto_id == $proyecto['id']): ?>
                        <div class="form-group form-inline">
                            <label>Proyecto:</label>
                            <select class="form-control" name="">
                              <option><?= $proyecto['nombre'] ?></option>
                            </select>
                        </div>
                  <?php foreach ($responsables as $key => $responsable): ?>
                      <?php if ($responsable['id'] == $proyecto['responsable_id']): ?>
                        <div class="form-group form-inline">
                            <label>Responsable:</label>
                            <select class="form-control" name="">
                              <option><?= $responsable['nombres'].' '.$responsable['apellidos'] ?></option>
                            </select>
                        </div>
                      <?php endif; ?>
                  <?php endforeach; ?>
                      <?php endif; ?>
                  <?php endforeach; ?>
              <?php endif; ?>

              <button href="#evaluacionModal" id="openBtn" data-id="<?= $alumno->id ?>" data-toggle="modal" class="open-EvaluacionModal btn btn-info">Evaluar</button>

            </div>




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
          <form method="POST" action="<?=base_url('admin/formularios/create2')?>">
          <input type="hidden" class="form-control" id = "alumno_id" name= "alumno_id" value="">
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


  <script>
      $(document).ready(function() {
        $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {
          var data_id = '';
          if (typeof $(this).data('id') !== 'undefined') {
            data_id = $(this).data('id');
          }
          $('#alumno_id').val(data_id);
        })
      });
  </script>
