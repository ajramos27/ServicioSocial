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
      $this->load->view($this->_usercontainer, $data);
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
    public function listAlumnosProyecto($id) {
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
      $this->load->view($this->_usercontainer, $data);
    }

    //Lista los alumnos pertenecientes a todos los proyectos del responsable
    public function listAlumnos() {

        $proyectos = $this->proyecto->get_all();
        $alumnos = $this->alumno->get_by_responsable();
        $responsables = $this->responsable->get_all();
        $formularios = $this->formulario->get_all();

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['formularios'] = $formularios;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/alumnos_list";
        $this->load->view($this->_container, $data);
    }

    public function finalizarServicio($id) {
      $data['status'] = "Finalizado";
      $this->alumno->update($data, $id);
      redirect('admin/adminresponsable/listAlumnos', 'refresh');
    }

    public function carta($id) {
      $alumno = $this->alumno->get($id);
      $proyectos = $this->proyecto->get_all();
      $responsables = $this->responsable->get_all();
      $proyecto = $this->proyecto->get($alumno->proyecto_id);
      $responsable = $this->responsable->get($proyecto->responsable_id);

      $phpWord = new \PhpOffice\PhpWord\PhpWord();
		  $phpWord->getCompatibility()->setOoxmlVersion(14);
		  $phpWord->getCompatibility()->setOoxmlVersion(15);

  		$targetFile = "./global/uploads/";
  		$filename = 'carta.docx';

		    // add style settings for the title and paragraph

      $paragraphStyleName = 'pStyle';
      $phpWord->addParagraphStyle($paragraphStyleName, array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'spaceAfter' => 200));
      $paragraphOptions = array('space' => array('line' => 1000));
      $phpWord->setDefaultFontSize(11);
      $phpWord->setDefaultFontName('arial');

      // New portrait section
      $section = $phpWord->addSection();

      // Simple text
      setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
      $date = strftime("%d de %B del %Y");

      $section_style = $section->getStyle();
      $position =
        $section_style->getPageSizeW()
        - $section_style->getMarginRight()
        - $section_style->getMarginLeft();
      $phpWord->addParagraphStyle("leftRight", array("tabs" => array(
        new \PhpOffice\PhpWord\Style\Tab("right", $position))));

      $section->addText("\tMérida, Yucatán a ".$date, array(), "leftRight");

      // Two text break
      $section->addTextBreak(2);

      // Define styles
      $section->addText('Mtra. en Psic. Hum. Gladys Julieta Guerrero Walker',  array('bold' => true));
      $section->addText('Directora de la Facultad de Educación');
      $section->addText('Presente');

      $section->addTextBreak();

      // Inline font style



      $textrun = $section->addTextRun(array('space' => array('line' => 500, 'align' =>'both')));
      $textrun->addText('Por este medio hago constar que ');
      $textrun->addText($alumno->nombres." ".$alumno->apellidos.", ");
      $textrun->addText('estudiante de la licenciatura en ');
      $textrun->addText($alumno->licenciatura);
      $textrun->addText(' de la Facultad de Educación de la Universidad Autónoma de Yucatán, ');
      $textrun->addText('realizó y concluyó satisfactoriamente su Servicio Social en el proyecto ');
      $textrun->addText($proyecto->nombre.".");
      $section->addTextBreak();
      $textrun2 = $section->addTextRun(array('space' => array('line' => 500, 'align' =>'both')));
      $textrun2->addText('La prestación del servicio social se llevó a cabo del ');
      $textrun2->addText(strftime("%d de %B de %Y", strtotime($alumno->periodoInicio)));
      $textrun2->addText(" al ".strftime("%d de %B de %Y", strtotime($alumno->periodoFin)));
      $textrun2->addText(', periodo en el que se cubrió un total de 480 horas. ');
      $textrun2->addText('Sin otro particular, quedo a sus órdenes para cualquier aclaración y le envío un cordial saludo.');
      $section->addTextBreak(3);

      $section->addText('Atentamente', [], 'pStyle');
      $section->addTextBreak(2);
      $section->addText($responsable->nombres." ".$responsable->apellidos, [], 'pStyle');
      $section->addText('Responsable del Proyecto', [], 'pStyle');


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

    public function change_password() {
      if ($this->input->post('password')) {
          $data['password'] = $this->input->post('password');
          $this->ion_auth->update($this->logged_in_id, $data);
          redirect('/adminresponsable/index', 'refresh');
      }
      $data['user'] = $this->ion_auth->user($this->logged_in_id)->row();
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "change_password";
      $this->load->view($this->_container, $data);

    }
}
