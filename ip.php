<!DOCTYPE html>
<html>
<head>
	<title>EXECUCIÓ DE LA DIVISIÓ DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE L'OPERACIÓ DIVISIÓ DEL 2 OPERANDS INTRODUITS AL FORMULARI</u></p>		
		<?php
            require_once(__DIR__ . '/vendor/autoload.php');
            if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"];
			}
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
            $sub = new IPv4\SubnetCalculator("$operand1", "$operand2");	
			$ipAddress        = $sub->getIPAddress();
            $subnetMask        = $sub->getSubnetMask();
            $broadcastAddress     = $sub->getBroadcastAddress();
			$addressableHostRange = $sub->getAddressableHostRange();  
            echo "<p><b>La IP és:</b> [$ipAddress / $operand2] </p>";	
            echo "<p><b>La adreça de subxarxa és:</b> [$subnetMask]</b></p>";
            echo "<p><b>El Broadcast és:</b> [$broadcastAddress]</b></p>";
            echo "<p><b>El marge és:</b> desde [$addressableHostRange[0]] <b>fins</b> [$addressableHostRange[1]]</p>";
		?>  
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>
