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
			$posts = $this->model->getAccountPosts($_SESSION['acct_id']);
			
			$posts_arr = [];
			while($row = mysqli_fetch_assoc($posts))
			{
				$posts_arr[] = $row;
			}
			$posts_arr = array_reverse($posts_arr, true);


			include('view/home.php');
			if(isset($_POST['btn_submitComics']))
			{
				$post = [
				"title" => $_POST['comicTitle'],
				"descript" => $_POST['comicDesc'],
				"imgLink" => $_POST['comicImg'],
				"acct_id" => $_SESSION['acct_id'],
				"post_date" => date("Y-m-d H:i:s")
				];
				$this->console('wewew');
				$this->model->insertNewPost($post);
				$this->console('wew');
				echo "<script>window.location.href = '/linist/'</script>";
			}

			if (isset($_POST['btn_editComics'])) 
			{
				$edit_post = [
				"id" => $_POST['edit_id'],
				"title" => $_POST['edit_title'],
				"descript" => $_POST['edit_desc'],
				"imgLink" => $_POST['edit_img']
				];
				$this->console("".$_POST['edit_id']."");
				$this->model->editPost($_SESSION['acct_id'], $edit_post);
				echo "<script>window.location.href = '/linist/'</script>";
			}

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

	function account($id, $getCond)
	{
		$account = $this->model->getRowData('accounts', $id);
		$profile = $this->model->getRowData('profiles', $id);
		$posts = $this->model->getAccountPosts($id);

		$posts_arr = [];
		while($row = mysqli_fetch_assoc($posts))
		{
			$posts_arr[] = $row;
		}
		$posts_arr = array_reverse($posts_arr);

		$get = $getCond;
		$flag = 0;
		$img = '';
		$title = '';
		$desc = '';
		foreach ($posts_arr as $post) 
		{
			if($get)
			{
				if($flag==$_GET['page'])
				{
					$img = $post['imgLink'];
					$title = $post['title'];
					$desc = $post['descript'];
					$date = $post['post_date'];
					break;
				}
			}
			else
			{
				header('location: /linist/'.$account['username']."?page=".$flag);
				break;
			}
			$flag++;
		}
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