 <link type="text/css" rel="stylesheet" href="style.css">
<?php
$_POST['username'] = 'fdrt';
$_POST['password'] = "' OR ''='";
$query = "SELECT * FROM users WHERE user='{$_POST['username']}' AND password='{$_POST['password']}'";
mysqli_query($query);
// посмотрим, какой запрос будет отправлен в MySQL:
echo $query;
//include 'index.php';

      function addTD ( $st ){
	$sssr = "\t"."<td>".$st."</td>";
	return $sssr;
}
        $host = 'localhost';
	    $database = 'host1625690';
	  	$user = 'host1625690';
	  	$password = 'e1b464d1';
print($_GET['search']);
$t=$_GET['search'];
	$link = mysqli_connect($host, $user, $password, $database);
      
      if ($t=="stock"){
      $string_query = "SELECT * FROM `$t`";
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
      }

      else if ($t=="hire"){
       $string_query = "SELECT * FROM `$t`";
      echo "<br>";
    echo "<br>".$string_query."<br>";

    $result = mysqli_query( $link, $string_query);
    echo "\n"."<table>"."\n";

    while ($line = mysqli_fetch_array($result)) {
    	echo "<td>"."\n";
    		echo addTD ( $line['id_p/p']);
    		echo addTD ( $line['klient']);
    		echo addTD ( $line['equipment']);
    		echo addTD ( $line['date_of_issue']);
    		echo addTD ( $line['period_of_return']);
    		echo addTD ( $line['return_mark']);
    		echo addTD ( $line['rental_payment']);
    	echo "\n</tr>"."\n";
    }
    	echo "</table>"."\n";
      }   
      else {
        $string_query = "SELECT * FROM `$t`";
      echo "<br>";
    echo "<br>".$string_query."<br>";

    $result = mysqli_query( $link, $string_query);
    echo "\n"."<table>"."\n";

    while ($line = mysqli_fetch_array($result)) {
    	echo "<td>"."\n";
    		echo addTD ( $line['id_customers']);
    		echo addTD ( $line['surname']);
    		echo addTD ( $line['name']);
    		echo addTD ( $line['patronymic']);
    		echo addTD ( $line['phone']);
    		echo addTD ( $line['address']);
    		echo addTD ( $line['passport_data']);
    		echo addTD ( $line['lien']);
    	echo "\n</tr>"."\n";
    }
    	echo "</table>"."\n";  
      }
    	mysqli_free_result ( $result );
    	mysqli_close ( $link );
/*class Coor{
    var $name;
    
    function Getname() {
      echo $this ->name;  
    }
    function Setname($name){
    	$this ->name = $name;
    	$this ->Getname();
    }
}

$object = new Coor;
$object ->Setname("Nick");
echo "$host";
*/
?>