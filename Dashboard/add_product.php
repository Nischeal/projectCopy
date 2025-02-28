<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    
</style>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Mart Dashboard</h2>
      <nav>
        <ul>
          <li><i class='bx bxs-dashboard'></i><a href="index.php">Dashboard</a></li>
          <li><i class='bx bx-shopping-bag'></i><a href="sales.php">Sales</a></li>
          <li><i class='bx bx-box'></i><a href="inventory.php">Inventory</a></li>
          <li><i class='bx bxs-user'></i><a href="customer.php">Customers</a></li>
          <li><i class='bx bxs-report'></i><a href="#reports">Reports</a></li>
          <li><i class='bx bxs-plus-circle'></i><a href="add_product.php">Add Product</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header>
        <h1>Add Product</h1>
      </header>

      <?php
        include 'db_connection.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $productName = $_POST["productName"];
          $description = $_POST["description"];
          $unitPrice = $_POST["unitPrice"];
          $quantityInStock = $_POST["quantityInStock"];
          $categoryID = $_POST["categoryID"];

          $sql = "INSERT INTO Product (ProductName, Description, UnitPrice, QuantityInStock, CategoryID)
                  VALUES ('$productName', '$description', '$unitPrice', '$quantityInStock', '$categoryID')";

          if ($conn->query($sql) === TRUE) {
            echo "<p class='success-message'>New product added successfully</p>";
          } else {
            echo "<p class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</p>";
          }
        }
      ?>

      <form method="POST" action="" class="product-form">
        <div class="form-group">
          <label for="productName" class="form-label">Product Name:</label>
          <input type="text" id="productName" name="productName" required class="form-input">
        </div>

        <div class="form-group">
          <label for="description" class="form-label">Description:</label>
          <textarea id="description" name="description" required class="form-input"></textarea>
        </div>

        <div class="form-group">
          <label for="unitPrice" class="form-label">Unit Price:</label>
          <input type="number" id="unitPrice" name="unitPrice" step="0.01" required class="form-input">
        </div>

        <div class="form-group">
          <label for="quantityInStock" class="form-label">Quantity In Stock:</label>
          <input type="number" id="quantityInStock" name="quantityInStock" required class="form-input">
        </div>

        <div class="form-group">
          <label for="categoryID" class="form-label">Category:</label>
          <select id="categoryID" name="categoryID" required class="form-input">
            <?php
              $sql = "SELECT CategoryID, CategoryName FROM Category";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<option value='{$row['CategoryID']}'>{$row['CategoryName']}</option>";
                }
              }
            ?>
          </select>
        </div>

        <button type="submit" class="submit-button">Add Product</button>
      </form>
    </main>
  </div>
</body>
</html>
