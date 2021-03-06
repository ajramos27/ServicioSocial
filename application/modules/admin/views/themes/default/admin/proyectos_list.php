<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Proyectos
                    <a  href="<?= base_url('proyectos/create') ?>" class="btn btn-success">Nuevo Proyecto</a>
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
                                    <th>Nombre</th>
                                    <th>Responsable</th>
                                    <th>Dependencia</th>
                                    <th>LE</th>
                                    <th>LEI</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($proyectos)): ?>
                                    <?php foreach ($proyectos as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['nombre']?></td>

                                              <?php foreach ($responsables as $key => $responsable): ?>
                                                <?php if ($list['responsable_id'] == $responsable['id']): ?>
                                                  <td><?= $responsable['nombres'].' '.$responsable['apellidos'] ?></td>
                                                    <td>
                                                    <?php foreach ($dependencias as $key => $dependencia): ?>
                                                      <?php if ($responsable['dependencia_id'] == $dependencia['id']): ?>
                                                        <?= $dependencia['nombre']?>
                                                      <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </td>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                              <?php if($list['licEdu'] != NULL):?><td><i class="fa fa-check"></i></td>
                                              <?php else: ?><td></td>
                                              <?php endif; ?>
                                              <?php if($list['licEi'] != NULL):?><td><i class="fa fa-check"></i></td>
                                              <?php else: ?><td></td>
                                              <?php endif; ?>

                                            <td>
                                                <a href="<?= base_url('proyectos/edit/'.$list['id']) ?>" class="btn btn-info"><i class="fa fa-edit fa-lg"></i></a>
                                                <a onclick="javascript:deleteConfirm('<?php echo base_url('admin/proyectos/delete/'.$list['id']);?>');" deleteConfirm href="#" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></a>
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
