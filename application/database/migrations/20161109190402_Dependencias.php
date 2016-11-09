<?php

class Migration_Dependencias extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
          'id' => array(
              'type' => 'INT',
              'constraint' => 11,
              'auto_increment' => TRUE
          ),
          'nombre' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'direccion' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'telefono' => array(
              'type' => 'INT',
              'constraint' => 11
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
        $this->dbforge->create_table('dependencias');
    }

    public function down() {
        $this->dbforge->drop_table('dependencias');
    }

}
