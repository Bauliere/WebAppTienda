# Aplicación Web para tienda en Atotonilco
## Hecho
- Esqueleto front end
- Tres paletas de colores
- Diseño completo con css
- JS: Drop Down Menu
- JS: Tarjeta flotante con descripción
-
- JS: Mapa con ubicación del establecimiento usando la librería de openstreet.org
- JS: Cambio de paleta
- JS: Menú de navegación lateral
- Primeros bosquejos de la API y diseño de pruebas de la base de datos
## Vistas en la aplicación
### Index.php
Página principal con los productos, barra de búsqueda
### About.php
Página de información con el mapa interactivo

## Por hacer
### Frontend
- Meter dos paletas más
- Llamadas a la API para cargar productos y categorías
- Funcionalidad para buscar productos por nombre en la barra de búsqueda
- Filtrar por categoría usando el drop down
- Crear un nuevo menú con selección de opciones para ordenar los productos por nombre, precio, categoría o fecha de creación, y otra opción para alternar entre ascendente y descendente
### Backend
- Toda la API
- Integración de dicha API con el frontend
- Interfaz exclusiva para el administrador
- Desplegar
En pocas palabras, falta el 80% del proyecto.

## API & Backend
Una API que permita a la aplicación interactuar con la base de datos para poder realizar operaciones CRUD, la base de datos cuenta con dos tablas con información de productos (nombre, precio, descripción, categoría, foto) y categorías (nombre).  

*LA API DEBERÁ SER ELABORADA SIGUIENDO UN ESQUEMA MCV bien organizado dentro del proyecto*

El objetivo es que el usuario final pueda acceder a los productos que contiene la base de datos, mismos que aparecerán dentro de cuadros que mostrarán la foto, nombre y precio, la tarjeta flotante mostrará la descripción del artículo, todos los datos deberán ser obtenidos desde la base de datos.
El usuario podrá buscar productos por nombre (búsqueda parcial, usando LIKE en MySQL), podrá mostrar todos los productos de acuerdo a su categoría usando el drop down (búsqueda exacta con CATEGORTY = ?), podrá modificar si quiere que los productos se muestren en orden ascendente o descendente, se ordenen por nombre, precio, fecha en que fueron añadidos o categoría.
Por otro lado el administrador podrá agregar, editar, consultar o eliminar todos los productos. Su vista deberá ser *exclusiva*, ningún usuario normal deberá poder ver lo mismo.
Un botón de editar al lado de cada producto, desplegará un menú para enviar la información del mismo
Un botón de eliminar, con una alerta de confirmación antes de eliminar
Una tarjeta al inicio, parte del mismo grid que los productos, mostrará un ícono de agregar producto, se desplegará un menú para meter la información del producto. Incluyendo un file select para la foto.
Se deberá contar con los siguientes endpoints
### GET
> get products/?order={}&sort={}
Devuelve todos los productos, ordenados como prefiera el usuario y ya sea en ascendente o descendente
> get products/?category={}&order={}&sort={}
Devuelve todos los productos que sean de una categoría en específico
> get products/?name={}&order={}&sort={}
Devuelve todos los productos con búsqueda parcial por nombre
### POST
> post products/
Para publicar productos en la base de datos, todos los atributos deberán ser requeridos en el cuerpo de json, salvo ID y fecha de creación/modificación
### PATCH/PUT
> patch products/?id={}
Para editar un producto en específico
### Delete
> delete products/?id={}
Para eliminar un prducto en específico.

{

    @@@@@@@@@@@@@@@@@@@@@%%##***++****##%%@@@@@@@@@@
    @@@@@@@@@@@@@@@@@#+++++++++++++++++++++++*#%@@@@
    @@@@@@@@@@@@@##@@%++*++++++++++++++++++++++*%@@@
    @@@@@@@@@@%*+++#@@%+%@@@#++++++++++++++++++%@@@@
    @@@@@@@@#+++++++%@@@%@@@@@@#++++++++++++++#@@@@@
    @@@@@@%*++++++++*@@@@@@@@@@@@%*++++++++++*@@@@@@
    @@@@@#+++++++++++#@@@@@@@@@@@@@@#++++++++%@@@@@@
    @@@@#+++++++++++++%@@@@@@@@@@@@@@@%+++++#@@@@@@@
    @@@#++++++++++++++#%%@@@@%#*****##%@#-:+%@@@@@@@
    @@#+++++++++++++++:=.:#++++++++++++++.=.+@@@@@@@
    @%++++++++++++++*#=.:*+++++++++++++++#+*%@@@@@@@
    @#++++++++++*#@@@#++++++++++++++++++++===+%@@@@@
    %*+++++++#@@@@@%:.-=+++++++++===+++++-.....*@@@@
    %+++++#@@@@@@@%:.....::=++++++=........-=+:.#@@@
    %+++#@@@@@@@@@+.....=.................+@%-..:@@@
    #+++*#@@@@@@@@-.  ...=@@=-+-.  .  ..:%@@-=+..#@@
    @@@@@@@@@@@@@%:.   .=@@@+..+-      .#@*-:.*..+@@
    @@@@@@@@@@@@@%-.  ..+*=*+. .*:.   .:*%@%:.*..+@@
    @@@@@@@@@@@@@@=. . .*@@@=. ..#. . .*@@@+..+..#@@
    @@@@@@@@@@@@@@#.....+@@%:. ..=.. ..%@@+..:-.:@@@
    @@@@@@@@@@@@@@@*....=@@:.    .:   .%#:...=..#@@@
    @@@@@@@@@@@@@@@@#...:=::.:.:::.....---:::....*@@
    @@@@@@@@@@@@@@@@@%-......===-.........   ..=%@@@
    @@@@@@@@@@@@@@@@@@@%=.....:=:....--......=%@@@@@
    @@@@@@@@@@@@@@@@@@@@@@#=:....:-::.....=#@@@@@@@@
    @@@@@@@@@@@@@@@@@@@@@@@@@@@%#++**#%@@@@@@@@@@@@@

}