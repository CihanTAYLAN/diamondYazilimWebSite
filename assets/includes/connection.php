<?
	$host="localhost";
	$kname="taylanh1_dia";
	$pass="Diamondyazilim55354170718";
	$db="taylanh1_dia";
	
	@$conn=mysqli_connect($host,$kname,$pass);
	if(@$conn)
	{
		mysqli_select_db($conn,$db);
	}
	else
	{
		echo "".@mysqli_error();
	}
	@mysqli_query($conn,"set names utf8");
	@mysqli_query($conn,"set character set utf8");
	@mysqli_query($conn,"set collation_connection ='utf8_turkish_ci'");
	$ajax="assets/includes/ajax.php";
	include "php_functions.php";
?>