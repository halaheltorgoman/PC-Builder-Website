<?php session_start(); include 'header.php' ;
    include 'connection.php';
    include 'functions.php'; ?><style><?php include 'CSS/stylee.css'; ?></style>
<script src="https://kit.fontawesome.com/2a7eb69a26.js" crossorigin="anonymous"></script>
<video autoplay loop muted plays-inline id="vid">
                <source src="media/vid.mp4" type="video/mp4">
    
            </video>
        </div>

<div>
        <nav id="nv">
            <img src="icon.png" class="logo">
            
        <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>

        </ul>
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook" id="fi"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram" id="ii"></i></a>

    
    </nav>
    </div>
<div>
    <h2 style="color: white; text-align:center">
       <i> Sign up to start building your PC!</i>
    </h2>
</div>

	<?php 


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $user_id = random_num(4);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }else
        {
			echo "<div class=\"error\">";
            echo "enter username correctly";
			echo"</div>";
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

		.error{
			
		color: #ff0d0d;
		text-align: center;
		padding: 10px;

		}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		background-color: rgba(255,255,255,0.1);
    text-decoration: none;
    font-size: 15px;
    display: inline-block;
    color: #fff;
    border: 1px solid #fff;
    padding: 14px 70px;
    border-radius: 50px;
    margin-top: 20px;
    transition: 0.3s
	}

	#button:hover{
background-color: rgba(255,255,255,0.4);
transform: scale(1.15);

}

	#box{

		background-color: black;
		margin: auto;
		width: 300px;
		padding: 30px;
		text-align: center;
		color: #fff;
		border-radius: 50px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="padding:10px;
    font-size: 40px;
    color: white;
    font-weight: 200;
     text-align:center;">Signup</div>

            User-name:<input id="text" type="text" name="user_name"><br><br>
			Password:<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>