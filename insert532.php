<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_job_applicants = $_POST['no_job_applicants'];
    $no_newly_hired = $_POST['no_newly_hired'];

    $query = "INSERT INTO `research5.3.2` (ID, no_job_applicants, no_newly_hired) VALUES ('$ID', '$no_job_applicants', '$no_newly_hired')";
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
