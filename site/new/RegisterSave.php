<?php
include("formdb.php");
?>

<?php
$query="insert into member_register
(
	Rittername,
	ProfanerName,
	ReychsNummer, 
	Personen1, 
	Strasse, 
	Country,
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
	Personen8,
	Personen9,
	Burgbaustein
) 
values
(
	'$_POST[RitterName]',
	'$_POST[ProfanerName]',
	'$_POST[ReychsNummer]',
	'$_POST[Personen1]',
	'$_POST[Strasse]',
	'$_POST[country]',
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
	'$_POST[Personen8]',
	'$_POST[Personen9]',
	'$_POST[Burgbaustein]'

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