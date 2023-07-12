<?php

session_start();

if (
    isset($_POST['email']) &&
    isset($_POST['pass1'])
) {


    include "../db_conn.php";



    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
  
    if (empty($email)) {
        $em = "Email is required";
        header("Location: ../stud_login.php?error=$em&$data");
        exit;
    }  else if (empty($pass1)) {
        $em = "Password is required";
        header("Location: ../stud_login.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM students WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);


        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
  
            $email =  $user['email'];
            $password =  $user['pass1'];
            $name = $user['name'];
            $age = $user['age'];
            $marks = $user['marks'];
            $CPI = $user['CPI'];
            $year = $user['year'];
            $specialization = $user['specialization'];
            $interest = $user['interest'];
            $placed = $user['placed'];
            $package = $user['package'];
            $ver =  $user['ver'];
            if($email === $email){
               if($pass1 === $password){
                   $_SESSION['email'] = $email;
                   $_SESSION['pass1'] = $password;
                   $_SESSION['name'] = $name;
                   $_SESSION['age'] = $age;
                   $_SESSION['marks'] = $marks;
                   $_SESSION['CPI'] = $CPI;
                   $_SESSION['year'] = $year;
                   $_SESSION['specialization'] = $specialization;
                   $_SESSION['interest'] = $interest;
                   $_SESSION['placed'] = $placed;
                   $_SESSION['package'] = $package;
                   $_SESSION['ver'] = $ver;
                if($ver===0)
                {
                    $em = "Your account hasn't been verified yet";
                    header("Location: ../stud_login.php?error=$em&$data");
                    exit;
                }
                   header("Location: ../stud_home.php");
                   exit;
                echo "Logged in";
               }else {

                 $em = "Incorect Email or password 1";
                 header("Location: ../stud_login.php?error=$em&$data");
                 exit;
              }
  
            }else {
              $em = "Incorect Email or password 2";
              header("Location: ../stud_login.php?error=$em&$data");
              exit;
           }
  
        }else {
           $em = "Incorect Email or password ";
           header("Location: ../stud_login.php?error=$em&$data");
           exit;
        }






    }
} else {
    header("Location: ../stud_login.php?error=error");
    exit;
}
