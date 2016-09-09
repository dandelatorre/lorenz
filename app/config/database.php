<?php
    class db
    {
        private $_db_host = 'localhost';
        private $_db_user = 'tadashi';
        private $_db_pass = 'daniel';
        private $_db_db_name = 'daniel';
        private $dbms;
        private $dbquery;
        
        public function _db_query($pram)
        {
            return $this->dbms->query($pram);
        }
        
        public function _db_connect()
        {
            return $this->dbms = new mysqli($this->_db_host,$this->_db_user,$this->_db_pass,$this->_db_db_name);
        }
        
        public function _db_close()
        {
            return $this->dbms->close(); 
        }  
    }
?>