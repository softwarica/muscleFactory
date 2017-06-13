<html>
<?php $this->load->view("link"); ?>
<body>




<!-- <div style="background: url(<?php echo base_url();?>assets/images/admin.jpg)no-repeat center top;">
   <div class="container">
    <div class="header-text">
    <h1>MUSCLE FACTORY</h1>
    <h2>Best Choice For fitness</h2>
    <p>
      Exercise is extremely important to staying healthy both in body and mind.
       Being active can help a person continue to do things they enjoy and be independent as they age
     </p>
    <div class="banner_btn">
       <a href="#menu" class="class scroll">drop down
          </a>
    </div>
    </div>
  </div>
  </div> -->

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
               <li><a data-toggle="pill" href="#menu2">EQUIPMENTS</a></li>
               <li><a data-toggle="pill" href="#menu3">PAYMENT</a></li>
               <li><a data-toggle="pill" href="#menu4">STATUS</a></li>
               <li><a data-toggle="pill" href="#menu5">LOGOUT</a></li>
             </ul>
               
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/nav.js"></script>
           </div><!-- end h_menu4 -->

           <div class="clear"></div>

           </div>
           </div>
           <div class="col-lg-12">
             <h3 align="center" style="color:red;">
                  <?php if (isset($_POST['btnsubmit'])) {
                    // echo "<script type='text/javascript'>alert('$insertmsg');</script>";
                    echo $insertmsg;
                    
                    
                  } else if(isset($_GET['id'])){
                    // echo "<script type='text/javascript'>alert('$delete_message');</script>";
                    echo $delete_message;
                  } else if(isset($_POST['btnsubmitedit'])){
                    // echo "<script type='text/javascript'>alert('$update_message');</script>";
                    echo $update_message;
                  } else if(isset($_POST['btnsubmitimage'])){
                    echo $image_update;
                  } else if(isset($_POST['btnexercisesubmit'])){
                    echo $exerciseSaveMsg;
                  } else if(isset($_POST['btnequipmentsubmit'])){
                    echo $eqinsertmsg;
                  }
                  

                   ?></h3>
                   </div>
             <div class="tab-content main" id="menu">
               <div id="home" class="tab-pane fade in active">
                 <?php
                 $this->load->view('admin/dashboard');
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

               <div id="menu2" class="tab-pane fade">
               
                

               </div>



               <div id="menu3" class="tab-pane fade">
                 <?php
                 $this->load->view('admin/dashboard');
                 ?>

               </div>
               <div id="menu4" class="tab-pane fade">
                 <?php
                 $this->load->view('admin/dashboard');
                 ?>

               </div>
               <div id="menu5" class="tab-pane fade">
                 <?php
                 $this->load->view('admin/dashboard');
                 ?>

               </div>
             </div>



<div>
  
  <?php
$this->load->view("footer");
  ?>
</div>

<body>
</html>
