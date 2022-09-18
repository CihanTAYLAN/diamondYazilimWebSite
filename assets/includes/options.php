<?
	$host="localhost";
	$kname="taylanh1_dia";
	$pass="Diamondyazilim55354170718";
	$db="taylanh1_dia";
	
	$conn=mysqli_connect($host,$kname,$pass);
	 mysqli_select_db($conn,$db);
	if($conn)
	{
	
	}
	else
	{
		echo "Connect To Error.".mysqli_error();
	}
	mysqli_query($baglanti,"set names utf8");
	mysqli_query($baglanti,"set character set utf8");
	mysqli_query($baglanti,"set collation_connection ='utf8_turkish_ci'");
	$ajax="includes/ajax.php";
?> 