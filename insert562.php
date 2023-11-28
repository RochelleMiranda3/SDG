<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_non_discrimination_trans = $_POST['no_non_discrimination_trans'];
    $no_ppa_implemented = $_POST['no_ppa_implemented'];
    $title_ppa = $_POST['title_ppa'];
    $description_ppa = $_POST['description_ppa'];
    $total_cost = $_POST['total_cost'];
    $fund_source = $_POST['fund_source'];

    $query = "INSERT INTO `research5.6.2` (ID, no_non_discrimination_trans, no_ppa_implemented, title_ppa, description_ppa, total_cost, fund_source  ) VALUES ('$ID', '$no_non_discrimination_trans', '$no_ppa_implemented', '$title_ppa', '$description_ppa', '$total_cost', '$fund_source')";
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
