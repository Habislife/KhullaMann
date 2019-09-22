<?php
include'src/db/connection.php';
if(isset($_POST['search'])){
    $search = $_POST['searchtext'];
    $search = mysqli_real_escape_string($conn,$search);
    $count= mysqli_query($conn,"SELECT count(post_id) as total FROM donation_post WHERE title LIKE '%{$search}%'");
$rows = mysqli_fetch_array($count);
$count=$rows['total'];
$sql = "SELECT * FROM donation_post WHERE title LIKE '%{$search}%'";
$result = mysqli_query($conn,$sql);
    if($count <= 0){
            echo "search not found.";
            exit();
        }
        else
        {
            while($row = mysqli_fetch_assoc($result))
            {
               echo $row['title'];
               echo "<br>";
            }
        }
  
}
else{
    header("Location:SS.php?search=failure");
}
?>
