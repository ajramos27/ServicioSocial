<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

class Alumnos extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $group = 'admin';
        $this->load->library(array('ion_auth'));

        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        if(!$this->ion_auth->in_group($group)){
          $this->session->set_flashdata('message', 'Solo el administrador puede ver esta sección');
          redirect('admin/');
        }

        $this->load->model(array('admin/alumno'));
        $this->load->model(array('admin/proyecto'));
        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/formulario'));
    }

    //Index: Lista de alumnos
    public function index() {
        $alumnos = $this->alumno->get_all();
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_list";
        $this->load->view($this->_container, $data);
    }

    //Crea un nuevo alumno
    public function create() {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->alumno->insert($data);

            redirect('/admin/alumnos', 'refresh');
        }

        $proyectos = $this->proyecto->get_all();
        $data['proyectos'] = $proyectos;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_create";
        $this->load->view($this->_container, $data);
    }

    //Editar un alumno
    public function edit($id) {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->alumno->update($data, $id);

            redirect('/admin/alumnos', 'refresh');
        }

        $alumno = $this->alumno->get($id);
        $proyectos = $this->proyecto->get_all();

        $data['alumno'] = $alumno;
        $data['proyectos'] = $proyectos;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->alumno->delete($id);

        redirect('/admin/alumnos', 'refresh');
    }

    //Obtiene un solo registro de alumno
    public function view($id){

      $alumno = $this->alumno->get($id);
      $proyectos = $this->proyecto->get_all();
      $responsables = $this->responsable->get_all();
      $formularios = $this->formulario->get_formularios_by_alumno($id);
      $dompdf = new Dompdf();


      $data['formularios'] = $formularios;
      $data['alumno'] = $alumno;
      $data['proyectos'] = $proyectos;
      $data['responsables'] = $responsables;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_view";

      $this->load->view($this->_container, $data);

    }

    public function generarCarta(){

      $html = '<!DOCTYPE HTML>

      <html>
          <head>
              <style type="text/css">
                  .bodyBody {
                      margin: 10px;
                      font-size: 1.50em;
                  }
                  .divHeader {
                      text-align: right;
                      border: 1px solid;
                  }
                  .divReturnAddress {
                      text-align: left;
                      float: right;
                  }
                  .divSubject {
                      clear: both;
                      font-weight: bold;
                      padding-top: 80px;
                  }
                  .divAdios {
                      float: right;
                      padding-top: 50px;
                  }
              </style>
          </head>
          <body class="bodyBody">
              <div class="divReturnAddress">
                  Mérida, Yucatán a 5 de Marzo de 2014
              </div>

              <div class="divSubject">
                  Carta de Terminación de Servicio Social
              </div>

              <div class="divContents">
                  <p>
                      Mtra. en Psic. Hum. Gladys Julieta Guerrero Walker <br>
                      Directora de la Facultad de Educación <br>
                      Presente
                  </p>

                  <p>
                  Por este medio hago constar que ____________________, estudiante de la
Licenciatura _______________ de la Facultad de ______________ de la Universidad Autónoma de Yucatán,
realizó y concluyó satisfactoriamente su Servicio Social en el proyecto ___________________________ en __________________.
<br/><br/>
La prestación del servicio social se llevó a cabo del ___________ al ________________, periodo en el que se cubrió un total de 480 horas. Sin otro particular, quedo a sus órdenes
para cualquier aclaración y le envío un cordial saludo.
                  </p>
              </div>

              <div class="divAdios">
                  Atentamente<br/>
                  <!-- Space for signature. -->
                  <br/>
                  <br/>
                  <br/>
                  ________________________
                  <br/>
                  Nombre <br/>
                  Responsable de Proyecto<br/>
              </div>
          </body>
      </html>
';
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // Render the HTML as PDF
      $dompdf->render();
      // Output the generated PDF to Browser
      $dompdf->stream();
    }
}
