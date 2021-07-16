<?php 
    include 'header.php';
    include 'db_config.php';

        $query= "insert into users values(NULL,'rahim','rahim123','12364')";
        echo execute($query);
        
        $query="select * from users";
        $result=get($query);

        echo"<table border='1'>";
        echo"<tr>
                    <th>ID</th><th>NAME</th><th>USERNAME</th>
                    </tr>";
        foreach($result as $row)
        {
            echo "<tr>";
                echo "<td>".$row["id"]."</td>"; 
                echo "<td>".$row["name"]."</td>"; 
                echo "<td>".$row["username"]."</td>"; 
            echo "</tr>";    
        }
        echo "</table>";
    
    include 'footer.php';
?>    