<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    require_once 'includes/server.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="web.css">
    <title>Registration</title>
  </head>
  <body>
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                  <div class="card-body">

                    <form action="includes/registration.php" method="POST">
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="asFname" type="text" placeholder="Enter your first name" />
                            <label for="asFname">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input class="form-control" name="asLname" type="text" placeholder="Enter your last name" />
                            <label for="asLname">Last name</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input class="form-control" name="asEmail" type="email" placeholder="name@example.com" />
                            <label for="asEmail">Email address</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input class="form-control" name="asContactNo" type="text" placeholder="09123456789" />
                            <label for="asContactNo">Phone Number</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="country" name="country" required placeholder="Country"/>
                            <label for="country">Country:</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="province" name="province" required placeholder="Province"/>
                            <label for="province">Province:</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="city" name="city" required placeholder="City"/>
                            <label for="city">City:</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="brgy" name="brgy" required placeholder="Barangay"/>
                            <label for="brgy">Barangay:</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="lot" name="lot" placeholder="Lot/Block" required />
                            <label for="lot">Lot/Block:</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="street" name="street" placeholder="Street" required />
                            <label for="street">Street:</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subdivision" name="subdivision" placeholder="Subdivision" required />
                        <label for="subdivision">Subdivision:</label>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="asPass" type="password" placeholder="Create a password" />
                            <label for="asPass">Password</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="asPassConfirm" type="password" placeholder="Confirm password" />
                            <label for="asPassConfirm">Confirm Password</label>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-0">
                        <div class="d-grid">
                          <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <?php if (isset($_SESSION['alerttype'])): ?>
                    <div class="m-3 alert <?= $_SESSION['alerttype'] == 'danger' ? 'bg-danger text-light' : '' ?>" alert-<?= $_SESSION['alerttype']; ?> role="alert">
                      <?php
                      echo $_SESSION['errors'];
                      unset($_SESSION['errors']);
                      unset($_SESSION['alerttype']);
                      ?>
                    </div>
                  <?php endif
                  ?>
                  <div class="card-footer text-center py-3">
                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                    <div class="small"><a href="index.php">Go back</a></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
