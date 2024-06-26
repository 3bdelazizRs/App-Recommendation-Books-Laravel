<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Book Store - Book Guide Author, Publication and Store</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div style="position:absolute; z-index:5; top: 20px; right: 20px;" id="liveToast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>

    @if(session('errorConfirmation'))
        <div style="position:absolute; z-index:5; top: 20px; right: 20px;" id="errorToast" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body">
              {{ session('errorConfirmation') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
    @endif

    @if(session('success'))
        <div style="position:absolute; z-index:5; top: 20px; right: 20px;" id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body">
              {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
    @endif
    <!-- Section: Design Block -->
    <section class="vh-100" style="background-color: #32B5F3;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img style="" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="Post" action="{{route('signup')}}">

                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Register page</span>
                  </div>


                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form2Example17" name="username" class="@error('username') is-invalid @enderror form-control form-control-lg" />
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example17" name="email" class="@error('email') is-invalid @enderror form-control form-control-lg" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="password" class="@error('password') is-invalid @enderror form-control form-control-lg" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="confirm_password" class="@error('confirm_password') is-invalid @enderror form-control form-control-lg" />
                    @error('confirm_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="form2Example27">Confirm password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account? <a href="login"
                      style="color: #393f81;">Login here</a></p>
                </form>

                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

  <script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    const toastLiveError = document.getElementById('errorToast')
    const toastLiveSuccess = document.getElementById('successToast')

    if (toastTrigger) {
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
      toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
      })
    }

    @if(session('errorConfirmation'))
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveError)
      toastBootstrap.show()
    @endif

    @if(session('success'))
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveSuccess)
      toastBootstrap.show()
    @endif

  </script>
</body>
</html>