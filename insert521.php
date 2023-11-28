<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_starting_deg = $_POST['no_starting_deg'];
    $no_first_start_deg = $_POST['no_first_start_deg'];

    $query = "INSERT INTO `research5.2.1` (no_starting_deg, no_first_start_deg) VALUES ('$no_starting_deg', '$no_first_start_deg')";
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
