<?php
// First start a session. This should be right at the top of your login page.
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="images/avator.ico" type="image/x-icon" rel="shortcut icon"/>
    <link href="images/avator.ico" type="image/x-icon" rel="icon"/>
    <!-- lightbox-->
    <link rel="stylesheet" href="css/lightbox.css">
</head>
<body>
<h1>Personal Page</h1>
<div id="avator"></div>
<h3>Login</h3>
<?php
if (isset($_SESSION['error'])) {
    ?>
    <div class='errormsg'><?php echo $_SESSION['error']; ?></div>
    <?php
}
?>

<div id="loginMsg"></div>

<form id="formLogin" action="checkLogin.php" method="POST">
    <table class="form">
        <tr>
            <td class="l">User Name:</td>
            <td class="r"><input type="text" id="username" name="username"></td>
        </tr>
        <tr>
            <td class="l">Password:</td>
            <td class="r"><input type="password" id="password" name="password"></td>
        </tr>
        <tr>
    </table>
    <input type="submit" name="submit" id="submit" value="Login">
    <input type="reset" value="Reset">
</form>
</section>

<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="js/login.js"></script>
</body>
</html>
