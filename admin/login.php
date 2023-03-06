<html>

<head>
    <title>Login-Food order System</title>
    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>
    <div class="login"></div>
    <h1 class="text-center">LOGIN</h1>
    <br> <br>
    <!-- login form start here -->
    <form action="" method="POST" class="text-center">
        username: <br>
        <input type="text" name="username" placeholder="Enter the Username"> <br> <br>
        Password: <br>
        <input type="password" name="password" placeholder="Enter password"> <br><br>



        <input type="submit" name="submit" placeholder="LOGIN" class="btn-primary">
        <br> <br>
    </form>

    <p class="text-center">Created By- <a href="www.abc@google.com.">RAJ</a></p>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    echo  $username = $_POST['username'];
    echo  $password = $_POST['password'];
}
?>