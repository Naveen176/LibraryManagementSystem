<?php
    echo '<body>';
    $host="localhost";
    $user="root";
    $password="";
    $dbname="test1";
    $conn=mysqli_connect($host,$user,$password,$dbname);

    $query="SELECT * FROM library";
    echo "<br>";
    echo '<p>Books in the Library  </p>';
    echo "<center>";
    echo '<link rel="stylesheet" href="display.css"/>';
    if ($result = $conn->query($query))
    {
        echo '<table border="1" cellspacing="0" >';
        echo '<tr>
                <td  align="center" ><h2>Book Id</h2></td>
                <td  align="center" ><h2>Author</h2></td>
                <td  align="center" ><h2>Title</h2></td>
                <td  align="center" ><h2>Publisher</h2></td>
                <td  align="center" ><h2>Cost</h2></td>
            </tr>';
        while ($row = $result->fetch_assoc())
        {
            echo '<tr>';
            echo '<td align="center" height="50" width="125">'.$row["Bid"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["Author"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["Title"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["Publisher"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["Cost"].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</body>';
    }

?>