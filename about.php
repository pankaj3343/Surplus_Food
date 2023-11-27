<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>About</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="style.css">
  <style>
    #about {
      padding: 80px 0;
    }

    #about h2 {
      text-align: center;
      margin-bottom: 50px;
    }

    #about p {
      font-size: 18px;
      line-height: 1.5;
     
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top p-0" style="background-color: white">
    <div class="container-fluid">
      <a class="navbar-brand " href="index.php">
        <img src="final logo.png" id="logo" alt="logo" width="220" height="50" class="d-inline-block align-text-top ">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav nav fw-bold text-center" style="font-size: 17px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Donate.php">Donate Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="volunteer.php">Volunteer</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="find.html">Find Food</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" data-bs-toggle="modal" data-bs-target="#login"><img src="login icon.png" width="30" height="30"></a>
          </li>
        </ul>

      </div>
  </nav>


  <section id="about">

    <!-- vision -->
    <div class="container-fluid mt-4">
      <div style="margin: 0% 13% 0% 11%;">
        <h3 style="color: rgb(62, 213, 213);">
          Vision & Mission For Surplus Food
        </h3>
        <span style="width: 5px;">
          <hr style="color:rgb(48, 122, 122) ">
        </span>
      </div>
      <div class="row" style="margin: 0% 10% 0% 10%;">
        <div class="col-md-8 pt-4">
          <h4>
            Vision
          </h4>
          <p class="pe-4 ">
            Seeing India as a nation and society which is poverty-free, educated, free from child labor where
            their
            inequality will no longer exist and everyone will get fundamental rights such as Education, Good
            Food,
            Good Health, and Shelter for themselves and to envision such a nation where the women of the society
            will be empowered and self-dependent. <br><br>

            In nutshell to work towards crafting a better India which ensures basic health, education,
            empowerment,
            and equality to every citizen. <br><br>
          </p>

          <h4>
            Mission
          </h4>
          <p>
            Creating a beautiful and better society by providing and ensuring basic necessities to every
            deprived individual and becoming an association and execution partner of Schools, NGOs, Corporates,
            and Government agencies for advancement programs across India.
          </p>
        </div>

        <div class="col-md-4" style="padding-top: 6%;">
          <img src="mission.jpg" alt="" style="height: 75%; width: 95%;">
        </div>
      </div>



      <div class="container mt-5 " style="color: black;">
        <h3 style="text-align:left">About Us</h3>
        <p>
        At Food Charity, we are committed to tackling two pressing issues: food waste and food insecurity. 
        We recognize the abundance of surplus food that goes to waste every day while many individuals and 
        families struggle to put meals on their tables. Our organization aims to bridge this gap by redistributing
         surplus food to those in need.We work closely with food establishments, including restaurants, hotels, grocery stores, and food manufacturers,
         to rescue excess food that would otherwise be discarded. Our dedicated team of volunteers collects these 
         surplus food items, ensuring they are still safe and suitable for consumption. <br><br>

        By rescuing surplus food, we not only prevent it from ending up in landfills but also maximize its potential to 
        help those facing food insecurity. We believe that no edible food should go to waste when there are people in our
        communities who could benefit from it.

        Once collected, the surplus food is carefully sorted, stored, and distributed to various community organizations,
         shelters, soup kitchens, and individuals in need. We prioritize nutritious food items, including fresh produce,
         dairy products, grains, and protein sources, to ensure that those receiving our assistance have access to 
         well-balanced and nourishing meals. <br><br>

        At Food Charity, we understand the importance of food safety. We strictly adhere to hygiene and quality control
        protocols to ensure that the surplus food we distribute maintains its integrity and freshness. Our team follows best
        practices in handling, transportation, and storage to uphold the highest standards of food safety.

        We believe in fostering collaboration and building partnerships within our communities. We actively engage with 
        local businesses, government agencies, and nonprofit organizations to raise awareness about food waste and the
         importance of redistributing surplus food. Together, we can create a sustainable and equitable food system that
         benefits both the environment and those in need. <br>
        </p>
       <p class="text-center"> <strong style="color:orangered; " >  Your support is crucial in our mission to reduce food waste and fight hunger. Whether you are a donor, volunteer,
       <br> or advocate,  your contribution helps us make a meaningful impact in the lives of <br> individuals and families 
         struggling with food insecurity. <span class="fs-4">&#128591;</span> </strong></p>
      </div>
    </div>
  </section>


  <!-- Registration-Form -->
  <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title ">Registration Form </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-content" style="background-image: linear-gradient( 95.2deg, rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );">
          <br>
          <div class="container">
            <form class="row g-3" action="#" method="POST" enctype="multipart/form-data">
              <div class=" form-floating col-md-6">
                <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                <label for="fname" class="form-label">First Name :</label>
              </div>
              <div class="form-floating col-md-6">

                <input type="text" class="form-control" name="sname" placeholder="Second Name" required>
                <label for="sname" class="form-label">Second Name : </label>
              </div>
              <div class="form-floating col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                <label for="email" class="form-label">Email : </label>
              </div>
              <div class="form-floating col-md-6">
                <input type="text" class="form-control" name="cnumber" placeholder="Contact Number:" required>
                <label for="cnumber" class="form-label">Contact Number: </label>
              </div>
              <div class="form-floating col-12">
                <textarea type="textarea" class="form-control" rows="2" cols="50" name="address" placeholder="Address:" required></textarea>
                <label for="address" class="form-label">Address : </label>
              </div>
              <div class="form-floating col-md-6">
                <input type="text" class="form-control" name="city" placeholder="City" required>
                <label for="city" class="form-label">City : </label>
              </div>
              <div class=" form-floating col-md-4">
                <select name="state" class="form-select" required>
                  <option></option>
                  <option value="0">a</option>
                  <option value="1">b</option>
                  <option value="2">c</option>
                  <option value="3">d</option>
                  <option value="4">e</option>
                  <option value="5">f</option>
                  <option value="6">g</option>
                  <option value="7">h</option>
                  <option value="8">i</option>
                  <option value="9">j</option>
                </select>
                <label for="state" class="form-label">State : </label>
              </div>
              <div class=" form-floating col-md-2">
                <input type="text" class="form-control" name="inputZip" placeholder="Zipcode" required>
                <label for="inputZip" class="form-label">Pincode : </label>
              </div>
              <div class=" form-floating col-md-6">
                <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                <label for="pwd" class="form-label">Password : </label>
              </div>
              <div class="form-floating col-md-6 mb-3">
                <input type="password" class="form-control" name="cpwd" placeholder="Confirm password" required>
                <label for="cpwd" class="form-label">Confirm Password : </label>
              </div>
              <br>
              <div class="col-12 mb-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                  <label class="form-check-label" for="gridCheck">
                    I here by declare that above written detail are true.
                  </label>
                </div>
              </div>
              <div class=" text-center col-12 mt-3">
                <div>
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Sign in</button>
                </div>
              </div>
            </form>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration-Form -->

  <!-- Login Form -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="background-image: linear-gradient( 95.2deg, rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );">
          <div class="container">
            <br>
            <form action="#" method="POST">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="emails" placeholder="Enter email">
                <label for="emails">E-mail</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="pass" placeholder="Enter Your Name">
                <label for="pass">Password:</label>
              </div>
              <br>
              <div style="text-align: center">
                <button type="submit" name="login" value="login" class="btn btn-primary">Submit</button>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <a href="forget.html" data-bs-toggle="modal" data-bs-target="#forget" class="text-start text-dark" style="text-decoration: none;">Forgot Password ?</a>
                </div>
                <div class="col-md-6">
                  <div class="float-end ">
                    <a href="Registration.html" data-bs-toggle="modal" data-bs-target="#registration" class="text-dark" style="text-decoration: none;">Register Here !!</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Form -->

  <!-- forgot Form -->
  <div class="modal fade" id="forget" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Forgot Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="background-image: linear-gradient( 95.2deg, rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );">
          <div class="container">
            <br>
            <form>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <label for="email">E-mail Address:</label>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                  anyone
                  else.</small>
              </div>
              <div class="text-center mt-2">
                <button type="submit" class="btn btn-primary ">Reset Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- forgot Form -->



  <!-- Donate Form Modal -->
  <div class="modal fade " id="dform" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Donation Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="background-image: linear-gradient( 95.2deg, rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );">
          <section id="donation-form">
            <div class="container">
              <form action="#" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                  <label for="name">Name :</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                  <label for="email">Email :</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="pnumber" placeholder="Enter Your Contact" required>
                  <label for="pnumber">Phone Number :</label>
                </div>
                <div class="form-floating mb-3">
                  <textarea type="text" class="form-control" name="address" placeholder="Enter Address" required></textarea>
                  <label for="address">Address :</label>
                </div>
                <div class="form-floating mb-3">
                  <select class="form-control" name="dtype" required>
                    <option value="">Please Select</option>
                    <option value="Money">Money</option>
                    <option value="Food">Food</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Other">Other</option>
                  </select>
                  <label for="dtype">Donation type :</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount" required>
                  <label for="amount">Donation Amount (in Rupees) : </label>
                </div>
                <div style="text-align: center">
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                  <button type="submit" name="donate" value="donate" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </section>
        </div>

      </div>
    </div>
  </div>
  <!-- Donate Form Modal -->

  <!-- Footer -->
  <footer>
    <!-- Grid container -->
    <div class="text-center text-white" style="background-color: #22284b">

      <!-- #3f51b5 -->
      <div class="container">
        <!-- Section: Links -->
        <section class="mt-5">
          <!-- Grid row-->
          <div class="row text-center d-flex justify-content-center pt-4">
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="about.php" class="text-white text-decoration-none">About us</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="donate_form.html" data-bs-toggle="modal" data-bs-target="#dform" class="text-white text-decoration-none">Donate Now</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white text-decoration-none">Help</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="contact.php" class="text-white text-decoration-none">Contact</a>
              </h6>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-4" />

        <!-- Section: Text -->
        <section class="mb-5 ">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <p>
                Surplus Food is a non-profit organization based in Greater Noida with a mission to
                address the issue of food waste and hunger in our community. The organization is
                committed to reducing food waste by collecting excess food from various sources and
                redistributing it to those in need.
              </p>
              <button type="button" class="btn btn-warning">
                <a href="about.html" class="text-white text-decoration-none">KNOW MORE</a>
              </button>
            </div>
          </div>
        </section>
        <!-- Section: Text -->

        <!-- Section: Social -->
        <section class="text-center mb-5 ">
          <a href="" class="text-white text-decoration-none me-4">
            <i class='fa fa-facebook fs-5'></i>
          </a>
          <a href="" class="text-white text-decoration-none me-4">
            <i class="fa fa-twitter fs-5"></i>
          </a>
          <a href="" class="text-white text-decoration-none me-4">
            <i class="fa fa-google fs-5"></i>
          </a>
          <a href="" class="text-white text-decoration-none me-4">
            <i class="fa fa-instagram fs-5"></i>
          </a>

        </section>
        <!-- Section: Social -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ©
        <a class="text-white text-decoration-none" href="index.html">2015-2024 Surplus Food. All Right
          Reserverd.</a>
      </div>
      <!-- Copyright -->
    </div>
  </footer>
  <!-- Footer -->


  <?php
  if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['sname'];
    $email = $_POST['email'];
    $contact = $_POST['cnumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['inputZip'];
    $pass = $_POST['pwd'];
    $cpass = $_POST['cpwd'];


    $sql = "INSERT INTO `signup`(`f_name`, `l_name`, `email`, `contact`, `Address`, `city`, `State`, `pin`, `password`, `confirm_pass`) VALUES ('$fname','$lname','$email','$contact','$address','$city','$state','$pin','$pass','$cpass')";
    $query = mysqli_query($con, $sql);
    if ($query) {
  ?>
      <script>
        alert('INSERTED SUCCESSFULLY');
      </script>
    <?php
    } else {
    ?>
      <script>
        alert('Not Connected');
      </script>
  <?php
    }
  }
  ?>

  <?php
  if (isset($_POST['login'])) {
    $email = $_POST['emails'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO `login`(`email`, `password`) VALUES('$email','$password')";
    $query = mysqli_query($con, $sql);
    if ($query) {
  ?>
      <script>
        alert('INSERTED SUCCESSFULLY');
      </script>
    <?php
    } else {
    ?>
      <script>
        alert('Not Connected');
      </script>
  <?php
    }
  }
  ?>

  <?php
  if (isset($_POST['donate'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['pnumber'];
    $address = $_POST['address'];
    $donates = $_POST['dtype'];
    $amt = $_POST['amount'];

    $sql = "INSERT INTO `donate`(`name`, `email`, `contact`, `address`, `d_type`, `amount`) VALUES('$name','$email','$contact','$address','$donates','$amt')";
    $query = mysqli_query($con, $sql);
    if ($query) {
  ?>
      <script>
        alert('INSERTED SUCCESSFULLY');
      </script>
    <?php
    } else {
    ?>
      <script>
        alert('Not Connected');
      </script>
  <?php
    }
  }
  ?>
</body>

</html>