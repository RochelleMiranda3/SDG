<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_paternity = $_POST['no_paternity'];
    $no_no_equi_paternity = $_POST['no_equi_paternity'];
    $no_maternity_leave = $_POST['`no_maternity_leave` '];
    $no_equi_maternity = $_POST['no_equi_maternity'];
    $no_solo_parents = $_POST['no_solo_parents'];
    $no_equi_solo_parents = $_POST['no_equi_solo_parents'];
    $total_num_VAWC = $_POST['total_num_VAWC'];
    $total_equi_VAWC = $_POST['total_equi_VAWC'];
    $no_special = $_POST['no_special'];
    $equi_special = $_POST['equi_special'];
   
    $query = "INSERT INTO `research5.6.4` (ID, no_paternity , no_equi_paternity, no_maternity_leave, no_equi_maternity, no_solo_parents, no_equi_solo_parents, total_num_VAWC, total_equi_VAWC, no_special, equi_special ) VALUES ('$ID', '$no_paternity', '$no_equi_paternity`, '$no_maternity_leave`, '$no_equi_maternity`, '$no_solo_parents`, '$no_equi_solo_parents`, '$no_equi_solo_parents', '$no_equi_solo_parents`, `$total_num_VAWC`, `$total_equi_VAWC`, `$no_special`, `$equi_special`)";
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
