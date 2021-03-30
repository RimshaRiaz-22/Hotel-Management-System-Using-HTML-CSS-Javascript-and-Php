<?php 
class Database
{
	var $servername="localhost";
	var $username="root";
	var $password="";
	var $db="reservation";
	public function connect()
	{
	$con=mysqli_connect($this->servername,$this->username,$this->password,$this->db); 
//	check connection
if ($con -> connect_error)
{
	die ("connection failed" .$connect_error);
}
echo "connection successful";

	return $con;
	}
	public function saveRecords($name,$room_type,$mobile_no,$EMAIL,$staytime)
	{
	$con=$this->connect();
	mysqli_query($con,"insert into reservation(name,room_type,mobile_no,EMAIL,staytime) values('$name','$room_type','$mobile_no','$EMAIL','$staytime')");
	}
   }
?>   