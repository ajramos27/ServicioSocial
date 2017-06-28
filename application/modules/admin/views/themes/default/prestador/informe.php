<div id="user-wrapper">
      <!-- /.row -->
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <a  href="<?= base_url('admin/adminprestador') ?>" class="btn btn-warning">Regresar al Inicio</a>
          </div>
          <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 inicio">
            <form id="informe_form"novalidate action="<?=base_url('admin/informes/create')?>"  method="post">
              <input type="hidden" class="form-control" id = "alumno_id" name= "alumno_id" value="<?=$alumno->id?>">
              <fieldset>
                <h3>I. De la unidad receptora</h3>
                <table class="table table-striped" id="tblGrid">
                  <thead id="tblHead">
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Si</th>
                      <th>No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Me proporcionaron todos los materiales y recursos necesarios para la prestación de mi servicio</td>
                      <td><input value="SI" type="radio" id = "preg1" name="preg1" ></td>
                      <td><input value="NO" type="radio" id = "preg1" name="preg1"></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Recibí un trato amable y respetuoso por parte del responsable del proyecto y/o del prestador
                          así como de las personas con las que interactué durante la prestación de mi servicio</td>
                          <td><input value="SI" type="radio" id = "preg2" name="preg2" ></td>
                          <td><input value="NO" type="radio" id = "preg2" name="preg2"></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Recibí un trato amable y respetuoso por parte del responsable del proyecto y/o del prestador
                        así como de las personas con las que interactué durante la prestación de mi servicio</td>
                        <td><input value="SI" type="radio" id = "preg3" name="preg3" ></td>
                        <td><input value="NO" type="radio" id = "preg3" name="preg3"></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Durante mi prestación, si en algún momento requerí modificar mi horario, notifiqué en tiempo y
                        forma dicho cambio</td>
                        <td><input value="SI" type="radio" id = "preg4" name="preg4" ></td>
                        <td><input value="NO" type="radio" id = "preg4" name="preg4"></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>Recibí instrucciones claras y precisas acerca de las actividades que debía desarrollar</td>
                      <td><input value="SI" type="radio" id = "preg5" name="preg5" ></td>
                      <td><input value="NO" type="radio" id = "preg5" name="preg5"></td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td>Las actividades que llevé a cabo contribuyeron al desarrollo de competencias (genéricas o específicas )
                        propias de mi perfil profesional (LE-LEII)</td>
                        <td><input value="SI" type="radio" id = "preg6" name="preg6" ></td>
                        <td><input value="NO" type="radio" id = "preg6" name="preg6"></td>
                    </tr>
                  </tbody>
                </table>
                <input type="button" name="password" class="next btn btn-info" value="Next" />
              </fieldset>
              <fieldset>
                <h2> II. Del proyecto de servicio social</h2>
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
                      <td><input value="SI" type="radio" id = "preg7" name="preg7" ></td>
                      <td><input value="NO" type="radio" id = "preg7" name="preg7"></td>
                    </tr>
                    <tr>
                      <th>8</th>
                      <td>De manera general, considero que el proyecto contribuye a la solución de una problemática social importante.</td>
                      <td><input value="SI" type="radio" id = "preg8" name="preg8" ></td>
                      <td><input value="NO" type="radio" id = "preg8" name="preg8"></td>
                    </tr>
                    <tr>
                      <th>9</th>
                      <td>Recomendaría a otros estudiantes asignarse a este proyecto de servicio social</td>
                      <td><input value="SI" type="radio" id = "preg9" name="preg9" ></td>
                      <td><input value="NO" type="radio" id = "preg9" name="preg9"></td>
                    </tr>
                  </tbody>
                </table>
                <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                <input type="button" name="next" class="next btn btn-info" value="Next" />
              </fieldset>
              <fieldset>
                <h2>Step 3: De las actividades realizadas</h2>
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
                      <td><textarea class="form-control" name="actividades" id="actividades" style="min-width: 100%"></textarea></td>
                    </tr>

                  </tbody>
                </table>
                <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                <input type="button" name="next" class="next btn btn-info" value="Next" />
              </fieldset>
              <fieldset>
                <h2>Step 3: De las actividades realizadas</h2>
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
                      <td><textarea class="form-control" name="experiencia" id="experiencia" style="min-width: 100%"></textarea></td>
                    </tr>

                  </tbody>
                </table>


                <p>Observaciones:</p>
                <textarea class="form-control" name="observaciones" id="observaciones" style="min-width: 100%"></textarea>
                <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
              </fieldset>
            </form>

        </div>
    </div>

</div>
<!-- /#page-wrapper -->
