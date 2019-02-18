<?php
include "konek.php";
if($_GET['stat']=='guru')
{
	$status=$_GET['stat'];
	$user2=$_GET['username'];
	if(preg_match("/^[_\.a-zA-Z-]/", $user2))
	{
		$mysql2=mysql_query("SELECT * from guru where username LIKE '$user2%' ");
		while($d=mysql_fetch_assoc($mysql2))
		{
			echo "ada";
		}
	}
	else
	{
		echo "salah";
	}
}


if($_GET['stat']=='siswa')
{

	$status=$_GET['stat'];
	$user=$_GET['username'];
	if(preg_match("/^[_\.a-zA-Z-]/", $user))
	{
		$mysql=mysql_query("SELECT * from siswa where username LIKE '$user%'");
		while($x=mysql_fetch_assoc($mysql))
		{
			echo "ada";
		}
	}
	else
	{
		echo'salah';		
	}
}
?>