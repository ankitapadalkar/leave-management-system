<?php include 'templates/header.php';
include './include/db-connection.php'; 
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
  session_start();
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT u.id, u.full_name, u.username,u.password, u.role_id, r.id , r.name as `role_name`
  FROM users as u
  INNER JOIN role as r
  ON u.role_id=r.id Where u.username = '$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['user_name'] = $user['full_name'];
          $_SESSION['role'] = $user['role_name'];
          if( $_SESSION['role'] == 'admin')
          {
            header('Location: admin/dashboard.php');
          }
          else
          {
            header('Location: staff/dashboard.php');
          }
         
      } else {
          echo "Invalid password";
          die;
      }
  } else {
      echo "No user found with that username";
  }
}
?>


<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
             <div class="web1">   
              <img src="<?php $base; ?>assets/images/admin.jpg" alt=""  class="rounded-circle" width="50" height="50">
          </div>
                  <!--<span class="d-none d-lg-block">Walstar</span>-->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="" method="post" class="row g-3 needs-validation">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="register.php">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


<?php include 'templates/footer.php'; ?>
