<?php
include'src/db/connection.php';
if(isset($_POST['search'])){
    $search = $_POST['searchtext'];
//    $searchq =preg_match("#/[a-zA-Z}/","",$search);
    $query = "SELECT * FROM donationpost WHERE title LIKE ? LIMIT 1";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$query)){
        die("sql error");
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$search);
        $result = mysqli_execute($stmt);
        $count = mysqli_num_rows($result);
        if($count <= 0){
            echo "search not found.";
            exit();
        }
        else{
            while($row = mysqli_fetch_assoc($result)){
               echo $row['title'];
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location:SS.php?search=failure");
}
