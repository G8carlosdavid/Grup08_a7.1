<html>
<head>
	<title>EXECUCIÓ DE LA DIVISIÓ DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE L'OPERACIÓ DIVISIÓ DEL 2 OPERANDS INTRODUITS AL FORMULARI</u></p>		
		<?php
            if ($_GET["op1"] == 0 || $_GET["op2"] == 0 ) {
				$operand1 = 0;
			}
			else{
                #Obtenció del primer operand
                if ($_GET["op1"] =="") {
                    $operand1 = 0;
                }
                else{
                    $operand1 = $_GET["op1"];
                }
                #
                #Obtenció del segon operand
                if ($_GET["op2"] =="") {
                    $operand2 = 0;
                }
                else{
                    $operand2 = $_GET["op2"];
                }
            }
            if ( $operand1 == 0 ){
				$resultat = Infinit;
			}
            else{
                #Obtencio del resultat i mostrant el resultat
			    $resultat = $operand1 / $operand2;
            }
			echo "<p>El resultat de $operand1 / $operand2 és igual a $resultat</p>";			
		?>
		<a href="divisio.html">Torna a la pàgina anterior</a>
	</body>
</html>
