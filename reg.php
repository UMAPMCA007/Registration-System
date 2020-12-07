<?php

session_start();
include("connection.php");
// inatilizing variables


if(isset($_POST['regbtn'])){

    $_SESSION['errors1']="";
    $_SESSION['errors2']="";
    $_SESSION['errors3']="";
    $_SESSION['errors4']="";
    $_SESSION['errors5']="";
    $_SESSION['errors6']="";
    $_SESSION['errors7']="";
    $_SESSION['errors8']="";





    $name              = test_input(mysqli_real_escape_string($conn,$_POST['name']));
    $email             = test_input(mysqli_real_escape_string($conn,$_POST['email']));
    $password          =test_input(mysqli_real_escape_string($conn,$_POST['password']));
    $Repassword        = test_input(mysqli_real_escape_string($conn,$_POST['Rpassword']));

//form validation

    if(empty($name)){$_SESSION['errors1']="Username required";}
    if(empty($email)){$_SESSION['errors2']="Email required";}
    if(empty($password)){$_SESSION['errors3']="Password required";}
    if(empty($Repassword)){$_SESSION['errors4']="Password required";}

//CROSS CHECKING
    if(!empty($_SESSION['errors1']) || !empty($_SESSION['errors2']) || !empty($_SESSION['errors3']) || !empty($_SESSION['errors4'])){ $errorsCross1="All field required"; }else{
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){$_SESSION['errors5']="Only letters and white space allowed";}
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){$_SESSION['errors6']="Invalid email format"; }
        if($password!=$Repassword){$_SESSION['errors7']="Password do not match"; }
    }
    if(!empty($_SESSION['errors5']) || !empty($_SESSION['errors6']) || !empty($_SESSION['errors7'])){ $errorsCross2="Invalid format";}
//check Db for existing user with same user

    $user_check_query="SELECT * FROM logindata WHERE email='$email' LIMIT 1";
    $result=mysqli_query($conn,$user_check_query);
    $user = mysqli_fetch_assoc($result);
    if($user['email']===$email){$_SESSION['errors8']="Email allready Exist"; }





    if(empty($errorsCross1) && empty($errorsCross2) && empty($_SESSION['errors8'])) {
        $query="INSERT INTO logindata (name,email,password)VALUES('$name','$email','$password')";
        mysqli_query($conn,$query);
        header("location:login.php");
        $_SESSION['user'] = $name;
        $_SESSION['success']=" your are successfully registered. So please log in";
    }else{
        header("location:register.php");



    }
}

// logging

if(isset($_POST['loginbtn'])){

    $myusername = test_input( mysqli_real_escape_string($conn,$_POST['username']));
    $mypassword = test_input( mysqli_real_escape_string($conn,$_POST['password']));

    $sql = "SELECT * FROM logindata";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $row = mysqli_fetch_assoc($result);


            $id                     =  $row['id'];
            $name                   =  $row['name'];
            $email                  =  $row['email'];

            $_SESSION['id']         = $id;
            $_SESSION['user2']      = $name;
            $_SESSION['email2']     = $email;
            $_SESSION['success2']   = " your successfully log in";

            header("location:index.php");

 }else{

        $_SESSION['errorL']  = "Your Email Id or Password is invalid";
        header("location:login.php");
    }

}


function  test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>