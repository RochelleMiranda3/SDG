<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_mentoring_femalestudents = $_POST['no_mentoring_femalestudents'];
    $title_ppa1 = $_POST['title_ppa1'];
    $description_ppa = $_POST['`description_ppa` '];
    $total_cost1 = $_POST['total_cost1'];
    $fund_source1 = $_POST['fund_source1'];
    $no_mentoring_female_employees = $_POST[''];
    $title_ppa2 = $_POST['title_ppa2'];
    $short_description = $_POST['short_description'];
    $total_cost2 = $_POST['total_cost2'];
    $fund_source2 = $_POST['fund_source2'];
    $total_female_employees = $_POST['total_female_employees'];

    $query = "INSERT INTO `research5.6.8` (ID, no_mentoring_femalestudents , title_ppa1, description_ppa, total_cost1, fund_source1, no_mentoring_female_employees, total_cost2, fund_source2, total_female_employee) VALUES ('$ID', '$no_mentoring_femalestudents`, '$title_ppa1`, '$description_ppa`, '$total_cost1`, '$fund_source1`, '$no_mentoring_female_employees`, `$title_ppa2`, `$short_description`, '$total_cost2`, '$fund_source2`, `$total_female_employees`)";
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
