<?php


       $sql="CREATE TABLE student_data(
               roll int(10),
               tot_day int(5) DEFAULT 0,
               att_day int(5) DEFAULT 0,
               ct_1 int(2),
               ct_2 int(2),
               ct_3 int(2),
               ct_4 int(2)
             );";

       mysqli_query($conn, $sql);

?>
