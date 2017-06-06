<?php $this->load->view('link');?>
<?php $this->load->view('header');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">edit user registration form</h5>

  </div>
<div class="panel panel-body">
<?php
if($memberdetails->num_rows() > 0){
  foreach($memberdetails->result() as $row){
?>

<form class="" action="<?php echo base_url();?>controlAdmin/updateEditedMember" method="post">

<div class="form-group">
    
    <input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->id; ?>">
  </div>
<div class="col-lg-6">
   <div class="form-group">
    <label for="mname">Member Name:</label>
    <input type="text" name="mname" class="form-control" id="mname" placeholder="please enter member name" value="<?php echo $row->mname; ?>" required="required">
  </div>

  <div class="form-group">
   <label for="address">Member Address:</label>
   <input type="text"  name="address" class="form-control" id="address" value="<?php echo $row->address; ?>" placeholder="please enter member address"  required="required">
 </div>

 <div class="form-group">
  <label for="email">Member Email:</label>
  <input type="text" name="email" class="form-control" id="email" value="<?php echo $row->email; ?>" placeholder="please enter member email" required="required">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
 <label for="contact">Member Contact:</label>
 <input type="text" name="contact" class="form-control" id="contact" value="<?php echo $row->contact; ?>" placeholder="please enter member contact" required="required">
</div>

<div class="form-group">
 <label for="jdate">Join Date:</label>
 <input type="date" name="jdate" class="form-control" id="jdate" value="<?php echo $row->jdate; ?>" placeholder="please enter join date" required="required">
</div>

<div class="form-group">
 <label for="package">Package:</label>
 <input type="text" name="package" class="form-control" id="package" value="<?php echo $row->package; ?>" placeholder="please enter package" required="required">
</div>

<div class="panel panel-footer">
<input type="submit" name="btnsubmitedit" value="submit" class="btn btn-success" >
  <a type="button" href="<?php  echo base_url();?>controlAdmin/goBack" class="btn btn-success">back</a>
</div>
</div>
</form>
</div>

<?php
  }
}
?>

</div>
</div>
<div><?php $this->load->view('footer');?></div>
