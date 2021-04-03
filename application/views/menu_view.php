<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand txtbase" href="#"><?=$this->config->item('site_name')?></a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav txtbase">
           <!--  <li><a href="<?=base_url()?>index.php/AddServices">Add Services</a></li>
            <li><a href="<?=base_url()?>index.php/AddAboutus">About Us</a></li> -->
            <li><a href="<?=base_url()?>index.php/AddAdmin"><i class="fa fa-users"></i> Add Admin</a></li>
            <li><a href="<?=base_url()?>index.php/AddStudentInfo"><i class="fa fa-users"></i>    Add Student Info</a></li>
            <li><a href="<?=base_url()?>index.php/AddStudentFeesInfo"><i class="fa fa-money"></i> Add Student Fees Info</a></li>
            <li><a href="<?=base_url()?>index.php/AddStudentTestStatus"><i class="fa fa-car"></i> Add Student Test Status</a></li>
            <li><a href="<?=base_url()?>index.php/AddAboutus"><i class="fa fa-book"></i> About Us</a></li>
            <!-- <li><a href="<?=base_url()?>index.php/addWebsiteContent">Website</a></li> -->
            <li><a href="<?=base_url()?>index.php/login/logout"><i class="fa fa-power-off"></i>      Logout</a></li>
        </ul>
</div><!--/.navbar-collapse -->     
</div>
</div>  

