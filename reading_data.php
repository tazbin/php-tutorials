<?php

        $sql = "SELECT * FROM person_data;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if( $result_check > 0 ){
          while ($row = mysqli_fetch_assoc($result)) {

              echo $row['teacher_name'];
              //printing data

          }
        }

 ?>
