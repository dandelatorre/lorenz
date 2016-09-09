<?php
    include 'app/http_scripts/welcome_script.php';
?>
<html>
    <head>
        <title>User-Panel Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/web/css/index.css">
        <link rel="stylesheet" href="assets/web/css/hover-min.css">
        <script src="assets/web/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body id="login">
        <div class="jumbotron" id="jumbotron_1"></div>
        <div class="container">
        
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">  
            
            
            <div class="panel panel-x" id="notification-panel">
                <div class="panel-heading" id="notification-panel-heading">
                    <i id="notification-panel-heading-text"></i>
                    <span class="glyphicon glyphicon-remove pull-right" id="warning-panel-cross"></span>    
                </div>
            </div>
            
            
            <div class="panel panel-primary" id="login_panel">
                <div class="panel-heading" id="login-panel-head">POS CPANEL ALPHA RELEASE</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <!-- form method="post" action="" -->
                            <div class="form-group group-id">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input id="user_id" name="user_id" class="form-control inpbx" placeholder="ID" type="text">
                                </div>
                            </div>
                            <div class="form-group group-pw">
                                 <div class="input-group">
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input id="user_pw" name="user_pw" class="form-control inpbx" placeholder="Password" type="password">
                                </div>
                            </div>
                            <button type="submit" id="user_login" name="user_login" class="form-control btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                        <!--/form -->
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <img src="assets/images/login_logo.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/web/js/login.js"></script>
    </body>
</html>