<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>ABC COLLEGE OF ENGINEERING</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">MECHANICAL ENGINEERING</h1>
        <ul>
            <li><a href="mech.php">Dashboard</a></li>
        </ul>
    </div>
    <div style="margin: 20px">
    <h1>List of HODs</h1>
    <br>
    <table class="table" style="margin: 20px">
        <thead>
            <tr>
                <th>No</th>
                <th>HOD_ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Year</th>
            </tr>
        </thead>
        <?php
            $severname="localhost";
            $username="root";
            $password="";
            $database="mechdept";

            $conn =new mysqli($severname, $username, $password, $database);

            if($conn->connect_error){
                die("Connection Failed: ".$conn->connect_error);
            }

            $sql = "SELECT * FROM hod";

            $result = $conn->query($sql);
            if(!$result){
                die("Invalid query: ".$conn->error);
            }

            while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["hod_id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["year"]."</td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>
