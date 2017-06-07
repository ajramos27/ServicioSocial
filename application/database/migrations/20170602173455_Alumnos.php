<?php

class Migration_Alumnos extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'matricula' => array(
                'type' => 'INT',
                'constraint' => 11,
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
                'constraint' => 20
            ),
            'facultad' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'licenciatura' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'proyecto_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'periodoInicio' => array(
                'type' => 'DATETIME'
            ),
            'periodoFin' => array(
                'type' => 'DATETIME'
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
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
        $this->dbforge->drop_table('alumnos');
        $this->dbforge->create_table('alumnos');

        $data = array(
            'id' => '1',
            'matricula' => '12216281',
            'nombres' => 'Aaron Jesus',
            'apellidos' => 'Ramos Cabrera',
            'correo' => 'aaron@gmail.com',
            'telefono' => '9992274834',
            'facultad' => 'Matematicas',
            'licenciatura' => 'Ciencias de la Computacion',
            'proyecto_id' => '1',
            'periodoInicio' => '2017-05-29',
            'periodoFin' => '2017-05-29',
            'status' => 'Activo',
            'usuario_id' => '1',
        );

        $this->db->insert('alumnos', $data);
    }

    public function down() {
        $this->dbforge->drop_table('alumnos');
    }

}
