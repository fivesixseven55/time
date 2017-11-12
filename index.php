	<html>
	    <head><title>Form Result</title>
	    <link type="text/css" rel="stylesheet" href="style.css">
	    </head>
	    <body>
	     <form method = "GET" action ="graf.php">
	         <p>Razmernost matr: <br/><input type ="number" name="stroka"><br/><input type="number" name="stolbec"><br/>
	         <input type="submit" name="sumbit" value="Результат">
	         </form>
		<?php
		/*
print("Name: ".htmlspecialchars($_GET["first_name"]). "<br />");
print("Surname: ".htmlspecialchars($_GET["surname"])."<br />");
print("Age: ".htmlspecialchars($_GET["age"])."<br />");
print("Gender: ".htmlspecialchars($_GET["Gender"]));
	//	print("hello " .htmlspecialchars($_POST["first_name"]). "!\n");

*/
// Математическое моделирование химических процессов
$G=array (array(-1,-1, 1,1, 0, 0, 0, 0,0),
          array( 0, 0,-1,2,-1, 1, 0, 0,0),
          array( 0, 1, 0,0, 0,-1, 1, 0,0),
          array( 0,-1, 0,1,-1, 0, 0, 1,0),
          array( 0, 1, 0,0, 0, 0,-1,-1,1)); 
for ($i=0;$i<5;$i++){
    for ($j=0;$j<9;$j++){
        print($G[$i][$j]." ");
    }
    echo ("<br>");
}
$A=array (array(1,4,0,0),
          array(0,0,1,0),
          array(1,2,1,0),
          array(0,2,0,0),
          array(0,2,0,1),
          array(1,0,1,1),
          array(1,0,0,1),
          array(0,0,1,1),
          array(1,0,0,2));
for ($i=0;$i<9;$i++){
    for ($j=0;$j<4;$j++){
        print($A[$i][$j]." ");
    }
    echo ("<br>");
}  
for ($i=0;$i<5;$i++){
    for ($j=0;$j<9;$j++){
        $G[$i][$j]*$A[$j][$i];
    }
    echo ("<br>");
}

function addTD ( $st ){
	$sssr = "\t"."<td>".$st."</td>";
	return $sssr;
}

		$host = 'localhost';
		$database = 'host1625690';
		$user = 'host1625690';
		$password = 'e1b464d1';
		
	$link = mysqli_connect($host, $user, $password, $database);
      $string_query = "SELECT * FROM `stock`";
      echo "<br>";
    echo "<br>".$string_query."<br>";

    $result = mysqli_query( $link, $string_query);
    echo "\n"."<table>"."\n";

    while ($line = mysqli_fetch_array($result)) {
    	echo "<td>"."\n";
    		echo addTD ( $line['id_equipment']);
    		echo addTD ( $line['name_equipment']);
    		echo addTD ( $line['amount']);
    		echo addTD ( $line['collateral_value']);
    		echo addTD ( $line['remain']);
    	echo "\n</tr>"."\n";
    }
    	echo "</table>"."\n";
    	mysqli_free_result ( $result );
    	mysqli_close ( $link );
    	
?>
<form action = "search.php" method = "GET">
    <p>Параметры поиска: <input type="text" name ="search">
    <input type = "submit" name = "submit" value = "Запрос">
    <input type = "reset">
    </form>
    
		</body>
		    </html>