<?php

require_once('model/model.php');

protected $model = new Model();

$username = $_POST['username'];
$password = sha1($_POST['password']);

// Get data from tbl_accounts
$accounts = $model->getTableData('accounts');

$status = false;
while($row = mysqli_fetch_assoc($accounts)) 
{
	if($row['username']==$username && $row['password'] == $password)
	{
		$_SESSION['acct_id']=$row['id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
		$_SESSION['fullname']=$row['fullname'];
		echo "true";
		$status = true;
		echo "<script>console.log('true');</script>"
	}
}

if(!$status)
{
	echo "false";	
	echo "<script>console.log('false');</script>"

}

?>