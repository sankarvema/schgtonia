
<?php
				
$dollar1=$_POST["Personen1"] * 100;
$euro1 = $_POST["Personen1"] * 80;
  
if($_POST["Personen2"] != "")
{
	$dollar2 = $_POST["Personen2"] * 30;
	$euro2 = $_POST["Personen2"] * 25;
}
?>

<center>
<table class="table-style01" style="width:80% !important" border="1">
<tr>
<td>Fällige Anmeldegebühr</td><td>USD</td><td>Euro</td>
</tr>
<tr>
<td>Brueckenzoll Hauptveranstaltung fuer (<?php echo $_POST["Personen1"]?>) Personen</td>
<td align="right"><?php echo $dollar1 ?></td>
<td align="right"><?php echo $euro1 ?></td>
</tr>
<tr>
<td>Stadtrundfahrt fuer (<?php echo $_POST["Personen2"]?>) Personen</td>
<td align="right"><?php echo $dollar2 ?></td>
<td align="right"><?php echo $euro2 ?></td>
</tr>
<tr>
<td>Geamtbetrag</td>
<td align="right"><?php echo ($dollar1 + $dollar2) ?></td>
<td align="right"><?php echo ($euro1 + $euro2)?></td>
</tr>
</table>
</center>
<p><b>Anmeldung zu Vor- und Nachprogramm :</b></p>
<ol>


<?php if($_POST["Personen2"] != "") 
{ 
?>
	<li>Stadtundfahrt : Samstag 17.Mai, 11-15Uhr; start Hotel Mayflower</li>
<?php
} 
?>

<?php if($_POST["Personen3"] != "") 
{ 
?>
	<li>Katerfruehstueck: Sonntag 18. Mai, 8-10 Uhr</li>
<?php
} 
?>

<?php if($_POST["Personen4"] != "") 
{ 
?>
	<li>AUSFLUG Mt. VERNON : Sonntag 18.Mai, ca 11- 17Uhr</li>
<?php
} 
?>

<?php if($_POST["Personen5"] != "") 
{ 
?>
	<li>Vorprogramm: Ausflug nach Williamsburg, Mittwoch 14.Mai, 7 Uhr</li>
<?php
} 
?>

<?php if($_POST["Personen6"] != "") 
{ 
?>
	<li>Vorprogramm: Flugrossausflug nach Lancaster, Donnerstag 15.Mai, 10 Uhr</li>
<?php
} 
?>

<?php if($_POST["Personen7"] != "") 
{ 
?>
	<li>Vorprogramm: Golf Donnerstag 15.Mai 11-16Uhr</li>
<?php
} 
?>

<?php if($_POST["Personen8"] != "") 
{ 
?>
	<li>Vorprogramm: Motor-Drahtesel-Ausritt Harpers Ferry, Freitag 16. Mai 10- 17Uhr</li>
<?php
} 
?>

<?php if($_POST["Personen9"] != "") 
{ 
?>
	<li>Vorprogramm: Vorfeier gemeinsames Abendessen in der Tavern, Freitag 16.Mai, 19 Uhr</li>
<?php
} 
?>

</ol>