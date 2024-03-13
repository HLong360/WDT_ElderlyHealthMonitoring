<html>
    <head>
        <link rel="stylesheet" href="style/header_footer.css">
    </head>
    <body>
            <?php
            include("header.php");
            ?>
            <?php
            ("PG 9, 10, 11/profile1.html");
            ?>
            <?php include("conn.php");
            // $result = mysqli_query($con,"SELECT * FROM patient_profile WHERE ic = '".$_SESSION['ic']."');
            $result = mysqli_query($con,"SELECT * FROM patient_profile WHERE ic = '020221011106'");?>
            $row = mysqli_fetch_array($result);
            
            mysqli_close($con); //to close the database connection
            
            <?php
            include("footer.html");
            ?>
    </body>

























        
</html>