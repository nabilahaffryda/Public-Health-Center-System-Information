<body class="bg-gradient-primary">
<?=
form_open('login/proses_login');
?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-10 col-md-10">

        <div class="card border-0 shadow-lg my-5">
          <div class="card-body p-5">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h3 text-gray-900 mb-4">Sehat Jaya Public Health Center</h1>
                  </div>
                  <form class="form" role="form" autocomplete="off" 
                            id="formLogin" novalidate="" method="POST">
                    <div class="form-group">
                        <label for="uname1">Username</label>
                        <input type="text" 
                        class="form-control form-control-lg rounded-0" 
                        name="uname1" id="uname1" required="">
                        <div class="invalid-feedback">Oops, you missed this one.</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control form-control-lg rounded-0" 
                        name="pwd1" id="pwd1" required="" autocomplete="new-password">
                        <div class="invalid-feedback">Enter your password too!</div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<?=
form_close();
?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>