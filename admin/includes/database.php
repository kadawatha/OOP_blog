<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/6/2017
 * Time: 2:59 PM
 */

include( "config.php" );

class Database{

	public $connection;

	function __construct() {
		$this->open_db_connection();
	}


	public function open_db_connection(){

    $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

     if($this->connection->connect_errno) {

	die("Database filed boy try again". mysqli_error());

   }

 }


public function query($sql){

$result = mysqli_query($this->connection,$sql);

return $result;

}

private function confirm_query($result){

	if (!result) {
		# code...
		die("query connection die");
	}

}




// escape variables for security
public function escape_string($string){


$escaped_string = mysqli_real_escape_string($this->connection,$string);
return $escaped_string;


}


public function the_insert_id(){
		return mysqli_insert_id($this->connection);
}





}

$database = new Database();


?>






