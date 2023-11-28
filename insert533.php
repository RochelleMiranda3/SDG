<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_women_applicants = $_POST['no_women_applicants'];
    $no_ppa = $_POST['no_ppa'];

    $query = "INSERT INTO `research5.3.3` (ID, no_women_applicants, no_ppa) VALUES ('$ID', '$no_jwomen_applicants', '$no_ppa')";
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
