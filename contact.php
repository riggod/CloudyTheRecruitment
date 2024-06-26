<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link rel="stylesheet" href="css/contact_us.css" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
/* Button used to open the contact form - fixed at the bottom of the page */
body{
  background-color: #ecf0f5;
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 100px;
  border-radius: 20px;
}

.subbutton {
  background-color: #555;
  color: white;
  padding: 10px 10px;
  cursor: pointer;
  opacity: 0.8;
  bottom: 20px;
  right: 28px;
  width: 100px;
  border-radius: 20px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.logocustom{
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

iframe{
  width: 100%;
  height: 550px;
  border: none;
}
</style>
  </head>
  <body class="hold-transition skin-green sidebar-mini">

  <!-- Logo -->
  <a href="index.php" class="logocustom">
      <span class="logo-lg"><b>Cloudy</b> Recruitment</span>
    </a>
    <!-- main content -->
    <div class="flex-container">
      <div class="contact">
        <h2 style='color:red;margin-bottom:30px;'>Contact Us</h2>
        <p>
          Lane 4,Office no. 21, Gurudwara Chowk ,Akurdi, Pune<br />
          Email : <a href="mailto:jaymawkar88@gmail.com">jaymawkar88@gmail.com</a>
        </p>
        <br />
        <p>
          Office Timings : From 10Am - 6 Pm , MON-SAT. We follow strict Covid
          Guidelines to ensure a safe and a healthy environment for you
        </p>
        <br />
        <p>Contact Us</p>
        <br />
        <p>
          Phone Number: 9309916265/8177900939 (From 10AM - 6PM) MON-SAT.
        </p>
      
      </div>
      <div class="form">
        <h2 style='color:red;margin-bottom:30px;'>Feedback</h2>
        <form method="post" action="feedback.php">
        <label for="first_name"><b>Name</b></label>
        <input type="text" placeholder="Enter first name" name="first_name" id="first_name"  required /><br />
  
        <label for="phone"><b>Phone Number</b></label>
        <input type="text" placeholder="Enter phone number" name="phone" id="phone" required   /><br />

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required  /><br />

        <label for="email"><b>Query</b></label>
        <input type="text" placeholder="Query" name="query" id="email" required /><br />
        <button class="subbutton" type="submit">Submit</button>
        </form>
        

        <p style='margin: 30px 0;'>
          Have any Suggestions or Complaints?<br>
          Please feel free to contact us any time with your queries via the given details.<br>
        </p>
      </div>
    </div>    
    </div>
    <button class="open-button" onclick="openForm()">Chat with Cloudy</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  <iframe src="http://127.0.0.1:5000"></iframe>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  </body>
</html>
