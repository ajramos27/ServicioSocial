<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Proyectos
                </h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Responsable</th>
                                    <th>Dependencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($proyectosresponsables)): ?>
                                    <?php foreach ($proyectosresponsables as $key => $list): ?>
                                      <?php if ($this->logged_in_id == $list['usuario_id']): ?>
                                          <tr class="odd gradeX">
                                              <td><?=$list['nombre']?></td>
                                              <td>
                                                <?php foreach ($responsables as $key => $responsable): ?>
                                                  <?php if ($list['responsable_id'] == $responsable['id']): ?>
                                                      <?= $responsable['nombres'].' '.$responsable['apellidos'] ?>
                                                  <?php endif; ?>
                                                <?php endforeach; ?>
                                              </td>
                                              <td>
                                                <?php foreach ($responsables as $key => $responsable): ?>
                                                  <?php if ($list['responsable_id'] == $responsable['id']): ?>
                                                    <?php foreach ($dependencias as $key => $dependencia): ?>
                                                      <?php if ($responsable['dependencia_id'] == $dependencia['id']): ?>
                                                        <?= $dependencia['nombre']?>
                                                      <?php endif; ?>
                                                    <?php endforeach; ?>
                                                  <?php endif; ?>
                                                <?php endforeach; ?>
                                              </td>
                                          </tr>
                                      <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
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
