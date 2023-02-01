
<?php
include 'db.php';

echo '<thead>
        <tr>
        <th scope="col">S.No</th>
        <th scope="col ">Student Name <i class="fa-solid fa-user"></i></th>
        <th scope="col ">Date of birth <i class="fa-solid fa-calendar-days"></i></th>
        <th scope="col ">Gender <i class="fa-solid fa-person-half-dress"></i></th>
        <th scope="col">Mobile <i class="fa-solid fa-phone"></i></th>
        <th scope="col">Email <i class="fa-solid fa-envelope"></i></th>
        <th scope="col">Course <i class="fas fa-book-open"></i></th>      
        <th scope="col">Action</th>
        </tr>
     </thead>';

        // $sql = "SELECT * FROM `tbl_student_bavi`";
        $sql = "SELECT * FROM tbl_student_bavi INNER JOIN tbl_course ON tbl_student_bavi.studcourseid = tbl_course.courseid";
        $result = $db->query($sql);
        $number = 1;
        while ($row = $result->fetch_assoc()) {


        echo '<tr>       
        <td scope="row" >' . $number . '</td>         
        <td scope="row">' . $row['studname'] . '</td>
        <td scope="row">' . $row['studdob'] . '</td>
        <td scope="row">' . $row['studgender'] . '</td>
        <td scope="row">' . $row['studmobile'] . '</td>
        <td scope="row">' . $row['studemail'] . '</td>
        <td scope="row">' . $row['coursename'] . '</td>
        
        
        <td>
            <button type="button" class="btn btn-dark edit" data-bs-toggle="modal" data-bs-target="#updatestudent" data-id="'.$row['studid'].'"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger delete" data-id="'.$row['studid'].'"><i class="fa-solid fa-trash"></i></button>   
        </td>
        
        </tr>';
        $number++;
}


?>

