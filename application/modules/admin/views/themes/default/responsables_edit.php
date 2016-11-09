<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Prestadores
                <a  href="<?= base_url('admin/responsables') ?>" class="btn btn-warning">Regresar</a>
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
                            <form role="form" method="POST" action="<?=base_url('admin/responsables/edit/'.$responsable->id)?>">
                                <div class="form-group">
                                    <label>Id Input</label>
                                    <input class="form-control" value="<?=$responsable->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nombre(s)</label>
                                    <input value="<?= $responsable->nombres ?>" class="form-control" placeholder="Enter product name" id="nombres" name="nombres">
                                </div>
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input value="<?= $responsable->apellidos ?>" class="form-control" placeholder="Enter product name" id="apellidos" name="apellidos">
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input value="<?= $responsable->correo ?>"  class="form-control" placeholder="Enter product mode" id="correo" name="correo">
                                </div>
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input value="<?= $responsable->telefono ?>"class="form-control" placeholder="Enter product mode" id="telefono" name="telefono">
                                </div>
                                <div class="form-group">
                                    <label>Dependencia</label>
                                    <input value="<?= $responsable->dependencia_id ?>" class="form-control" placeholder="Enter product mode" id="dependencia_id" name="dependencia_id">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input value="<?= $responsable->usuario_id ?>" class="form-control" placeholder="Enter product mode" id="usuario_id" name="usuario_id">
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
