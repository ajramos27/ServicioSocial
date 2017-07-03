<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Dependencias
                <a  href="<?= base_url('dependencias') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar dependencia
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
                            <form role="form" method="POST" action="<?=base_url('admin/dependencias/edit/'.$dependencia->id)?>">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="<?=$dependencia->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nombre de la dependencia</label>
                                    <input class="form-control" value="<?=$dependencia->nombre?>" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input class="form-control" value="<?=$dependencia->direccion?>" id="direccion" name="direccion">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" value="<?=$dependencia->telefono?>" id="telefono" name="telefono">
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
