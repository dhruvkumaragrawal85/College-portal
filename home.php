<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
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

        h1 {
            color: white;
        }

        p1 {
            color: white;
            animation: slide-in 1s ease-out;
        }

        p2 {
            color: black;
            animation: slide-in 1s ease-out;
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
</head>

<body>
    <button class="admin-button" type="button" onclick="window.location.href='admin.php'">Admin options</button>
    <img class="icon" src="icon.png" alt="Website icon" width="120" height="120">
    <h1>Welcome to IIT Patna registration portal</h1>
    <p1>Click to proceed:</p1>
    <form>
        <button type="button" onclick="window.location.href='student.php'">Student</button>
        <!-- <button type="button" onclick="window.location.href='company.php'">Company</button>-->
        <button type="button" onclick="window.location.href='alumni.php'">Alumni</button> 
    </form>
    <p2 class="authored-by">Created by: <br>Dhruv Kumar Agrawal</p2>
</body>

</html>