      
                





                <form action="add_new_users_process.php" method="post" class="vh-100 gradient-custom" enctype="multipart/form-data">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-10">
        <div class="card text-white blueTable" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Add New Users</h2>
              <p class="text-white-50 mb-5">Please add your user details</p>

              <div class="row mb-4">
                <div class="col-md-6">
                  <div class="form-outline form-white">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control form-control-lg" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline form-white">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control form-control-lg" required />
                  </div>
                </div>
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label">Email ID</label>
                <input type="email" name="email_id" class="form-control form-control-lg" required />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" required /> 
              </div>

              <div class="row mb-4">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="admin_checkbox" value="1" id="flexCheckAdmin">
                    <label class="form-check-label" for="flexCheckAdmin">
                      Admin
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="admin_checkbox" value="0" id="flexCheckNotAdmin" checked>
                    <label class="form-check-label" for="flexCheckNotAdmin">
                      Not Admin
                    </label>
                  </div>
                </div>
              </div>

              <button class="btn btn-lg px-5 addBtn" type="submit" name="add_user_btn" value="button_clicked" style="color:#000">Add User</button>

              <?php
              if (isset($_GET['error'])) {
                  $errorMessage = $_GET['error'];
                  echo "<p style='color:red; text-align:center; width:100%; font-size: 26px'>" . $errorMessage . "</p>";
              }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>




















                <!-- /.container-fluid -->

            