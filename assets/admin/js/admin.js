$(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
});


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
