<?php
$filename = "Report"."_".date('Ymd').".xls";
header("Content-type:application/vnd.ms-excel");
// It will be called downloaded.pdf
header("Content-Disposition:inline;filename=$filename;");
?>

<?php
include "RegisterListGen.php";
?>

<script language="Javascript">
	alert("There are no Records for the selected Reporting criteria !!!");
	window.close();
</script>				

