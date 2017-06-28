<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Usuarios
                    <a  href="<?= base_url('admin/users/create') ?>" class="btn btn-success">Nuevo Usuario</a>
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
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Contraseña</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($users)): ?>
                                    <?php foreach ($users as $user): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$user->id?></td>
                                            <td><?=$user->username?></td>
                                            <td><?=$user->first_name .' '.$user->last_name?></td>
                                            <td><?=$user->email?></td>
                                            <td><?=$user->password?></td>
                                            <td>
                                                <a href="<?= base_url('admin/users/edit/'.$user->id) ?>" class="btn btn-info">Editar</a>
                                                <a href="<?= base_url('admin/users/delete/'.$user->id) ?>" class="btn btn-danger">Eliminar</a>
                                                <a onclick="javascript:deleteConfirm('<?php echo base_url('admin/users/delete/'.$user->id);?>');" deleteConfirm href="#" class="btn btn-danger">Eliminar</a>
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
                                        <td>
                                        </td>
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
