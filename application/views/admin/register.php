<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">user registration form</h5>

  </div>
<div class="panel panel-body">

<!-- < --><!-- ?php echo form_open_multipart('controlAdmin/newMember');?> 
<form action="http://localhost/muscleFactory/index.php/controlAdmin/newMember" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
<form class="" action="<?php echo base_url();?>controlAdmin/newMember" method="post" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
<div class="col-lg-6" >
           <div class="form-group">
            <label for="mname">Member Name:</label>
            <input type="text" name="mname" class="form-control" id="mname" placeholder="please enter member name" required="required" >
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
          <input type="email" name="email" class="form-control" id="email" placeholder="please enter member email" required="required">
        </div>
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" class="form-control" id="uname" placeholder="please enter username" required="required">
        </div>
         <div class="form-group">
      <label for="pword">Password:</label>
      <input type="password" name="pword" class="form-control" id="pword"  placeholder="please enter password" required="required">
    </div>
    <div class="form-group">
          <span id="pwordMessage"></span>
        </div>
    <div class="form-group">
      <label for="repword">Re-password:</label>
      <input type="password" name="repword" onchange="checkPassword()" class="form-control" id="repword" placeholder="please re-enter password" required="required">
    </div>
        <div class="form-group">
          <span id="pMessage"></span>
        </div>
</div>
<!-- .................................................................... -->
<div class="col-lg-6" >
   <div class="form-group">
          <label for="dob">Date of birth:</label>
          <input type="date" name="dob" class="form-control" id="dob" placeholder="please enter Daet of birth" required="required">
        </div>
        <div class="form-group">
          <label for="weight">weight(in kg):</label>
          <input type="text" name="weight" class="form-control" onchange="checkWeight()" id="weight" placeholder="please enter member weight" required="required">
        </div>
         <div class="form-group">
          <span id="weightMessage"></span>
        </div>
        <div class="form-group">
          <label for="height">height(in feet):</label>
          <input type="text" name="height" class="form-control" id="height" onchange="checkHeight()" placeholder="please enter member height" required="required">
        </div>
        <div class="form-group">
          <span id="heightMessage"></span>
        </div>
    <div class="form-group">
     <label for="contact">Member Contact:</label>
     <input type="text" name="contact" onchange="checkContact()" class="form-control" id="contact" placeholder="please enter member contact" required="required">
    </div>
    <div class="form-group">
          <span id="contactMessage"></span>
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
    <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" onclick="return confirm('Do you want to register member?')" class="btn btn-success center-block" >
    </div>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
  function checkPassword() {

          var pword=document.forms["myForm"]["pword"].value;
          var pwordMessage=$('#pwordMessage');//this variable is for css
          var pMessage=$('pMessage');// css for password matching message

          if(pword.length<9){
        document.getElementById('pword').focus();
        pwordMessage.css({
            'color':'red'
          });
         document.getElementById('pwordMessage').innerHTML='please enter password greater than 8 letter';
        }else{
          document.getElementById('pwordMessage').innerHTML='';
        }




    if(document.getElementById('pword').value === document.getElementById('repword').value) {
       pMessage.css({
        'color':'blue'
      });
        document.getElementById('pMessage').innerHTML = "password match";
        // alert('password match');
         $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
    } else {
      pMessage.css({
        'color':'red'
      });
        document.getElementById('pMessage').innerHTML = "password is not matching";
        // alert('password is not matching');
        $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });
        document.getElementById('pword').focus();
    }
}

function checkWeight(){

 var weight=document.forms["myForm"]["weight"].value;
 var weightMessage=$('#weightMessage');//this variable is for css
          if(weight <= 40){
            
            document.getElementById('weight').focus();
            weightMessage.css({
            'color':'red'
          });
            document.getElementById('weightMessage').innerHTML='please enter weight greater than 40kg';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('weightMessage').innerHTML='';
            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkHeight(){

 var height=document.forms["myForm"]["height"].value;
 var heightMessage=$('#heightMessage');//this variable is for css
          if(height <= 4.8){
            
            document.getElementById('height').focus();
             heightMessage.css({
            'color':'red'
          });
            document.getElementById('heightMessage').innerHTML='please enter height greater than 4.8 feet';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('heightMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkContact(){

 var contact=document.forms["myForm"]["contact"].value;
 var contactMessage=$('#contactMessage');
 if(contact.length < 10){

  document.getElementById('contact').focus();
             contactMessage.css({
            'color':'red'
          });
document.getElementById('contactMessage').innerHTML='please enter valid mobile number';
 $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });
 } else{
          document.getElementById('contactMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }


}


</script>
