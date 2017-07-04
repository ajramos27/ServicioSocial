<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Responsables
                    <a  href="<?= base_url('responsables/create') ?>" class="btn btn-success">Nuevo Responsable</a>
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
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Dependencia</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($responsables)): ?>
                                    <?php foreach ($responsables as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['nombres']?></td>
                                            <td><?=$list['apellidos']?></td>
                                            <td><?=$list['correo']?></td>
                                            <td><?=$list['telefono']?></td>
                                            <td>
                                              <?php foreach ($dependencias as $key => $dependencia): ?>
                                                <?php if ($list['dependencia_id'] == $dependencia['id']): ?>
                                                    <?= $dependencia['nombre'] ?>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/responsables/edit/'.$list['id']) ?>" class="btn btn-info"><i class="fa fa-edit fa-lg"></i></a>
                                                <a onclick="javascript:deleteConfirm('<?php echo base_url('admin/responsables/delete/'.$list['id']);?>');" deleteConfirm href="#" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></a>
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
