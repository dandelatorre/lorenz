<?php
    
    require_once dirname(__DIR__).'/config/database.php';
    require_once dirname(__DIR__)."/config/_modelCORE.php";
    
    class employee
    {
        protected $id;
        protected $pw;
        protected $_passKey;
        
        private $db;
        private $emp_query;
        protected $rows;
        
        public function _initLogin()
        {
            $this->db = new db();
            $this->db->_db_connect();
            $this->emp_query = $this->db->_db_query("SELECT* FROM emp WHERE emp_id = '$this->id' AND emp_password = '$this->pw'");
            $this->rows = $this->emp_query->num_rows;
            $this->db->_db_close();
        }
    }
    
?>
