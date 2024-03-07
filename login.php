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
    <title>Login</title>
  </head>
  <body>
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                  <div class="card-body">

                    <form action="includes/login.php" method="POST">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="username" type="email" placeholder="name@example.com" name="email" required/>
                        <label for="username">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                        <label for="password">Password</label>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button type="submit" class="btn btn-primary" >Login</button>
                      </div>
                    </form>
                  </div>
                  <?php if (isset($_SESSION['alerttype'])): ?>
                    <div class="m-3 alert alert-<?= $_SESSION['alerttype']; ?> <?= $_SESSION['alerttype'] == 'danger' ? 'bg-danger text-light' : '' ?>" role="alert">
                      <?php
                      echo $_SESSION['errors'];
                      unset($_SESSION['errors']);
                      unset($_SESSION['alerttype']);
                      ?>
                    </div>
                  <?php endif
                  ?>
                  <div class="card-footer text-center py-3">
                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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
