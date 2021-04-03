<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>

<body>
  
  <div class="container">
    <?php 
    $attributes = array('id' => 'frmaddAdmin','name' => 'frmaddAdmin');
    echo form_open_multipart('AddAdmin',$attributes); ?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
    <div class="row">
        
      <div class="col-xs-12 col-md-4 txtbase">
        
        <h1>Add Admin</h1>
        
        <input type="text" name="adminName" id="adminName" class="form-control" placeholder="Admin Name"/>
        
        <input type="password" name="adminPassword" id="adminPassword" class="form-control" placeholder="Password"/>
        
        <input type="text" name="adminPhoneNumber" id="adminPhoneNumber"  
        class="form-control" placeholder="Phone number"/> 

        <input type="date" name="adminAddingDate" id="adminAddingDate"  
        class="form-control" placeholder="Adding date"/>
      
      </div>
    
    </div>
    
    <div class="row">
      
      <div class="col-xs-12 col-md-4 txtbase">
        <input type="button" onClick="validateaddNewAdmin('frmaddAdmin',0,'addNewAdmin')" class="btn btn-danger form-control" value="ADD ADMIN" />
      </div>
    
    </div>
  
  </section>
  <section>
    <div class="row txtbase">
      <?php
      if($admin){
      ?>
      <div class="col-xs-12 col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>All Admins</h1>
          </div>
          <div class="panel-body">
            <table  class="col-xs-12 col-md-6  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($admin as $row) {
                ?>                             
                <tr>
                <td><?=$row->admin_id?></td> 
                <td><?=$row->admin_name?></td> 
                <td><?=$row->admin_phone?></td> 
                <td><?=$row->date?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                   <!--  <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddContact', <?=$row->contact_id?>, 'deleteContact')"><i class="fa fa-times-circle"></i></button> -->
                 <!--    <input type="button" value="UPDATE STATUS" class="btn btn-success" onClick="processObject('frmaddpkg',<?=$row->c_pkg_id?>,'updateStatus')"/> -->
                </td> 
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <?php
            }
            ?>
          </div>  
        </div>
      </div>
    </div>
  </section>
</div>
<?=$message?>

</form>
</body>
</html>

<script type="text/javascript">
$('.form_datetime').datetimepicker({
//language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
forceParse: 0,
showMeridian: 1
});
$('.form_date').datetimepicker({
// language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
minView: 2,
forceParse: 0
});
$('.form_time').datetimepicker({
// language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 1,
minView: 0,
maxView: 1,
forceParse: 0
});
</script>
<script type="text/javascript">
//    $('input[type=file]').bootstrapFileInput();
$(":file").filestyle({buttonName: "btn-primary"});
//$(":file").filestyle({input: false});
// for data table
$(document).ready(function() {
$('#dataTables-example').dataTable();
});
</script> 






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