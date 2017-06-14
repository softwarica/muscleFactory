<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4 class="btn btn-link center-block">video for the chosen exercise</h4>
	</div>
	
<div class="panel panel-body">
	


	<?php
if($chestexvideo->num_rows() > 0){
	foreach($chestexvideo->result() as $row){
	?>

	<div class="col-md-6 col-lg-offset-3">
	 	  <!--   		<ul class="spinning">
	 	    			<!-- <li class="live">live <span class="m_1">Spinning</span></li> -->
	 	    			<!-- <li class="room"><?php echo $row->eqname;?></li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth"> -->
				  <h4 class="btn btn-link center-block"><?php echo $row->eqname;?></h4>
				  	  	<video  width="auto" height="350" controls>
							  <source src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqvideo;?>" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>

						<!-- <canvas id="myCanvas" style="border:0px solid #FFF;"> 
						</canvas>  -->

				  	<!--    ============================================ -->
					      
	                  </div>
			     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>