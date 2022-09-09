<?php
	session_start();
	require_once 'db.php';
 	
	//Support Functions
	//----------------------------------
	function loginCheck()
	{
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    		header("location: signin.php");
    		exit;
		}
	}

 	//Login Function
 	//------------------------------------------
 	if(isset($_POST['sign-in'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){


			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "SELECT * FROM user WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				 // Store data in session variables
				$_SESSION['user'] = $fetch['userId'];
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
				header("location: index.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'signin.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'signin.php'</script>
			";
		}
	}
		////Admin
	if(isset($_POST['adminSign-in'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){


			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "SELECT * FROM `admin` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['adminId'];
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
				header("location: admin.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'adminlogin.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
	//------------------------------------------------

	//Register Function
	if(ISSET($_POST['sign-up'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			try{
				
				$username = $_POST['username'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];

				// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO user VALUES(userId,'$username', '$password')";
				$insertion=$conn->prepare($sql);
				$insertion->execute();

			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$conn = null;
			echo "
				<script>alert('User Added')</script>
				<script>window.location = 'signin.php'</script>
			";
			
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'signup.php'</script>
			";
		}
	}


if (isset($_GET['spaceId'])) {
            loginCheck();


           $sql = "SELECT * from spaces where spaceId=? ";
			$result=$conn->prepare($sql);
			$result->execute([$_GET['spaceId']]);

        while ($item=$result->fetch(PDO::FETCH_ASSOC)){
        	$region = $item['region'];
        	$city = $item['city'];
        	$location = $item['location'];
        }


			$sql2 = " INSERT INTO report VALUES (reportNo,?,?,? )";
                $query = $conn->prepare($sql2);
                $query->execute([$region,$city,$location]);
                
                if ($query==true) {
                    echo "<script>alert('Space Booked')</script>";
                
            
            }else{
            	echo "<script>alert('Please select space to')</script>
            	<script>window.location='index.php'</script>";
            }
            echo "<script>window.location = 'index.php'</script>";
            
        
}

	if (isset($_POST['delete'])) {
		echo "Delete Working1";
	}

	if (isset($_POST['search'])) {
		echo "Search Working1";
	}

	if (isset($_POST['addSpace'])) {
    global $conn;
    $sql = "INSERT INTO spaces values(?,?,?,?) ";
    $result=$conn->prepare($sql); 
    $result->execute([$_POST['spaceId'],$_POST['region'],$_POST['city'],$_POST['location']]); 

        if ($result== true) {
            echo "
<script>
alert('Space Added')
</script>
<script>
window.location = 'admin.php'
</script>
";
        }
    }
?>