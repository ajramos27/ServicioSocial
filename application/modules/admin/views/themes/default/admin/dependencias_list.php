<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Dependencias
                    <a  href="<?= base_url('dependencias/create') ?>" class="btn btn-success">Nueva Dependencia</a>
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
                                    <th>Dependencia</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dependencias)): ?>
                                    <?php foreach ($dependencias as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['nombre']?></td>
                                            <td><?=$list['direccion']?></td>
                                            <td><?=$list['telefono']?></td>
                                            <td>
                                                <a href="<?= base_url('dependencias/edit/'.$list['id']) ?>" class="btn btn-info">Editar</a>
                                                <a onclick="javascript:deleteConfirm('<?php echo base_url('admin/dependencias/delete/'.$list['id']);?>');" deleteConfirm href="#" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
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
