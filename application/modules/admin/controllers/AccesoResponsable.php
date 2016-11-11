<?php

class AccesoResponsable extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/proyecto'));
        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/alumno'));
    }

    public function index() {
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();
        $proyectosresponsables = $this->proyecto->get_all_responsable();

        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['proyectosresponsables'] = $proyectosresponsables;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "proyectos_responsable";
        $this->load->view($this->_container, $data);
    }

    public function viewAlumnos($id) {
        $proyectos = $this->proyecto->get_all();
        $alumnos = $this->alumno->get_by_proyecto($id);

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_proyecto";
        $this->load->view($this->_container, $data);
    }


}
