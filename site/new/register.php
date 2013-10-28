<!DOCTYPE html>
<html lang="en">
  <head>
	<script src="scripts/validateForm.js"></script>
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
<!-- <form action="registerDone.php" method="post"> -->
<form name="registerDone" method="post" action="registerDisp.php#top" onSubmit="return checkme()">
		<table width="90%" align="center">
		<tr  class="formRow">
			<td width="90%" colspan="2" class="formHeadingBlock">
				<span class="formHeading">I. Anmeldung zur FESTSIPPUNG: Samstag 17.Mai, 17- 22 Uhr:</span>
				<i>Note: All red fields are mandatory<i>
			</td>

		</tr>
		<tr  class="formRowBlank">
			<td width="90%" colspan="2" >
				
				<i>Note: All red fields are mandatory, gray fields are optional<i>
			</td>

		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr class="formRow">
			<td width="25%">
				<span class="formContent">Ritter Name:</span>
			</td>
			<td>
				<input class="formTextbox" name="RitterName" type="Input" value="" size="30" maxlength="20">
				
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Profaner Name:</span>
			</td>
			<td>
				<input class="formTextbox" name="ProfanerName" type="Input" value="" size="30" maxlength="20">
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Reychs Nummer:</span>
			</td>
			<td>
				<input class="formTextbox" name="ReychsNummer" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextbox" name="Personen1" type="Input" value="0" size="30" maxlength="2">
				Kosten p.P. &euro; 80  oder US$100
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
				<input class="formTextbox" name="Strasse" type="Input" value="" size="30" maxlength="50">
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Country:</span>
			</td>
			<td>
				<?php include("CountryDropDown.php"); ?>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">PLZ / ZIP:</span>
			</td>
			<td>
				<input class="formTextbox" name="zip" type="Input" value="" size="30" maxlength="10">
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Stadt:</span>
			</td>
			<td>
				<input class="formTextbox" name="Stadt" type="Input" value="" size="30" maxlength="10">
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">eMehl:</span>
			</td>
			<td>
				<input class="formTextbox" name="eMehl" type="Input" value="" size="30" maxlength="20">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Fexung:</span> 
			</td>
			<td>
				<input class="formTextboxOptional" name="Fexung" type="Input" value="0" size="30" maxlength="2">
				Dauer in Min : (2 number)
			</td>
		</tr>
				<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingBlock">
				<span class="formHeading">II. Stadtundfahrt : Samstag 17.Mai, 11-15Uhr; start Hotel Mayflower:</span>
			</td>

		</tr>
				
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen2" type="Input" value="0" size="30" maxlength="4">
				Kosten p.P. &euro;25  oder US$30
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr >
			<td width="100%" colspan="2" class="formHeadingBlock">
				<span class="formHeading">III. Katerfruehstueck: Sonntag 18. Mai,  8-10 Uhr:</span>
			</td>

		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen3" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingBlock">
				<span class="formHeading">IV. AUSFLUG Mt. VERNON : Sonntag 18.Mai, ca 11- 17Uhr:</span>
			</td>

		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen4" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr class="formRow">
			<td width="100%" colspan="2" class="formHeadingBlock">
				<span class="formHeading">V. Vorprogramm:</span>
			</td>
		</tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingPlain">
				<span class="formHeading">a) Ausflug nach Williamsburg,  Mittwoch 14.Mai, 7 Uhr</span>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen5" type="Input" value="0" size="30" maxlength="4">
				
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingPlain">
				<span class="formHeading">b) Flugrossausflug nach Lancaster, Donnerstag 15.Mai, 10 Uhr</span>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen6" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingPlain">
				<span class="formHeading">c) Golf  Donnerstag 15.Mai  11-16Uhr</span>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen7" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingPlain">
				<span class="formHeading">d) Motor-Drahtesel-Ausritt Harpers Ferry, Freitag 16. Mai 10- 17Uhr</span>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen8" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td width="100%" colspan="2" class="formHeadingPlain">
				<span class="formHeading">e) Vorfeier: gemeinsames Abendessen in der Tavern,  Freitag 16.Mai, 19 Uhr</span>
			</td>
		</tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Anzahl Personen:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Personen9" type="Input" value="0" size="30" maxlength="4">
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr class="formRow">
			<td width="30%">
				<span class="formContent">Burgbaustein:</span>
			</td>
			<td>
				<input class="formTextboxOptional" name="Burgbaustein" type="Input" value="0" size="30" maxlength="3">
				USD
			</td>
		</tr>
		<tr id="formRowBlank"><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td colspan="2" align="center">
				<input class='yui3-button success' type="submit" value="Submit">
				<input class='yui3-button error' type="reset" value="Cancel">
			</td>
		</tr>
</table>
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