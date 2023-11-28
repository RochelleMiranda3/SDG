<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_students_abuse = $_POST['no_students_abuse'];
    $no_student_abuse_partner = $_POST['no_student_abuse_partner'];
    $no_students_abuse_otherpeople = $_POST['no_students_abuse_otherpeople'];
    $no_students_reported = $_POST['no_students_reported'];
    $no_students_confide = $_POST['no_students_confide'];

    $query = "INSERT INTO `research5.7.6.1` (ID, no_students_abuse, no_student_abuse_partner, no_students_abuse_otherpeople, no_students_reported, no_students_confide  ) VALUES ('$ID', '$no_students_abuse` ', '$no_student_abuse_partner` ', '$no_students_abuse_otherpeople` ', '$no_students_reported` ', '$no_students_confide')";
    $insert = mysqli_query($conn,$query);

    if($insert){
        header("Location:../../../admin/sdg5/formsdg5.php?message=Insert Successful");
    }else if(!$insert){
        die("Query failed. " . mysqli_error($conn));
    }
}
else {
    echo "Invalid request method";
}

?>
