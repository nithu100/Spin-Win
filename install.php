<?php
$conn=new mysqli("127.0.0.1","root","root");
$conn->query("CREATE DATABASE IF NOT EXISTS quick_kart");
$conn->select_db("quick_kart");

$conn->multi_query("
CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100), phone VARCHAR(20), email VARCHAR(100),
password VARCHAR(255), created_at DATETIME);

CREATE TABLE admin(id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50), password VARCHAR(255));

INSERT INTO admin(username,password)
VALUES('admin','".md5("admin123")."');

CREATE TABLE categories(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50),image VARCHAR(100));

CREATE TABLE products(id INT AUTO_INCREMENT PRIMARY KEY,
cat_id INT,name VARCHAR(100),description TEXT,
price INT,stock INT,image VARCHAR(100),created_at DATETIME);

CREATE TABLE orders(id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,total_amount INT,status INT,created_at DATETIME);

CREATE TABLE order_items(id INT AUTO_INCREMENT PRIMARY KEY,
order_id INT,product_id INT,quantity INT,price INT);
");

mkdir("images");
echo "Installed. <a href='login.php'>Login</a>";