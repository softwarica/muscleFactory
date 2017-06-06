<div class="container" style="margin-top:10px;">

<ul class="nav navabar-default">
  <li class="active"><a data-toggle="pill" href="#register" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/register.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">registration</h4>
  </a></li>
  <li><a data-toggle="pill" href="#equipment" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/equip.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">equipment</h4>
  </a></li>
  <li><a data-toggle="pill" href="#payment" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/payment.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">payment</h4>
  </a></li>
  <li><a data-toggle="pill" href="#manage" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/manage.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">manage</h4>
  </a></li>
  <li><a data-toggle="pill" href="#exercise" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">exercises</h4>
  </a></li>

  <li><a data-toggle="pill" href="#totalincome" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/income.jpg" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">incomes</h4>
  </a></li>
  <li><a data-toggle="pill" href="#totalcustomer" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/customer.png" class="img-responsive" style="height:100px;"/>
     <h4 style="color:#337ab7">customers</h4>
  </a></li>

</ul>
</div>

<div class="tab-content">
  <div id="register" class="tab-pane fade in active">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
  <div id="equipment" class="tab-pane fade">
    <?php
    $this->load->view('admin/equipment');
    ?>
  </div>
  <div id="payment" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
  <div id="manage" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
  </div>
  <div id="exercise" class="tab-pane fade">
    <?php
    $this->load->view('admin/register');
    ?>
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
