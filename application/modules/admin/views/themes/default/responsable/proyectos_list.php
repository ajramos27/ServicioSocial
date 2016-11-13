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
                <div class="panel-heading">
                    Proyectos Inscritos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Responsable</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($proyectosresponsables)): ?>
                                    <?php foreach ($proyectosresponsables as $key => $list): ?>
                                      <?php if ($this->logged_in_id == $list['usuario_id']): ?>
                                          <tr class="odd gradeX">
                                              <td><?=$list['descripcion']?></td>
                                              <td>
                                                <?php foreach ($responsables as $key => $responsable): ?>
                                                  <?php if ($list['responsable_id'] == $responsable['id']): ?>
                                                      <?= $responsable['nombres'].' '.$responsable['apellidos'] ?>
                                                  <?php endif; ?>
                                                <?php endforeach; ?>
                                              </td>
                                              <td>
                                                  <a href="<?= base_url('admin/adminresponsable/viewalumnos/'.$list['id']) ?>" class="btn btn-info">Alumnos</a>
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
