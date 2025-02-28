<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mart_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function getTotalProducts($conn) {
  $sql = "SELECT COUNT(*) as total FROM Product";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  return $row['total'];
}

function getOutOfStockProducts($conn) {
  $sql = "SELECT COUNT(*) as total FROM Product WHERE QuantityInStock = 0";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  return $row['total'];
}

function getLowStockProducts($conn) {
  $sql = "SELECT COUNT(*) as total FROM Product WHERE QuantityInStock < 20 AND QuantityInStock > 0";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  return $row['total'];
}

function getStockValue($conn) {
  $sql = "SELECT SUM(UnitPrice * QuantityInStock) as total FROM Product";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  return $row['total'];
}

function getInventoryDetails($conn) {
  $sql = "SELECT p.ProductID, p.ProductName, p.QuantityInStock, p.UnitPrice, c.CategoryName 
          FROM Product p 
          LEFT JOIN Category c ON p.CategoryID = c.CategoryID";
  return $conn->query($sql);
}

function getStockStatus($quantity) {
  if ($quantity == 0) {
    return 'Out of Stock';
  } elseif ($quantity < 20) {
    return 'Low Stock';
  } else {
    return 'In Stock';
  }
}
?>