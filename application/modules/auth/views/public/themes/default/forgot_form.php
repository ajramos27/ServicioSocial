<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
              <p align="center">Ingresa tu email</p>
                <div class="panel-body">
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-danger fade in">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <?= $this->session->flashdata('message') ?>
                        </div>
                    <?php endif; ?>
                    <form role="form" method="POST" action="<?= base_url('auth/forgot_password') ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" id ="email" name="email" autofocus>
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Reenviar contraseña</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
