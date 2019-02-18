<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class java_script extends CI_Model 
{
	public function username($name)
	{
		if(preg_match("/^[_\.a-zA-Z-]/", $name))
		{
			$mysql=mysql_query("SELECT * from siswa where username LIKE '$name%'");
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
}