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
		
<?php
include("RegisterSave.php");
?>
		<p align="center"><b>Eure Vor-Anmeldung wurde erhalten</b></p>

		<p>Wir bitten zu beachten, dass die Anmeldung aber erst dann als erfolgt angesehen wird, wenn auch die Berappung für das Hauptprogramm eingegangen ist. 

<?php
include("RegisterEventDisplay.php");
?>

		<p><b><u>ZAHLUNGSMȌGLICHKEITEN & MODALITAETEN</u></b>

<p>1.	<b>US Dollar Scheck</b> an den Schatzmeister schicken (Bitte Ritternamen vermerken)
<br/>(Rt. Patentikus, Prince Butler, 2 Eden River, Williamsburg , VA23188, USA). 

<p>2.	<b>Bezahlung mit Kreditkarte</b> (Visa und Mastercard) (bevorzugte Bezahlungsform für europȁische Sassen und Begleitung). Dazu bitte Rt. Patentikus, den Schatzmeister anrufen (001-757-345-0855) oder dem Schatzmeister ein email mit der Telephonnummer schicken, damit er anruft und die Abwicklung gemeinsam mit dem Sassen vornimmt (dauert max. 5 Minuten). Wir haben Kreditkartengebühren zu berappen, die wir auf die Anmeldenden umlegen müssen. Bei Kreditkartenzahlung sind daher <b>5$ oder 3.70 Euro an Gebühren</b> zusätzlich zu berappen.

<p>3.	Europȁische Sassen, die keine Mȍglichkeit haben mit Kreditkarte zu zahlen, kȍnnen die Berappung auch per <b>Banküberweisung</b> auf das deutsche Konto unseres Ritters Wiesokrates vornehmen. Bitte kontaktiert Ritter Wiesokrates per e-mail und er wird Euch die Bankverbindung zukommen lassen (wiesokrates@mac.com). 

<p><a href="javascript:window.print()"><img src="images/print_printer.png" height="30px" width="40px"/>&nbsp;&nbsp;(Print Button this page)</a>

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