<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Products
                    <a  href="<?= base_url('admin/products/create') ?>" class="btn btn-success">Add a new</a>
                </h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Products listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Tag Line</th>
                                    <th>Price</th>
                                    <th>QoH</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Fujifilm FinePix S2950 Digital Camera</td>
                                    <td>FinePix S2950HD</td>
                                    <td>- (14MP, 18x Optical Zoom) 3-inch LCD</td>
                                    <td>48</td>
                                    <td>300</td>
                                    <td>
                                        <a href="<?= base_url('admin/products/edit/1') ?>" class="btn btn-info">edit</a>  
                                        <a href="<?= base_url('admin/products/delete/1') ?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>2</td>
                                    <td>Scandisk</td>
                                    <td>S2950HD</td>
                                    <td>- (14MP, 18x Optical Zoom) 3-inch LCD</td>
                                    <td>22</td>
                                    <td>33</td>
                                    <td>
                                        <a href="<?= base_url('admin/products/edit/2') ?>" class="btn btn-info">edit</a>  
                                        <a href="<?= base_url('admin/products/delete/2') ?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Tag Line</th>
                                    <th>Price</th>
                                    <th>QoH</th>
                                    <th>Action</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
</div>
<!-- /#page-wrapper -->