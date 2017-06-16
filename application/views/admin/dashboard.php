<style type="text/css">
  h4{
font-size: 12px !important;
  }
</style>
<div class="container" style="margin-top:10px;">

<ul class="nav navabar-default" style="margin-left:170px;">
  <li class="active"><a data-toggle="pill" href="#register" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/register.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">registration</h4>
  </a></li>
<!--   <li><a data-toggle="pill" href="#equipment" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/equip.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">equipment</h4>
  </a></li> -->
  <li><a data-toggle="pill" href="#exercise" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">Exercise</h4>
  </a></li>
  <li><a data-toggle="pill" href="#manage" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/manage.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">images</h4>
  </a></li>
  <li><a data-toggle="pill" href="#video" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">videos</h4>
  </a></li>

  <li><a data-toggle="pill" href="#totalincome" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/income.jpg" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">incomes</h4>
  </a></li>
  <li><a data-toggle="pill" href="#totalcustomer" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/customer.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">customers</h4>
  </a></li>

</ul>
</div>

<div class="tab-content main">
  <div id="register" class="tab-pane fade in active">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
          <script type="text/javascript">
                        $(document).ready(function(){
                            $("#exercisePage").load("<?php echo base_url();?>controlExercise/getCategory");
                        })
                        </script>
  <div id="exercise" class="tab-pane fade">
      <div id="exercisePage"></div>
  </div>

            <!--   <script type="text/javascript">
                        $(document).ready(function(){
                            $("#exercisePage").load("<?php echo base_url();?>controlExercise/getCategory");
                        })
                        </script>
  <div id="exercise" class="tab-pane fade">
    <div id="exercisePage"></div>
  </div> -->



  <div id="manage" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
                      <script type="text/javascript">
                        $(document).ready(function(){
                            $("#videoPage").load("<?php echo base_url();?>controlVideo/getCategory");
                        })
                        </script>
  <div id="video" class="tab-pane fade">
    <div id="videoPage"></div>
  </div>
  <div id="totalincome" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
  <div id="totalcustomer" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
  <div id="schedule" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
  </div>
