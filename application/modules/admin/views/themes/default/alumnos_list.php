<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Prestadores
                    <a  href="<?= base_url('admin/alumnos/create') ?>" class="btn btn-success">Nuevo Prestador</a>
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
                    Prestadores Inscritos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Facultad</th>
                                    <th>Licenciatura</th>
                                    <th>Proyecto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($alumnos)): ?>
                                    <?php foreach ($alumnos as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['nombres']?></td>
                                            <td><?=$list['apellidos']?></td>
                                            <td><?=$list['correo']?></td>
                                            <td><?=$list['facultad']?></td>
                                            <td><?=$list['licenciatura']?></td>
                                            <td>
                                              <?php foreach ($proyectos as $key => $proyecto): ?>
                                                <?php if ($list['proyecto_id'] == $proyecto['id']): ?>
                                                    <?= $proyecto['descripcion'] ?>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/alumnos/view/'.$list['id']) ?>" class="btn btn-info">Ver</a>
                                                <a href="<?= base_url('admin/alumnos/edit/'.$list['id']) ?>" class="btn btn-warning">Editar</a>
                                                <a href="<?= base_url('admin/alumnos/delete/'.$list['id']) ?>" class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</a>
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
