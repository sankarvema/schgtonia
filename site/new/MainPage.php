<?php ?>
<?php include 'Header.php'; ?>
<?php include 'TopMenu.php'; ?>
  <div id="main">
    <!-- 2 columns (content + sidebar) -->
    <div id="cols" class="box">

        <!-- Content -->
        <div id="content">
		<p align="center">
		<a href="google.com">This is main page</a>
		<p>
			<a href="100Jahre.htm"><img src="images/welcomeLogo.png" border="0"></a><br/>
			Klick on Logo um zur Webseite des Gr&#252;ndungsfest zu gelangen
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
<?php include 'Footer.php'; ?>