<?php
require('includes/guest-setup.php');
$cxnx = connect();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles/gueststyle.css">
    <link rel="stylesheet" href="../HTML Resume/styles/portfoliostyles.css">

    <title>Jada's Guestbook</title>
    <!-- Insert Favicon -->
    <link href="images/pencil.png" type="image/png" rel="icon">
</head>
<header>
    <div class="topnav">
        <a href="http://iamjada1.greenriverdev.com/305/Portfolio%20Project/HTML%20Resume/portfolio.html">Resume</a>
        <a href="http://iamjada1.greenriverdev.com/305/Portfolio%20Project/guestbook/guestbook.html">Guestbook</a>
        <a class="active" href="http://iamjada1.greenriverdev.com/305/Portfolio%20Project/guestbook/guest-admin.php">Admin</a>
    </div>
</header>
<body>
<div class="container-fluid display">
    <h2>Jada's Visitors Log</h2>
    <table style="width:100%" id="guest-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Job Title</th>
            <th>Company</th>
            <th>LinkedIn URL</th>
            <th>Email</th>
            <th>How We Met</th>
            <th>Message</th>
            <th>Email List</th>
            <th>Email Format</th>
            <th>Visitor's Timestamp</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM guest";
        $result = mysqli_query($cxnx, $sql);

        foreach($result as $row){
            //var_dump($row);
            $name = $row['first'] . " " . $row['last'];
            $jobtitle = $row['jobtitle'];
            $company = $row['company'];
            $url = $row['url'];
            $email = $row['email'];
            $meet = $row['meet'];
            $otherbox = $row['other'];
            $maillist = $row['maillist'];
            $emailformat = $row['emailformat'];
            $datestamp = date('d/m/y');

            //$datestamp = date("M d, Y g:i a", strtotime($row['date_stamp']."- 3 hours"));

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$jobtitle</td>";
            echo "<td>$company</td>";
            echo "<td>$url</td>";
            echo "<td>$email</td>";
            echo "<td>$meet</td>";
            echo "<td>$otherbox</td>";
            echo "<td>$maillist</td>";
            echo "<td>$emailformat</td>";
            echo "<td>$datestamp</td>";

        }
        ?>
        </tbody>
    </table>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="guestbook.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $('#guest-table').DataTable({
        "order": [[ 0, "desc" ]]
    });
</script>

</body>
</html>