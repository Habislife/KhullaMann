<?php  
session_destroy();
$conn->close();
header('Location: ../../index.php');
exit();
?>