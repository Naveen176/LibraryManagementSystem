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

    $jntu=$_POST['jntu'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass1=$_POST['pass1'];

    $sql_query="INSERT INTO students VALUES('$jntu','$name','$email','$phone','$pass1')";
    $query=mysqli_query($conn,$sql_query);
    if($query)
    {
        ?>
        <script>Swal.fire('Success', '', 'success');
        </script>
        <?php
        //header("Location : login.html");
    }
    else
    {
        echo "Failed ";
    }

?>    
    </body>
</html>