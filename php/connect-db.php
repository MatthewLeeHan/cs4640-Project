<?php
class ConnectDB{
	public static $loginUser = "jc4va"; 
	public static $loginPass = "lollypop12";
	public static $host = "mysql.cs.virginia.edu";
	public static $schema = "jc4va_cs4640";
	
	public static function loginConnection(){
		$db = new mysqli(DbUtil::$host, DbUtil::$loginUser, DbUtil::$loginPass, DbUtil::$schema);
	
		if($db->connect_errno){
			echo("Could not connect to db");
			$db->close();
			exit();
		}
		
		return $db;
	}
	
}
?>

