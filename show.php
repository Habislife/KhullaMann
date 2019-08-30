<?php 
function show(){
include'src/db/connection.php';
$perpage = 3;
if(isset($_GET['id'])){
    $start = $_GET['id'];
}else{
    $start = 0;
}
$count = mysqli_query($conn,"SELECT COUNT(post_id) FROM donation_post");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(post_id)']; 
$query = "SELECT * FROM `donation_post`order by post_date asc, post_time asc LIMIT $start, $perpage";

    $result = mysqli_query($conn,$query);
     if(!$result)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }
    while($row = $result->fetch_assoc()){
    echo "<div class='card'>
       <a href='post.php?value_key=".$row["donee_id"]."'><img src='".$row['file_path']."' style='width:100%'></a>
        <h1>".$row['title']."</h1>
        <p class='bio'>".$row['bio']."</p>
        <a href='post.php'><button id='viewbtn'>View</button></a>
        <a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>
    </div>";
}
if($start == 0){
    echo "Previous &laquo;";
}else{
    echo "<a href=index.php?id=" . ($start - 3) . ">Previous &laquo;</a>";
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
if($start >= $TotalRec-3){
    echo "Next &raquo;";
}else{
    echo "<a href=index.php?id=". ($start + 3) ." >Next &raquo;</a>";
}
}
       ?>