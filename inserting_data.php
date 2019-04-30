<?php

  $sql = "INSERT INTO course_teacher(teacher, teacher_id, course_number, dept, dept_code, series, section, start_roll, end_roll) VALUES('{$_SESSION['user_name']}', '{$_SESSION['user_id']}', '$c_name', '$c_dept', $c_dept_code, $c_series, '$c_section', $st, $end);";

  mysqli_query($conn, $sql);

 ?>
