<?php
    echo '<body>';
    $host="localhost";
    $user="root";
    $password="";
    $dbname="test1";
    $conn=mysqli_connect($host,$user,$password,$dbname);

    $jntu=$_POST['jntu'];
    $query="SELECT * FROM STUDENTS WHERE Jntu='$jntu'";
    echo '<p><bg>Welcome Admin</bg></p>';
    echo '<link rel="stylesheet" href="StudentData.css"/>';
    echo '<p>Data Of Students Registered For Library</p>';
    echo '<center>';
    if ($result = $conn->query($query))
    {
        echo '<table border="1" cellspacing="0" >';
        echo '<tr>
                <td  align="center" ><h2>Jntu<h2></h2></td>
                <td  align="center" ><h2>Name</h2></td>
                <td  align="center" ><h2>E-mail</h2></td>
                <td  align="center" ><h2>Contact</h2></td>
            </tr>';
        while ($row = $result->fetch_assoc())
        {
            echo '<tr>';
            echo '<td align="center" height="50" width="125">'.$row["Jntu"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["Name"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["E-Mail"].'</td>';
            echo '<td align="center" height="50" width="125">'.$row["Contact"].'</td>';
            echo '</tr>';
            }
        echo '</table>';
        $result->free();
        echo '</body>';
    }
?>