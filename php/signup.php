<?php 

function isPasswordStrong($password) {
    // Minimum password length
    $min_length = 8;

        if (strlen($password) >= $min_length) {
            return false; // Password is strong
        }
    return true; // Password is weak
}

if(isset($_POST['name']) && 
   isset($_POST['email']) &&
   isset($_POST['age']) && 
   isset($_POST['marks']) &&
   isset($_POST['CPI']) &&  
   isset($_POST['year']) &&
   isset($_POST['specialization']) &&       
   isset($_POST['interest']) &&
   isset($_POST['placed']) &&
   isset($_POST['package']) &&
   isset($_POST['pass1']) &&
   isset($_POST['pass2']) ){

    
    include "../db_conn.php";

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $marks = $_POST['marks'];
    $CPI = $_POST['CPI'];
    $year = $_POST['year'];
    $specialization = $_POST['specialization'];
    $interest = $_POST['interest'];
    $placed = $_POST['placed'];
    $package = $_POST['package'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $ver=0;

    if (empty($name)) {
    	$em = "Name is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "Email is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($age)){
    	$em = "Age is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($CPI)){
    	$em = "CPI is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($year)){
    	$em = "Year is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($specialization)){
    	$em = "Specialization is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($interest)){
    	$em = "Interest is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }else if(empty($placed)){
    	$em = "Placement status is required";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;  
                       
    }else if($pass1!=$pass2){
    	$em = "Passwords not matching";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;        
    }else if(isPasswordStrong($pass1)){
    	$em = "Password is not strong";
    	header("Location: ../stud_reg.php?error=$em&$data");
	    exit;
    }
    else
    {
        
    	$sql = "INSERT INTO students(name, age, email, marks, CPI, year, specialization, interest, placed, package, pass1, ver) 
    	        VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$name, $age, $email, $marks, $CPI, $year, $specialization, $interest, $placed, $package, $pass1, $ver]);
        header("Location: ../stud_login.php?error=error");
        exit;
    }
}else {
	header("Location: ../stud_reg.php?error=error");
	exit;
}