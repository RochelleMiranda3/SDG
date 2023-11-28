<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_employees_experience_abuse = $_POST['no_employees_experience_abuse'];
    $no_employees_partner = $_POST['no_employees_partner'];
    $no_employees_abuse_otherpeople = $_POST['no_employees_abuse_otherpeople'];
    $no_employees_reported = $_POST['no_employees_reported'];
    $no_employees_confide = $_POST['no_employees_confide'];

    $query = "INSERT INTO `research5.7.6.2` (ID, no_employees_experience_abuse, no_employees_partner, no_employees_abuse_otherpeople, no_employees_reported, no_employees_confide  ) VALUES ('$ID', '$no_employees_experience_abuse` ', '$no_employees_partner` ', '$no_employees_abuse_otherpeople` ', '$no_employees_reported` ', '$no_employees_confide')";
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
