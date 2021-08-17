<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $db_server="localhost";
    $db_uname="root";
    $db_pass="";
    $db_name="e-cell";
        global $db_server,$db_uname,$db_pass,$db_name;
        $conn=mysqli_connect($db_server,$db_uname,$db_pass,$db_name);

        if($conn)
        {            
            $query1=" select * from employee";
            $query2=" select * from employee where position='Admin' ";
            $query3=" select * from employee where position='customer'";
            $query4=" select * from employee where position='Delivery man'";
            $query5=" select * from products";
            $query6=" select * from employee where position='Employee'";

            $result1=mysqli_query($conn,$query1);
            $result2=mysqli_query($conn,$query2);
            $result3=mysqli_query($conn,$query3);
            $result4=mysqli_query($conn,$query4);
            $result5=mysqli_query($conn,$query5);
            $result6=mysqli_query($conn,$query6);
            
            $workerCount=mysqli_num_rows($result1);
            $adminCount=mysqli_num_rows($result2);             
            $customerCount=mysqli_num_rows($result3);
            $deliverymanCount=mysqli_num_rows($result4); 
            $productCount=mysqli_num_rows($result5); 
            $employeeCount=mysqli_num_rows($result6);
            
            echo json_encode(array("workers" => $workerCount, "admins" => $adminCount, "customers" => $customerCount, "deliveryMans" => $deliverymanCount, "products" => $productCount, "employees" => $employeeCount));
        }
        exit;
    }
    include_once 'admin_header.php';
?>

<html>
<head>
</head>
<body>    
    <h3 align="center">Total number of Worker : <span></span></h3>
    <h3 align="center">Total number of Admin :  <span></span></h3>
    <h3 align="center">Total number of Employee : <span></span></h3> 
    <h3 align="center">Total number of Customer : <span></span></h3>
    <h3 align="center">Total number of Delivery man : <span></span></h3>
    <h3 align="center">Total number of Product : <span></span></h3>  
    <!-- <h3 align="center">Total number of Worker : <?php echo $workerCount;?></h3>
    <h3 align="center">Total number of Admin : <?php echo $adminCound;?></h3>
    <h3 align="center">Total number of Employee : <?php echo $employeeCount ;?></h3> 
    <h3 align="center">Total number of Customer : <?php echo $coustomerCount;?></h3>
    <h3 align="center">Total number of Delivery man : <?php echo $deliverymanCount ;?></h3>
    <h3 align="center">Total number of Product : <?php echo $productCount ;?></h3>      -->
    <script>
        const req = new XMLHttpRequest();
        req.open("POST", "./dashboard.php");
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.responseType = "json";
        req.onreadystatechange = () =>
            req.readyState === 4 && handleResponse(req.response);
        req.send();

        function handleResponse(response) {
            const result = Object.values(response)
            const divs = document.querySelectorAll("h3 span")
            for(let i = 0; i < 6; i++)
                divs[i].innerText = result[i];
        }
    </script>
</body>
</html>