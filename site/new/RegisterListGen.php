<?php
include "formdb.php";
?>

<table id="Registration" border="1" width="100%" cellspacing="1" cellpadding="4">
<tr>
<th>ID</th>
<th>Rittername</th>
<th>ProfanerName</th>
<th>ReychsNummer</th>
<th>Personen1</th>
<th>Strasse</th>
<th>Country</th>
<th>ZIP</th>
<th>Stadt</th>
<th>eMehl</th>
<th>Fexung</th>
<th>Personen2</th>
<th>Personen3</th>
<th>Personen4</th>
<th>Personen5</th>
<th>Personen6</th>
<th>Personen7</th>
<th>Personen8</th>
<th>Personen9</th>
<th>Burgbaustein</th>
</tr>

<?php
$Assetrow;
$tmpOwner;

// Report query building starts here


		$Regquery="SELECT * FROM member_register ";
// Report query building ends here


/*-------------------------------------------------*/

$result = mysql_query($Regquery) or die("Could not execute query because: ".mysql_error());
if(mysql_num_rows($result))
{


$tmpCounter=1;


while( ($Regrow = mysql_fetch_object($result)))
{

$tmpID = $Regrow->ID;
$tmpRittername = $Regrow->Rittername;
$tempProfanerName = $Regrow->ProfanerName;
$tempReychsNummer = $Regrow->ReychsNummer;
$tempPersonen1 = $Regrow->Personen1;
$tempStrasse = $Regrow->Strasse;
$tempCountry = $Regrow->Country;
$tempZIP = $Regrow->ZIP;
$tempStadt = $Regrow->Stadt;
$tempeMehl = $Regrow->eMehl;
$tempFexung = $Regrow->Fexung;
$tempPersonen2 = $Regrow->Personen2;
$tempPersonen3 = $Regrow->Personen3;
$tempPersonen4 = $Regrow->Personen4;
$tempPersonen5 = $Regrow->Personen5;
$tempPersonen6 = $Regrow->Personen6;
$tempPersonen7 = $Regrow->Personen7;
$tempPersonen8 = $Regrow->Personen8;
$tempPersonen9 = $Regrow->Personen9;
$tempBurgbaustein = $Regrow->Burgbaustein;
$tmpmod = fmod($tmpCounter,2);
if (0 == $tmpmod)
{	
?>
<tr  class="alt">
<?
}
else
{
?>
<tr>
<?php
}
?>

<td><?php echo $tmpID ?></td>
<td><?php echo $tmpRittername ?></td>
<td><?php echo $tempProfanerName ?></td>
<td><?php echo $tempReychsNummer ?></td>
<td><?php echo $tempPersonen1 ?></td>
<td><?php echo $tempStrasse ?></td>
<td><?php echo $tempCountry ?></td>
<td><?php echo $tempZIP ?></td>
<td><?php echo $tempStadt ?></td>
<td><?php echo $tempeMehl ?></td>
<td><?php echo $tempFexung ?></td>
<td><?php echo $tempPersonen2 ?></td>
<td><?php echo $tempPersonen3 ?></td>
<td><?php echo $tempPersonen4 ?></td>
<td><?php echo $tempPersonen5 ?></td>
<td><?php echo $tempPersonen6 ?></td>
<td><?php echo $tempPersonen7 ?></td>
<td><?php echo $tempPersonen8 ?></td>
<td><?php echo $tempPersonen9 ?></td>
<td><?php echo $tempBurgbaustein ?></td>
</tr>
<?php
$tmpCounter=$tmpCounter+1;
}
}
else
{
	echo "No Record Present !!!";
?>
		
<?php
}
?>
</table>