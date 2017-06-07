<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">user registration form</h5>

  </div>
<div class="panel panel-body">

<?php echo form_open_multipart('controlAdmin/newMember');?>
<!-- <form class="" action="<?php echo base_url();?>controlAdmin/newMember" method="post"> -->
<div class="col-lg-6" >
           <div class="form-group">
            <label for="mname">Member Name:</label>
            <input type="text" name="mname" class="form-control" id="mname" placeholder="please enter member name" required="required">
          </div>
         <div class="form-group">
            <label for="image">member image:</label>
            <input type="file" id="image" name="userfile" class="form-control" placeholder="please insert image" required="required"/>
          </div>
          <div class="form-group">
           <label for="address">Member Address:</label>
           <input type="text"  name="address" class="form-control" id="address" placeholder="please enter member address" required="required">
         </div>

         <div class="form-group">
          <label for="email">Member Email:</label>
          <input type="text" name="email" class="form-control" id="email" placeholder="please enter member email" required="required">
        </div>
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" class="form-control" id="uname" placeholder="please enter username" required="required">
        </div>
         <div class="form-group">
      <label for="pword">Password:</label>
      <input type="text" name="pword" class="form-control" id="pword" placeholder="please enter password" required="required">
    </div>
    <div class="form-group">
      <label for="repword">Re-password:</label>
      <input type="text" name="repword" class="form-control" id="repword" placeholder="please re-enter password" required="required">
    </div>
        
</div>
<!-- .................................................................... -->
<div class="col-lg-6" >
   <div class="form-group">
          <label for="age">Age:</label>
          <input type="text" name="age" class="form-control" id="age" placeholder="please enter member age" required="required">
        </div>
        <div class="form-group">
          <label for="weight">weight:</label>
          <input type="text" name="weight" class="form-control" id="weight" placeholder="please enter member weight" required="required">
        </div>
        <div class="form-group">
          <label for="height">height:</label>
          <input type="text" name="height" class="form-control" id="height" placeholder="please enter member height" required="required">
        </div>
    <div class="form-group">
     <label for="contact">Member Contact:</label>
     <input type="text" name="contact" class="form-control" id="contact" placeholder="please enter member contact" required="required">
    </div>

    <div class="form-group">
     <label for="jdate">Join Date:</label>
     <input type="date" name="jdate" class="form-control" id="jdate" placeholder="please enter join date" required="required">
    </div>

    <div class="form-group">
     <label for="package">Package:</label>
     <input type="text" name="package" class="form-control" id="package" placeholder="please enter package" required="required">
    </div>
      <div class="form-group">
     <label for="bmi">BMI:</label>
     <input type="text" name="bmi" class="form-control" id="bmi" placeholder="please enter body mass index" required="required">
    </div>

    <div class="panel panel-footer">
    <input type="submit" name="btnsubmit" value="submit" onclick="return confirm('Do you want to register member?')" class="btn btn-success center-block" >
    </div>
</div>
</form>
</div>
</div>
</div>
