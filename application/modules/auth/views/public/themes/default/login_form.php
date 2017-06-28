<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
              <h3 align="center">Acceso</h3>
                <div class="panel-body">
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-danger fade in">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <?= $this->session->flashdata('message') ?>
                        </div>
                    <?php endif; ?>
                    <form role="form" method="POST" action="<?= base_url('auth/login') ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario" name="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Recordar usuario
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                        </fieldset>
                    </form>
                </div>
            </div>
              <a style="text-align:center;" href="<?= base_url('auth/olvide_password') ?>">Olvidé mi contraseña</a>
        </div>

    </div>
</div>
