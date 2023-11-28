<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $level_functionality = $_POST['level_functionality'];
    $upload_memo = $_POST['upload_memo'];
    
    $query = "INSERT INTO `research5.7.1` (ID, level_functionality , upload_memo) VALUES ('$ID', '$level_functionality` ', '$upload_memo' )";
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
