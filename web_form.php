<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaxHeal</title>
    <!-- ! Bootstrap css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <!-- ! Bootstrap js -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <!-- ! Custom fonts for this template-->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <!-- ! Aos css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
      integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4="
      crossorigin="anonymous"
    />
    <!-- ! Custom Css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- ! Header -->
    <section id="home">
      <!-- ! Navbar -->
      <nav class="navbar fixed-top navbar-b navbar-expand-lg">
        <a class="navbar-brand" href="#">TaxHeal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="./index.php">Application</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- ! Navbar End -->

<!-- ! WEb Form -->

<div class="web-form">
    <div class="web-overlay">
        <div class="container">
            <div class="web-details">
                <h1 class="text-center text-white">APPLICATION FOR WEB DEVELOPMENT</h1>
                <form action="./user_modules/web_form.php" method="POST" class="layout">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="fname" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="mname" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lname" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Birth Date</label>
                                <input type="date" name="bdate" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-3 col-sm-12">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" required class="form-control" required cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Pin Code</label>
                                <input type="text" name="code" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" name="state" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>SSC percentage</label>
                                <input type="text" name="ssc" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>HSC Percentage</label>
                                <input type="text" name="hsc" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Highest Qualification</label>
                                <select name="edu" class="form-control" required>
                                    <option value="ssc">SSC</option>
                                    <option value="hsc">HSC</option>
                                    <option value="graduate">Graduate</option>
                                    <option value="Pg">Post Graduate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Skills</label>
                                <input type="text" name="skills" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Work Experience</label>
                                <select name="workexp" class="form-control required">
                                    <option value="fresher">Fresher</option>
                                    <option value="experience">Experienced</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Experience</label>
                                <select name="exp" class="form-control" required>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="more">3+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="company" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" name="department" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control">
                            </div>
                        </div>
                    </div>
                    <center><button class="btn btn-primary" type="submit" name="web_submit">Submit</button></center>
                </form>
            </div>
        </div>
    </div>
</div>




<?php

include('includes/scripts.php');
include('includes/footer.php');

?>
