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
                                    <label>Nombre:</label>
                                    <input value="<?=$proyecto->nombre?>" class="form-control" id="nombre" name="nombre">
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

                                <div class="form-group">
                                    <label>Licenciaturas:</label> <br>

                                    <?php if($proyecto->licEdu): ?>
                                    <input type="checkbox" id="licEdu" name="licEdu" value="1" checked>Educacion<br>
                                    <?php else : ?>
                                    <input type="checkbox" id="licEdu" name="licEdu" value="1">Educacion<br>
                                    <?php endif; ?>

                                    <?php if($proyecto->licEi): ?>
                                    <input type="checkbox" id="licEi" name="licEi" value="1" checked>Enseñanza Ingles<br>
                                    <?php else : ?>
                                    <input type="checkbox" id="licEi" name="licEi" value="1">Enseñanza Ingles<br>
                                    <?php endif; ?>                                
                                </div>
                                <div class="form-group">
                                    <label>Tipo:</label>
                                    <input value="<?=$proyecto->tipo?>" class="form-control" id="tipo" name="tipo">
                                </div>
                                <div class="form-group">
                                    <label>Vigencia:</label>
                                    <input value="<?=$proyecto->vigencia?>" class="form-control" id="vigencia" name="vigencia">
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
