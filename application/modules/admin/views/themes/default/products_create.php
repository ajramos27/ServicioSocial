<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Products
                <a  href="<?= base_url('admin/products') ?>" class="btn btn-warning">Go back to products listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form">
                                <div class="form-group">
                                    <label>Product Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Tag Line</label>
                                    <input class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Features</label>
                                    <textarea class="form-control" rows="3"></textarea>
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
