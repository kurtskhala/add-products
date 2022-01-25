<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>NikaKurtskhalia</title>
</head>
<body>
    <div class="mainPage">
        <header id="header">
            <h1>Product List</h1>
            <!-- This div containd two buttons, "Add" and "Mass Delete"-->
            <div id="btns">
                <form id="addNewProduct" action="/addproduct.php">
                    <input class="button" type="submit" value="ADD" />
                </form>
                <button class="button" type="submit" form="check">MASS DELETE</button>
            </div>
        </header>
        <hr>

        <div class = "productList">
            <!-- This method deletes products from database -->
            <?php
                    $conn= new mysqli('localhost', 'id18315812_nika', 't6?b2F^e<@/&|=$g','id18315812_products');
                    if(!empty($_POST['check_list'])) { 
                        foreach($_POST['check_list'] as $check) {
                            $sql = "DELETE FROM prod WHERE id=$check"; 
                            if ($conn->query($sql) === TRUE) {
                            }
                        }
                    }
                    
                    $conn->close();
            ?>

            <!-- This method adds data from database -->
            <form action="" method="post" id="check">
            <?php
                
               $conn= new mysqli('localhost', 'id18315812_nika', 't6?b2F^e<@/&|=$g','id18315812_products');
                $sql = "SELECT * FROM prod";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div id="productBox">
                            
                                <input type="checkbox" class="delete-checkbox" name="check_list[]" id="checkbox" value= <?php echo "$row[ID]"; ?>>
                                    <?php
                                        echo "$row[SKU]"; 
                                        echo "<br>";
                                        echo "$row[Name]";
                                        echo "<br>";
                                        echo "$row[Price] $";
                                        echo "<br>";
                                        if("$row[Type]"==="DVD"){
                                        echo "Size: $row[Size] MB";
                                        } else if("$row[Type]"==="FURNITURE"){
                                            echo "Demension: $row[Height]x$row[Width]x$row[Length]";
                                        } else if("$row[Type]"==="BOOK"){
                                            echo "Weight: $row[Weight]KG";
                                        }
                                    ?>
                            
                        </div>
                        <?php
                    }
                }
            
                $conn->close();
            ?>
        </form>
            
            
        </div>
        
        <footer id="footer">
        <hr>
            <p>Scandiweb Test assignment by Nika Kurtskhalia</p>
        </footer>
    </div>
</body>
</html>