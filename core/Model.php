<?php
namespace app\core;
use app\core\Database;


class Model {

    private $db =  null;

    public function __construct(){

        $config['dbHost'] = 'localhost:3308';
        $config['dbUser'] = 'root';
        $config['dbPassword'] = 'admin';
        $config['dbName'] = 'test_db';
        $config['dbCharset'] = 'utf8';
        
        $this->db = new Database($config);
        
    }


    
    /**
     * getAllemployees
     *
     * @return array
     */
    public function getAllemployees(){
        $this->db->query('select * from data_list');
        return $this->db->fetchAll();
    }


    public function insertData(){
        $this->db->query('insert into data_list (data_listcol) values ("1234dfdf") ');
        return $this->db->lastInsertID();
    }

}