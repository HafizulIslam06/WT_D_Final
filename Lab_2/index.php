<?php 
    include 'header.php';
    include 'db_config.php';

    if($conn)
    {
        $query= "insert into users values(NULL,'rahim','rahim123','12364')";
        // if(mysqli_query($conn,$query))
        // {
        //     echo "row inserted";
        // }
        // else
        // {
        //     if(mysqli_errno($conn)=="1136")
        //     {
        //         echo "There may be problem with db insertion:column mismatch.provide this error to the administration";
        //     }
        // }
        $query="select * from users";
        $result=mysqli_query($conn,$query);

        echo"<table border='1'>";
        echo"<tr>
                    <th>ID</th><th>NAME</th><th>USERNAME</th>
                    </tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
                echo "<td>".$row["id"]."</td>"; 
                echo "<td>".$row["name"]."</td>"; 
                echo "<td>".$row["username"]."</td>"; 
            echo "</tr>";    
        }
        echo "</table>";
    }
    else
    { 
        echo mysqli_connect_error();
    }
    include 'footer.php';
?>    