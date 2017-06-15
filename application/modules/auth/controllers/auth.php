<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        log_message('debug', 'CI My Admin : Auth class loaded');
    }

    public function index() {
        if ($this->ion_auth->logged_in()) {
            redirect('admin/', 'refresh');
        } else {
            $data['page'] = $this->config->item('ci_my_admin_template_dir_public') . "login_form";
            $data['module'] = 'auth';

            $this->load->view($this->_container, $data);
        }
    }

    function login() {
        $this->ion_auth_model->identity_column = 'username';
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember)) {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                if($this->ion_auth->is_admin()){
                redirect('/admin', 'refresh');
              } else{
                if($this->ion_auth->in_group('responsable')){
                    redirect('/responsable', 'refresh');
                }
                if($this->ion_auth->in_group('prestador')){
                    $user = $this->ion_auth->user()->row();
                    redirect('/admin/adminprestador/', 'refresh');
                }
              }
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $data['page'] = $this->config->item('ci_my_admin_template_dir_public') . "login_form";
            $data['module'] = 'auth';
            //$data['message'] = $this->data['message'];

            $this->load->view($this->_container, $data);
        }
    }

    public function logout() {
        $this->ion_auth->logout();

        redirect('auth', 'refresh');
    }

    public function olvide_password() {
        if ($this->ion_auth->logged_in()) {
            redirect('admin/', 'refresh');
        } else {
            $data['page'] = $this->config->item('ci_my_admin_template_dir_public') . "forgot_form";
            $data['module'] = 'auth';

            $this->load->view($this->_container, $data);
        }
    }

    function forgot_password()
		{
      if ($this->input->post('email')) {
        $email = $this->input->post('email');
        $something = $this->ion_auth->get_user($email);
        if($something !== FALSE){
          $data['something'] = $something;
          $data['page'] = $this->config->item('ci_my_admin_template_dir_public') . "forgot_form";
          $data['module'] = 'auth';

          $message = '';
          $message .= "Su usuario es: ".$something->username."<br>";
          $message .= "Su contraseña es: ".$something->password."<br><br>";
          $message .= "Para acceder dirijase a educacion.uady.mx";


          $this->email->from('aj.ramos2794@gmail.com', 'Facultad de Educacion UADY');
          $this->email->to($something->email);
          $this->email->subject('Seguimiento Servicio Social');
          $this->email->message($message);
          $this->email->set_newline("\r\n");

          if($this->email->send()){
          $this->session->set_flashdata('message', $this->ion_auth->messages());
          redirect('auth', 'refresh');
          } else{
          $this->load->view($this->_container, $data);
          }
        } else{
          $this->session->set_flashdata('message', $this->ion_auth->errors());
          redirect('auth/olvide_password', 'refresh');
        }

      }

		}

}
