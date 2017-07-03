<?php

class Autoformularios extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/autoformulario'));
        $this->load->model(array('admin/alumno'));

    }

    public function create() {
        if ($this->input->post('alumno_id')) {
            $data['alumno_id'] = $this->input->post('alumno_id');
            $data['form_num'] = $this->input->post('form_num');
            $data['horas'] = $this->input->post('horas');
            $data['asistePuntual'] = $this->input->post('asistePuntual');
            $data['cumpleHorario'] = $this->input->post('cumpleHorario');
            $data['demuestraOrganizacion'] = $this->input->post('demuestraOrganizacion');
            $data['demuestraCompetencias'] = $this->input->post('demuestraCompetencias');
            $data['optimizaRecursos'] = $this->input->post('optimizaRecursos');
            $data['estableceRelaciones'] = $this->input->post('estableceRelaciones');
            $data['atiendeIndicaciones'] = $this->input->post('atiendeIndicaciones');
            $data['abiertoRetro'] = $this->input->post('abiertoRetro');
            $data['iniciativa'] = $this->input->post('iniciativa');
            $data['recursosNecesarios'] = $this->input->post('recursosNecesarios');
            $data['trabajoEquipo'] = $this->input->post('trabajoEquipo');
            $data['desarrolloCompetencias'] = $this->input->post('atiendeIndicaciones');
            $data['observaciones'] = $this->input->post('observaciones');

            $this->autoformulario->insert($data);
            redirect('/admin/adminprestador', 'refresh');
            echo "<script>alert('Enviado');</script>";
        }

        //$data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "formularios_create";
        //$this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->autoformulario->delete($id);

        redirect('/admin/formularios', 'refresh');
    }

    public function view($id){
      $autoformulario = $this->autoformulario->get($id);
      $data['autoformulario'] = $autoformulario;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_view";
      $this->load->view($this->_container, $data);
    }


}
