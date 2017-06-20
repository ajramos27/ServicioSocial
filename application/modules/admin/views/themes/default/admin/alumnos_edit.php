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
                                    <input type="hidden" class="form-control" value="<?=$alumno->id?>" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Matricula:</label>
                                    <input value="<?= $alumno->matricula ?>" class="form-control" id="matricula" name="matricula">
                                </div>
                                <div class="form-group">
                                    <label>Nombre(s):</label>
                                    <input value="<?= $alumno->nombres ?>" class="form-control" id="nombres" name="nombres">
                                </div>
                                <div class="form-group">
                                    <label>Apellidos:</label>
                                    <input value="<?= $alumno->apellidos ?>" class="form-control" id="apellidos" name="apellidos">
                                </div>
                                <div class="form-group">
                                    <label>Correo:</label>
                                    <input value="<?= $alumno->correo ?>"  class="form-control" id="correo" name="correo">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono:</label>
                                    <input value="<?= $alumno->telefono?>"class="form-control" id="telefono" name="telefono">
                                </div>
                                <div class="form-group">
                                    <label>Facultad:</label>
                                    <input value="<?= $alumno->facultad ?>" class="form-control" id="facultad" name="facultad">
                                </div>
                                <div class="form-group">
                                    <label>Licenciatura:</label>
                                    <select class="form-control" id="licenciatura" name="licenciatura" required>
                                      <option value="Educación" <?= ($alumno->licenciatura == 'Educación') ? 'selected="selected"' : '' ?>>Educación</option>
                                      <option value="Enseñanza del idioma inglés" <?= ($alumno->licenciatura == 'Enseñanza del idioma inglés') ? 'selected="selected"' : '' ?>>Enseñanza del idioma inglés</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Proyecto:</label>
                                    <select class="form-control" id="proyecto_id" name="proyecto_id">
                                        <?php if (count($proyectos)): ?>
                                            <?php foreach ($proyectos as $key => $proyecto): ?>
                                                <option value="<?= $proyecto['id'] ?>" <?= ($alumno->proyecto_id == $proyecto['id']) ? 'selected="selected"' : '' ?>> <?= $proyecto['nombre'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Inicio:</label>
                                    <?php $date = date_create($alumno->periodoInicio);?>
                                    <input value="<?=date_format($date, 'Y-m-d')?>" type="date" class="form-control" id="periodoInicio" name="periodoInicio">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de terminación:</label>
                                    <?php $date = date_create($alumno->periodoFin);?>
                                    <input value="<?=date_format($date, 'Y-m-d')?>" type="date" class="form-control" id="periodoFin" name="periodoFin">
                                </div>

                                <div class="form-group">
                                    <label>Status:</label>
                                    <select class="form-control" id="status" name="status" required>
                                      <option value="Activo" <?= ($alumno->status == 'Activo') ? 'selected="selected"' : '' ?>>Activo</option>
                                      <option value="Finalizado" <?= ($alumno->status == 'Finalizado') ? 'selected="selected"' : '' ?>>Finalizado</option>
                                      <option value="Extemporáneo" <?= ($alumno->status == 'Extemporáneo') ? 'selected="selected"' : '' ?>>Extemporáneo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <input  type="hidden"  value="<?= $alumno->usuario_id ?>" class="form-control" id="usuario_id" name="usuario_id">
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
