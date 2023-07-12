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

        p {color: white;
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
            position: absolute;
            top: 20px;
            right: 20px;
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

        .back-button {
            background-color: red;
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>

<body>
    <img class="icon" src="stud.png" alt="Website icon" width="120" height="120">
    <!-- <h1>Welcome to IIT Patna placement portal</h1> -->
    <p>How would you like to proceed:</p>
    <form>
        <button type="button" onclick="window.location.href='stud_login.php'">Login</button>
        <button type="button" onclick="window.location.href='stud_reg.php'">Register</button>
    </form>
    <!-- <p class="authored-by">Created by: <br>Anshu Nauwala <br>Dhruv Choudhari<br>Dhruv Kumar Agrawal</p> -->
</body>

</html>