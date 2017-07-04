<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

class Reportes extends Admin_Controller {

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
        $this->load->model(array('admin/dependencia'));
        $this->load->model(array('admin/formulario'));
        $this->load->model(array('admin/autoformulario'));
        $this->load->model(array('admin/informe'));
    }

    //Index: Lista de alumnos
    public function index() {
        $alumnos = $this->alumno->get_all();
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();
        $dependencias = $this->dependencia->get_all();
        $formularios = $this->formulario->get_all();
        $autoformularios = $this->autoformulario->get_all();
        $informes = $this->informe->get_all();

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['dependencias'] = $dependencias;
        $data['formularios'] = $formularios;
        $data['autoformularios'] = $autoformularios;
        $data['informes'] = $informes;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "admin/reportes_list";
        $this->load->view($this->_container, $data);
    }


}
