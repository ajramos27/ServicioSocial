</div>
<!-- /#wrapper -->

<div class="footer">
  <p>© Todos los Derechos Reservados Facultad de Educación, UADY.
</p>
</div>
<!-- jQuery -->
<script src="<?= base_url() ?>assets/admin/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/jspdf.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url() ?>assets/admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?= base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>assets/admin/js/sb-admin-2.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

<script>
    $(document).ready(function() {
      $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {
        var data_id = '';
        var data_num = '';
        if (typeof $(this).data('id') !== 'undefined') {
          data_id = $(this).data('id');
        }
        if (typeof $(this).data('num') !== 'undefined') {
          data_num = $(this).data('num');
        }
        $('#alumno_id').val(data_id);
        $('#form_num').val(data_num);
      })
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script type="text/javascript">
function deleteConfirm(url)
 {
    bootbox.confirm({
    message: "¿Está seguro que desea eliminar este registro?",
    size: 'small',
    buttons: {
        confirm: {
            label: 'Si',
            className: 'btn-success'
        }
    },
    callback: function (result) {
      if(result){
        window.location.href=url;
      }
    }
  });
 }
</script>

</body>

</html>
