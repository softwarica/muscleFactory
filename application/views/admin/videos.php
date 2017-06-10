<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Videos Uploading Form</h5>

  </div>
<div class="panel panel-body">

<form class="" action="<?php echo base_url();?>controlAdmin/newVideo" method="post"  enctype="multipart/form-data" accept-charset="utf-8">
   <div class="form-group">
    <label for="vname">Video Name:</label>
    <input type="text" name="vname" class="form-control" id="vname" placeholder="please enter equipment name" required="required">
  </div>

  <div class="form-group">
   <label for="vcategory">video Category</label>
   <input type="text"  name="vcategory" class="form-control" id="vcategory" placeholder="please enter equipment category" required="required">
 </div>
<div class="form-group">
   <label for="video">video</label>
   <input type="file"  name="video" class="form-control" id="video"  required="required">
 </div>
<div class="panel panel-footer">
<input type="submit" name="btnsubmit" value="submit" class="btn btn-success" >
</div>
</form>
</div>
</div>
</div>
