<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4 class="btn btn-link">Exercises with its picture, its category and details</h4>
	</div>
	<?php
if($exercise->num_rows() > 0){
	foreach($exercise->result() as $row){
	?>
<div class="panel panel-body">
	

<div class="card">
	<div class="col-lg-12">
     	 <div class="events">
     	 	<div class="col-lg-6">
	     	 	
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<div class="card">
	     	 		<img src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqimage;?>" alt="" class="img-responsive" style="width:500px;">
	     	 		</div>
	     	 </div>
	     	 <div class="col-lg-6">
	     	<!--  	<ul class="event1_text"> -->
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Exercise name:</h4>
	     	 		<p><?php echo $row->eqname;?></p>
	     	 		<hr/>
	     	 		<h4>Exercise Category:</h4>
	     	 		<p><?php echo $row->eqcat;?></p>
	     	 		<hr/>
	     	 		<h4>Exercise details:</h4>
	     	 		<p>This exercise is for chest</p>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	<!-- </ul> -->
	     	 	</div>
     	 		<div class="clear"></div>
     	 
     	 	<!-- <div class="event-bottom">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 	<!-- 	<img src="<?php echo base_url();?>assets/images/arnoldpress.jpg" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Arnold press</h4>
	     	 		<p>This exercise is for shoulder</p> -->
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 <!-- 	</ul>
     	 		<div class="clear"></div>
     	 	</div> --> 
     	 </div>
     </div>
</div>


     </div>
     
	<?php	
}
}
	?>
</div>


<?php include_once('footer.php');?>