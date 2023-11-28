<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_encourage_woman = $_POST['no_encourage_woman'];
    $title_ppa = $_POST['title_ppa'];
    $description_ppa = $_POST['description_ppa'];
    $total_cost1 = $_POST['total_cost1'];
    $fund_source1 = $_POST['fund_source1'];
    $categorized = $_POST['categorized'];
    $no_collaboration = $_POST['no_collaboration'];
    $title_description_collab = $_POST['title_description_collab'];
    $total_cost2 = $_POST['total_cost2'];
    $fund_source2 = $_POST['fund_source2'];

    $query = "INSERT INTO `research5.3.5` (ID, no_encourage_woman, title_ppa, description_ppa, total_cost1, fund_source1, categorized, no_collaboration, title_description_collab, total_cost2, fund_source2 ) VALUES ('$ID', '$no_encourage_woman', '$title_ppa', '$description_ppa', $no_internal_ppa', '$no_external_ppa', '$title_ppa', '$description_ppa', '$total_cost1', '$fund_source1', '$categorized', '$no_collaboration', '$title_description_collab', '$total_cost2', '$fund_source2')";
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
