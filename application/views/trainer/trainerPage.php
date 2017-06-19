<html>
<?php $this->load->view("link"); ?>
<body>


          <div class="menu" >
          <div class="container">
          
                   
                     <a href="<?php echo base_url();?>controlWelcome/index">
              <div class="header-bottom_left">
                <img src="<?php echo base_url();?>assets/images/logo/logo.png" alt"" class="img-responsive" width="100"/>
              </div>
              </a>
           <div class="h_menu4"><!-- start h_menu4 -->
         
             <ul class="nav"  > 
               <li class="active"><a data-toggle="pill" href="#home">DASHBOARD</a></li>
               <li><a data-toggle="pill" href="#menu1">MEMBERS LIST</a></li>
               <li><a data-toggle="pill" href="#menu2">EXERCISE LIST</a></li>
               <li><a data-toggle="pill" href="#menu3">LOGOUT</a></li>
             </ul>
               
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/nav.js"></script>
           </div><!-- end h_menu4 -->

           <div class="clear"></div>

           </div>
           </div>
           <div class="col-lg-12">
             <h3 align="center" style="color:red; font-size:15px;">
                  <?php 
                  echo $this->session->flashdata('insertmsg');
                  echo $this->session->flashdata('delete_message');
                  echo $this->session->flashdata('update_message');
                  
                  echo $this->session->flashdata('eqinsertmsg');
                  echo $this->session->flashdata('vdoinsertmsg');
                  echo $this->session->flashdata('delexmsg');
                  echo $this->session->flashdata('image_update');
                  echo $this->session->flashdata('video_update');
                  echo $this->session->flashdata('exercise_update');
                 
                   ?>
                     
                   </h3>
                   </div>
             <div class="tab-content main" id="menu">
             
               <div id="home" class="tab-pane fade in active">
                 <?php
                 $this->load->view('trainer/trainerDashboard');
                 ?>
               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#memberlistcontent").load("<?php echo base_url();?>controlAdmin/getMember");
            })
            </script>

               <div id="menu1" class="tab-pane fade">
              <div id="memberlistcontent"></div>
               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#exerciselistcontent").load("<?php echo base_url();?>controlExercise/getExerciseList");
            })
            </script>
               <div id="menu2" class="tab-pane fade">
               <div id="exerciselistcontent"></div>
               </div>

               </div>
               <div id="menu3" class="tab-pane fade">
              

               </div>
             </div>



<div>
  
  <?php
$this->load->view("footer");
  ?>
</div>

<body>
</html>
