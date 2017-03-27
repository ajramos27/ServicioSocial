<?php

class Migration_Responsables extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
          'id' => array(
              'type' => 'INT',
              'constraint' => 11,
              'auto_increment' => TRUE
          ),
          'nombres' => array(
              'type' => 'VARCHAR',
              'constraint' => 100,
          ),
          'apellidos' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'correo' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'telefono' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'dependencia_id' => array(
              'type' => 'INT',
              'constraint' => 11
          ),
          'usuario_id' => array(
              'type' => 'INT',
              'constraint' => 11,
              'null' => TRUE
          ),
          'created_from_ip' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'updated_from_ip' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'date_created' => array(
              'type' => 'DATETIME'
          ),
          'date_updated' => array(
              'type' => 'DATETIME'
          )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('responsables');

        $data = array(
            'id' => '1',
            'nombres' => 'Alfredo',
            'apellidos' => 'Zapata Barrera',
            'correo' => 'alfredo@gmail.com',
            'telefono' => '1234456',
            'dependencia_id' => '1',
            'usuario_id' => '1',
        );
        $this->db->insert('responsables', $data);
    }

    public function down() {
        $this->dbforge->drop_table('responsables');
    }

}
