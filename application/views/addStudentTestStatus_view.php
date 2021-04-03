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
    $attributes = array('id' => 'frmaddStudentTestStatus','name' => 'frmaddStudentTestStatus');
    echo form_open_multipart('AddStudentTestStatus',$attributes);?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
    <div class="row">
        
      <div class="col-xs-12 col-md-6 txtbase">
        
        <h1>ADD STUDENT TEST STATUS</h1>
        Student Id :
        <input type="text" name="studentid" id="studentid" class="form-control" placeholder=""/>
        Student Name :
        <input type="text" name="studentname" id="studentname" class="form-control" placeholder=""/><br>
        <label>Theory Test Status :</label><br>
        <input type="radio" id="pass" name="theoryteststatus" value="pass">
        <label for="pass">Pass</label><br>
        <input type="radio" id="fail" name="theoryteststatus" value="fail">
        <label for="fail">Fail</label><br>
        <input type="radio" id="none" name="theoryteststatus" value="none">
        <label for="none">None</label><br>

        Theory test date :<input type="date" name="theoryTestDate" id="theoryTestDate"  
        class="form-control" placeholder=""/><br>
        If pass, Certificate Number :
        <input type="text" name="certificateNumber" id="certificateNumber"  
        class="form-control" placeholder=""/><br> 
        Practical test date :
        <input type="date" name="practicalTestDate" id="practicalTestDate"  
        class="form-control" placeholder=""/><br> 
        <label>Practical Test Status :</label><br>
        <input type="radio" id="p_pass" name="practicalteststatus" value="pass">
        <label for="pass">Pass</label><br>
        <input type="radio" id="p_fail" name="practicalteststatus" value="fail">
        <label for="fail">Fail</label><br>
        <input type="radio" id="none" name="practicalteststatus" value="none">
        <label for="none">None</label><br>
      
      </div>
    
    </div>
    
    <div class="row">
      
      <div class="col-xs-12 col-md-4 txtbase">
        <input type="button" onClick="validateaddStudentTestStatus('frmaddStudentTestStatus',0,'addTestStatus')" class="btn btn-danger form-control" value="ADD INFO" />
      </div>
    
    </div>
  
  </section><br><br>
  <section>
    <div class="row txtbase">
      <?php
      if($teststatus){
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
                <th>Theory Test Status</th>
                <th>Theory Test Date</th>
                <th>Certificate Number</th>
                <th>Practical Test Date</th>
                <th>Practical Test Status</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($teststatus as $row) {
                ?>                             
                <tr>
                <td><?=$row->student_id?></td> 
                <td><?=$row->student_Name?></td>
                <td><?=$row->theory_test_status?></td>
                <td><?=$row->theory_test_date?></td> 
                <td><?=$row->certificate_number?></td>
                <td><?=$row->practical_test_date?></td> 
                <td><?=$row->practical_test_status?></td> 
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