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
                    Actualizar prestador
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
                            <form role="form" method="POST" action="<?=base_url('admin/alumnos/edit/'.$alumno->id)?>">
                                <div class="form-group">
                                    <label>Id Input</label>
                                    <input class="form-control" value="<?=$alumno->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nombre(s)</label>
                                    <input value="<?= $alumno->nombres ?>" class="form-control" placeholder="Enter product name" id="nombres" name="nombres">
                                </div>
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input value="<?= $alumno->apellidos ?>" class="form-control" placeholder="Enter product name" id="apellidos" name="apellidos">
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input value="<?= $alumno->correo ?>"  class="form-control" placeholder="Enter product mode" id="correo" name="correo">
                                </div>
                                <div class="form-group">
                                    <label>Facultad</label>
                                    <input value="<?= $alumno->facultad ?>" class="form-control" placeholder="Enter product mode" id="facultad" name="facultad">
                                </div>
                                <div class="form-group">
                                    <label>Licenciatura</label>
                                    <input value="<?= $alumno->licenciatura ?>" class="form-control" placeholder="Enter product mode" id="licenciatura" name="licenciatura">
                                </div>
                                <div class="form-group">
                                    <label>Proyecto</label>
                                    <select class="form-control" id="proyecto_id" name="proyecto_id">
                                        <?php if (count($proyectos)): ?>
                                            <?php foreach ($proyectos as $key => $proyecto): ?>
                                                <option value="<?= $proyecto['id'] ?>" <?= ($alumno->proyecto_id == $proyecto['id']) ? 'selected="selected"' : '' ?>> <?= $proyecto['descripcion'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input value="<?= $alumno->usuario_id ?>" class="form-control" placeholder="Enter product mode" id="usuario_id" name="usuario_id">
                                </div>

                                <button type="submit" class="btn btn-primary">Actualizar</button>
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
