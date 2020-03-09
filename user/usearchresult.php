<?php
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:Login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Result</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/usearchresult.css" />
  </head>
  <body>
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Mid-Project/index.php">Bangladesh Airlines</a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="udashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <!-- Dropdown -->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbardrop"
                  data-toggle="dropdown"
                >
                  Hi,<?php echo $_SESSION['loggedinuser'];?>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="ubookflight.php">Booking</a>
                  <a class="dropdown-item" href="unotice.php">Notice</a>
                  <a class="dropdown-item" href="uchangepassword.php"
                    >Change Password</a
                  >
                  <a class="dropdown-item" href="usettings.php">Settings</a>
                  <a class="dropdown-item" href="Login.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section id="search-result">
      <div>
        <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="uselectticket.php" class="search-form">
            <span class="search-form-title">Search Result</span>
            <br />
            <br />
            <table class="search-table" style="width: 100%">
              <thead class="search-table">
                <tr>
                  <th class="search-table">Flight ID</th>
                  <th class="search-table">Departing Time</th>
                  <th class="search-table">Departure</th>
                  <th class="search-table">Arrival</th>
                  <th class="search-table">Total Seat</th>
                  <th class="search-table">Seat Available</th>
                  <th class="search-table">Fare</th>
                  <th class="search-table">Choose</th>
                </tr>
              </thead>
              <tbody class="search-table">
                <tr>
                  <td class="search-table">F100</td>
                  <td class="search-table">9:00</td>
                  <td class="search-table">Dhaka</td>
                  <td class="search-table">Chittagong</td>
                  <td class="search-table">50</td>
                  <td class="search-table">50</td>
                  <td class="search-table">3000</td>
                  <td class="search-table">
                    <input class="select-btn" type="submit" value="Select" />
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
