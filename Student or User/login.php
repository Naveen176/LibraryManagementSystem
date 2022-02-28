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

    $sid=$_POST['sid'];
    $pass=$_POST['pass'];

    $sql_query="SELECT * FROM students WHERE Jntu='$sid' and Password='$pass'";
    $query=mysqli_query($conn,$sql_query);
    if($query)
    {
        ?>
        <script>Swal.fire('Success', '', 'success');
        //header("Location:");
        </script><?php
    }
    else
    {
        ?>
        <script>Swal.fire('Failed', '', 'error');
        echo "Invalid Combination of Id and Password"
        </script>
        <?php
    }

?>    
    </body>
</html>