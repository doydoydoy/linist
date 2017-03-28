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
					echo "<script>window.location.href= '/linist/dashboard'</script>";
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
			$sha_pass = sha1($password);
			if(($password == $conf_pw)&&!($password=="")&&!(substr($password, 0, 0)==" "))
			{
				if (!($username=="")&&!(substr($username, 0, 0)==" ")) 
				{
					$this->model->insertNewAccount($username, $sha_pass, $role, $fullname);
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

	function settings()
	{
		$auth = $this->authenticate();
		if($auth==0)
		{
			// Get row data from tbl_profiles
			$account = $this->model->getRowData('accounts', $_SESSION['acct_id']);
			$profile = $this->model->getRowData('profiles', $_SESSION['acct_id']);
			include('view/editprofile.php');

			if(isset($_POST['btn_profileInfo']))
			{
				$fullname = $_POST['fullname'];
				$bio = $_POST['bio'];
				$series = $_POST['series'];
				$work = $_POST['work'];
				$profile_img_link = $_POST['profile_img'];
				$location = $_POST['location'];
				$website = $_POST['website'];

				$db = $this->model->connectDB();
				$sql1 = "UPDATE tbl_accounts SET fullname='".$fullname."' WHERE id='".$_SESSION['acct_id']."'";
				$sql2 = "UPDATE tbl_profiles SET descript='".$bio."', location='".$location."', work='".$work."', profile_img_link='".$profile_img_link."', website='".$website."', series='".$series."' WHERE acct_id='".$_SESSION['acct_id']."'";
				if(mysqli_query($db, $sql1)&&mysqli_query($db, $sql2))
				{
					echo "<script>alert('Updated successfully.');</script>";
					echo "<script>window.location.href = '/linist/settings'</script>";
				}
			}

		}
		else
		{
			header('location: /linist');
		}
		
	}

	function settAccount()
	{
		$auth = $this->authenticate();
		if($auth==0)
		{

		}
		else
		{
			header('location: /linist');
		}
	}

	function settAppearance()
	{

	}

	function account($id)
	{
		$account = $this->model->getRowData('accounts',$id);
		$profile = $this->model->getRowData('profiles',$id);		
		include('view/profile.php');
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


	function authenticate()
	{
		// flag 0 means authenticated, flag 1 not authenticated
		$flag = 0;
		if(!isset($_SESSION['username'])){
			$_SESSION['username']="";
			$_SESSION['role']="";
			$flag = 1;
		}
		elseif($_SESSION['username']=="")
		{
			$flag = 1;
		}
		return $flag;
	}

	function getUsername()
	{
		$result = $this->model->getTableData('accounts');
		return $result;
	}


	// Use only for debugging
	function console($text)
	{
		echo "<script>console.log('".$text."');</script>";
	}

}




?>