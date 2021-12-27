<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>🆃🅱 Travel Bug | Murree Package</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">🆃🅱𝓣𝓻𝓪𝓿𝓮𝓵 𝓑𝓾𝓰</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>

        <div class="mx-2">
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#LoginModal">
            Log In
          </button>
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#SignUpModal">
            Sign Up
          </button>
        </div>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['email'] ?>
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ChangePasswordModal">Change Password</button></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">
            Log in to Travel Bug
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="connectl.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#SignUpModal">Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Sign Up Modal -->
  <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SignUpModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="connectsu.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="cexampleInputPassword1" name="cpassword" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alternate Number(optional)</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alternate_number" />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" required />
            </div>

            <button type="submit" class="btn btn-primary">
              Create Account
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#LoginModal">Already a member</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--Change Password Modal -->
  <div class="modal fade" id="ChangePasswordModal" tabindex="-1" aria-labelledby="ChangePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ChangePasswordModalLabel">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="change_password.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Old Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="oldpassword" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="newpassword" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="cnewpassword" required />
            </div>
            <button type="submit" class="btn btn-primary" name="changepassword">Change Password</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <center>
    <div>
      <strong><u>
          <h1>𝘔𝘜𝘙𝘙𝘌𝘌 𝘗𝘈𝘊𝘒𝘈𝘎𝘌</h1>
        </u></strong>
    </div>
  </center>

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="murree_package.php">Murree Package</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="skardu_package.php">Skardu Package</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="naran_package.php">Naran Package</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="hunza_package.php">Hunza Package</a>
    </li>
  </ul>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\murree7.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="images\murree4.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="images\murree6.jpg" class="d-block w-100" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div>
    <center>
      <u>
        <h2><strong>An Insight</strong></h2>
      </u>
    </center>
  </div>

  <div>
    <h4>
      Murree, once a charming colonial town nestled in the Himalayan
      foothills, is now a popular hill station and bustling summer resort in
      the Galyat region of northern Punjab. Due to being a picturesque and
      pleasantly scenic places in the country, the last one decade have seen
      rampant development and today Murree more closely resembles a
      litter-strewn overcrowded and a thriving tourist resort. However it
      remains exceedingly popular with Pakistani families for whom its truly a
      tourist paradise and receives glowing recommendations from this
      demographic. In summer it is cool - even chilly in the evening - while
      light rain is common. In winter Murree hides herself under thick blanket
      of snow.
    </h4>
  </div>
  <br />

  <div>
    <center>
      <u>
        <h2><strong>Package Description</strong></h2>
      </u>
    </center>
  </div>

  <div>
    <h4>
      Your trip will start from Islamabad. You will be provided
      transportation(by road) from Islamabad to Murree where you will check in
      to your hotel(Crown Plaza). In this trip you will explore places such as
      Mall road, Pindi point, Kashmir point, Nathia gali, Ayubia and Ghora
      gali. (Note: This is a couple package)
    </h4>
  </div>
  <br />
  <div>
    <center>
      <u>
        <h2><strong>Hotel Description</strong></h2>
      </u>
    </center>
  </div>
  <div>
    <h4>
      Located in the heart of Murree which provides easy access to tourist spots in Murree. Well furnished rooms, cooperative staff and quick service. The hotel address is Mall road, Murree.
    </h4>
  </div>
  <br>

  <div>
    <center>
      <h4><strong>Package Price per person: Rs.10000 </strong></h4>
    </center>
  </div>
  <br>
  <center>
    <a href="booking.php" class="btn btn-dark btn-lg">Book Now</a>
  </center>
  <br />

  <div class="card text-center">
    <div class="card-header">For all the Hodophiles out there</div>
    <div class="card-body">
      <h5 class="card-title">
        We travel not to escape life but for life not to escape us!
      </h5>
      <p class="card-text"></p>
      <a href="contact.php" class="btn btn-dark">Contact Us</a>
    </div>
    <div class="card-footer text-muted">
      © 2021 Travel Bug. All rights reserved.
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>