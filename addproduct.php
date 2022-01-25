<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="addProductStyle.css">
    <title>NikaKurtskhalia</title>
</head>
<body>
<div class="mainPage">
        <header id="header">
            <h1>Product Add</h1>
            <div id="btns">
                <button class="button" type="submit" form="product_form">Save</button>
                <form id="changePage" action="/index.php">
                    <input class="button" type="submit" value="Cancel" />
                </form>
            </div>
        </header>
        <hr>

        <div>
            <form action="connect.php" method="POST" id="product_form">
                <label>
                    <span class="SKU">SKU </span>
                    <input type="text" name="sku" id="sku" required oninvalid="this.setCustomValidity('Please, submit required data')">
                </label>
                <label>
                    <span class="NAME">Name </span>
                    <input type="text" name="name" id="name" required oninvalid="this.setCustomValidity('Please, submit required data')">
                </label>
                <label>
                    <span class="PRICE">Price ($) </span>
                    <input type="text" name="price" id="price" required oninvalid="this.setCustomValidity('Please, submit required data')">
                </label>
                <label>
                    <span>Type Swicher </span>
                    <select onchange="test()" id="productType" name="selection" required oninvalid="this.setCustomValidity('Please, submit required data')">
                    <option disabled selected value> -- select an option -- </option>
                        <option value="DVD">DVD</option>
                        <option value="FURNITURE">Furniture</option>
                        <option value="BOOK">Book</option>
                    </select>
                </label>
                    <div class="dvd displaynone">
                        <label id="dvd">
                            <span class="SIZE">Size (MB) </span>
                            <input type="text" name="size" id="size" >
                        </label>
                        <p class="masProvide">Please, provide size in CM</p>
                    </div>
                    <div class="furniture displaynone">
                        <label id="furniture">
                            <span class="HEIGHT">HEIGHT (CM) </span>  
                            <input type="text" name="height" id="height" > 
                        </label>
                        <label id="furniture">
                            <span class="WIDTH">WIDTH (CM) </span>
                            <input type="text" name="width" id="width" >
                        </label>
                        <label id="furniture">
                            <span class="LENGTH">LENGTH (CM) </span>
                            <input type="text" name="length" id="length" >
                        </label>
                        <p class="masProvide">Please, provide demension in CM</p>
                    </div>
                    <div class="book displaynone">
                        <label id="book">
                            <span class="WEIGHT">WEIGHT (KG) </span>
                            <input type="text" name="weight" id="weight" >
                        </label>
                        <p class="masProvide">Please, provide weight in KG</p>
                    </div>
            </form>

        </div>
        
        <footer id="footer">
        <hr>
            <p>Scandiweb Test assignment by Nika Kurtskhalia</p>
        </footer>
    </div>
    <script src="addProduct.js"></script>
</body>
</html>