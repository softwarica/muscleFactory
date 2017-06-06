<?php $this->load->view('link');?>
<?php $this->load->view('header');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">memberDetails</h5>

  </div>
<div class="panel panel-body">
<?php

if($viewdetails->num_rows() > 0){
  foreach($viewdetails->result() as $row){
?>
<div class="table-responsive">
  <table class="table">
    <tr>
        <td><?php echo $row->id; ?></td>
    </tr>
    <tr>
        <td><?php echo $row->mname; ?></td>
     <tr>
        <td><img src="<?php echo base_url();?>assets/images/admin/<?php echo $row->image;?>" class="img-responsive" width="200"/>
        </td>
    </tr>

  </table>

</div>
<?php
  }
}
?>


</div>
</div>
<div><?php $this->load->view('footer');?></div>
