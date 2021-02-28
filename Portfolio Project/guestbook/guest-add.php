<?php
/*  Author: Jada Senebouttarath
 *  305/guestbook/guest-add.php
 *  Add a new guest to the database
 */
//Make sure the user is coming from the form
if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {

    //Send user to form page
    header("location: guestbook.html");
}

require('includes/guest-setup.php');
$cnxn = connect();

include('includes/header.html');
/*
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
*/


    // get form data
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $jobtitle = $_POST['jobtitle'];
    $company = $_POST['company'];
    $url = $_POST['url'];
    $email = $_POST['email'];
    $meet = $_POST['meet'];
    $other = $_POST['otherbox'];
    $maillist = $_POST['mail-list'];
    $emailformat = $_POST['emailformat'];
    $datestamp = date('d/m/y');

    // save form to db
    $sql = "INSERT INTO guest VALUES('$first','$last', '$jobtitle','$company','$url','$email', '$meet', '$other', '$maillist', '$emailformat', '$datestamp')";

    echo $sql;

    $success = mysqli_query($cnxn, $sql);

    if ($success) {
        echo "<h3>Thank you for signing my guestbook, $first!</h3>";
    } else {
        echo "Something went wrong";
    }

    // print summary
    echo "<p>Name: $first $last</p>";
    echo "<p>Job Title: $jobtitle</p>";
    echo "<p>LinkedIn URL: $url</p>";
    echo "<p>Email: $email</p>";
    echo "<p>How we met: $meet</p>";
    echo "<p>Message: $other</p>";
    echo "<p>Mailing List: $maillist</p>";
    echo "<p>Email Format: $emailformat</p>";



// email - come back to this later
/*
$emailTo = 'jsenebouttarath@mail.greenriver.edu';
$emailFrom = 'New guest <guest@example.com>';
$emailBody = "A Guest Has Signed the Guestbook\r\n";
$emailBody .= "Name: $first $last $jobtitle $company $url $email
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