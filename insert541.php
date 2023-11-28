<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_employees = $_POST['no_employees'];
    $academic_teaching_staff = $_POST['academic_teaching_staff'];
    $senior_staff = $_POST['senior_staff'];

    $query = "INSERT INTO `research5.4.1` (ID, no_employees, academic_teaching_staff, senior_staff) VALUES ('$ID', '$no_employees', '$academic_teaching_staff', '$senior_staff')";
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
