<!DOCTYPE html>
<?php
// Inialize session
session_start();
// Test the session to see if is_auth flag was set (meaning they logged in successfully)
if (!isset($_SESSION["auth"])) {
    header("location: login.php");
    exit;
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="images/avator.ico" type="image/x-icon" rel="shortcut icon"/>
    <link href="images/avator.ico" type="image/x-icon" rel="icon"/>
    <!-- lightbox-->
    <link rel="stylesheet" href="css/lightbox.css">
</head>
<body>
    <h1>Personal Page</h1>
    <p>Welcome <?php echo $_SESSION['username']; ?></p>
    <a href='logout.php'>logout</a>
    <div id="avator"></div>

    <section class="about">
        <p>Hi, my name is John Don and I am currently a <a href="https://www.uq.edu.au/">UQ</a> student enrolled in
            INFS3202.</p>
        </section>

        <section class="contact">
            <ul>
                <li>
                <a href="mailto:John.Don@uq.edu.au">Email</a>
                </li>
                <li>

                </li>
            </ul>
        </section>

        <section class="education">
            <h1>Education</h1>
            <p id="education_msg">

            </p>
            <table>
              <thead>
                 <tr>
                    <td>id</td>
                    <td>Degree</td>
                    <td>Time</td>
                    <td>Location</td>
                    <td>Operations</td>
                </tr>
            </thead>

            <tbody id="education_box">

            </tbody>
        </table>
    </section>

    <section>
        <form action="add_education.php" method="GET">
            <table Class="form">
                <tr>
                    <td Class="l">Degree</td>
                    <td Class="r"><input type="text" name="degree"></td>
                </tr>
                <tr>
                    <td Class="l">Time</td>
                    <td Class="r"><input type="text" name="time"></td>
                </tr>
                <tr>
                    <td Class="l">Location</td>
                    <td Class="r"><input type="text" name="location"></td>
                </tr>
            </table>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </section>



    <section class="education">
        <div class="image-set">
            <a class="photo" href="images/avator1.jpg" data-lightbox="avator"><img src="images/avator1.jpg" alt="Jhon Done"></a>
            <a class="photo" href="images/avator2.jpg" data-lightbox="avator"><img src="images/avator2.jpg" alt="Jhon"></a>
            <a class="photo" href="images/avator3.jpg" data-lightbox="avator"><img src="images/avator3.jpg" alt="Don"></a>
        </div>
    </section>
    <section>
        <form method="POST">
            <table Class="form">
                <tr>
                    <td Class="l">Your name:</td>
                    <td Class="r"><input type="text" id="name" name="realname"></td>
                </tr>
                <tr>
                    <td Class="l">Your email:</td>
                    <td Class="r"><input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td Class="l">Your comments:</td>
                    <td Class="r"><textarea name="comments" id="comment" rows="15" cols="50"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </section>
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lightbox-plus-jquery.js"></script>
</body>
</html>