<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Usuarios
                <a  href="<?= base_url('admin/users') ?>" class="btn btn-warning">Regresar</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear nuevo usuario
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?=base_url('admin/users/create')?>">
                                <div class="form-group">
                                  <input type = "hidden" class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input class="form-control"  placeholder="Enter username" id="username" name="username"  required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Enter email" id="email" name="email"  required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password"  required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Usuario</label>
                                    <select class="form-control" id="group_id" name="group_id">
                                        <?php foreach ($groups as $group): ?>
                                        <option value="<?=$group->id?>"><?=$group->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input class="form-control" placeholder="Enter first name" id="first_name" name="first_name"  required>
                                </div>
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input class="form-control" placeholder="Enter last name" id="last_name" name="last_name"  required>
                                </div>

                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input class="form-control" placeholder="Enter phone number" id="phone" name="phone">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
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
