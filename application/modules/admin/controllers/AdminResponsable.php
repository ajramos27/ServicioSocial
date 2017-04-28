<?php
require_once 'vendor/autoload.php';
//Controlador de la seccion de Responsables
class AdminResponsable extends Admin_Controller {

    function __construct() {
        parent::__construct();

        //Si no esta logeado enviar a auth
        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        //Cargar modelos que se utilizan
        $this->load->model(array('admin/proyecto'));
        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/dependencia'));
        $this->load->model(array('admin/alumno'));
        $this->load->model(array('admin/formulario'));
    }

    //Index
    public function index() {
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/home";
      $this->load->view($this->_container, $data);
    }

    //Lista los proyectos pertenecientes al responsable
    public function listProyectos() {
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();
        $dependencias = $this->dependencia->get_all();
        $proyectosresponsables = $this->proyecto->get_all_responsable();

        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['dependencias'] = $dependencias;
        $data['proyectosresponsables'] = $proyectosresponsables;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/proyectos_list";
        $this->load->view($this->_container, $data);
    }

    //Lista los alumnos pertenecientes a cada proyecto del responsable
    public function listAlumnos($id) {
        $proyectos = $this->proyecto->get_all();
        $alumnos = $this->alumno->get_by_proyecto($id);

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/alumnos_por_proyecto";
        $this->load->view($this->_container, $data);
    }

    //Ver alumno
    public function viewAlumno($id) {
      $alumno = $this->alumno->get($id);
      $proyectos = $this->proyecto->get_all();
      $responsables = $this->responsable->get_all();
      $formularios = $this->formulario->get_formularios_by_alumno($id);


      $data['formularios'] = $formularios;
      $data['alumno'] = $alumno;
      $data['proyectos'] = $proyectos;
      $data['responsables'] = $responsables;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/alumnos_view_one";
      $this->load->view($this->_container, $data);
    }

    //Lista los alumnos pertenecientes a todos los proyectos del responsable
    public function listAllAlumnos() {

        $proyectos = $this->proyecto->get_all();
        $alumnos = $this->alumno->get_by_responsable();
        $responsables = $this->responsable->get_all();

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/alumnos_list";
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
      </html>';
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // Render the HTML as PDF
      $dompdf->render();
      // Output the generated PDF to Browser
      $dompdf->stream();
    }

    public function carta(){
      $phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15);

		$targetFile = "./global/uploads/";
		$filename = 'test.docx';

		// add style settings for the title and paragraph

  	$section = $phpWord->addSection();
    $section->addTitle('Welcome to PhpWord', 1);
    $section->addText('Hello World!');

		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save($filename);
		// send results to browser to download
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
    }
}
