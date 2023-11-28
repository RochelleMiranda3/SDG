<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $VAW_officerent = $_POST['VAW_officer'];
    $evidence = $_POST['evidence'];

    $query = "INSERT INTO `research5.7.4` (ID, VAW_officer , evidence) VALUES ('$ID', '$VAW_officer', '$evidence`)";
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
