<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4 class="btn btn-link">Exercises with its picture, its category and details</h4>
	</div>
	
<div class="panel panel-body">
	


	<?php
if($chestexercise->num_rows() > 0){
	foreach($chestexercise->result() as $row){
	?>
	<div class="col-lg-12" style="margin-top:15px;">
<div class="card">
     	 <div class="events">
     	 	<div class="col-lg-6">
	     	 	
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<div class="card">
	     	 		<img src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqimage;?>" alt="" class="img-responsive" style="width:500px; height:350px;">
	     	 		</div>
	     	 </div>
	     	 <div class="col-lg-6">
	     
	     	 
	     	 		<h4>Exercise name:</h4>
	     	 		<p><?php echo $row->eqname;?></p>
	     	 		<hr/>
	     	 		<h4>Exercise Category:</h4>
	     	 		<p><?php echo $row->eqcat;?></p>
	     	 		<hr/>
	     	 		</div>
	     	 		<div class="col-lg-6">
	     	 		<h4>Exercise details:</h4>
	     	 		<p><?php echo $row->eqdetails;?></p>
	     	 		</div>
	     	 	 <div class="btn2">
					   <a href="<?php echo base_url();?>controlExercise/getChestVideo?id=<?php echo $row->id;?>">click for video</a>
					</div>
     	 		<div class="clear"></div>
     	 

     	 </div>
    
     </div>
     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>