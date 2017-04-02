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
			mysqli_query($db, "INSERT INTO tbl_follows(follower_id, following_id) values (1, ".$db->insert_id.") ");
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
		}
		else
		{
			$error = $db->errno;
		    echo "<script>console.log('$error');</script>";

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

	function editPost($acct_id, $edit)
	{
		$db = $this->connectDB();
		if($acct_id==1)
		{
			$sql = "UPDATE tbl_posts SET descript='".$edit['descript']."', title='".$edit['title']."', imgLink='".$edit['imgLink']."' WHERE id=".$edit['id'];
		}
		else
		{
			$sql = "UPDATE tbl_posts SET descript='".$edit['descript']."', title='".$edit['title']."', imgLink='".$edit['imgLink']."' WHERE id=".$edit['id']." AND acct_id=".$acct_id;
		}
		if(mysqli_query($db, $sql))
		{
		}
		else
		{
			echo "<script>alert('wrong') </script>";
		}
		$this->closeDB($db);

	}

	function deletePost($acct_id, $del_id)
	{
		$db = $this->connectDB();
		$sql = "DELETE FROM tbl_posts WHERE id=$del_id";
		if(mysqli_query($db, $sql))
		{
		}
		else
		{
			echo "<script>alert('wrong') </script>";
		}
		$this->closeDB($db);
	}

	function getFollowing($id)
	{
		$db = $this->connectDB();
		$sql = "SELECT * FROM tbl_follows WHERE follower_id=$id";
		$result = mysqli_query($db, $sql);
		$this->closeDB($db);
		return $result;
	}

	function getFollowingList($id)
	{
		$db = $this->connectDB();
		$sql = "SELECT * FROM tbl_follows INNER JOIN tbl_accounts ON tbl_follows.following_id=tbl_accounts.id INNER JOIN tbl_profiles ON tbl_accounts.id=tbl_profiles.acct_id WHERE tbl_follows.follower_id=$id";
		$result = mysqli_query($db, $sql);
		$this->closeDB($db);
		return $result;
	}

	function getFollowerList($id)
	{
		$db = $this->connectDB();
		$sql = "SELECT * FROM tbl_follows INNER JOIN tbl_accounts ON tbl_follows.following_id=tbl_accounts.id INNER JOIN tbl_profiles ON tbl_accounts.id=tbl_profiles.acct_id WHERE tbl_follows.following_id=$id";
		$result = mysqli_query($db, $sql);
		$this->closeDB($db);
		return $result;	
	}



	/** Now working but getRowData is much more flexible **/

	function getJoinData()
	{
		$conn = $this->connectDB();
		$sql = "SELECT * FROM tbl_accounts INNER JOIN tbl_posts ON tbl_accounts.id=tbl_posts.acct_id ORDER BY tbl_posts.post_date ASC";
		$result = mysqli_query($conn, $sql);
		$this->closeDB($conn);
		// echo "<script>console.log(".print_r($result).")</script>";
		return $result;
	}



}


?>