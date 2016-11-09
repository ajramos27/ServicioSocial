<?php

class Prestadores extends AdminPanel_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('adminpanel/prestador'));
    }

    public function index() {
        $prestadores = $this->prestador->get_all();

        $data['prestadores'] = $prestadores;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_adminpanel') . "prestadores_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->prestador->insert($data);

            redirect('/adminpanel/prestadores', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_adminpanel') . "prestadores_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->prestador->update($data, $id);

            redirect('/adminpanel/prestadores', 'refresh');
        }

        $prestador = $this->prestador->get($id);

        //$proyecto = $this->proyecto->get_all();

        $data['prestador'] = $prestador;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_adminpanel') . "prestadores_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->prestador->delete($id);

        redirect('/adminpanel/prestadores', 'refresh');
    }
}
