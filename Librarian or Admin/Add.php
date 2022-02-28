<?php

    $host="localhost";
    $user="root";
    $password="";
    $dbname="test1";
    $conn=mysqli_connect($host,$user,$password,$dbname);
    
    $bid=$_POST['bid'];
    $author=$_POST['author'];    
    $title=$_POST['title'];
    $publisher=$_POST['publisher'];
    $cost=$_POST['cost'];

    $sql_query="INSERT INTO library VALUES('$bid','$author','$title','$publisher','$cost')";
    $query=mysqli_query($conn,$sql_query);
    if($query)
    {
        echo "Entered Succesfully ";
    }
    else
    {
        echo "Failed ";
    }

?>