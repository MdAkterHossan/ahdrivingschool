<!-- <link href="<?=base_url()?>assets/css/loginBackground.css" rel="stylesheet"> -->
<div class="container" >

 <!--  <button class="btn btn-sm btn-success col-md-offset-11" onclick="location.href='<?php echo base_url();?>index.php/Customerlogin'">Customer Log In</button><br/><br/><br/><br/> --><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <div class="row txtbase">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading" align="center">
          <!-- <img src="<?=base_url()?>assets/images/<?=$this->config->item('site_logo');?>" class="img-responsive" /> --> 
          <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
        <?php 
        $attributes = array('id' => 'frmLogin','name' => 'frmLogin');
        echo form_open_multipart('login/verify',$attributes); ?> 
        <input type="hidden" name="hidEx1" id="hidEx1"/>
        <fieldset>
          <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-user fa-spin"></i></span>
              <input class="form-control" placeholder="User name" name="user" id="user" type="text" autofocus>
              </div>
          <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-key fa-spin"></i></span>
              <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="">
          </div><!-- Change this to a button or input when using this as a form -->
          <input type="button" onClick="validateLogin('frmLogin','')" class="btn btn-lg btn-success btn-block" value="Login" />
        </fieldset>
        <!--   Not Registered Yet ! <a  onclick="location.href='<?php echo base_url();?>index.php/customerregister'"> Register Here</a> -->
        </br>
        <?=$message?>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
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
