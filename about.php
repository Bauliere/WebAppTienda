<!DOCTYPE html>
<?php require 'template.php'; ?>
<html lang="en" class="<?php echo htmlspecialchars($palette)?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/palettes.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <title> Sobre nosotros </title>
</head>
<body>
    <div class="header-container">
        <div class="title">
            <h1> Sobre nosotros </h1>
        </div>
    </div>
    <div class="about">
        <p>
        Lorem ipsum dolor sit amet. 
        Et aliquid dolores id unde quisquam non unde quidem qui veritatis maiores ea facilis modi 33 exercitationem deserunt. 
        Qui repudiandae vero cum nulla delectus quo nobis quos aut quibusdam ratione qui velit sint. Non neque assumenda eum 
        voluptatem ullam ut libero fugiat id corporis facere sit adipisci explicabo. Est dolor praesentium ut blanditiis aliquam 
        et provident aspernatur At natus enim est esse unde. </p><p>Ut distinctio consequatur rem quaerat omnis et dolore odit ex 
        culpa error in corrupti labore? Nam quae quia rem eaque delectus in tempore culpa et maxime voluptates ut consequatur veniam 
        qui sapiente tenetur! Nam laborum quaerat aut deserunt rerum a aperiam totam At reiciendis beatae. Qui illo quia et 
        voluptatem exercitationem aut consequatur tenetur et autem vitae qui voluptate molestias vel doloribus minus. 
        </p>
    </div>
    <div class="header-container">
        <div class="title">
            <h2> Nuestras ubicaciones </h2>
        </div>
    </div>
    <div class="map-container">
        <div id="map">
            <script src="scripts/map.js"></script>
        </div>
    </div>
    <br>
</body>
</html>