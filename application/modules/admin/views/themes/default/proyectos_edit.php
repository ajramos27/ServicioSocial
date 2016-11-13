<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Proyectos
                <a  href="<?= base_url('admin/proyectos') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar proyecto
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
                            <form role="form" method="POST" action="<?=base_url('admin/proyectos/edit/'.$proyecto->id)?>">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="<?=$proyecto->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Descripción:</label>
                                    <input value="<?=$proyecto->descripcion?>" class="form-control" id="descripcion" name="descripcion">
                                </div>
                                <div class="form-group">
                                    <label>Responsable:</label>
                                    <select class="form-control" id="responsable_id" name="responsable_id">
                                        <?php if (count($responsables)): ?>
                                            <?php foreach ($responsables as $key => $responsable): ?>
                                                <option value="<?= $responsable['id'] ?>" <?= ($proyecto->responsable_id == $responsable['id']) ? 'selected="selected"' : '' ?>> <?= $responsable['nombres'].' '.$responsable['apellidos'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
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
