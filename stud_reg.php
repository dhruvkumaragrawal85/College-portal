<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        * {
            font-family: sans-serif;
            box-sizing: border-box;
        }

        form {
            width: 400px;
            border: 2px solid #ccc;
            padding: 30px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 15px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 250px;
        }

        input {
            display: inline-block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 5px;
            margin: 5px auto;
            border-radius: 2px;
        }

        label {
            color: black;
            font-size: 18px;
            padding: 5px;
        }

        button {
            float: right;
            background: black;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        button:hover {
            opacity: .7;
        }

        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        .ca {
            font-size: 14px;
            display: inline-block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }

        .ca:hover {
            text-decoration: underline;
        }

        .form-label {
            display: inline-block;
            width: 120px;
            margin-right: 10px;
            text-align: right;
        }
    </style>
</head>

<body>
<form action="php/signup.php" method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="name" placeholder="Name"><br>
        <?php } ?>
        <label>E-mail</label>
        <input type="email" name="email" placeholder="email"><br>
        
        <label>Age</label>
        <input type="int" name="age" placeholder="Age"><br>

        <label>Boards marks</label>
        <input type="int" name="marks" placeholder="Percentage(12th)"><br>

        <label>CPI</label>
        <input type="int" name="CPI" placeholder="CPI(current)"><br>

        <label>Batch year</label>
        <input type="year" name="year" placeholder="Batch year"><br>

        <label>Specialization</label>
        <input type="text" name="specialization" placeholder="Eg. Artificial intelligence, Cryptoraphy"><br>

        <label>Area of interest</label>
        <input type="text" name="interest" placeholder="Eg. Data analysis in sports"><br>

        <label>Placed</label>
        <input type="character" name="placed" placeholder="(Y/N)"><br>

        <label>Package</label>
        <input type="int" name="package" placeholder="Current package"><br>

        <label>Password</label>
        <input type="password" name="pass1" placeholder="Password"><br>

        <label>Re Password</label>
        <input type="password" name="pass2" placeholder="Re_Password"><br>

        <button type="submit">Register</button>
        <a href="stud_login.php" class="ca">Already have an account?</a>
    </form>
</body>

</html>