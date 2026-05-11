<?php require 'template.php'; ?>
<html lang="en" class="<?php echo htmlspecialchars($palette)?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/palettes.css">
    <title>Palette changer test</title>
</head>

<body>
    <div class="header-container">
        <div class="title">
            <h1>Lista de productos</h1>
        </div>
        <div class="search">
            <input class="search-box" type="text" ID="SearchQuery" placeholder="Buscar un producto">
            <div class="drop-container">
                <div class="drop-down-items">
                    <button class="drop-down-button" ID="Category"> Filtra por categoría </button>
                    <div class="drop-down-menu">
                        <span class="drop-option">Filtra por categoría</span>
                        <span class="drop-option">Filtra por categoría</span>
                        <span class="drop-option">Filtra por categoría</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div style="width:100%; justify-items: center; margin-top: 40px;">
        <div class="products-container">
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
            <div class="product-card">
                <img class="product-photo" src="placeholder.png" alt="Product Image">
                <h2>Product Name and other things out here</h2>
                <h3>Product Description</h3>
            </div>
        </div>
    </div>

</body>
<script src="scripts/dropdown.js"></script>
<script src="scripts/infocard.js"></script>
</html>