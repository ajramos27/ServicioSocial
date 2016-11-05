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
                    Edit product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form">
                                <div class="form-group">
                                    <label>Product Id Input</label>
                                    <input class="form-control" value="1" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input value="Fujifilm FinePix S2950 Digital Camera" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input value="FinePix S2950HD" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Tag Line</label>
                                    <input value="- (14MP, 18x Optical Zoom) 3-inch LCD" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Features</label>
                                    <textarea class="form-control" rows="3">14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card). </textarea>
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
