<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CENAMA</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-endes.min.css">
        <style>
            .main .main-body {
                width: 555px;
                padding: 5px;
                height: 210px;
            }
            .inputs {                
                padding-bottom: 15px;
                padding-top: 15px;
            }
            input { 
                text-align: center; 
            }
        </style>
    </head>
    <body>
        
       <div id="controls-wrapper" class="load-item">
            <div id="controls">
                <center>
                    <div class="header-dropdown-list show-lg  hidden-md hidden-sm  hidden-xs padding-2">
                        <img class="profile-img" src="<?php echo base_url(); ?>assets/img/CENSO_EXPERIMENTAL.png" width="260px" >					
                    </div>
                    <div class="header-dropdown-list hidden-lg  show-md hidden-sm  hidden-xs padding-2">
                        <img class="profile-img" src="<?php echo base_url(); ?>assets/img/CENSO_EXPERIMENTAL.png" width="180px" >					
                    </div>
                    <div class="header-dropdown-list hidden-lg  hidden-md show-sm  hidden-xs padding-2">
                        <img class="profile-img" src="<?php echo base_url(); ?>assets/img/CENSO_EXPERIMENTAL.png" width="120px" >					
                    </div>
                    <div class="header-dropdown-list hidden-lg  hidden-md hidden-sm  show-xs padding-2">
                        <img class="profile-img" src="<?php echo base_url(); ?>assets/img/CENSO_EXPERIMENTAL.png" width="60px" >					
                    </div>
                    
                </center>
                <div class="main row">
                    <div class="main-body row">                                            
                        <div class="container-login row">   
<!--                            <div class="row">
                                <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                <div style="padding-bottom: 20px" class="col-xs-8 col-md-12 col-lg-12">
                                    <h2 class="text-center login-title" style="padding-bottom: 30px">CENSO</br>EXPERIMENTAL</br>2016</h2>
                                </div>
                                <div class="col-xs-2 col-md-0 col-lg-0"></div>
                            </div>                                    -->
                            <div class="account-wall espace-top row">
                                <form class="" role="form" action="<?php echo base_url(); ?>index.php/home/autenticar" method="POST">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                        <div style="padding-bottom: 20px" class="col-xs-8 col-md-12 col-lg-12">
                                            <input class="form-control inputs" id="usuario" name="usuario" placeholder="Usuario" required>
                                        </div>
                                        <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                        <div style="padding-bottom: 20px" class="col-xs-8 col-md-12 col-lg-12">
                                            <input type="password" class="form-control inputs" id="password" name="password" placeholder="Contraseña" required>
                                        </div>
                                        <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                        <div style="padding-bottom: 20px" class="col-xs-8 col-md-12 col-lg-12">
                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                                        </div>
                                        <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                    </div>
                                    <span class="clearfix"></span>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-md-0 col-lg-0"></div>
                                <div style="padding-bottom: 10px" class="col-xs-8 col-md-12 col-lg-12">
                                    <center>INEI 2016 © Copyright</center>
                                </div>
                                <div class="col-xs-2 col-md-0 col-lg-0"></div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    </body>
</html>


