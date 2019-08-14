<!-- <?php
/*session_start();
if(isset($_SESSION['userid']))
{
  if($_SESSION['role']="donor")
 {
   header("Location:DonorPage.php");
 }
 elseif ($_SESSION['role']="donee")
  {
  header("Location:DoneeMain.php"); 
 }
else
{
  header("Location:AdminPanel.php"); 
}
}
include 'src/db/connection.php';
if (isset($_POST['submit'])) {
  $to_email="khullamann5660@gmail.com";
  session_start();
  $header = $_SESSION['email'];
  $user_id = $_SESSION['user_id'];
  $subject = $_POST['subject'];
  $message = $_POST['givefeedback']; 
  $query = "INSERT INTO feedback(subject,feedback_content, feedback_email,user_id) VALUES('$subject','$message','$header','$user_id')";
    
  $result = mysqli_query($conn,$query);
  header("location:DonorPage.php");
} */
?>-->

<!DOCTYPE html>
<html>
<head>
  <title> LoggedIn Give feedback</title>
  <style>
    * {box-sizing: border-box}

.box{
  margin: 10% 20% 0 20%;
  border : 2px solid black;
  color: black;
  padding: 10px;
  height: auto;
  position: relative;
}

input[type=email] ,input[type=text]{
  width: 100%;
  padding: 10px;
  margin: 5px  0 20px 0;
  background: #f1f1f1;
}

#text{
  width: 100%;
  padding: 10px;
  margin: 5px  0 20px 0;
  background: #f1f1f1;
}
button{
  font-size: 20px;
  margin: 20px 0px;
  width: 200px;
}

  </style>
</head>
<body>
  <div class="box" align="center">
    <h1>User Feedback</h1>
    <form method="POST" align="center">
    <input type="text" name="subject" placeholder="Subject">
    <br><br>
    <textarea rows="5" id="text" name="givefeedback" placeholder="Give feedback..."></textarea>
    <br><br>
    <button type="submit" name="submit">Send</button>
  </form>
  </div>
  
</body>

</html>
