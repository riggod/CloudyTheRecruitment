<?php

$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$email    = $_POST['email'];
$query = $_POST['query'];
 
$host = "localhost"; 
$db_username = "root";
$db_password = "";
$database = "jobportal"; 
$conn = mysqli_connect($host, $db_username, $db_password, $database); 
if ($conn->connect_error) { 
 die("Connection failed: " . $conn->connect_error); 
}


$sql = "INSERT INTO feedback (first_name, phone, email, query) 
        VALUES ('$first_name', '$phone', '$email', '$query')";

if ($conn->query($sql) === TRUE) { 
    echo '<script>alert("Feedback submitted successfully");location="contact.php"</script>'; 
    
}

$conn->close(); 
?>
</body>
</html>
