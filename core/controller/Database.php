<?php


class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="root";$this->pass="root";$this->host="localhost";$this->ddbb="hotelpremium";
	} 


	//OJO TIENES QUE CAMBIAR LAS 2******************************************
	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb,3307);
		$con->query("set sql_mode=''");
		return $con;
	}

	//OJO TIENES QUE CAMBIAR LAS 2******************************************
	function connect1(){
		$db = new PDO("mysql:host=$this->host;port=3307;",$this->user,$this->pass);
		$db->exec("use `$this->ddbb`");
		return $db;	
	} 

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}

	
}





?>
