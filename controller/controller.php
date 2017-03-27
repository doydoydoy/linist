<?php

require_once('model/model.php');

/**
* 
*/
class Controller
{
	protected $model;

	function __construct()
	{
		$this->model = new Model();
	}

	function main()
	{
		if(!isset($_SESSION['username'])){
			$_SESSION['username']="";
			$_SESSION['role']="";
			include('view/intro.php');
		}
		elseif($_SESSION['username']=="")
		{
			include('view/intro.php');
		} 
		else
		{

			// Get one row data from tbl_accounts
			// getRowData(tbl_name ie. accounts|profiles|posts, acct_id);
			$account = $this->model->getRowData('accounts', $_SESSION['acct_id']);
			// Get row data from tbl_profiles
			$profile = $this->model->getRowData('profiles', $_SESSION['acct_id']);
			
			// Get profile data for specific acct_id   ||  Not working yet
			// $profile = $this->model->getProfileData($_SESSION['acct_id']);


			include('view/home.php');
			echo "<script>alert('Hello ".$_SESSION['username']."')</script>";

		}		
	}

	function login()
	{
		include('view/login.php');
		if(isset($_POST['btn_login']))
		{
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			
			// Get data from tbl_accounts
			$accounts = $this->model->getTableData('accounts');

			while($row = mysqli_fetch_assoc($accounts)) 
			{
				$this->console('ooo');
				if($row['username']==$username && $row['password'] == $password)
				{
					$_SESSION['acct_id']=$row['id'];
					$_SESSION['username']=$row['username'];
					$_SESSION['role']=$row['role'];
					$_SESSION['fullname']=$row['fullname'];
					header('location: /linist/dashboard');
				}
			}
		}
	}

	function register()
	{	
		include('view/register.php');

		if(isset($_POST['btn_register']))
		{
			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$role = 'regular';
			$conf_pw = $_POST['conf-password'];
			if(($password == $conf_pw)&&!($password=="")&&!(substr($password, 0, 0)==" "))
			{
				if (!($username=="")&&!(substr($username, 0, 0)==" ")) 
				{
					$sha_pass = sha1($password);
					$db = $this->model->connectDB();
					$sql = "INSERT INTO tbl_accounts (username, password, role, fullname) values ('$username','$sha_pass', '$role', '$fullname');";
					
					if(mysqli_query($db, $sql))
					{
						mysqli_query($db, "INSERT INTO tbl_profiles(acct_id) values (".$db->insert_id.")");
						echo "<script>alert('Successfully registered.');</script>";
						echo "<script>window.location.href = 'login'</script>";
					}
					else
					{
						$this->loginError('try');
					}
					$this->model->closeDB($db);
					session_destroy();
				}
				else
				{
					$this->loginError('user');
				}

			}
			else
			{
				header('Refresh: 0');
				$this->loginError('pass');
			}
		}

	}

	function logout()
	{
		session_destroy();
		header('location: /linist');
	}

	function loginError($x)
	{
		if ($x == 'user') 
		{
			echo "<script>alert('Invalid Username. Please reenter your username. Only alphanumeric characters are allowed for username.');</script>";
		}
		elseif ($x == 'pass') 
		{
			echo "<script>alert('Password mismatch. Double check your password entries.');</script>";
		}
		elseif ($x == 'try') 
		{
			echo "<script>alert('We are having an issue with our database. Please stay tuned.');</script>";
		}
	}




	// Use only for debugging
	function console($text)
	{
		echo "<script>console.log('".$text."');</script>";
	}

}




?>