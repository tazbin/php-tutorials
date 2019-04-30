<?php

//session_start();

include_once 'dbh.inc.php';

$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];

if (isset($_POST['login'])) {
  //login button clicked

  if (empty($user_name) || empty($user_pass)) {
    //empty form
    header("location: ../index.php?empty_fields");
    exit();
  }

  else{
        $sql = "SELECT * FROM teacher_data;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if( $result_check > 0 ){
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['teacher_name'] == $user_name && $row['teacher_pass'] == $user_pass)  {
              //inserted data matched with database

              $_SESSION['user_name']=$row['teacher_name'];
              $_SESSION['user_pass']=$row['teacher_pass'];
              $_SESSION['status']=$row['status'];


              if (strpos($_SESSION['status'], "dent")) {
                //"dent" word exists in $_SESSION['status']
                header("Location: student_profile.php");
                exit();
              }

            }
          }
        }

       // invalied login
       header("location: index.php?login_wrong_data");
       exit();
  }
}


 ?>
