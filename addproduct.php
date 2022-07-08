<?php
    include './atclass.php';
	$msg ="";

	if($_POST)
	{
      $pname=mysqli_real_escape_string($conn,$_POST['pname']); 
	  $pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
	  $pdetails=mysqli_real_escape_string($conn,$_POST['pdetails']);  

	  $query =mysqli_query($conn,"insert into tbl_product(pro_name,pro_price,pro_details) values('{$pname}','{$pprice}','{$pdetails}')") or die(mysqli_error($conn));

	  if($query)
	  {
		$msg ='<div class="alert alert-success" role="alert">
	Record Add
	  </div>';
	  }	  
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> shraddha<span class="dashboard_text">online traning</span></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
               <li class="treeview">
                <a hreaf="#">
                    <i class= "fa fa-laptop"></i>
                    <span>product</span>
                    <i class ="fa fa-angle-left pull-right"></i>
                      </a>
                    <ul class="treeview-menu">
                        <li><a herf = "addproduct.php"><i class = "fa fa-angle-right"></i>Add</a></li>
                        <li><a herf = "display-record.php"><i class = "fa fa-angle-right"></i>view</a></li>


                    </ul>
            
               </li>
                
               
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                        <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                        <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                        <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                        <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>
</div>
<!--left-fixed -navigation-->
		<!-- header-starts -->
		<?php
             include './themepart/header.php';
             ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
				
					<h2 class="title1"> product Forms</h2>
					<?php
							echo $msg;
							
							?>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							
							<div class="form-title">
								<h4>Add Product Information:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="POST" enctype="multipart/form-data"> 
                                    <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">product name</label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="inputEmail3"  name="pname" placeholder="enter product name" required>
                                             </div> </div>
											 <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">product price</label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="inputEmail3" name="pprice"placeholder="enter product price" required>
                                             </div> </div>
											<div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">product detail</label>
                                          <div class="col-sm-9">
                                            
											 <textarea class="form-control" name="pdetails"required></textarea>
                                             </div> 
											</div>
                                                  
                                
                                             <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Add Product</button>
											 <button type="reset" class="btn btn-danger">reset</button>
											 <button type="view" onclick="window.location='display-record.php';"class="btn btn-info">view</button>
											 
                                             </div>
                                             </form> 
				 
                        
                    
                
            

                            
					
		</div>			
					
						
									
		<!--footer-->
		<?php
        include './themepart/footer.php';
        ?>
        <!--//footer-->
	
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>