<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Informe extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_by_alumno($id) {
        return $this->db->get_where('informes', array('alumno_id' => $id))->row();
    }
}
