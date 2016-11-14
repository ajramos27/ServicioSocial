<?php

class Formularios extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/formulario'));
        $this->load->model(array('admin/alumno'));

    }

    public function index() {
        $formularios = $this->formulario->get_all();
        $alumnos = $this->alumno->get_all();

        $data['formularios'] = $formularios;
        $data['alumnos'] = $alumnos;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_proyecto";
        $this->load->view($this->_container, $data);
    }

    public function create($id) {
        if ($this->input->post('alumno_id')) {
            $data['alumno_id'] = $this->input->post('alumno_id');
            $data['asistePuntual'] = $this->input->post('asistePuntual');
            $data['cumpleHorario'] = $this->input->post('cumpleHorario');
            $data['demuestraOrganizacion'] = $this->input->post('demuestraOrganizacion');
            $data['demuestraCompetencias'] = $this->input->post('demuestraCompetencias');
            $data['optimizaRecursos'] = $this->input->post('optimizaRecursos');
            $data['estableceRelaciones'] = $this->input->post('estableceRelaciones');
            $data['atiendeIndicaciones'] = $this->input->post('atiendeIndicaciones');
            $data['observaciones'] = $this->input->post('observaciones');

            $this->formulario->insert($data);

            redirect('/admin/adminresponsable/listAlumnos/'.$id, 'refresh');

        }

        //$data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "formularios_create";
        //$this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('asistePuntual')) {
            $data['asistePuntual'] = $this->input->post('asistePuntual');
            $data['cumpleHorario'] = $this->input->post('cumpleHorario');
            $data['demuestraOrganizacion'] = $this->input->post('demuestraOrganizacion');
            $data['demuestraCompetencias'] = $this->input->post('demuestraCompetencias');
            $data['optimizeRecursos'] = $this->input->post('optimizeRecursos');
            $data['estableceRelaciones'] = $this->input->post('estableceRelaciones');
            $data['atiendeIndicaciones'] = $this->input->post('atiendeIndicaciones');
            $data['observaciones'] = $this->input->post('observaciones');

            $this->formulario->update($data, $id);

            redirect('/admin/formularios', 'refresh');
        }

        $formulario = $this->formulario->get($id);

        $data['formulario'] = $formulario;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "formularios_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->formulario->delete($id);

        redirect('/admin/formularios', 'refresh');
    }

    public function view($id){

      $formulario = $this->formulario->get($id);
      $data['formulario'] = $formulario;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_view";
      $this->load->view($this->_container, $data);

    }

    public function create2() {
        if ($this->input->post('alumno_id')) {
            $data['alumno_id'] = $this->input->post('alumno_id');
            $data['asistePuntual'] = $this->input->post('asistePuntual');
            $data['cumpleHorario'] = $this->input->post('cumpleHorario');
            $data['demuestraOrganizacion'] = $this->input->post('demuestraOrganizacion');
            $data['demuestraCompetencias'] = $this->input->post('demuestraCompetencias');
            $data['optimizaRecursos'] = $this->input->post('optimizaRecursos');
            $data['estableceRelaciones'] = $this->input->post('estableceRelaciones');
            $data['atiendeIndicaciones'] = $this->input->post('atiendeIndicaciones');
            $data['observaciones'] = $this->input->post('observaciones');

            $this->formulario->insert($data);

            redirect('/admin/adminresponsable/listAllAlumnos/', 'refresh');

        }

        //$data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "formularios_create";
        //$this->load->view($this->_container, $data);
    }
}
