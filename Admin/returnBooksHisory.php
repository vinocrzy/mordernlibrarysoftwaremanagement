<?php
   include('session.php');
   

						
$sql6 = "Select count(bookId) From books Where available >= 1";
$query6 = mysqli_query($db,$sql6);
$result6 = mysqli_fetch_assoc($query6);

$sql9 = "Select count(bookId) From books Where available < 1";
$query9 = mysqli_query($db,$sql9);
$result9 = mysqli_fetch_assoc($query9);

$query = "SELECT returnBookId,returnId,returnDate FROM borrow Where returnId > 0";
	$returnD = mysqli_query($db,$query);
	$returnD1 = mysqli_query($db,$query);
	$res = mysqli_fetch_assoc($returnD);

   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>library management</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css"> 
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Library System</b></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="home.php"><img src="assets/img/annauniv.jpg" class="img" width="80"></a></p>
              	  <h5 class="centered">University College of Engineering,Villupuram</h5>
              	  	
                  <li class="mt">
                      <a href="home.php">
                          <i class="fa fa-desktop"></i>
                          <span>Inventory</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Member Access</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addst.php"><i class="fa fa-plus-circle"></i>Add Student</a></li><li><a  href="uupdate.php"><i class="fa fa-adjust"></i>User Update</a></li><li><a  href="delmemb.php"><i class="fa fa-trash-o"></i>Delete Members</a></li><li><a  href="addStaff.php"><i class="fa fa-plus-circle"></i>Add Staff</a></li> <li><a  href="members.php"><i class="fa fa-user"></i>Members Details</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Book Details</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="browse.php">Browse Book</a></li>
						  <li><a  href="damagelist.php">Damage Books</a></li>
						  <li><a  href="Issuedlist.php">Issued Books</a></li>
						  <li><a  href="returnBooksHisory.php">Returned Books</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-edit"></i>
                          <span>Book Access</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addBook.php">Add Book</a></li>
						  <li><a  href="issueBooks.php">Issue Book</a></li>
						  <li><a  href="booking.php?ch=0">Booked Books</a></li>
                          <li><a  href="damage.php">Set Damage Books</a></li>
						   <li><a  href="report.php">Report</a></li>
                      </ul>
                  </li>
                   
				  <li class="sub-menu">
                      <a href="srch.php" >
                          <i class="fa fa-search"></i>
                          <span>Search</span>
                      </a>
                     
                  </li>
				  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Settings</span>
                      </a>
                     <ul class="sub">
                          <li><a  href="pupdate.php?ch=0">Password Update</a></li>
                          <li><a  href="lock_screen.php?ch=0">Lock</a></li>
                      </ul>
                  </li>
                  <li  class="sub-menu">
                      <a class="" href="about.php" >
                          <i class="fa fa-info"></i>
                          <span>About</span>
                      </a>
                     
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
						<div class="col-lg-12">
							  <div class="form-panel">
							  
									
										<div class="alert alert-info" id="">
						  			<div class="white-header">
																			<h5>Issued Books</h5>
																		</div>
					<table class="table table-bordered table-striped table-condensed w3-card-2">
			<tr>
				<th>Access-ID</th>
				<th>Return-ID</th>
				<th>Return-Date</th>
				<th>Delete</th>
			</tr>
			
				<?php
					while($res1 = mysqli_fetch_assoc($returnD1)){
					?>
					<tr>

						<td>
							<a href="extra.php?activity=bookDetails&selectedBookId=<?php echo $res1['returnBookId'] ; ?>"><?php echo $res1['returnBookId'] ; ?>	
							</a>
						</td>
						<td>
							<a href="extra.php?activity=memberDetails&selectedMemberId=<?php echo $res1['returnId'] ; ?>"> <?php echo $res1['returnId']; ?>
							</a>
						</td>
						<td><?php echo $res1['returnDate']; ?></td>
						<td>
							
							<a onclick="document.getElementById('id02').style.display='block'">Delete</a>
							<div id="id02" class="w3-modal ">
							  <div class="w3-modal-content span-2-75 w3-round">
								<header class="w3-container w3-purple">
								  
								  <h2>Are you Sure you want to delete this record?</h2>
								</header>
								
								
								<footer class="w3-container w3-purple">
								  &nbsp&nbsp<a class="w3-button w3-red w3-round-xlarge" href="extra.php?activity=deleteReturnedBooksHistory&deleteReturnId=<?php echo $res1['returnId']; ?> & deleteReturnDate=<?php echo $res1['returnDate']; ?>">Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="w3-button w3-red w3-round-xlarge" onclick="document.getElementById('id02').style.display='none'">Cancel</a>
								</footer>
							  </div>
							</div>
						</td>
					</tr>
					<?php
				}
				?>
		</table>
                  	</div>
						</div>
							</div>
                  	</div><!-- /row mt -->	
                  
                      
					  
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	
                      	
                      	

                    </div><!-- /row -->
                    
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                     
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  	
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    
						
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>Books Chart</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-database"></i><?php echo $result9['count(bookId)']; ?> Issued Books  </p>
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: <?php echo $result9['count(bookId)']; ?>,
												color:"#68dff0"
											},
											{
												value : <?php echo $result6['count(bookId)']; ?>,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
	                      	</div><! --/grey-panel -->
                      	<br>
                      
						

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - www.aucev.edu.in
              <a href="##" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
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
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
