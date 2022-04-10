<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Crud en php</title>
    </head>
    <body>

    <br />
    <h2>Crud en Php</h2>
    <p>
    <p>

    <table style="border:1px solid black;">
        <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </thead>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "lbeina";
            $dbname = "crud";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            //create sql request 
            $sql = "select * from client";

            //execute sql request and get results
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>" ;
                    echo "<td> ". $row['id'] . "</td>" ;
                    echo "<td> ". $row['fname'] . "</td>" ;
                    echo "<td> ". $row['lname'] . "</td>" ;
                    echo "<td> ". $row['email'] . "</td>" ;
                    echo "</tr>" ;
                }
            } else {
                echo "0 results";
            }  
            //close connection 
            $conn->close();
        ?>
    </table>

    </body>
</html>