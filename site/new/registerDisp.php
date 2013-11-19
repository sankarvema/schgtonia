<!DOCTYPE html>
<html lang="en">
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
		    

<form action="RegisterProc.php" method="post">
	<input type="hidden" name="RitterName" value='<?php echo $_POST["RitterName"] ?>'/>
	<input type="hidden" name="ProfanerName" value='<?php echo $_POST["ProfanerName"] ?>'/>
	<input type="hidden" name="ReychsNummer" value='<?php echo $_POST["ReychsNummer"] ?>'/>
	<input type="hidden" name="Personen1" value='<?php echo $_POST["Personen1"] ?>'/>
	<input type="hidden" name="Strasse" value='<?php echo $_POST["Strasse"] ?>'/>
	<input type="hidden" name="zip" value='<?php echo $_POST["zip"] ?>'/>
	<input type="hidden" name="country" value='<?php echo $_POST["country"] ?>'/>
	<input type="hidden" name="Stadt" value='<?php echo $_POST["Stadt"] ?>'/>
	<input type="hidden" name="eMehl" value='<?php echo $_POST["eMehl"] ?>'/>
	<input type="hidden" name="Fexung" value='<?php echo $_POST["Fexung"] ?>'/>
	<input type="hidden" name="Personen2" value='<?php echo $_POST["Personen2"] ?>'/>
	<input type="hidden" name="Personen3" value='<?php echo $_POST["Personen3"] ?>'/>
	<input type="hidden" name="Personen4" value='<?php echo $_POST["Personen4"] ?>'/>
	<input type="hidden" name="Personen5" value='<?php echo $_POST["Personen5"] ?>'/>
	<input type="hidden" name="Personen6" value='<?php echo $_POST["Personen6"] ?>'/>
	<input type="hidden" name="Personen7" value='<?php echo $_POST["Personen7"] ?>'/>
	<input type="hidden" name="Personen8" value='<?php echo $_POST["Personen8"] ?>'/>
	<input type="hidden" name="Personen9" value='<?php echo $_POST["Personen9"] ?>'/>
	<input type="hidden" name="Burgbaustein" value='<?php echo $_POST["Burgbaustein"] ?>'/>
				<p align="right"><a name="top" >Top</a></p>
		<table width="90%" align="center">
		<tr  class="formRow">
			<td width="90%" colspan="2" class="formHeadingBlock">
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


<?php
include("RegisterEventDisplay.php");
?>

<p>
	<b>
	Select Button : 
	<input class='yui3-button success' type="submit" value="Verbindlich Anmelden"></a>
	<a href="javascript:history.go(-1)"><input class='yui3-button success' type="button" value="Korrigieren">
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