<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Prestadores
                <a  href="<?= base_url('admin/alumnos') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nuevo Prestador
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?=$this->session->flashdata('message')?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?=base_url('admin/alumnos/create')?>">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nombre(s):</label>
                                    <input class="form-control" id="nombres" name="nombres">
                                </div>
                                <div class="form-group">
                                    <label>Apellidos:</label>
                                    <input class="form-control" id="apellidos" name="apellidos">
                                </div>
                                <div class="form-group">
                                    <label>Correo:</label>
                                    <input class="form-control" id="correo" name="correo">
                                </div>
                                <div class="form-group">
                                    <label>Facultad:</label>
                                    <input class="form-control" id="facultad" name="facultad">
                                </div>
                                <div class="form-group">
                                    <label>Licenciatura:</label>
                                    <input class="form-control" id="licenciatura" name="licenciatura">
                                </div>
                                <div class="form-group">
                                    <label>Proyecto:</label>
                                    <select class="form-control" id="proyecto_id" name="proyecto_id">
                                        <?php if (count($proyectos)): ?>
                                            <?php foreach ($proyectos as $key => $proyecto): ?>
                                                <option value="<?= $proyecto['id'] ?>"><?= $proyecto['descripcion'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
                        </div>


                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->