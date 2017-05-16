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
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "admin/alumnos_list";
        $this->load->view($this->_container, $data);
    }

    //Crea un nuevo alumno
    public function create() {
        if ($this->input->post('matricula')) {

            //Crear usuario
            $username = $this->input->post('matricula');
            $password = $this->input->post('password');
            $email = $this->input->post('correo');
            $group_id = array( $this->input->post('group_id'));

            $additional_data = array(
                'first_name' => $this->input->post('nombres'),
                'last_name' => $this->input->post('apellidos'),
                'username' => $this->input->post('correo'),
                'phone' => $this->input->post('telefono'),
            );

            $user = $this->ion_auth->register($username, $password, $email, $additional_data,$group_id);

            $data['matricula'] = $this->input->post('matricula');
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['telefono'] = $this->input->post('telefono');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['periodo'] = $this->input->post('licenciatura');
            $data['status'] = $this->input->post('status');
            $data['usuario_id'] = $user;

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

      $data['formularios'] = $formularios;
      $data['alumno'] = $alumno;
      $data['proyectos'] = $proyectos;
      $data['responsables'] = $responsables;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_view";

      $this->load->view($this->_container, $data);

    }

}
