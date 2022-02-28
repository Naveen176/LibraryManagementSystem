<!DOCTYPE html>
<html>
    <body><br><br>
    <link rel="stylesheet" href="bulkdata.css"/>
        <center>
        <form action="Bulkdata.php" method="post" enctype="multipart/form-data">
            <br><br><br>
            <input type="file" name="file" id="file" value="" accept=".csv">
            <input type="submit" name="submit" id="submit">
        </form>
        </center>
    </body>
</html>

<?php
if(isset($_POST["submit"]))
{
    $host="localhost";
    $user="root";
    $password="";
    $dbname="test1";
    $conn=mysqli_connect($host,$user,$password,$dbname);
    echo mysqli_error($conn);

    $file = $_FILES["file"]["tmp_name"];
    $myfile = fopen($file, "r");

    $x = 0;

    while(($data = fgetcsv($myfile))!=NULL)
    {
        if($x++ == 0) {
            continue;
        }
        $bid = $data[0];
        $author = $data[1];
        $title=$data[2];
        $publisher=$data[3];
        $cost=$data[4];
        $sql="INSERT INTO library(Bid,Author,Title,Publisher,Cost) VALUES ('$bid','$author','$title','$publisher','$cost')";
        $query=mysqli_query($conn,$sql);
     }

    if($query)
    {
        echo "successfully added the database ";
    } 
    else
    {
      echo "Sorry! Unable to add the file  to the database ";
    }
}
?>