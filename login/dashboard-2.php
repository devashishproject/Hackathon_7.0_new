<!DOCTYPE html>
<html>
  <head>
    <title>SKD LOGISTICS</title>
    <center>
    <a class="navbar-logo" href="#"> <img src="../assets/img/logo/logo-new.jpg" alt="logo" /> </a>
</center>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      /* Basic CSS styling */
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f7f9;
        color: #091540;
        line-height: 1.5;
        font-size: 16px;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        margin-bottom: 10px;
      }
      p {
        margin-bottom: 10px;
      }
      a {
        color: #6381ec;
        text-decoration: none;
      }
      a:hover {
        color: #008080;
      }
      header {
        background-color: #f8f7f9;
        padding: 20px;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      nav {
        background-color: #091540;
        color: #f8f7f9;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
      }
      nav ul li {
        margin-right: 20px;
      }
      .search-container {
        display: flex;
        align-items: center;
      }
      .search-container input[type=text] {
        padding: 10px;
        margin-right: 10px;
        border-radius: 5px;
        border: none;
        width: 300px;
      }
      .search-container button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #006666;
        color: #ffffff;
        cursor: pointer;
      }
      .search-container button:hover {
        background-color: #008080;
      }
      .card {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
      }
      .card-header h2 {
        font-size: 24px;
      }
      .card-header button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #006666;
        color: #ffffff;
        cursor: pointer;
      }
      .card-header button:hover {
        background-color: #008080;
      }
      .card-body table {
        border-collapse: collapse;
        width: 100%;
      }
      .card-body
      td, .card-body th {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }
        .card-body tr:hover {
        background-color: #f5f5f5;
        }
        .status {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: bold;
        text-align: center;
        }
        .status-pending {
        background-color: #ffc107;
        color: #2b2b2b;
        }
        .status-delivered {
        background-color: #28a745;
        color: #ffffff;
        }
        .status-shipped {
        background-color: #007bff;
        color: #ffffff;
        }
        .status-cancelled {
        background-color: #dc3545;
        color: #ffffff;
        }
        /* Responsive design */
        @media (max-width: 768px) {
        nav ul {
        flex-wrap: wrap;
        }
        nav ul li {
        margin-right: 10px;
        margin-bottom: 10px;
        }
        .search-container {
        flex-direction: column;
        align-items: flex-start;
        }
        .search-container input[type=text] {
        width: 100%;
        }
        .card-header {
        flex-direction: column;
        }
        .card-header h2 {
        margin-bottom: 10px;
        }
        }
        </style>
        
          </head>
          <body>
            <header>
              <h1>SKD LOGISTICS Admin Dashboard</h1>
              <div class="user-info">
                <p>Welcome back, <strong>SHIVAM</strong></p>
                <a href="#">Logout</a>
              </div>
            </header>
            <nav>
              <ul>
                <li><a href="order2.php">ORDERS</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Products</a></li>
              </ul>
              <div class="search-container">
                <form>
                  <input type="text" placeholder="Search...">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </form>
              </div>
            </nav>
            <div class="container">
              <div class="card">
                <div class="card-header">
                  <h2>Recent Orders</h2>
                  <button>View All Orders</button>
                </div>
                <div class="card-body">
                  <table>
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Company</th>
                        <th>Order Date</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#12345</td>
                        <td>NILESH SINGH</td>
                        <td>DHL</td>
                        <td>Apr 19, 2023</td>
                        <td><span class="status status-pending">Pending</span></td>
                      </tr>
                      <tr>
                        <td>#12344</td>
                        <td>VIJYENDRA PRATIHASTH</td>
                        <td>DHL</td>
                        <td>Apr 18, 2023</td>
                        <td><span class="status status-delivered">Delivered</span></td>
                      </tr>
                      <tr>
                        <td>#12343</td>
                        <td>KESHAV MISHRA</td>
                        <td>DHL</td>
                        <td>Apr 16, 2023</td>
                        <td><span class="status status-shipped">Shipped</span></td>
                      </tr>
              <tr>
                <td>#12342</td>
                <td>YASH ARRYAN</td>
                <td>DTDC</td>
                <td>Apr 14, 2023</td>
                <td><span class="status status-cancelled">Cancelled</span></td>
              </tr>
              <tr>
                <td>#12341</td>
                <td>CHIRAG JHA</td>
                <td>DTDC</td>
                <td>Apr 12, 2023</td>
                <td><span class="status status-delivered">Delivered</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2>Top Products</h2>
          <button>View All Products</button>
        </div>
        <div class="card-body">
          <ol>
            <li>
              <h3>Product 1</h3>
              <p>Total Sales: 1000</p>
            </li>
            <li>
              <h3>Product 2</h3>
              <p>Total Sales: 800</p>
            </li>
            <li>
              <h3>Product 3</h3>
              <p>Total Sales: 600</p>
            </li>
            <li>
              <h3>Product 4</h3>
              <p>Total Sales: 400</p>
            </li>
            <li>
              <h3>Product 5</h3>
              <p>Total Sales: 200</p>
            </li>
          </ol>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2>New Customers</h2>
          <button>View All Customers</button>
        </div>
        <div class="card-body">
          <ul>
            <li>
              <h3>Customer 1</h3>
              <p>Email: customer1@example.com</p>
              <p>Phone: 123-456-7890</p>
            </li>
            <li>
              <h3>Customer 2</h3>
              <p>Email: customer2@example.com</p>
              <p>Phone: 123-456-7890</p>
            </li>
            <li>
              <h3>Customer 3</h3>
              <p>Email: customer3@example.com</p>
              <p>Phone: 123-456-7890</p>
            </li>
            <li>
              <h3>Customer 4</h3>
              <p>Email: customer4@example.com</p>
              <p>Phone: 123-456-7890</p>
            </li>
            <li>
              <h3>Customer 5</h3>
              <p>Email: customer5@example.com</p>
              <p>Phone: 123-456-7890</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>