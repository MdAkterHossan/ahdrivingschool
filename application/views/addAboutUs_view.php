<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title></title>




<div class="container">
  <section>
    <?php 
		$attributes = array('id' => 'frmaddAboutUs','name' => 'frmaddAboutUs');
		echo form_open_multipart('AddAboutus',$attributes); ?>  
		<input type="hidden" name="hidEx1" id="hidEx1"/>
		
		<div class="row">
        <div class="col-xs-12 col-md-3 col-md-offset-1">
          <h1 class="txtbase">Add About US</h1>

					<input type="file" name="aboutusimages" id="aboutusimages"  data-buttonName="btn-primary"/> 
		
					<textarea class="form-control" placeholder="Text" name="aboutustext" id="aboutustext" type="text"> </textarea>
	 </div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-3 col-md-offset-1 txtbase">
				     <input type="button" onClick="validateaddAboutUs('frmaddAboutUs',0,'addAboutUs')" class="btn btn-success form-control" value="Submit" />
			</div>
				<!--    <div class="col-xs-12 col-md-6">
				<input type="button" value="Search" class="btn btn-danger form-control" onClick="formsubmit('frmregister','searchAdmins')"/>
				</div> -->
		</div>
  </section><br>
  <section>
    <div class="row">
      <?php
      if($aboutus){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center txtbase"><i class=""></i>About us Info</h1>
          </div>
          <div class="panel-body">
            <table  class="col-xs-12 col-md-6  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success txtbase">
                <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Description</th>
                 <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($aboutus as $row) {
                ?>                             
                <tr class="txtbase"> 
                <td><?=$row->aboutus_id?></td>  
                <td><img src="<?=base_url().$row->aboutus_img?>" alt="..." style="height:50px" class="img-thumbnail"></td> 
                <td><?=$row->aboutus_text?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddAboutUs', <?=$row->aboutus_id?>, 'deleteImage')"><i class="fa fa-times-circle"></i></button>
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
<!-- patient.php --> 






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