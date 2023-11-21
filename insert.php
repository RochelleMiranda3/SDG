<?php
//include yung db.php dito

if($SERVER['REQUEST_METHOD'] === 'POST'){

    $title = $_Post['title'];
    $author = $_Post['author'];
    $year_pub = $_Post['year_pub'];
    $no_clinical = $_Post['no_clinical'];
    $no_citation = $_Post['no_citation'];

    $query = "INSERT INTO `research5.1.1` (title, author, yearPub, no_clinical, no_citation) VALUES ('$title', '$author', '$year_pub', '$no_clinical', '$no_citation')";
    $insert = mysqli_query($conn,$query);

    if($insert){
        header("Location: forms.php");
    }else if(!$insert){
        die("Query failed. " mysqli_error($conn));

    }
}
else {
    echo "Invalid request method";
}

?>
