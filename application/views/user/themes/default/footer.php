</div>
<!-- /#wrapper -->

<div class="footer">
  <p>© Todos los Derechos Reservados Facultad de Educación, UADY.
</p>
</div>
<!-- jQuery -->
<script src="<?= base_url() ?>assets/admin/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/jspdf.min.js"></script>

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
        if (typeof $(this).data('id') !== 'undefined') {
          data_id = $(this).data('id');
        }
        $('#alumno_id').val(data_id);
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

<script>
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");
  }
});
</script>

<script type="text/javascript">
/*$('#button').click(function() {
  var doc = new jsPDF();
  //var alumno = $(this).data('alumno');
  doc.text(23, 81, name);
  doc.save('jola.pdf');
});*/
  function imprimir(alumno, responsable, proyecto, informe){
    var alumnoString =  JSON.stringify(alumno);
    var responsableString =  JSON.stringify(responsable);
    var proyectoString =  JSON.stringify(proyecto);
    var informeString =  JSON.stringify(informe);

    var jsonAlumno = JSON.parse(alumnoString);
    var jsonResponsable = JSON.parse(responsableString);
    var jsonProyecto = JSON.parse(proyectoString);
    var jsonInforme = JSON.parse(informeString);

    var doc = new jsPDF();
    //var alumno = $(this).data('alumno');
    //var imgData;
    <?php
    $pag1 = base64_encode(file_get_contents(base_url()."assets/admin/images/informe-pag1.jpg"));
    $pag2 = base64_encode(file_get_contents(base_url()."assets/admin/images/informe-pag2.jpg"));
    $pag3 = base64_encode(file_get_contents(base_url()."assets/admin/images/informe-pag3.jpg"));

    ?>
    var page1 = 'data:image/jpeg;base64,'+ '<?php echo $pag1 ?>';
    var page2 = 'data:image/jpeg;base64,'+ '<?php echo $pag2 ?>';
    var page3 = 'data:image/jpeg;base64,'+ '<?php echo $pag3 ?>';

    doc.setFontSize(11);

    doc.addImage(page1, 'JPEG',0,0,210,297);
    doc.text(40, 67, jsonAlumno['nombres'] + " " + jsonAlumno['apellidos']);
    doc.text(42, 77, jsonAlumno['matricula']);
    doc.text(134, 77, jsonAlumno['correo']);
    doc.text(75, 87, jsonAlumno['licenciatura']);
    doc.text(85, 97, "dependencia");
    doc.text(65, 107, jsonProyecto["nombre"]);
    doc.text(65, 119, jsonAlumno["periodoInicio"] + " - " + jsonAlumno["periodoFin"]);

    if(jsonInforme["preg1"] == "SI") { doc.text(154,155, "X")}
    else { doc.text(173,155, "X") }

    if(jsonInforme["preg2"] == "SI") { doc.text(154,167, "X")}
    else { doc.text(173,167, "X") }

    if(jsonInforme["preg3"] == "SI") { doc.text(154,179, "X")}
    else { doc.text(173,179, "X") }

    if(jsonInforme["preg4"] == "SI") { doc.text(154,189, "X")}
    else { doc.text(173,189, "X") }

    if(jsonInforme["preg5"] == "SI") { doc.text(154,199, "X")}
    else { doc.text(173,199, "X") }

    if(jsonInforme["preg6"] == "SI") { doc.text(154,210, "X")}
    else { doc.text(173,210, "X") }

    if(jsonInforme["preg7"] == "SI") { doc.text(154,242, "X")}
    else { doc.text(173,242, "X") }

    if(jsonInforme["preg8"] == "SI") { doc.text(154,252, "X")}
    else { doc.text(173,252, "X") }

    if(jsonInforme["preg9"] == "SI") { doc.text(154,262, "X")}
    else { doc.text(173,262, "X") }


    doc.addPage();
    doc.addImage(page2, 'JPEG',0,0,210,297);
    doc.text(22, 80, jsonInforme['actividades']);
    doc.text(22, 150, jsonInforme['experiencia']);

    doc.addPage();
    doc.addImage(page3, 'JPEG',0,0,210,297)
    doc.text(22, 55, jsonInforme['observaciones']);

    doc.save('jola.pdf');
  }
 </script>

</body>

</html>
