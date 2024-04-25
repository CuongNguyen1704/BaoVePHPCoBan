<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $laptops = [
            [
                "id" => 1,
                "name" => "dell",
                "series" => "dell01",
                "price_sale" => 2000,
                "price_regular" => 1500
            ],

            [
                "id" => 2,
                "name" => "Asus",
                "series" => "Asus01",
                "price_sale" => 2000,
                "price_regular" => 1500
            ],
            [
                "id" => 3,
                "name" => "Thingpad",
                "series" => "Thingpad01",
                "price_sale" => 2000,
                "price_regular" => 1500
            ],
        ];
        
        include "connect_db";

        
    ?>
    <?php
        session_start();
        if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){
            echo "Hello," . $_SESSION["user"];
        }
        else{
            header("Location:index.php");
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="text">
        <button type="submit" name="submit">Search</button>
    </form>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Series</th>
            <th>price_sale</th>
            <th>price_regular</th>
        </thead>
        <tbody>
            <?php
                if(isset($_POST['text'])){
                    if(isset($_POST['submit'])){
                        foreach($laptops as $lap){
                            if($lap['name'] == $_POST['text'] || $lap['series'] == $_POST['text']){
                                echo "<tr>";
                                foreach($lap as $key => $value){
                                    echo "<td> $value </td>";
                                }
                                echo "</tr>";
                            }
                        }
                    }
                }
            ?>
        </tbody>
    </table>

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Series</th>
            <th>price_sale</th>
            <th>price_regular</th>
        </thead>
        <tbody>
           <?php
            foreach($laptops as $lap){
                echo "<tr"
                foreach($lap as $key => $value){
                    echo "<td> $value </td>";
                }
            }
           ?>
        </tbody>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>