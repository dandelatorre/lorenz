<?php    
    require_once dirname(__DIR__)."/controller/welcome_controller.php";
    //require_once('./app/controller/welcome_controller.php');
    /*
        $data = new _hash();
        echo $data->_encrypt('johnlorenz');
    */

    $empDATA = new session();
    if($empDATA->_detect('user_id') == true)
    {
        header('location: dashboard.php');
    }

    if(isset($_POST['user_id']) || isset($_POST['user_pw']))
    {
        $emp = new _empLogin($_POST['user_id'],$_POST['user_pw']);
        echo $emp->_fetchROWS();
        
        if($emp->_fetchROWS() == 1)
        {
            $empDATA = new session();
            $empDATA->_set('user_id',$_POST['user_id']);
        }
    }
?>