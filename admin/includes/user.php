
<?php




class User extends db_object {

    protected static $db_table="users";
    protected static $db_table_fields=array('username','password','first_name','last_name');
	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;



	public static function varify_user($username,$password){

	    global $database;

	    $username=$database->escape_string($username);
	    $password=$database->escape_string($password);

	    $sql="select * from ".self::$db_table." where ";
        $sql .="username='{$username}' ";
        $sql .="AND password='{$password}' ";
	    $sql .="LIMIT 1";

        $the_result_array = self::find_by_query($sql);

        return !empty($the_result_array)? array_shift($the_result_array): false;



    }

}












