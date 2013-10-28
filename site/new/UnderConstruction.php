<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>

	
	    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/scheme.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
    <title></title>

  </head>
  <body style="background-color:#fff !important;"}>
  <div id="main">
    <!-- 2 columns (content + sidebar) -->
    <div id="cols" class="box">

        <!-- Content -->
        <div id="content">
		<p align="center">
			<a href="Willekum.php"><img src="images/Now-Under-Construction.gif" border="0"></a><br/>
			</p>
		<!-- /content -->
		</div>
        <!-- Sidebar -->
        <div id="aside">

            <!-- News -->                    
            <h4 class="title">Links</h4>
            
            <div class="aside-in">
                <!-- Menu Box -->
				<div class="aside-box">
				<?php include 'WillekumMenu.php'; ?>
                </div> <!-- /aside-box -->
            </div> <!-- /aside-in -->
            
            <!-- Contact Details -->
            <h4 class="title">Contact</h4>
			<?php include 'Contact.php'; ?>
			
        </div> <!-- /aside -->
    
    </div> <!-- /cols -->
    <div id="cols-bottom"></div>
	</div>
  </body>
</html>