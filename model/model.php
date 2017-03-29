<?php

/**
* 
*/
class Model
{

	function connectDB()
	{
		$conn = new mysqli('localhost', 'root', '', 'linist');
		if (!$conn) 
		{
		    die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			return $conn;
		}
	}

	function closeDB($conn)
	{
		mysqli_close($conn);
	}

	function getTableData($request)
	{
		// SQL query to get table data
		$sql = "SELECT * from tbl_".$request;
		
		$conn = $this->connectDB();
		$result = mysqli_query($conn, $sql);

		$this->closeDB($conn);
		return $result;
	}

	function getRowData($request, $id)
	{
		$result = $this->getTableData($request);
		$data = NULL;
		while($row = mysqli_fetch_assoc($result))
		{
			if($request == 'profiles')
			{
				if ($row['acct_id']==$id)
				{
					$data = $row;
				}
			}
			else
			{
				if ($row['id']==$id) 
				{
					$data = $row;
				}
			}
		}

		return $data;

	}

	function insertNewAccount($username, $sha_pass, $role, $fullname)
	{
		$db = $this->connectDB();
		$sql = "INSERT INTO tbl_accounts (username, password, role, fullname) values ('$username','$sha_pass', '$role', '$fullname');";
		if(mysqli_query($db, $sql))
		{
			mysqli_query($db, "INSERT INTO tbl_profiles(acct_id) values (".$db->insert_id.")");
			echo "<script>alert('Successfully registered.');</script>";
			echo "<script>window.location.href = 'login'</script>";
		}
		$this->closeDB($db);
	}

	function insertNewPost($post)
	{
		$db = $this->connectDB();
		$sql = "INSERT INTO tbl_posts (descript, title, post_date, imgLink, acct_id) values ('".$post['descript']."','".$post['title']."', '".$post['post_date']."', '".$post['imgLink']."', '".$post['acct_id']."')";
		if(mysqli_query($db, $sql))
		{
			echo "<script>alert('Posted successfully.');</script>";
		}
		else
		{
			echo "<script>alert('www.');</script>";
		}
		$this->closeDB($db);
	}

	function getAccountPosts($id)
	{
		$db = $this->connectDB();
		$sql = "SELECT * FROM tbl_posts WHERE acct_id='$id'";
		$result = mysqli_query($db, $sql);
		$this->closeDB($db);
		return $result;
	}

	function editPosts($id, $edit)
	{
		$db = $this->connectDB();
		// CONTINUE HERE
		$sql = "UPDATE tbl_posts SET descript='";
		$this->closeDB($db);

	}







	/** Now working but getRowData is much more flexible **/

	// function getProfileData($id)
	// {
	// 	$sql = "SELECT *.* FROM tbl_accounts INNER JOIN tbl_profiles ON tbl_accounts.id=tbl_profiles.acct_id  WHERE id='".$id"'";
	// 	$conn = $this->connectDB();
	// 	$result = mysqli_query($conn, $sql);
	// 	$this->closeDB($conn);
	// 	echo "<script>console.log(".print_r($result).")</script>";
	// 	return $result;
	// }



}


?>