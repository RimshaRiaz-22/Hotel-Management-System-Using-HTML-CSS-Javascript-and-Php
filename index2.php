
<?php 
include 'connectindex.php';
$obj=new Database();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
//here admin is table data by html form  
$obj->saveRecords($name,$room_type,$mobile_no,$EMAIL,$staytime);
echo "Records Saved ";
}
 ?>
