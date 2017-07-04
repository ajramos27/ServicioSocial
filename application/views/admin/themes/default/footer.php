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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script src="<?= base_url() ?>assets/admin/js/admin.js"></script>

<script type="text/javascript">
  function descargarInforme(alumno, responsable, proyecto, dependencia, informe){
    var alumnoString =  JSON.stringify(alumno);
    var responsableString =  JSON.stringify(responsable);
    var proyectoString =  JSON.stringify(proyecto);
    var dependenciaString = JSON.stringify(dependencia);
    var informeString =  JSON.stringify(informe);

    var jsonAlumno = JSON.parse(alumnoString);
    var jsonResponsable = JSON.parse(responsableString);
    var jsonProyecto = JSON.parse(proyectoString);
    var jsonDependencia= JSON.parse(dependenciaString);
    var jsonInforme = JSON.parse(informeString);


    var doc = new jsPDF();
    //var alumno = $(this).data('alumno');
    //var imgData;
    <?php
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
    $pag1 = base64_encode(file_get_contents(base_url()."assets/admin/images/informe-pag1.jpg"));
    $pag2 = base64_encode(file_get_contents(base_url()."assets/admin/images/informe-pag2.jpg"));
    $pag3 = base64_encode(file_get_contents(base_url()."assets/admin/images/informe-pag3.jpg"));

    ?>
    var page1 = 'data:image/jpeg;base64,'+ '<?php echo $pag1 ?>';
    var page2 = 'data:image/jpeg;base64,'+ '<?php echo $pag2 ?>';
    var page3 = 'data:image/jpeg;base64,'+ '<?php echo $pag3 ?>';

    doc.setFontSize(11);

    var inicio = new Date(jsonAlumno["periodoInicio"]);
    var fin = new Date(jsonAlumno["periodoFin"]);
    var options = { year: 'numeric', month: 'long', day: 'numeric' };



    doc.addImage(page1, 'JPEG',0,0,210,297);
    doc.text(40, 67, jsonAlumno['nombres'] + " " + jsonAlumno['apellidos']);
    doc.text(42, 77, jsonAlumno['matricula']);
    doc.text(134, 77, jsonAlumno['correo']);
    doc.text(75, 87, jsonAlumno['licenciatura']);
    doc.text(85, 97, jsonDependencia['nombre']);
    doc.text(65, 107, jsonProyecto["nombre"]);
    doc.text(65, 119, inicio.toLocaleDateString("es-ES", options) + " - " + fin.toLocaleDateString("es-ES", options) );

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

    doc.save('Informe_' + jsonAlumno['nombres'] + jsonAlumno['apellidos'] + '.pdf');
  }



  function descargarEvaluacion(alumno, responsable, proyecto, dependencia, evaluacion){
    var alumnoString =  JSON.stringify(alumno);
    var responsableString =  JSON.stringify(responsable);
    var proyectoString =  JSON.stringify(proyecto);
    var dependenciaString = JSON.stringify(dependencia);
    var evaluacionString =  JSON.stringify(evaluacion);

    var jsonAlumno = JSON.parse(alumnoString);
    var jsonResponsable = JSON.parse(responsableString);
    var jsonProyecto = JSON.parse(proyectoString);
    var jsonDependencia= JSON.parse(dependenciaString);
    var jsonEvaluacion = JSON.parse(evaluacionString);

    var doc = new jsPDF();
    //var alumno = $(this).data('alumno');
    //var imgData;
    <?php
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
    $pag1 = base64_encode(file_get_contents(base_url()."assets/admin/images/evaluacion.jpg")); ?>
    var page1 = 'data:image/jpeg;base64,'+ '<?php echo $pag1 ?>';

    doc.setFontSize(11);

    var fecha = new Date(jsonEvaluacion['date_created']);
    var options = { year: 'numeric', month: 'numeric', day: 'numeric' };

    doc.addImage(page1, 'JPEG',0,0,210,297);
    doc.text(65, 48, jsonAlumno['nombres'] + " " + jsonAlumno['apellidos']);
    if(jsonAlumno["licenciatura"] == "Educación") { doc.text(68,55, "X")}
    else { doc.text(135,55, "X") }
    doc.text(62, 62, jsonDependencia['nombre']);
    doc.text(65, 69, jsonProyecto['nombre']);
    doc.text(52, 76, jsonResponsable["nombres"] + " " + jsonResponsable['apellidos']);
    doc.text(40, 91, fecha.toLocaleDateString("es-ES", options));

    if(jsonEvaluacion["asistePuntual"] == "SI") { doc.text(162,107, "X")}
    else { doc.text(180,107, "X") }

    if(jsonEvaluacion["cumpleHorario"] == "SI") { doc.text(162,115, "X")}
    else { doc.text(180,115, "X") }

    if(jsonEvaluacion["demuestraOrganizacion"] == "SI") { doc.text(162,122, "X")}
    else { doc.text(180,122, "X") }

    if(jsonEvaluacion["demuestraCompetencias"] == "SI") { doc.text(162,130, "X")}
    else { doc.text(180,130, "X") }

    if(jsonEvaluacion["optimizaRecursos"] == "SI") { doc.text(162,140, "X")}
    else { doc.text(180,140, "X") }

    if(jsonEvaluacion["estableceRelaciones"] == "SI") { doc.text(162,150, "X")}
    else { doc.text(180,150, "X") }

    if(jsonEvaluacion["atiendeIndicaciones"] == "SI") { doc.text(162,157, "X")}
    else { doc.text(180,157, "X") }

    doc.text(22, 180, jsonEvaluacion['observaciones']);
    doc.save('Evaluacion_'+'periodo'+jsonEvaluacion['form_num']+'_'+ jsonAlumno['nombres'] + jsonAlumno['apellidos'] + '.pdf');
  }

  function descargarAutoevaluacion(alumno, responsable, proyecto, dependencia, evaluacion){
    var alumnoString =  JSON.stringify(alumno);
    var responsableString =  JSON.stringify(responsable);
    var proyectoString =  JSON.stringify(proyecto);
    var dependenciaString = JSON.stringify(dependencia);
    var evaluacionString =  JSON.stringify(evaluacion);

    var jsonAlumno = JSON.parse(alumnoString);
    var jsonResponsable = JSON.parse(responsableString);
    var jsonProyecto = JSON.parse(proyectoString);
    var jsonDependencia= JSON.parse(dependenciaString);
    var jsonEvaluacion = JSON.parse(evaluacionString);

    var doc = new jsPDF();
    //var alumno = $(this).data('alumno');
    //var imgData;
    <?php
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
    $pag1 = base64_encode(file_get_contents(base_url()."assets/admin/images/autoevaluacion.jpg")); ?>
    var page1 = 'data:image/jpeg;base64,'+ '<?php echo $pag1 ?>';

    doc.setFontSize(11);

    var fecha = new Date(jsonAlumno["periodoInicio"]);
    var options = { year: 'numeric', month: 'long', day: 'numeric' };

    doc.addImage(page1, 'JPEG',0,0,210,297);

    doc.text(20,20, jsonEvaluacion['horas']);

    if(jsonEvaluacion["asistePuntual"] == "SI") { doc.text(162,87, "X")}
    else { doc.text(180,87, "X") }

    if(jsonEvaluacion["cumpleHorario"] == "SI") { doc.text(162,94, "X")}
    else { doc.text(180,94, "X") }

    if(jsonEvaluacion["demuestraOrganizacion"] == "SI") { doc.text(162,104, "X")}
    else { doc.text(180,104, "X") }

    if(jsonEvaluacion["demuestraCompetencias"] == "SI") { doc.text(162,115, "X")}
    else { doc.text(180,115, "X") }

    if(jsonEvaluacion["optimizaRecursos"] == "SI") { doc.text(162,126, "X")}
    else { doc.text(180,126, "X") }

    if(jsonEvaluacion["estableceRelaciones"] == "SI") { doc.text(162,141, "X")}
    else { doc.text(180,141, "X") }

    if(jsonEvaluacion["atiendeIndicaciones"] == "SI") { doc.text(162,151, "X")}
    else { doc.text(180,151, "X") }

    if(jsonEvaluacion["abiertoRetro"] == "SI") { doc.text(162,158, "X")}
    else { doc.text(180,158, "X") }

    if(jsonEvaluacion["iniciativa"] == "SI") { doc.text(162,168, "X")}
    else { doc.text(180,168, "X") }

    if(jsonEvaluacion["recursosNecesarios"] == "SI") { doc.text(162,180, "X")}
    else { doc.text(180,180, "X") }

    if(jsonEvaluacion["trabajoEquipo"] == "SI") { doc.text(162,194, "X")}
    else { doc.text(180,194, "X") }

    if(jsonEvaluacion["desarrolloCompetencias"] == "SI") { doc.text(162,204, "X")}
    else { doc.text(180,204, "X") }

    doc.text(22, 225, jsonEvaluacion['observaciones']);
    doc.save('Autoevaluacion_' + jsonAlumno['nombres'] + jsonAlumno['apellidos'] + '.pdf');
  }


 </script>

</body>


</html>
