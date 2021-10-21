<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];

    $query = "UPDATE devworks.user
    SET F_Name = $firstname, L_Name = $lastname, Email = $email;
    WHERE User_ID = '$username'";

    mysqli_query($con, $query)
        or die("couldn't make update");

    header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/15f4b1a016.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="leftbox">
            <nav>
                <a onclick="tabs(0)" class="tab active" href="userprofile.php">
                    <i class="fas fa-user" id="profile"></i>
                </a>
                <a onclick="tabs(0)" class="tab active" href="payment.html">
                    <i class="fas fa-wallet" id="payment"></i>
                </a>
                <a onclick="tabs(0)" class="tab active" href="contact.html">
                    <i class="fas fa-question-circle" id="help"></i>
                </a>
                <a onclick="tabs(0)" class="tab active" href="settings.html">
                    <i class="fas fa-cog" id="privacy"></i>
                </a>
                <a onclick="tabs(0)" class="tab active" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </nav>
        </div>
        <div class="rightbox">
            <div class="profile tabshow ">
                <h1>Personal Information</h1>
                <h2>First Name</h2>
                <input type="text" class="input" name="firstname" value="<?php echo $_SESSION['firstname']; ?>">
                <h2>Last Name</h2>
                <input type="text" class="input" name="lastname" value="<?php echo $_SESSION['lastname']; ?>">
                <h2>Email Address</h2>
                <input type="email" class="input" name="email" value="<?php echo $_SESSION['email']; ?>">
                <p></p>
                <button class="btn">Update</button>

            </div>
            <div class="payment tabshow payment--hidden">
                <h1>Credit Information</h1>
                <h2>Payment Method</h2>
                <input type="text" class="input" value="MasterCard - - 0234 **** 45654 ***">
                <h2>Billing Address</h2>
                <input type="text" class="input" value="7 avenue place">
                <h2>Zip Code</h2>
                <input type="text" class="input" value="4178">
                <h2>Billing Date </h2>
                <input type="text" class="input" value="Jan 20, 2017">
                <h2>Redeem Card </h2>
                <input type="text" class="input" value="Enter Gift Code">
                <p></p>
                <button class="btn">Update</button>
            </div>
            <div class="Subscription tabshow subscription--hidden">
                <h1>Subcription Information</h1>
                <h2>Payment Dates</h2>
                <p>May 12, 2019</p>
                <h2>Next Charges</h2>
                <p>$80.56 <span>includes tax</span></p>
                <h2>Plan</h2>
                <p>limited Plan</p>
                <h2>Monthly </h2>
                <p>$107.99/month</p>
                <button class="btn">Update</button>
            </div>
            <div class="Privacy tabshow subscription--hidden">
                <h1>Privacy settings</h1>
                <h2>Manage Email Notifications</h2>
                <p></p>
                <h2>Manage Privacy Settings</h2>
                <p></p>
                <h2>Plan</h2>
                <h2>View Terms of Use </h2>
                <p>Personalized Ad Experience</p>
                <P></P>
                <H2>Protect Account</H2>
                <p></p>
                <button class="btn">Update</button>
            </div>


        </div>
    </div>

</body>

</html>