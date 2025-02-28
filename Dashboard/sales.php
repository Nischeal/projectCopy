<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sales Page</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <h1>Sales Overview</h1>
      </header>

      <!-- Filters Section -->
      <section class="filters">
        <label for="date-range">Date Range:</label>
        <input type="date" id="start-date"> to 
        <input type="date" id="end-date">
        <button onclick="filterSales()">Filter</button>
      </section>

      <!-- Sales Summary Widgets -->
      <section class="widgets">
        <div class="widget">
          <h3>Total Sales</h3>
          <p>$25,000</p>
        </div>
        <div class="widget">
          <h3>Total Orders</h3>
          <p>400</p>
        </div>
        <div class="widget">
          <h3>Average Order Value</h3>
          <p>$62.50</p>
        </div>
        <div class="widget">
          <h3>New Customers</h3>
          <p>45</p>
        </div>
      </section>

      <!-- Recent Sales Table -->
      <section class="recent-sales">
        <h2>Recent Sales</h2>
        <table>
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Customer Name</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#001</td>
              <td>Milan Tamang</td>
              <td>2024-12-15</td>
              <td>$120</td>
              <td>Completed</td>
            </tr>
            <tr>
              <td>#002</td>
              <td>Rohit kc</td>
              <td>2024-12-14</td>
              <td>$85</td>
              <td>Pending</td>
            </tr>
            <tr>
              <td>#003</td>
              <td>Sonu Thapa</td>
              <td>2024-12-13</td>
              <td>$50</td>
              <td>Refunded</td>
            </tr>
            <tr>
              <td>#004</td>
              <td>Amrita Rai</td>
              <td>2024-12-12</td>
              <td>$200</td>
              <td>Completed</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
  <script src="script.js"></script>
</body>
</html>
