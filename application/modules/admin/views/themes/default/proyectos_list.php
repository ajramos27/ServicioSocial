<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Proyectos
                    <a  href="<?= base_url('admin/proyectos/create') ?>" class="btn btn-success">Nuevo Proyecto</a>
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
                                <?php if (count($proyectos)): ?>
                                    <?php foreach ($proyectos as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['descripcion']?></td>
                                            <td><?=$list['responsable_id']?></td>
                                            <td>
                                                <a href="<?= base_url('admin/proyectos/edit/'.$list['id']) ?>" class="btn btn-info">Editar</a>
                                                <a href="<?= base_url('admin/proyectos/delete/'.$list['id']) ?>" class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
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
