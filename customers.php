<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Union Bank</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!--CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #000;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #e6ffff;
    }

    .custlabel h2{
      color: #50d8af;
      font-weight:550; 
      font-size: 40px;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>  
  <!--Nav Bar-->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.php">The Sparks Foundation</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
         <li><a class="nav-link scrollto" href="index.php">Home</a></li>
         <li><a class="nav-link scrollto" href="transfer.php">Transfer Money</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!--End of Nav bar-->

  <!--Customers details-->
  <main id="main">
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="custlabel"><h2>Customers</h2></div>

            <!--PHP code to fetch data from database-->

            <?php
              include("connection.php");
              $sql = "SELECT * FROM customers";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                echo "<table><tr><th>Account No.</th> <th>Name</th> <th>Email ID</th> <th>Balance</th></tr>";
                  // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["accno"]."</td><td>".$row["name"]."</td><td> ".$row["emailid"]."</td><td> ".$row["amount"]."</td></tr>";
                  }
                echo "</table>";
              }
              else {
                echo "0 results";
              }$conn->close();
            ?>
          
            <!--End of PHP Code-->
            
        </div>
      </div>
    </section>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
