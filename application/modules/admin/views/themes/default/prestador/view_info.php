<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                <?= $alumno->nombres." ".$alumno->apellidos ?>
                <a  href="<?= base_url('admin/adminprestador') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $alumno->nombres." ".$alumno->apellidos ?>
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
                        <div class="col-lg-6 col-lg-offset-3">
                          <center>
                          <img src="<?= base_url() ?>assets/admin/images/profile.png" width="120" height="100">
                          <br><br>
                            <table class="table">
                                <tr>
                                <th>Nombre Completo:</th>
                                <td><?= $alumno->nombres." ".$alumno->apellidos ?></td>
                                </tr>

                                <th>E-mail:</th>
                                <td><?= $alumno->correo ?></td>
                                </tr>

                                <tr>
                                <th>Facultad:</th>
                                <td><?= $alumno->facultad ?></td>
                                </tr>

                                <tr>
                                <th>Licenciatura:</th>
                                <td><?= $alumno->licenciatura ?></td>
                                </tr>

                                <tr>
                                <th>Proyecto:</th>
                                <td><?= $proyecto->nombre?></td>
                                </tr>
                                <tr>
                                <th>Responsable:</th>
                                <td><?= $responsable->nombres.' '.$responsable->apellidos ?></td>
                                </tr>
                                <tr>
                                <th>Dependencia:</th>
                                <td><?= $dependencia->nombre?></td>
                                </tr>

                                <tr>
                                <th>Status:</th>
                                <td><?= $alumno->status ?></td>
                                </tr>
                                <?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp");?>
                                <tr>
                                <th>Periodo de prestación:</th>
                                <td><?= strftime("%d/%m/%Y", strtotime($alumno->periodoInicio))." - ".strftime("%d/%m/%Y", strtotime($alumno->periodoFin))?></td>
                                </tr>
                            </table>

                          </center>



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
