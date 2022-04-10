<!DOCTYPE HTML>
<html>  
<body>
    <form action="save.php" method="post">
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
        $sql = "select * from client where id = ".$_REQUEST["id"];

        //execute sql request and get results
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            $row = $result->fetch_assoc();
            echo "id: <input type='text' name='id' value='". $row['id'] ."'><br>" ;
            echo "First Name: <input type='text' name='fname' value='". $row['fname'] ."'><br>" ;
            echo "Last Name: <input type='text' name='lname' value='". $row['lname'] ."'><br>" ;
            echo "Email: <input type='text' name='email' value='". $row['email'] ."'><br>" ;

        }
        //close connection 
        $conn->close();
    ?>
    <input type="submit">
    </form>
</body>
</html>