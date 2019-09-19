 <?php
session_start();
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
  $today = date("Y/m/d");
    $time=date("h:i:sa");
  $query = "INSERT INTO feedback(subject,feedback_content, feedback_email,user_id,feedback_date,feedback_time,flag) VALUES('$subject','$message','$header','$user_id','$today','$time','1')";
    
  $result = mysqli_query($conn,$query);
  header("location:DonorPage.php");
} 
?>

<!DOCTYPE html>
<html>
<head>
  <title> LoggedIn Give feedback</title>
  <style>
    html { 
   margin: 0;
    padding: 0;
    background: url(src/images/bg.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: sans-serif;
}

    * {box-sizing: border-box}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(211, 249, 232, 0.3);
  border-radius: 0.625rem;
}

.box h1 {
  margin: 0 0 1.875rem;
  padding: 0;
  color:  #07558F;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input ,textarea {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color:  #07558F;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #07558F;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #07558F;
  pointer-events: none;
  transition: 0.5s;
}



::placeholder {
  color:  #07558F;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color:   #1889B5;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
  background-color: #07558F;
}
  </style>
  <script type="text/javascript" src="src/js/validateUserFeedback.js"></script>
</head>
<body>

  <?php include 'indexNav.html' ?>
  
  <div class="box" align="center">
    <h1>User Feedback</h1>

        <form method="POST" onsubmit="return Validate()" align="center">
          <div class="inputBox">
              <input type="text" name="subject" placeholder="Subject" id='subject' onkeyup='return Validate()'>
          </div>
          <span id='message1'></span>
          <br><br>

          <div class="inputBox">
            <textarea rows="5" id="text" name="givefeedback" placeholder="Give feedback..." onkeyup='return Validate()'></textarea>
          </div>
          <span id='message2'></span>
          <br><br>

          <input type="submit" name="submit" value="Send">
        </form>
  </div>
  
</body>

</html>
