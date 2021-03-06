<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Proyectos
                <a  href="<?= base_url('proyectos') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nuevo Proyecto
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
                            <form role="form" method="POST" action="<?=base_url('proyectos/create')?>">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label>Responsable:</label>
                                    <select class="form-control" id="responsable_id" name="responsable_id" required>
                                        <option value="">Elija una opción</option>
                                        <?php if (count($responsables)): ?>
                                            <?php foreach ($responsables as $key => $responsable): ?>
                                                <option value="<?= $responsable['id'] ?>"><?=$responsable['nombres'].' '.$responsable['apellidos'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Licenciaturas:</label> <br>
                                    <input type="checkbox" id="licEdu" name="licEdu" value="1">Educacion<br>
                                    <input type="checkbox" id="licEi" name="licEi" value="1">Ensenanza Ingles<br>
                                </div>
                                <div class="form-group">
                                    <label>Tipo:</label>
                                    <select class="form-control" id="tipo" name="tipo" required>
                                        <option value="">Elija una opción</option>
                                        <option value="Interno">Interno</option>
                                        <option value="Externo">Externo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Inicio:</label>
                                    <input type="date" class="form-control" id="vigenciaInicio" name="vigenciaInicio">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Vigencia:</label>
                                    <input type="date" class="form-control" id="vigenciaFin" name="vigenciaFin">
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
