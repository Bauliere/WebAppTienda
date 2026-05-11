DROP SCHEMA IF EXISTS `Tienda`;
CREATE SCHEMA IF NOT EXISTS `Tienda`;
USE `Tienda`;

CREATE TABLE `Categories`(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    CREATION_DATE DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    MODIFICATION_DATE DATETIME ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE `Products`(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Price DECIMAL(10,2) UNSIGNED NOT NULL,
    Description VARCHAR(255) NOT NULL,
    Category INT NOT NULL,
    Photo VARCHAR(255),
    CREATION_DATE DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    MODIFICATION_DATE DATETIME ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT `P_Category` FOREIGN KEY(Category) REFERENCES `Categories`(ID)
);

INSERT INTO Categories (Name) VALUES
('Accesorios'),
('Ropa'),
('Consumibles'),
('Decoración');

INSERT INTO Products (Name, Price, Description, Category, Photo) VALUES
('Choker', 47.00, 'Choker negro mediano con puntas metálicas', 1, 'img/products/choker.png'),
('Mini Skirt', 245.00, 'Mini Skirt talla chica color negro con decoración plateada', 2, 'img/products/skirt.png'),
('Cigarros Marlboro', 105.00, 'Caja de cigarros marlboro clásicos con 20 cigarros', 3, 'img/products/cigarros.png'),
('Cenicero de cráneo', 125.00, 'Cenicero con forma de cráneo pintado a mano', 4, 'img/products/cenicero.png');

SELECT P.Name AS Producto, P.Price AS Precio, P.Description AS Descripción, P.Photo as Photo, C.Name AS Categoría FROM Products P JOIN Categories C ON C.ID = P.Category;