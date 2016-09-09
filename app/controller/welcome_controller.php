<?php
    require_once dirname(__DIR__)."/model/welcome_model.php";
    require_once dirname(__DIR__)."/config/_encrypt.php";
    
    class _empLogin extends employee
    {
        public function __construct($id,$pw)
        {
            if($id == null || $pw == null)
            {
                echo 0;
            }
            else
            {
                $this->_passKey = new _hash();
                $this->id = $id;
                $this->pw = $this->_passKey->_encrypt($pw);
                return $this->_initLogin();
            }
        }
        
        public function _fetchROWS()
        {
            return $this->rows;
        }
    }

?>
