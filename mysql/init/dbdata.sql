CREATE TABLE IF NOT EXISTS sqlidb.products(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `color` varchar(16) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS sqlidb.users(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO sqlidb.products (productname, description, color, price, image) VALUES ('Blue Sneakers', 'Vintage sneakers for the classic look.', 'blue', 99.90, 'images/blue.webp');
INSERT INTO sqlidb.products (productname, description, color, price, image) VALUES ('Green Sneakers', 'Vintage sneakers for the classic look.', 'green', 99.90, 'images/green.webp');
INSERT INTO sqlidb.products (productname, description, color, price, image) VALUES ('Purple Sneakers', 'Vintage sneakers for the classic look.', 'purple', 99.90, 'images/purple.webp');
INSERT INTO sqlidb.products (productname, description, color, price, image) VALUES ('Red Sneakers', 'Vintage sneakers for the classic look.', 'red', 99.90, 'images/red.webp');

INSERT INTO sqlidb.users (username, password) VALUES ('admin', 'admin');
INSERT INTO sqlidb.users (username, password) VALUES ('tom', 'password123');
INSERT INTO sqlidb.users (username, password) VALUES ('maggie', 'sup3rs3cr3t');
INSERT INTO sqlidb.users (username, password) VALUES ('bart', 'snowball');
