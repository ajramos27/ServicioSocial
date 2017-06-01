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

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <div class="col-xs-9">
                            <div class="huge">Proyectos</div>
                        </div>
                    </div>
                </div>
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
                <th>II.</th>
                <th>De la unidad receptora</th>
                <th>Si</th>
                <th>No</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Me proporcionaron todos los materiales y recursos necesarios para la prestación de mi servicio</td>
                <td><input value="SI" type="radio" id = "asistePuntual" name="asistePuntual" ></td>
                <td><input value="NO" type="radio" id = "asistePuntual" name="asistePuntual"></td>
              </tr>
              <tr>
                <th>2</th>
                <td>Recibí un trato amable y respetuoso por parte del responsable del proyecto y/o del prestador
                    así como de las personas con las que interactué durante la prestación de mi servicio</td>
                <td><input value="SI" type="radio" id = "cumpleHorario" name="cumpleHorario"></td>
                <td><input value="NO" type="radio" id = "cumpleHorario" name="cumpleHorario"></td>
              </tr>
              <tr>
                <th>3</th>
                <td>Recibí un trato amable y respetuoso por parte del responsable del proyecto y/o del prestador
                  así como de las personas con las que interactué durante la prestación de mi servicio</td>
                <td><input value="SI" type="radio" id = "demuestraOrganizacion" name="demuestraOrganizacion"></td>
                <td><input value="NO" type="radio" id = "demuestraOrganizacion" name="demuestraOrganizacion"></td>
              </tr>
              <tr>
                <th>4</th>
                <td>Durante mi prestación, si en algún momento requerí modificar mi horario, notifiqué en tiempo y
                  forma dicho cambio</td>
                <td><input value="SI" type="radio" id = "demuestraCompetencias" name="demuestraCompetencias"></td>
                <td><input value="NO" type="radio" id = "demuestraCompetencias" name="demuestraCompetencias"></td>
              </tr>
              <tr>
                <th>5</th>
                <td>Recibí instrucciones claras y precisas acerca de las actividades que debía desarrollar</td>
                <td><input value="SI" type="radio" id = "optimizaRecursos" name="optimizaRecursos"></td>
                <td><input value="NO" type="radio" id = "optimizaRecursos" name="optimizaRecursos"></td>
              </tr>
              <tr>
                <th>6</th>
                <td>Las actividades que llevé a cabo contribuyeron al desarrollo de competencias (genéricas o específicas )
                  propias de mi perfil profesional (LE-LEII)</td>
                <td><input value="SI" type="radio" id = "estableceRelaciones" name="estableceRelaciones"></td>
                <td><input value="NO" type="radio" id = "estableceRelaciones" name="estableceRelaciones"></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>III.</th>
                <th>Del proyecto de servicio social</th>
                <th>Si</th>
                <th>No</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>7</th>
                <td>Colaboré con otros perfiles profesionales para el desarrollo de actividades del proyecto.</td>
                <td><input value="SI" type="radio" id = "asistePuntual" name="asistePuntual" ></td>
                <td><input value="NO" type="radio" id = "asistePuntual" name="asistePuntual"></td>
              </tr>
              <tr>
                <th>8</th>
                <td>De manera general, considero que el proyecto contribuye a la solución de una problemática social importante.</td>
                <td><input value="SI" type="radio" id = "cumpleHorario" name="cumpleHorario"></td>
                <td><input value="NO" type="radio" id = "cumpleHorario" name="cumpleHorario"></td>
              </tr>
              <tr>
                <th>9</th>
                <td>Recomendaría a otros estudiantes asignarse a este proyecto de servicio social</td>
                <td><input value="SI" type="radio" id = "demuestraOrganizacion" name="demuestraOrganizacion"></td>
                <td><input value="NO" type="radio" id = "demuestraOrganizacion" name="demuestraOrganizacion"></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>IV.</th>
                <th>De las actividades realizadas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>10</th>
                <td>Describa de manera secuencial cada una de las actividades llevadas a cabo durante la
                  prestación de su servicio social (agregue cuantas filas considere necesarias).</td>
              </tr>
              <tr>
                <td></td>
                <td><textarea class="form-control" name="observaciones" id="observaciones" style="min-width: 100%"></textarea></td>
              </tr>

            </tbody>
          </table>

          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>V.</th>
                <th>De la experiencia adquirida</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>10</th>
                <td>Describa brevemente la experiencia adquirida durante la realización del Servicio Social</td>
              </tr>
              <tr>
                <td></td>
                <td><textarea class="form-control" name="observaciones" id="observaciones" style="min-width: 100%"></textarea></td>
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
