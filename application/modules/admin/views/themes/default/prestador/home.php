<div id="user-wrapper">
      <!-- /.row -->
      <div class="row">
        <div class="inicio">
            <h2>BIENVENIDO</h2>
            <hr>
        </div>

        <a href="<?= base_url('admin/informes') ?>"><div class="col-md-4 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-4x"></i>
                        </div>
                        <div class="col-xs-9">
                            <div class="huge">Informe Final</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> </a>
        <a href="#evaluacionModal" id="openBtn" data-id="2" data-num ="1" data-toggle="modal" class="open-EvaluacionModal">
          <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <div class="col-xs-9">
                            <div class="huge">Autoevaluación</div>
                        </div>
                    </div>
                </div>
            </div>
        </div></a>
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
          <input type="hidden" class="form-control" id = "form_num" name= "form_num" value="">
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
