<html>
    <head>
        <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    </head>
    <body>

<?php

    $host="localhost";
    $user="root";
    $password="";
    $dbname="test1";
    $conn=mysqli_connect($host,$user,$password,$dbname);

    $admin=$_POST['admin'];
    $pass=$_POST['pass'];

    $admin_fetch_query = "SELECT * FROM admindetails WHERE Aid='$admin' AND Pasword='$pass';";
    $admin_fetch_result = mysqli_query($conn,$admin_fetch_query);
    if(mysqli_num_rows($admin_fetch_result) > 0)
    {
        ?>
        <script>Swal.fire('Success', '', 'success');
        </script><?php
        //header("Location:Book Details.html");
    }
    else
    {
        ?>
        <script>Swal.fire('Failed', '', 'Error');
        </script>
        <?php
        //header("Location : Alogin.html");
    }

?>    
    </body>
</html>