<?php 
function show(){
include'src/db/connection.php'; 
$query = "SELECT * FROM `donation_post`order by post_date asc, post_time asc";

    $result = mysqli_query($conn,$query);
     if(!$result)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($result);
    echo "<div class='card'>
       <a href='profile.php'><img src='".$row['file_path']."alt='Avatar' style='width:100%'></a>
        <h1>".$row['title']."</h1>
        <p class='bio'>".$row['bio']."</p>
         <p>".$row['description']."</p>
        <a href='post.php'><button id='viewbtn'>View</button></a>
        <a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>
    </div>";
}
       ?>