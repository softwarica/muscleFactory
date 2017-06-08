<?php $this->load->view('link');?>
<?php $this->load->view('header');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading" style="    height: 75px;">
  <span class="col-lg-6">
<h5 class="btn btn-link">memberDetails</h5>
</span>
<span class="col-lg-6">
<a href="<?php echo base_url();?>controlAdmin/index"><h5 class="btn btn-link ">goto admin page</h5></a>
</span>
  </div>
<div class="panel panel-body" id="menu">
<?php

if($viewdetails->num_rows() > 0){
  foreach($viewdetails->result() as $row){
?>
<div class="table-responsive">
  <table class="table table-striped">
    <tr>
        <th>Member ID:</th><td><?php echo $row->id; ?></td>
    </tr>
    <tr>
        <th>Member Name:</th><td><?php echo $row->mname; ?></td>
        </tr>
     <tr>
        <th>Member Picture:</th><td><img src="<?php echo base_url();?>assets/images/admin/<?php echo $row->image;?>" class="img-responsive" width="200"/>
        </td>
        <td>
        <form class="" action="<?php echo base_url();?>controlAdmin/editPicture" method="post" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
        <input type="file" name="userfile" id="image" />

        <input type="submit" value="edit" class="btn btn-link" />
       
        </form>
        </td>
    </tr>
     <tr>
     <th>Member Address:</th>
        <td><?php echo $row->address; ?></td>
        </tr>
         <tr>
         <th>Member Email:</th>
        <td><?php echo $row->email; ?></td>
        </tr>
         <tr>
         <th>Member username:</th>
        <td><?php echo $row->uname; ?></td>
        </tr>
         <tr>
         <th>Member password:</th>
        <td><?php echo $row->pword; ?></td>
        </tr>
         <tr>
         <th>Member Age:</th>
        <td><?php echo $row->dob; ?></td>
        </tr>
         <tr>
         <th>Member Weight:</th>
        <td><?php echo $row->weight; ?></td>
        </tr>
         <tr>
         <th>Member Height:</th>
        <td><?php echo $row->height; ?></td>
        </tr>
         <tr>
         <th>Member Contact:</th>
        <td><?php echo $row->contact; ?></td>
        </tr>
         <tr>
         <th>Member Join Date:</th>
        <td><?php echo $row->jdate; ?></td>
        </tr>
         <tr>
         <th>Member Package:</th>
        <td><?php echo $row->package; ?></td>
        </tr>
         <tr>
         <th>Body Mass Index:</th>
        <td><?php echo $row->bmi; ?></td>
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
