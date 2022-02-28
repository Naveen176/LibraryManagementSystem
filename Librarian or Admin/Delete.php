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
    $sql_query="DELETE FROM LIBRARY WHERE Bid='$bid' ";
    $query=mysqli_query($conn,$sql_query);
    if($query)
    {
        echo "Deleted Successfully ";
    }
    else
    {
        echo "Failed ";
    }

?>