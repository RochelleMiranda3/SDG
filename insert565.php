<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_solo_employees = $_POST['no_solo_employees'];
    $no_solo_solo = $_POST['no_solo_solo'];
    $no_solo_students = $_POST['`no_solo_students` '];
    $no_solostudents_solo = $_POST['no_solostudents_solo'];
    $no_solo_parents = $_POST['no_solo_parents'];
    $no_employees_children_soloparent = $_POST['no_employees_children_soloparent'];
    $total_num_student_soloparents = $_POST['total_num_student_soloparents'];
    
    $query = "INSERT INTO `research5.6.5` (ID, no_solo_employees , no_solo_solo, no_solo_students, no_solostudents_solo, no_solo_parents, no_employees_children_soloparent, total_num_student_soloparents) VALUES ('$ID', '$no_solo_employees`, '$no_solo_solo`, '$no_solo_students`, '$no_solostudents_solo`, '$no_employees_children_soloparent`)";
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
