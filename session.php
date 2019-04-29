<?php

  //start_session
  session_start();

  //session_variabls
  $_SESSION['user_name']=$_POST['person_name'];

  //kill_session
  session_start();
  session_unset();
  session_destroy();

 ?>
