<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
</head>
<body>

<style>
    body{
    margin: 0;background-color: rgb(255, 247, 237);
}
::-webkit-scrollbar{
    width: 0;
}
header{
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color:antiquewhite;

}
h3{
    text-align: center;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color:  rgb(112, 191, 255);
}


.submit-btn{
    background-color: rgb(112, 191, 255);
    height: 6vmin;width:30vmin;
    border: none;border-radius: 2vmin;
    color:white;font-size:medium;
    transition: all 0.2s ease;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.submit-btn:hover{
    height: 7vmin; font-size:large;
}

</style>

    <header>
<h3>PHP Create a MySQL Table</h3>
<form method="post">
    Table Name :<br>
     <input type="text" name="tbName"><br><br>
     column 1:<br>
     <input type="text" name="column1"><br><br>
     column 2:<br>
     <input type="text" name="column2"><br><br>
     column 3:<br>
     <input type="text" name="column3"><br><br>
     column 4:<br>
     <input type="text" name="column4"><br><br>
     column 5:<br>
     <input type="text" name="column5"><br><br>

     <input type="submit" value="create Table" name="submit" style="cursor: pointer;" class="submit-btn">
</form>

<?php
if(isset($_POST['submit'])){
    try{
    
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $database = 'obaid';

    $tableName = $_POST['tbName'];
    $column1 =  $_POST['column1'];
    $column2 =  $_POST['column2'];
    $column3 =  $_POST['column3'];
    $column4 =  $_POST['column4'];
    $column5 =  $_POST['column5'];
    
    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE $tableName (
            id INT AUTO_INCREMENT PRIMARY KEY,
            $column1 VARCHAR(30) NOT NULL,
            $column2 VARCHAR(30) NOT NULL,
            $column3 VARCHAR(30) NOT NULL,
            $column4 VARCHAR(30) NOT NULL,
            $column5 VARCHAR(30) NOT NULL)";
    $conn->exec($sql);
    echo "table created with success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>

</header>






</body>
</html>


