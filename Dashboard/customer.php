<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">

  <title>Customers Page</title>
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Mart Dashboard</h2>
      <nav>
        <ul>
          <li><i class='bx bxs-dashboard'><a href="index.php">Dashboard</a></i></li>
          <li><i class='bx bx-shopping-bag' ><a href="sales.php">Sales</a></i></li>
          <li><i class='bx bx-box' ><a href="inventory.php">Inventory</a></i></li>
          <li><i class='bx bxs-user' ><a href="customer.php">Customers</a></i></li>
          <li><i class='bx bxs-report'></i><a href="#reports">Reports</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header>
        <h1>Customers Overview</h1>
      </header>

      <!-- Filters Section -->
      <section class="filters">
        <label for="search-customer">Search Customer:</label>
        <input type="text" id="search-customer" placeholder="Enter customer name or ID">
        <button onclick="searchCustomer()">Search</button>
      </section>

      <!-- Customer Summary Widgets -->
      <section class="widgets">
        <div class="widget">
          <h3>Total Customers</h3>
          <p>1,200</p>
        </div>
        <div class="widget">
          <h3>Active Customers</h3>
          <p>850</p>
        </div>
        <div class="widget">
          <h3>New Customers</h3>
          <p>120</p>
        </div>
        <div class="widget">
          <h3>Churn Rate</h3>
          <p>5%</p>
        </div>
      </section>

      <!-- Customer Details Table -->
      <section class="customer-details">
        <h2>Customer Details</h2>
        <table>
          <thead>
            <tr>
              <th>Customer ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Total Orders</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#C001</td>
              <td>Sonu Thapa</td>
              <td>sonuthapa@gmail.com</td>
              <td>9785673127</td>
              <td>15</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>#C002</td>
              <td>Amrita Rai</td>
              <td>amritarai@gmail.com</td>
              <td>9753467832</td>
              <td>8</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>#C003</td>
              <td>Rohit kc</td>
              <td>rohitkc@gmail.com</td>
              <td>986423245</td>
              <td>3</td>
              <td>Inactive</td>
            </tr>
            <tr>
              <td>#C004</td>
              <td>Milan Tamang</td>
              <td>milantamang@gmail.com</td>
              <td>9834567893</td>
              <td>20</td>
              <td>Active</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
  <script src="script.js"></script>
</body>
</html>
