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
		elseif ($_SESSION['role']=="admin") 
		{
			// Get one row data from tbl_accounts
			// getRowData(tbl_name ie. accounts|profiles|posts, acct_id);
			$account = $this->model->getRowData('accounts', $_SESSION['acct_id']);
			$profile = $this->model->getRowData('profiles', $_SESSION['acct_id']);
			// Function to get joined row data for table posts and accounts
			$posts = $this->model->getJoinData();
			$followed = $this->model->getFollowingList($_SESSION['acct_id']);
			$follower = $this->model->getFollowerList($_SESSION['acct_id']);

			$posts_arr = [];
			while($row = mysqli_fetch_assoc($posts))
			{
				$posts_arr[] = $row;
			}
			$posts_arr = array_reverse($posts_arr, true);

			$followed_arr = [];
			while($row = mysqli_fetch_assoc($followed))
			{
				$followed_arr[] = $row;
			}
			$follower_arr = [];
			while($row = mysqli_fetch_assoc($follower))
			{
				$follower_arr[] = $row;
			}
			// print_r($followed_arr);
			// print_r($follower_arr);


			include('view/admin-home.php');
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

			if (isset($_POST['btn_delComics']))
			{
				$del_post = $_POST['del_id'];
				$this->model->deletePost($_SESSION['acct_id'], $del_post);
				echo "<script>window.location.href = '/linist/'</script>";
			}
			
			if(isset($_POST['btn_unfollow']))
			{	
				$username = $_POST['username'];
				$url = $_SERVER['REQUEST_URI'];
				$accounts = $this->model->getTableData('accounts');
				while($account = mysqli_fetch_assoc($accounts))
				{
					if($account['username']==$username)
					{
						$following_id = $account['id'];
					}
				}
				$this->model->unfollow($_SESSION['acct_id'], $following_id);
				echo "<script>window.location.href='$url'</script>";
			}
		} 
		else
		{

			// Get one row data from tbl_accounts
			// getRowData(tbl_name ie. accounts|profiles|posts, acct_id);
			$account = $this->model->getRowData('accounts', $_SESSION['acct_id']);
			// Get row data from tbl_profiles
			$profile = $this->model->getRowData('profiles', $_SESSION['acct_id']);
			$posts = $this->model->getAccountPosts($_SESSION['acct_id']);
			$followed = $this->model->getFollowingList($_SESSION['acct_id']);
			$follower = $this->model->getFollowerList($_SESSION['acct_id']);
			$posts_arr = [];
			while($row = mysqli_fetch_assoc($posts))
			{
				$posts_arr[] = $row;
			}
			$posts_arr = array_reverse($posts_arr, true);

			$followed_arr = [];
			while($row = mysqli_fetch_assoc($followed))
			{
				$followed_arr[] = $row;
			}

			$follower_arr = [];
			while($row = mysqli_fetch_assoc($follower))
			{
				$follower_arr[] = $row;
			}

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

			if (isset($_POST['btn_delComics']))
			{
				$del_post = $_POST['del_id'];
				$this->model->deletePost($_SESSION['acct_id'], $del_post);
				echo "<script>window.location.href = '/linist/'</script>";
			}

			if(isset($_POST['btn_unfollow']))
			{	
				$username = $_POST['username'];
				$url = $_SERVER['REQUEST_URI'];
				$accounts = $this->model->getTableData('accounts');
				while($account = mysqli_fetch_assoc($accounts))
				{
					if($account['username']==$username)
					{
						$following_id = $account['id'];
					}
				}
				$this->model->unfollow($_SESSION['acct_id'], $following_id);
				echo "<script>window.location.href='$url'</script>";
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
					// Function for admin to follow new users
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
		$follows = $this->model->getFollowing($id);

		$posts_arr = [];
		while($row = mysqli_fetch_assoc($posts))
		{
			$posts_arr[] = $row;
		}
		$posts_arr = array_reverse($posts_arr);

		$post_ctr = 0;
		$img = '';
		$title = '';
		$desc = '';
		foreach ($posts_arr as $post) 
		{
			if($getCond)
			{
				if($post_ctr==$_GET['page'])
				{
					$img = $post['imgLink'];
					$title = $post['title'];
					$desc = $post['descript'];
					$date = $post['post_date'];
				}
			}
			else
			{
				echo "<script>window.location.href='/linist/".$account['username']."?page=0'</script>";
				break;
			}
			$post_ctr++;
		}

		include('view/profile.php');

		// Function to open random comic page of the same author
		if(isset($_POST['btn_rand']))
		{
			$rand = rand(0, $post_ctr-1);
			while($rand == $_GET['page'])
			{
				$rand = rand(0, $post_ctr-1);
			}
			echo "<script>window.location.href='/linist/".$account['username']."?page=".$rand."'</script>";
		}

		if(isset($_POST['btn_follow']))
		{
			$username = $_POST['username'];
			// URL for page redirection
			$url = $_SERVER['REQUEST_URI'];
			
			$accounts = $this->model->getTableData('accounts');
			while($account = mysqli_fetch_assoc($accounts))
			{
				if($account['username']==$username)
				{
					$following_id = $account['id'];
				}
			}
			$this->model->follow($_SESSION['acct_id'], $following_id);
			echo "<script>window.location.href='$url'</script>";
		}

		if(isset($_POST['btn_unfollow']))
		{
			$username = $_POST['username'];
			$url = $_SERVER['REQUEST_URI'];
			$accounts = $this->model->getTableData('accounts');
			while($account = mysqli_fetch_assoc($accounts))
			{
				if($account['username']==$username)
				{
					$following_id = $account['id'];
				}
			}
			$this->model->unfollow($_SESSION['acct_id'], $following_id);
			echo "<script>window.location.href='$url'</script>";
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