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
				if ($row['id']) 
				{
					$data = $row;
				}
			}
		}

		return $data;

	}


	/** Not working yet, will get back to you later **/

	// function getProfileData($id)
	// {
	// 	$sql = "SELECT *.* FROM tbl_accounts INNER JOIN tbl_profiles ON tbl_profiles.id=tbl_accounts  WHERE id=$id";
	// 	$conn = $this->connectDB();
	// 	$result = mysqli_query($conn, $sql);
	// 	$this->closeDB($conn);
	// 	echo "<script>console.log(".print_r($result).")</script>";
	// 	return $result;
	// }



}


?>