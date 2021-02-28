<?php
    /* Author: Jada Senebouttarath
    *  http://iamjada1.greenriverdev.com/305/Portfolio%20Project/guestbook/guestform.php
    *  adds a guest to the database after signing the guestbook.html form
    */

/*
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/

//Connect to DB
require ('includes/guest-setup.php');
$cnxn = connect();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/gueststyle.css">

    <title>Sign My GuestBook!</title>
    <!-- Insert Favicon -->
    <link href="images/pencil.png" type="image/png" rel="icon">
</head>
<body>
<div class="container mb-3" id="main">
    <?php

    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
 /* come back to this later
    // get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $jobtitle = $_POST['jobtitle'];
    $company = $_POST['company'];
    $url = $_POST['url'];
    $email = $_POST['email'];
    $meet = $_POST['meet'];
    $otherbox = $_POST['otherbox'];
    $maillist = $_POST['mail-list'];
    $emailform = $_POST['emailformat'];

    // Research later - prevent sql injection
    /*
    $fname = mysqli_real_escape_string($cnxn, $fname);



    // save form to database
    $sql = "INSERT INTO guest VALUES ('$fname', '$lname')";
    echo $sql;

    $success = mysqli_query($cnxn, $sql);

    if ($success){
        echo "<h3>Thank you for signing my guestbook, $fname!</h3>";
    } else {
        echo "Something went wrong";
    }



   // research this
    $result = mysqli_query($cnxn, $sql);
    foreach ($result as $row){
    $fname = $row['first_name'];
    $lname = $row['last_name'];
    $jobtitle = $row['job_title'];
    $url = $row['url'];
    $email = $row['email'];
    $meet = $row['meet'];
    $otherbox = $row['other'];
    $maillist = $row['mail_list'];
    $emailform = $row['email_form'];
    $date = $row['date_stamp'];
    } // end of foreach
*/


    // email
    /*
    $emailTo = 'jsenebouttarath@mail.greenriver.edu';
    $emailFrom = 'New guest <guest@example.com>';
    $emailBody = "A Guest Has Signed the Guestbook\r\n";
    $emailBody .= "Name: $fname $lname $jobtitle $company $url $email
    $meet $otherbox $maillist $emailform \r\n";
    $emailSubject = 'New Guest Signature';
    $headers = "From: $emailFrom\r\n";
    $success = mail($emailTo, $emailSubject, $emailBody, $headers);
    if ($success) {
        echo "<h3>Thank you for signing my guestbook, $fname!</h3>";
    } else {
        echo "<h3>Oops... something went wrong</h3>";
    }
    */

    ?>



</div>


</body>
</html>