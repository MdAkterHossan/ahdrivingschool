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
    $attributes = array('id' => 'frmaddStudentInfo','name' => 'frmaddStudentInfo');
    echo form_open_multipart('AddStudentInfo',$attributes); ?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
    <div class="row">
        
      <div class="col-xs-12 col-md-6 txtbase">
        
        <h1>ADD STUDENT INFORMATION</h1>
        Student Id :
        <input type="text" name="studentId" id="studentId" class="form-control" placeholder=""/>
        Student Name :
        <input type="text" name="studentName" id="studentName" class="form-control" placeholder="Name"/><br>
        Date of Birth :<input type="date" name="studentDOB" id="studentDOB"  
        class="form-control" placeholder=""/>
        Address :
        <input type="text" name="studentAddress" id="studentAddress"  
        class="form-control" placeholder=""/><br> 
        Phone :
        <input type="text" name="studentPhone" id="studentPhone"  
        class="form-control" placeholder=""/> 
        Email :
        <input type="text" name="studentEmail" id="studentEmail"  
        class="form-control" placeholder=""/><br>
        Instructor Name :
        <input type="text" name="instructorName" id="instructorName"  
        class="form-control" placeholder=""/>
        Registration Date :
        <input type="Date" name="studentRegDate" id="studentRegDate"  
        class="form-control" placeholder=""/>
      
      </div>
    
    </div>
    
    <div class="row">
      
      <div class="col-xs-12 col-md-4 txtbase">
        <input type="button" onClick="validateaddStudentInfo('frmaddStudentInfo',0,'addNewStudentInfo')" class="btn btn-danger form-control" value="ADD INFO" />
      </div>
    
    </div>
  
  </section><br><br>
  <section>
    <div class="row txtbase">
      <?php
      if($studentinfo){
      ?>
      <div class="col-xs-12 col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>All Students Information </h1>
          </div>
          <div class="panel-body">
            <table  class="col-xs-12 col-md-6  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>Student Id</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Instructor Name</th>
                <th>Phone</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($studentinfo as $row) {
                ?>                             
                <tr>
                <td><?=$row->student_id_number?></td> 
                <td><?=$row->student_name?></td>
                <td><?=$row->student_dob?></td>
                <td><?=$row->student_address?></td> 
                <td><?=$row->student_phone?></td>
                <td><?=$row->student_email?></td> 
                <td><?=$row->instructor_name?></td> 
                <td><?=$row->registration_date?></td> 
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