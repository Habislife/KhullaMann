<?php  
session_unset();
session_destroy();
$conn->close();
header('Location: ../../index.php');
exit();
?>