<?php
// This code connects to database inserts data to database
    $empInput = function ($str){
        if($str==""){
            return 0;
        } else {
            return $str;
        }
    };
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $conn= new mysqli('localhost', 'id18315812_nika', 't6?b2F^e<@/&|=$g','id18315812_products') 
                                or die( "Connection Failed:" .mysqli_error());
                    if(isset($_POST['sku']) && isset($_POST['name']) &&isset($_POST['price']) &&
                        isset($_POST['selection']) && isset($_POST['size']) && isset($_POST['height']) &&
                        isset($_POST['width']) &&isset($_POST['length']) &&isset($_POST['weight'])) {
                        $sku= $_POST['sku'];
                        $name= $_POST['name'];
                        $price= $_POST['price'];
                        $type= $_POST['selection'];
                        $size= $empInput($_POST['size']);
                        $height= $empInput($_POST['height']);
                        $width= $empInput($_POST['width']);
                        $length= $empInput($_POST['length']);
                        $weight= $empInput($_POST['weight']);
                        $sql= "INSERT INTO `prod` (`SKU`, `Name`, `Price`, `Type`, `Size`, `Height`, `Width`, `Length`, `Weight`) VALUES ('$sku', '$name', '$price', '$type', '$size', '$height', '$width', '$length', '$weight')";
                        $query = mysqli_query($conn,$sql);
                        
                        if($query){
                            header("Location: https://scandiwebtasknikakurtskhalia.000webhostapp.com/index.php?", TRUE, 301);
                            exit();
                        } else {
                            echo "Error Occurred";
                        }
                    }
                }
            ?>