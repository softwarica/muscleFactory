<style type="text/css">
  h4{
font-size: 12px !important;
  }
</style>
<div class="container" style="margin-top:10px;">

<ul class="nav navabar-default" style="margin-left:170px;">
  
  <li><a data-toggle="pill" href="#exercise" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">Exercise</h4>
  </a></li>

  <li><a data-toggle="pill" href="#diet" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">Diet</h4>
  </a></li>

 <li><a data-toggle="pill" href="#schedule" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">Schedule</h4>
  </a></li>
</ul>
</div>

<div class="tab-content main">

               <script type="text/javascript">
                        $(document).ready(function(){
                            $("#exercisereg").load("<?php echo base_url();?>controlTrainer/getCategory");
                        })
                        </script>
  <div id="exercise" class="tab-pane fade in active">
    <div id="exercisereg"></div>
  </div>
        
         <div id="diet" class="tab-pane fade in active">
    
  </div>

 

  <div id="schedule" class="tab-pane fade">
  
  </div>
  </div>
