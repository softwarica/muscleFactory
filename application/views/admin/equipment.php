<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Equipment registration form</h5>

  </div>
<div class="panel panel-body">

<form class="" action="<?php echo base_url();?>controlAdmin/newEquipment" method="post">
   <div class="form-group">
    <label for="ename">Equipment Name:</label>
    <input type="text" name="ename" class="form-control" id="ename" placeholder="please enter equipment name" required="required">
  </div>

  <div class="form-group">
   <label for="category">Equipment category:</label>
   <input type="text"  name="category" class="form-control" id="category" placeholder="please enter equipment category" required="required">
 </div>

<div class="panel panel-footer">
<input type="submit" name="btnsubmit" value="submit" class="btn btn-success" >
</div>
</form>
</div>
</div>
</div>
