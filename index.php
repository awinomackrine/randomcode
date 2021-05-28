<!DOCTYPE html>
<html>
<head>
<title>Webchat</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="main">

    <div id="info">
    <h2>Login Here</h2>

    <form action="login.php" method="post">
    <label><b>Username:</b></label>
    <input type="text" name="uname" placeholder="User name"><br><br>
    <label><b>Password:</b></label>
    <input type="text" name="pass" placeholder="Password"><br><br>
    <button style="background-color: #6495ed; color: white;" type="submit"><br>Login<br></button>
    
    </form>
    <form action="signup.php" method="post">
    <h2>Don't have an account..signup here</h2>
    <label>Username:</label>
    <input type="text" name="uname" placeholder="Username"> <br><br>
    <label>Email:</label>
    <input type="text" name="Email" placeholder="Email"> <br><br>
    <label>Password:</label>
    <input type="text" name="Password" placeholder="Password"> <br><br>
    <button style="background-color: #6495ed; color: white;" type="submit"><br>Signup<br></button>
    
    
    </form>




     </div>
</div>


</body>

</html>