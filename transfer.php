 
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
    * {
        box-sizing: border-box;
      }

    /* Create two equal columns*/
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: 100%; 
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    
    .btn-transfer {
        background: #50d8af;
        border: 2px solid #50d8af;
        color: white;
        padding: 8px 45px;
        text-align: center;
        display: inline-block;
        font-size: 20px;
    }
    .btn-transfer:hover {
        background: none;
        color: #50d8af;
    }
    .font-label h2{
      color: #50d8af;
      font-weight: 70px;
      font-size: 40px;
      padding-top: -px;
    }

    .form-box {
        position: absolute;
        top: 55%;
        left: 30%;
        height: 650px;
        width: 500px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: #fff;
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }

    .form-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #0c2e8a;
        text-align: center;
    }

    .form-box .fromto {
        position: relative;
    }

    .form-box .fromto input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #000;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #000;
        outline: none;
        background: transparent;
    }
    .form-box .fromto label {
      position: absolute;
      top:0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #0c2e8a;
      pointer-events: none;
      transition: .5s;
    }

    .form-box .fromto input:focus ~ label,
    .form-box .fromto input:valid ~ label {
      top: -20px;
      left: 0;
      color: #03e9f4;
      font-size: 12px;
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
          <li><a class="nav-link scrollto" href="customers.php">View Customers</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!--End of Nav bar-->

  <!--Form-->
  <form method="POST" action="transferamt.php">

    <section id="transfer">
      
        <div class="container">          
           <div class="form-box"> 
            <!--From row-->
                 
              <div class="font-label"><h2>From</h2></div>  
                  <div class="fromto">
                    <div class="row"> 
                    <div class="form-group">
                      <input type="text" placeholder="Enter Account No" name="faccno" id="faccno">
                    </div>
                  </div>

                  <div class="fromto">
                    <div class="form-group">
                      <input type="text"  id="fromname" placeholder="Enter Name" name="fromname">
                    </div>
                  </div>    
                         
            <!--End of From column-->

            <!--To column-->
            
              <div class="font-label"><h2>To</h2></div>
                <div class="row">
                  <div class="fromto">
                    <div class="form-group">
                      <input type="text"  placeholder="Enter Account No" name="taccno" id="taccno">
                    </div>
                  </div>
                    
                  <div class="fromto">
                    <div class="form-group">
                      <input type="text"  id="toname" placeholder="Enter Name" name="toname">
                    </div>
                  </div> 
                  
                  <div class="fromto">  
                    <div class="form-group">
                      <input type="text" id="amt" placeholder="Enter Amount" name="amt">
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <center><button class="btn-transfer">Transfer</button></center>
                  </div>  
                </div>
              </div>  
            </div>

            <!--End of To column-->
        </div>    
      </div>
    </section>
  </form>
  <!--End of From-->



  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>


