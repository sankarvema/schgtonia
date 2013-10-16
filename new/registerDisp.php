<!DOCTYPE html>
<html lang="en">
<?php
include("formdb.php");
?>

  <head>

	
	    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/scheme.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/yui.css" />
    <title></title>

  </head>
  <body style="background-color:#fff !important;"}>
  <div id="main">
    <!-- 2 columns (content + sidebar) -->
    <div id="cols" class="box">

        <!-- Content -->
        <div id="content">
		
				<?php
				
		$query="insert into member_register
				 (
					Rittername,
					ProfanerName,
					ReychsNummer, 
					Personen1, 
					Strasse, 
					ZIP, 
					Stadt,
					eMehl,
					Fexung,
					Personen2,
					Personen3,
					Personen4,
					Personen5,
					Personen6,
					Personen7,
					Burgbaustein
				) 
				values
				(
					'$_POST[RitterName]',
					'$_POST[ProfanerName]',
					'$_POST[ReychsNummer]',
					'$_POST[Personen1]',
					'$_POST[Strasse]',
					'$_POST[zip]',
					'$_POST[Stadt]',
					'$_POST[eMehl]',
					'$_POST[Fexung]',
					'$_POST[Personen2]',
					'$_POST[Personen3]',
					'$_POST[Personen4]',
					'$_POST[Personen5]',
					'$_POST[Personen6]',
					'$_POST[Personen7]',
					'$_POST[Personen8]'
					
				)";

		$result=mysql_query($query) or die("Could not execute query because: ".mysql_error());
		if(1== $result)
		  {
		
			?>
				 <p align="center"><b>Registration accepted</b></p> 
			<?php
		  }
		else
		  {
			  ?>
				 <p align="center"><b>Registration not accepted... Please try again</b></p> 
				<?php
		  }
?>
<form action="registerDone.php" method="post">
		<table width="100%" align="center">
		<tr  class="formRow">
			<td width="100%" colspan="2" class="formHeadingBlock">
				<span class="formHeading">Anmeldung zur Washingtonia – 17 Mai. 2014</span>
			</td>

		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr class="formRow">
			<td width="25%">
				<span class="formContent">Rittername:</span>
			</td>
			<td>
				<?php echo $_POST["RitterName"] ?>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Reychs Nummer:</span>
			</td>
			<td>
			<?php  echo $_POST["ReychsNummer"] ?>
			</td>
		</tr>

		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingPlain">
				<span class="formHeading">Profane Adresse</span>
			</td>
		</tr>

		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Strasse:</span>
			</td>
			<td>
			<?php  echo $_POST["Strasse"] ?>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">PLZ / ZIP:</span>
			</td>
			<td>
			<?php  echo $_POST["zip"] ?>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Stadt:</span>
			</td>
			<td>
			<?php  echo $_POST["Stadt"] ?>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">eMehl:</span>
			</td>
			<td>
			<?php  echo $_POST["eMehl"] ?>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen	:</span>
			</td>
			<td>
				<?php  echo $_POST["Personen1"] ?>
			</td>
		</tr>
</table>
<p>
<table>
<tr>
<td>Fällige Anmeldegebühr</td><td>Euro</td><td>USD</td>
</tr>
<tr>
<td>Brueckenzoll Hauptveranstaltung fuer (x) Personen</td><td><?php ?></td><td><?php ?></td>
</tr>
<tr>
<td>Stadtrundfahrt fuer (x) Personen</td><td><?php ?></td><td><?php ?></td>
</tr>
<tr>
<td>Geamtbetrag</td><td><?php ?></td><td><?php ?></td>
</tr>
</table>
<p><b>Anmeldung zu Vor- und Nachprogramm :</b></p>

<p><b>Select Button : 
<a href="RegisterProc.php"><input class='yui3-button success' type="button" value="Verbindlich Anmelden"></a>
<a href="javascript:form.go(-1)"><input class='yui3-button success' type="button" value="Korrigieren	">
<a href="index.php"><input class='yui3-button success' type="button" value="Abbrechen">
		</b>
</form>
        </div> <!-- /content -->

        <!-- Sidebar -->
        <div id="aside">

            <!-- News -->                    
            <h4 class="title">Links</h4>
            
            <div class="aside-in">
                <div class="aside-box">

				<?php include '100JahreMenu.php'; ?>
                
                </div> <!-- /aside-box -->
            </div> <!-- /aside-in -->
            
            <!-- Contact -->
            <h4 class="title">Contact</h4>

			<?php include 'Contact.php'; ?>
   
        </div> <!-- /aside -->
    
    </div> <!-- /cols -->
    <div id="cols-bottom"></div>
	</div>
  </body>
</html>