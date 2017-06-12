<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Exercise Form</h5>

  </div>
<div class="panel panel-body">

<form class="" action="<?php echo base_url();?>controlExercise/newExercise" method="post"  enctype="multipart/form-data" accept-charset="utf-8">

  <div class="form-group">
   <!-- <label for="vcategory">Exercise Category</label> -->
   <!-- <input type="text"  name="vcategory" class="form-control" id="vcategory" placeholder="please enter equipment category" required="required"> -->
   <label for="ecat">Exercise Category</label>
   <select id="ecat" class="form-control" name="ecat">
   <option>please select exercise category</option>
      
      <?php
      if($categoryname->num_rows() > 0){
        foreach ($categoryname->result() as $row ) {
           
           ?>
           <option><?php echo $row->catname;?></option>
           <?php
        }
      }
  ?>
   </select>

 </div>

 <div class="form-group">
    <label for="ename">Exercise Name:</label>
    <input type="text" name="ename" class="form-control" id="ename" placeholder="please enter exercise name" required="required">
  </div>
<!-- <div class="form-group">
   <label for="video">video</label>
   <input type="file"  name="userfile" class="form-control" id="video"  required="required">
 </div> -->
<div class="panel panel-footer">
<input type="submit" name="btnexercisesubmit" value="submit" class="btn btn-success" >
</div>
</form>
</div>
</div>
</div>

