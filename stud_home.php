<?php 
session_start();



if(isset($_SESSION['name']) && 
   isset($_SESSION['email']) &&
   isset($_SESSION['age']) && 
   isset($_SESSION['marks']) &&
   isset($_SESSION['CPI']) &&  
   isset($_SESSION['year']) &&
   isset($_SESSION['specialization']) &&       
   isset($_SESSION['interest']) &&
   isset($_SESSION['pass1']) 
){
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
        body {
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h3 {
            color: white;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #3e8e41;
        }

        .admin-button {
            background-color: black;
            position: absolute;
            bottom: 20px;
            left: 20px;
        }

        .authored-by {
            font-size: 12px;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .icon {
            margin-bottom: 30px;
        }
    </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>
<body>
    <div>
    	
    	<div>
            <h3 class="display-4">Welcome, <?=$_SESSION['name']?></h3>
            <button class="admin-button" type="button" onclick="window.location.href='home.php'">Back</button>
		</div>
    </div>
</body>
</html>

<?php }else {
	header("Location: stud_login.php");
	exit;
} ?>