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
    $attributes = array('id' => 'frmaddStudentFeesInfo','name' => 'frmaddStudentFeesInfo');
    echo form_open_multipart('AddStudentFeesInfo',$attributes); ?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
    <div class="row">
        
      <div class="col-xs-12 col-md-6 txtbase">
        
        <h3>ADD STUDENT FEES INFORMATION</h3>
        Student Id :
        <input type="text" name="stdID" id="stdID" class="form-control" placeholder=""/>
        Student Name :
        <input type="text" name="stdName" id="stdName" class="form-control" placeholder=""/><br>
        
        <div class="form-group">
          <label for="gearbox">Gear Box Type:</label>
          <select class="form-control"  name="gearbox">
            <option value="manual">Manual</option>
            <option value="automatic">Automatic</option>
          </select>
        </div>
        
        Hours :
        <input type="text" name="hours" id="hours"  
        class="form-control" placeholder=""/><br>
        Rate Per Hour :
        <input type="text" name="perHourRate" id="perHourRate"  
        class="form-control" placeholder=""/><br> 
      
      </div>
    
    </div>
    
    <div class="row">
      
      <div class="col-xs-12 col-md-4 txtbase">
        <input type="button" onClick="validateaddStudentFeesInfo('frmaddStudentFeesInfo',0,'addFeesInfo')" class="btn btn-primary form-control" value="ADD INFO" />
      </div>
    
    </div>
  
  </section><br><br>
  <section>
    <div class="row txtbase">
      <?php
      if($feesinfo){
      ?>
      <div class="col-xs-12 col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>All Students Fees Information </h1>
          </div>
          <div class="panel-body">
            <table  class="col-xs-12 col-md-6  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>Student Id</th>
                <th>Name</th>
                <th>Gear Box Type</th>
                <th>Total Hours</th>
                <th>Rate Per Hour</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($feesinfo as $row) {
                ?>                             
                <tr>
                <td><?=$row->student_id_fees?></td> 
                <td><?=$row->student_name_fees?></td>
                <td><?=$row->gear_box_type?></td>
                <td><?=$row->hours?></td> 
                <td><?=$row->per_hour_rate?></td>
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