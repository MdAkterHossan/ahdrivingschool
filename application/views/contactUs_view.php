<?php
include 'sendemail.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AH Driving School</title>
        <!-- Favicon-->
        <link href="<?=base_url()?>assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <!-- <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script> -->
        <!-- Google fonts-->
        <!--   <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" /> -->
        <!-- Third party plugin CSS-->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" /> -->
        <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" />
    </head>

<body>
<!--  <link href="<?=base_url()?>assets/css/background.css" rel="stylesheet" type="text/css"> -->   
    <?php 
    $attributes = array('id' => 'frmcontactUs','name' => 'frmcontactUs');
    echo form_open_multipart('contactUs/contact',$attributes); ?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
        
    
        <div class="container">
           
            <div class="row txtbase">
                <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-md-offset-3 formdesign">
                    <div class="login-panel panel panel-default">
                        <div class="panel-body">
                    <h1 class="txtbase txtdesign">Contact Us</h1>

                    <input class="form-control" type="text" name="customername" id="customername" placeholder="Enter your name">
                    <input class="form-control" type="text" name="customeremail" id="customeremail" placeholder="Enter your email">
                    <input class="form-control" type="text" name="customerphone" id="customerphone" placeholder="Enter your Phone">

                    <textarea class="form-control" name="message" id="message" placeholder="Your message"></textarea><br>
                    
                    <input type="button" onClick="validatecontactusform('frmcontactUs','')" class="btn btn-primary txtbase form-control" value="Submit" />
                     

                    </div>
                    </div>
                </div>
            </div>
         
            <div class="row txtbase">
                <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-md-offset-3">
                    
                    <br>
                    <a href="http://localhost/ahdschool/" class="btn btn-info txtbase form-control" value="Back to home">Back to home</a>
                </div>
            </div>
      
    </div>
</body>
</html>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="<?=base_url()?>assets/js/scripts.js"></script>
<!-- Modal -->
<div class="modal fade alertModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Alert</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div id="alert"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal" autofocus>Close</button>
</div>
</div>
</div>
</div>