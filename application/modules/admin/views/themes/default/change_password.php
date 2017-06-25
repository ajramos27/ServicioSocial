<div id="page-wrapper">
      <!-- /.row -->
    <div class="row">
      <div class="inicio">
            <h3>Cambiar contraseña</h3>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                      <p align="center">Ingresa nueva contraseña</p>
                        <div class="panel-body">
                            <?php if ($this->session->flashdata('message')): ?>
                                <div class="alert alert-danger fade in">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <?= $this->session->flashdata('message') ?>
                                </div>
                            <?php endif; ?>
                            <form role="form" method="POST" aaction="<?=base_url('admin/users/change_password/'.$user->id)?>">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nueva contraseña" id ="password" name="password" autofocus>
                                    </div>

                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-primary" type="submit">Cambiar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /#page-wrapper -->





<div class="container">

</div>
