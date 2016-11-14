<?php

class AdminResponsable extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/proyecto'));
        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/alumno'));
        $this->load->model(array('admin/formulario'));
    }

    public function index() {

      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/home";
      $this->load->view($this->_container, $data);
    }

    public function listProyectos() {
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();
        $proyectosresponsables = $this->proyecto->get_all_responsable();

        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['proyectosresponsables'] = $proyectosresponsables;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/proyectos_list";
        $this->load->view($this->_container, $data);
    }

    public function listAlumnos($id) {
        $proyectos = $this->proyecto->get_all();
        $alumnos = $this->alumno->get_by_proyecto($id);

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/alumnos_por_proyecto";
        $this->load->view($this->_container, $data);
    }

    public function viewAlumno($id) {
      $alumno = $this->alumno->get($id);
      $proyectos = $this->proyecto->get_all();
      $formularios = $this->formulario->get_formularios_by_alumno($id);


      $data['formularios'] = $formularios;
      $data['alumno'] = $alumno;
      $data['proyectos'] = $proyectos;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsable/alumnos_view_one";
      $this->load->view($this->_container, $data);
    }

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


}
