<?php 
include_once('../include/restriction.php');
include_once('../include/config.inc');
include_once('../include/setting.php');
include_once('../include/passport.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>NIGERIAN ARMY</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/table-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!-- main menu start -->
     <?php include("../include/menu.php")?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** --><br><br>
      <!--main content start-->
      
      <section id="main-content" style="  overflow-style:marquee-line; overflow-y:scroll; overflow-X:scroll; " >
 
          <section class="wrapper" style="font-size: 18px;   min-height: 500px;">
         <?php 
$dini=mysql_query("SELECT * FROM request where status='APPROVED'   ORDER BY DATE ASC ") or die ("Can't Select records".mysql_error());
$row_count=mysql_num_rows($dini);
 
?>
             <div class="row mt" >
                <div class="col-lg-12">
                   <!-- Advanced Tables -->
                   <div class="panel panel-default" style=" font-size:16px;  width:100%; background-color: color:#033;">
                   <div class="panel-heading" style="background-color:#093A0B; width:100%; color:#FFF;font-size:14px;">
                             LIST OF ACCEPTED REQUEST
                        </div><br>
                        
                        <div class="panel-body">
                <div class="table-responsive"  style="background-color:; ">
            
<font style="font-size:13px; " >
               <table class="table table-bordered table-striped table-condensed"  id="dataTable">
                              
                                    <thead class="bg-info">
                                    <?php if($row_count>0){ ?>
                                      <tr><font style="font-size:20;  color:#0F9;font-family:'Arial Black', Gadget, sans-serif;">
                                            <th>S/N</th>
                                            <th>ID</th>
                                            <th> NAME</th>
                                            <th>DESCRIPTION</th>
                                            <th>REASON</th>
                                            <th>FROM</th>
                                            <th>TO</th>
                                            <th>STATUS</th>
                                    <th>NUMBER OF DAYS</th>
                                    <th>DATE</th>
                                            <th width="100">ACTION</th>
                                            </font>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                     <?php 
  $strip=0;
  while($view_row=mysql_fetch_array($dini)) { ?>
                                        <tr>
                                             <td ><?php $strip++; echo $strip; ?></td>
                                            <td ><?php echo $view_row['l_id']; ?></td>
                                            <td><?php echo $view_row['fname']; ?></td>
                                            <td><?php echo $view_row['head']; ?></td>
                                            <td class="center"><?php echo $view_row['reason']; ?></td>
                                           <td class="center"><?php echo $view_row['dfrom']; ?></td>
                                            <td class="center"><?php echo $view_row['dto']; ?></td>
                                            <td class="center"><?php echo $view_row['status']; ?></td>
                                            <td class="center"><?php echo $view_row['ddays']; ?></td>
                                            <td class="center"><?php echo $view_row['date']; ?></td>
                                            <td class="center"><div align="left">
					
					<a href="print.php?ID=<?php echo $view_row['l_id']; ?>&&?stf=<?php echo $view_row['staff_id']; ?>"> 
					<button class="btn btn-success">Print</button></a>
                    </td>
                                        </tr>
                                       
                                      
                      <?php  } ?>
                              <?php } ?>
                            
        
          
                                    </tbody>
                                </table>
                               
                            </div>
                            
                    
                              
                    
                   
            
                            
                           
        

           </div>
                    </div>
                    </div>
                 <!--End Advanced Tables -->
               
</div>

</center>  

</div>

             <!--/.ROW-->    
                  
          </section>
    </section>
      
      <!--main content end-->
      <!--footer start-->
     <?php include("../include/footer.php")?>
      <!--footer end-->
  </section>

       <!-- js placed at the end of the document so the pages load faster -->
       <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
    	
   
	 
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>
</html>
